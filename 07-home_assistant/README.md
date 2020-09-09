## Home Assistant

1. Install dependencies and create a new user
  * `sudo apt-get install python3 python3-venv python3-pip libffi-dev libssl-dev`
  * `sudo useradd --system --create-home --home /home/homeassistant homeassistant`
2. Install Home Assisant
  * Use the new user with `sudo -u homeassistant -H -s`
  * `cd ~`
  * `python3 -m venv virtualenv`
  * `source virtualenv/bin/activate`
  * `python3 -m pip install wheel`
  * `pip3 install homeassistant==<VERSION>`
3. Get the configs
  * `git clone https://github.com/kiskoza/homeassistant.git .homeassistant`
  * `git submodule init`
  * `git submodule update`
  * Then copy the `secrets.yaml` and `known_devices.yaml` to the config dir
  * Copy the `.storage` folder and clean up the cached data
  * Start it manually with `hass`
4. Start Home Assistant automatically
  * `sudo cp home_assistant.service /etc/systemd/system/home_assistant.service`
  * `sudo systemctl --system daemon-reload`
  * `sudo systemctl enable home_assistant.service`
5. Set up Nginx
  * `sudo cp nginx.conf /etc/nginx/sites-available/home_assistant.conf`
  * `sudo ln -s /etc/nginx/sites-available/home_assistant.conf /etc/nginx/sites-enabled/home_assistant.conf`
  * `sudo rm /etc/nginx/sites-enabled/default`
6. Update Home Assistant
  * `sudo -u homeassistant -H -s`
  * `cd ~`
  * `source bin/activate`
  * `pip3 install --upgrade homeassistant`
