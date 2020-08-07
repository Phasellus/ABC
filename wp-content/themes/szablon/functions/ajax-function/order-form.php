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
        echo esc_html(json_encode($results));
        exit();
    }
    elseif(is_email($_POST['user_email'], $deprecated =false))
    {
        $results = array(
            'error' => 0,
            'msg' => 'Wyslano dane',
        );
        echo esc_html(json_encode($results));
        $to=$_POST['user_email'];
        $content=$_POST['description'].'<br>'.$_POST['selectTrade'].'<br>'. $_POST['employeeCount'];
        $title='Nowy Email';


        sf_send_email($to, $content, $title);
        exit();
    }
    else
    {
        $results = array(
            "error" => esc_html(1),
            'msg' => esc_html('Nieprawidlowe dane'),
        );
        echo esc_html(json_encode($results));
        exit();
    }

}