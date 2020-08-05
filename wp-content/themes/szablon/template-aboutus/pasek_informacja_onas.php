<?php
$title = get_sub_field('tytul');
$DesctriptionFirst= get_sub_field('desctriptiofFirst');
$DesctriptionSecond= get_sub_field('desctriptiosecond');

?>
<div class="iconsPanel textWhite blur" style="background-image: url('<?php echo TEMP_URI; ?>./assets/images/blur_mock.jpg')">
   <div class="iconsPanel__content -whoWeRecruitText">
        <div class="iconsPanel__oneBox -justifySpaceBetween">
            <div class="iconsPanel__whoWeRecruitTitle">
                <h1 class="iconsPanel__headerText"> <?php echo $title; ?></h1>
            </div>
            <div class="iconsPanel__whoWeRecruitBox">
                <div class="iconsPanel__recruitmentBox">
                    <div class="iconsPanel__whoWeRecruitIcon" style="background-image: url(&quot;<?php echo TEMP_URI; ?>./assets/images/aboutUs/icon_wrench.svg&quot;);"></div>
                    <div class="iconsPanel__whoWeRecruitLabelBox"><span class="-normalFontWeight"><?php echo $DesctriptionFirst; ?></span></div>
                </div>
                <div class="iconsPanel__recruitmentBox">
                    <div class="iconsPanel__whoWeRecruitIcon" style="background-image: url(&quot;<?php echo TEMP_URI; ?>./assets/images/aboutUs/icon_worker.svg&quot;);"></div>
                    <div class="iconsPanel__whoWeRecruitLabelBox"><span class="-normalFontWeight"><?php echo $DesctriptionSecond; ?></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
