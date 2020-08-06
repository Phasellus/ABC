<?php
$obraz = get_sub_field('obraz');
$obraz_url = wp_get_attachment_image_url($obraz['ID'],'');
?>
<div class="iconsPanel textWhite bgDarkGray">
<section class="ourStory">
    <div class="ourStory__container">
        <div class="ourStory__timeline -hiddenOnDesktops"></div><img class="statsTimeLine__timelineImage -hiddenOnMobiles" src="<?php  echo $obraz_url; ?>">
    </div>
</section>
</div>