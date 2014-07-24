<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
	<title><?php print $head_title ?></title>
	<meta charset="utf-8" />

        <link href="sites/all/themes/bakti/css/reset.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="sites/all/themes/bakti/css/style.css" type="text/css" />
       <link href="sites/all/themes/bakti/css/style2.css" rel="stylesheet" type="text/css">
        <link href="sites/all/themes/bakti/css/fonts.css" rel="stylesheet" type="text/css">
        <link href="sites/all/themes/bakti/css/tabcontent.css" rel="stylesheet" type="text/css">
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
	  
		<script src="sites/all/themes/bakti/js/jquery.ui.core.js"></script>
		<script src="sites/all/themes/bakti/js/jquery.ui.widget.js"></script>
		<script src="sites/all/themes/bakti/js/jquery.ui.accordion.js"></script>
		<script src="sites/all/themes/bakti/js/tabcontent.js"></script>
		
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
