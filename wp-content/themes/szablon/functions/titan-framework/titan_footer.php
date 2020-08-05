<?php
    function titan_footer() {

        $titan = TitanFramework::getInstance( 'neat' );


        $footer = $titan->createAdminPanel( array(
            'name' => 'Footer'
        ) );

        $IconSocialMedia = $footer->createTab( array(
            'name' => 'SocialMedia',
        ) );

        $IconSocialMedia->createOption(array
        (
            'id'   => 'Icon_twitter',
            'type' => 'upload',
            'name' => 'Ikona Twitter',
            'desc' => 'Dodaj ikone'

        ));
        $IconSocialMedia->createOption(array
        (
            'id'   => 'Link_twitter',
            'type' => 'text',
            'name' => 'Adres URL Twitter',
            'desc' => 'Dodaj URL'

        ));

        $IconSocialMedia->createOption( array(
            'id'   => 'Icon_facebook',
            'type' => 'upload',
            'name' => 'Ikona Facebook',
            'desc' => 'Dadaj ikone'
        ) );
        $IconSocialMedia->createOption(array
        (
            'id'   => 'Link_facebook',
            'type' => 'text',
            'name' => 'Adres URL Facebook',
            'desc' => 'Dodaj URL'

        ));
        $IconSocialMedia->createOption( array(
            'id'   => 'Icon_linkedin',
            'type' => 'upload',
            'name' => 'Ikona Linkedin',
            'desc' => 'Dodaj Ikone'
        ) );
        $IconSocialMedia->createOption(array
        (
            'id'   => 'Link_linkedin',
            'type' => 'text',
            'name' => 'Adres URL Linkedin',
            'desc' => 'Dodaj URL'

        ));
        $IconSocialMedia->createOption( array(
            'id'   => 'Icon_youtube',
            'type' => 'upload',
            'name' => 'Ikona Youtube',
            'desc' => 'Dodaj Ikone'
        ) );

        $IconSocialMedia->createOption(array
        (
            'id'   => 'Link_youtube',
            'type' => 'text',
            'name' => 'Adres URL Youtube',
            'desc' => 'Dodaj URL'

        ));
        $IconSocialMedia->createOption( array(
            'type' => 'save'
        ));

        $TitleFooterText = $footer->createTab( array(
            'name' => 'Info',
        ) );

        $TitleFooterText->createOption((array
        (
            'id'   => 'Info',
            'type' => 'text',
            'name' => 'Iona SocialMedia',
            'desc' => 'Dodaj ikone'
        )
        ));
        $TitleFooterText->createOption( array(
            'type' => 'save'
        ));

        $TitleFooterContent = $footer->createTab( array(
            'name' => 'Description',
        ) );

        $TitleFooterContent->createOption((array
        (
            'id'   => 'Info_box',
            'type' => 'textarea',
            'name' => 'Iona SocialMedia',
            'desc' => 'Dodaj ikone'
        )
        ));
        $TitleFooterContent->createOption( array(
            'type' => 'save'
        ));

        $IconLogoPage = $footer->createTab( array(
            'name' => 'Logo',
        ) );

        $IconLogoPage->createOption((array
        (
            'id'   => 'Logo',
            'type' => 'upload',
            'name' => 'Iona SocialMedia',
            'desc' => 'Dodaj ikone'
        )
        ));
        $IconLogoPage->createOption( array(
            'type' => 'save'
        ));
    }
add_action( 'tf_create_options', 'titan_footer' );
