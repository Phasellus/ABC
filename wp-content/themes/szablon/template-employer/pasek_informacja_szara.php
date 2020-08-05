<?php
$tekst = get_sub_field('tytul');
$link = get_sub_field('przycisk');
$tekst_info= get_sub_field('tresc');

?>
<div class="contentPanel bgDarkGray textWhite">
        <div class="contentPanel__content">
          <div class="contentPanel__leftBox">
            <h1 class="contentPanel__textHeader"><?php echo $tekst ?></h1>
          </div>
          <div class="contentPanel__rightBox">
            <div class="contentPanel__text">
                <?php echo $tekst_info ?>><br><br>
                <button class="contentPanel__buttonRed"><a href="<?php echo $link ?>">CTA</a></button>
            </div>
          </div>
        </div>
      </div>