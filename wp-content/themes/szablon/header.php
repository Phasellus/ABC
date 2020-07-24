<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="title" content="Szablon">
    <meta name="description" content="Szablon opis">
    <meta name="keywords" content="Szablon keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo TEMP_URI;?>/assets/styles/main.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato&amp;display=swap" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo TEMP_URI;?>/assets/images/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo TEMP_URI;?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href=" <?php echo TEMP_URI;?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo TEMP_URI;?>/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo TEMP_URI;?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="headerPosition">
    <header class="header">
        <div class="header__container">
            <div class="header__box">
                <div class="header__item -logo"><img class="logo" src="<?php echo TEMP_URI;?>/assets/images/logo/logo.svg"></div>
                <div class="header__item -nav">
                    <!-- START NAV-->
                    <nav class="nav">
                        <ul class="nav__list">
                            <?php wp_nav_menu( array(
                                'theme_location'=>'new_menu',
                                'walker' => new Nav_Walker(),
                                'depth' => 2,
                                'items_wrap' => '%3$s',
                                'container' => false,
                            ));?>
                        </ul>
                    </nav>
                    <!-- END NAV-->
                </div>
                <div class="header__item -switchLang">
                    <div class="languagesSwitcher">
                        <select class="languagesSwitcher__select">
                            <option class="languagesSwitcher__option" value="">Change language</option>
                            <option class="languagesSwitcher__option" value="http://localhost:9000/build/main.html?lang=pl">PL</option>
                            <option class="languagesSwitcher__option" value="http://localhost:9000/build/main.html?lang=en">EN</option>
                            <option class="languagesSwitcher__option" value="http://localhost:9000/build/main.html?lang=de">DE</option>
                        </select>
                    </div>
                </div>
                <div class="header__item -mobile">
                    <!-- START MOBILE NAV-->
                    <div class="mobileNav">
                        <div class="mobileNav__menuIconBox"><img class="mobileNav__menuIcon" src="<?php echo TEMP_URI;?>/assets/images/mobileMenu/menuMobile.png">
                            <div class="mobileNav__menuIconText">menu</div>
                        </div>
                        <div class="mobileNav__container">
                            <div class="mobileNav__buttonBox"><img class="mobileNav__closeButton" src="<?php echo TEMP_URI;?>/assets/images/mobileMenu/closeMenuMobile.png"></div>
                            <nav class="mobileNav__nav">
                                <ul class="mobileNav__list">
                                    <li class="mobileNav__item"><a class="mobileNav__link" href="#">O nas</a></li>
                                    <li class="mobileNav__item"><a class="mobileNav__link" href="#">Relacje inwestorskie</a></li>
                                    <li class="mobileNav__item"><a class="mobileNav__link" href="#">Aktualności</a></li>
                                    <li class="mobileNav__item"><a class="mobileNav__link" href="#">Kontakt</a></li>
                                </ul>
                            </nav>
                            <div class="mobileNav__languages">
                                <div class="languagesSwitcher">
                                    <select class="languagesSwitcher__select">
                                        <option class="languagesSwitcher__option" value="">Change language</option>
                                        <option class="languagesSwitcher__option" value="http://localhost:9000/build/main.html?lang=pl">PL</option>
                                        <option class="languagesSwitcher__option" value="http://localhost:9000/build/main.html?lang=en">EN</option>
                                        <option class="languagesSwitcher__option" value="http://localhost:9000/build/main.html?lang=de">DE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MOBILE NAV-->
                </div>
            </div>
        </div>
    </header>
</div>
<div id="blurredOverlay"></div>