<body>
<?php if ($left) { ?>
<?php //print $left ?>
<?php } ?>
	
	
<div id="container">

<header id="top">
<div class="logo"><a href=""><img src="<sites/all/themes/bakti/images/logo.png" alt="logo" /></a></div>
	<div class="lang">
		<!-- <a href="#">English</a> | <a href="#">Indonesia</a> -->
		<?php print $languageswitcher ?>
	</div>
	<div class="search">
		<?php print $search_box ?>
	</div>
<div class="menu">
	<div class="menuribbon"><img src="sites/all/themes/bakti/images/menuribbon.png" alt="ribbon"></div>
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
<?php print render($page['redaksional']); ?>
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
		
		<?php print render($page['bannerpage']); ?>
		<?php print render($page['content']); ?>
	
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
