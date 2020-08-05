<?php
$obraz = get_sub_field('obraz');
$obraz_url = wp_get_attachment_image_url($obraz['ID'],'');
?>
<div class="positionRelative -noMarginTop">
    <div class="backgroundSector shadow" style="background-image: url(<?php echo $obraz_url?>)"></div></div>