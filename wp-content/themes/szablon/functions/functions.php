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
    if((empty($_POST['user_email'])) || (($_POST['selectTrade']) == 'Wybierz branze') || (empty($_POST['description'])))
    {
        $results = array(
            "error" => 1,
            'msg' => 'Uzupełnij wszystkie pola',
        );
        echo json_encode($results);
        exit();
    }
    elseif(is_email($_POST['user_email'], $deprecated =false))
    {
        $results = array(
            'error' => 0,
            'msg' => 'Wyslano dane',
        );
        echo json_encode($results);
        $to=$_POST['user_email'];
        $content=$_POST['description'].'<br>'.$_POST['selectTrade'].'<br>'. $_POST['employeeCount'];
        $title='Nowy Email';


        sf_send_email($to, $content, $title);
        exit();
    }
    else
   {
       $results = array(
       "error" => 1,
       'msg' => 'Nieprawidlowe dane',
        );
        echo json_encode($results);
        exit();
   }

}

function sf_send_email($to, $content, $title)
{
    global $boundary;
    $boundary = md5(uniqid(rand()));	add_filter('wp_mail_content_type','set_html_content_type');
    $content_of_mail =
        "This is a multi-part message in MIME format.\r\n" .
        "--" . $boundary . "\r\n" .
        "Content-type: text/plain;charset=utf-8\r\n\r\n" .
        strip_tags(str_replace('<br>',"\r\n",$content)) . "\r\n".
        "--" . $boundary . "\r\n".
        "Content-type: text/html;charset=utf-8\r\n\r\n" .
        $content;
    $sent = wp_mail($to, $title, $content_of_mail);
    remove_filter('wp_mail_content_type', 'set_html_content_type');
    return $sent;
}

function ajax_script(){ ?>
    <script type="text/javascript">
        const ajax_link = '<?php echo admin_url( "admin-ajax.php?action=show_json" ); ?>';
        const token = '<?php echo wp_create_nonce( "secure_nonce_name" ); ?>';
    </script><?php
}
add_action ( 'wp_head', 'ajax_script' );

function custom_footer_menu()
{
    register_nav_menus(array(
        'FooterMenu'=> __('Footer Menu')
    ));
}
add_action('init', 'custom_footer_menu');

class Footer_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output,$depth = 0, $args = array())
    {
    $output .='<li class="footerMenuCategory">'.'<div class="footerMenuCategory__titleBox"><i class="footerMenuCategory__icon fa fa-caret-right"></i>
                <a>Dla Pracowdawcy</a></div>'
                .'<ul class="footerMenuCategory__secondLevelMenu">';
    }
    function end_lvl( &$output, $depth = 1, $args = array() )
    {
            return parent::end_lvl($output, $depth);
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        if($depth>0)
        {
            $item_html = apply_filters('the_title', $item->title, $item->ID );
            $output .= '<li class="footerMenuCategory__menuCategoryItem"><a href ="'.$item->url.'">' . $item_html . '</a></li>';
        }
        parent::start_el($item_html, $item, $depth, $args);
    }


    function end_el( &$output, $item, $depth = 0, $args = null )
    {
        if($depth > 0)
            parent::end_el($output, $item, $depth);
    }

}

add_action( 'tf_create_options', 'aa_options_creating_function' );
require_once 'titan-framework-checker.php';

function aa_options_creating_function() {

    $titan = TitanFramework::getInstance( 'neat' );


    $footer = $titan->createAdminPanel( array(
        'name' => 'Footer'
    ) );

     $table1 = $footer->createTab( array(
        'name' => 'SocialMedia',
    ) );

    $table1->createOption(array
    (
        'id'   => 'Icon_twitter',
        'type' => 'upload',
        'name' => 'Ikona Twitter',
        'desc' => 'Dodaj ikone'

    ));
    $table1->createOption(array
    (
        'id'   => 'Link_twitter',
        'type' => 'text',
        'name' => 'Adres URL Twitter',
        'desc' => 'Dodaj URL'

    ));

    $table1->createOption( array(
        'id'   => 'Icon_facebook',
        'type' => 'upload',
        'name' => 'Ikona Facebook',
        'desc' => 'Dadaj ikone'
    ) );
    $table1->createOption(array
    (
        'id'   => 'Link_facebook',
        'type' => 'text',
        'name' => 'Adres URL Facebook',
        'desc' => 'Dodaj URL'

    ));
    $table1->createOption( array(
        'id'   => 'Icon_linkedin',
        'type' => 'upload',
        'name' => 'Ikona Linkedin',
        'desc' => 'Dodaj Ikone'
    ) );
    $table1->createOption(array
    (
        'id'   => 'Link_linkedin',
        'type' => 'text',
        'name' => 'Adres URL Linkedin',
        'desc' => 'Dodaj URL'

    ));
    $table1->createOption( array(
        'id'   => 'Icon_youtube',
        'type' => 'upload',
        'name' => 'Ikona Youtube',
        'desc' => 'Dodaj Ikone'
    ) );

    $table1->createOption(array
    (
        'id'   => 'Link_youtube',
        'type' => 'text',
        'name' => 'Adres URL Youtube',
        'desc' => 'Dodaj URL'

    ));
    $table1->createOption( array(
        'type' => 'save'
    ));

    $table2 = $footer->createTab( array(
        'name' => 'Info',
    ) );

    $table2->createOption((array
    (
        'id'   => 'Info',
        'type' => 'text',
        'name' => 'Iona SocialMedia',
        'desc' => 'Dodaj ikone'
    )
    ));
    $table2->createOption( array(
        'type' => 'save'
    ));

    $table3 = $footer->createTab( array(
        'name' => 'Description',
    ) );

    $table3->createOption((array
    (
        'id'   => 'Info_box',
        'type' => 'textarea',
        'name' => 'Iona SocialMedia',
        'desc' => 'Dodaj ikone'
    )
    ));
    $table3->createOption( array(
        'type' => 'save'
    ));

    $table4 = $footer->createTab( array(
        'name' => 'Logo',
    ) );

    $table4->createOption((array
    (
        'id'   => 'Logo',
        'type' => 'upload',
        'name' => 'Iona SocialMedia',
        'desc' => 'Dodaj ikone'
    )
    ));
    $table4->createOption( array(
        'type' => 'save'
    ));
}


function custom_footer_contact()
{
    register_nav_menus(array(
        'FooterContact'=> __('Footer Menu Contact')
    ));
}
add_action('init', 'custom_footer_contact');

class Footer_Walker_Contact extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        if($depth>0)
        {
            parent::end_lvl($output, $depth);
        }
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        if (0 == $depth)
        {
            $item_html = apply_filters('the_title', $item->title, $item->ID );
            $output .='<a href ="'.$item->url.'"class="footerRegulationMenu__item"><li>' . $item_html . '</li></a>';
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

