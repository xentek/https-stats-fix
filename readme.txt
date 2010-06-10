=== HTTPS Stats Fix ===
Contributors: xenlab
Donate link: http://j.mp/donate-to-xentek
Tags: https,ssl,statistics,stats
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: trunk
 
If you are using the WordPress.com Stats plugin, and some of your pages use the HTTPS protocol for SSL, then you need this plugin.

== Description ==

If you are using the [WordPress.com Stats plugin](http://wordpress.org/extend/plugins/stats/), and some of your pages use the HTTPS protocol for SSL, then you need this plugin. The WordPress.com Stats plugin will add its remote javascript file with an HTTP link. This plugin detaches this file, and rewrites it with an HTTPS link.

== Installation ==

1. Download the https-stats-fix.zip file, unzip and upload the whole directory to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Why would I want this? =

Until the [WordPress.com Stats plugin](http://wordpress.org/extend/plugins/stats/) fixes itself to use the HTTP or HTTPS protocol dynamically based on how the current page is being viewed, this plugin is necessary. E-Commerce sites especially should benefit from this plugin.

= I want to help with development of this Plugin! =

The project is now hosted on [github.com](http://github.com/xentek/https-stats-fix). Just fork the project and send me a pull request.

[New to git?](http://delicious.com/ericmarden/git)


== Changelog ==

= 0.2 =
* Updated Plugin URI to point to dedicated plugin page where users can get support, ask questions, and provide feedback.

= 0.1 =
Initial Release. All functionality accounted and working.

== Upgrade Notice ==

= 0.2 =
Plugin now links to dedicated plugin page where users can get support, ask questions, and provide feedback.

== License ==

The HTTPS Stats Fix plugin was developed by Eric Marden, and is provided with out warranty under the GPLv2 License. More info and other plugins at: http://xentek.net

Copyright 2010  Eric Marden  (email : wp@xentek.net)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA