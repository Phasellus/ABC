<?php
$obraz = get_sub_field('banerreklama');
$obraz_url = wp_get_attachment_image_url($obraz['ID'],'');
$tekst = get_sub_field('tytulsegmentu');
$tekst_info= get_sub_field('trescsegmentu');
?>

<div class="contentPanel bgWhite textDark">
    <div class="contentPanel__content">
        <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo $obraz_url;?>"></div>
        <div class="contentPanel__rightBox"><img class="contentPanel__tinyPeopleImage" src="<?php echo TEMP_URI;?>./assets/images/employeePage/tinyPeople-employee-jobMarketNews.jpg">
            <h1 class="contentPanel__textHeader"><?php echo $tekst;?></h1><br><br>
            <div class="contentPanel__text">
                <?php echo $tekst_info;?><br><br><strong>
                    <h1>Zapoznaj się z naszymi raportami:</h1></strong><br></div>

            <?php

            while ( have_rows( 'raports' )){
            the_row();
                $file1 = get_sub_field('raportsfile');
                $size = $file1['filesize'];
                $size = ($size/1024)/1024;
                $size = substr($size,0,4);
            ?>
            <div class="contentPanel__downloadLinkBox">
                <div class="contentPanel__downloadIcon" style="background-image: url('<?php echo TEMP_URI;?>./assets/images/pdf_icon.svg')"></div>
                <div class="contentPanel__downloadLinkContent"><a class="-colorRed" href="<?php echo $file1['url'] ;?>"><?php echo $file1['title']; ?></a><br><?php echo $file1['filename']; ?>
                    <?php
                    if($size != 0){?>
                    (<?php echo $size; ?> MB)
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

