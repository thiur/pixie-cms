Pixie offers basic support for languages. We are currently looking for people to help translate the [core English file](http://pixie-cms.googlecode.com/files/language_en_v1.1.zip) into other languages. The core file contains all the text strings from within Pixie. If you would like to help out please get in touch via the [forums](http://groups.google.com/group/pixie-cms/).

We are also open for discussion on ways in which language support can be improved. For example we would like to offer a multi-lingual installer and build in support for right to left languages. If you can help with these areas please get in [touch](http://groups.google.com/group/pixie-cms/).


#### How to create a language file ####

To create a language file, please download the language template:

http://pixie-cms.googlecode.com/files/language_en_v1.1.zip

Edit the downloaded file and replace the strings of English text between the 'some text here' single quotation marks, with your translation of the English please.

An example is:

```
'skip_to' => 'Skip to content',
```

Becomes:

```
'skip_to' => 'Spring til indhold',
```

In Pixie we use the first string : 'skip\_to' to reference that we want to use the text after the => as the translation. So the string furthermost to the left must remain unchanged (skip\_to in the above example.) Your translation goes in between the single
quotes on the right.

When you edit your template, please use the language template and do not create a new file by copy and pasting the template's contents into a newly created file.

When you edit and save files, ensure that your text editor is set to save in utf-8. (Pixie uses utf-8 character encoding exclusively, both for files and the database.)

Please do not use Notepad, Wordpad or Microsoft Word to edit language files. None of those editors are suitable for editing source code. If you need a good text editor that supports syntax highlighting try the open source [SciTE](http://www.scintilla.org/SciTE.html) for Windows.

#### Common mistakes ####

The single most easy and most common mistake to make is, to use a search and replace on language files. Doing so, you can mess up the words in the strings on the left, which must remain in English. So please don't do search and replace without being very careful not to replace the strings on the left. Evaluate each replace individually before you do it, should you want to speed up your work by using a text editor's search and replace feature.

#### Uploading the language file ####

Upload your translation to the Google group here:

http://groups.google.com/group/pixie-cms/files?upload=1

and start a new thread to announce it. It will then get picked up by one of the core team and integrated into the next version of Pixie.


---


If you have questions or comments about this page head to the [Pixie forums](http://groups.google.com/group/pixie-cms/).