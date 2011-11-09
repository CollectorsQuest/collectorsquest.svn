package "rubygems"
package "ruby-dev"
package "libopenssl-ruby"
package "libcurl4-openssl-dev"

bash "Installing/Updating gems" do
  code <<-EOH
    /usr/bin/gem install --no-rdoc --no-ri --version=1.3.6 rubygems-update
    /var/lib/gems/1.8/bin/update_rubygems --version=1.3.6

    /usr/bin/gem install --no-rdoc --no-ri bundle
    /usr/bin/gem install --no-rdoc --no-ri passenger
    /usr/bin/gem install --no-rdoc --no-ri rake
  EOH
end

directory "/tmp/bundler" do
  owner "root"
  group "root"
  mode 0755
end
template "/tmp/bundler/Gemfile" do
  source "Gemfile"
  mode "0644"
end
template "/tmp/bundler/Gemfile.lock" do
  source "Gemfile.lock"
  mode "0644"
end
execute "Install deployinator gems" do
  cwd "/tmp/bundler/"
  command "/usr/bin/bundle install"
end

execute "Install Passenger Apache2 module" do
  command "/usr/bin/gem install --no-rdoc --no-ri passenger && /usr/bin/passenger-install-apache2-module -a"
  not_if "test -e /usr/lib/ruby/gems/1.8/gems/passenger-3.0.9/ext/apache2/mod_passenger.so"
end

template "/etc/apache2/mods-available/passenger.conf" do
  source "passenger.conf"
  mode "0644"
end
template "/etc/apache2/mods-available/passenger.load" do
  source "passenger.load"
  mode "0644"
end

link "/etc/apache2/mods-enabled/passenger.conf" do
  to "/etc/apache2/mods-available/passenger.conf"
  not_if "test -L /etc/apache2/mods-enabled/passenger.conf"
end
link "/etc/apache2/mods-enabled/passenger.load" do
  to "/etc/apache2/mods-available/passenger.load"
  not_if "test -L /etc/apache2/mods-enabled/passenger.load"
end

service "apache" do
  action :restart
end
