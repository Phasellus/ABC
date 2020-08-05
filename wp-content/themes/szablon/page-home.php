<?php
get_header(); ?>

<section class="newsList -column">
    <div class="newsList__container">
        <div class="newsList__box">
            <?php
            SF_Home::getArticle();
            ?>
        </div>
    </div>
</section>
<?php
$close_div = 0;
while ( have_rows( 'page_blocks' ) ) {
    the_row();
    $block = get_row_layout();
    include TEMP_VAR.'/template-home/'.$block.'.php';

}?>

<?php get_footer(); ?>
