=== Reach Me ===
Contributors: leanderiversen
Tags: contact, info, social, links
Requires at least: 3.5
Tested up to: 4.9.7
Stable tag: 1.0.7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Reach Me is a simple, yet powerful plugin that allows you to display your contact information anywhere on your website.

== Description ==

Reach Me is a simple, yet powerful plugin that allows you to display your contact information anywhere on your website.

= Supported Languages =
* English
* Norwegian
* Swedish

= Like the plugin? =
If you like the plugin, please review it! Every review is highly appreciated, but if you want to suggest something, please send an email to info@carpe-noctem.no.

== Frequently Asked Questions ==

= How to display the information =

To display anywhere you want in your template:

`
<?php echo get_option('reme_behance'); ?>
<?php echo get_option('reme_facebook'); ?>
<?php echo get_option('reme_github'); ?>
<?php echo get_option('reme_google'); ?>
<?php echo get_option('reme_instagram'); ?>
<?php echo get_option('reme_linkedin'); ?>
<?php echo get_option('reme_reddit'); ?>
<?php echo get_option('reme_snapchat'); ?>
<?php echo get_option('reme_tripadvisor'); ?>
<?php echo get_option('reme_twitter'); ?>
<?php echo get_option('reme_vk'); ?>
<?php echo get_option('reme_youtube'); ?>
`
`
<?php echo get_option('reme_email'); ?>
<?php echo get_option('reme_fax'); ?>
<?php echo get_option('reme_mobile'); ?>
<?php echo get_option('reme_phone'); ?>
<?php echo get_option('reme_skype'); ?>
`
`
<?php echo get_option('reme_country'); ?>
<?php echo get_option('reme_state'); ?>
<?php echo get_option('reme_county'); ?>
<?php echo get_option('reme_city'); ?>
<?php echo get_option('reme_street'); ?>
<?php echo get_option('reme_zip'); ?>
`

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Navigate to "Reach Me", then fill in the information.
4. Use `<?php echo get_option('reme_facebook'); ?>` to display the information in your theme.


== Changelog ==

= 1.0.7 =
* Support for WordPress 4.8
* Improved translations
* Minor fixes

= 1.0.6 =
* Support for Wordpress 4.7

= 1.0.5 =
* Updated translations

= 1.0.4 =
* Added new network:
    * Tripadvisor

* Added new hierarchy of address:
    * County

= 1.0.3 =
* Enhancements:
    * The settings page has been through massive under the hood improvements
    * Changed YouTube icon from logo to play button  
    * Support for Wordpress 4.6

* Added new networks:
    * Behance
    * Reddit

= 1.0.2 =
* Now loading Font Awesome locally
* Updated translations
* Added screenshot

= 1.0.1 =
* Added social network: Github
* Updated translations
* Updated readme

= 1.0 =
* Initial release

== Screenshots ==

1. This is the page where you enter your contact information.