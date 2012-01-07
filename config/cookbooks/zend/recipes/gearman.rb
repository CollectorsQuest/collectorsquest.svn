include_recipe "zend"
include_recipe "gearman"

execute "Install Gearman PHP module" do
  command "/usr/local/zend/bin/pecl install channel://pecl.php.net/gearman-0.8.1"
  not_if "test -e /usr/local/zend/lib/php_extensions/gearman.so"
end

template "/usr/local/zend/etc/ext.d/gearman.ini" do
  source "gearman.ini"
  mode "0664"
end

link "/usr/local/zend/etc/conf.d/gearman.ini" do
  to "/usr/local/zend/etc/ext.d/gearman.ini"
  not_if "test -L /usr/local/zend/etc/conf.d/gearman.ini"
  notifies :restart, "service[apache]"
end
