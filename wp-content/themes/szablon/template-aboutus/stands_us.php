<?php
$Title = get_sub_field('naglowek');
?>
<div class="iconsPanel textWhite bgDarkGray">
    <div class="iconsPanel__content">
        <div class="iconsPanel__servicesPanel">
            <h1 class="iconsPanel__headerText"><?php echo $Title; ?></h1>
            <div class="iconsPanel__listContainer">
                <?php
                while ( have_rows( 'list_elements' ) ) {
                the_row();
                $TitleDescription = get_sub_field('titleservice');
                $DescriptionService = get_sub_field('descriptionservice');
                $Image = get_sub_field('icon');
                $Image_url = wp_get_attachment_image_url($Image['ID'],'');
                ?>
                <div class="iconsPanel__traitsBox">
                    <div class="iconsPanel__traitIcon" style="background-image: url(<?php echo $Image_url; ?>)"></div><span class="iconsPanel__traitName"><?php echo $TitleDescription; ?></span>
                    <div class="iconsPanel__labelBox -addMarginTop"><span class="iconsPanel__traitText -normalFontWeight"><?php echo $DescriptionService; ?></span></div>
                </div>
                <?php  }?>
            </div>
        </div>
    </div>
</div>






