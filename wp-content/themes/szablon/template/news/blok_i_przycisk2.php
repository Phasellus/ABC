<?php
$image = get_sub_field('obrazek');
$imageURL = wp_get_attachment_image_url($image['ID'],'Blok');
$title = get_sub_field('tekst');
$description = get_sub_field('tekst_informacja');
?>


<div class="positionRelative responsiveMargins"></div>
<div class="positionRelative -noMarginTop">
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo $imageURL ; ?>"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader"><?php echo $title; ?> <br><br></h1>
                <div class="contentPanel__text"><?php echo $description; ?></div>
            </div>
        </div>
    </div>