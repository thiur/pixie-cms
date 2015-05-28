#### Version 1.04 ####


**New**

  * Pixie now uses [CKEditor](http://ckeditor.com/) for it's WYSIWYG editor. With this comes plenty of useful enhancements - for example you can now upload files whilst creating a post. CKEditor provides a useful customisation ability. One single file holds the configuration and if you are a developer and would like to extend CKEditor in Pixie to do more than it currently does (For instance, your client wants a special tool bar button to add a certain mark up to the page, every time they click it) You can read [the CKEditor developers guide](http://docs.cksource.com/CKEditor_3.x/Developers_Guide) to see how that's possible now. There will be a guide for developing custom [CKEditor](http://ckeditor.com/) plugins on the wiki shortly to explain how you can easily add your own custom plugins to the toolbar.
  * Database creation during installation. The installer now allows you to create the database you want to use to hold Pixie's tables when you install. Simply select the option in the optional extra settings dialog of the installer.
  * Upgrade-O-Matic - A new upgrade utility.

**Improved**

  * Timezone fixes - The timezone issue is no more.
  * Latest jQuery (1.4.2).
  * JS from Google ajax apis - You can now use your theme's settings.php to load jQuery or swfobject from Google's servers. This can speed up your Pixie web site's load times.
  * Tablesorter - Clicking on a table header in the admin interface will sort the table now and the cursor also changes to the hand icon to indicate the feature on mouse hover.
  * GZIP compression - You can compress your site's theme and Pixie's admin area page output using gzip compression. To enable compression in Pixie navigate to the /admin/settings.php and set `$gzip_admin` to `"yes"`. To enable compression for your theme navigate to /admin/themes/YOUR\_THEME/settings.php and set `$gzip_theme_output` to `"yes"`.
  * geshi - If you write computer programs, you can post code snippets using the awesome geshi syntax highlighting class, which is enabled as a CKEditor plugin and can be found in the advanced tool bar drop down of CKEditor.
  * More languages - We have added more translations from contributors around the world.
  * Several multi language bugs fixed - You can use latin type characters (Found in many languages) in post titles and also in tags now.
  * Several speed improvements - parts of Pixie don't load until you require them.
  * Direct access to Pixie's core files has been prevented to increase security.
  * The .htaccess has been improved to help secure your Pixie site.
  * Simplepie now supports php 5 (Used in RSS feeds such as the RSS block.)
  * The flickr block was fixed to work with flckr's api changes.
  * Several new file types are permitted as uploads using the file manager now. So uploading any of the following file types : .gz .bz2 .tar .7z .svg .svgz .lzma .sig .sign .js .rb .ttf .html .phtml .flac .ogg .wav .mkv .pls .m4a .xspf .ogv is now possible.
  * The file manager now gives you a true reading of the maximum file size your host server permits for uploads, so that you don't waste your time trying to upload a file into Pixie that your host server will not accept.
  * The logout link on the tool bar which displays above your site's theme when you are logged in to Pixie's admin area now returns you to your site's front page when clicking on it instead of being returned to the admin area but logged out.
  * Some trivial fixes to core themes to ensure valid code and make them work much better in some browsers that previously did not render some parts of the theme correctly.
  * Many code readability improvements. Pixie's code is much cleaner now.
  * Many core javascript performance enhancements (Many jQuery functions are only called on demand and all jQuery code now uses the no conflict method to prevent any clashes with other javascript libraries.)
  * You can now use site names such as : Scott's it's a web site, in Pixie. Owner's of "Monkey's site" rejoice!
  * The MySQL database connection is made using UTF-8 now and all Pixie's forms now accept UTF-8 as the input character set (Unicode support.)
  * Post slug fields that are not editable are no longer displayed in admin area edit forms.
  * Many useful links now open in new tabs or windows to prevent you escaping the admin area whilst logged in, going off and doing something on the linked site and forgetting that you are still logged into Pixie.
  * You can now set your default server time zone in admin/config.php if your server runs php 5 (Please note : The setting only effects timestamps on page output, not Pixie's core time setting.) If your time zone is not listed in the installer or upgrade utility, you can manually edit config.php to add a time zone as listed [here](http://php.net/manual/en/timezones.php).
  * Pixie's .htaccess file is now much improved and contains prevention methods for common web server exploits.
  * Improvements were made to the installer to further simplify the install process.


#### Version 1.03 ####


**New**

  * Security feature - comment throttling prevents more than 4 comments in a 4 hour time period.
  * Support for custom index.php files in themes.

**Improved**

  * Timezone fixes.
  * Latest jQuery (1.3.2).
  * Temporary fix for allowing "links" module to be used as the homepage.
  * No . files and .php only when scanning directories.
  * Caching on any RSS blocks to improve page load times.
  * Performance fix: stop creation of the `pixie_bad_behavior` table on every page load.
  * Bug where adding new users sometimes fails due to biography being null.
  * Other minor bug fixes.

#### Version 1.02 ####

**Improved**

  * Security fixes.
  * Bug where adding new users sometimes gave them super-user privileges.

#### Version 1.01 ####

**New**

  * French language.
  * Italian language.
  * Spanish language.
  * Polish language.
  * Finnish language.
  * RSS: wfw:comments element added to RSS feeds (made possible by [TransFormr](http://transformr.co.uk/) & [Microformats](http://www.mircoformats.org)). This allows services such as [FeedBurner](http://www.feedburner.com) to display how many comments have been made on a post.
  * Code moved into [SVN on Google Code](http://code.google.com/p/pixie-cms/source/checkout).

**Improved**

  * Security fixes.
  * Blog/Dynamic posts can now have longer titles (100 chars to 255).
  * Clean URLs to be OFF by default during install to improve server compatibility.
  * Firefox 3 CSS bugs.
  * IE6 & IE7 CSS bugs.
  * Small CSS tweak for Google Chrome browser.
  * Bug where dynamic posts set in the future would appear in RSS feeds.
  * [TinyMce](http://tinymce.moxiecode.com/) upgrade to 3.1.1
  * Bug where removing the comments plugin did not remove commenting options from a dynamic page.
  * Some Time & Timezone fixes - others are still outstanding.
  * [Issue 1](http://code.google.com/p/pixie-cms/issues/detail?id=1) - Bug where pipes (|) in content caused updates not to be saved.
  * Comment line breaks converted into html `<br/>`.
  * Bug where draft posts in a blog/dynamic page can still be seen.
  * Bug where tag cloud block would show tags for draft posts in blog/dynamic pages.
  * Admin bar date is now set to user preference from within Pixie.
  * [Issue 2](http://code.google.com/p/pixie-cms/issues/detail?id=2) - Bad SQL causes install to fail.
  * [Issue 3](http://code.google.com/p/pixie-cms/issues/detail?id=3) - Admin user not created during install.
  * [Issue 4](http://code.google.com/p/pixie-cms/issues/detail?id=4) - Posting a new blog entry doesn't work. MySQL error.
  * [Issue 5](http://code.google.com/p/pixie-cms/issues/detail?id=5) - Draft posts are displayed by the Recent Posts block and viewable by direct link.
  * Bug where IP addresses were not being linked properly to [network-tools](http://network-tools.com/) from the dashboard.

#### Version 1 ####

  * The first public release.