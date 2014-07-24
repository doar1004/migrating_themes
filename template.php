<?php

function psf_preprocess_page(&$variables) {
  if ($variables['node']->type != "") {
    //$variables['template_files'][] = "page-node-" . $variables['node']->type;
	switch ($variables['node']->type) {
		case "highlight":
		case "pnpm_story":
		case "blog":
		case "latest_publication":
		case "study_exchange":
			$variables['template_files'][] = 'page-'. str_replace('_', '-', $vars['node']->type);
			break;
		default:
	}
  }
}

/*!
 * Dynamic display block preprocess functions
 * Copyright (c) 2008 - 2009 P. Blaauw All rights reserved.
 * Version 1.6 (01-OCT-2009)
 * Licenced under GPL license
 * http://www.gnu.org/licenses/gpl.html
 */

 /**
 * Override or insert variables into the ddblock_cycle_block_content templates.
 *   Used to convert variables from view_fields to slider_items template variables
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * 
 */
function psf_preprocess_ddblock_cycle_block_content(&$vars) {
  if ($vars['output_type'] == 'view_fields') {
    $content = array();
    // Add slider_items for the template 
    // If you use the devel module uncomment the following line to see the theme variables
    // dsm($vars['settings']['view_name']);  
    // dsm($vars['content'][0]);
    // If you don't use the devel module uncomment the following line to see the theme variables
    // drupal_set_message('<pre>' . var_export($vars['settings']['view_name'], true) . '</pre>');
    // drupal_set_message('<pre>' . var_export($vars['content'][0], true) . '</pre>');
    if ($vars['settings']['view_name'] == 'news_items') {
      if (!empty($vars['content'])) {
        foreach ($vars['content'] as $key1 => $result) {
          // add slide_image variable 
          if (isset($result->node_data_field_pager_item_text_field_image_fid)) {
            // get image id
            $fid = $result->node_data_field_pager_item_text_field_image_fid;
            // get path to image
            $filepath = db_result(db_query("SELECT filepath FROM {files} WHERE fid = %d", $fid));
            //  use imagecache (imagecache, preset_name, file_path, alt, title, array of attributes)
            if (module_exists('imagecache') && is_array(imagecache_presets()) && $vars['imgcache_slide'] <> '<none>'){
              $slider_items[$key1]['slide_image'] = 
              theme('imagecache', 
                    $vars['imgcache_slide'], 
                    $filepath,
                    check_plain($result->node_title));
            }
            else {          
              $slider_items[$key1]['slide_image'] = 
                '<img src="' . base_path() . $filepath . 
                '" alt="' . check_plain($result->node_title) . 
                '"/>';     
            }          
          }
          // add slide_text variable
          if (isset($result->node_data_field_pager_item_text_field_slide_text_value)) {
            $slider_items[$key1]['slide_text'] =  check_markup($result->node_data_field_pager_item_text_field_slide_text_value);
          }
          // add slide_title variable
          if (isset($result->node_title)) {
            $slider_items[$key1]['slide_title'] =  check_plain($result->node_title);
          }
          // add slide_read_more variable and slide_node variable
          if (isset($result->nid)) {
            $slider_items[$key1]['slide_read_more'] =  l('Read more...', 'node/' . $result->nid);
            $slider_items[$key1]['slide_node'] =  base_path() . 'node/' . $result->nid;
          }
        }
      }
    }    
    $vars['slider_items'] = $slider_items;
  }
}  
/**
 * Override or insert variables into the ddblock_cycle_pager_content templates.
 *   Used to convert variables from view_fields  to pager_items template variables
 *  Only used for custom pager items
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 *
 */
function psf_preprocess_ddblock_cycle_pager_content(&$vars) {
  if (($vars['output_type'] == 'view_fields') && ($vars['pager_settings']['pager'] == 'custom-pager')){
    $content = array();
    // Add pager_items for the template 
    // If you use the devel module uncomment the following lines to see the theme variables
    // dsm($vars['pager_settings']['view_name']);     
    // dsm($vars['content'][0]);     
    // If you don't use the devel module uncomment the following lines to see the theme variables
    // drupal_set_message('<pre>' . var_export($vars['pager_settings'], true) . '</pre>');
    // drupal_set_message('<pre>' . var_export($vars['content'][0], true) . '</pre>');
    if ($vars['pager_settings']['view_name'] == 'news_items') {
      if (!empty($vars['content'])) {
        foreach ($vars['content'] as $key1 => $result) {
          // add pager_item_image variable
          if (isset($result->node_data_field_pager_item_text_field_image_fid)) {
            $fid = $result->node_data_field_pager_item_text_field_image_fid;
            $filepath = db_result(db_query("SELECT filepath FROM {files} WHERE fid = %d", $fid));
            //  use imagecache (imagecache, preset_name, file_path, alt, title, array of attributes)
            if (module_exists('imagecache') && 
                is_array(imagecache_presets()) && 
                $vars['imgcache_pager_item'] <> '<none>'){
              $pager_items[$key1]['image'] = 
                theme('imagecache', 
                      $vars['pager_settings']['imgcache_pager_item'],              
                      $filepath,
                      check_plain($result->node_data_field_pager_item_text_field_pager_item_text_value));
            }
            else {          
              $pager_items[$key1]['image'] = 
                '<img src="' . base_path() . $filepath . 
                '" alt="' . check_plain($result->node_data_field_pager_item_text_field_pager_item_text_value) . 
                '"/>';     
            }          
          }
          // add pager_item _text variable
          if (isset($result->node_data_field_pager_item_text_field_pager_item_text_value)) {
            $pager_items[$key1]['text'] =  check_plain($result->node_data_field_pager_item_text_field_pager_item_text_value);
          }
        }
      }
    }
    $vars['pager_items'] = $pager_items;
  }    
}

function phptemplate_preprocess_page(&$vars) {
	// custom content type page template
	// Renders a new page template to the list of templates used if it exists
	if (isset($vars['node'])) {
	// This code looks for any page-custom_content_type.tpl.php page
		$vars['template_files'][] = 'page-'. str_replace('_', '-', $vars['node']->type);  
  	}
}


function bakti_filefield_file($file) {
  if (!$file['filepath']) {
    return;
  }

  $path = $file['filepath'];
  $url = file_create_url($path);
  $icon = theme('filefield_icon', $file);

  // AB - Format file size.
  if ($file['filesize'] < 1024) {
    $file['formatted_filesize']['size'] = round($file['filesize'], 0);
    $file['formatted_filesize']['size_type'] = 'bytes';
  }
  else if ($file['filesize'] >= 1048576) {
    $file['formatted_filesize']['size'] = round(($file['filesize'] / 1024 / 1024), 0);
    $file['formatted_filesize']['size_type'] = 'MB';
  }
  elseif ($file['filesize'] >= 1024) {
    $file['formatted_filesize']['size'] = round(($file['filesize'] / 1024), 0);
    $file['formatted_filesize']['size_type'] = 'KB';
  }

  // Format file type.
  if ($file['filemime']) {
    $file['formatted_filesize']['type'] = explode('/', $file['filemime']);
    $file['formatted_filesize']['type'] = strtoupper($file['formatted_filesize']['type'][1]);
  }

  // Output.
  return '<div class="filefield-file clear-block">'. $icon . l($file['filename'], $url, array('attributes' => array('target' => '_blank')))
       . ' <span class="filefield file-size">(' . $file['formatted_filesize']['size'] . ' ' . $file['formatted_filesize']['size_type'] . ') </span>' .'</div>';
       
}

function phptemplate_prev_next($current_node = NULL, $op = 'p') {
  // Node types to include in paging
  $node_types = array('blog');

  if ($op == 'p') {
    $sql_op = '<';
    $order = 'DESC';
  }
  elseif ($op == 'n') {
    $sql_op = '>';
    $order = 'ASC';
  }
  else {
    return NULL;
  }

  $output = NULL;
  foreach($node_types as $type) {
    $quoted_types[] = "'" . $type . "'";
  }
  $sql = "SELECT nid, title FROM {node} n
    WHERE nid $sql_op %d
    AND type IN (" . implode(',', $quoted_types) . ")
    AND status = 1
    ORDER BY nid $order
    LIMIT 1";
  $result = db_query($sql, $current_node->nid, $type);
  $data = db_fetch_object($result);
  if (!isset($data->nid) || !$data->nid) {
    return NULL;
  }
  return l($data->title, "node/$data->nid", array('html' => TRUE));
}
