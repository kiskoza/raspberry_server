## Calibre

1. Install Calibre and create a new user
  * `sudo apt-get install calibre`
  * `sudo useradd -rm -d /mnt/yoda/calibre calibre`
  * Use the new user with `sudo -u calibre -H -s`
2. Make the library
  * `mkdir library`
  * Copy the existing books there
  * Start server with `calibre-server  /mnt/yoda/calibre/library`
3. Set up users with `calibre-server --manage-users`
4. Start Calibre automatically
  * `sudo cp calibre.service /etc/systemd/system/calibre.service`
  * `sudo systemctl --system daemon-reload`
  * `sudo systemctl enable calibre.service`
5. Set up Nginx
  * `sudo cp calibre.conf /etc/nginx/sites-available/`
  * `sudo ln -s /etc/nginx/sites-available/calibre.conf /etc/nginx/sites-enabled/calibre.conf`
  * Run certbot
