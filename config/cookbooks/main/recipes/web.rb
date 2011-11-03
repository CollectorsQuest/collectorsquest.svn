# web cookbook

require_recipe "zend"
require_recipe "zend::xsendfile"

service "zend" do
  action :restart
end
