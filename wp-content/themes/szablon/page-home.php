<?php
include_once "functions/post-types/SF_Home.php";
get_header(); ?>
<br><br><br><br>
<div class="articleContent">
    <div class="articleContent__title">Nowe Wpisy Blogowe!!!!<br><br></div>
</div>
<div class="articleContent">
    <div class="articleContent__content">
        <?php
        SF_Home::getArticle();
        $abc = get_the_ID();
        echo $abc;
        ?>

        </div>
</div>

<?php get_footer(); ?>
