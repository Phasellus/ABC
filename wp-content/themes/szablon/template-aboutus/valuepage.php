<?php
$Title = get_sub_field('thetitle');
$Image = get_sub_field('image');
$Image_url = wp_get_attachment_image_url($Image['ID'],'');
?>

<div class="contentPanel bgWhite textDark">
    <div class="contentPanel__content">
        <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo $Image_url; ?>"></div>
        <div class="contentPanel__rightBox">
            <h1 class="contentPanel__textHeader"><?php echo $Title; ?> <br> <br></h1>
            <?php
            while ( have_rows( 'list_elements' ) ) {
            the_row();
            $TitleDescription = get_sub_field('titleservice');
            $DescriptionService = get_sub_field('descriptionservice');
            ?>
            <div class="contentPanel__text">
                <p><?php echo $TitleDescription; ?></p>
                <p class="-smallerText"><?php echo $DescriptionService; ?></p><br><br>
            </div>
            <?php } ?>
            <img class="contentPanel__tinyPeopleImage" src="<?php echo TEMP_URI; ?>./assets/images/aboutUs/tinyPeople-aboutUs-ourValues.jpg"">
        </div>
    </div>
</div>
