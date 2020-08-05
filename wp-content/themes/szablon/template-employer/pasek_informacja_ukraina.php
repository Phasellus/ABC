<?php
$obraz = get_sub_field('banner');
$obraz_url = wp_get_attachment_image_url($obraz['ID'],'');
$tekst = get_sub_field('tytul');
$link = get_sub_field('przycisk');
$tekst_info= get_sub_field('tresc');

?>

<div class="contentPanel cover textWhite" style="background-image:url('<?php echo $obraz_url ?>');background-position: center">
    <div class="contentPanel__content">
        <div class="contentPanel__leftBox">
            <h1 class="contentPanel__textHeader"><?php echo $tekst ?>></h1>
        </div>
        <div class="contentPanel__rightBox">
            <div class="contentPanel__text"> <?php echo $tekst_info ?><br><br>
                <button class="contentPanel__buttonRed"><a href="<?php echo $link ?>">зайти</a></button>
            </div>
        </div>
    </div>
</div>
