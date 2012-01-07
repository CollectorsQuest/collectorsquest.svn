template "/etc/apt/sources.list.d/gearman.list"

execute "install drizzle-developers key" do
  command "apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 06899068"
  not_if "apt-key list | grep 06899068"
end

execute "install german-developers key" do
  command "apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 1C73E014 06899068"
  not_if "apt-key list | grep 1C73E014"
end

execute "update apt" do
  command "apt-get update"
  subscribes :run, resources(:template => "/etc/apt/sources.list.d/gearman.list"), :immediately
  action :nothing
end

package "libgearman-dev"
package "gearman-tools"
