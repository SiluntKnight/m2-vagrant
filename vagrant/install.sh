# Install configuration

echo "Copying nginx Config/s"
sudo cp /vagrant/vagrant/.nginx.conf/*.conf /etc/nginx/sites-enabled/ && sudo service nginx restart