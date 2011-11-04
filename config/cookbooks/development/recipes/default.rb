# development cookbook

require_recipe "memcached"
require_recipe "development::zend"

package "auto-apt"
package "checkinstall"

template "/etc/hosts" do
  mode "0644"
end
