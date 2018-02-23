#!/bin/sh
sudo mkdir -p /var/www/html/frames/
sudo fswebcam -l 1 --no-banner /var/www/html/frames/frame_%S.jpg 1> /tmp/fswebcam 2> /tmp/fswebcam
sudo reboot
