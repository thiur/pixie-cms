A very rough outline for the development of new features.

#### Version 1.0 ####

  * The first public release.

#### Version 1.1 ####

  * Quotes in Tags "" so you can have 2 words eg. "This tag". (Status : Pending)
  * ~~TinyMCE compressor or possibly a new rich text editor.~~ (Status : Complete! CKEditor.)
  * A Cron implementation for automating tasks. (Status : Pending)
  * ~~Bring total amount of themes to 20+.~~ (Status : Complete! 20+ Themes and counting on getpixie.co.uk)
  * Subscribe to RSS of a certain user in multi user blogs (e.g. I want to see all Scott's posts). (Status : Pending)
  * ~~Table prefix during install to allow more than one site per database.~~ (Status : Complete!)
  * More languages by integrating [Google AJAX Language API](http://code.google.com/apis/ajaxlanguage/). (Status : Pending (More languages have been added.))

#### Version 1.2 ####

  * More install options with new modules (specifically for business sites/users). (Status : Pending)
  * ~~Upload functionality to be given in/around [TinyMce](http://tinymce.moxiecode.com).~~ (Status : Complete! CKEditor has this ability.)
  * Upgraded [page carousel](http://jqueryfordesigners.com/slider-gallery/) [menu](http://nettuts.s3.amazonaws.com/358_jquery/example%20files/example3.html). (Status : Pending - HIGH PRIORITY)
  * Site search module/plugin. (Status : Pending - HIGH PRIORITY)

#### Version 1.3 ####

  * Blocks to be improved with new admin section and database. (Status : Pending)
  * Improve date and time picker (and code for dates, timezones etc). (Status : In progress (Needs to be coupled with language choice to auto detect timezone.)

#### Version 1.4 ####

  * Improved dashboard with much better [statistics visualisation](http://www.alistapart.com/d/accessibledata/example-final.html) and Digg spy style updates. (Status : Unknown - Involves analytics.)
  * Video player for uploaded videos. (Status : Potentially invalid due to html 5 video element. We can swap thickbox for http://catcubed.com/2008/12/23/ceebox-a-thickboxvideobox-mashup/ to  make embeds from youtube, vimeo, etc easy.)

#### Version 1.5 ####

  * Import from Textpattern, Wordpress, Moveabletype, blogger. (http://oauth.net/) (Status : Pending)
  * New interface design. (Status : Unknown)
  * New "default" theme. (Status : Unknown)
  * ~~Optional template files for your themes.~~ (Status : Complete!)
  * Multi-levels of http://www.bernardopadua.com/nestedSortables/test/nested_sortable/. (Status : Unknown - Potentially breaks any future touch screen support.)
  * Introduce pre-release security testing of Pixie using [skipfish](http://code.google.com/p/skipfish/wiki/SkipfishDoc) (Status : Pending)
  * Prefix all of Pixie's variables with `pixie_` and set extract to use prefix pixie. Requiring all variables to be prefixed pixie_it will then become a requirement for all Pixie code. This will ensure safer code but also grow the code base considerably. (Status : Pending)_

#### Version 1.6 ####

  * Page caching. (Status : Pending)
  * iPhone version based on [iPhone interface JavaScript library](http://www.davidcann.com/iphone/). (Status : Unknown - The project was created in 2007 and no longer works. Why not an iphone app instead?)

#### Version 1.7 ####

  * Complete code standards review using new specification : http://code.google.com/p/pixie-cms/wiki/DevelopingPixie (Status : Pending)
  * Atom API for posting into Pixie. (Status : Pending - Potential use for simplepie)

#### Version 1.8 ####

  * Blog via email. (Status : Pending - Requires a Pixie RESTful API)
  * Improvements to permissions and users.  (Status : Pending)

.....

#### Version 2.0 ####

  * Complete code re-write, considering using the [Simple PHP Framework](http://code.google.com/p/simple-php-framework/).
  * Admin modules to public module layout.

#### Version 2.1 ####

  * Control more than one Pixie? secure remote database control: XML RPC? SOAP?
  * Weblog pinger & Trackbacks.