# main cookbook

require_recipe "ubuntu"
require_recipe "apt"

require_recipe "cron"
require_recipe "subversion"
require_recipe "tmpreaper"

# require_recipe "oh-my-zsh"

package "htop"
package "screen"
