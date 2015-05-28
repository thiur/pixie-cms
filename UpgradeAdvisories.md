
---

# Intro #

---


---

First of all, please ensure that you backup your [Pixie](http://www.getpixie.co.uk/) web site and it's database before performing an upgrade. If something unfortunately goes wrong, you can then restore your previous site and seek help on the [Pixie forums](http://groups.google.com/group/pixie-cms).

Whenever you upgrade a copy of Pixie, we will post here advisories related to important changes to [Pixie](http://www.getpixie.co.uk/)'s code that you need to be informed about before attempting to upgrade.

It's important to take this information in and make decisions about choices presented to you in the upgrade utility to obtain the most suitable upgrade.


---

# Advisories #

---


---

## [Pixie](http://www.getpixie.co.uk/) 1.0x -> [Pixie](http://www.getpixie.co.uk/) 1.xx (All versions) ##

---


### [Pixie](http://www.getpixie.co.uk/) 1.0 ###
Security patch for Pixie v1.0

[Download](http://pixie-cms.googlecode.com/files/patch_exploit_7886.zip).

Details of the exploit can be found [here](http://milw0rm.com/exploits/7886), readme.txt file explains how to patch Pixie.

### [Pixie](http://www.getpixie.co.uk/) 1.01 ###
Security patch for Pixie v1.01

[Download](http://pixie-cms.googlecode.com/files/patch_exploit_1.01.zip).

Details of the exploit can be found [here](http://lampsecurity.org/Pixie-CMS-Multiple-Vulnerabilities), readme.txt file explains how to patch Pixie.

---

## [Pixie](http://www.getpixie.co.uk/) 1.03 -> [Pixie](http://www.getpixie.co.uk/) 1.04 ##

---

### Dutch Language file renamed and TinyMce deletion ###
Due to a bug found in MySQL, the file : admin/lang/dutch-nl.php is now named admin/lang/nl.php and the old file : admin/lang/dutch-nl.php should be deleted from the admin/lang/ directory.
If your site is set to use the Dutch language, you must set the language to English in Pixie's admin area before attempting any part of the upgrade. You can then set the language back to Dutch after upgrading.

After completing the upgrade process for [Pixie](http://www.getpixie.co.uk/) 1.04, you should delete the following :

```
FOLDER : admin/jscript/tiny_mce
FILE : admin/lang/dutch-nl.php
```

As we no longer use TinyMce for editing in [Pixie](http://www.getpixie.co.uk/).
Users of the Dutch language must switch their Pixie site to English prior to upgrading but can then return the site back to Dutch after the upgrade is successful.

### Manual correction of robots.txt for search engine indexing ###
To improve search engines such as google's, ability to index your website, you should change the line :

```
Sitemap: sitemap.xml.php
```

To :

```
Sitemap: http://www.yoursite.com/sitemap.xml.php
```

(Replacing "www.yoursite.com" With the your website's address)
In the file : robots.txt.

### Template override feature theme file name change ###
The [template override](http://code.google.com/p/pixie-cms/wiki/TemplateOverrides) feature theme file name has changed from : index.php to : theme.php. So if you have created a template which uses the [template override](http://code.google.com/p/pixie-cms/wiki/TemplateOverrides) feature, the index.php file in your theme's folder needs to be renamed to : theme.php

### Clean urls must now be turned on for security ###
All live user facing Pixie websites must turn on clean urls for security reasons. Due to a php "Quirk" One of php's functions does not perform exactly as initially assumed and the particular function's use can open a security hole which could be compromised by an attacker.
It is for this reason, until the huge amount of code changes involved (Planned for the next released) That clean urls must be enabled. The exploit is prevented by using a rule set in the .htaccess file and turning on clean urls in Pixie's admin area activates the use of the rule set on your web server.
The upgrade option to install the new .htaccess file to protect your Pixie web site is named "New! .htaccess" And it is highly recommended that every Pixie site has that upgrade option applied to it.

### PHP 5 time zone setting ###
You are advised to select the correct time zone for your server when upgrading using the upgrade utility. If your time zone is not listed, you can edit the file admin/config.php to add your correct time zone after upgrading by selecting the correct one from [this](http://php.net/manual/en/timezones.php) list. The setting does not effect the time zone off set selected in Pixie's admin area, it is used for php 5's time and date functions on your web server because php 5 has a new time and date method.

### public.js.php security fixes ###
The file admin/jscript/public.js.php has changed and is likely a file that you use if you add javascript to your [Pixie](http://www.getpixie.co.uk/) web site. If you were using admin/jscript/public.js.php, you will need to port your code to the new file for security reasons. To do so, uncomment the line :

`/* extract($_REQUEST, EXTR_PREFIX_ALL, 'pixie'); */`

To :

`extract($_REQUEST, EXTR_PREFIX_ALL, 'pixie');`

And place your javascript code below the closing php tag :

`?>`

Once you have completed that step, you must change any of [Pixie](http://www.getpixie.co.uk/)'s variables that you are using in your script to contain the the prefix :

`pixie_`

So, if you are using [Pixie](http://www.getpixie.co.uk/)'s `$s` variable for example, that variable is now called :

`$pixie_s`

### Direct access prevention ###
All of Pixie's core files now prevent direct access via the browser to help prevent thieves from stealing the code from a custom block or plugin that you were paid by a customer to create, so that an attacker has less chance of being able to find an exploit "On the fly" By downloading the page's source (They have to come to us if they want to look at the code by downloading it or browsing the source on line) And to prevent an attacker from exploiting pages by directly accessing a page which should never be directly accessed, just adding in a variable to the url arguments and exploiting the site that way.
Directly accessing any page other than those that should be directly accessed results in the browser being directed back to your site's home page.
If you have created a module or block that does directly access any of Pixie's files (I don't think any on getpixie do,) you will need to find an alternative method to achieve the same result.
If you are a plugin, module or block developer, you may want to add this new direct access prevention code to your own releases for the same reasons it is now used in Pixie, however modules, blocks and themes should work fine without doing so.

### Unicode UTF-8 database conversion ###
Pixie now requires that your database be created as utf8\_unicode\_ci. If (Like myself) You created a database in phpMyAdmin without checking the character encoding of it and ended up with something like latin\_swedish or anything else not utf8\_unicode\_ci you should convert your database to utf8\_unicode\_ci to store your data right (Obviously making a backup of your database first.) You can check the encoding of your database using phpMyAdmin and you can use the optional extra feature in the upgrade utility to convert your database if it is not utf8\_unicode\_ci. The feature is named : Convert the database.

### Unicode UTF-8 database support and foreign languages ###
The largest and most important change in Pixie 1.04, (Which is mostly relevant to Pixie sites that use languages other than English) Is the database connection encoding. Previously in Pixie 1.03, Pixie was connecting to the database and just allowing the database server or php to decide the connection encoding. This method was an oversight and was causing foreign language characters to be stored in the database as unreadable garbage.
The cause of this behaviour was traced to php's default choice for database encoding.
We now set the database encoding (UTF-8) when a database connection is made so that foreign language characters like those found in French and Spanish for example, are no longer stored as unreadable junk.
Unfortunately because of this change, Pixie 1.03 sites posted to in foreign languages (Not English) Now need to move over to using the new database connection. It is an option in the upgrade utility but you must do the following before you attempt to upgrade.
You must edit the source of every single static and dynamic page that has foreign language contained upon it, copy that source and save it locally on your computer as a backup. After the upgrade, you will use that saved source to manually edit or recreate the post and then save it again. We are sorry about the inconvenience this may cause some users but we were unable to find any other method to migrate effected Pixie web sites from this, which we call "Database encoding Hell."
You do not have to select this option in the upgrade utility but it is certainly recommended.
If you do select this option but afterwards realise that you forgot to backup some important page (Which will appear scrambled or as just a page of question marks instead of the post after upgrading,) You can comment out :

`$pixieconfig['site_charset']    = 'UTF-8';`

Like this :

`///$pixieconfig['site_charset']    = 'UTF-8';`

In the file : admin/config.php after upgrading and the old behaviour will return. Manually copying the content you can then remove the hashes you added to config.php to create or edit the post to work with the new method.
English language users will not see any difference selecting this upgrade option from the upgrade utility but it is still recommended to select it and English language users do not need to backup any of their posts before selecting this upgrade.

### Underscore characters in post titles (And slugs) ###
If you have created any pages with an underscore originally 