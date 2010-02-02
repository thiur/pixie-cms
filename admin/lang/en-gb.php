<?php
if (!defined('DIRECT_ACCESS')) { header( 'Location: ../../' ); exit(); }
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Language File (English GB).                              //
//*****************************************************************//

$lang = array(
	// system
	'skip_to' => 'Skip to content',
	'view_site' => 'View site',
	'logout' => 'Logout',
	'license' => 'Released under the',
	'tag_line' => 'The Small, Simple, Site Maker',
	'latest_referrals' => 'Latest Referrals',
	'latest_activity' => 'Latest Activity',
	'feed_subscribe' => 'Subscribe',
	'rss_feed' => 'RSS Feed',
	'when' => 'When?',
	'who' => 'Who?',
	'what' => 'What?',
	'from' => 'From?',
	'switch_to' => 'Switch to',
	'a_few_seconds' => 'A few seconds',
	'a_minute' => '1 minute',
	'minutes' => 'minutes',
	'a_hour' => '1 hour',
	'hours' => 'hours',
	'a_day' => '1 day',
	'days' => 'days',
	'ago' => 'ago.',
	'user' => 'User',
	'to' => 'to',
	'database_backup' => 'Database Backup',
	'database_info' => 'Make sure your database is backed up frequently. Use the button on the right to manually backup your database. The backups are stored in the files/sqlbackups/ folder and can be downloaded from the list below. Your most recent backup is highlighted.',
	'database_backups' => 'Backups',
	'download' => 'Download',
	'delete' => 'Delete',
	'delete_file' => 'Delete file?',
	'theme_info' => 'The currently installed themes are listed below. You can install more themes by uploading a theme into the admin/themes folder. More themes can be downloaded from <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a> or you can easily create your own using CSS. The current site theme is highlighted.',
	'theme_pick' => 'Pick a theme for your site',
	'theme_apply' => 'Apply this theme',
	'sure_delete_page' => 'Are you sure you want to delete the',
	'sure_empty_page' => 'Are you sure you want to empty the',
	'settings_page' => 'page',
	'settings_plugin' => 'plugin',
	'plugins' => 'Plugins',
	'plugins_info' => 'Plugins bring extra functionality to certain pages of your website.',
	'empty' => 'Empty',
	'oops' => 'Ooops!',
	'feature_disabled' => 'This feature is currently disabled. The next version of Pixie will have this sorted!',
	'pages_in_navigation' => 'Pages in navigation',
	'pages_in_navigation_info' => 'These pages appear in your websites navigation, to change the order of your pages drag them up and down using the arrows. The page at the top of the list will appear first in your navigation.', 
	'pages_outside_navigation' => 'Pages outside navigation',
	'pages_outside_navigation_info' => 'These pages are visible to the public but do not appear in your websites navigation.', 
	'pages_disabled' => 'Disabled pages',
	'pages_disabled_info' => 'These pages are not viewable.',
	'edit_user' => 'Edit User',
	'create_user' => 'Create a new user',
	'create_user_info' => 'An email we be sent to the new user with details of how to login and a randomly generated password.',
	'user_info' => 'Below is a list of the users who have access to Pixie. You can add more users to help manage your site by using the form on the right. The super user account is highlighted.',
	'user_delete_confirm' => 'Are you sure you want to delete user :',
	'tags' => 'Tags',
	'upload' => 'Upload',
	'file_manager_info' => 'The maximum file size is set to 100Mb. Please be patient when submitting large files.',
	'file_manager_latest' => 'Latest Uploads',
	'file_manager_tagged' => 'All files tagged:',
	'filename' => 'Filename',
	'filedate' => 'Date Modified',
	'results_from' => 'Results from',
	'sure_delete_entry' => 'Delete entry',
	'from_the' => 'from the',
	'page_settings' => 'Page settings',
	'advanced' => 'Advanced',
	'your_site_has' => 'Your site has',
	'visitors_online' => 'visitor(s) online.',	
	'in_the_last' => 'In the last',
	'site_visitors' => 'Site Visitors.',
	'page_views' => 'Page Views.',
	'spam_attacks' => 'Spam Attacks',
	'last_login_on' => 'Last login on :',
	'quick' => 'Quick',
	'links' => 'Links',
	'new_entry' => 'Add new ',
	'entry' => 'entry.',
	'edit' => 'Edit ',
	'page' => 'page.',
	'blog' => 'Blog.',
	'search' => 'Search',
	'forums' => 'Forums.',
	'downloads' => 'Downloads.',
	'create_backup' => 'Create Backup',
	'button_backup' => 'Backup the database',
	'page_type' => 'Page Type',
	'settings_page_new' => 'Create a new',
	'total_records' => 'Total records',
	'showing_from_record' => 'showing from record',
	'page(s)' => 'page(s)',
	'help' => 'Help',
	'statistics' => 'Statistics',
	'help_settings_page_type' => 'When adding a new page you can choose from three types:',
	'help_settings_page_dynamic' => 'Examples of dynamic pages are blogs and news pages. These pages support RSS feeds and commenting.',
	'help_settings_page_static' => 'A static page is simply a block of HTML (and PHP if you would like). These pages are suited to static or rarely updated content.',
	'help_settings_page_module' => 'A module page adds specific content to your site. Modules can be downloaded from <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a>, an example of which is the events module. Modules are sometimes bundled with plugins.',
	'help_settings_user_type' => 'When adding a new user you can choose from three types :',
	'help_settings_user_admin' => '<b>Administrator</b> - Administrators have access to the whole of Pixie, they can edit the settings, write content and do anything they like.',
	'help_settings_user_client' => '<b>Client</b> - A client can only add content to Pixie, they are unable to edit the settings of a site.',
	'help_settings_user_user' => '<b>User</b> - A Pixie user only has access to the Dashboard tab, they have a Pixie profile and can see the website statistics.',
	'install_module' => 'Install a new module or plugin',
	'select_module' => 'Select the module or plugin you wish to activate',
	'all_installed' => 'All available modules and plugins are currently active and installed.',

	// system messages
	'error_save_settings' => 'Error saving settings.',
	'ok_save_settings' => 'Your new settings have been saved and applied.',
	'comment_spam' => 'Comment spam blocked.',
	'failed_login' => 'Failed login attempt.',
	'login_exceeded' => 'You have exceeded the maximum amount of attempts (3) to login to Pixie, please try again in 24 hours.',
	'logins_exceeded' => '3 failed login attempts detected. Pixie has blocked this IP address for 24 hours.',
	'ok_login' => 'User ' . $username . ' logged in.',
	'failed_protected_page' => 'Unable to delete the 404 page, possible hack attempt.',
	'ok_delete_page' => 'Successfully deleted the',
	'ok_delete_entry' => 'Successfully deleted entry (#' . $delete . ') from the',
	'failed_delete' => 'Unable to delete item (#' . $delete . ').',
	'login_missing' => 'Please provide the required login information.',
	'login_incorrect' => 'Your login details are incorrect.',
	'forgotten_missing' => 'You did not provide a valid username or email address.',
	'forgotten_ok' => 'A new password has been sent to your email address.',
	'forgotten_log_error' => 'Failed attempt to reset password.',
	'forgotten_log_ok' => 'A new password was sent to ',
	'rss_access_attempt' => 'Unauthorised attempt to access a private RSS feed. You may need to re-subscribe to the feed from within Pixie.',
	'unknown_error' => 'Something went wrong. It is possible (but not likely) the database has gone down or you got out of the wrong side of bed?',
	'unknown_edit_url' => 'The URL supplied to edit this page is not valid.',
	'unknown_referrer' => 'Unknown Referrer.',
	'profile_name_error' => 'Please enter your full name.', 
	'profile_email_error' => 'Please provide a valid email address.', 
	'profile_web_error' => 'Please provide a valid web address.', 
	'profile_ok' => 'Your profile has been updated.',
	'profile_password_error' => 'Pixie was unable to save your new password. Why not try again?',
	'profile_password_ok' => 'Your Pixie password has been updated. You will need to use it next time you login.',
	'profile_password_invalid' => 'You did not supply a valid current password.',
	'profile_password_invalid_length' => 'Passwords must be at least 6 characters long.',
	'profile_password_match_error' => 'The passwords you supplied did not match.',
	'profile_password_missing' => 'Please provide all the required information.',
	'site_name_error' => 'Your site needs a name.',
	'site_url_error' =>  'Please provide a valid website URL.',
	'backup_ok' => 'Successfully created a new backup of the database.',
	'backup_delete_ok' => 'Successfully deleted the backup :',
	'backup_delete_no' => 'You cannot delete the most recent backup.',
	'backup_delete_error' => 'Pixie was unable to delete the backup.',
	'theme_ok' => 'The theme has been applied to your website.',
	'theme_error' => 'Pixie was unable to change your theme.',
	'all_content_deleted' => 'All content was deleted from the',
	'user_delete_ok' => 'has been deleted from Pixie.',
	'user_delete_error' => 'Unable to delete user',
	'user_name_missing' => 'Please provide a username.',
	'user_realname_missing' => 'Please provide a name.',
	'user_password_missing' => 'Please provide a password.',
	'user_email_error' => 'Please provide a valid email address.',
	'user_update_ok' => 'Saved new settings for',
	'user_duplicate' => 'A user with that username already exists, try another.',
	'user_new_ok' => 'Created new user:',
	'saved_new_settings_for' => 'Saved new settings for the',
	'file_upload_error' => 'Pixie had a problem inserting the file information into database, the file may have been uploaded still.',
	'file_upload_tag_error' => 'Please make sure you tag your uploads.',
	'file_delete_ok' => 'Successfully deleted file :',
	'file_delete_fail' => 'Pixie was unable to delete the file :',
	'form_build_fail' => 'Unable to build an editable form... did you supply the correct table details in your module?',
	'date_error' => 'You supplied an invalid date.',
	'email_error' => 'Please make sure you have entered a valid email address.',
	'url_error' => 'Please make sure you have entered a valid URL.',
	'is_required' => 'is a required field.',
	'saved_new' => 'Saved new entry',
	'in_the' => 'in the',
	'on_the' => 'on the',
	'saved_new_page' => 'Created new page',
	'save_update_entry' => 'Saved updates to entry',
	'bad_cookie' => 'Your session cookie has expired. You will need to login again.',
	'no_module_selected' => 'You did not select a module or plugin to install, try again.',
	'install_module_ok' => 'has been installed successfully.',

	// helper
	'helper_plugin' => 'You are unable to edit the settings of plugins, you can however empty a plugin or remove it using the buttons above. If you delete a plugin, for example the comments plugin, your visitors will no longer be able to leave comments on your dynamic pages.',
	'helper_nocontent' => 'This page does not have any content, use the green button above to add the first entry (the green button is not available on the comments plugin).',
	'helper_nopages' => 'A wise man once said that a website without pages is like a bird without wings... its not going anywhere. Use the form on the right to add the first page to your site. Once you have done that this insightful message will disapear.',
	'helper_nopages404' => 'Your site only has one page, that page is the 404 error page and can be edited below.',
	'helper_nopagesadmin' => 'You can <a href="?s=settings">add more pages in the \'Setup Stuff\' section</a> of Pixie.', 
	'helper_nopagesuser' => 'Contact a site administrator and ask them to add some pages to your website.',
	'helper_search' => 'No entries were found. Try searching again.', 
	
	// navigation
	'nav1_settings' => 'Settings',
	'nav1_publish' => 'Publish',
	'nav1_home' => 'Dashboard',
	'nav2_home' => 'Home',
	'nav2_profile' => 'Profile',
	'nav2_security' => 'Password',
	'nav2_logs' => 'Logs',
	'nav2_delete' => 'Delete Account',
	'nav2_pages' => 'Pages',
	'nav2_files' => 'File Manager',
	'nav2_backup' => 'Backup',
	'nav2_users' => 'Users',
	'nav2_blocks' => 'Blocks',
	'nav2_theme' => 'Theme',
	'nav2_site' => 'Site',
	'nav2_settings' => 'Settings',

	// forms
	'form_login' => 'Login',
	'form_username' => 'Username',
	'form_password' => 'Password',
	'form_rememberme' => 'Remain logged in on this computer?',
	'form_forgotten' => 'Forgotten your password?',
	'form_returnto' => 'Return to ',
	'form_help_forgotten' => 'Please enter your email or username for your Pixie account. Your password will be reset and emailed to you.',
	'form_resetpassword' => 'Reset Password',
	'form_name' => 'Full Name',
	'form_usernameoremail' => 'Username or Email address',
	'form_telephone' => 'Telephone',
	'form_email' => 'Email',
	'form_website' => 'My Website',
	'form_occupation' => 'Occupation',
	'form_address_street' => 'Street Address',
	'form_address_town' => 'Town',
	'form_address_county' => 'County',
	'form_address_pcode' => 'Post Code',
	'form_address_country' => 'Country',
	'form_address_biography' => 'Biography',
	'form_fl1' => 'My Favourite Links',
	'form_button_save' => 'Save',
	'form_button_update' => 'Update',
	'form_button_cancel' => 'Cancel',
	'form_button_install' => 'Install',
	'form_button_create_page' => 'Create page',
	'form_current_password' => 'Current Password',
	'form_new_password' => 'New Password',
	'form_confirm_password' => 'Confirm Password',
	'form_tags' => 'Tags',
	'form_content' => 'Content',
	'form_comments' => 'Comments',
	'form_public' => 'Public',
	'form_optional'=> '(optional)',
	'form_required'=> '*',
	'form_title'=> 'Title',
	'form_posted'=> 'Date &amp; Time',
	'form_date' => 'Date &amp; Time',
	'form_help_comments' => 'Would you like people to be able to comment on this post?',
	'form_help_public' => 'Would you like this post/page to be viewable by the public? (select no to save it as a draft.)',
	'form_help_tags' => 'Tags work like categories and make things easier to find. Enter keywords separated with spaces.',
	'form_help_current_tags' => 'Suggestions:',
	'form_help_current_blocks' => 'Available Blocks :',
	'form_php_warning' => '(This page contains PHP. The rich text editor has been disabled to allow safe editing of this advanced code.)',
	'form_legend_site_settings' => 'Adjust the settings for your website',
	'form_site_name' => 'Site Name',
	'form_help_site_name' => 'What would you like your site to be called?',
	'form_page_name' => 'Slug/URL',
	'form_help_page_name' => 'This will be used to create the URL of your page (e.g. http://www.yoursite.com/<b>somepage</b>/.)',
	'form_page_display_name' => 'Page Display Name',
	'form_help_page_display_name' => 'What would you like your page to be called?',
	'form_page_description' => 'Page Description',
	'form_help_page_description' => 'Write a description of your page.',
	'form_page_blocks' => 'Page Blocks',
	'form_help_page_blocks' => 'Blocks are the extra content that sit with your page. Block names should be separated with spaces. (block handling will be improved upon in future versions of Pixie).',
	'form_searchable' => 'Searchable',
	'form_help_searchable' => 'Would you like this page to appear in public searches?',
	'form_posts_per_page' => 'Posts on this page',
	'form_help_posts_per_page' => 'How many entries would you like to show on this page?',
	'form_rss' => 'RSS',
	'form_help_rss' => 'Would you like this page to generate an RSS feed of its content?',
	'form_in_navigation' => 'In Navigation',
	'form_help_in_navigation' => 'Would you like this page to be shown in your websites navigation?',
	'form_site_url' => 'Site URL',
	'form_help_site_url' => 'What is the URL of your website? (e.g. http://www.yoursite.com/somefolder/.)',
	'form_site_homepage' => 'Homepage',
	'form_help_homepage' => 'Which page of your site would you like visitors to see first?',
	'form_site_keywords' => 'Site Keywords',
	'form_help_site_keywords' => 'Write a list of keywords separated by commas. (e.g. this, site, rules).',
	'form_site_author' => 'Site Author',
	'form_site_copyright' => 'Site Copyright',
	'form_site_curl' => 'Clean URLs?',
	'form_help_site_curl' => 'Would you like your site to use clean URLs? A clean URL looks like www.yoursite.com/clean/ as apposed to www.yoursite.com?s=clean. Clean URLs work on Linux hosts only.',
	'form_legend_pixie_settings' => 'Adjust the way Pixie behaves',
	'form_pixie_language' => 'Language',
	'form_help_pixie_language' => 'Select the language you wish to use.',
	'form_pixie_timezone' => 'Time Zone',
	'form_help_pixie_timezone' => 'Select your current time zone so Pixie can display the correct times.',
	'form_pixie_dst' => 'Daylight Savings Time',
	'form_help_pixie_dst' => 'Would you like Pixie to automatically adjust the time according to daylight savings time?',
	'form_pixie_date' => 'Date &amp; Time',
	'form_help_pixie_date' => 'Select your preferred date and time format.',
	'form_pixie_rte' => 'Rich Text Editor',
	'form_help_pixie_rte' => 'Would you like to use the Ckeditor text editor? (It makes editing your site really easy.)',
	'form_pixie_logs' => 'Logs Expire',
	'form_help_pixie_logs' => 'After how many days would you like to clear your log files?',
	'form_pixie_sysmess' => 'System Message',
	'form_help_pixie_sysmess' => 'This message will be shown to each Pixie user when they log into Pixie.',
	'form_help_settings_page_type' => 'What type of page would you like to make?',
	'form_legend_user_settings' => 'User Settings',
	'form_user_username' => 'Username',
	'form_help_user_username' => 'Usernames cannot contain spaces.',
	'form_user_realname' => 'Full Name',
	'form_help_user_realname' => 'Enter the users full name.',
	'form_user_permissions' => 'Permissions',
	'form_help_user_permissions' => 'What permissions would you like this user to have?',
	'form_help_user_permissions_block' => 'What type of user will this be?',
	'form_button_create_user' => 'Create user',
	'form_upload_file' => 'File',
	'form_help_upload_file' => 'Select a file from your computer to upload.',
	'form_help_upload_tags' => 'Keywords separated with spaces.',
	'form_upload_replace_files' => 'Replace files?', 
	'form_help_upload_replace_files' => 'Are you trying to replace an existing file?',
	'form_search_words' => 'Keywords',
	'form_privs' => 'Page Permissions',
	'form_help_privs' => 'Who would you like to be able to edit this page?',
	
	//email
	'email_newpassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - New password',
	'email_changepassword_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Changed password',
	'email_newpassword_message' => 'Your password has been set to : ',
	'email_account_close_message' => 'Your Pixie account has been closed @ ' . $site_url . '. Please contact the administrator of the site for more information.',
	'email_account_close_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - Account closed',
	'email_account_edit_subject' =>	'Pixie (' . str_replace('http://', "", $site_url) . ') - Important information regarding your account',
	'email_account_new_subject' => 'Pixie (' . str_replace('http://', "", $site_url) . ') - New account',
	
	//front end
	'continue_reading' => 'Continue reading',
	'permalink' => 'Permalink',
	'theme' => 'Theme',
	'navigation' => 'Navigation',
	'skip_to_content' => 'Skip to content &raquo;',
	'skip_to_nav' => 'Skip to navigation &raquo;',
	'by' => 'By',
	'on' => 'on',
	'view' => 'View',
	'profile' => 'profile',
	'all_posts_tagged' => 'all posts tagged',
	'permalink_to' => 'Permanent link to',
	'comments' => 'Comments',
	'comment' => 'Comment',
	'no_comments' => 'No comments yet...',
	'comment_closed' => 'Comments now closed.',
	'comment_thanks' => 'Thank you for your comment.',
	'comment_leave' => 'Leave a comment',
	'comment_form_info' => 'Comment form is <a href="http://gravatar.com" title="Get a Gravatar">Gravatar</a> and <a href="http://www.cocomment.com" title="Track and share your comments">coComment</a> enabled.',
	'comment_name' => 'Name',
	'comment_email' => 'Email',
	'comment_web' => 'Website',
	'comment_button_leave' => 'Submit your comment',
	'comment_name_error' => 'Please provide your name.',
	'comment_email_error' => 'Please provide a valid email address.',
	'comment_web_error' => 'Please provide a valid web address.',
	'comment_throttle_error' => 'You\'re posting comments too quickly, slow down.',
	'comment_comment_error' => 'Please provide a comment.',	
	'comment_save_log' => 'commented on : ',
	'tagged' => 'Tagged',
	'tag' => 'Tag',
	'popular' => 'Most popular',
	'archives' => 'Archives',
	'posts' => 'posts',
	'last_updated' => 'Last updated',
	'edit_post' => 'Edit this post',
	'edit_page' => 'Edit this page',
	'popular_posts' => 'Popular Posts',
	'next_post' => 'Next post',
	'next_page' => 'Next page',
	'previous_post' => 'Previous post',
	'previous_page' => 'Previous page',
	'dynamic_page' => 'Page'
);
?>