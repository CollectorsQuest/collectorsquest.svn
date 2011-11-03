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
