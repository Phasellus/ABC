<?php
$bossfoto = get_sub_field('fotografia_prezes1');
$bossfoto_url = wp_get_attachment_image_url($bossfoto['ID'],'Management');
$vicebossfoto = get_sub_field('fotografia_prezas2');
$vicebossfoto_url = wp_get_attachment_image_url($vicebossfoto['ID'],'Management');
$contact = get_sub_field('kontakt');
$bossname= get_sub_field('daneprezesa');
$vicebossname= get_sub_field('danezastepcy');

?>

<div class="contentPanel bgRed textWhite">
    <div class="contentPanel__content -stretch">
        <div class="contentPanel__leftBox -positionRelative">
            <h1 class="contentPanel__textHeader -bigTextStaff">Władze spółki</h1>
            <div class="contentPanel__text -staffSmallerText">
                <p>W razie jakichkolwiek pytań, prosimy o kontakt:&nbsp;</p><a class="-colorInherit" href="<?php echo $contact ?>"><?php echo $contact ?></a>
            </div>
        </div>
        <div class="contentPanel__rightBox -directionRow -justifySpaceBetween">
            <div class="contentPanel__chairManBox"><img class="contentPanel__photo" src="<?php echo $bossfoto_url; ?>">
                <h1 class="contentPanel__chairManName"><?php echo $bossname; ?></h1>
                <p class="contentPanel__chairManFunction">Prezes Zarządu</p>
            </div>
            <div class="contentPanel__chairManBox"><img class="contentPanel__photo" src="<?php echo $vicebossfoto_url; ?>">
                <h1 class="contentPanel__chairManName"><?php echo $vicebossname; ?></h1>
                <p class="contentPanel__chairManFunction">Wicerezes Zarządu</p>
            </div>
        </div>
    </div>
</div>
</div>
