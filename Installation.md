This page details everything you will need to know to get Pixie installed onto your web server. Those of you familiar with self hosted scripts should find this a very simple process. We have tried our best to make the install process as simple as possible.

If you are not comfortable we installing the Pixie on your own server we recommend you try one of our [hosted Pixie packages](http://www.arvixe.com/516-22-3-11.html).

### Requirements ###

---


I am not a big fan of requirements, they are restricting and a little bit complicated for the average user. The good news is that Pixie is simple to get along with... here is what you need:

#### Server Requirements ####

  * A Web Server
> > Pixie has been developed in a Linux/Unix hosting environment and is best suited to these platforms. Pixie should run (not currently tested) on a Windows server but some features may not work as expected.

  * PHP
> > Version 5 and above. Pixie requires PHP5 to correctly support timezones.

  * MySQL
> > Version 4.1 and above.

#### Browser Requirements ####

  * JavaScript
> > You will need to have a JavaScript enabled browser to use Pixie. Pixie is tested on IE7, IE6, Firefox (Mac & PC) and Safari (Mac & PC). Our favourite browsers are: [Firefox](http://www.getfirefox.com) and [Safari](http://www.apple.com/safari/).

### Hosting & Uploading ###

---


#### Web Hosting ####

Web hosting is cheap and easy to come by these days. You may already have some with your Internet service provider (ISP). Our recommended hosting provider is [QuicklyWeb](http://www.quicklyweb.com/aff.php?aff=011).

#### Uploading your files ####

Once you have saved Pixie onto your computer you need to [unzip](http://en.wikipedia.org/wiki/ZIP_(file_format)) (extract) it and upload it to your web server. Your web host company will have supplied you with your FTP details which you will need place into your favourite FTP client. We recommend:

  * Windows - [Leech FTP](http://www.download.com/Leech-FTP/3000-2160_4-10122207.html)
  * Mac - [CyberDuck](http://cyberduck.ch/)
  * Linux - [FTPCube](http://ftpcube.sourceforge.net/)

All of these FTP clients are free to use.

### The Pixie Installer ###

---


Now Pixie is uploaded to your web server the automated installer can take over (phew!). Visit your web address (e.g. www.mysite.com) and Pixie will now begin to install your site. It is a simple 3 step process that should take a couple of minutes. Make sure you have your database details ready (your host should supply you with them on request).

Notes:
  1. If you get the message _Pixie is unable to write to your config.php file_ , you should temporarily change permissions of _admin/config.php_ to 666 (change back after install to 644) On some hosting servers, this will be shown as `rw rw rw` and `rw r  r` respectively.
  1. If for any reason the installer fails you may need to [manually install Pixie](http://www.getpixie.co.uk/support/article/manual-installation/).




---


If you have questions about this page head to the [Pixie forums](http://groups.google.com/group/pixie-cms/).