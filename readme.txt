=== HTTPS ===
Contributors: xenlab
Donate link: http://j.mp/donate-to-xentek
Tags: https,ssl,statistics,stats
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: trunk
 
If you are using the WordPress.com Stats plugin, and some of your pages use the HTTPS protocol for SSL, then you need this plugin.

== Description ==

If you are using the WordPress.com Stats plugin, and some of your pages use the HTTPS protocol for SSL, then you need this plugin. The WordPress.com Stats plugin will add its remote javascript file with an HTTP link. This plugin detaches this file, and rewrites it with an HTTPS link.

== Installation ==

1. Download the https-stats-fix.zip file, unzip and upload the whole directory to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Why would I want this? =

Until the [WordPress.com Stats]() fixes itself to use HTTP or HTTPS based on how the page is being viewed

= I want to help with development of this Plugin! =

The project is now hosted on [github.com](http://github.com/xentek/https-stats-fix). Just fork the project and send me a pull request.

[New to git?](http://delicious.com/ericmarden/git)


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`