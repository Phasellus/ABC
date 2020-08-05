<?php


class SF_Bottom_Contact_Walker extends Walker_Nav_Menu
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