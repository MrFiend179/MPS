
![ALT](https://www.flubel.com/imagestohost/MPS.PNG)
# MPS 
#### Minecraft Packet sender
A meticulously crafted PHP solution designed for assessing the performance and resilience of Minecraft servers. This script is intended for responsible and ethical use in controlled testing environments to simulate connection scenarios and evaluate a server's handling capabilities.

## Features
### 1. Joining and Disconnecting Packets
The script generates and sends purposeful packets to the Minecraft server, simulating the actions of joining and disconnecting. This enables users to evaluate the server's responsiveness to connection and disconnection events.

### 2. Varied Load Testing
With the ability to specify the number of bots (count) and the desired protocol, users can conduct load tests tailored to their specific requirements. The script supports controlled initiation and termination of connections, ensuring a controlled testing environment.

## Usage
To utilize the Minecraft Server Stress Test Script, follow these simple steps:

- Ensure that PHP is installed on your system.
- Run the script with the following command:

`php main.php <ip> <port> <count> <protocol>`

whereas ip is the ip of server and port is also of servers, count is the bot count and protocol is the server version listed below

## Legal Notice
Usage of this script for any form of malicious intent, including Distributed Denial of Service (DDoS) attacks, is strictly prohibited. Users are responsible for ensuring that their activities comply with legal regulations and the terms of service of the Minecraft server under test. I do not take any responsibility for this as it is just for educational purposes.


## Minecraft Versions and Protocols

- **1.20.2:** Protocol 764
- **1.20.1:** Protocol 763
- **1.20:** Protocol 763
- **1.19.4:** Protocol 762
- **1.19.3:** Protocol 761
- **1.19.2:** Protocol 760
- **1.19.1:** Protocol 760
- **1.19:** Protocol 759
- **1.18.2:** Protocol 758
- **1.18.1:** Protocol 757
- **1.18:** Protocol 757
- **1.17.1:** Protocol 756
- **1.17:** Protocol 755
- **1.16.5:** Protocol 754
- **1.16.4:** Protocol 754
- **1.16.3:** Protocol 753
- **1.16.2:** Protocol 751
- **1.16.1:** Protocol 736
- **1.16:** Protocol 735
- **1.15.2:** Protocol 578
- **1.15.1:** Protocol 575
- **1.15:** Protocol 573
- **1.14.4:** Protocol 498
- **1.14.3:** Protocol 490
- **1.14.2:** Protocol 485
- **1.14.1:** Protocol 480
- **1.14:** Protocol 477

Note: Protocol values may change with updates. for detailed info visit this (https://wiki.vg/Protocol_version_numbers)

## Port
Generally the port of most servers is **25565**. If it is not mentioned try this otherwise visit this site for more details on server (https://mcsrvstat.us/)

## CPS (Connections per second)
CPS, or Connections per Second, is a metric that quantifies the rate at which connections are established by the script. It is calculated using the formula:

`CPS= Bot Count/Time taken`

This Script runs at about **1.5** seconds, so if you send **10** bots at a rate of **1.5** seconds the CPS would be around **6.667**
​


## Contact me
- [Discord-Server](https://discord.gg/Ga4pHSEcjK)
- [Website](https://flubel.tech)

**Discord Username**

- fiend#6998

**Email**
- ibjl1108@gmail.com
