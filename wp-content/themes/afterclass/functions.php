<?php
update_option('siteurl','http://afterclass.uiowa.edu/news');
update_option('home','http://afterclass.uiowa.edu/news');
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

if ( ! isset( $content_width ) ) $content_width = 600;

// Get Bones Core Up & Running!
require_once('library/bones.php');            // core functions (don't remove)
require_once('library/plugins.php');          // plugins & extra functions (optional)
require_once('library/custom-post-type.php'); // custom post type example

// Admin Functions (commented out by default)
// require_once('library/admin.php');         // custom admin functions


// Include all the Shortcodes

foreach (glob("library/shortcodes/*.php") as $filename)
{
    include $filename;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Sidebar 1',
    	'description' => 'The first (primary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Sidebar 2',
    	'description' => 'The second (secondary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(),  get_comment_time()) ?></a></time>
				<?php edit_comment_link(__('(Edit)'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="help">
          			<p><?php _e('Your comment is awaiting moderation.') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search the Site..." />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!

/************* CUSTOMIZING THE EXCERPT ***********/

function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '"><p>Read More...</p></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Custom Excerpt

function custom_wp_trim_excerpt($text) {
	$raw_excerpt = $text;  
	if ( '' == $text ) {
		$text = get_the_content(''); // Original Content
		$text = strip_shortcodes($text); // Minus Shortcodes
		$text = apply_filters('the_content', $text); // Filters
		$text = str_replace(']]>', ']]&gt;', $text); // Replace
	
		$excerpt_length = apply_filters('excerpt_length', 55); // Length
		$excerpt_more = apply_filters('excerpt_more', ' ' . '<a class="readmore" href="'. get_permalink() .'">&raquo;</a>');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );

		// Use First Video as Excerpt
		$postcustom = get_post_custom_keys();
		if ($postcustom){
			$i = 1;
			foreach ($postcustom as $key){
				if (strpos($key,'oembed')){
					foreach (get_post_custom_values($key) as $video){
						if ($i == 1){
							$text = $video.$text;
							}
						$i++;
					}
				}
			}
		}
	}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');

function division_bar()  
{
    wp_register_style( 'division-bar', get_template_directory_uri() . '/division-bar/css/division-bar.css', array(), '20130603', 'all' );
    wp_enqueue_style( 'division-bar' );  
}  
add_action( 'wp_enqueue_scripts', 'division_bar' );  

function respond()  
{
    wp_register_script( 'respond',get_template_directory_uri() . '/library/js/respond.min.js');
    wp_enqueue_script( 'respond' );
  
}  
add_action( 'wp_enqueue_scripts', 'respond' );  

?>