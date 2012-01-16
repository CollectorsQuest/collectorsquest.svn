package "openjdk-6-jre"
package "openjdk-6-jdk"

remote_file "/tmp/thrift-0.5.0.tar.gz" do
  source "http://archive.apache.org/dist/incubator/thrift/0.5.0-incubating/thrift-0.5.0.tar.gz"
  mode "0664"
end

execute "Extract Thrift source" do
  cwd "/tmp"
  command "tar -zxvf /tmp/thrift-0.5.0.tar.gz"
  not_if { ::File.exists?("/tmp/thrift-0.5.0") }
end

bash "Build and Install Thrift" do
  cwd "/tmp/thrift-0.5.0"
  code <<-EOH
    ./configure --with-ruby=no --with-python=no --with-php=yes --with-php_extension=no
    make && make install
  EOH
  not_if { ::File.exists?("/usr/local/bin/thrift") }
end

remote_file "/tmp/flockdb-1.8.0-alpha3.tar.gz" do
  source "https://github.com/twitter/flockdb/tarball/version-1.8.0-alpha3"
  mode "0664"
end

execute "Extract flockdb source" do
  cwd "/tmp"
  command "tar -zxvf /tmp/flockdb-1.8.0-alpha3.tar.gz"
  not_if { ::File.exists?("/tmp/twitter-flockdb-303db1a") }
end

bash "Build and Install flockdb" do
  cwd "/tmp/twitter-flockdb-303db1a"
  code <<-EOH
    NO_TESTS=1 /opt/bin/sbt clean update package-dist
    cp -r ./dist/flockdb /opt/flockdb
  EOH
  not_if { ::File.exists?("/opt/flockdb") }
end
