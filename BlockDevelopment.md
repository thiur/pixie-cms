Blocks are small chunks of content that sit beside your pages. At the moment you need to edit and create blocks manually. You will find your blocks in the blocks (admin/blocks/) folder. Pixie comes with a number of examples to get you started. Example blocks include:

  * A [Flickr](http://www.flickr.com) badge.
  * A [Digg](http://www.digg.com) badge.
  * An [RSS feed](http://en.wikipedia.org/wiki/RSS_(file_format)).

We are currently looking at ways to make block handling much easier from within the Pixie interface. If you have any ideas on how we could do this please share them in the [forums](http://groups.google.com/group/pixie-cms/).

Blocks can contain PHP, HTML, JavaScript and CSS. Think of them as tiny web pages that can re-used across your site, over and over again. To create your own block you will need  to create a PHP file that starts with `block_`, for the first example lets make a block that contains a shopping list. The file I create is called `block_shopping_list.php` which is placed into the blocks folder.

This block is very simple and is made only from HTML. Lets take a look at the code:

```

<?php
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Shopping List Block.                                     //
//*****************************************************************//
?>

<!-- Each block needs a unique ID and the class "block" -->		
<div id="block_demo" class="block">

  <!-- A block is broken into three sections, block_header, block_body and block_footer -->
  <div class="block_header">
    <!-- The block header contains the block title -->
    <h4>Demo Block</h4>
  </div>

  <div class="block_body">
    <!-- The block body contains the content of the block -->
    <ul>
      <li>Eggs</li>
      <li>Ham</li>
      <li>Spam</li>
      <li>Chips</li>
    </ul>
  </div>

  <div class="block_footer">
    <!-- The footer is often left empty and used purely for style purposes --> 
  </div>
		
</div>

```

As you can see the structure of a block is very simple. Things to remember are giving the block a unique ID and making sure the block contains the three div sections: block\_header, block\_body and block\_footer.

Lets move on to a slightly more complex example. This time we will be using the [SimplePie](http://simplepie.org/) library bundled within Pixie to create an block that contains an RSS feed from BBC news:

```

<?php
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: BBC News RSS feed.                                       //
//*****************************************************************//
?>

<div id="block_rss_bbc" class="block">

  <div class="block_header">
    <h4>BBC News</h4>
  </div>

  <div class="block_body">
    <ul>
    <?php
    // Enter the URL of your RSS feed here:
    $feed = new SimplePie('http://newsrss.bbc.co.uk/rss/newsonline_world_edition/front_page/rss.xml');
    $feed->handle_content_type();
    // Loop the RSS feed into a list
    foreach ($feed->get_items() as $item):
      $itemlink = $item->get_permalink();
      echo "<li><a href=\"".$item->get_permalink()."\">".$item->get_title()."</a></li>";
    endforeach;

    ?>
    </ul>
  </div>

  <div class="block_footer">
  </div>

</div>

```

As you can see creating blocks is very simple. Feel free to pick apart the blocks that Pixie ships with to see how they work as this is often the best way to learn and move forward. If you do create your own blocks please post the code back to the community via the [Pixie forums](http://groups.google.com/group/pixie-cms/) so we can see what they are being used for.

As mentioned at the beginning of the article we are looking for better ways to handle blocks in Pixie. At the moment we are considering moving the blocks to a database where they can be saved as sets. Each set can then be applied to a page allowing for unique combinations of blocks and easy editing of them via the Pixie interface.


---


If you have questions or comments about this page head to the [Pixie forums](http://groups.google.com/group/pixie-cms/).