<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/* Custom Elementor Widgets */
require_once 'elementor-widgets.php';

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
	wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/script.js', array(), '1.0.0', true );

	// Page ID 28 = Expertise > Market Coverage
	if (is_page(28)) {
		wp_enqueue_script( 'market-coverage', get_stylesheet_directory_uri() . '/assets/js/market-coverage.js', array('jquery'), false, true );
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );

function ele_disable_page_title( $return ) {
   return false;
}
add_filter( 'hello_elementor_page_title', 'ele_disable_page_title' );

function myscript() {
?>
<!-- Global site tag (gtag.js) - Google Analytics -->

<?php
}
add_action( 'wp_footer', 'myscript' );

add_filter('tiny_mce_before_init','configure_tinymce');

/**
 * Customize TinyMCE's configuration
 *
 * @param   array
 * @return  array
 */
function configure_tinymce($in) {
  $in['paste_preprocess'] = "function(plugin, args){
    // Strip all HTML tags except those we have whitelisted
    var whitelist = 'p,b,strong,i,em,h3,h4,h5,h6,ul,li,ol';
    var stripped = jQuery('<div>' + args.content + '</div>');
    var els = stripped.find('*').not(whitelist);
    for (var i = els.length - 1; i >= 0; i--) {
      var e = els[i];
      jQuery(e).replaceWith(e.innerHTML);
    }
    // Strip all class and id attributes
    stripped.find('*').removeAttr('id').removeAttr('class');
    // Return the clean HTML
    args.content = stripped.html();
  }";
  return $in;
}

add_filter( 'wp_kses_allowed_html', function ( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['input'] = array(
		'type' => true,
		'id' => true,
		);
	}
	return $tags;
},10,2);

add_filter( 'wp_kses_allowed_html', function ( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
		'src' => true,
		'width' => true,
		'height' => true,
		'width' => true, 
		'frameborder' => true,
		'allowtransparency' => true,
		'allow' => true,
		);
	}
	return $tags;
},10,2);

// add_filter( 'the_content', 'test_event' );
// function test_event() {
// 	ob_start();
	
// 	echo "<pre>";
// 	print_r(get_post_meta(2971));
	
// 	return ob_get_clean();
// }

function pretty_date($atts) {
	$atts = array_change_key_case((array) $atts, CASE_LOWER);

    $atts = shortcode_atts(
        array(
            'post_id' => ''
        ),
        $atts
    );

	if (empty($atts['post_id'])) return;

	$timestamp = get_post_meta($atts['post_id'], '_EventStartDate', true);

	return date("F jS, Y", strtotime($timestamp));
}
add_shortcode('pretty_date', 'pretty_date');

function post_title($atts) {
	$atts = array_change_key_case((array) $atts, CASE_LOWER);

    $atts = shortcode_atts(
        array(
            'post_id' => ''
        ),
        $atts
    );

	if (empty($atts['post_id']))
		return;
	else
		return get_the_title($atts['post_id']);

}
add_shortcode('post_title', 'post_title');

add_action( 'pre_get_posts', 'tribe_pre_get_posts', 1 );
function tribe_pre_get_posts ($query) {
	$query->set( 'tribe_suppress_query_filters', true );
	// $query->set('tribe_remove_date_filters', true);
	

	return $query;
}

// create parentname shortcode by ivy
function wpb_parent_shortcode() { 
 

} 



/**
 * Partial
 *
 * @return void
 */
if (!function_exists('partial')) {
    function partial($path, $data = [])
    {
        if (!empty($data)) {
            extract($data);
        }

        include dirname( __FILE__ ) . '/template-parts/' . $path . '.php';
    }
}