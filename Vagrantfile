Vagrant.configure("2") do |config|
  config.vm.provision "shell", inline: "echo Hello"

  config.vm.define "web" do |web|
    web.vm.box = "ubuntu/jammy64"
    web.vm.network "private_network", ip: "192.168.56.6"
    web.vm.synced_folder "/home/momo/Documents/DevOpsLessions", "/vagrant-data"
    web.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.cpus = 2
      end
      web.vm.provision "shell", inline: <<-SHELL
      apt update
      apt-get install -y apache2
    SHELL
  end

  config.vm.define "db" do |db|
    db.vm.box = "ubuntu/jammy64"
    db.vm.network "private_network", ip: "192.168.56.7"
    db.vm.provider "virtualbox" do |vb|
         vb.memory = "1024"
         vb.cpus = "1"
       end
      db.vm.provision "shell", inline: <<-SHELL
      apt update
      apt-get install -y mysql-server
      SHELL
end
end
