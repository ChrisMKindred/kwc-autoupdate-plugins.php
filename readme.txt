=== Plugin Name ===
Contributors: chrismkindred
Donate link: http://www.kindredwebconsulting.com/
Tags: plugin, updates
Requires at least: 4.4
Tested up to: 5.2
Requires PHP: 5.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
This forces WordPress to automatically update Plugins and Core without asking.

== Description ==
 
Allows all major and minor updates to be ran using the WordPress cron.
 
 
== Installation ==
  
1. Upload `kwc-autoupdate-plugins` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `&amp;amp;lt;?php do_action('plugin_name_hook'); ?&amp;amp;gt;` in your templates
 
== Changelog ==
 
See [changelog.md](./changelog.md)
 