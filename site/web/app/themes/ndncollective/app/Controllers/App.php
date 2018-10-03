<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller
{
  public static function siteName()
  {
    return get_bloginfo('name');
  }

  public static function siteDescription() 
  {
    return get_bloginfo('description');
  }

  public static function title()
  {
    if (is_home()) {
      if ($home = get_option('page_for_posts', true)) {
          return get_the_title($home);
      }
      return __('Latest Posts', 'sage');
    }
    if (is_archive()) {
      return get_the_archive_title();
    }
    if (is_search()) {
      return sprintf(__('Search Results for %s', 'sage'), get_search_query());
    }
    if (is_404()) {
      return __('Not Found', 'sage');
    }
    return get_the_title();
  }

  public static function the_thumbnail_caption() 
  {
    return get_post(get_post_thumbnail_id())->post_excerpt; 
  }

  public function get_most_recent_post() 
  {
    $args = array(
	    	'post_type' => 'post',
        'orderby'	=> 'date',
        'limit' => 1,
	    	'posts_per_page' => 1,
	  );
    return new WP_Query($args); 
  }

  public function get_recent_posts() 
  {
    $args = array(
	    	'post_type' => 'post',
	    	'orderby'	=> 'date',
        'posts_per_page' => 3,
        'offset' => 1,
        'limit' => 3,
	  );
    return new WP_Query($args); 
  }

  public function get_podcasts()
  {
    $args = array(
      'post_type' => 'podcast',
      'orderby' => 'date',
      'posts_per_page' => 4,
      'limit' => 4,
    );
    return new WP_Query($args); 
  }

  public static function podcasts($limit = -1, $offset = 0)
  {
    $podcasts = get_posts([
        'post_type'      => 'podcast',
        'posts_per_page' => 10,
        'limit'          => $limit,
        'offset'         => $offset,
    ]);

    return array_map ( function ( $post ) {
        return [
            'title' => get_the_title($post->ID),
            'permalink' => get_the_permalink($post->ID),
            'excerpt' => get_the_excerpt($post->ID),
            'episode' => get_post_meta($post->ID,'itunes_episode_number')[0],
            'thumbnail' => get_the_post_thumbnail_url ( $post->ID ),
        ];
    }, $podcasts );
  }

}