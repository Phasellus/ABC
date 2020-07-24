<?php
$naglowek = get_sub_field('naglowek');
?>
<div class="iconsPanel bgDarkGray textWhite">
    <div class="iconsPanel__content">
        <div class="iconsPanel__servicesPanel">
            <h1 class="iconsPanel__headerText"><?php echo $naglowek; ?></h1>
            <div class="iconsPanel__listContainer">
                <?php
                while ( have_rows( 'lista_elementow' ) ) {
                    the_row();
                    $tresc = get_sub_field('tekst_uslugi');
                    $obraz1 = get_sub_field('ikona');
                    $obraz1_url = wp_get_attachment_image_url($obraz1['ID'],'');
                    ?>
                <div class="iconsPanel__servicesBox">
                    <div class="iconsPanel__servicesIcon" style="background-image: url('<?php echo $obraz1_url; ?>');"></div>
                    <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute"><?php echo $tresc; ?></a></div>
                </div>
                    <?php  }?>

            </div>
        </div>
    </div>
</div>