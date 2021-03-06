<?php
if(! defined( 'ABSPATH' )) return;

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function remove_wp_version_rss() { return ''; }
add_filter('the_generator', 'remove_wp_version_rss');
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 99999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 99999 );

function custom_menu_page_removing() {
}
add_action('admin_menu', 'custom_menu_page_removing');

function filter_url_img($image)
{
    $image[0] = utf8_uri_encode($image[0]);
    return $image;
}

add_filter('wp_get_attachment_image_src', 'filter_url_img' );


add_action('wp_head','add_ajax_url');
function add_ajax_url()
{
    ?>
    <script type="text/javascript">
        const ajax_link = '<?php echo admin_url( "admin-ajax.php?action=show_json" ); ?>';
        const token = '<?php echo wp_create_nonce( "secure_nonce_name" ); ?>';
    </script><?php
}

function my_htaccess_contents( $rules )
{
	return $rules . "\n" .
	       "<IfModule mod_headers.c>
 <FilesMatch \"\.(jpg|jpeg|png|gif|swf|JPG)$\">
 Header set Cache-Control \"max-age=4838400, public\"
 </FilesMatch>\n
 <FilesMatch \"\.(css|js)$\">
 Header set Cache-Control \"max-age=4838400, private\"
 </FilesMatch>\n
 </IfModule>";
}
add_filter('mod_rewrite_rules', 'my_htaccess_contents');

function custom_header_menu()
{
    register_nav_menus(array(
        'Main_Menu'=> __('Main Menu')
    ));
}
add_action('init', 'custom_header_menu');

function custom_footer_menu()
{
    register_nav_menus(array(
        'BottomFirstMenu'=> __('Bottom First Menu')
    ));
}
add_action('init', 'custom_footer_menu');

function custom_footer_contact()
{
    register_nav_menus(array(
        'BottomContactMenu'=> __('Bottom Contact Menu')
    ));
}
add_action('init', 'custom_footer_contact');
