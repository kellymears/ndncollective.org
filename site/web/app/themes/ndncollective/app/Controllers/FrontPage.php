<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
  public function get_recent_posts() 
  {
    $args = array(
	    	'post_type' => 'post',
	    	'orderby'	=> 'date',
        'posts_per_page' => 3,
        'offset' => 0,
        'limit' => 3,
	  );
    return new WP_Query($args); 
  }

  public function get_highlights()
  {
    $args = array(
      'post_type' => 'post',
      'orderby' => 'date',
      'posts_per_page' => 5,
      'offset' => 5,
      'limit' => 5,
    );
  }
}
