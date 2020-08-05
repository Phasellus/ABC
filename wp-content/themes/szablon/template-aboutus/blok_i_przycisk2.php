<?php
//dane segmentu
$image = get_sub_field('obrazek');
$image_url = wp_get_attachment_image_url($image['ID'],'');
$title = get_sub_field('tekst');
$contnent= get_sub_field('tekst_informacja');
?>

<div class="positionRelative -noMarginTop">
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo $image_url ?>"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader -zIndexTop"><?php echo $title ?><br> <br></h1>
                <div class="contentPanel__text textDark -zIndexTop"><?php echo $contnent ?></div><br><img class="contentPanel__tinyPeopleImage contentPanel__photo -hiddenOnMobiles" src="<?php echo TEMP_URI; ?>./assets/images/aboutUs/tiny_people_4.jpg">
            </div>
        </div>
    </div>