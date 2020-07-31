<!-- Footer-->
<footer class="footer">
    <div class="footer__content">
        <div class="footer__menuContent">
            <ul class="footerMenu">

                        <?php wp_nav_menu( array(
                            'theme_location'=>'FooterMenu',
                            'walker' => new Footer_Walker(),
                            'depth' => 2,
                            'items_wrap' => '%3$s',
                            'container' => false,
                        ));?>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer__infoContainer">
        <div class="footer__infoContent">
            <div class="footerSocialMedia">
            <?php
            $titan = TitanFramework::getInstance( 'neat' );
            $IconTwitter = $titan->getOption( 'Icon_twitter' );
            $UrlTwitterAddress = $titan->getOption( 'Link_twitter' );
            if(!empty($UrlTwitterAddress))
            {
                $TwitterTable = wp_get_attachment_image_src( $IconTwitter );
                $TwitterPicture = $TwitterTable[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $UrlTwitterAddress;?>"><img src="<?php echo $TwitterPicture; ?>"></a><?php
            }
            $IconFacebook = $titan->getOption( 'Icon_facebook' );
            $UrlFacebookAddress = $titan->getOption( 'Link_facebook' );
            if(!empty($UrlFacebookAddress))
            {
                $FacebookTable = wp_get_attachment_image_src( $IconFacebook );
                $FacebookPicture = $FacebookTable[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $UrlFacebookAddress;?>"><img src="<?php echo $FacebookPicture; ?>"></a><?php
            }
            $IconLinkedin = $titan->getOption( 'Icon_linkedin' );
            $UrlLinkedinAddress = $titan->getOption( 'Link_linkedin' );
            if(!empty($UrlLinkedinAddress))
            {
                $LinkedinTable = wp_get_attachment_image_src( $IconLinkedin );
                $LinkedinPicture = $LinkedinTable[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $UrlLinkedinAddress;?>"><img src="<?php echo $LinkedinPicture; ?>"></a><?php

            }
            $IconYoutube = $titan->getOption( 'Icon_youtube' );
            $UrlYoutubeAddress = $titan->getOption( 'Link_youtube' );
            if(!empty($UrlYoutubeAddress))
            {
                $YoutubeTable = wp_get_attachment_image_src( $IconYoutube );
                $YoutubePicture = $YoutubeTable[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $UrlYoutubeAddress;?>"><img src="<?php echo $YoutubePicture; ?>"></a><?php
            }
            $LogoIconPage = $titan->getOption( 'Logo' );
            $LogoIconTable = wp_get_attachment_image_src( $LogoIconPage );
            $UrlLogoPage = $LogoIconTable[0];
            $TitleBoxFooter = $titan->getOption( 'Info' );
            $ContentBoxFooter = $titan->getOption( 'Info_box' );

            ?>
            </div>
            <ul class="footerRegulationMenu">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'FooterContact',
                        'walker' => new Footer_Walker_Contact(),
                        'depth' => 2,
                        'items_wrap' => '%3$s',
                        'container' => false,
                    ));?>
                  </ul>
            <div class="footerCompanyContact"><img class="footerCompanyContact__logo" src="<?php echo $UrlLogoPage; ?>">
                <div class="footerCompanyContact__text"><?php  echo $TitleBoxFooter;?></div>
            </div>
            <div class="footerCompanyInformation"><?php  echo $ContentBoxFooter;?></div>
            <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        </div>
    </div>
    <div class="footerBottom"></div>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script type="text/javascript" src="<?php echo TEMP_URI;?>/assets/scripts/main.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
