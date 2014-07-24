<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>


<hr>
header:
<?php print $header ?>

<hr>
menu:
      <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php } ?>
      <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
     
<hr>
search:	 
	 <?php print $search_box ?>


<hr>
    <?php if ($left) { ?>
		left sidebar:
      <?php print $left ?>
	<?php } ?>

<hr>	
      <?php if ($mission) { ?>
	  mission:
	  <?php print $mission ?>
	  <?php } ?>
<hr>
	  breadcrumb:
        <?php print $breadcrumb ?>
 <hr>    
	 title:
	 <?php print $title ?>
 <hr>    
	 tabs:
	 <?php print $tabs ?>
<hr>	 
	 messages:
    <?php if ($show_messages) { print $messages; } ?>
<hr>
	help:
    <?php print $help ?>
<hr>    
	content:
		<?php print $content; ?>
<hr>		
	feed:
        <?php print $feed_icons; ?>
<hr>

    <?php if ($right) { ?>
		right sidebar:
      <?php print $right ?>
    <?php } ?>

<hr>
footer:
  <?php print $footer_message ?>
  <?php print $footer ?>
<hr>
copyright:
<?php print $closure ?>

