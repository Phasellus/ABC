<?php
$image = get_sub_field('icon');
$imageurl = wp_get_attachment_image_url($image['ID'],'Icon');
$title = get_sub_field('e_mail');
?>

<section class="newsList">
    <div class="newsList__container">
        <div class="newsList__box">

            <?php
            SF_Article::getNews();
            ?>

        </div>

        <div class="newsList__additionalBox"><img class="newsList__img" src="<?php echo $imageurl ?>">
            <p>Masz pomysł, co powinniśmy zawrzeć w naszej analizie?&nbsp;<strong>Napisz do nas:&nbsp;</strong><a href="<?php echo $title ?>"><?php echo $title ?></a></p>
        </div>
    </div>
</section>

