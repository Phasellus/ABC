<?php
$image = get_sub_field('banner');
$imageurl = wp_get_attachment_image_url($image['ID'],'Banner');

?>
<div id="blurredOverlay"></div>
<div class="bannerMain textWhite">
    <div class="bannerMain__image" style="background-image:url('<?php echo $imageurl ?>');"></div>
    <div class="bannerMain__content">
        <div class="bannerMain__leftBox">
            <div class="bannerMain__slogan -noShadow"><span>Bądź zawsze na bieżąco!</span></div>
        </div>
        <div class="bannerMain__rightBox"></div>
    </div>
</div>