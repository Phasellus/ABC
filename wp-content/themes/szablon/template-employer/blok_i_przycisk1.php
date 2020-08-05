<?php
//dane segmentu
$obraz = get_sub_field('obrazek');
$obraz_url = wp_get_attachment_image_url($obraz['ID'],'');
$tekst = get_sub_field('tekst');
$tekst_info= get_sub_field('tekst_informacja');
?>

<div class="positionRelative -noMarginTop">
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo $obraz_url?>"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader"><?php echo $tekst?><br></h1>
                <div class="contentPanel__text">
                    <?php echo $tekst_info?>
                </div>
            </div>
        </div>
    </div>