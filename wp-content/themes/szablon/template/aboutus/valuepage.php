<?php
$title = get_sub_field('thetitle');
$image = get_sub_field('image');
$image_url = wp_get_attachment_image_url($image['ID'],'');
?>

<div class="contentPanel bgWhite textDark">
    <div class="contentPanel__content">
        <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo $image_url; ?>"></div>
        <div class="contentPanel__rightBox">
            <h1 class="contentPanel__textHeader"><?php echo $title; ?> <br> <br></h1>
            <?php
            while ( have_rows( 'list_elements' ) ) {
            the_row();
            $titleDescription = get_sub_field('titleservice');
            $descriptionService = get_sub_field('descriptionservice');
            ?>
            <div class="contentPanel__text">
                <p><?php echo $titleDescription; ?></p>
                <p class="-smallerText"><?php echo $descriptionService; ?></p><br><br>
            </div>
            <?php } ?>
            <img class="contentPanel__tinyPeopleImage" src="<?php echo TEMP_URI; ?>./assets/images/aboutUs/tinyPeople-aboutUs-ourValues.jpg"">
        </div>
    </div>
</div>
