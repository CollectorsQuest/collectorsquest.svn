include_recipe "zend"
include_recipe "gearman"

execute "Install Gearman PHP module" do
  command "/usr/local/zend/bin/pecl install channel://pecl.php.net/gearman-0.8.0"
  not_if "test -e /usr/local/zend/lib/php_extensions/gearman.so"
end
