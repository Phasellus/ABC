<?php


class SF_Bottom_Walker extends Walker_Nav_Menu
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