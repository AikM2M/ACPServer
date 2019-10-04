# ACPServer
OneM2M Compliant Distributed ACP Server with PHP based web interface to be used with MiddleNode. The ACP server contains three policy points Policy Information Point (PIP), Policy Retrival Point (PRP) and Policy Decision Point (PDP) in accordance with OneM2M.

## Prerequisites

Apache2, SQLite3, PHP7.3 on Raspberry Pi 3B+

Run this command to check if you already have apache2 installed
```
$ apache2 -v
```
If not installed then install apache2
```
$ sudo apt-get install apache2
```

Run this command to check if you already have PHP7.3 installed
```
$ php -v
```
If not installed then install PHP7.3
```
$ sudo apt-get install php7.3
```
Install required packages
```
$ sudo apt install php7.3-cli php7.3-common php7.3-curl php7.3-mbstring php7.3-mysql php7.3-xml
```
Set appropriate directory permissions
```
$ sudo chown www-data:www-data /var/www
$ sudo chmod 775 /var/www #permission to write to this directory
$ sudo usermod -a -G www-data pi #add the “Pi” user to the “www-data” group
```
Install SQLite3 module for PHP.
```
$ sudo apt-get install php7.3-sqlite3
```
Make sure the correct package is installed and apache restarted. After that run following command:
```
$ sudo systemctl restart apache2
```
If that didn't work:
Then, remove the semicolon before these lines or correct the name for the extension in php.ini to:
```
$ extension=sqlite3.so
$ extension=pdo_sqlite.so
```
And restart apache again:
```
$ sudo systemctl restart apache2
```
Install OpenSSL Library using the following command
```
$ sudo apt-get install libssl-dev
```

### Installation

- Copy the "PDPserver" folder in /home/pi/. 
- Copy the "html" folder in /var/www/
- Build and run the program in current directory using following commands 

```
$ cd PDPserver/
$ make
$ ./ACPserver
``` 


### System Architechture

![Alt text](SystemArchitechture.jpg?raw=true "System Architechture")

## Authors

* **Muhammad Rehan** - *Initial work* - [rehan199](https://github.com/rehan199)

## oneM2M Project Funding Agency
- National Centre for Cyber Security (NCCS) HEC Gov. Pakistan
## oneM2M Team 
- Internet of Things Research & Innovation Lab (IRIL) KICS UET Lahore, Pakistan
## Team Members
- Dr. Ghalib A. Shah (Principal Investigator)
- Dr. Ali Hammad Akbar (Co-Principal Investigator)
- Bilal Afzal (Previous Team Leader)
- Muhammad Ahsan (Team Leader)
- Bilal Imran (Sr. Research Officer)
- Muhammad Rehan (Research Officer)
- Asim Tanwir (Research Officer)
