<?php
include_once "functions/post-types/SF_Article.php";
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        SF_Article::getArticle();
        ?>
    </main>
</div>

<?php get_footer(); ?>
