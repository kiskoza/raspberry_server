## qBittorrent

1. Install qBittorrent and create a new user
  * `sudo apt-get install qbittorrent-nox`
  * `sudo useradd -rm -d /home/qbittorrent qbittorrent`
  * Use the new user with `sudo -u qbittorrent -H -s`
2. Add network drives
  * `mkdir /home/qbittorrent/downloads`
  * `mkdir /home/qbittorrent/incomplete`
  * `echo "192.168.42.95:/data2/downloads /home/qbittorrent/downloads nfs defaults 0 0" | sudo tee -a /etc/fstab`
  * `sudo mount -a`
2. Set up the environment
  * Start it with `qbittorrent-nox` to generate files
  * Use `/home/qbittorrent/downloads` as downloads folder
  * Use `/home/qbittorrent/incomplete` as incomplete folder
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
