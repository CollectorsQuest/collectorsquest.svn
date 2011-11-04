# web cookbook

require_recipe "zend"
require_recipe "zend::xsendfile"

service "zend" do
  action :restart
end

execute "Checkout /www from subversion" do
  command "svn co -q --non-interactive --no-auth-cache --trust-server-cert --username=development --password=hmBiv9799qEgvN svn://184.73.239.190/server /www"
  not_if "test -d /www"
end

execute "Update /www from subversion" do
  command "svn up -q --non-interactive --no-auth-cache --trust-server-cert --username=development --password=hmBiv9799qEgvN /www"
end
