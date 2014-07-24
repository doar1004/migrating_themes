<?php

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php print $picture ?>

<?php if (!$page): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <div class="meta">
  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>
<?php if (user_access('administer nodes')): ?>
      <a href="/?q=node/<?php print $node->nid; ?>/edit" title="Edit">edit</a>
   <?php endif; ?>


<?php
/**
*  <?php if ($terms): ?>
*    <div class="terms terms-inline"><?php print $terms ?></div>
*  <?php endif;?>
*/
?>

  </div>

  <div class="content">
  	<?php //echo "<pre>"; print_r($node); echo "</pre>"; ?>
  	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_preferred_1"></a>
		<a class="addthis_button_preferred_2"></a>
		<a class="addthis_button_preferred_3"></a>
		<a class="addthis_button_preferred_4"></a>
		<a class="addthis_button_compact"></a>
		<a class="addthis_counter addthis_bubble_style"></a>
	</div>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e97de496bca8946"></script>
	<!-- AddThis Button END -->
	
  	<div class="content_berita">
  	<?php
  		$nid = $node->nid;
		$view_result = views_get_view_result("kegiatan_argument");
		foreach($view_result as $item){
			if ($item->nid == $nid) {
				global $base_url; global $base_path;
				$tmulai = strtotime($item->node_data_field_kegiatan_tanggal_field_kegiatan_tanggal_value); 
				$m = date('M', $tmulai); $d = date('d', $tmulai);
				$alamat = $item->node_data_field_kegiatan_tanggal_field_kegiatan_alamat_value;
				$latitude = $item->node_data_field_kegiatan_tanggal_field_kegiatan_lat_value;
				$longitude = $item->node_data_field_kegiatan_tanggal_field_kegiatan_long_value;
				
				echo "<div class='ctitle'>".$item->node_title."</div>";
				echo "<div class='tanggal'>".$m."<br /><span>".$d."</span></div>";
				echo "<div>".$item->node_revisions_body."</div>";
				echo "<p>".$item->node_data_field_kegiatan_tanggal_field_kegiatan_tanggal_value."</p>";
				echo "<p>".$item->node_data_field_kegiatan_tanggal_field_kegiatan_tanggal_value2."</p>";

				
				if (!empty($alamat)) {
				echo "<p><strong>Tempat: </strong></p><p>".$alamat."</p>";
				}
				?>
				<script type="text/javascript">

				$(document).ready(function() {
					$("#map1").googleMap(<?php echo round($latitude);?>, <?php echo round($longitude); ?>, 5, {
						controls: ["GSmallMapControl", "GMapTypeControl"],
						markers: $(".geo")
					});
					// Example to access the map object is below:
					// $.googleMap.maps["map1"].setMapType(G_SATELLITE_TYPE);
				});
				
				</script>
<!--
				<div id="map1" style="width: 300px; height: 300px;"></div>
				<div class="geo" title="<?php echo $alamat; ?>">
					<abbr class="latitude" title="<?php echo $latitude; ?>"></abbr>
					<abbr class="longitude" title="<?php echo $longitude; ?>"></abbr>
				</div>
-->
			<?php
				
				if (!empty($item->node_data_field_kegiatan_tanggal_field_kegiatan_youtube_value)) {
					echo "<br/><br/><strong>Video: </strong><br/>";
					echo $item->node_data_field_kegiatan_tanggal_field_kegiatan_youtube_value;
				}
			}
		}
  	?>
    <?php //print $content ?>
    </div>
  </div>

  <?php print $links; ?>
</div>