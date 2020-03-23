## Grocy

1. Install dependencies
  * `apt-get install php7.3-fpm php7.3-gd php7.3-mbstring php7.3-sqlite3 php7.3-xml`
2. Create a new user
  * `sudo useradd -rm -d /home/grocy grocy`
  * `sudo usermod -G www-data grocy`
  * Use the new user with `sudo -u grocy -H -s`
2. Install project
  * `git clone --branch v2.6.1 https://github.com/grocy/grocy.git www-data`
  * `cd www-data`
  * `sudo chgrp -R www-data data/`
  * `cp config.php /home/grocy/www-data/data/config.php`
  * Install Composer & Yarn
  * `php composher.phar install`
  * `yarn install`
2. Set up Nginx
  * `sudo cp nginx.conf /etc/nginx/sites-available/grocy.conf`
  * `sudo ln -s /etc/nginx/sites-available/grocy.conf /etc/nginx/sites-enabled/grocy.conf`
  * Run certbot
