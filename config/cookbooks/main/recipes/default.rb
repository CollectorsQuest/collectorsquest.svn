# main cookbook

require_recipe "ubuntu"
require_recipe "apt"

require_recipe "cron"
require_recipe "tmpreaper"

# Packages for optimizing JPEG and PNG images
package "libjpeg-progs"
package "optipng"

# require_recipe "oh-my-zsh"

package "htop"
package "screen"
