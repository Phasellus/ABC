<?php
if(! defined( 'ABSPATH' )) return;
function generateRandomString($length = 20)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGIJKLMNOPRSTUWYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $randomString;
}

function get_id_by_template_filename($filename)
{
	global $wpdb;
	return $wpdb->get_var("SELECT wp_pm.post_id FROM {$wpdb->posts} wp_p JOIN {$wpdb->postmeta} wp_pm ON wp_p.ID=wp_pm.post_id WHERE wp_p.post_type='page' AND wp_p.post_status='publish' AND meta_key='_wp_page_template' AND meta_value='$filename' ");
}

function print_r_e($var)
{
    echo "<pre>";
	echo htmlspecialchars(print_r($var,true));
    echo "</pre>";
}

function set_html_content_type()
{
    global $boundary;
    return "multipart/alternative;boundary=$boundary";
}

add_action('init', 'rewrite_new_url');
function rewrite_new_url()
{
    global $wp_rewrite;

    add_rewrite_rule(
            'home/blogo-strona([^/]*)/?$',
        'index.php?page_id=237',
        'top'
    );

    add_rewrite_rule(
        'home/blogo-strona([^/]*)/page/([0-9]{1,})/?$',
        'index.php?page_id=237&paged=$matches[2]',
        'top'
    );
    $wp_rewrite->flush_rules();
}

