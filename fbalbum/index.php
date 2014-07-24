<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	</head>
<body>
<?php
	require 'fb-sdk/src/facebook.php';

	$facebook = new Facebook(array(
	  'appId'  => '237856759676849',
	  'secret' => 'dd9d3982f8412cbca094bdaa4b82eb3e',
	  'cookie' => true, // enable optional cookie support
	));
	
	//defining action index
	isset( $_REQUEST['action'] ) ? $action = $_REQUEST['action'] : $action = "";
	
	
if( $action == ''){
	echo "<p>COAN Dummy Page Albums</p>";
	$fql    =   "SELECT aid, cover_pid, name FROM album WHERE owner=36058952927";
	$param  =   array(
	 'method'    => 'fql.query',
	 'query'     => $fql,
	 'callback'  => ''
	);
	$fqlResult   =   $facebook->api($param);
	foreach( $fqlResult as $keys => $values ){

	
			//to get album cover
		$fql2    =   "select src from photo where pid = '" . $values['cover_pid'] . "'";
		$param2  =   array(
		 'method'    => 'fql.query',
		 'query'     => $fql2,
		 'callback'  => ''
		);
		$fqlResult2   =   $facebook->api($param2);
		foreach( $fqlResult2 as $keys2 => $values2){
			$album_cover = $values2['src'];
		}
		echo "<div style='padding: 10px; width: 150px; height: 170px; float: left;'>";
		echo "<a href='index.php?action=list_pics&aid=" . $values['aid'] . "&name=" . $values['name'] . "'>";
			echo "<img src='$album_cover' border='1'>";
		echo "</a><br />";
		echo $values['name'];
		echo "</div>";
		
		
	}
}

if( $action == 'list_pics'){
	isset( $_GET['name'] ) ? $album_name = $_GET['name'] : $album_name = "";
	
//	echo "<div><a href='index.php'>Back To Albums</a> | Album Name: <b>" . $album_name . "</b></div>";
	$fql    =   "SELECT pid, src, src_small, src_big, caption FROM photo WHERE aid = '" . $_REQUEST['aid'] ."'  ORDER BY created DESC";
	$param  =   array(
	 'method'    => 'fql.query',
	 'query'     => $fql,
	 'callback'  => ''
	);
	$fqlResult   =   $facebook->api($param);
	
	echo "<div id='gallery'>";
	
	foreach( $fqlResult as $keys => $values ){
		
		if( $values['caption'] == '' ){
			$caption = "";
		}else{
			$caption = $values['caption'];
		}	
		
		echo "<div style='padding: 10px; width: 120px; height: 80px; float: left;'>";
			echo "<a href=\"" . $values['src_big'] . "\" title=\"" . $caption . "\">";
			echo "<img src='" . $values['src'] . "' style='border: medium solid #ffffff;' />";
			echo "</a>"; 
		echo "</div>";
	}
	
	echo "</div>";
}
?>
	
	
	<!-- START JLIGHTBOX -->
	
		<script type="text/javascript" src="jQuery-lightbox/js/jquery.js"></script>
		<script type="text/javascript" src="jQuery-lightbox/js/jquery.lightbox-0.5.js"></script>
		<link rel="stylesheet" type="text/css" href="jQuery-lightbox/css/jquery.lightbox-0.5.css" media="screen" />
		
		<script type="text/javascript">
		$(function() {
			$('#gallery a').lightBox();
		});
		</script>
	
	<!-- END JLIGHTBOX -->
  </body>
</html>