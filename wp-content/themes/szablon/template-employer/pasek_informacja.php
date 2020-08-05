
<?php
$tekst = get_sub_field('tytul');
$link = get_sub_field('przycisk');
$tekst_info= get_sub_field('tresc');
?>


<div class="contentPanel bgLightGray shadow textDark">
    <div class="contentPanel__content">
        <div class="contentPanel__leftBox">
            <h1 class="contentPanel__textHeader"><?php echo $tekst ?></h1>
        </div>
        <div class="contentPanel__rightBox">
            <div class="contentPanel__text">
                <?php echo $tekst_info ?><br><br><a  href="<?php echo $link ?>" class="contentPanel__buttonRed">Zgłoś się</a>
            </div>
        </div>
    </div>
</div>