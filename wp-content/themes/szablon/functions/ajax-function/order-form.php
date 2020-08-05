<?php
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