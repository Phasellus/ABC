<?php


class SF_Nav_Walker extends Walker_Nav_Menu
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