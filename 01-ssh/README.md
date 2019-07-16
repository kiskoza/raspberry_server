## Set up users and ssh configs

1. Login as pi / raspberry
2. Change hostname
  * `sudo bash -c 'echo armin > /etc/hostname'`
  * `sudo sed -i 's/raspberrypi/armin/g' /etc/hosts`
3. Create a user
  * `sudo adduser kozaroczy`
  * `sudo usermod -aG sudo kozaroczy`
4. Add SSH keys
  * `sudo su kozaroczy`
  * `cd ~`
  * `mkdir .ssh`
  * `cd .ssh`
  * Copy public key to `authorized_keys`
5. Disable password login
  * `sudo nano /etc/ssh/sshd_config`
  * set `PasswordAuthentication` to `no`
  * `sudo service ssh restart`
  * close connection & relogin with normal user
6. Delete default pi user
  * `sudo userdel pi`
  * `sudo rm -rf /home/pi`
