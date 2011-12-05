require_recipe "zend"

execute "Install Gearman PHP module" do
  command "/usr/local/zend/bin/pecl install channel://pecl.php.net/functional-0.0.5"
  not_if "test -e /usr/local/zend/lib/php_extensions/functional.so"
end

template "/usr/local/zend/etc/ext.d/functional.ini" do
  source "functional.ini"
  mode "0664"
end

link "/usr/local/zend/etc/conf.d/functional.ini" do
  to "/usr/local/zend/etc/ext.d/functional.ini"
  not_if "test -L /usr/local/zend/etc/conf.d/functional.ini"
  notifies :restart, "service[apache]"
end
