# web cookbook

require_recipe "zend"
require_recipe "zend::xsendfile"
require_recipe "zend::browscap"
require_recipe "zend::passenger"

execute "Checkout /www from subversion" do
  command "svn co -q --non-interactive --trust-server-cert svn://184.73.239.190/server /www"
  not_if "test -d /www"
end

bash "Update /www from subversion" do
  code <<-EOH
    svn cleanup /www
    svn up -q --ignore-externals --non-interactive --trust-server-cert /www
  EOH
end

bash "Update /www permissions" do
  code <<-EOH
    chmod -R 777 /www/tmp
    chown -R www-data:www-data /www/tmp
    chown -R www-data:www-data /www/logs
  EOH
end

execute "Update all PEAR packages" do
  command "/usr/local/zend/bin/pear upgrade-all"
end

bash "Install Symfony 1.4.x from PEAR" do
  code <<-EOH
    /usr/local/zend/bin/pear update-channels
    /usr/local/zend/bin/pear channel-discover pear.symfony-project.com
    /usr/local/zend/bin/pear upgrade symfony/symfony
  EOH
end

service "zend" do
  action :restart
end
