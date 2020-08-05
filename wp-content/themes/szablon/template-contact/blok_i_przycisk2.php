<?php
$Image = get_sub_field('obrazek');
$ImageURL = wp_get_attachment_image_url($Image['ID'],'');
$Title = get_sub_field('tekst');
$Description = get_sub_field('tekst_informacja');
?>


<div class="positionRelative responsiveMargins"></div>
<div class="positionRelative -noMarginTop">
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo $ImageURL; ?>"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader"><?php echo $Title; ?> <br><br></h1>
                <div class="contentPanel__text"><?php echo $Description; ?></div>
            </div>
        </div>
    </div>