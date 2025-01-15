sudo apt install python3-gpiozero
Install
curl https://raw.githubusercontent.com/fire1ce/raspberry-pi-pir-motion-display-control/main/install.sh | bash

Uninstall
curl https://raw.githubusercontent.com/fire1ce/raspberry-pi-pir-motion-display-control/main/uninstall.sh | bash


Config
File

/usr/local/bin/motion-display-control.py
You can change Data Pin of the PIR Sensor at gpio_pin value You can change Delay at display_delay value

Line

motion = Motion(gpio_pin=4, display_delay=60, verbose=False)
Restart the service to apply changes

sudo systemctl restart power_button.service


Debug
In order to allow verbose debug change the following

File

/usr/local/bin/motion-display-control.py
Line

Set verbose value to True

motion = Motion(gpio_pin=4, display_delay=60, verbose=True)
Restart the service to apply changes

sudo systemctl restart motion-display-control.service

Check if service is running
sudo systemctl status motion-display-control.service
