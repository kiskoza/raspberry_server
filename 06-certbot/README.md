## Certbot

1. `sudo apt-get install certbot python-certbot-nginx`
2. `sudo ufw allow to 0.0.0.0/0 port 80`
3. Allow basic 80 access on nginx
4. `sudo certbot --nginx`
5. `sudo ufw delete allow 80`

Update certs:
1. `sudo ufw allow to 0.0.0.0/0 port 80`
2. `sudo certbot renew`
3. `sudo ufw delete allow 80`
