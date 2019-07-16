#!/bin/sh

sudo mkdir /mnt/yoda
uuid=$(sudo blkid | grep Yoda | cut -d ' ' -f 3 | cut -d '"' -f 2)
echo "UUID=$uuid  /mnt/yoda  ext4  defaults  0  1" | sudo tee -a /etc/fstab

# sudo mkdir /mnt/yabba
# uuid=$(sudo blkid | grep Yabba | cut -d ' ' -f 3 | cut -d '"' -f 2)
# echo "UUID=$uuid  /mnt/yabba  ext4  defaults  0  1" | sudo tee -a /etc/fstab

sudo mount -a
