modul=modul10

sudo rm -rf /opt/lampp/htdocs/$modul
sudo cp -r ./$modul /opt/lampp/htdocs/$modul
#sudo chown daemon:daemon /opt/lampp/htdocs/$modul/files/
#sudo chown daemon:daemon /opt/lampp/htdocs/$modul/files/*

echo "files copied to $path"
