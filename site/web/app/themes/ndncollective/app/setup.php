<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

}, 20);

/**
 * Register custom post types
 */

add_action( 'init', function() {

	register_extended_post_type( 'video', array(

		# Add the post type to the site's main RSS feed:
    'show_in_feed' => true,
    'show_in_rest' => true,

		# Show all posts on the post type archive:
		'archive' => array(
			'nopaging' => true
    ),

    # 'Enter Title Here' (for publisher)
    'enter_title_here' => 'Video Title',

		# Add some custom columns to the admin screen:
    'admin_cols' => array(
			'featured_image' => array(
				'title'          => 'Video Cover Image',
				'featured_image' => 'full'
			),
			'published' => array(
				'title'       => 'Video Release Date',
				'meta_key'    => 'release_date',
				'date_format' => 'd/m/Y'
			),
			'topic' => array(
				'taxonomy' => 'Video Topic'
      ),
      'subject' => array(
        'taxonomy' => 'Video Subject'
      )
		),

		# Add a dropdown filter to the admin screen:
		'admin_filters' => array(
			'topic' => array(
				'taxonomy' => 'topic'
      ),
      'subject' => array(
        'taxonomy' => 'subject'
      )
		)

	), array(

		# Override the base names used for labels:
		'singular' => 'Video',
		'plural'   => 'Videos',
		'slug'     => 'watch'

  ) );
  
  register_extended_taxonomy( 'topic', 'video', [

		# Use radio buttons in the meta box for this taxonomy on the post editing screen:
    'meta_box' => 'radio',

		# Add a custom column to the admin screen:
		'admin_cols' => [
			'updated' => [
				'title'       => 'Released',
				'meta_key'    => 'release_date',
				'date_format' => 'd/m/Y'
			],
    ],
    
    register_extended_taxonomy( 'subject', 'video', [

      # Use radio buttons in the meta box for this taxonomy on the post editing screen:
      'meta_box' => 'radio',

      # Add a custom column to the admin screen:
      'admin_cols' => [
        'updated' => [
          'title'       => 'Released',
          'meta_key'    => 'release_date',
          'date_format' => 'd/m/Y'
      ]]
    ])
  ]);
});

/* gutenberg */
add_action('after_setup_theme', function() {
  add_theme_support( 'align-wide' );
  add_theme_support( 'disable-custom-colors' );
  add_theme_support( 'editor-color-palette', array(
      array(
          'name' => __( 'NDN Red', 'sage' ),
          'slug' => 'ndn-red',
          'color' => '#da291c',
      ),
      array(
          'name' => __( 'NDN Grey', 'sage' ),
          'slug' => 'ndn-grey',
          'color' => '#97999b',
      ),
      array(
          'name' => __( 'NDN Black', 'sage' ),
          'slug' => 'ndn-black',
          'color' => '#101820',
      ),
    ) 
  );
  add_theme_support( 'editor-font-sizes', array(
      array(
          'name' => __( 'small', 'themeLangDomain' ),
          'shortName' => __( 'S', 'themeLangDomain' ),
          'size' => 12,
          'slug' => 'small'
      ),
      array(
          'name' => __( 'regular', 'themeLangDomain' ),
          'shortName' => __( 'M', 'themeLangDomain' ),
          'size' => 16,
          'slug' => 'regular'
      ),
      array(
          'name' => __( 'large', 'themeLangDomain' ),
          'shortName' => __( 'L', 'themeLangDomain' ),
          'size' => 36,
          'slug' => 'large'
      ),
      array(
          'name' => __( 'larger', 'themeLangDomain' ),
          'shortName' => __( 'XL', 'themeLangDomain' ),
          'size' => 50,
          'slug' => 'larger'
      )
    ) 
  );  
});

add_action( 'init', function () {
    $post_type_object = get_post_type_object( 'post' );
    $post_type_object->template = array(
        array( 'core/paragraph', array(
          'content' => 'There is urgency to erase the stereotypes that can grow into commonly accepted narratives that inform people’s view of “how things are.”',
        ) ),
        array( 'core/paragraph', array(
          'content' => 'Reinforced by popular culture, the arts, entertainment, schools, sports, companies, news media and so many other channels, this negative narrative is one that most people have heard since birth. It hinders our work, our ability to live the lives we want and our access to opportunities. It colors our daily interactions with doctors, service providers, teachers and administrators in our children’s schools, and many others. It leads to harmful interactions for our children that result in bullying, isolation and trauma.',
        ) ),
        array( 'core/image', array(
          'align' => 'wide',
        ) ),
        array( 'core/paragraph', array(
          'content' => 'Changing this dominant narrative about Native Americans is the key to advancing tribal sovereignty and our basic rights, dismantling invisibility and racism, and ensuring a better present and future for Native nations and for Native children and families. The time is now for Native peoples to come together to change this narrative to one built on truth, strength and complexity.',
        ) ),
        array( 'core/paragraph', array(
          'content' => 'This guide is a tool in our quest to replace false narratives — and specifically the toxic narrative about Native Americans — with the truth. It boils down two years of extensive research and testing — unprecedented in Indian Country — into actionable information you can use to make your work more effective.',
        ) ),
        /* array( 'core/pullquote', array(
          'value' => array(
            'props' => array(
              'children' => array(
                0 => 'Our work is most effective and fulfilling',
              ),
            ),
          ),
          'align' => 'right',
          'citation' => 'Kelly Mears',
        ) ), */
        array( 'core/paragraph', array(
          'content' => 'National research shows that given just a few facts — shaped around the key themes of shared values, history and visibility — people become more open to understanding and engaging with Native issues, cultures, tribes and peoples. Research confirms that there is a broad, diverse audience that is ready for this new narrative and ready to engage as allies.',
        ) ),
        /* array( 'core/button', array(
          'placeholder' => 'This is a nice button',
        ) ), */
    );
    $post_type_object->template_lock = null;
} );

/**
 * Enqueue block editor style
 */
add_action ( 'enqueue_block_editor_assets', function () {
    wp_enqueue_style ( 'gutenberg-editor-styles', asset_path( 'styles/gutenberg.css' ), false, null );
} );

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
  /**
   * Add JsonManifest to Sage container
   */
  sage()->singleton('sage.assets', function () {
      return new JsonManifest(config('assets.manifest'), config('assets.uri'));
  });

  /**
   * Add Blade to Sage container
   */
  sage()->singleton('sage.blade', function (Container $app) {
      $cachePath = config('view.compiled');
      if (!file_exists($cachePath)) {
          wp_mkdir_p($cachePath);
      }
      (new BladeProvider($app))->register();
      return new Blade($app['view']);
  });

  /**
   * Create @asset() Blade directive
   */
  sage('blade')->compiler()->directive('asset', function ($asset) {
      return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
  });

  /**
   * Create @loop Blade directive
   */
  sage('blade')->compiler()->directive('loop', function ( $query = null ) {
      global $wp_query;
      if(!$query) $query = $wp_query;

      $initLoop = "\$__currentLoopData = {$query}; \$__env->addLoop(\$__currentLoopData->posts);";
      $iterateLoop = '$__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__currentLoopData->the_post();';
      return "<?php {$initLoop} while(\$__currentLoopData->have_posts()): {$iterateLoop} ?>";
  });

  /**
   * Create @endloop Blade directive
   */
  sage('blade')->compiler()->directive('endloop', function () {
      return '<?php endwhile; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
  });

  /**
   * Create @posts Blade directive
   */
  sage('blade')->compiler()->directive('posts', function () {
      return '<?php while(have_posts()) : the_post(); ?>';
  });

  /**
   * Create @endposts Blade directive
   */
  sage('blade')->compiler()->directive('endposts', function () {
      return '<?php endwhile; ?>';
  });

  /**
   * Create @query() Blade directive
   */
  sage('blade')->compiler()->directive('query', function ($args) {
      $output = '<?php $bladeQuery = new WP_Query($args); ?>';
      $output .= '<?php while ($bladeQuery->have_posts()) : ?>';
      $output .= '<?php $bladeQuery->the_post(); ?>';

      return $output;
  });

  /**
   * Create @endquery Blade directive
   */
  sage('blade')->compiler()->directive('endquery', function () {
      return '<?php endwhile; ?>';
  });

  /**
   * Create @title Blade directive
   */
  sage('blade')->compiler()->directive('title', function () {
      return '<?php the_title(); ?>';
  });

  /**
   * Create @content Blade directive
   */
  sage('blade')->compiler()->directive('content', function () {
      return '<?php the_content(); ?>';
  });

  /**
   * Create @excerpt Blade directive
   */
  sage('blade')->compiler()->directive('excerpt', function () {
      return '<?php the_excerpt(); ?>';
  });
});
