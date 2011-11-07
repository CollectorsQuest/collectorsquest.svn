set :application, "collectorsquest"
set :domain,      "#{application}.com"
set :deploy_to,   "/www/vhosts/#{domain}"

set :repository,  "file://home/svn/collectorsquest/vhosts/#{domain}"
set :scm,         :subversion
set :user,        "ubuntu"
set :use_sudo,    true

set :symfony_lib, "/www/libs/symfony-1.3.x"
set :php_bin,     "/usr/local/zend/bin/php"

role :web,        "collectorsquest.com"                         # Your HTTP server, Apache/etc
role :app,        "collectorsquest.com"                         # This may be the same as your `Web` server
role :db,         "collectorsquest.com", :primary => true       # This is where Rails migrations will run

set  :keep_releases,  3
