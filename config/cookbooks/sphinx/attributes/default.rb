default[:sphinx][:install_path] = "/opt/sphinx"
default[:sphinx][:version]      = '2.0.3-release'
default[:sphinx][:revision]     = '3051'
default[:sphinx][:url]          = "http://sphinxsearch.com/files/sphinx-#{sphinx[:version]}.tar.gz"
default[:sphinx][:repository]   = "http://sphinxsearch.googlecode.com/svn/trunk/"
default[:sphinx][:stemmer_url]  = "http://snowball.tartarus.org/dist/libstemmer_c.tgz"

# tunable options
default[:sphinx][:use_stemmer]  = true
default[:sphinx][:use_mysql]    = true
default[:sphinx][:use_postgres] = false

default[:sphinx][:configure_flags] = [
  "'--prefix=#{sphinx[:install_path]}'",
  "#{sphinx[:use_stemmer] ? '--with-stemmer' : '--without-stemmer'}",
  "#{sphinx[:use_mysql] ? '--with-mysql' : '--without-mysql'}",
  "#{sphinx[:use_postgres] ? '--with-pgsql' : '--without-pgsql'}"
]
