#
# Cookbook Name:: zend
# Recipe:: default
#
# Copyright 2011, Heavy Water Software Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

include_recipe "zend"
package "apache2-prefork-dev"

remote_file "/tmp/mod_xsendfile-0.12.tar.gz" do
  source "https://tn123.org/mod_xsendfile/mod_xsendfile-0.12.tar.gz"
  not_if { ::File.exists?("/tmp/mod_xsendfile-0.12.tar.gz") }
end

execute "Extract mod_xsendfile source" do
  cwd "/tmp"
  command "tar -zxf /tmp/mod_xsendfile-0.12.tar.gz"
  not_if { ::File.exists?("/tmp/mod_xsendfile-0.12") }
end

bash "Build and Install mod_xsendfile" do
  cwd "/tmp/mod_xsendfile-0.12"
  code "apxs2 -cia mod_xsendfile.c"
  not_if { ::File.exists?("/usr/lib/apache2/modules/mod_xsendfile.so") }
end
