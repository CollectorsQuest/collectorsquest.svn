package "phpmyadmin-zend-server"
template "/usr/local/zend/gui/lighttpd/etc/lighttpd.conf" do
  notifies :restart, "service[zend]"
end

template "/etc/phpmyadmin/config.inc.php" do
  mode "0644"
end
template "/usr/local/zend/etc/ext.d/optimizerplus.ini" do
  mode "0664"
end
template "/usr/local/zend/etc/ext.d/development.ini" do
  mode "0664"
end

link "/usr/local/zend/etc/conf.d/development.ini" do
  to "/usr/local/zend/etc/ext.d/development.ini"
  not_if "test -L /usr/local/zend/etc/conf.d/development.ini"
  notifies :restart, "service[zend]"
end

link "/www/etc/apache2/sites-available/collectorsquest.dev.conf" do
  to "/etc/apache2/sites-enabled/collectorsquest.dev.conf"
  not_if "test -L /etc/apache2/sites-enabled/collectorsquest.dev.conf"
  notifies :restart, "service[zend]"
end
