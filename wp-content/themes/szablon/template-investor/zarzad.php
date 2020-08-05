<?php
$BossFoto = get_sub_field('fotografia_prezes1');
$BossFoto_url = wp_get_attachment_image_url($BossFoto['ID'],'');
$ViceBossFoto = get_sub_field('fotografia_prezas2');
$ViceBossFoto_url = wp_get_attachment_image_url($ViceBossFoto['ID'],'');
$Contact = get_sub_field('kontakt');
$BossName= get_sub_field('daneprezesa');
$ViceBossName= get_sub_field('danezastepcy');

?>

<div class="contentPanel bgRed textWhite">
    <div class="contentPanel__content -stretch">
        <div class="contentPanel__leftBox -positionRelative">
            <h1 class="contentPanel__textHeader -bigTextStaff">Władze spółki</h1>
            <div class="contentPanel__text -staffSmallerText">
                <p>W razie jakichkolwiek pytań, prosimy o kontakt:&nbsp;</p><a class="-colorInherit" href="<?php echo $Contact ?>"><?php echo $Contact ?></a>
            </div>
        </div>
        <div class="contentPanel__rightBox -directionRow -justifySpaceBetween">
            <div class="contentPanel__chairManBox"><img class="contentPanel__photo" src="<?php echo $BossFoto_url; ?>">
                <h1 class="contentPanel__chairManName"><?php echo $BossName; ?></h1>
                <p class="contentPanel__chairManFunction">Prezes Zarządu</p>
            </div>
            <div class="contentPanel__chairManBox"><img class="contentPanel__photo" src="<?php echo $ViceBossFoto_url; ?>">
                <h1 class="contentPanel__chairManName"><?php echo $ViceBossName; ?></h1>
                <p class="contentPanel__chairManFunction">Wicerezes Zarządu</p>
            </div>
        </div>
    </div>
</div>
</div>
