# Introduction #

Known issues in versions of Pixie CMS will be outlined here.


# Errata (Known issues by released version) #

---

## Pixie 1.04 ##

---

### Theme dynamic style sheets don't load. ###

This issue was found by gyrm on the forums :
http://groups.google.com/group/pixie-cms/browse_thread/thread/ce393cc3f9ecb471
and the fix is trivial. Edit the file admin/themes/style.php and change the line :

```
$file = "{$pixie_theme}/{$pixie_s}css"; 
```

To :
```
$file = "{$pixie_theme}/{$pixie_s}.css";
```

This issue is now fixed in Pixie's development version. The fix will be included in the next release.

### The installer "Barfs" On the final page and you see a white page or an internal server error message. ###

We believe that this issue may be a result of a chmod call on badly configured servers that either do not allow chmod for security or segfault when attempting to reload the file .htaccess after it has been chmodded.
The unconfirmed solution is to remove the line :

```
@chmod('../../.htaccess', 0644); // Try to chmod the .htaccess file
```

from the file admin/install/index.php before installing (Please remember to set the permissions of the file .htaccess correctly after installation if you do apply this fix.)

### Editing the "About me" Static page is impossible. ###

This issue has been reported on the bug tracker :
http://code.google.com/p/pixie-cms/issues/detail?id=16

it was present in Pixie 1.03 and is currently under investigation.

### Using underscores `_` in the slugs of top level pages results in a broken url. ###

This issue has been reported on the bug tracker :
http://code.google.com/p/pixie-cms/issues/detail?id=17

it was present in Pixie 1.03 and is currently under investigation.