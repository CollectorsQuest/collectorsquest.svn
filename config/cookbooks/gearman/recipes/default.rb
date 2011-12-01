template "/etc/apt/sources.list.d/gearman.list"

execute "update apt" do
  command "apt-get update"
  subscribes :run, resources(:template => "/etc/apt/sources.list.d/gearman.list"), :immediately
  action :nothing
end

package "libgearman-dev"
package "gearman-tools"
