
<?php get_header();
//the_post();if( have_rows('fields') ) {  $i=0;
$close_div = 0;
while ( have_rows( 'page_blocks' ) ) {
    the_row();
    $block = get_row_layout();
    include TEMP_VAR.'/template-fields/'.$block.'.php';

}?>

<?php get_footer();