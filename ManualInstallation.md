If you are having trouble installing Pixie you may wish to try [hosted Pixie](http://www.arvixe.com/516-22-3-11.html). Otherwise, installing Pixie manually is actually easier than it sounds, here is how you do it:

#### Create your config.php file: ####
> In the admin folder of your Pixie download you will find a file called config.php. This file stores your database information. You will need to copy and paste the following code into the file, replacing the information here with your own database information supplied by your web host.

```
<?php
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Configuration settings.                                  //
//*****************************************************************//

// MySQL settings //
$pixieconfig['db'] = 'my_database_name';
$pixieconfig['user'] = 'my_database_username';
$pixieconfig['pass'] = 'my_database_password';

// These should be ok to leave as they are //
$pixieconfig['host'] = 'localhost';
$pixieconfig['table_prefix'] = '';
?>
```

#### Create your .htaccess file: ####
> The [.htaccess](http://en.wikipedia.org/wiki/Htaccess) file is an invisible file that is used to create the Clean URLs that Pixie uses. This file normally only works on Linux hosting platforms (some Windows servers do now support it - [more info](http://groups.google.com/group/pixie-cms/browse_thread/thread/18e08b648c6be31f?hl=en#)). In the root of your website you will need to create a new file named .htaccess. Copy the following code into it and edit where indicated:

```
<IfModule mod_rewrite.c>
   
  RewriteEngine On

  # The RewriteBase should be set to the folder of your installation: 
  # / = your site is in the root, e.g. www.mysite.com 
  # /mysite = a site installed in a folder called mysite, e.g. www.mysite.com/mysite/
  
  RewriteBase /
  
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^(.*) index.php?%{QUERY_STRING} [L]

</IfModule>
```

> If your server does not support the .htaccess file simply skip this step and make sure you set "Clean URLs" to Off/No once you are logged into Pixie.

#### Import the SQL from manual.sql: ####
> Pixie requires some MySQL tables to be setup in order to run. In the install folder within Pixie (admin/install/) you will find a file named: manual.sql. Use your favourite database management program (such as [phpMyAdmin](http://www.phpmyadmin.net/)) to import this sql file into your database.

#### Make your upload folders writeable: ####
> In order to upload files and create database backups from within Pixie you will need to make sure you have permission to write to the files directory (/files/) and all of its subdirectories. FTP programs allow you to set permissions for files and directories. This function is often called chmod or set permissions in the program menu.

#### Try to login: ####
> Visit www.mysite.com/admin to login to Pixie. We have set the default Pixie username to: admin, with a password of: pixie123. If you are unable to login with these credentials you will need to create a new user for yourself. In your browser visit: www.mysite.com/admin/install/createuser.php. From here you will be able to create a new user for yourself and a temporary password.

#### Change your site URL: ####
> Now you are logged into Pixie you will need to tell it the web address of your site. In the "settings" tab click on "site" at the top of the page. From here you need to update the URL and any other information you wish to change about your site.

#### Cleanup: ####
> Lastly you will need to delete the Pixie install directory (admin/install/).


---


If you have questions about this page head to the [Pixie forums](http://groups.google.com/group/pixie-cms/).