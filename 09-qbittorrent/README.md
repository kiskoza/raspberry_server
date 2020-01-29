## Calibre

1. Install Calibre and create a new user
  * `sudo apt-get install qbittorrent-nox`
  * `sudo useradd -rm -d /home/qbittorrent qbittorrent`
  * Use the new user with `sudo -u qbittorrent -H -s`
2. Set up the environment
  * Start it with `qbittorrent-nox` to generate files
  * Use the `/mnt/christa/downloads` external drive
  * `mkdir /mnt/christa/downloads/.incomplete`
  * `cp qBittorrent.conf /home/qbittorrent/.config/qBittorrent/qBittorrent.conf`
  * Change auth from admin / adminadmin
3. Start qBittorrent automatically
  * `sudo cp qbittorrent.service /etc/systemd/system/qbittorrent.service`
  * `sudo systemctl --system daemon-reload`
  * `sudo systemctl enable qbittorrent.service`
4. Set up Nginx
  * `sudo cp nginx.conf /etc/nginx/sites-available/qbittorrent.conf`
  * `sudo ln -s /etc/nginx/sites-available/qbittorrent.conf /etc/nginx/sites-enabled/qbittorrent.conf`
  * Run certbot
