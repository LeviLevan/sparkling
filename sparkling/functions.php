<?php
/**
 * Sparkling functions and definitions
 *
 * @package sparkling
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 648; /* pixels */
}

/**
 * Set the content width for full width pages with no sidebar.
 */
function sparkling_content_width() {
  if ( is_page_template( 'page-fullwidth.php' ) ) {
    global $content_width;
    $content_width = 1008; /* pixels */
  }
}
add_action( 'template_redirect', 'sparkling_content_width' );

if ( ! function_exists( 'sparkling_main_content_bootstrap_classes' ) ) :
/**
 * Add Bootstrap classes to the main-content-area wrapper.
 */
function sparkling_main_content_bootstrap_classes() {
	if ( is_page_template( 'page-fullwidth.php' ) ) {
		return 'col-sm-12 col-md-12';
	}
	return 'col-sm-12 col-md-8';
}
endif; // sparkling_main_content_bootstrap_classes

if ( ! function_exists( 'sparkling_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sparkling_setup() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   */
  load_theme_textdomain( 'sparkling', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /**
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'sparkling-featured', 750, 410, true );
  add_image_size( 'tab-small', 60, 60 , true); // Small Thumbnail

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary'      => esc_html__( 'Primary Menu', 'sparkling' ),
    'footer-links' => esc_html__( 'Footer Links', 'sparkling' ) // secondary nav in footer
  ) );

  // Enable support for Post Formats.
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Setup the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'sparkling_custom_background_args', array(
    'default-color' => 'F2F2F2',
    'default-image' => '',
  ) ) );

  // Enable support for HTML5 markup.
  add_theme_support( 'html5', array(
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',
  ) );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

}
endif; // sparkling_setup
add_action( 'after_setup_theme', 'sparkling_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function sparkling_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'sparkling' ),
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ));

  register_sidebar(array(
    'id'            => 'home-widget-1',
    'name'          => esc_html__( 'Homepage Widget 1', 'sparkling' ),
    'description'   => esc_html__( 'Displays on the Home Page', 'sparkling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'home-widget-2',
    'name'          => esc_html__( 'Homepage Widget 2', 'sparkling' ),
    'description'   => esc_html__( 'Displays on the Home Page', 'sparkling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'home-widget-3',
    'name'          =>  esc_html__( 'Homepage Widget 3', 'sparkling' ),
    'description'   =>  esc_html__( 'Displays on the Home Page', 'sparkling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-1',
    'name'          =>  esc_html__( 'Footer Widget 1', 'sparkling' ),
    'description'   =>  esc_html__( 'Used for footer widget area', 'sparkling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-2',
    'name'          =>  esc_html__( 'Footer Widget 2', 'sparkling' ),
    'description'   =>  esc_html__( 'Used for footer widget area', 'sparkling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-3',
    'name'          =>  esc_html__( 'Footer Widget 3', 'sparkling' ),
    'description'   =>  esc_html__( 'Used for footer widget area', 'sparkling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-4',
    'name'          =>  esc_html__( 'Footer Widget 4', 'sparkling' ),
    'description'   =>  esc_html__( 'Used for footer widget area', 'sparkling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
      'name' => __( 'Contact Form', '' ),
      'id' => 'contact__form',
      'description' => __( 'Contact form area', '' ),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
  ));



  register_widget( 'sparkling_social_widget' );
  register_widget( 'sparkling_popular_posts' );
  register_widget( 'sparkling_categories' );

}
add_action( 'widgets_init', 'sparkling_widgets_init' );


/* --------------------------------------------------------------
       Theme Widgets
-------------------------------------------------------------- */
require_once(get_template_directory() . '/inc/widgets/widget-categories.php');
require_once(get_template_directory() . '/inc/widgets/widget-social.php');
require_once(get_template_directory() . '/inc/widgets/widget-popular-posts.php');


/**
 * This function removes inline styles set by WordPress gallery.
 */
function sparkling_remove_gallery_css( $css ) {
  return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}

add_filter( 'gallery_style', 'sparkling_remove_gallery_css' );

/**
 * Enqueue scripts and styles.
 */

function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js');
    wp_enqueue_script( 'jquery', '', true );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function sparkling_scripts() {

    $time = time();

// CSS Links in HEADER

  // Add Bootstrap default CSS
    wp_enqueue_style( 'bootstrap-v4', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css' );
    wp_enqueue_style( 'animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );
    wp_enqueue_style( 'bootstrap-select-css', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css' );



  // Add Google Fonts
//  wp_register_style( 'sparkling-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700|Roboto+Slab:400,300,700');
  wp_register_style( 'sparkling-fonts', '//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap');
  wp_register_style( 'perfect-scrollbar', '//cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.12/css/perfect-scrollbar.min.css' );
wp_enqueue_style( 'slick-slider', get_template_directory_uri().'/inc/css/slick.css' );

  wp_enqueue_style( 'sparkling-fonts' );
  wp_enqueue_style( 'perfect-scrollbar' );

  // Add slider CSS only if is front page ans slider is enabled
  if( ( is_home() || is_front_page() ) && of_get_option('sparkling_slider_checkbox') == 1 ) {
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri().'/inc/css/flexslider.css' );
  }

  // Add main theme stylesheet
//  wp_enqueue_style( 'sparkling-style', get_stylesheet_uri() );


  //My STYLE links
  wp_enqueue_style( 'fonts', get_template_directory_uri().'/inc/css/fonts.min.css' );
  //wp_enqueue_style( 'main-style', get_template_directory_uri().'/inc/css/main.css?'.time() );
  wp_enqueue_style( 'main-style-min', get_template_directory_uri().'/inc/css/main.min.css', '', $time );
   wp_enqueue_style( 'custom-style', get_template_directory_uri().'/inc/css/custom.css', '', $time );


// JS Script links in footer

  // Add Modernizr for better HTML5 and CSS3 support
  wp_enqueue_script('sparkling-modernizr', get_template_directory_uri().'/inc/js/modernizr.min.js', array('jquery'), '', true );

  // Add Tether for Bootstrap
  wp_enqueue_script('tetherjs', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js', array('jquery'), '', true );

  // Add Bootstrap default JS
//  wp_enqueue_script('bootstrapjs-v4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js', array('jquery'), '', true );
  wp_enqueue_script('bootstrapjs-v3', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '', true );
  wp_enqueue_script('bootstrapjs-select', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js', array('jquery'), '', true );



  if( ( is_home() || is_front_page() ) && of_get_option('sparkling_slider_checkbox') == 1 ) {
    // Add slider JS only if is front page ans slider is enabled
    wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/js/flexslider.min.js', array('jquery'), '20140222', true );
    // Flexslider customization
    wp_enqueue_script( 'flexslider-customization', get_template_directory_uri() . '/inc/js/flexslider-custom.js', array('jquery', 'flexslider-js'), '20140716', true );
  }

    if ( is_home() || is_front_page() || is_page_template('services.php')){
        wp_enqueue_script('slick-slider', get_template_directory_uri() . '/inc/js/slick.min.js', array('jquery'), '1.8.1', true);
    }

  // Main theme related functions
  wp_enqueue_script( 'sparkling-functions', get_template_directory_uri() . '/inc/js/functions.min.js', array('jquery'), '', true );

  // This one is for accessibility
  wp_enqueue_script( 'sparkling-skip-link-focus-fix', get_template_directory_uri() . '/inc/js/skip-link-focus-fix.js', array(), '20140222', true );

  // Treaded comments
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }


  // My SCRIPTs custom
  wp_enqueue_script('perfect-scrollbar', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.12/js/perfect-scrollbar.min.js', array(), '', true );
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/inc/js/wow.min.js', array('jquery'), '', true );
  //wp_enqueue_script( 'script', get_template_directory_uri() . '/inc/js/script.min.js', array('jquery'), $time, true );
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/inc/js/custom.js', array('jquery'), '', true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/inc/js/script.js', array('jquery'), $time, true );
  
}

add_action( 'wp_enqueue_scripts', 'sparkling_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Metabox additions.
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';

/**
 * Register Social Icon menu
 */
add_action( 'init', 'register_social_menu' );

function register_social_menu() {
	register_nav_menu( 'social-menu', _x( 'Social Menu', 'nav menu location', 'sparkling' ) );
}

/* Globals variables */
global $options_categories;
$options_categories = array();
$options_categories_obj = get_categories();
foreach ($options_categories_obj as $category) {
        $options_categories[$category->cat_ID] = $category->cat_name;
}

global $site_layout;
$site_layout = array('side-pull-left' => esc_html__('Right Sidebar', 'sparkling'),'side-pull-right' => esc_html__('Left Sidebar', 'sparkling'),'no-sidebar' => esc_html__('No Sidebar', 'sparkling'),'full-width' => esc_html__('Full Width', 'sparkling'));

// Typography Options
global $typography_options;
$typography_options = array(
        'sizes' => array( '6px' => '6px','10px' => '10px','12px' => '12px','14px' => '14px','15px' => '15px','16px' => '16px','18'=> '18px','20px' => '20px','24px' => '24px','28px' => '28px','32px' => '32px','36px' => '36px','42px' => '42px','48px' => '48px' ),
        'faces' => array(
                'arial'          => 'Arial',
                'verdana'        => 'Verdana, Geneva',
                'trebuchet'      => 'Trebuchet',
                'georgia'        => 'Georgia',
                'times'          => 'Times New Roman',
                'tahoma'         => 'Tahoma, Geneva',
                'Open Sans'      => 'Open Sans',
                'palatino'       => 'Palatino',
                'helvetica'      => 'Helvetica',
                'Helvetica Neue' => 'Helvetica Neue,Helvetica,Arial,sans-serif'
        ),
        'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
        'color'  => true
);

/**
 * Helper function to return the theme option value.
 * If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * Not in a class to support backwards compatibility in themes.
 */
if ( ! function_exists( 'of_get_option' ) ) :
function of_get_option( $name, $default = false ) {

	$option_name = '';
	// Get option settings from database
	$options = get_option( 'sparkling' );

	// Return specific option
	if ( isset( $options[$name] ) ) {
		return $options[$name];
	}

	return $default;
}
endif;

/* WooCommerce Support Declaration */
if ( ! function_exists( 'sparkling_woo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sparkling_woo_setup() {
	/*
	 * Enable support for WooCemmerce.
	*/
	add_theme_support( 'woocommerce' );

}
endif; // sparkling_woo_setup
add_action( 'after_setup_theme', 'sparkling_woo_setup' );

if ( ! function_exists( 'get_woocommerce_page_id' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function get_woocommerce_page_id() {
	if( is_shop() ){
        return get_option( 'woocommerce_shop_page_id' );
    }
    elseif( is_cart() ){
        return get_option( 'woocommerce_cart_page_id' );
    }
    elseif(is_checkout() ){
        return get_option( 'woocommerce_checkout_page_id' );
    }
    elseif(is_checkout_pay_page() ){
        return get_option( 'woocommerce_pay_page_id' );
    }
    elseif(is_account_page() ){
        return get_option( 'woocommerce_myaccount_page_id' );
    }
    return false;
}
endif;

/**
* is_it_woocommerce_page - Returns true if on a page which uses WooCommerce templates (cart and checkout are standard pages with shortcodes and which are also included)
*/
if ( ! function_exists( 'is_it_woocommerce_page' ) ) :

function is_it_woocommerce_page () {
        if(  function_exists ( "is_woocommerce" ) && is_woocommerce()){
                return true;
        }
        $woocommerce_keys   =   array ( "woocommerce_shop_page_id" ,
                                        "woocommerce_terms_page_id" ,
                                        "woocommerce_cart_page_id" ,
                                        "woocommerce_checkout_page_id" ,
                                        "woocommerce_pay_page_id" ,
                                        "woocommerce_thanks_page_id" ,
                                        "woocommerce_myaccount_page_id" ,
                                        "woocommerce_edit_address_page_id" ,
                                        "woocommerce_view_order_page_id" ,
                                        "woocommerce_change_password_page_id" ,
                                        "woocommerce_logout_page_id" ,
                                        "woocommerce_lost_password_page_id" ) ;
        foreach ( $woocommerce_keys as $wc_page_id ) {
                if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
                        return true ;
                }
        }
        return false;
}

endif;

/**
* get_layout_class - Returns class name for layout i.e full-width, right-sidebar, left-sidebar etc )
*/
if ( ! function_exists( 'get_layout_class' ) ) :

function get_layout_class () {
    global $post;           
    if( is_singular() && get_post_meta($post->ID, 'site_layout', true) && !is_singular( array( 'product' ) ) ){
        $layout_class = get_post_meta($post->ID, 'site_layout', true);
    }
    elseif( function_exists ( "is_woocommerce" ) && function_exists ( "is_it_woocommerce_page" ) && is_it_woocommerce_page() && !is_search() ){// Check for WooCommerce
        $page_id = ( is_product() ) ? $post->ID : get_woocommerce_page_id();

        if( $page_id && get_post_meta($page_id, 'site_layout', true) ){
            $layout_class = get_post_meta( $page_id, 'site_layout', true);
        }
        else{
            $layout_class = of_get_option( 'woo_site_layout', 'full-width' );
        }
    }
    else{
        $layout_class = of_get_option( 'site_layout', 'side-pull-left' );
    }
    return $layout_class;
}

endif;


function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


//add_action( 'wpcf7_enqueue_scripts', 'custom_recaptcha_enqueue_scripts', 11 );
function custom_recaptcha_enqueue_scripts() {
    wp_deregister_script( 'google-recaptcha' );
        $url = 'https://www.google.com/recaptcha/api.js';
        $url = add_query_arg( array('onload' => 'recaptchaCallback','render' => 'explicit','hl' => 'en' ), 
        $url );
    wp_register_script( 'google-recaptcha', $url, array(), '2.0', true );
}

//Blog Pagination
function wp_blogpagin() {
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 0;
    $a['mid_size'] = 3;
    $a['end_size'] = 1;
    $a['prev_text'] = '&#8249;';
    $a['next_text'] = '&#8250;';

    if ($max > 1) echo '<div class="blog__pagination">';
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}


//Fix sending email
//add_filter('wpcf7_spam', '__return_false');
//add_filter('wpcf7_skip_spam_check', '__return_true');

//url restriction for all fields on forms except linkedin

add_filter( 'wpcf7_validate_text', 'no_urls_allowed', 10, 3 );
add_filter( 'wpcf7_validate_text*', 'no_urls_allowed', 10, 3 );
add_filter( 'wpcf7_validate_textarea', 'no_urls_allowed', 10, 3 );
add_filter( 'wpcf7_validate_textarea*', 'no_urls_allowed', 10, 3 );

function no_urls_allowed( $result, $tag ) {
    $tag = new WPCF7_Shortcode( $tag );
    $type = $tag->type;
    $name = $tag->name;

    $value = isset( $_POST[$name] )
    ? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
    : '';

    // If this is meant to be a URL field, do nothing
    if ( 'url' == $tag->basetype || stristr($name, 'linkedin-profile ') ) {
    return $result;
    }

    // Check for URLs ending with forbidden TLDs
    $pattern = '/\.(aero|asia|biz|cat|com|coop|info|int|jobs|mobi|museum|name|net|org|post|pro|tel|travel|mlcee|xxx|ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bl|bm|bn|bo|bq|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cw|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mf|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sx|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|za|zm|zw)/i';
    if ( preg_match( $pattern, $value ) ) {
        $result->invalidate( $tag, 'URLs are not allowed' );
        return $result;
    }
    return $result;
}




// Prevent Multi Submit on all WPCF7 forms
add_action( 'wp_footer', 'prevent_cf7_multiple_emails' );

function prevent_cf7_multiple_emails() {
?>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var disableSubmit = false;

        jQuery('.wpcf7-form :input[type="submit"]:not(.disabled)').click(function(e) {
            console.log(disableSubmit);
            if (disableSubmit) {
                return false;
            }
            jQuery(':input[type="submit"]').addClass('disabled');
            disableSubmit = true;
            return true;
        });

        var wpcf7Elm = document.querySelector('.wpcf7');
        if (wpcf7Elm) {
            wpcf7Elm.addEventListener('wpcf7submit', function(event) {
                jQuery(':input[type="submit"]').removeClass('disabled');
                disableSubmit = false;
            }, false);
        }
    });
    </script>
    <style>
        .wpcf7-submit.disabled { cursor: not-allowed; opacity: 0.5; }
    </style>
    <?php
}



add_filter( 'wpcf7_autop_or_not', '__return_false' );

function create_page_category_consultants_taxonomy() {
    $labels = array(
      'name' => 'Page Categories',
      'singular_name' => 'Page Category',
      'search_items' => 'Search Page Categories',
      'all_items' => 'All Page Categories',
      'parent_item' => 'Parent Page Category',
      'parent_item_colon' => 'Parent Page Category:',
      'edit_item' => 'Edit Page Category',
      'update_item' => 'Update Page Category',
      'add_new_item' => 'Add New Page Category',
      'new_item_name' => 'New Page Category Name',
      'menu_name' => 'Page Categories',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'category-consultants'), // Замените 'page_category_test' на желаемый URL-адрес таксономии
    );

    register_taxonomy('category-consultants', 'page', $args);
}
//add_action('init', 'create_page_category_consultants_taxonomy', 0);


function page_category_consultants_shortcode($atts) {
    // Параметры шорткода (если нужно будет добавить)
    $atts = shortcode_atts(array(
        // 'param_name' => 'default_value',
    ), $atts);

    // Получаем список категорий из таксономии "page_category_test"
    $categories = get_categories(array('taxonomy' => 'category-consultants', 'hide_empty' => true));

    // Формируем вывод в виде списка ссылок
    $output = '<ul>';
    foreach ($categories as $category) {
        $output .= '<li><a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    $output .= '</ul>';

    return $output;
}
//add_shortcode('page_categories', 'page_category_consultants_shortcode');


function list_post_categories_shortcode() {
    // Получаем список категорий постов
    $post_categories = get_categories(array('taxonomy' => 'category', 'hide_empty' => true));

    // Формируем вывод в виде списка ссылок
    $output = '<ul>';
    foreach ($post_categories as $category) {
        $output .= '<li><a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    $output .= '</ul>';

    return $output;
}
add_shortcode('post_categories', 'list_post_categories_shortcode');

// Регистрация пользовательского типа записей и таксономии (категории)
function create_consultants_post_type() {
    $labels = array(
        'name'               => 'Consultants',
        'singular_name'      => 'Consultant',
        'menu_name'          => 'Consultants',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Consultant',
        'edit_item'          => 'Edit Consultant',
        'new_item'           => 'New Consultant',
        'view_item'          => 'View Consultant',
        'search_items'       => 'Search Consultants',
        'not_found'          => 'No consultants found',
        'not_found_in_trash' => 'No consultants found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'consultants' ),
        'capability_type'     => 'post',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'template' ),
        'template' => array(
            array( 'core/template' => array( 'templateName' => 'template-consultant.php', 'templateLabel' => 'Consultant Single' ) ),
        ),

    );

    register_post_type( 'consultants', $args );

    // Регистрация таксономии (категории)
    register_taxonomy(
        'consultant_category', // Идентификатор таксономии
        'consultants', // Привязываем к пользовательскому типу записей
        array(
            'hierarchical' => true,
            'label' => 'Consultant Categories',
            'rewrite' => array( 'slug' => 'consultant-category' ),
            'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'create_consultants_post_type' );

function remove_editor() {
    remove_post_type_support( 'consultants', 'editor' ); 
  }
add_action( 'admin_init', 'remove_editor' );
