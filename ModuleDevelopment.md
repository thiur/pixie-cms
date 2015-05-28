A quick guide to making Pixie do more with Modules and Plugins. You will need knowledge of PHP and MySQL to create your own module or plugin, if that sounds to tricky please contact [toggle](http://www.toggle.uk.com), who will be happy to quote you for bespoke module development.

### a Module, a Plugin... what is the difference? ###

---


**A Module**
> A module is quite simply a page that brings extra functionality to Pixie and your website. This might be a product database, links page or events calendar. Modules are always post based pages, this means you keep posting information to them e.g. Adding a new event, adding a new product.

**A Plugin**
> Generally speaking a plugin will bring extra functionality to a module. For example you might need a secondary table for your events calendar that stores venues. This is what a plugin should  be used for. There are a few exceptions to this, the RSS plugin that ships with Pixie has been specifically built to allow you to edit which RSS feeds appear in the head of your html. These plugins require hacking of the Pixie core system.


### URL Structure ###

---


I need to mention the URL structure, as this forms the basis of how Pixie works.

Lets say your Pixie site is installed at www.mysite.com... When is visit www.mysite.com/page/ (or www.mysite.com?s=page for those of you without clean URL support) Pixie maps the word "page" to a variable. In this case the variable is `$s`. Pixie supports upto four variables to from the url (www.mysite.com/1/2/3/4) and each one maps to a different variable name:

In this example: www.mysite.com/page/do/something/here/ the URL will be mapped to:

  * `$s` = "page".
  * `$m` = "do".
  * `$x` = "something".
  * `$p` = "here".

`$s, $m, $x and $p` are then available to us within our modules for manipulation. Pixie converts all URL's to lowercase and does not require the last "/" on the end of the URL to work. I do apologise for the slightly random choice of variable names, originally Pixie was called "SMX" and that choice of variables has been around since then.


### Setting up your tables ###

---


Throughout this document we will be working on creating a very simple links module which is available with the Pixie download.

The first part of developing your module is creating the database tables. Pixie uses a number of conventions that you must be aware of when creating your table. Lets start with the table name:

  * **Table name**
> The name of your database table is important, it must always start with `pixie_module_` followed by the module name. For our links page example I create a table called `pixie_module_links`.

> The table name must only include the string `pixie_` only once.

> For example :

> `pixie_module_pixie_dust`

> is incorrect and will not work.
> Use something similar to :

> `pixie_module_fairy_dust`

> instead.


_Tip: You can also create a secondary table with for your module with `_settings` in its name: e.g. `pixie_module_links_settings`. Pixie will automatically look for this table when you are editing the settings of a page. If found pixie will create a form and allow the settings to be changed._

Next up is the ID field for your table, once again the naming is important:

  * **Table ID**
> The name of your table ID must match the name of your table, for our links module the ID field is called `links_id`. Notice I am using the word "links" (plural) every time I declare it, it would not work if I called the ID: `link_id`.

So lets have a look at the SQL for my links module:

```

CREATE TABLE IF NOT EXISTS `pixie_module_links` (
  `links_id` int(4) NOT NULL auto_increment,
  `link_title` varchar(150) collate utf8_unicode_ci NOT NULL default '',
  `tags` varchar(200) collate utf8_unicode_ci NOT NULL default '',
  `url` varchar(300) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`links_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


```

My links module uses a very simple table that stores a link ID, a link title, tags for the link and the URL itself. Any field set to `NOT NULL` will be required when the form is saved. Pixie will automatically check this flag and report an error when saving if the field is left empty.

To help make module development quicker Pixie looks for certain field names and automatically handles different data types as well. Lets take a look at what Pixie is looking for:

#### Data Types ####

  * **VARCHAR**
> For any field set to VARCHAR Pixie will create a simple input text box, Pixie looks for the `length` flag and limits the text box to this many characters. In our links table above the `link_title` is limited to 150 characters.

  * **TIMESTAMP**
> Pixie will convert these fields into a date drop down and time input box. The default time is Now.

  * **SET('yes', 'no')**
> Will be converted into two radio boxes, one for 'yes' and one for 'no'.

  * **LONGTEXT**
> This field will be converted into an [TinyMce](http://tinymce.moxiecode.com) text area.

We are looking to add more data type handling as we develop Pixie (for instance "bool" to be converted into a checkbox). If you would like to suggest more please [get in touch](http://groups.google.com/group/pixie-cms/).

#### Field Names ####

  * **email**
> Any field with the name email will be validated as an email address when saved. In the table view within Pixie it will also be turned into a clickable mailto: link.

  * **url**
> URL will be validated as a URL when the entry is saved. The link will also be clickable in the table view of Pixie.

  * **file**
> Any field that begins with the word file (e.g. file\_1, file\_download, file) will list all the files that have been uploaded to your site in a drop down list. The user will also have the option of uploading a new file. This is known as inline uploading.

  * **image**
> This works that same as above except only images are listed in the drop down list. When selecting an image in the drop down form the user also gets an option to preview the image.

  * **audio**
> Any field that begins with audio (e.g. audio\_file, audio) will create a drop down of all uploaded audio files. The user also has the option to upload a new file.

  * **video**
> As above except with video files.

  * **document**
> As above except with document files.

  * **tags**
> The tags feature is quite rich within Pixie. Any field called tags will allow you to effortlessly create tag clouds, browse by tag within the Pixie interface and also provide recommended tags from previously saved entries. For an example look at any dynamic (blog/news) page.

  * **privs**
> This field name will create a drop down list of the three Pixie privileges.

  * **title & post\_slug**
> If your table has fields with both of these names Pixie will automatically create a slug of the title and save it into post\_slug. For example: I have just created a new blog entry called "hello world", when I save this entry Pixie automatically populates the post\_slug filed with "hello-world". The allows me to retrieve the post at a later date using a friendly slug. For an example look at the `pixie_dynamic_posts` table.

Pixie will automatically try and convert your field names to be human friendly. In our links page example, the field `link_title`, will be shown as "Link title" throughout Pixie. This encourages you to use sensible names in your database. Sometimes you will need a little more control than this and Pixie provides in through the language file. If I created the following two entries in my language file (admin/lang/en-gb.php):

```

// overwrite field name
'form_link_title' => 'Please enter your link title:',

// provide help within the form.
'form_help_link_title' => 'This will be validated as a URL, please include http://',

```

Pixie will overwrite the field `link_title` with the top line, and the second line will appear in the form to give extra hints or help about what the user should enter. This feature can be very handy for improving the usability of the form for your module. We do realise that this does cause some impracticalities; new modules may require the user to edit their language file which is further complicated when more languages are introduced. If you have any suggestions in improving this (maybe languages are moved to database?) then please [us know](http://groups.google.com/group/pixie-cms/let).

### Creating the file ###

---


So you have created your table and changed any nasty field names in your language file. Its now time to create your module file and let Pixie know about it. All modules are stored in the modules folder (admin/modules/). Your file name for your module must match the name used in your tables... I am going to create a file called `links.php`. You may find it useful to download our [module template](http://pixie-cms.googlecode.com/files/module_template_v1.0.zip) and rename it.

Now you need to let Pixie know that your module exists, to do this we need to insert a new row (page) into the `pixie_core` table. The SQL for the links module looks like this:

```

INSERT INTO `pixie_core` (`page_id`, `page_type`, `page_name`, `page_display_name`, `page_description`, `page_blocks`, `page_content`, 
`page_views`, `page_parent`, `privs`, `publish`, `public`, `in_navigation`, `page_order`, `searchable`, `last_modified`) VALUES 
(5, 'module', 'links', 'Links', '<p>My links.</p>', '', '', 0, '', 2, 'yes', 'yes', 'yes', , 'no', '2008-04-09 16:57:55')

```

_Tip: Pixie will automatically register the module for you once the PHP page is setup and placed in the correct folder. To add the module use the Pixie interface for adding new pages to your site. This saves you having to manually insert the SQL as demonstrated above._

This is what some of the more important fields within `pixie_core` are all about:

  * **page\_type**
> The page type can be set to one of four things: 'dynamic', 'static', 'module' and 'plugin'. Fairly self explanatory.

  * **page\_name**
> The page name must carefully match the names used previously, in our example the page is called "links".

  * **page\_display\_name**
> The display name for a page can be set to whatever you like, Pixie will use this value for page titles etc.

  * **page\_description**
> The page description is used for the strapline and also the meta tags, this should describe your page.

  * **publish**
> Set to "yes" or "no". If set to "yes" Pixie will show this page in the Publish tab.

  * **public**
> Set to "yes" or "no". If set to "yes" the page will be accessible by the public, if set to "no" the page will be hidden.

  * **in\_navigation**
> Set to "yes" or "no". If set to "yes" the page will appear in your sites navigation.

  * **searchable**
> Set to "yes" or "no". This features is still in development and will be used to determine if a page is searchable.

The fields I have not listed here are easily edited with Pixie and explained in the settings area of each page.

### The links page example ###

---


Now is a good time to jump straight into programming the module itself, rather than explain everything I have copied the heavily commented links module below:


```

<?php
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Links Module	                                           //
//*****************************************************************//

// The module is loaded into Pixie in many different instances, the variable
// $do is used to run the module in different ways.
switch ($do) {

	// General information:
	// The general information is used to show infromation about the module within Pixie. 
	// Simply enter details of your module here:
	case "info":
	   // The name of your module
	   $m_name = "Links";
	   // A description of your module
	   $m_description = "Store a collection of links on your website and group them by tag.";
	   // Who is the module author?
	   $m_author = "Scott Evans";
	   // What is the URL of your homepage
	   $m_url = "http://www.toggle.uk.com";
	   // What version is this?
	   $m_version = "1";
	   // Can be set to module or plugin.
	   $m_type = "module";
	   // Is this a module that needs publishing to?
	   $m_publish = "yes";
	   
	break;

	// Install
	// This section contains the SQL needed to create your modules tables
	case "install":
		// Create any required tables
		$execute = "CREATE TABLE IF NOT EXISTS `pixie_module_links` (`links_id` int(4) NOT NULL auto_increment,`link_title` varchar(150) collate utf8_unicode_ci NOT NULL default '',`tags` varchar(200) collate utf8_unicode_ci NOT NULL default '',`url` varchar(300) collate utf8_unicode_ci NOT NULL default '',PRIMARY KEY  (`links_id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=0 ;";
	break;

  	// The administration of the module (add, edit, delete)
  	// This is where Pixie really saves you time, these few lines of code will create the entire admin interface
	case "admin":
	   // The name of your module
	   $module_name= "Links";
	   // The name of the table																
	   $table_name = "pixie_module_links";
	   // The field to order by in table view														
	   $order_by = "link_title";
	   // Ascending (asc) or decending (desc)		  													
	   $asc_desc = "asc";
	   // Fields you want to exclude in your table view        														
	   $view_exclude = array('links_id','tags');
	   // Fields you do not want people to be able to edit			
	   $edit_exclude = array('links_id');
	   // The number of items per page in the table view
	   $items_per_page = "15";
	   // Does this module support tags (yes or no)														
	   $tags = "yes";
	   
	   admin_module($module_name,$table_name,$order_by,$asc_desc,$view_exclude,$edit_exclude,$items_per_page, $tags);

	break;
 	
 	// The three sections below are all for the module output, a module is loaded at three different stages of a page build.
 	
	// Pre
	// Any code to be run before HTML output, any redirects or header changes must occur here
	case "pre":
		
		// lets have a look at $m to see what we are trying to get out of the page
		switch ($m) {
			
			// ok so the visitor has come along to www.mysite.com/links/tag/something lets show them all links tagged "something"
			case "tag":
				
				// we need $x to be a valid variable so lets check it
				$x = squash_slug($x); 
				$rz = safe_rows("*", "pixie_module_links", "tags REGEXP '[[:<:]]". $x ."[[:>:]]'");
				if ($rz) {
					
					// we have found a entry tagged "something" to lets change the page title to reflect that
					// first lets get the current sites title
					$site_title = safe_field("site_name","pixie_settings","settings_id = '1'");
					// $ptitle will overwrite the current page title
					$ptitle = $site_title." - Links - Tagged - $x";
				
				} else {
				
					// no tags were found, lets redirect back to the defualt view again.
					// createURL is your friend... its one of the most useful functions in Pixie
					$redirect = createURL($s);
					header("Location: $redirect");
	 				exit();
	 				
				}
				
			break;
			
			default:
			
				// By default this module is called the links module, Pixie will work this out for us so I do not need
				// to set $ptitle here. Pixie will always TRY and create a unique, accurate page title if one is not set. 
				
			break;
		
		}
		
	break;
	
	// Head
	// This will output code into the end of the head section of the HTML, this allows you to load in external CSS, JavaScript etc
	case "head":
	
	break;

  	// Show Module
  	// This is where your module will output into the content div on the page
	default:
		
		// Switch $m (our second variable from the URL) and adjust ouput accordingly
		switch ($m) {
			
			// $m is set to tag the we want to filter our links page to only check this tag
			case "tag":
				
				if ($x) {
					// turn $x back into a tag from a slug
					$x = squash_slug($x);
					extract(safe_row("*", "pixie_core", "page_name = '$s'"));
					// find all the links with a matching tag to $x
					$rz = safe_rows("*", "pixie_module_links", "tags REGEXP '[[:<:]]". $x ."[[:>:]]'");

					if ($rz) {
			  			echo "<div id=\"$s\">\n\t\t\t\t\t<h3>$page_display_name</h3>\n";
						$num = count($rz);
						echo "\t\t\t\t\t<div id=\"$x\" class=\"link_list\">\n\t\t\t\t\t\t<h4>".ucwords($x)."</h4>\n\t\t\t\t\t\t<ul>\n";
						$i = 0;
						// now loop out the results
						while ($i < $num){
							$out = $rz[$i];
	  						$url = $out['url'];
	  						$link_title = $out['link_title'];
							echo "\t\t\t\t\t\t\t<li><a href=\"$url\" title=\"$link_title\">$link_title</a></li>\n";
						$i++;
					}
					echo "\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n";
					echo "\t\t\t\t</div>\n";
					}
				}
			
			break;
			
			default:
				
				// get the page display name from the database
				extract(safe_row("*", "pixie_core", "page_name = '$s'"));
				// print the display name into a h3
	  			echo "<div id=\"$s\">\n\t\t\t\t\t<h3>$page_display_name</h3>\n";
	  			
	  			// get all the tags from the links page using the all_tags function within Pixie
	  			$tags_array = all_tags("pixie_module_links", "links_id >= '0'");
	  			
	  			// make sure we actually got soemthing
				if (count($tags_array) != "0") {
					// sort the tags in the array
					sort($tags_array);
					$max = "0";
					// begin to loop the array of tags			
					for ($c=1; $c < (count($tags_array)); $c++) {
						// get the current tag
						$current = $tags_array[$c];
						// search for links tagged with the current tag
						$rz = safe_rows("*", "pixie_module_links", "tags REGEXP '[[:<:]]". $current ."[[:>:]]'");
						$num = count($rz);
						// if found then output all those links into an unordered list
						if ($rz) {
							echo "\t\t\t\t\t<div id=\"$current\" class=\"link_list\">\n\t\t\t\t\t\t<h4>".ucwords($current)."</h4>\n\t\t\t\t\t\t<ul>\n";
							$i = 0;
							while ($i < $num){
								$out = $rz[$i];
  								$url = $out['url'];
  								$link_title = $out['link_title'];
								echo "\t\t\t\t\t\t\t<li><a href=\"$url\" title=\"$link_title\">$link_title</a></li>\n";
								$i++;
							}
							echo "\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n";
						}
					}
				}

	  			echo "\t\t\t\t\t</div>\n";

			break;
		
		}
		
	break;
}
?>

```

You can download a copy of this [module here](http://pixie-cms.googlecode.com/files/module_links_v1.0.zip).

_Tip: As a module is called into your page three times during a page build it is not possible to declare functions in the module itself. To get around this create a second file called with your module ending in `_functions.php`. For our links page I would create a file called: `links_functions.php` and place it in the modules folder (admin/modules). This will be loaded once and give you access to any functions you reuse._

### Useful functions ###

---


There are quite a few functions available to you from within Pixie, these are some of the most useful:

  * **createURL($s,$m,$x,$p)**
> Pixie supports two types of URL (clean or messy). This function will create an appropriate URL depending on how a site is setup. It is really important this function is used to reference an internal links around your site.

  * **encode\_email($email\_address)**
> This function allows you to encode an email address to protect it against spam harvesters. Thanks to [Wordpress](http://www.wordpress.org) for this one!

  * **Database functions** (to many to list)
> Pixie uses the same database class as [Textpattern](http://textpattern.com/), the class allows for many different types of interaction with the database. Please refer to lib\_db.php file in the lib (admin/lib) folder for more information.

  * **make\_slug($string)**
> This function will convert any string into a friendly URL slug. For example the string "this is & title" would be converted to "this-is-title".

  * **squash\_slug($string)**
> Will attempt to reverse the make slug function, converting "this-is-title" into "this is title".

Browsing through the lib (admin/lib) folder you will find all the libraries and functions you have access to. We are always on the look out for great PHP libraries to add into the library so please send us [any recommendations](http://groups.google.com/group/pixie-cms/).

### What next? ###

---


This is only a very quick example of how to extend Pixie. We will try and add more examples to this wiki soon. In the mean time why not download some of our other [modules and plugins](http://www.getpixie.co.uk/downloads/) to pick apart.


---


If you have questions about this page head to the [Pixie forums](http://groups.google.com/group/pixie-cms/).