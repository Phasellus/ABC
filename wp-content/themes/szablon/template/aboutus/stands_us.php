<?php
$title = get_sub_field('naglowek');
?>
<div class="iconsPanel textWhite bgDarkGray">
    <div class="iconsPanel__content">
        <div class="iconsPanel__servicesPanel">
            <h1 class="iconsPanel__headerText"><?php echo $title; ?></h1>
            <div class="iconsPanel__listContainer">
                <?php
                while ( have_rows( 'list_elements' ) ) {
                the_row();
                $titleDescription = get_sub_field('titleservice');
                $descriptionService = get_sub_field('descriptionservice');
                $image = get_sub_field('icon');
                $image_url = wp_get_attachment_image_url($image['ID'],'');
                ?>
                <div class="iconsPanel__traitsBox">
                    <div class="iconsPanel__traitIcon" style="background-image: url(<?php echo $image_url; ?>)"></div><span class="iconsPanel__traitName"><?php echo $titleDescription; ?></span>
                    <div class="iconsPanel__labelBox -addMarginTop"><span class="iconsPanel__traitText -normalFontWeight"><?php echo $descriptionService; ?></span></div>
                </div>
                <?php  }?>
            </div>
        </div>
    </div>
</div>






