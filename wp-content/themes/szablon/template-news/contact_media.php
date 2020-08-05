<?php
$Title = get_sub_field('title');
$Image = get_sub_field('icon');
$ImageURL = wp_get_attachment_image_url($Image['ID'],'');
$NamePress = get_sub_field('name');
$Phone = get_sub_field('phone');
$EMail = get_sub_field('e_mail');

?>
<div class="iconsPanel textWhite blur" style="background-image: url('<?php echo TEMP_URI; ?>./assets/images/blur_mock.jpg')">
<div class="contactPanel">
        <div class="contactPanel__content">
          <div class="contactPanel__leftBox">
            <div class="contactPanel__textHeader"><?php echo $Title; ?><img class="contactPanel__separator" src="<?php echo TEMP_URI; ?>./assets/images/newsPage/separator.jpg"></div>
          </div>
          <div class="contactPanel__rightBox">
            <div class="contactPanel__contactDataBox"><img class="contactPanel__personImage" src="<?php echo $ImageURL; ?>">
              <div class="contactPanel__contactData">
                <div class="contactPanel__name"><?php echo $NamePress; ?></div>
                <div class="contactPanel__text">Rzecznik prasowy</div>
              </div>
            </div>
            <div class="contactPanel__contactDataBox"><img class="contactPanel__contactImage" src="<?php echo TEMP_URI; ?>./assets/images/newsPage/phone.svg">
              <div class="contactPanel__phone -red"><a href="<?php echo $Phone; ?>"><?php echo $Phone; ?></a></div>
            </div>
            <div class="contactPanel__contactDataBox"><img class="contactPanel__contactImage" src="<?php echo TEMP_URI; ?>./assets/images/newsPage/plane.svg">
              <div class="contactPanel__mail"><a href="<?php echo $EMail; ?>"><?php echo $EMail; ?></a></div>
            </div>
          </div>
        </div>
      </div>
</div>


