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

  <?php if ($terms): ?>
    <div class="terms terms-inline"><?php print $terms ?></div>
  <?php endif;?>
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
		$view_result = views_get_view_result("bakti_news_sidebar");
		foreach($view_result as $item){
			if ($item->nid == $nid) {
				global $base_url; global $base_path;
				$featured_image = field_file_load($item->node_data_field_bakti_news_gambar_field_bakti_news_gambar_fid);
				$featured_image = $base_url.'/'.$featured_image['filepath'];
				
				$attachment = field_file_load($item->node_data_field_bakti_news_gambar_field_attachment_fid);
				$filename = $attachment['filename'];
				$attachment = $base_url.'/'.$attachment['filepath'];
				
				//$ncreated = strtotime($node_created); $m = date('F', $ncreated); $d = date('d', $ncreated);
				$ncreated = $item->node_created; $m = date('F', $ncreated); $d = date('d', $ncreated);
				
				echo "<h2>".$item->node_title."</h2>";
				echo "<img src='".$featured_image."' />";
				echo $item->node_revisions_body;
				
					//echo "<br/><strong>Attachment: </strong>&nbsp;";
					//echo "<a href='".$attachment."' target='_blank'>".$filename."</a>";
					//echo $item->node_data_field_berita_terbaru_gambar_field_berita_terbaru_youtube_value;
				
			}
		}
  	?>
    <?php //print $content ?>
<?
				if (!empty($filename)) {
				?>

<div class="field field-type-filefield field-field-attachment">
  <h3 class="field-label">Download:</h3>
  <div class="field-items">
      <div class="field-item"><?php print $node->field_attachment[0]['view'] ?></div>
  </div>
</div>
<?
				}
?>
    </div>
  </div>

  <?php print $links; ?>
</div>