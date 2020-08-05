<?php
$Title = get_sub_field('naglowek');
?>
<div class="iconsPanel bgDarkGray textWhite">
        <div class="iconsPanel__content">
          <div class="iconsPanel__servicesPanel">
            <h1 class="iconsPanel__headerText"><?php echo $Title; ?>:</h1>
            <div class="iconsPanel__listContainer">
                <?php
                while ( have_rows( 'list_elements' ) ) {
                the_row();
                $DescriptionService = get_sub_field('descriptionservice');
                $Image = get_sub_field('icon');
                $Image_url = wp_get_attachment_image_url($Image['ID'],'');
                ?>
              <div class="iconsPanel__asPartnerBox">
                <div class="iconsPanel__asPartnerIcon" style="background-image: url(<?php echo $Image_url; ?>);"></div>
                <div class="iconsPanel__asPartnerLabelBox"><span class="iconsPanel__traitText -normalFontWeight"><?php echo $DescriptionService; ?></span></div>
              </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>