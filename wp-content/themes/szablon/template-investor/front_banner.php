<?php
$obraz = get_sub_field('banner');
$obraz_url = wp_get_attachment_image_url($obraz['ID'],'');

?>
<div id="blurredOverlay"></div>
    <div class="bannerMain textWhite">
      <div class="bannerMain__image" style="background-image:url('<?php echo $obraz_url; ?>');"></div>
      <div class="bannerMain__content">
        <div class="bannerMain__leftBox">
          <div class="bannerMain__slogan -noShadow"><span>Relacje inwestorskie</span></div>
        </div>
        <div class="bannerMain__rightBox"></div>
      </div>
    </div>