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
            $twitter = $titan->getOption( 'Icon_twitter' );
            $url_twitter = $titan->getOption( 'Link_twitter' );
            if(!empty($url_twitter))
            {
                $tab_twitter = wp_get_attachment_image_src( $twitter );
                $twitter_pic = $tab_twitter[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $url_twitter;?>"><img src="<?php echo $twitter_pic; ?>"></a><?php
            }
            $facebook = $titan->getOption( 'Icon_facebook' );
            $url_facebook = $titan->getOption( 'Link_facebook' );
            if(!empty($url_facebook))
            {
                $tab_facebook = wp_get_attachment_image_src( $facebook );
                $facebook_pic = $tab_facebook[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $url_facebook;?>"><img src="<?php echo $facebook_pic; ?>"></a><?php
            }
            $linkedin = $titan->getOption( 'Icon_linkedin' );
            $url_linkedin = $titan->getOption( 'Link_linkedin' );
            if(!empty($url_linkedin))
            {
                $tab_linkedin = wp_get_attachment_image_src( $linkedin );
                $linkedin_pic = $tab_linkedin[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $url_linkedin;?>"><img src="<?php echo $linkedin_pic; ?>"></a><?php

            }
            $youtube = $titan->getOption( 'Icon_youtube' );
            $url_youtube = $titan->getOption( 'Link_youtube' );
            if(!empty($url_youtube))
            {
                $tab_youtube = wp_get_attachment_image_src( $youtube );
                $youtube_pic = $tab_youtube[0];
                ?><a class="footerSocialMedia__item" href="<?php echo $url_youtube;?>"><img src="<?php echo $youtube_pic; ?>"></a><?php
            }
            $Logo = $titan->getOption( 'Logo' );
            $tab_Logo = wp_get_attachment_image_src( $Logo );
            $Logo_url = $tab_Logo[0];
            $text = $titan->getOption( 'Info' );
            $text_box = $titan->getOption( 'Info_box' );

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
            <div class="footerCompanyContact"><img class="footerCompanyContact__logo" src="<?php echo $Logo_url; ?>">
                <div class="footerCompanyContact__text"><?php  echo $text;?></div>
            </div>
            <div class="footerCompanyInformation"><?php  echo $text_box;?></div>
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
