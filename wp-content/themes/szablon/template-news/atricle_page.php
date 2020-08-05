<?php
$Image = get_sub_field('icon');
$ImageURL = wp_get_attachment_image_url($Image['ID'],'');
$Title = get_sub_field('e_mail');
?>

<section class="newsList">
    <div class="newsList__container">
        <div class="newsList__box">

            <?php
            SF_Article::getNews();
            ?>

        </div>

        <div class="newsList__additionalBox"><img class="newsList__img" src="<?php echo $ImageURL ?>">
            <p>Masz pomysł, co powinniśmy zawrzeć w naszej analizie?&nbsp;<strong>Napisz do nas:&nbsp;</strong><a href="<?php echo $Title ?>"><?php echo $Title ?></a></p>
        </div>
    </div>
</section>

