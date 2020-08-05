<?php
$image = get_sub_field('banner');
$image_url = wp_get_attachment_image_url($image['ID'],'');

?>
<div id="blurredOverlay"></div>
<div class="bannerMain textWhite">
    <div class="bannerMain__image" style="background-image:url('<?php echo $image_url; ?>');"></div>
    <div class="bannerMain__content">
        <div class="bannerMain__leftBox">
            <div class="bannerMain__slogan"><span>
              Lider zatrudnienia <br>i doradztwa HR</span></div>
        </div>
        <div class="bannerMain__rightBox"></div>
    </div>
</div>
<div class="positionRelative responsiveMargins"></div>