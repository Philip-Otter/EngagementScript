#! /bin/bash

echo Please enter the engagement name
read input

echo Making engagement folder and subfolders for $input
mkdir ~/Desktop/$input

# Make the top folders
mkdir ~/Desktop/$input/Scan
mkdir ~/Desktop/$input/Loot
mkdir ~/Desktop/$input/Exploit
mkdir ~/Desktop/$input/WWW

# Make the Scan folders
mkdir ~/Desktop/$input/Scan/nmap

# Make the Loot folders
mkdir ~/Desktop/$input/Loot/Creds

# Make the Exploit folders
mkdir ~/Desktop/$input/Exploit/Payload
mkdir ~/Desktop/$input/Exploit/Tools

echo Folders created!
echo HAPPY HACKING!
