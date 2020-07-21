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


function custom_new_menu()
{
    register_nav_menus(array(
        'new_menu'=> __('New Menu')
    ));
}
add_action('init', 'custom_new_menu');

class Nav_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        if($depth > 0)
        {
            parent::end_lvl($output, $depth);
        }
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        if($depth>0)
        {
            parent::end_lvl($output, $depth);
        }
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $link =  '<a href="'. esc_attr($item->url);
        $current_item = empty( $item->class ) ? array() : (array) $item->class;
        $current_item[] = 'menu-item-' . $item->ID;
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $current_item[] = ' -active';
        }
        if (0 == $depth)
        {
            $current_item = implode(' ', $current_item);
            $output .=' <li class="nav__link '. $current_item.'"><a class="nav__link " href="'. $item->url .'">'. apply_filters('the_title', $item->title, $item->ID).'</a></li>';
            return;
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        if($depth > 0)
        {
            parent::end_el($output, $item, $depth);
        }
    }
}
function set_html_content_type()
{
    global $boundary;
    return "multipart/alternative;boundary=$boundary";
}
add_action('wp_ajax_show_json', 'show_json');
add_action('wp_ajax_nopriv_show_json', 'show_json');
function show_json()
{
    header ('Content-Type: application/json');
    if((!empty($_POST['user_email'])) && (($_POST['selectTrade']) != 'Wybierz branze') &&(!empty($_POST['description'])))
    {
        $results = array(
            'success' => 1,
            'msg' => 'Wyslano dane',
        );
        echo json_encode($results);

        global $boundary;
        $boundary = md5(uniqid(rand()));
        $content = $_POST['description'];
        add_filter('wp_mail_content_type', 'set_html_content_type');
        $content_of_mail =
            "This is a multi-part message in MIME format.\r\n" .
            "--" . $boundary . "\r\n" .
            "Content-type: text/plain;charset=utf-8\r\n\r\n" .
            strip_tags(str_replace('<br>', "\r\n", $content)) . "\r\n" .
            "--" . $boundary . "\r\n" .
            "Content-type: text/html;charset=utf-8\r\n\r\n" .
            $content;
        $sent = wp_mail($_POST['user_email'], 'Nowa wiadomość E_mail', $content_of_mail);
        remove_filter('wp_mail_content_type', 'set_html_content_type');
        return $sent;
    }

    else
    {
        $results = array(
            "error" => 1,
            'msg' => 'Niepoprawne dane',
        );
        echo json_encode($results);
        exit();
    }
}

