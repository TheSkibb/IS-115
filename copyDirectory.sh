modul=modul8

sudo rm -rf /opt/lampp/htdocs/$modul
sudo cp -r ./$modul /opt/lampp/htdocs/$modul

echo "files copied to $path"
