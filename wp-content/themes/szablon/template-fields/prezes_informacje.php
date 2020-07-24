<?php
$obraz = get_sub_field('zdjecie');
$obraz_url = wp_get_attachment_image_url($obraz['ID'],'');
$tekst = get_sub_field('imie');
$tekst_info= get_sub_field('opis');
?>

<div class="chairMan">
        <div class="chairMan__content">
            <div class="chairMan__leftBox"><img class="chairMan__photo" src="<?php echo $obraz_url;?>"></div>
            <div class="chairMan__rightBox"><img class="chairMan__logo" src="<?php echo TEMP_URI;?>/assets/images/logo/logo.png">
                <div class="chairMan__text"><?php echo $tekst_info;?></div>
            </div>
        </div>
        <div class="chairMan__name"><?php echo $tekst;?></div>
</div>
