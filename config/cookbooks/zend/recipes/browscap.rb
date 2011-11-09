include_recipe "zend"

template "/usr/local/zend/etc/ext.d/browscap.ini" do
  source "browscap.ini"
  mode "0664"
end
remote_file "/usr/local/zend/etc/ext.d/lite_php_browscap.ini" do
  source "http://browsers.garykeith.com/stream.asp?Lite_PHP_BrowsCapINI"
  mode "0664"
end

link "/usr/local/zend/etc/conf.d/browscap.ini" do
  to "/usr/local/zend/etc/ext.d/browscap.ini"
  not_if "test -L /usr/local/zend/etc/conf.d/browscap.ini"
  notifies :restart, "service[zend]"
end
