#!/bin/sh

cd "$(dirname "$0")"

## Nginx

# Install nginx
sudo apt-get install nginx
# Allow https on IPv4
sudo ufw allow to 0.0.0.0/0 port 443
# Add a default config that disables all requests
sudo cp default.conf /etc/nginx/sites-available/default
# Restart service to apply
sudo service nginx restart
