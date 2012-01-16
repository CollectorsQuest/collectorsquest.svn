package "openjdk-6-jre"

remote_file "/tmp/neo4j-community-1.5-unix.tar.gz" do
  source "http://dist.neo4j.org/neo4j-community-1.5-unix.tar.gz"
  mode "0664"
end

execute "Extract Neo4j" do
  cwd "/tmp"
  command "tar -zxvf /tmp/neo4j-community-1.5-unix.tar.gz"
  not_if { ::File.exists?("/tmp/neo4j-community-1.5") }
end

bash "Move and Install Neo4j" do
  cwd "/tmp"
  code <<-EOH
    cp -r /tmp/neo4j-community-1.5 /opt/neo4j
    cd /opt/neo4j && ./bin/neo4j install
  EOH
  not_if { ::File.exists?("/etc/init.d/neo4j-service") }
end
