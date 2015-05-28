#### Overview : ####

Upgrading Pixie is an important part of maintaining a live user facing Pixie website.

It is important to ensure that your Pixie web site is powered using Pixie's latest released version, which can always be found on [www.getpixie.co.uk](http://www.getpixie.co.uk/).
Doing so, will ensure that your site is safe, secure and running at optimum. Running the latest [Pixie](http://www.getpixie.co.uk/) version on your site also helps [Pixie forum](http://groups.google.com/group/pixie-cms) members provide support for any queries you may have because providing support for older versions of Pixie isn't generally practical or simple.

As a precautionary measure before attempting a [Pixie](http://www.getpixie.co.uk/) upgrade, you should back up your entire site along with [Pixie](http://www.getpixie.co.uk/)'s database and copy it from your web server to your local machine (Your computer.)
You can obtain a database backup of your Pixie web site by visiting the backup link on the settings page of your [Pixie](http://www.getpixie.co.uk/) web site's admin area.

#### Obtaining the latest release : ####
To begin the upgrade procedure of an existing Pixie website, you will need to [download](http://www.getpixie.co.uk/downloads/) the latest version of [Pixie](http://www.getpixie.co.uk/) from [www.getpixie.co.uk](http://www.getpixie.co.uk/).

#### Preparing the upgrade : ####
Once you have downloaded the latest [Pixie](http://www.getpixie.co.uk/) release to use as your upgrade, you will first extract the archive on your computer.
Once the files are extracted, you should delete the following files from the extracted new [Pixie](http://www.getpixie.co.uk/) release :

```
FOLDER : files
FILE : .htaccess
FILE : robots.txt
FILE : admin/config.php
```

#### Upgrading [Pixie](http://www.getpixie.co.uk/)'s core files using your prepared upgrade : ####

Now that you have the upgrade prepared, you can copy the upgrade straight over your existing [Pixie](http://www.getpixie.co.uk/) install, overwriting all the existing files.
**Please take care when replacing files in this step, we recommend that you make a backup of your current [Pixie](http://www.getpixie.co.uk/) web site before first; before changing anything.**

**Please note** :
Modifying any of [Pixie](http://www.getpixie.co.uk/)'s core files yourself is not at all recommended. Upgrading a [Pixie](http://www.getpixie.co.uk/) web site which contains such modifications and expecting them to work after an upgrade is unrealistic.
If you have modified the file admin/jscript/public.js or any other core files, please ensure that you have made a back up of them on your computer first; so that you can modify them to work with any new version made available.
Core files do not include non-core themes or any modules or blocks you may have installed.

#### Upgrade the database : ####
To complete the main part of the upgrade procedure you must upgrade Pixie's database.
Pixie 1.04 and above contains a new upgrade utility which will provide you with options to help you upgrade.
Firstly you must ensure that :

```
FILE : .htaccess
```

Has the permission **777** on your web server. And that :

```
FILE : admin/config.php
```

Has the permission **777** on your web server.

Then to upgrade your Pixie database visit :

```
www.yoursite.com/admin/install/upgrade.php
```

(Obviously replacing "www.yoursite.com" With your web site's address.
Before you proceed to upgrade using the upgrade utility, please read the **[Upgrade advisories](http://code.google.com/p/pixie-cms/wiki/UpgradeAdvisories)** to help you to decide on any options you may be presented and make informed choices.

The upgrade utility will guide you through the rest of the database upgrade process.

#### Cleanup : ####
Once you have completed the database upgrade without error, you can proceed to clean up the left over files no longer required.
In all cases at this step, you must delete the folder :

```
FOLDER : admin/install
```

On your upgraded [Pixie](http://www.getpixie.co.uk/) web site for security.
You must also ensure that :

```
FILE : .htaccess
```

Has the permission **644** on your web server. And that :

```
FILE : admin/config.php
```

Has the permission **640** on your web server.

Once you have successfully reached this stage you have successfully upgraded your Pixie web site and you can now enjoy the benefits of improved or new features and bug fixes.

Please visit the [Pixie forum](http://groups.google.com/group/pixie-cms) and start a new thread if you have any support questions related to the upgrade process.

Thank You.