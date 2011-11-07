link "/etc/apache2/sites-enabled/collectorsquest.dev" do
  to "/www/etc/apache2/sites-available/collectorsquest.dev"
  not_if "test -L /etc/apache2/sites-enabled/collectorsquest.dev"
  notifies :restart, "service[zend]"
end

link "/www/vhosts/collectorsquest.dev" do
  to "/www/vhosts/collectorsquest.com"
  not_if "test -L /www/vhosts/collectorsquest.dev"
end

link "/www/vhosts/collectorsquest.com/releases/trunk" do
  to "/mnt/collectorsquest.com"
  not_if "test -L /www/vhosts/collectorsquest.com/releases/trunk"
end

link "/www/vhosts/collectorsquest.com/current" do
  to "/www/vhosts/collectorsquest.com/releases/trunk"
  not_if "test -L /www/vhosts/collectorsquest.com/current"
end

link "/www/vhosts/collectorsquest.com/current/config/databases.yml" do
  to "/www/vhosts/collectorsquest.com/current/config/databases.dist.yml"
  not_if "test -L /www/vhosts/collectorsquest.com/current/config/databases.yml"
end
