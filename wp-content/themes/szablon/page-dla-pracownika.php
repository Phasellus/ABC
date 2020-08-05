
<?php get_header();?>

<?php
$close_div = 0;
while ( have_rows( 'page_blocks' ) ) {
    the_row();
    $block = get_row_layout();
    include TEMP_VAR.'/template-employer/'.$block.'.php';

}?>

<?php  get_footer();?>
