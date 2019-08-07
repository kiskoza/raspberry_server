## Home Assistant

1. Install dependencies and create a new user
  * `sudo apt-get install python3 python3-venv python3-pip libffi-dev libssl-dev`
  * `sudo useradd -rm -d /mnt/yoda/homeassistant homeassistant`
2. Install Home Assisant
  * Use the new user with `sudo -u homeassistant -H -s`
  * `cd ~`
  * `python3 -m venv .`
  * `source bin/activate`
  * `python3 -m pip install wheel`
  * `pip3 install homeassistant`
  * `git clone https://github.com/kiskoza/homeassistant.git .homeassistant`
  * `git submodule init`
  * `git submodule update`
  * Then copy the `secrets.yaml` and `known_devices.yaml` to the config dir
  * Start it manually with `hass`
3. Start Home Assistant automatically
  * `sudo cp home_assistant.service /etc/systemd/system/home_assistant.service`
  * `sudo systemctl --system daemon-reload`
  * `sudo systemctl enable home_assistant.service`
4. Set up Nginx
  * `sudo cp home_assistant.conf /etc/nginx/sites-available/`
  * `sudo ln -s /etc/nginx/sites-available/home_assistant.conf /etc/nginx/sites-enabled/home_assistant.conf`
  * `sudo rm /etc/nginx/sites-enabled/default`
6. Update Home Assistant
  * `sudo -u homeassistant -H -s`
  * `cd ~`
  * `source bin/activate`
  * `pip3 install --upgrade homeassistant`
