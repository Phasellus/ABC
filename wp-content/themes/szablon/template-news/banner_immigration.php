<?php
$Title = get_sub_field('title');
$Description = get_sub_field('description');

?>
<div class="contentPanel cover textWhite" style="background-image: url(&quot;<?php echo TEMP_URI; ?>./assets/images/barometer_image.jpg&quot;);">
    <div class="contentPanel__content">
        <div class="contentPanel__leftBox">
            <h1 class="contentPanel__textHeader"><?php echo $Title; ?></h1>
        </div>
        <div class="contentPanel__rightBox">
            <div class="contentPanel__text"><?php echo $Description; ?>.
            </div>
        </div>
    </div>
</div>