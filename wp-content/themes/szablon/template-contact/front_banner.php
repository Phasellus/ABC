<?php
$Image = get_sub_field('banner');
$ImageURL = wp_get_attachment_image_url($Image['ID'],'');

?>
<div id="blurredOverlay"></div>
<div class="bannerMain textWhite">
    <div class="bannerMain__image" style="background-image:url('<?php echo $ImageURL ?>');"></div>
    <div class="bannerMain__content">
        <div class="bannerMain__leftBox">
            <div class="bannerMain__slogan -noShadow"><span>Bądź zawsze na bieżąco!</span></div>
        </div>
        <div class="bannerMain__rightBox"></div>
    </div>
</div>
