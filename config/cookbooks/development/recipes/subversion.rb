execute "install dominik-stadler key" do
  command "apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 29E526FC"
  not_if "apt-key list | grep 29E526FC"
end

template "/etc/apt/sources.list.d/subversion.list"

execute "update apt" do
  command "apt-get update"
  subscribes :run, resources(:template => "/etc/apt/sources.list.d/subversion.list"), :immediately
  action :nothing
end
