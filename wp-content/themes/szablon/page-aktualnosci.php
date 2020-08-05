<?php
get_header(); ?>
<?php
$close_div = 0;
$i =2;
while ($i) {
    if(have_rows( 'page_blocks'))
    {
    the_row();
    $block = get_row_layout();
    include TEMP_VAR . '/template-news/' . $block . '.php';
    }
    else
    {
        break;
    }
}
?>
<?php get_footer(); ?>