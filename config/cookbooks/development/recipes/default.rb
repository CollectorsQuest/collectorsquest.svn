# development cookbook

require_recipe "memcached"
require_recipe "development::zend"
require_recipe "development::vhosts"

template "/etc/hosts" do
  mode "0644"
end

package "auto-apt"
package "checkinstall"
package "rubygems"
package "libopenssl-ruby"
package "capistrano"

bash "Install Capifony" do
  code <<-EOH
    gem update
    gem install capifony
  EOH
end
