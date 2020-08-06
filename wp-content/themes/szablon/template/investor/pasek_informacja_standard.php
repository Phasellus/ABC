<?php
$tekst = get_sub_field('tytul');
$tekst_info= get_sub_field('tresc');

?>
<div class="contentPanel bgDarkGray textWhite">
        <div class="contentPanel__content">
          <div class="contentPanel__leftBox">
            <h1 class="contentPanel__textHeader"><?php echo $tekst ?></h1>
          </div>
          <div class="contentPanel__rightBox">
            <div class="contentPanel__text"><?php echo $tekst_info ?></div>
          </div>
        </div>
      </div>