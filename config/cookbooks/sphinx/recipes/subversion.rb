include_recipe "build-essential"
include_recipe "percona::client" if node[:sphinx][:use_mysql]
include_recipe "postgresql::client" if node[:sphinx][:use_postgres]

execute "Export Sphinx Search from Subversion" do
  cwd "/tmp"
  command "svn export #{node[:sphinx][:repository]}@#{node[:sphinx][:revision]} sphinx-r#{node[:sphinx][:revision]}"
  not_if "test -e /tmp/sphinx-r#{node[:sphinx][:revision]}"
end

if node[:sphinx][:use_stemmer]
  remote_file "/tmp/libstemmer_c.tgz" do
    source node[:sphinx][:stemmer_url]
    not_if { ::File.exists?("/tmp/libstemmer_c.tgz") }
  end

  execute "Extract libstemmer source" do
    cwd "/tmp"
    command "tar -C /tmp/sphinx-r#{node[:sphinx][:revision]} -zxf libstemmer_c.tgz"
    not_if { ::File.exists?("/tmp/sphinx-r#{node[:sphinx][:revision]}/libstemmer_c/src_c") }
  end
end

bash "Build and Install Sphinx Search from Subversion" do
  cwd "/tmp/sphinx-r#{node[:sphinx][:revision]}"
  code <<-EOH
    ./configure #{node[:sphinx][:configure_flags].join(" ")}
    make -j4
    make install
  EOH
  not_if { ::File.exists?("#{node[:sphinx][:install_path]}/bin/searchd") && system("#{node[:sphinx][:install_path]}/bin/searchd -h | grep -q 'r#{node[:sphinx][:revision]}'") }
end

directory "/var/lib/sphinx" do
  owner "www-data"
  group "www-data"
  mode "0755"
  action :create
end

directory "/var/lib/sphinx/website" do
  owner "www-data"
  group "www-data"
  mode "0755"
  action :create
end

link "/etc/init.d/sphinx" do
  to "/www/init.d/sphinx"
  not_if "test -L /etc/init.d/sphinx"
  notifies :restart, "service[sphinx]"
end

service "sphinx" do
  service_name "sphinx"
  supports :status => false, :start => true, :restart => true
  action [ :enable, :start ]
end
