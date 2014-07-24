<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php print $head_title ?></title>
	<meta charset="utf-8" />
        <link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/reset.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/slide.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/niftyPrint.css" media="print">
	<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/niftyCorners.css" type="text/css" />
	<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/style.css" type="text/css" />
       <link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/style2.css" rel="stylesheet" type="text/css">
        <link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/fonts.css" rel="stylesheet" type="text/css">
        <!--[if lte IE 8]>
          <script src="http://js.cwhcode.com/html5/"></script>
        <![endif]-->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
		
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
		
	  <?php print $styles ?>
	  <?php print $scripts ?>
	  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
 

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/js/niftycube.js"></script>
    </head>

<body>

<?php if ($left) { ?>
<?php //print $left ?>
<?php } ?>
	
<div id="container">

<header id="top">
	<div class="logo"><a href="<?php echo $base_path; ?>"><img src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/images/logo.png" alt="logo" /></a></div>
	<div class="lang">
		<?php print $languageswitcher ?>
	</div>
	<div class="search">
		<?php print $search_box ?>
	</div>
<div class="menu">
	<div class="menuribbon"><img src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/images/menuribbon.png" alt="ribbon"></div>
		<!--ul>
			<li><a href="#">Tentang BaKTI</a></li>
			<li><a href="#">Program</a></li>
			<li><a href="#">Berita BaKTI</a></li>
			<li><a href="#">Informasi</a></li>
			<li><a href="#">Dampak</a></li>
			<li><a href="#">Hubungi Kami</a></li>
		</ul-->
      <?php //if (isset($secondary_links)) { ?><?php //print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php //} ?>
      <?php// if (isset($primary_links)) { ?><?php //print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php //} ?>	

		<?php print $menubar ?>
</div><!-- end menu -->
</header>


<article id="maincontent">
<div class="contentdesc">
<div class="pad">
<?php print $redaksional; ?>
</div>
</div><!-- end contentdesc -->
<div class="wrapcontent">
	<?php if (!empty($right)) { ?>
	<div class="col1">
	<?php } else { ?>
	<div class="col1_full"><!-- isi dengan div yang 100 % -->
	<?php } ?>
		<div class="ttlbox">
			<div class="heading"><?php if (!empty($node->type) && $node->type <> "page" && $node->type <> "story" && $node->type <> "webform") print ucfirst(node_get_types('name', $node)); else print $title ?></div>
			<div class="path"><?php print $breadcrumb; if ($title != "") {echo "&nbsp;&raquo;&nbsp;<strong>".$title."</strong>";} ?></div>
		</div>
		
		<?php print $bannerpage; ?>
		<?php print $content ?>
	
	</div><!-- end col1 -->
</div>
<div class="zone2home">
	<?php print $hometopcontent ?>
</div><!-- end zone2home -->

<div class="zone3home">
	<?php print $homebottomcontent ?>
</div><!-- end zone3home -->

</article>

<?php print $footer; ?>

</div><!-- end container -->

</body>
</html>
<?php
print $closure 
?>