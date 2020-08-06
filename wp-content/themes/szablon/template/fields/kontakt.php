<?php
$naglowek = get_sub_field('tekst');
?>

<div class="pleaseContact bgDarkGray shadow textWhite">
    <div class="pleaseContact__content">
        <div class="pleaseContact__wrapper">
            <div class="pleaseContact__main">
                <div class="pleaseContact__title"><span><?php echo $naglowek; ?></span></div>
                <div class="pleaseContact__details">
                    <div class="pleaseContact__selectBox">
                        <select class="pleaseContact_select">
                            <option value="0">Dział sprzedaży</option>
                            <option value="1">Dział rekrutacji</option>
                            <option value="2">Dział rekrutacji specjalistów i kadry zarządzającej z Polski</option>
                            <option value="3">Biuro i administracja</option>
                        </select>
                    </div>
                    <div class="pleaseContact__info">
                        <div class="pleaseContact__text">
                            <?php
                            while ( have_rows( 'tekst_dzialy' ) ) {
                            the_row();
                            $tresc = get_sub_field('dzial');
                            ?>
                            <div class="pleaseContact__separated">
                                <div class="pleaseContact__item">
                                    <div class="pleaseContact__icon"><img src="<?php echo TEMP_URI;?>/assets/images/pin.svg" alt="pin"></div><span><?php echo $tresc;?></span>
                                </div>
                                <div class="pleaseContact__arrow"><img src="<?php echo TEMP_URI;?>/assets/images/separatorArrow.png"></div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="pleaseContact__contactInfo">
                        <?php
                        while ( have_rows( 'tekst_informacje' ) ) {
                        the_row();
                        $tresc = get_sub_field('dane');
                        $telefon = get_sub_field('telefon');
                        $email = get_sub_field('email');
                        $stanowisko = get_sub_field('stanowisko');
                        ?>
                        <div class="pleaseContact__contactWrapper">
                            <div class="pleaseContact__worker">
                                <div class="pleaseContact__avatar"><img src="<?php echo TEMP_URI;?>/assets/images/avatar.png" alt="avatar"></div>
                                <div class="pleaseContact__workerInfo"><span><?php echo $tresc;?></span><span><?php echo $stanowisko;?></span></div>
                            </div>
                            <div class="pleaseContact__phone">
                                <div class="pleaseContact__phone__icon"><img src="<?php echo TEMP_URI;?>/assets/images/telephone.svg" alt="avatar"></div>
                                <div class="pleaseContact__phoneNumber"><span><?php echo $telefon;?></span></div>
                            </div>
                            <div class="pleaseContact__email">
                                <div class="pleaseContact__email__icon"><img src="<?php echo TEMP_URI;?>/assets/images/airplane.svg" alt="avatar"></div>
                                <div class="pleaseContact__emailAddress"><span><?php echo $email;?></span></div>
                            </div>
                    </div>
                        <?php }?>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
