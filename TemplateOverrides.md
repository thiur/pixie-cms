### Overview ###

---

Pixie now supports template overrides, which you can use to sculpt your template's design to your very own design.
The feature provides exciting new ways for you (The theme designer,) To express your talent, explore new layout designs and to use them within your Pixie installation.

Sometimes projects become a little more involved than normal and solutions that go beyond using just css to manipulate a Pixie template need to be sought.
The index.php override feature provides the ability to edit the html structure and also the php code of a Pixie template.
Thus providing a new level of control for site designers.

It is easy to use and to implement this feature onto your Pixie website but it is considered an **advanced feature** ideally suited for web developers who possess skills in xhtml and css.

The single prerequisite for this feature to work is that your site must be running Pixie version 1.04 or greater.

**It is highly recommended that you keep your Pixie site up to date.**
**Version updates contain bug fixes and new features that will help secure and improve your Pixie website.**



### Instructions ###

---

#### Creating and activating the override ####

To create the override you are going to branch some content from Pixie's root index.php
file into a new file named theme.php, inside the directory containing your template.

The whole process is very simple.

Firstly, you create a new file inside your template's directory. Name it
theme.php and open it in your favourite text editor.
(For Windows users I can recommend [SciTE](http://www.scintilla.org/SciTE.html) instead of notepad.)
Next, go up three directories to pixie's root folder, where you will
see files like sitemap.xml and .htaccess.
Open the file index.php in that directory using your text editor.
Select the entire text, using the mouse, from and including the code :

`<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">`

All the way down the page, down to and including the closing html tag :

`</html>`

And not below it.

Now copy the highlighted text and then paste it straight into the empty theme.php file you created at the beginning.

That's it! Easy. Close the index.php you copied the code from and then save the theme.php file that you pasted the code into.
Now make a test modification to the html code in the new theme.php file which you should still have open. (Add "It works!" anywhere in the body for example,) clear your web browser's cache (Clearing the cache may not be necessary for all browsers) And then refresh your site as it is displayed in your web browser.

You should now see any modifications you made to the new theme.php displayed in front of you.

You now have the flexibility to change any and all code inside the new theme.php file and you may now structure and style your site exactly as you wish. Perhaps maybe even add some [javascript](http://jquery.com/)? Or if you're really clever, how about importing a [css framework](http://elements.projectdesigns.org/)?

The options for site design and customisation are now wide open for you by incorporating this modification into your template. The only limits are your imagination and the level of the skills in your possession.
To help you craft and style your own design, a great tool to try is [Firebug](http://getfirebug.com/). It really helps you to pick out selectors by class, id, etc when you want to add some css style to elements fast.

You can learn more about Pixie's template system by reading about Pixie's [Theme Development](http://www.getpixie.co.uk/support/article/theme-development/).