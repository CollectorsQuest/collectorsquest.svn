include_recipe "zend"

# TODO: download, build and install the extension
# https://github.com/preinheimer/xhprof/tarball/master

template "/usr/local/zend/etc/ext.d/xhprof.ini" do
  source "xhprof.ini"
  mode "0664"
end

link "/usr/local/zend/etc/conf.d/xhprof.ini" do
  to "/usr/local/zend/etc/ext.d/xhprof.ini"
  not_if "test -L /usr/local/zend/etc/conf.d/xhprof.ini"
  notifies :restart, "service[apache]"
end
