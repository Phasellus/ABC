<?php
$title = get_sub_field('title');
?>
<div class="iconsPanel textWhite blur" style="background-image: url('<?php echo TEMP_URI; ?>./assets/images/blur_mock.jpg')">
        <div class="iconsPanel__content">
          <div class="iconsPanel__servicesPanel">
            <h1 class="iconsPanel__headerText"><?php echo $title; ?></h1>
            <div class="iconsPanel__listContainer">
                <?php
                while ( have_rows( 'list_objective' ) ) {
                the_row();
                $description = get_sub_field('description');
                $image = get_sub_field('icon');
                $image_url = wp_get_attachment_image_url($image['ID'],'Icon');
                ?>
              <div class="iconsPanel__traitsBox">
                <div class="iconsPanel__asPartnerIcon" style="background-image: url(<?php echo $image_url; ?>);"></div>
                <div class="iconsPanel__labelBox"><span class="iconsPanel__traitText -normalFontWeight"><?php echo $description; ?> </span></div>
              </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
