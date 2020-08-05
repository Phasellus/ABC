<?php
$Title = get_sub_field('title');
?>
<div class="iconsPanel textWhite blur" style="background-image: url('<?php echo TEMP_URI; ?>./assets/images/blur_mock.jpg')">
        <div class="iconsPanel__content">
          <div class="iconsPanel__servicesPanel">
            <h1 class="iconsPanel__headerText"><?php echo $Title; ?></h1>
            <div class="iconsPanel__listContainer">
                <?php
                while ( have_rows( 'list_objective' ) ) {
                the_row();
                $Description = get_sub_field('description');
                $Image = get_sub_field('icon');
                $Image_url = wp_get_attachment_image_url($Image['ID'],'');
                ?>
              <div class="iconsPanel__traitsBox">
                <div class="iconsPanel__asPartnerIcon" style="background-image: url(<?php echo $Image_url; ?>);"></div>
                <div class="iconsPanel__labelBox"><span class="iconsPanel__traitText -normalFontWeight"><?php echo $Description; ?> </span></div>
              </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
