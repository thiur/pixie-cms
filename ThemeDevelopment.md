Making themes for Pixie is easy, anyone with knowledge of
CSS will be able to create a theme. Pixie was created with the same philosophy as the [CSS Zen Garden](http://www.csszengarden.com/):

> The goal of the site is to showcase what is possible with CSS-based design. Style sheets contributed by graphic designers from around the world are used to change the visual presentation of a single HTML file, producing hundreds of different designs. Aside from reference to an external CSS file, the HTML markup itself never changes. All visual differences are the result of the CSS (and supporting imagery) - [Wikipedia](http://en.wikipedia.org/wiki/CSS_Zen_Garden).

You could call Pixie the "CMS Zen Garden". If CSS is not your thing then please contact [toggle](http://www.toggle.uk.com) who will be happy to quote you for the design and development of your own unique theme.

### Starting your design ###

---


A Graphic design tutorial is beyond the scope of this document. The main point I want to get across here is that you should visualise your site however you feel comfortable. Personally I build all my website designs in Photoshop. Whatever applications you use, make sure you can easily save smaller slices of your design into web compatible image formats (.jpg, .gif and .png).

### CSS ###

---


To make life simple we have created a theme template which contains the files you need to get your theme started. The template can be [downloaded here](http://pixie-cms.googlecode.com/files/theme_template_v1.0.zip).

The template is broken into a number of files, each of which are explained below:

  * **settings.php**
> This is your starting point for the template, it has plenty of
> helpful comments to get you started. This file lets Pixie know
> about your theme.

  * **core.css**
> The core css file resets the css and lays out new base styles
> for most html elements. As a rule you should not need to add
> or remove any selectors in this file, just edit the values.

  * **layout.css**
> This file is where you place your page layouts, we have added some examples styles for image replacement and a fixed footer. You will probably want to clear this file and start again.

  * **dynamic.css**
> This file is for all your blog/dynamic page css.

  * **navigation.css**
> This file is for your sites navigation style. We felt it was best to keep navigation style separate as it can often be very complex.

  * **print.css**
> A basic print style has been supplied, place your own print
> style in this file.

  * **404.css**
> This file styles your custom 404 page.

  * **ie6.css/ie7.css** (optional)
> These files are used to store IE6 and IE7 specific styles.
> These two files are not required and can be removed if not used
> in your theme.

  * **handheld.css** (optional)
> This css file is used to create a stylesheet compatible with
> mobile devices. This file is not required and can be removed
> if it is not used as part of your theme.

  * **favicon.ico**
> The favicon for your theme.

  * **thumb.jpg**
> A preview thumbnail of your theme.

  * **/images/**
> The images folder is where you store your theme graphics and
> icons. We have supplied you a free icon pack called "bitsie"
> that you may use within your theme. "bitsie" has two
> variations: light and dark and are released under the:
> Creative Commons Attribution 2.0 Licence.

  * **index.php** (optional)
> As of Pixie 1.03 you can now define your own HTML layout in a
> custom index.php file as part of your theme. This file will
> need to be based on the root index.php file found in your Pixie
> download and contain code from `<!DOCTYPE>` to `</html>`.
> More information about index.php overrides can be found here : [Template Overrides](http://www.getpixie.co.uk/support/article/theme-development-template-overrides/)

Each CSS file is heavily commented, so you'll learn a lot by reading through them. Feel free to clear out the comments once your theme is finished.

_Tip: Pixie will always look for a CSS file with the name of the current page slug. Lets say you have installed the links module. When a visitor views the page www.mysite.com/links/ (www.mysite.com?s=links for those of you without clean URL support) Pixie will look for a CSS file called `links.css` in your current themes folder (/admin/themes/current\_theme/). If found Pixie will load this file into the rest of your CSS. This allows you to completely change the look of a certain page. This will work for any static, module or plugin page you have on your site._

If you need some inspiration for your themes - or want to see how other themes have been made - feel free to download and pick apart any of the themes on the [Pixie site](http://www.getpixie.co.uk/downloads/). We have kept the CSS easy to follow to make learning from it easier.

### Installation ###

---


To install your finished theme rename the template folder to the name of your theme and upload it to the **admin/themes/** folder within Pixie. You should now be able to login to Pixie and select your theme in the Settings->Theme tab. It really is that simple!

As always if you need help or have any suggestions on how to improve themes within Pixie, please head to the [Pixie forums](http://groups.google.com/group/pixie-cms/).


---


If you have questions about this page head to the [Pixie forums](http://groups.google.com/group/pixie-cms/).