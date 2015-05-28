#### File / Directory Structure ####

  * index.php
  * admin
    * admin
      * modules (modules used by the admin interface)
      * theme (theme stylesheets for styling the admin interface)
    * blocks (extra content that can be included on pages - see BlockDevelopment)
    * install (installs pixie, delete when Pixie is installed)
    * jscript (JavaScript files used by Pixie)
      * ckeditor (CKEditor RichText editor)
      * editor-plugins (Pixie's custom CKEditor RichText editor plugins)
    * lang (language files for translating Pixie - see [Languages](Languages.md))
    * lib (core libraries used by Pixie and for module / block development)
      * bad-behavior (spam prevention)
    * modules (modules for adding extra functionality to Pixie - see ModuleDevelopment)
    * themes (see
  * files (user uploaded files)
    * audio
    * cache
    * images
    * other
    * sqlbackups
    * video


### Coding Standards ###

#### Automation ####

Considering the huge immediate benefit of cleaning Pixie's code up, we can trial this on line tool :

http://beta.phpformatter.com/

Suggest using the following settings :

Indentation style : K&R Style. (Tried PEAR style - found it hard to read.)
<a href='Hidden comment: 
By Sam:
I prefer the Allman style (brace on new line) as it is far more readable, since you have to scroll horizontally if it is on the same line.
By Tony :
It is exactly the opposite for me and braces on new lines result in slower output in my tests.
Just for the record, I feel the same way about css and it"s also true too regarding speed.
I"m not saying you are wrong, I"m saying it doesn"t do anything for me, makes the code output slower and I struggle to read it.
By Sam:
When you say "code output" you mean the time spent by PHP parsing the code is longer? So the xx in "page generated in xx" increases? Didn"t think whitepsace would effect PHP.. so in theory a page with no line breaks or unnecessary whitespace will be fastest (not that it would be a good idea to do that)
'></a>

Indent with : Tabs.

Starting indentation : 0.

Indentation : 1. (Tried 2 - was too spaced out.)

Remove empty lines : (True.)

Align assignments statements nicely : (True.)

(No other options selected.)

Initial results are good. It looks to be a very useful tool and will make the bulk of this work much easier.

#### Short Tags ####
```
<? ... ?>
```
Not to be used, since not all web hosts support them. Use :
```
<?php ... ?>
```
Instead.

#### End tags ####

##### (Proposal) #####

Document ending php close tags must not have a preceding empty space or line.
Using document closing tags is not recommended because the php interpreter closes itself at the end of each script regardless.

#### Indentation ####

Indent code using tabs, not spaces (perhaps some screenshots of settings to change in popular applications - e.g. Notepad++, Scintilla based apps like Programmers Notepad2?)
One indentation is a double tab key tap (Double tap.)

#### Line Termination ####

Use Linux / Unix style line endings (LF)

#### Comments ####

##### (Proposal) #####

```
/* Style */
```
Type commenting for informative messages and developer info.

```
// Single line comments.
```
For warnings or critical information.



File content and license descriptors like this :
```
/**
 * Pixie: The Small, Simple, Site Maker.
 * 
 * Licence: GNU General Public License v3
 * Copyright (C) 2008, Scott Evans
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see http://www.gnu.org/licenses/
 *
 * Title: Index
 *
 * @package Pixie
 * @copyright 2008-2010 Scott Evans
 * @author Scott Evans
 * @author Sam Collett
 * @author Tony White
 * @author Isa Worcs
 * @link http://www.getpixie.co.uk
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3
 * @todo loads of debugging!
 *
 */
```
At the top of every file, so that ide(s) such as kdevelop, (http://www.kdevelop.org/) netbeans, (http://netbeans.org/features/php/) Eclipse for PHP Developers (http://www.eclipse.org/) Or any syntax highlighting enabled text editor can understand them better.
Anyone who edits the file adds their name to an @author statement, so it's easy to spot who has been working on it.

#### File type encoding, character set, database connection & storage collation ####

##### (Proposal) #####
UTF-8 (Highly recommended as the default.)

#### TRUE, FALSE and NULL values ####

##### (Proposal) #####

Pixie's php code uses TRUE, FALSE and NULL (Must be upper case.)
To check for a TRUE, FALSE and NULL value in a variable, constant or index use the code :

```
if ( $foo === NULL ) { return TRUE; }
```

Notice that the === means exactly (In this case) NULL.

Pixie's javascript code uses true, false and null (Must be lower case.)

#### Variables, constants, indexes and offsets ####

##### (Proposal) #####

All variables and arrays a part from the super globals and $this should be prefixed with the string :

```
pixie_
```

Doing so will mitigate the security hole open by using :

```
extract($_REQUEST);
```

Then we can use :

```
extract($_REQUEST, EXTR_PREFIX_ALL, 'pixie');
```

Globally.
Currently, the files index.php, admin/index.php, admin/admin/modules/ajaxfileupload.php and admin/install/createuser.php still use extract on the :

```
$_REQUEST
```

Super global and although there are measures in place to prevent an exploit in that method, we should really make this change to completely sure up the code.

I propose that this very big change in Pixie's variables occurs after this standards guide is approved and the standards are applied to Pixie's code. Therefore, applying the change will be easier and bugs easier to find, if the code is easier to read.
Yes this must be done to secure Pixie correctly and yes it is a huge problem that could lead to module incompatibilities and all other sorts of trouble.
Alternative method suggestions are welcome. However, there doesn't instantly appear to be any other way to secure Pixie due to the extremely liberal use of extract on the request super global.

Variables, indexes and offsets must always be defined prior to use.
And be defined as NULL first if the variable can result in undefined (Unset) Should it's TRUE or FALSE return result in conditional operation and\or expression.

Seeing as :

```
$foo = NULL;
if ($foo) { /* Do this */ }
```

returns FALSE.

To predefine variables as null, use this type of code :

```
if ( (isset($foo)) && ($foo) ) { /* Do nothing */ } else { $foo = NULL; }
```

Seeing as :

```
if ( (!isset($foo)) && (!$foo) ) { $foo = NULL; }
```

Does not work because php will throw an undefined message due to the fact it can not check and compare nothing against nothing.

And :

```
if ( (isset($foo)) && ($foo) ) { /* Do nothing */ } else { $foo = ''; }
```

is just plain uninformative and can't be checked to see if it's value is NULL.

##### Variable coupling (Chaining) #####

Using :

```
$formtitle = "{$lang['advanced']} {$lang['page_settings']}";
```

instead of :

```
$formtitle = $lang['advanced'] . " " . $lang['page_settings'];
```

php is much faster when the coupled variables are expressed by wrapping them as one in quotation marks and then wrapping each variable inside the quotation marks individually as an expression (Using curly braces.) Spaces in between variables wrapped in curly braces, which are wrapped by double quotes are verbatim (Exactly as seen.)

#### Parenthesis (Brackets) ####

##### (Proposal) #####
<a href='Hidden comment: 
By Sam:
If a code formatter is to be used, will it format the code in the way as detailed below?
'></a>

We use spaces between individual conditional statements like this :

```
if ( (isset($foo)) && ($foo) ) { /* Do nothing */ } else { $foo = NULL; }
```


Not like this :

```
if ((isset($foo))&&($foo)) { /* Do nothing */ } else { $foo = NULL; }
```

It's much easier to read the first example.

Single conditional statements in a similar manner :

```
if ( (isset($foo)) ) { /* Do nothing */ } else { $foo = NULL; }
```

It makes adding additional conditional statements in future (Like an or, &&, >, /) To each statement easier.