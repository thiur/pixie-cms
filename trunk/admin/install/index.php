<?php
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Installer.                                               //
//*****************************************************************//

	error_reporting(0);	// turn off error reporting
	extract($_REQUEST, EXTR_PREFIX_ALL, 'pixie'); // access to form vars if register globals is off
			
	switch($pixie_step) {
		
		// step 2
		// create the config file, chmod the correct directories and install basic db stucture 
		case "2":
			
			$conn = mysql_connect($pixie_host, $pixie_username, $pixie_password);
			
			if (!$conn) {
				$error = "Pixie could not connect to your database, check your details below.";
			} else {
				$checkdb = mysql_select_db($pixie_database);
				if (!$checkdb) {
					$error = "Pixie could not connect to your database, make sure you have created a database with the name: $database.";
				} else {
					
					// write data to config file
					if (is_writable("../config.php")) {
						$fh = fopen("../config.php", "w");
						$data = 
						"<?php
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Configuration settings.                                  //
//*****************************************************************//

// MySQL settings //
\$pixieconfig['db'] = '$pixie_database';
\$pixieconfig['user'] = '$pixie_username';
\$pixieconfig['pass'] = '$pixie_password';
\$pixieconfig['host'] = '$pixie_host';
\$pixieconfig['table_prefix'] = '$pixie_prefix';
?>";
						fwrite($fh, $data);
						fclose($fh);
						
						// chmod config.php so that the database details don't get exposed by accident
						chmod("../config.php", 0640);

						// load in the required libraries
						
						include "../config.php";
						include "../lib/lib_db.php";
						
						// install the base layer sql
						
						// pixie_bad_behaviour table
						$sql = "						
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_bad_behavior` (
							`id` int(11) NOT NULL auto_increment,
							`ip` text collate utf8_unicode_ci NOT NULL,
							`date` datetime NOT NULL default '0000-00-00 00:00:00',
							`request_method` text collate utf8_unicode_ci NOT NULL,
							`request_uri` text collate utf8_unicode_ci NOT NULL,
							`server_protocol` text collate utf8_unicode_ci NOT NULL,
							`http_headers` text collate utf8_unicode_ci NOT NULL,
							`user_agent` text collate utf8_unicode_ci NOT NULL,
							`request_entity` text collate utf8_unicode_ci NOT NULL,
							`key` text collate utf8_unicode_ci NOT NULL,
							PRIMARY KEY  (`id`),
							KEY `ip` (`ip`(15)),
							KEY `user_agent` (`user_agent`(10))
						) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
						";
						
						$ok = safe_query($sql);
						
						// pixie_core table
						$sql1 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_core` (
							`page_id` smallint(11) NOT NULL auto_increment,
							`page_type` set('dynamic','static','module','plugin') collate utf8_unicode_ci NOT NULL default '',
							`page_name` varchar(40) collate utf8_unicode_ci NOT NULL default '',
							`page_display_name` varchar(40) collate utf8_unicode_ci NOT NULL default '',
							`page_description` longtext collate utf8_unicode_ci NOT NULL,
							`page_blocks` varchar(200) collate utf8_unicode_ci default NULL,
							`page_content` longtext collate utf8_unicode_ci,
							`page_views` int(12) default '0',
							`page_parent` varchar(40) collate utf8_unicode_ci default NULL,
							`privs` tinyint(2) NOT NULL default '2',
							`publish` set('yes','no') collate utf8_unicode_ci NOT NULL default 'yes',
							`public` set('yes','no') collate utf8_unicode_ci NOT NULL default 'no',
							`in_navigation` set('yes','no') collate utf8_unicode_ci NOT NULL default 'yes',
							`page_order` int(3) default '0',
							`searchable` set('yes','no') collate utf8_unicode_ci NOT NULL default 'yes',
							`last_modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
							PRIMARY KEY  (`page_id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0 AUTO_INCREMENT=3 ;
						";
						
						$ok = safe_query($sql1);
						
						// pixie_core data for 404 and comments plugin
						$sql2 = "
							INSERT INTO `".$pixie_prefix."pixie_core` (`page_id`, `page_type`, `page_name`, `page_display_name`, `page_description`, `page_blocks`, `page_content`, `page_views`, `page_parent`, `privs`, `publish`, `public`, `in_navigation`, `page_order`, `searchable`, `last_modified`) VALUES
							(1, 'static', '404', 'Error 404', 'Page not found.', '', '<p>The page you are looking for cannot be found.</p>', 11, '', 2, 'yes', 'yes', 'no', 0, 'no', '2008-01-01 00:00:11'),
							(2, 'plugin', 'comments', 'Comments', 'This plugin enables commenting on dynamic pages.', '', '', 1, '', 2, 'yes', 'yes', 'no', 0, 'no', '2008-01-01 00:00:11');	
						";
						
						$ok = safe_query($sql2);
						
						// pixie_dynamic_posts table
						$sql3 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_dynamic_posts` (
					  		`post_id` int(11) NOT NULL auto_increment,
					  		`page_id` int(11) NOT NULL default '0',
					  		`posted` timestamp NOT NULL default '0000-00-00 00:00:00',
					  		`title` varchar(235) collate utf8_unicode_ci NOT NULL default '',
					  		`content` longtext collate utf8_unicode_ci NOT NULL,
					  		`tags` varchar(200) collate utf8_unicode_ci NOT NULL default '',
					  		`public` set('yes','no') collate utf8_unicode_ci NOT NULL default 'no',
					  		`comments` set('yes','no') collate utf8_unicode_ci NOT NULL default 'yes',
					  		`author` varchar(64) collate utf8_unicode_ci NOT NULL default '',
					  		`last_modified` timestamp NULL default CURRENT_TIMESTAMP,
					  		`post_views` int(12) default NULL,
					  		`post_slug` varchar(255) collate utf8_unicode_ci NOT NULL default '',
					  		PRIMARY KEY  (`post_id`),
					  		UNIQUE KEY `id` (`post_id`)
						) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
						";
						
						$ok = safe_query($sql3);
						
						// pixie_dynamic_settings table
						$sql4 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_dynamic_settings` (
						  	`settings_id` int(11) NOT NULL auto_increment,
						  	`page_id` int(11) NOT NULL default '0',
						  	`posts_per_page` int(2) NOT NULL default '0',
						  	`rss` set('yes','no') collate utf8_unicode_ci NOT NULL default 'yes',
						  	PRIMARY KEY  (`settings_id`)
						) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0 AUTO_INCREMENT=1 ;			
						";
						
						$ok = safe_query($sql4);
						
						// pixie_files table
						$sql5 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_files` (
						  	`file_id` smallint(6) NOT NULL auto_increment,
						  	`file_name` varchar(80) collate utf8_unicode_ci NOT NULL default '',
						  	`file_extension` varchar(5) collate utf8_unicode_ci NOT NULL default '',
						  	`file_type` set('Video','Image','Audio','Other') collate utf8_unicode_ci NOT NULL default '',
						  	`tags` varchar(200) collate utf8_unicode_ci NOT NULL default '',
						  	PRIMARY KEY  (`file_id`),
						  	UNIQUE KEY `id` (`file_id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=0 AUTO_INCREMENT=5 ;
						";
			
						$ok = safe_query($sql5);
						
						// insert the default files supplied with pixie
						$sql6 = "
							INSERT INTO `".$pixie_prefix."pixie_files` (`file_id`, `file_name`, `file_extension`, `file_type`, `tags`) VALUES
							(1, 'rss_feed_icon.gif', 'gif', 'Image', 'rss feed icon'),
							(2, 'no_grav.jpg', 'jpg', 'Image', 'gravitar icon'),
							(3, 'apple_touch_icon.jpg', 'jpg', 'Image', 'icon apple touch'),
							(4, 'apple_touch_icon_pixie.jpg', 'jpg', 'Image', 'icon apple touch pixie');
						";
						
						$ok = safe_query($sql6);
						
						// pixie_log table
						$sql7 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_log` (
						  	`log_id` int(6) NOT NULL auto_increment,
						  	`user_id` varchar(40) collate utf8_unicode_ci NOT NULL default '',
						  	`user_ip` varchar(15) collate utf8_unicode_ci NOT NULL default '',
						  	`log_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
						  	`log_type` set('referral','system') collate utf8_unicode_ci NOT NULL default '',
						  	`log_message` varchar(250) collate utf8_unicode_ci NOT NULL default '',
						  	`log_icon` varchar(20) collate utf8_unicode_ci NOT NULL default '',
						  	`log_important` set('yes','no') collate utf8_unicode_ci NOT NULL default 'no',
						  	PRIMARY KEY  (`log_id`),
						  	UNIQUE KEY `id` (`log_id`)
						) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;						
						";
						
						$ok = safe_query($sql7);
						
						// pixie_log_users_online table
						$sql8 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_log_users_online` (
						  	`visitor_id` int(11) NOT NULL auto_increment,
						  	`visitor` varchar(15) collate utf8_unicode_ci NOT NULL default '',
						  	`last_visit` int(14) NOT NULL default '0',
						  	PRIMARY KEY  (`visitor_id`)
						) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
						";

						$ok = safe_query($sql8);
						
						// pixie_module_comments table
						$sql9 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_module_comments` (
						  	`comments_id` int(5) NOT NULL auto_increment,
						  	`post_id` int(5) NOT NULL default '0',
						  	`posted` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
						  	`name` varchar(80) collate utf8_unicode_ci NOT NULL default '',
						  	`email` varchar(80) collate utf8_unicode_ci NOT NULL default '',
						  	`url` varchar(80) collate utf8_unicode_ci default NULL,
						  	`comment` longtext collate utf8_unicode_ci NOT NULL,
						  	`admin_user` set('yes','no') collate utf8_unicode_ci NOT NULL default 'no',
						  	PRIMARY KEY  (`comments_id`)
						) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;						
						";
						
						$ok = safe_query($sql9);
						
						// pixie_settings table
						$sql10 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_settings` (
						  	`settings_id` smallint(6) NOT NULL auto_increment,
						  	`site_name` varchar(80) collate utf8_unicode_ci NOT NULL default '',
						  	`site_keywords` longtext collate utf8_unicode_ci NOT NULL,
						  	`site_url` varchar(255) collate utf8_unicode_ci NOT NULL default '',
						  	`site_theme` varchar(80) collate utf8_unicode_ci NOT NULL default '',
						  	`site_copyright` varchar(80) collate utf8_unicode_ci NOT NULL default '',
						  	`site_author` varchar(80) collate utf8_unicode_ci NOT NULL default '',
						  	`default_page` varchar(40) collate utf8_unicode_ci NOT NULL default '',
						  	`clean_urls` set('yes','no') collate utf8_unicode_ci NOT NULL default 'yes',
						  	`version` varchar(5) collate utf8_unicode_ci NOT NULL default '',
						  	`language` varchar(6) collate utf8_unicode_ci NOT NULL default '',
						  	`timezone` varchar(6) collate utf8_unicode_ci NOT NULL default '',
						  	`dst` set('yes','no') collate utf8_unicode_ci NOT NULL default 'yes',
						  	`date_format` varchar(30) collate utf8_unicode_ci NOT NULL default '',
						  	`logs_expire` varchar(3) collate utf8_unicode_ci NOT NULL default '',
						  	`rich_text_editor` tinyint(1) NOT NULL default '0',
						  	`system_message` tinytext collate utf8_unicode_ci NOT NULL,
						  	`last_backup` varchar(120) collate utf8_unicode_ci NOT NULL default '',
						  	`bb2_installed` SET('yes','no') collate utf8_unicode_ci NOT NULL DEFAULT 'no',
						  	PRIMARY KEY  (`settings_id`)
						) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;						
						";
						
						$ok = safe_query($sql10);
						
						// pixie_users table
						$sql11 = "
						CREATE TABLE IF NOT EXISTS `".$pixie_prefix."pixie_users` (
						  	`user_id` int(4) NOT NULL auto_increment,
						  	`user_name` varchar(64) collate utf8_unicode_ci NOT NULL default '',
						  	`realname` varchar(64) collate utf8_unicode_ci NOT NULL default '',
						  	`street` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`town` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`county` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`country` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`post_code` varchar(20) collate utf8_unicode_ci NOT NULL default '',
						  	`telephone` varchar(30) collate utf8_unicode_ci NOT NULL default '',
						  	`email` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`website` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`biography` mediumtext collate utf8_unicode_ci NOT NULL,
						  	`occupation` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`link_1` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`link_2` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`link_3` varchar(100) collate utf8_unicode_ci NOT NULL default '',
						  	`privs` tinyint(2) NOT NULL default '1',
						  	`pass` varchar(128) collate utf8_unicode_ci NOT NULL default '',
						  	`nonce` varchar(64) collate utf8_unicode_ci NOT NULL default '',
						  	`user_hits` int(7) NOT NULL default '0',
						  	`last_access` timestamp NOT NULL default CURRENT_TIMESTAMP,
						  	PRIMARY KEY  (`user_id`),
						  	UNIQUE KEY `name` (`user_name`)
						) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci PACK_KEYS=1 AUTO_INCREMENT=1 ;						
						";

						$ok = safe_query($sql11);
						
						// place dummy settings into settings table
						$sql12 = "
							INSERT INTO `".$pixie_prefix."pixie_settings` (`settings_id`, `site_name`, `site_keywords`, `site_url`, `site_theme`, `site_copyright`, `site_author`, `default_page`, `clean_urls`, `version`, `language`, `timezone`, `dst`, `date_format`, `logs_expire`, `rich_text_editor`, `system_message`, `last_backup`) VALUES
							(1, '-', '-', '-', '-', '', '', '-', 'no', '-', '-', '-', 'yes', '-', '-', 1, '', '');
						";
						
						$ok = safe_query($sql12);	
						
						if (!$ok) {
							$error = "Core database schema could not be created.";
						}
						
					} else {
						$error = "Pixie is unable to write to your config.php file, you may need to manually change the file using a text editor and FTP or change the permissions of the file.<br/> <a href=\"http://code.google.com/p/pixie-cms/w/list\" title=\"Pixie Wiki\">View the help files for more information</a>.";
					}
					
				} 
			}
							
			if (!$error) {
				$step = "2";
			} else {
				$step = "1";
			}
		
		break;
		
		case "3":	
		
			include "../config.php";           		// load cofiguration
			include "../lib/lib_db.php";       		// load libraries order is important
			include "../lang/".$pixie_langu.".php";       // get the language file
			include "../lib/lib_misc.php";     		//			
			include "../lib/lib_date.php";			//
			include "../lib/lib_validate.php"; 		// 
			include "../lib/lib_core.php";          //
			include "../lib/lib_backup.php";	    //
	
			$check = new Validator ();
			if (!$pixie_sitename) { $error .= $lang['site_name_error']." |"; $scream[] = "name"; }
			if (!$pixie_url) { $error .= $lang['site_url_error']." |"; $scream[] = "url"; }
			// we turn off url validation so localhost is accepted
			//if (!$check->validateURL($url, $lang['site_url_error']." |")) { $scream[] = "url"; }
			if ($check->foundErrors()) { $error .= $check->listErrors("x"); }

			$table_name = "pixie_settings";
			$site_url_last = $pixie_url{strlen($pixie_url)-1};
			
  			$err = explode("|",$error);
  			$error = $err[0];
  			
  			if (!$error) {
  			  	if ($site_url_last != "/") {
  					$pixie_url = $pixie_url."/";
  				}
  				
  				// site defaults
  				// save settings to the database
				$ok = safe_update(
					"pixie_settings", 
					"site_name = '$pixie_sitename', 
					 site_url = '$pixie_url',
					 site_theme = 'itheme',
					 version = '1.04',
					 language = '$pixie_langu',
					 dst = 'no',
					 timezone = '+0',
					 date_format = '%Oe %B %Y, %H:%M',
					 logs_expire = '30',
					 rich_text_editor = '1',
					 system_message = 'Welcome to Pixie...(you can clear this message in your Pixie settings).', 
					 site_keywords = 'pixie, demo, getpixie, small, simple, site, maker, www.getpixie.co.uk, cms, content, management, system, easy, interface, design, microformats, web, standards, themes, css, xhtml, scott, evans, toggle, php, mysql, pisky', 
					 default_page = 'none',
					 clean_urls = 'no'",
					 "settings_id ='1'"
				);
				
				// create .htaccess for clean URLs
				$fh = fopen("../../.htaccess", "w");
				$clean = str_replace("/admin/install/index.php","",$_SERVER["REQUEST_URI"]);
				if (!$clean) {
					$clean = "/";
				}
				$data = 
"#
# 	Apache-PHP-Pixie .htaccess
#

#	Pixie Powered (www.getpixie.co.uk)
#	Licence: GNU General Public License v3                   		 
#	Copyright (C) Scott Evans   

#	This program is free software: you can redistribute it and/or modify
#	it under the terms of the GNU General Public License as published by
#	the Free Software Foundation, either version 3 of the License, or
#	(at your option) any later version.

#	This program is distributed in the hope that it will be useful,
#	but WITHOUT ANY WARRANTY; without even the implied warranty of
#	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
#	GNU General Public License for more details.

#	You should have received a copy of the GNU General Public License
#	along with this program. If not, see http://www.gnu.org/licenses/   

#	www.getpixie.co.uk                          

# Set the default handler.
DirectoryIndex index.php

# Start the rewrite rules
<IfModule mod_rewrite.c>
   Options +FollowSymLinks
  RewriteEngine On

  # If your site can be accessed both with and without the 'www.' prefix, you
  # can use one of the following settings to redirect users to your preferred
  # URL, either WITH or WITHOUT the 'www.' prefix.
  # By default your users can usually access your site using http://www.yoursite.com
  # or http://yoursite.com but it is highly advised that you use the
  # actual domain http://yoursite.com by redirecting to it using this file
  # because http://www.yoursite.com is simply a subdomain of http://yoursite.com
  # the www. is pointless in most applications.
  # Choose ONLY one option:

  # To redirect all users to access the site WITH the 'www.' prefix,
  # (http://yoursite.com/... will be redirected to http://www.yoursite.com/...)
  # adapt and uncomment the following two lines :
  # RewriteCond %{HTTP_HOST} ^yoursite\.com$ [NC]
  # RewriteRule ^(.*)$ http://www.yoursite.com/$1 [L,R=301]

  # This next one is the one everyone is advised to select.

  # To redirect all users to access the site WITHOUT the 'www.' prefix,
  # (http://www.yoursite.com/... will be redirected to http://yoursite.com/...)
  # uncomment and adapt the following two lines :
  # RewriteCond %{HTTP_HOST} ^www\.yoursite\.com$ [NC]
  # RewriteRule ^(.*)$ http://yoursite.com/$1 [L,R=301]

  # Modify the RewriteBase if you are using pixie in a subdirectory or in a
  # VirtualDocumentRoot and the rewrite rules are not working properly.
  # For example if your site is at http://yoursite.com/pixie uncomment and
  # modify the following line:
    RewriteBase $clean

# Protect files and directories from prying eyes.
<FilesMatch \"\.(engine|inc|info|install|module|profile|test|po|sh|.*sql|theme|tpl(\.php)?|xtmpl|svn-base)$|^(code-style\.pl|Entries.*|Repository|Root|Tag|Template|all-wcprops|entries|format)$\">
  Order allow,deny
</FilesMatch>

# Don't show directory listings for URLs which map to a directory.
Options -Indexes

# Make Pixie handle any 404 errors.
ErrorDocument 404 /index.php

# Force simple error message for requests for non-existent favicon.ico.
<Files favicon.ico>
  # There is no end quote below, for compatibility with Apache 1.3.
  ErrorDocument 404 \"The requested file favicon.ico was not found.
</Files>

########## Begin - Rewrite rules to block out some common exploits
## If you experience problems on your site block out the operations listed below
## This attempts to block the most common type of exploit `attempts.`

## Deny access to extension xml files (comment out to de-activate)
<Files ~ \"\.xml$\">
Order allow,deny
Deny from all
Satisfy all
</Files>
## End of deny access to extension xml files

# Block out any script trying to base64_encode junk to send via URL
RewriteCond %{QUERY_STRING} base64_encode.*\(.*\) [OR]
# Block out any script that includes a <script> tag in URL
RewriteCond %{QUERY_STRING} (\<|%3C).*script.*(\>|%3E) [NC,OR]
# Block out any script trying to set a PHP GLOBALS variable via URL
RewriteCond %{QUERY_STRING} GLOBALS(=|\[|\%[0-9A-Z]{0,2}) [OR]
# Block out any script trying to modify a _REQUEST variable via URL
RewriteCond %{QUERY_STRING} _REQUEST(=|\[|\%[0-9A-Z]{0,2})
# Send all blocked request to homepage with 403 Forbidden error!
RewriteRule ^(.*)$ index.php [F,L]
#
########## End - Rewrite rules to block out some common exploits

# Start Pixie's core mod rewrite rules
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^(.*) index.php?%{QUERY_STRING} [L]
# End Pixie's core mod rewrite rules

# End the rewrite rules
</IfModule>

# Extra features

# Requires mod_expires to be enabled.
<IfModule mod_expires.c>
  # Enable expirations.
  ExpiresActive On

  # Cache all files for 2 weeks after access (A).
  ExpiresDefault A1209600

  # Do not cache dynamically generated pages.
  ExpiresByType text/html A1
</IfModule>";
				fwrite($fh, $data);
				fclose($fh);
				
  			}
  			
  			// load external sql
  			$file = $pixie_type."_db.sql";
  			$file_content = file($file);
   			foreach($file_content as $sql_line){
   				// adjust for table prefix
   				$sql_line = str_replace("pixie_", $pixieconfig['table_prefix']."pixie_", $sql_line);
      			safe_query($sql_line);
			}
			  			
  			// chmod the files folder
  			chmod("../../files/", 0777);
			chmod("../../files/audio/", 0777);
			chmod("../../files/cache/", 0777);
			chmod("../../files/images/", 0777);
			chmod("../../files/other/", 0777);
			chmod("../../files/sqlbackups/", 0777);

			if (!$error) {
				$step = "3";
			} else {
				$step = "2";
			}
		
		break;
		
		// step 4 - finish 
		case "4":
		
			include "../config.php";           		// load configuration
			include "../lib/lib_db.php";       		// load libraries order is important
			
			$prefs = get_prefs();           		// prefs as an array
			extract($prefs);                		// add prefs to globals
			include "../lang/".$pixie_langu.".php";       // get the language file
			include "../lib/lib_misc.php";     		//			
			include "../lib/lib_date.php";			//
			include "../lib/lib_validate.php"; 		// 
			include "../lib/lib_core.php";          //
			include "../lib/lib_backup.php";	    //
			include "../lib/lib_logs.php";          //

			$check = new Validator ();

			if ($pixie_username == "") { $error1 .= $lang['user_name_missing']." |"; $scream[] = "uname"; }
			$pixie_username = str_replace(" ", "", preg_replace('/\s\s+/', ' ', trim($pixie_username)));
			if ($pixie_name == "") { $error1 .= $lang['user_realname_missing']." |"; $scream[] = "realname"; }
			if ($pixie_password == "") { $error1 .= $lang['user_password_missing']." |"; $scream[] = "realname"; }
			if (!$check->validateEmail($pixie_email,$pixie_lang['user_email_error']." |")) { $scream[] = "email"; }
			if ($check->foundErrors()) { $error1 .= $check->listErrors("x"); }
			
			$nonce = md5( uniqid( rand(), true ) );
			$sql = "user_name = '$pixie_username', realname = '$pixie_name', email = '$pixie_email', pass = password(lower('$pixie_password')), nonce = '$nonce', privs = '3', link_1 = 'http://www.toggle.uk.com', link_2 = 'http://www.getpixie.co.uk', link_3 = 'http://www.iwouldlikeawebsite.com', website='$site_url', `biography`=''"; 
			$ok = safe_insert("pixie_users", $sql);
			$ok = safe_update("pixie_settings", "site_author = '$pixie_name', site_copyright = '$pixie_name'", "settings_id ='1'");		
			
			$err = explode("|",$error1);
			$error = $err[0];

			// upgrade sql
			$file = "upgrade.sql";
			$file_content = file($file);
			foreach($file_content as $sql_line){
				// adjust prefix
				$sql_line = str_replace("pixie_", $pixieconfig['table_prefix']."pixie_", $sql_line);
				safe_query($sql_line);
			}
			
			// log the install
			logme("Pixie was installed... remember to delete the install directory on your server.","yes","error");
			
			if (!$error) {
				
				// needs to be added to language file
				$emessage = "	
Congratulations, Pixie is now installed. Here are your login details:

username: $pixie_username
password: $pixie_password

visit: ".$site_url."admin to login.";
			 
				$subject = "Pixie";
				mail($pixie_email, $subject, $emessage);
				
				$step = "4";
			} else {
				$step = "3";
			}
		break;
		
		default:
		
			if (filesize("../config.php") > 30) {		   // check for config
			header( "Location: ../../admin/" ); exit();}   // redirect to pixie if its found
			
		break;
	
	}
	
	if (!$pixie_step) {
		$pixie_step = "1";
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<!-- 
	Pixie Powered (www.getpixie.co.uk)
	Licence: GNU General Public License v3                   		 
	Copyright (C) <?php print date("Y");?>, Scott Evans   
	                             
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see http://www.gnu.org/licenses/   
    
	www.getpixie.co.uk                          
	-->
	
	<title>Pixie (www.getpixie.co.uk) - Installer</title>
	
	<!-- meta tags -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="toggle, binary, html, xhtml, css, php, xml, mysql, flash, actionscript, action, script, web standards, accessibility, scott, evans, scott evans, sunk, media, www.getpixie.co.uk, scripts, news, portfolio, shop, blog, web, design, print, identity, logo, designer, fonts, typography, england, uk, london, united kingdom, staines, middlesex, computers, mac, apple, osx, os x, windows, linux, itx, mini, pc, gadgets, itunes, mp3, technology, www.toggle.uk.com" />
	<meta name="description" content="http://www.toggle.uk.com/ - web and print design portfolio for scott evans (uk)." />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 days" />
	<meta name="author" content="Scott Evans" />
  	<meta name="copyright" content="Scott Evans" />
  
	<!-- CSS -->
	<link rel="stylesheet" href="../admin/theme/style.php" type="text/css" media="screen"  />
	<style type="text/css">
		body, html
			{
			height: auto;
			background: #191919;
			}
		
		#bg
			{
			background: #191919 url(background.jpg) 7px 0px no-repeat;
			width: 790px;
			min-height: 670px;
			margin: 0 auto;
			padding-top: 100px;
			}
			
		#placeholder
			{
			border: 5px solid #e1e1e1;
			clear: left;
			padding: 15px 30px 20px 30px;
			margin: 0 auto;
			background-color: #fff;
			width: 400px;
			line-height: 15pt;
			min-height: 480px;
			}
		
		#logo
			{
			margin: 0 auto;
			width:470px;
			display: block;
			}
		
		p
			{
			font-size: 0.8em;
			padding: 15px 0;
			}
		
		legend
			{
			color: #109bd4;
			}
		
		.form_text
			{
			width: 322px;
			}

		.form_item_drop select
			{
			width: 333px;
			padding: 2px;
			}
		
		label
			{
			float: left;
			}
			
		.form_help
			{
			float: left;
			font-size: 0.7em;
			padding-left: 5px;
			position: relative;
			top: 2px;
			}
		
		.form_item_drop
			{
			clear: both;
			}
		
		.help
			{
			margin: 0;
			padding: 0;
			color: #898989;
			}

		.error, .notice, .success    
			{ 
			padding: 15px; 
			border: 2px solid #ddd; 
			width: 436px;
			margin: 0 auto;
			}
			
		.error      
			{ 
			background: #FBE3E4;
			color: #D12F19;
			border-color: #FBC2C4; 
			}
			
		.notice     
			{ 
			background: #FFF6BF; 
			color: #817134; 
			border-color: #FFD324; 
			}
			
		.success    
			{ 
			background: #E6EFC2; 
			color: #529214; 
			border-color: #C6D880; 
			}

	</style>

	<!-- site icons-->
	<link rel="Shortcut Icon" type="image/x-icon" href="../favicon.ico" />
	<link rel="apple-touch-icon" href="../../files/images/apple_touch_icon.jpg"/>
	
</head>

<body>
	<div id="bg">
	<?php
	if ($error) {
		print "<p class=\"error\">$error</p>";
	}
	?>
	<img src="banner.gif" alt="Pixie logo" id="logo">
	<div id="placeholder">
		<?php
		if ($pixie_step == "4") {
		?>
		<h3>Finished...</h3>	
		<?php
		} else {
		?>
		<h3>Installer (step <?php print $pixie_step; ?> of 3)</h3>
		<?php
		}		 
		switch($pixie_step) {
			case "4":
				global $site_url;
		?>	
		<p>Congratulations your site is now setup and ready to use, if you want more themes and modules
		make sure you visit the <a href="http://www.getpixie.co.uk" title="Pixie">Pixie website</a>. Remember to delete the install directory within Pixie to secure your site.</p>
		
		<p>Now <a href="<?php print $site_url."admin/"; ?>" title="Login to Pixie">login and start adding content</a> to your site...</p>
		<?php
			break;
			case "3":
		?>
		
		<p>Nearly finished! Last step is to create the "Super User" account for Pixie:</p>
	
		<form action="index.php" method="post" id="form_user" class="form">
			<fieldset>
			<legend>Super User information</legend>
				<div class="form_row">
					<div class="form_label"><label for="username">Username <span class="form_required">*</span></label><span class="form_help">Used to login to Pixie</span></div>
					<div class="form_item"><input type="text" class="form_text" name="username" value="<?php print $pixie_username ?>" size="40" maxlength="80" id="username" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="name">Your Name <span class="form_required">*</span></label><span class="form_help">Displayed to visitors to your site</span></div>
					<div class="form_item"><input type="text" class="form_text" name="name" value="<?php print $pixie_name ?>" size="40" maxlength="80" id="name" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="email">Email <span class="form_required">*</span></label><span class="form_help">Your email address</span></div>
					<div class="form_item"><input type="text" class="form_text" name="email" value="<?php print $pixie_email ?>" size="40" maxlength="80" id="email" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="password">Password <span class="form_required">*</span></label><span class="form_help">A strong password</span></div>
					<div class="form_item"><input type="password" class="form_text" name="password" value="<?php print $pixie_password ?>" size="40" maxlength="80" id="password" /></div>
				</div>
				<div class="form_row_button" id="form_button">
					<input type="hidden" name="step" value="4" />
					<input type="submit" name="next" class="form_submit" value="Finish &raquo;" />
				</div>
				<div class="safclear"></div>
			</fieldset>	
		</form>
	
		<?php
			break;
			
			case "2":
			
			$url1 = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			$url1 = str_replace("admin/install/index.php","",$url1);
		?>
		<p>Now Pixie needs some details about your site (you will have access to more settings once Pixie is installed):</p>
		
		<form action="index.php" method="post" id="form_site" class="form">
			<fieldset>
			<legend>Site information</legend>
				<div class="form_row">
					<div class="form_label"><label for="langu">Language <span class="form_required">*</span></label><span class="form_help">Select the language you wish to use.</span></div>
					<div class="form_item_drop">
						<select class="form_select" name="langu" id="langu">
							<option selected="selected" value="en-gb">English</option>
							<option value="fi-fi">Suomen</option>		<!--	Finnish		-->
							<option value="fr">Fran&ccedil;ais</option>	<!--	French		-->
							<option value="it">Italiano</option>		<!--	Italian		-->
							<option value="pl">Polska</option>		<!--	Polish		-->
							<option value="pt">Portugu&ecirc;s</option>	<!--	Portuguese	-->
							<option value="es-cl">Espa&ntilde;ol</option>	<!--	Spanish		-->
							<option value="se-sv">Svenska</option>		<!--	Swedish		-->
						</select>
					</div>
				</div>		
				<div class="form_row ">
					<div class="form_label"><label for="url">Site url <span class="form_required">*</span></label><span class="form_help">The full URL to your Pixie site</span></div>
					<div class="form_item"><input type="text" class="form_text" name="url" value="<?php if ($pixie_url) { print $pixie_url; } else { print $url1; }?>" size="40" maxlength="80" id="url" /></div>
				</div>
				<div class="form_row ">
					<div class="form_label"><label for="site_name">Site Name <span class="form_required">*</span></label><span class="form_help">What would you like your site to be called?</span></div>
					<div class="form_item"><input type="text" class="form_text" name="sitename" value="<?php if ($pixie_sitename) { print $pixie_sitename; } else { print "My Pixie Site"; } ?>" size="40" maxlength="80" id="site_name" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="type">Site type <span class="form_required">*</span></label><span class="form_help">What type of site are you after?</span></div>
					<div class="form_item_drop">
						<select class="form_select" name="type" id="type">
							<option value="0">An empty one... I will start afresh.</option>
							<option selected="selected" value="1">Just a blog please (recommended).</option>
							<option value="2">Install everything... I want to try it all!</option>
						</select>
					</div>
				</div>
				<p class="help">Please note you can completely edit your choice once Pixie is installed, the site types are to save your time when setting up different websites.<br />As Pixie matures so will the list of possibilites.<br /><a href="http://code.google.com/p/pixie-cms/" title="Pixie on Google code">Help us develop</a> Pixie!</p> 
				<div class="form_row_button" id="form_button">
					<input type="hidden" name="step" value="3" />
					<input type="submit" name="next" class="form_submit" value="Next &raquo;" />
				</div>
				<div class="safclear"></div>
			</fieldset>	
		</form>
		
		<?php
			break;
			
			default:
		?>
		<p>Welcome to the <a href="http://www.getpixie.co.uk" alt="Get Pixie!">Pixie</a> installer, just a few steps to go until you have your own Pixie powered website. Firstly we need your database details:</p>
		
		<form action="index.php" method="post" id="form_db" class="form">
			<fieldset>
			<legend>Database information</legend>		
				<div class="form_row ">
					<div class="form_label"><label for="host">Host <span class="form_required">*</span></label><span class="form_help">Usually ok as "localhost"</span></div>
					<div class="form_item"><input type="text" class="form_text" name="host" value="<?php if ($pixie_host) { print $pixie_host; } else { print "localhost"; }?>" size="40" maxlength="80" id="host" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="username">Database Username <span class="form_required">*</span></label></div>
					<div class="form_item"><input type="text" class="form_text" name="username" value="<?php print $pixie_username;?>" size="40" maxlength="80" id="username" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="password">Database Password <span class="form_required">*</span></label></div>
					<div class="form_item"><input type="password" class="form_text" name="password" value="<?php print $pixie_password;?>" size="40" maxlength="80" id="password" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="database">Database Name <span class="form_required">*</span></label></div>
					<div class="form_item"><input type="text" class="form_text" name="database" value="<?php print $pixie_database;?>" size="40" maxlength="80" id="database" /></div>
				</div>
				<div class="form_row">
					<div class="form_label"><label for="prefix">Database Table Prefix <span class="form_optional">(optional)</span></label></div>
					<div class="form_item"><input type="text" class="form_text" name="prefix" value="<?php print $pixie_prefix;?>" size="40" maxlength="80" id="prefix" /><span class="form_help">Example : pixie_</span></div>
				</div>
				<div class="form_row_button" id="form_button">
					<input type="hidden" name="step" value="2" />
					<input type="submit" name="next" class="form_submit" value="Next &raquo;" />
				</div>
				<div class="safclear"></div>
			</fieldset>	
 		</form>
 		<?php
 			break;
 		}
 		?>
 		
	</div>
	</div>
</body>
</html>
	
