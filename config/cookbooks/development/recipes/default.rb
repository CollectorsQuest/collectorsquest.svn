# development cookbook

require_recipe "memcached"
require_recipe "development::zend"
require_recipe "development::vhosts"

service "apache" do
  action :restart
end

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
    gem install capistrano
    gem install capifony
    gem update
  EOH
end
