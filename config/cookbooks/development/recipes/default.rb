# main cookbook
# This cookbook includes and sets up a server with apache, mysql,
# rails, and passenger.

package "auto-apt"
package "checkinstall"

package "phpmyadmin-zend-server"
template "/usr/local/zend/gui/lighttpd/etc/lighttpd.conf" do
  notifies :restart, "service[zend]"
end

template "/etc/hosts" do
  mode "0644"
end
template "/etc/phpmyadmin/config.inc.php" do
  mode "0644"
end

link "/www/etc/apache2/sites-available/collectorsquest.dev.conf" do
  to "/etc/apache2/sites-enabled/collectorsquest.dev.conf"
  not_if "test -L /etc/apache2/sites-enabled/collectorsquest.dev.conf"
  notifies :restart, "service[zend]"
end
