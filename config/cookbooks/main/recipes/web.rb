# web cookbook

require_recipe "zend"
require_recipe "zend::xsendfile"
require_recipe "zend::browscap"

service "zend" do
  action :restart
end

execute "Checkout /www from subversion" do
  command "svn co -q --non-interactive --no-auth-cache --trust-server-cert --username=development --password=hmBiv9799qEgvN svn://184.73.239.190/server /www"
  not_if "test -d /www"
end

execute "Update /www from subversion" do
  command "svn up -q --ignore-externals --non-interactive --no-auth-cache --trust-server-cert --username=development --password=hmBiv9799qEgvN /www"
end

execute "Update all PEAR packages" do
  command "/usr/local/zend/bin/pear upgrade-all"
end

bash "Install Symfony 1.3.x from PEAR" do
  code <<-EOH
    /usr/local/zend/bin/pear channel-discover pear.symfony-project.com
    /usr/local/zend/bin/pear install symfony/symfony-1.3.11
  EOH
end
