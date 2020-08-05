<?php
$tekst = get_sub_field('tytulsegmentu');
$tekst_info= get_sub_field('trescsegmentu');
?>

<div class="contentPanel bgWhite textDark">
    <div class="contentPanel__content -alignFlexStart">
        <div class="contentPanel__leftBox">
            <h1 class="contentPanel__textHeader -addMarginTop">Potęga wiedzy!</h1>
        </div>
        <div class="contentPanel__rightBox">
            <div class="contentPanel__text"><?php echo $tekst;?><br><br><span class="-smallerText"><?php echo $tekst_info;?></span><br><br><span class="-bold">Zapoznaj się z naszymi raportami:</span><br><br></div>
            <?php

            while ( have_rows( 'raports'))
            {
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
</div>
