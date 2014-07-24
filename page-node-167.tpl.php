<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
	<title><?php print $head_title ?></title>
	<meta charset="utf-8" />
        <link href="<?php print $base_url . $base_path; ?>sites/all/themes/bakti/css/reset.css" rel="stylesheet" type="text/css">
	
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
  	  <script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.googlemaps.js"></script>
<script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAATx5u_-TtleNAf5f3KEd-2BSWOatdnBIGZVo8u1kkQhrc9g4spBSik4Z1ikAFO1lt2d4rrZlJzpqRmw" type="text/javascript"></script>
	  
		<script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.ui.core.js"></script>
		<script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.ui.widget.js"></script>
		<script src="<?php print $base_url.$base_path; ?>sites/all/themes/bakti/js/jquery.ui.accordion.js"></script>
		
		<script>
		$(function() {
			$( "#accordion" ).accordion();
		});
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
		<?php
			$sql = "SELECT bakti_node.nid, bakti_files.filepath, bakti_node.title, bakti_files.filesize, bakti_files.filemime, 
				bakti_pubdlcnt.count, bakti_node.created FROM bakti_content_type_file_download LEFT JOIN bakti_node ON bakti_node.nid = 
				bakti_content_type_file_download.nid LEFT JOIN bakti_files ON bakti_files.fid = 
				bakti_content_type_file_download.field_file_download_file_fid LEFT JOIN bakti_pubdlcnt ON bakti_pubdlcnt.nid = 
				bakti_node.nid GROUP BY bakti_node.nid ORDER BY bakti_node.created DESC";
			global $base_url;
			
			$query = db_query($sql);
			echo "<table cellpadding='0' cellspacing='0' width='100%'>";
			echo "<thead>";
			echo "<th>File</th>";
			echo "<th>Download</th>";
			echo "<th>Size</th>";
			echo "<th>Upload Date</th>";
			echo "</thead>";
			echo "<tbody>";
			
			while($row = db_fetch_array($query)) {
				echo "<tr>";
				echo "<td>";
				echo "<img src='".$base_url."/sites/all/modules/filefield/icons/".str_replace('/','-',$row['filemime']).".png' />&nbsp;";
				echo "<a target='_blank' href='".$base_url."/sites/all/modules/pubdlcnt/pubdlcnt.php?file=".$base_url.'/'.$row['filepath']."&nid=".$row['nid']."'>".$row['title']."</a></td>";
				if ($row['count'] < 1) {$jml = 0;} else {$jml = $row['count'];}
				echo "<td>".$jml."</td>";
				$filesize = round($row['filesize']/1024, 2);
				echo "<td>".$filesize." Kb</td>";
				echo "<td>".date('d-m-Y', $row['created'])."</td>";
				echo "</tr>";
			}
			
			echo "</tbody>";
			echo "</table>";
		?>
	
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

</body>
</html>
<?php
print $closure 
?>