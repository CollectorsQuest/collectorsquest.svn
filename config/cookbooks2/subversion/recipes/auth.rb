directory "/root/.subversion/auth/svn.simple" do
  mode 0700
  owner "root"
  group "root"
  action :create
  recursive true
end

template "/root/.subversion/auth/svn.simple/1af3aeb1c737077f8c1c445912e191be" do
  source "1af3aeb1c737077f8c1c445912e191be"
  owner "root"
  group "root"
  mode "0644"
end
