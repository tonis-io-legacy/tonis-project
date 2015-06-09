Vagrant.configure("2") do |config|
  config.vm.define "nginx" do |v|
    v.vm.provider "docker" do |d|
      d.image = "czeeb/tonis-docker-nginx"
      d.ports = ["8080:80"]
      #d.cmd ["setuser", "www-data", "composer", "install", "--working-dir", "/srv/www"]
    end
    v.vm.synced_folder "./", "/srv/www"
  end
end
