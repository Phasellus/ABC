<?php
$title = get_sub_field('naglowek');
?>
<div class="iconsPanel bgDarkGray textWhite">
        <div class="iconsPanel__content">
          <div class="iconsPanel__servicesPanel">
            <h1 class="iconsPanel__headerText"><?php echo $title; ?>:</h1>
            <div class="iconsPanel__listContainer">
                <?php
                while ( have_rows( 'list_elements' ) ) {
                the_row();
                $descriptionService = get_sub_field('descriptionservice');
                $image = get_sub_field('icon');
                $image_url = wp_get_attachment_image_url($image['ID'],'Icon');
                ?>
              <div class="iconsPanel__asPartnerBox">
                <div class="iconsPanel__asPartnerIcon" style="background-image: url(<?php echo $image_url; ?>);"></div>
                <div class="iconsPanel__asPartnerLabelBox"><span class="iconsPanel__traitText -normalFontWeight"><?php echo $descriptionService; ?></span></div>
              </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>