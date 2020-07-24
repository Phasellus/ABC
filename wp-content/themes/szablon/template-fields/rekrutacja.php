<?php

$naglowek = get_sub_field('krotki_tekst');
?>

<div class="recruitmentRequirements bgLightGray textDark shadow">
    <div class="recruitmentRequirements__content">
        <div class="recruitmentRequirements__wrapper">
            <div class="recruitmentRequirements__main">
                <div class="recruitmentRequirements__title">
                    <p><?php echo $naglowek?></p>
                </div>
                <div class="recruitmentRequirements__whos">
                    <?php
                    while ( have_rows( 'lista_rekrutacji' ) ) {
                    the_row();
                    $tresc = get_sub_field('opis_specjalista');
                    $obraz1 = get_sub_field('ikonka');
                    $obraz1_url = wp_get_attachment_image_url($obraz1['ID'],'');
                    ?>
                    <div class="recruitmentReqItem"><img class="recruitmentReqItem__image" src="<?php echo $obraz1_url;?>">
                        <p><?php echo $tresc?></p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>