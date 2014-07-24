<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
	<title><?php print $head_title ?></title>
	<meta charset="utf-8" />
<!-- timeline><!-->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Dosis:500,700' type='text/css'>
<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/tipsy/tipsy.css" type="text/css">
<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/prettyPhoto/css/prettyPhoto.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/jquery/m.css" type="text/css" media="all">
<script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/jquery/jquery-1.7.1.min.js"></script><script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/jquery/jquery-ui-1.8.18.custom.min.js"></script><script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/jquery/jquery.ui.touch-punch.js"></script><script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/prettyPhoto/js/jquery.prettyPhoto.js"></script><script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/tipsy/jquery.tipsy.js"></script><script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/audiojs/audio.min.js"></script><script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/jquery/s.js"></script><script type="text/javascript" src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/jquery/m.js"></script>
<!-- end timeline><!-->

	<link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/reset.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/style.css" type="text/css" />
       <link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/style2.css" rel="stylesheet" type="text/css">
        <link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/fonts.css" rel="stylesheet" type="text/css">
        <link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/tabcontent.css" rel="stylesheet" type="text/css">
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
<!--
  	  <script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.googlemaps.js"></script>
<script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAATx5u_-TtleNAf5f3KEd-2BSWOatdnBIGZVo8u1kkQhrc9g4spBSik4Z1ikAFO1lt2d4rrZlJzpqRmw" type="text/javascript"></script>
-->
	  
		<script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.ui.core.js"></script>
		<script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.ui.widget.js"></script>
		<script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.ui.accordion.js"></script>
		<script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/tabcontent.js"></script>
		
		<script>
		$(function() {
			$( "#accordion" ).accordion();
		});
		</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17277546-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
</head>

<body>
<?php if ($left) { ?>
<?php //print $left ?>
<?php } ?>
	
	
<div id="container">

<header id="top">
<div class="logo"><a href="<?php echo $base_path; ?>"><img src="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/images/logo.png" alt="logo" /></a></div>
	<div class="lang">
		<!-- <a href="#">English</a> | <a href="#">Indonesia</a> -->
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
	
	<?php if (!empty($right)) { ?>
	<div class="col2">
	<?php } ?>
	
	<?php if ($right) { ?>	
     	<?php print $right; ?>
	<?php } ?>
	
	<?php if (!empty($right)){ ?>
	</div>
	<?php } ?>
	
</div><!-- end wrapcontent -->

</article>

<?php print $footer; ?>

</div><!-- end container -->
 <!-- smartlook includes --> 
	<script type="text/javascript"> 
		var issuuConfig = { 
			guid: '57a2f12f-93da-4218-a7de-1417a74982fc', 
			domain: '*.bakti.org' 
		}; 
	</script> 
	<script type="text/javascript"> 
		document.write(unescape("%3Cscript src='http://static.issuu.com/smartlook/ISSUU.smartlook.js' type='text/javascript'%3E%3C/script%3E")); 
	</script> 
<!-- end smartlook includes --> 

</body>
</html>
<?php
print $closure 
?>