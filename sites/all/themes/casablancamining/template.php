<?php

jquery_plugin_add('cycle');


function casablancamining_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}


function phptemplate_preprocess_page(&$vars) {
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $suggestions = array();
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $suggestions[] = $template_filename;
      }
      $vars['template_files'] = array_merge($vars['template_files'],(array) $suggestions);
      if ($vars['node']->type != "") {
        array_unshift($vars['template_files'], "page-nodetype-" . $vars['node']->type);
      } 
    }
  }
}

function getquote($symbol) {

	$interval = 3600; // time in seconds to cache dynamic data on a page

	$ts = time();
	$last_quote = variable_get("qt_time", 0);
	
	if ($ts-$last_quote>$interval) {
		$data = get_content("http://download.finance.yahoo.com/d/quotes.csv?s=".$symbol."&f=sl1d1t1c1ohgv&e=.csv");
		$vals = explode(",", $data);
		if ( is_numeric($vals[1]) ) {
			variable_set("qt_".$symbol, $vals[1]);
			variable_set("qt_time", $ts);
		} else {
			variable_set("qt_".$symbol, 0);
		}			
	}

	return variable_get("qt_".$symbol, 0);
	
}

function get_content($url)
{
    $ch = curl_init();

    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_HEADER, 0);

    ob_start();

    curl_exec ($ch);
    curl_close ($ch);
    $string = ob_get_contents();

    ob_end_clean();
    
    return $string;     
}


function mkspiffy($st) {

	$st = strtolower($st);
	$st = str_ireplace(" ", "-", $st);
	
	
	return $st;


}