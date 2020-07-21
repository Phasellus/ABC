
<?php get_header(); ?>
<div class="headerPosition">
    <header class="header">
        <div class="header__container">
            <div class="header__box">
                <div class="header__item -logo"><img class="logo" src="<?php echo TEMP_URI;?> /assets/images/logo/logo.svg"></div>
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
                        <div class="mobileNav__menuIconBox"><img class="mobileNav__menuIcon" src="<?php echo TEMP_URI;?> /assets/images/mobileMenu/menuMobile.png">
                            <div class="mobileNav__menuIconText">menu</div>
                        </div>
                        <div class="mobileNav__container">
                            <div class="mobileNav__buttonBox"><img class="mobileNav__closeButton" src="<?php echo TEMP_URI;?> /assets/images/mobileMenu/closeMenuMobile.png"></div>
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
<div class="bannerMain withBannerBox">
    <div class="bannerMain__image" style="background-image:url('<?php echo TEMP_URI;?> /assets/images/fota_glowna.png');"></div>
    <div class="bannerMain__content">
        <div class="bannerMain__leftBox">
            <div class="bannerMain__slogan textWhite">Personnel Service <br><span>Lider zatrudnienia i rozwiązań HR</span></div>
        </div>
        <div class="bannerMain__rightBox -hiddenOnMobiles">
            <div class="bannerFormBox">
                <div class="bannerFormBox__content">
                    <div class="bannerFormBox__upperText">
                        <p><span class="-redText">Twój&nbsp</span>przyszły&nbsp;
                            <span class="-redText">pracownik jest tutaj.&nbsp;</span>
                            Zbuduj z nami swój zespół.&nbsp;
                            <span class="-redText"> Powiedz nam kogo szukasz.</span>
                        </p>
                    </div>
                    <form action="<?php echo admin_url('admin-ajax.php?action=show_json')?>" method="post" class="new_form_js">
                        <div class="bannerFormBox__inputSection">
                            <div class="bannerFormBox__item">
                                <input class="bannerFormBox__boxInput" placeholder="Wpisz Emial" type="email" name="user_email">
                                <div class="bannerFormBox__info firstStepErrors"><span>Pole wymagane</span></div>
                            </div>
                            <div class="bannerFormBox__item">
                                <input class="bannerFormBox__boxInput" placeholder="Podaj wiadomosc" type="text" name="description">
                                <div class="bannerFormBox__info firstStepErrors"><span>Pole wymagane</span></div>
                            </div>
                            <div class="bannerFormBox__item">
                                <select id="select" name="selectTrade">
                                    <option>Wybierz branze</option>
                                    <option>Przemysl</option>
                                    <option>Budownictwo</option>
                                    <option>Rolnictwo</option>
                                    <option>Transport</option>
                                    <option>RTV/AGD</option>
                                    <option>Handel</option>
                                    <option>IT</option>
                                    <option>Administracja</option>
                                    <option>Ochrona zdrowia i opieka spoleczna</option>
                                    <option>Turystyka</option>
                                    <option>Logistyka</option>
                                    <option>HoReCa</option>
                                    <option>Administracja</option>
                                    <option>Finanse i ubezpieczenia</option>
                                    <option>Inne</option>
                                </select>
                                <div class="bannerFormBox__info firstStepErrors"><span>Pole wymagane</span></div>
                            </div>
                        </div>
                        <div class="bannerFormBox__smallText">Wybierz liczbę poszukiwanych pracowników</div>
                        <div class="bannerFormBox__sliderBox">
                            <div class="bannerFormBox__sliderElementNarrow -imagePeople"></div>
                            <div class="bannerFormBox__sliderElementWide">
                                <input class="bannerFormBox__slider" type="range" min="1" max="1500" name="employeeCount" id="slider">
                            </div>
                            <div class="bannerFormBox__sliderElementNarrow -sliderText">
                                <h1 id="employeesCount">750</h1>
                            </div>
                        </div>
                        <button class="bannerFormBox__buttonRed" type="submit">szukaj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="positionRelative responsiveMargins"></div>
<div class="bannerMain__formBoxContainer -hiddenOnDesktops">
    <div class="bannerMain__rightBox">
        <div class="bannerFormBox">
            <div class="bannerFormBox__content">
                <div class="bannerFormBox__upperText">
                    <p><span class="-redText">Twój&nbsp</span>przyszły&nbsp;
                        <span class="-redText">pracownik jest tutaj.&nbsp;</span>
                        Zbuduj z nami swój zespół.&nbsp;
                        <span class="-redText"> Powiedz nam kogo szukasz.</span>
                    </p>
                </div>
                <form action="#" name="selectSpecializationMobile" id="selectSpecializationMobile">
                    <div class="bannerFormBox__inputSection">
                        <div class="bannerFormBox__item">
                            <input class="bannerFormBox__boxInput" placeholder="Wpisz specjalizację" value="" name="specialization">
                            <div class="bannerFormBox__info firstStepErrors"><span>Pole wymagane</span></div>
                        </div>
                        <div class="bannerFormBox__item">
                            <select id="select" name="selectTrade">
                                <option default>Wybierz branżę</option>
                                <option value="1">Przemysł</option>
                                <option value="2">Budownictwo</option>
                                <option value="3">Rolnictwo</option>
                                <option value="4">Transport</option>
                                <option value="5">RTV/AGD</option>
                                <option value="6">Handel</option>
                                <option value="7">IT</option>
                                <option value="8">Administracja</option>
                                <option value="9">Ochrona zdrowia i opieka społeczna</option>
                                <option value="10">Turystyka</option>
                                <option value="11">Logistyka</option>
                                <option value="12">HoReCa</option>
                                <option value="13">Administracja</option>
                                <option value="14">Finanse i ubezpieczenia</option>
                                <option value="15">Inne</option>
                            </select>
                            <div class="bannerFormBox__info firstStepErrors"><span>Pole wymagane</span></div>
                        </div>
                    </div>
                    <div class="bannerFormBox__smallText">Wybierz liczbę poszukiwanych pracowników</div>
                    <div class="bannerFormBox__sliderBox">
                        <div class="bannerFormBox__sliderElementNarrow -imagePeople"></div>
                        <div class="bannerFormBox__sliderElementWide">
                            <input class="bannerFormBox__slider" type="range" min="1" max="1500" name="employeeCount" id="sliderMobile">
                        </div>
                        <div class="bannerFormBox__sliderElementNarrow -sliderText">
                            <h1 id="employeesCountMobile">750</h1>
                        </div>
                    </div>
                    <button class="bannerFormBox__buttonRed">szukaj</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="positionRelative -noMarginTop">
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo TEMP_URI;?> /assets/images/main/suitcase.jpg"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader">Zobacz, co możemy <br> dla Ciebie zrobić <br> <br></h1>
                <div class="contentPanel__text">Jeśli szukasz fachowców do rozwijania swojej firmy, my pomożemy Ci znaleźć najlepszych specjalistów i najbardziej doświadczonych kandydatów z różnych branż.</div><br>
                <button class="-addMarginTop contentPanel__buttonRed">więcej</button><img class="contentPanel__tinyPeopleImage" src="<?php echo TEMP_URI;?> /assets/images/main/tiny_people_suitcase.jpg">
            </div>
        </div>
    </div>
    <!-- 1 Variant-->
    <div class="iconsPanel bgDarkGray textWhite">
        <div class="iconsPanel__content">
            <div class="iconsPanel__servicesPanel">
                <h1 class="iconsPanel__headerText">Zakres usług:</h1>
                <div class="iconsPanel__listContainer">
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/servicesIcons/part_time_job.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute">Praca tymczasowa</a></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/servicesIcons/outsourcing_process.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute">Outsourcing procesów</a></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/servicesIcons/outsourcing_employees.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute">Outsourcing pracowniczy</a></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/servicesIcons/outsourcing_it.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute">Outsourcing IT</a></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/servicesIcons/hr_consulting.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute">Doradztwo HR</a></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/servicesIcons/outplacement.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute">Outplacement</a></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/servicesIcons/specialists_recruitment.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><a class="iconsPanel__traitTextAbsolute">Rekrutacje specjalistów i kadry menadżerskiej</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content -directionRowReverse">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo TEMP_URI;?>  /assets/images/main/people.jpg"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader">Dla nas liczą się ludzie! <br> <br></h1>
                <div class="contentPanel__text">Personnel Service w liczbach.</div><img class="contentPanel__tinyPeopleImage" src="<?php echo TEMP_URI;?> /assets/images/main/tinyPeople-main-people.jpg">
            </div>
        </div>
    </div>
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo TEMP_URI;?> /assets/images/main/superman.jpg"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader">Poznaj branże, <br> dla których pracujemy <br> <br></h1>
                <div class="contentPanel__text">Sprawnie zrekrutujemy dla Ciebie kompetentnych pracowników z branży zgodnej z profilem Twojej firmy.</div><img class="contentPanel__tinyPeopleImage" src="<?php echo TEMP_URI;?>  /assets/images/main/tinyPeople-main-trades.jpg">
            </div>
        </div>
    </div>
    <!-- 1 Variant-->
    <div class="iconsPanel bgDarkGray textWhite">
        <div class="iconsPanel__content">
            <div class="iconsPanel__servicesPanel">
                <h1 class="iconsPanel__headerText">Znajdź swoją branżę</h1>
                <div class="iconsPanel__listContainer -decreaseMarginLeft">
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/production.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">Produkcja</span></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/gastronomy.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">Branża spożywcza</span></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/ecommerce.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">Outsourcing pracowniczy</span></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/automotive.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">Automotive</span></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/rtv.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">RTV/AGD</span></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/more.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">...i wiele innych</span></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/transport.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">Transport i logistyka</span></div>
                    </div>
                    <div class="iconsPanel__servicesBox">
                        <div class="iconsPanel__servicesIcon" style="background-image: url(&quot;<?php echo TEMP_URI;?> /assets/images/craftsIcons/bpo.svg&quot;);"></div>
                        <div class="iconsPanel__labelBox"><span class="iconsPanel__traitTextAbsolute -normalFontWeight">BPO/SSC/ITO</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contentPanel bgWhite textDark">
        <div class="contentPanel__content -directionRowReverse">
            <div class="contentPanel__leftBox"><img class="contentPanel__photo" src="<?php echo TEMP_URI;?> /assets/images/main/world.jpg"></div>
            <div class="contentPanel__rightBox">
                <h1 class="contentPanel__textHeader">Posiadamy oddziały na kluczowych rynkach <br> <br></h1>
                <div class="contentPanel__text">Oddziały w strategicznych miejscach na świecie pozwalają nam sprawnie przeprowadzać proces rekrutacji. Dzięki temu, naszym klientom skracamy czas oczekiwania na pracownika, a kandydaci mogą liczyć na oferty pracy od firm działających na wielu rynkach.</div><img class="contentPanel__tinyPeopleImage" src="<?php echo TEMP_URI;?> /assets/images/main/tiny_people_world.jpg">
            </div>
        </div>
    </div>
    <div class="chairMan">
        <div class="chairMan__content">
            <div class="chairMan__leftBox"><img class="chairMan__photo" src="<?php echo TEMP_URI;?> /assets/chairman/chairman.png"></div>
            <div class="chairMan__rightBox"><img class="chairMan__logo" src="<?php echo TEMP_URI;?> /assets/chairman/logo.png">
                <div class="chairMan__text">Krzysztof Inglot jest Prezesem Personnel Service S.A. Menadżer HR z 20-letnim doświadczeniem zdobytym m.in. w Work Service S.A. Prowadzi projekty restrukturyzacyjne w obszarze zasobów ludzkich dla kluczowych firm w Polsce. Autor wielu komentarzy i wypowiedzi eksperckich w mediach, dotyczących bieżącej sytuacji na rynku pracy. <br/> <br/> W 2013 roku Krzysztof Inglot nabył uprawnienia i kompetencje do pełnienia funkcji Mediatora i Arbitra, a w 2015 roku dołączył do zespołu ekspertów Centrum Badań i Analiz Pracodawców RP.</div>
            </div>
        </div>
        <div class="chairMan__name">Krzysztof Inglot</div>
    </div>
    <div class="recruitmentRequirements bgLightGray textDark shadow">
        <div class="recruitmentRequirements__content">
            <div class="recruitmentRequirements__wrapper">
                <div class="recruitmentRequirements__main">
                    <div class="recruitmentRequirements__title">
                        <p>Kogo rekrutujemy?</p>
                    </div>
                    <div class="recruitmentRequirements__whos">
                        <!-- recruitmentReqItem-->
                        <div class="recruitmentReqItem"><img class="recruitmentReqItem__image" src="<?php echo TEMP_URI;?> /assets/images/recruitmentRequirements/manWithHardHat.svg" alt="logo">
                            <p>Specjalistów z Polski</p>
                        </div>
                        <!-- recruitmentReqItem-->
                        <div class="recruitmentReqItem"><img class="recruitmentReqItem__image" src="<?php echo TEMP_URI;?> /assets/images/recruitmentRequirements/manWithHardHat.svg" alt="logo">
                            <p>Specjalistów z Polski</p>
                        </div>
                        <!-- recruitmentReqItem-->
                        <div class="recruitmentReqItem"><img class="recruitmentReqItem__image" src="<?php echo TEMP_URI;?> /assets/images/recruitmentRequirements/manWithHardHat.svg" alt="logo">
                            <p>Specjalistów z Polski</p>
                        </div>
                        <!-- recruitmentReqItem-->
                        <div class="recruitmentReqItem"><img class="recruitmentReqItem__image" src="<?php echo TEMP_URI;?> /assets/images/recruitmentRequirements/manWithHardHat.svg" alt="logo">
                            <p>Specjalistów z Polski</p>
                        </div>
                        <!-- recruitmentReqItem-->
                        <div class="recruitmentReqItem"><img class="recruitmentReqItem__image" src="<?php echo TEMP_URI;?> /assets/images/recruitmentRequirements/manWithHardHat.svg" alt="logo">
                            <p>Specjalistów z Polski</p>
                        </div>
                        <!-- recruitmentReqItem-->
                        <div class="recruitmentReqItem"><img class="recruitmentReqItem__image" src="<?php echo TEMP_URI;?> /assets/images/recruitmentRequirements/manWithHardHat.svg" alt="logo">
                            <p>Specjalistów z Polski</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pleaseContact bgDarkGray shadow textWhite">
        <div class="pleaseContact__content">
            <div class="pleaseContact__wrapper">
                <div class="pleaseContact__main">
                    <div class="pleaseContact__title"><span>Zapraszamy<br>do kontaktu</span></div>
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
                                <div class="pleaseContact__separated">
                                    <div class="pleaseContact__item">
                                        <div class="pleaseContact__icon"><img src="<?php echo TEMP_URI;?> /assets/images/pin.svg" alt="pin"></div><span>Dział sprzedaży</span>
                                    </div>
                                    <div class="pleaseContact__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrow.png"></div>
                                </div>
                                <div class="pleaseContact__separated">
                                    <div class="pleaseContact__item">
                                        <div class="pleaseContact__icon"><img src="<?php echo TEMP_URI;?> /assets/images/pin.svg" alt="pin"></div><span>Dział rekrutacji</span>
                                    </div>
                                    <div class="pleaseContact__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrow.png"></div>
                                </div>
                                <div class="pleaseContact__separated">
                                    <div class="pleaseContact__item">
                                        <div class="pleaseContact__icon"><img src="<?php echo TEMP_URI;?> /assets/images/pin.svg" alt="pin"></div><span>Dział rekrutacji specjalistów i kadry zarządzającej z Polski</span>
                                    </div>
                                    <div class="pleaseContact__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrow.png"></div>
                                </div>
                                <div class="pleaseContact__separated">
                                    <div class="pleaseContact__item">
                                        <div class="pleaseContact__icon"><img src="<?php echo TEMP_URI;?> /assets/images/pin.svg" alt="pin"></div><span>Biuro i administracja</span>
                                    </div>
                                    <div class="pleaseContact__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrow.png"></div>
                                </div>
                            </div>
                        </div>
                        <div class="pleaseContact__contactInfo">
                            <div class="pleaseContact__contactWrapper">
                                <div class="pleaseContact__worker">
                                    <div class="pleaseContact__avatar"><img src="<?php echo TEMP_URI;?> /assets/images/avatar.png" alt="avatar"></div>
                                    <div class="pleaseContact__workerInfo"><span>Kinga Marczak</span><span>Nazwa stanowiska</span></div>
                                </div>
                                <div class="pleaseContact__phone">
                                    <div class="pleaseContact__phone__icon"><img src="<?php echo TEMP_URI;?> /assets/images/telephone.svg" alt="avatar"></div>
                                    <div class="pleaseContact__phoneNumber"><span>+48 71 757 22 08</span></div>
                                </div>
                                <div class="pleaseContact__email">
                                    <div class="pleaseContact__email__icon"><img src="<?php echo TEMP_URI;?> /assets/images/airplane.svg" alt="avatar"></div>
                                    <div class="pleaseContact__emailAddress"><span>biuro@personnelservice.pl</span></div>
                                </div>
                            </div>
                            <div class="pleaseContact__contactWrapper">
                                <div class="pleaseContact__worker">
                                    <div class="pleaseContact__avatar"><img src="<?php echo TEMP_URI;?> /assets/images/avatar.png" alt="avatar"></div>
                                    <div class="pleaseContact__workerInfo"><span>Jan Kolwaski</span><span>Nazwa stanowiska</span></div>
                                </div>
                                <div class="pleaseContact__phone">
                                    <div class="pleaseContact__phone__icon"><img src="<?php echo TEMP_URI;?> /assets/images/telephone.svg" alt="avatar"></div>
                                    <div class="pleaseContact__phoneNumber"><span>+48 43 234 23 43</span></div>
                                </div>
                                <div class="pleaseContact__email">
                                    <div class="pleaseContact__email__icon"><img src="<?php echo TEMP_URI;?> /assets/images/airplane.svg" alt="avatar"></div>
                                    <div class="pleaseContact__emailAddress"><span>asdasdadsasdasdasd@personnelservice.pl</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contactAgency bgRed shadow textWhite">
        <div class="contactAgency__content">
            <div class="contactAgency__wrapper">
                <div class="contactAgency__main">
                    <div class="contactAgency__map">
                        <div class="contactAgency__desktopMap">
                            <!-- Generator: Adobe Illustrator 16.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                            <svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="100 120 1300 1200" enable-background="new 0 0 1500 1500" xml:space="preserve">
<g>
    <defs>
        <rect id="SVGID_1_" width="1500" height="1500"/>
    </defs>
    <clipPath id="SVGID_2_">
        <use xlink:href="#SVGID_1_"  overflow="visible"/>
    </clipPath>
    <g clip-path="url(#SVGID_2_)" id="map_markers">
        <defs>
            <rect id="SVGID_3_" width="1500" height="1500"/>
        </defs>
        <clipPath id="SVGID_4_">
            <use xlink:href="#SVGID_3_"  overflow="visible"/>
        </clipPath>
        <g opacity="0.5" clip-path="url(#SVGID_4_)">
            <g>
                <defs>
                    <rect id="SVGID_5_" x="82.515" y="170.54" width="1337.075" height="1116.145"/>
                </defs>
                <clipPath id="SVGID_6_">
                    <use xlink:href="#SVGID_5_"  overflow="visible"/>
                </clipPath>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,360.404c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C821.509,354.639,818.928,357.22,818.928,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,360.404c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C803.099,354.639,800.517,357.22,800.517,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,360.404c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,354.639,782.107,357.22,782.107,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,360.404c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,354.639,763.696,357.22,763.696,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,360.404c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,354.639,708.465,357.22,708.465,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,360.404c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,354.639,690.055,357.22,690.055,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,360.404c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,354.639,671.645,357.22,671.645,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,360.404c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,354.639,653.235,357.22,653.235,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,360.404c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,354.639,634.825,357.22,634.825,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,360.404c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,354.639,616.414,357.22,616.414,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,360.404c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.765-5.765-5.765C600.585,354.639,598.004,357.22,598.004,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,360.404c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S579.593,357.22,579.593,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,360.404c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C213.97,354.639,211.388,357.22,211.388,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,360.404c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C195.56,354.639,192.978,357.22,192.978,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,360.404c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C177.149,354.639,174.567,357.22,174.567,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,360.404c0,3.184,2.581,5.765,5.766,5.765
					c3.182,0,5.763-2.581,5.763-5.765s-2.581-5.765-5.763-5.765C158.738,354.639,156.157,357.22,156.157,360.404"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,378.814c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C821.509,373.05,818.928,375.63,818.928,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,378.814c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C803.099,373.05,800.517,375.63,800.517,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,378.814c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,373.05,782.107,375.63,782.107,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,378.814c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,373.05,763.696,375.63,763.696,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,378.814c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,373.05,745.286,375.63,745.286,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,378.814c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,373.05,708.465,375.63,708.465,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,378.814c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,373.05,690.055,375.63,690.055,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,378.814c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,373.05,671.645,375.63,671.645,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,378.814c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,373.05,653.235,375.63,653.235,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,378.814c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,373.05,634.825,375.63,634.825,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,378.814c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,373.05,616.414,375.63,616.414,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,378.814c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.765-5.765-5.765C600.585,373.05,598.004,375.63,598.004,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,378.814c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S579.593,375.63,579.593,378.814"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,397.225c0,3.184,2.581,5.765,5.765,5.765s5.766-2.581,5.766-5.765
					s-2.582-5.765-5.766-5.765S837.338,394.041,837.338,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,397.225c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C821.509,391.46,818.928,394.041,818.928,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,397.225c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C803.099,391.46,800.517,394.041,800.517,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,397.225c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,391.46,782.107,394.041,782.107,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,397.225c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,391.46,763.696,394.041,763.696,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,397.225c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,391.46,745.286,394.041,745.286,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,397.225c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,391.46,708.465,394.041,708.465,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,397.225c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,391.46,690.055,394.041,690.055,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,397.225c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,391.46,671.645,394.041,671.645,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,397.225c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,391.46,653.235,394.041,653.235,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,397.225c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,391.46,634.825,394.041,634.825,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,397.225c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,391.46,616.414,394.041,616.414,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,397.225c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.765-5.765-5.765C600.585,391.46,598.004,394.041,598.004,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,397.225c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S579.593,394.041,579.593,397.225"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,415.635c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C858.329,409.87,855.748,412.451,855.748,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,415.635c0,3.184,2.581,5.765,5.765,5.765s5.766-2.581,5.766-5.765
					s-2.582-5.765-5.766-5.765S837.338,412.451,837.338,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,415.635c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C821.509,409.87,818.928,412.451,818.928,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,415.635c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C803.099,409.87,800.517,412.451,800.517,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,415.635c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,409.87,782.107,412.451,782.107,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,415.635c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,409.87,763.696,412.451,763.696,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,415.635c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,409.87,745.286,412.451,745.286,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,415.635c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,409.87,690.055,412.451,690.055,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,415.635c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,409.87,671.645,412.451,671.645,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,415.635c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,409.87,653.235,412.451,653.235,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,415.635c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,409.87,634.825,412.451,634.825,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,415.635c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,409.87,616.414,412.451,616.414,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,415.635c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.765-5.765-5.765C600.585,409.87,598.004,412.451,598.004,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,415.635c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S579.593,412.451,579.593,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,415.635c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765s-2.58-5.765-5.763-5.765C563.766,409.87,561.184,412.451,561.184,415.635"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,434.045c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C858.329,428.279,855.748,430.861,855.748,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,434.045c0,3.184,2.581,5.765,5.765,5.765s5.766-2.581,5.766-5.765
					s-2.582-5.766-5.766-5.766S837.338,430.861,837.338,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,434.045c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C821.509,428.279,818.928,430.861,818.928,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,434.045c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C803.099,428.279,800.517,430.861,800.517,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,434.045c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C784.688,428.279,782.107,430.861,782.107,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,434.045c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.766-5.764-5.766C766.278,428.279,763.696,430.861,763.696,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,434.045c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C747.869,428.279,745.286,430.861,745.286,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,434.045c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.766-5.763-5.766S726.876,430.861,726.876,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,434.045c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C674.227,428.279,671.645,430.861,671.645,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,434.045c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C655.817,428.279,653.235,430.861,653.235,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,434.045c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C637.406,428.279,634.825,430.861,634.825,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,434.045c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C618.996,428.279,616.414,430.861,616.414,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,434.045c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.766-5.765-5.766C600.585,428.279,598.004,430.861,598.004,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,434.045c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.766-5.765-5.766S579.593,430.861,579.593,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,434.045c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765s-2.58-5.766-5.763-5.766C563.766,428.279,561.184,430.861,561.184,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,434.045c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C545.354,428.279,542.773,430.861,542.773,434.045"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,452.456c0,3.184,2.581,5.765,5.765,5.765s5.766-2.581,5.766-5.765
					s-2.582-5.765-5.766-5.765S837.338,449.271,837.338,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,452.456c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C821.509,446.69,818.928,449.271,818.928,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,452.456c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C803.099,446.69,800.517,449.271,800.517,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,452.456c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,446.69,782.107,449.271,782.107,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,452.456c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,446.69,763.696,449.271,763.696,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,452.456c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,446.69,745.286,449.271,745.286,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,452.456c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,449.271,726.876,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,452.456c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,446.69,671.645,449.271,671.645,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,452.456c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,446.69,653.235,449.271,653.235,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,452.456c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,446.69,634.825,449.271,634.825,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,452.456c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,446.69,616.414,449.271,616.414,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,452.456c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.765-5.765-5.765C600.585,446.69,598.004,449.271,598.004,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,452.456c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S579.593,449.271,579.593,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,452.456c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765s-2.58-5.765-5.763-5.765C563.766,446.69,561.184,449.271,561.184,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,452.456c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C545.354,446.69,542.773,449.271,542.773,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,452.456c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.765-5.764-5.765S524.362,449.271,524.362,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,452.456c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C306.022,446.69,303.439,449.271,303.439,452.456"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,470.866c0,3.183,2.581,5.765,5.765,5.765s5.766-2.582,5.766-5.765
					c0-3.185-2.582-5.765-5.766-5.765S837.338,467.681,837.338,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,470.866c0,3.183,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.765-5.764-5.765C821.509,465.102,818.928,467.681,818.928,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,470.866c0,3.183,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.582,5.765-5.765c0-3.185-2.58-5.765-5.765-5.765C803.099,465.102,800.517,467.681,800.517,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,470.866c0,3.183,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.582,5.764-5.765c0-3.185-2.581-5.765-5.764-5.765C784.688,465.102,782.107,467.681,782.107,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,470.866c0,3.183,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.582,5.764-5.765c0-3.185-2.579-5.765-5.764-5.765C766.278,465.102,763.696,467.681,763.696,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,470.866c0,3.183,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.185-2.581-5.765-5.765-5.765C747.869,465.102,745.286,467.681,745.286,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,470.866c0,3.183,2.581,5.765,5.765,5.765s5.763-2.582,5.763-5.765
					c0-3.185-2.579-5.765-5.763-5.765S726.876,467.681,726.876,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,470.866c0,3.183,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.765-5.764-5.765C655.817,465.102,653.235,467.681,653.235,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,470.866c0,3.183,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.185-2.581-5.765-5.765-5.765C637.406,465.102,634.825,467.681,634.825,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,470.866c0,3.183,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.582,5.765-5.765c0-3.185-2.58-5.765-5.765-5.765C618.996,465.102,616.414,467.681,616.414,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,470.866c0,3.183,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.582,5.765-5.765c0-3.185-2.582-5.765-5.765-5.765C600.585,465.102,598.004,467.681,598.004,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,470.866c0,3.183,2.582,5.765,5.766,5.765s5.765-2.582,5.765-5.765
					c0-3.185-2.581-5.765-5.765-5.765S579.593,467.681,579.593,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,470.866c0,3.183,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.582,5.763-5.765c0-3.185-2.58-5.765-5.763-5.765C563.766,465.102,561.184,467.681,561.184,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,470.866c0,3.183,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.765-5.764-5.765C545.354,465.102,542.773,467.681,542.773,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,470.866c0,3.183,2.582,5.765,5.766,5.765s5.764-2.582,5.764-5.765
					c0-3.185-2.58-5.765-5.764-5.765S524.362,467.681,524.362,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,470.866c0,3.183,2.581,5.765,5.765,5.765
					c3.183,0,5.764-2.582,5.764-5.765c0-3.185-2.581-5.765-5.764-5.765C508.534,465.102,505.953,467.681,505.953,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,470.866c0,3.183,2.583,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.765-5.764-5.765C306.022,465.102,303.439,467.681,303.439,470.866"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,489.276c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C821.509,483.511,818.928,486.092,818.928,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,489.276c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C803.099,483.511,800.517,486.092,800.517,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,489.276c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,483.511,782.107,486.092,782.107,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,489.276c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,483.511,763.696,486.092,763.696,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,489.276c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,483.511,745.286,486.092,745.286,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,489.276c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,486.092,726.876,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,489.276c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,483.511,653.235,486.092,653.235,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,489.276c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,483.511,634.825,486.092,634.825,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,489.276c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,483.511,616.414,486.092,616.414,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,489.276c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.765-5.765-5.765C600.585,483.511,598.004,486.092,598.004,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,489.276c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S579.593,486.092,579.593,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,489.276c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765s-2.58-5.765-5.763-5.765C563.766,483.511,561.184,486.092,561.184,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,489.276c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C545.354,483.511,542.773,486.092,542.773,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,489.276c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.765-5.764-5.765S524.362,486.092,524.362,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,489.276c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C508.534,483.511,505.953,486.092,505.953,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,489.276c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C490.125,483.511,487.542,486.092,487.542,489.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,507.686c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.765-5.765-5.765C803.099,501.921,800.517,504.502,800.517,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,507.686c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.765-5.764-5.765C784.688,501.921,782.107,504.502,782.107,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,507.686c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766s-2.579-5.765-5.764-5.765C766.278,501.921,763.696,504.502,763.696,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,507.686c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C747.869,501.921,745.286,504.502,745.286,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,507.686c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.765-5.764-5.765C655.817,501.921,653.235,504.502,653.235,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,507.686c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C637.406,501.921,634.825,504.502,634.825,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,507.686c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.765-5.765-5.765C618.996,501.921,616.414,504.502,616.414,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,507.686c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.765-5.765-5.765C600.585,501.921,598.004,504.502,598.004,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,507.686c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					s-2.581-5.765-5.765-5.765S579.593,504.502,579.593,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,507.686c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766s-2.58-5.765-5.763-5.765C563.766,501.921,561.184,504.502,561.184,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,507.686c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.765-5.764-5.765C545.354,501.921,542.773,504.502,542.773,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,507.686c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.765-5.764-5.765S524.362,504.502,524.362,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,507.686c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.765-5.764-5.765C508.534,501.921,505.953,504.502,505.953,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,507.686c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C490.125,501.921,487.542,504.502,487.542,507.686"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,526.097c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C821.509,520.332,818.928,522.913,818.928,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,526.097c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,520.332,763.696,522.913,763.696,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,526.097c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,520.332,745.286,522.913,745.286,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,526.097c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,520.332,690.055,522.913,690.055,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,526.097c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,520.332,671.645,522.913,671.645,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,526.097c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,520.332,653.235,522.913,653.235,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,526.097c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,520.332,634.825,522.913,634.825,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,526.097c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,520.332,616.414,522.913,616.414,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,526.097c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.765-5.765-5.765C600.585,520.332,598.004,522.913,598.004,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,526.097c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S579.593,522.913,579.593,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,526.097c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765s-2.58-5.765-5.763-5.765C563.766,520.332,561.184,522.913,561.184,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,526.097c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C545.354,520.332,542.773,522.913,542.773,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,526.097c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.765-5.764-5.765S524.362,522.913,524.362,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,526.097c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C508.534,520.332,505.953,522.913,505.953,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,526.097c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C490.125,520.332,487.542,522.913,487.542,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,526.097c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C379.662,520.332,377.08,522.913,377.08,526.097"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,544.507c0,3.183,2.581,5.766,5.765,5.766s5.766-2.583,5.766-5.766
					c0-3.185-2.582-5.766-5.766-5.766S837.338,541.322,837.338,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,544.507c0,3.183,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.583,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C821.509,538.741,818.928,541.322,818.928,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,544.507c0,3.183,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.583,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C803.099,538.741,800.517,541.322,800.517,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,544.507c0,3.183,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.583,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C784.688,538.741,782.107,541.322,782.107,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,544.507c0,3.183,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.583,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C692.638,538.741,690.055,541.322,690.055,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,544.507c0,3.183,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.583,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C674.227,538.741,671.645,541.322,671.645,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,544.507c0,3.183,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.583,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C655.817,538.741,653.235,541.322,653.235,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,544.507c0,3.183,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.583,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C637.406,538.741,634.825,541.322,634.825,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,544.507c0,3.183,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.583,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C618.996,538.741,616.414,541.322,616.414,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,544.507c0,3.183,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.583,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C600.585,538.741,598.004,541.322,598.004,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,544.507c0,3.183,2.582,5.766,5.766,5.766s5.765-2.583,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S579.593,541.322,579.593,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,544.507c0,3.183,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.583,5.763-5.766c0-3.185-2.58-5.766-5.763-5.766C563.766,538.741,561.184,541.322,561.184,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,544.507c0,3.183,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.583,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C545.354,538.741,542.773,541.322,542.773,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,544.507c0,3.183,2.582,5.766,5.766,5.766s5.764-2.583,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S524.362,541.322,524.362,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,544.507c0,3.183,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.583,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C508.534,538.741,505.953,541.322,505.953,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,544.507c0,3.183,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.583,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C490.125,538.741,487.542,541.322,487.542,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,544.507c0,3.183,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.583,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C379.662,538.741,377.08,541.322,377.08,544.507"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,562.917c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					c0-3.183-2.582-5.765-5.766-5.765S837.338,559.734,837.338,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,562.917c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C821.509,557.152,818.928,559.734,818.928,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,562.917c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C803.099,557.152,800.517,559.734,800.517,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,562.917c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C784.688,557.152,782.107,559.734,782.107,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,562.917c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C766.278,557.152,763.696,559.734,763.696,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,562.917c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C747.869,557.152,745.286,559.734,745.286,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,562.917c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C692.638,557.152,690.055,559.734,690.055,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,562.917c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C674.227,557.152,671.645,559.734,671.645,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,562.917c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C655.817,557.152,653.235,559.734,653.235,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,562.917c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C637.406,557.152,634.825,559.734,634.825,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,562.917c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C618.996,557.152,616.414,559.734,616.414,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,562.917c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.183-2.582-5.765-5.765-5.765C600.585,557.152,598.004,559.734,598.004,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,562.917c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S579.593,559.734,579.593,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,562.917c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.183-2.58-5.765-5.763-5.765C563.766,557.152,561.184,559.734,561.184,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,562.917c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C545.354,557.152,542.773,559.734,542.773,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,562.917c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.183-2.58-5.765-5.764-5.765S524.362,559.734,524.362,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,562.917c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C508.534,557.152,505.953,559.734,505.953,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,562.917c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C490.125,557.152,487.542,559.734,487.542,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,562.917c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C361.251,557.152,358.67,559.734,358.67,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,562.917c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C342.842,557.152,340.261,559.734,340.261,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,562.917c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C324.431,557.152,321.85,559.734,321.85,562.917"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,581.328c0,3.184,2.581,5.765,5.765,5.765s5.766-2.581,5.766-5.765
					s-2.582-5.766-5.766-5.766S837.338,578.144,837.338,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,581.328c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C821.509,575.562,818.928,578.144,818.928,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,581.328c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C803.099,575.562,800.517,578.144,800.517,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,581.328c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C784.688,575.562,782.107,578.144,782.107,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,581.328c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C747.869,575.562,745.286,578.144,745.286,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,581.328c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C674.227,575.562,671.645,578.144,671.645,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,581.328c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C655.817,575.562,653.235,578.144,653.235,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,581.328c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C637.406,575.562,634.825,578.144,634.825,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,581.328c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C618.996,575.562,616.414,578.144,616.414,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,581.328c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.766-5.765-5.766C600.585,575.562,598.004,578.144,598.004,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,581.328c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.766-5.765-5.766S579.593,578.144,579.593,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,581.328c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C545.354,575.562,542.773,578.144,542.773,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,581.328c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.766-5.764-5.766S524.362,578.144,524.362,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,581.328c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C508.534,575.562,505.953,578.144,505.953,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,581.328c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C490.125,575.562,487.542,578.144,487.542,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,581.328c0,3.184,2.581,5.765,5.764,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.766-5.764-5.766C342.842,575.562,340.261,578.144,340.261,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,581.328c0,3.184,2.581,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C324.431,575.562,321.85,578.144,321.85,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,581.328c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C306.022,575.562,303.439,578.144,303.439,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,581.328c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C287.611,575.562,285.029,578.144,285.029,581.328"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,599.738c0,3.183,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.184-2.58-5.765-5.764-5.765C858.329,593.973,855.748,596.554,855.748,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,599.738c0,3.183,2.581,5.765,5.765,5.765s5.766-2.582,5.766-5.765
					c0-3.184-2.582-5.765-5.766-5.765S837.338,596.554,837.338,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,599.738c0,3.183,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.184-2.58-5.765-5.764-5.765C821.509,593.973,818.928,596.554,818.928,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,599.738c0,3.183,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.582,5.765-5.765c0-3.184-2.58-5.765-5.765-5.765C803.099,593.973,800.517,596.554,800.517,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,599.738c0,3.183,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.184-2.58-5.765-5.764-5.765C655.817,593.973,653.235,596.554,653.235,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,599.738c0,3.183,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.184-2.581-5.765-5.765-5.765C637.406,593.973,634.825,596.554,634.825,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,599.738c0,3.183,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.582,5.765-5.765c0-3.184-2.58-5.765-5.765-5.765C618.996,593.973,616.414,596.554,616.414,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,599.738c0,3.183,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.582,5.765-5.765c0-3.184-2.582-5.765-5.765-5.765C600.585,593.973,598.004,596.554,598.004,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,599.738c0,3.183,2.582,5.765,5.766,5.765s5.765-2.582,5.765-5.765
					c0-3.184-2.581-5.765-5.765-5.765S579.593,596.554,579.593,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,599.738c0,3.183,2.582,5.765,5.766,5.765s5.764-2.582,5.764-5.765
					c0-3.184-2.58-5.765-5.764-5.765S524.362,596.554,524.362,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,599.738c0,3.183,2.581,5.765,5.765,5.765
					c3.183,0,5.764-2.582,5.764-5.765c0-3.184-2.581-5.765-5.764-5.765C508.534,593.973,505.953,596.554,505.953,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,599.738c0,3.183,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.184-2.581-5.765-5.765-5.765C490.125,593.973,487.542,596.554,487.542,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,599.738c0,3.183,2.581,5.765,5.765,5.765
					c3.185,0,5.765-2.582,5.765-5.765c0-3.184-2.58-5.765-5.765-5.765C361.251,593.973,358.67,596.554,358.67,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,599.738c0,3.183,2.581,5.765,5.764,5.765
					c3.185,0,5.764-2.582,5.764-5.765c0-3.184-2.579-5.765-5.764-5.765C342.842,593.973,340.261,596.554,340.261,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,599.738c0,3.183,2.581,5.765,5.766,5.765
					c3.183,0,5.764-2.582,5.764-5.765c0-3.184-2.581-5.765-5.764-5.765C324.431,593.973,321.85,596.554,321.85,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,599.738c0,3.183,2.583,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.184-2.58-5.765-5.764-5.765C306.022,593.973,303.439,596.554,303.439,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,599.738c0,3.183,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.184-2.581-5.765-5.765-5.765C287.611,593.973,285.029,596.554,285.029,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,599.738c0,3.183,2.583,5.765,5.767,5.765s5.764-2.582,5.764-5.765
					c0-3.184-2.58-5.765-5.764-5.765S266.618,596.554,266.618,599.738"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,618.147c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C876.739,612.383,874.159,614.964,874.159,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,618.147c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C858.329,612.383,855.748,614.964,855.748,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,618.147c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.183-2.582-5.765-5.766-5.765S837.338,614.964,837.338,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,618.147c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C821.509,612.383,818.928,614.964,818.928,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,618.147c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C803.099,612.383,800.517,614.964,800.517,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,618.147c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C766.278,612.383,763.696,614.964,763.696,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,618.147c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C747.869,612.383,745.286,614.964,745.286,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,618.147c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C692.638,612.383,690.055,614.964,690.055,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,618.147c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C674.227,612.383,671.645,614.964,671.645,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,618.147c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C655.817,612.383,653.235,614.964,653.235,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,618.147c0,3.185,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C637.406,612.383,634.825,614.964,634.825,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,618.147c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C618.996,612.383,616.414,614.964,616.414,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,618.147c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.183-2.582-5.765-5.765-5.765C600.585,612.383,598.004,614.964,598.004,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,618.147c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.183-2.58-5.765-5.763-5.765C563.766,612.383,561.184,614.964,561.184,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,618.147c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C361.251,612.383,358.67,614.964,358.67,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,618.147c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C342.842,612.383,340.261,614.964,340.261,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,618.147c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C324.431,612.383,321.85,614.964,321.85,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,618.147c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C306.022,612.383,303.439,614.964,303.439,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,618.147c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C287.611,612.383,285.029,614.964,285.029,618.147"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,636.559c0,3.183,2.581,5.765,5.765,5.765s5.765-2.582,5.765-5.765
					c0-3.185-2.581-5.766-5.765-5.766S910.979,633.374,910.979,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,636.559c0,3.183,2.582,5.765,5.766,5.765s5.765-2.582,5.765-5.765
					c0-3.185-2.581-5.766-5.765-5.766S892.568,633.374,892.568,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,636.559c0,3.183,2.58,5.765,5.765,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C876.739,630.793,874.159,633.374,874.159,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,636.559c0,3.183,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C858.329,630.793,855.748,633.374,855.748,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,636.559c0,3.183,2.581,5.765,5.765,5.765s5.766-2.582,5.766-5.765
					c0-3.185-2.582-5.766-5.766-5.766S837.338,633.374,837.338,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,636.559c0,3.183,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C821.509,630.793,818.928,633.374,818.928,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,636.559c0,3.183,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.582,5.765-5.765c0-3.185-2.58-5.766-5.765-5.766C803.099,630.793,800.517,633.374,800.517,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,636.559c0,3.183,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.582,5.764-5.765c0-3.185-2.581-5.766-5.764-5.766C784.688,630.793,782.107,633.374,782.107,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,636.559c0,3.183,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.582,5.764-5.765c0-3.185-2.579-5.766-5.764-5.766C766.278,630.793,763.696,633.374,763.696,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,636.559c0,3.183,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C747.869,630.793,745.286,633.374,745.286,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,636.559c0,3.183,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C692.638,630.793,690.055,633.374,690.055,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,636.559c0,3.183,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C674.227,630.793,671.645,633.374,671.645,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,636.559c0,3.183,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C655.817,630.793,653.235,633.374,653.235,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,636.559c0,3.183,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C637.406,630.793,634.825,633.374,634.825,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,636.559c0,3.183,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.582,5.765-5.765c0-3.185-2.58-5.766-5.765-5.766C618.996,630.793,616.414,633.374,616.414,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,636.559c0,3.183,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.582,5.765-5.765c0-3.185-2.582-5.766-5.765-5.766C600.585,630.793,598.004,633.374,598.004,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,636.559c0,3.183,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.582,5.763-5.765c0-3.185-2.58-5.766-5.763-5.766C563.766,630.793,561.184,633.374,561.184,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,636.559c0,3.183,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C545.354,630.793,542.773,633.374,542.773,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,636.559c0,3.183,2.581,5.765,5.764,5.765
					c3.185,0,5.764-2.582,5.764-5.765c0-3.185-2.579-5.766-5.764-5.766C342.842,630.793,340.261,633.374,340.261,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,636.559c0,3.183,2.581,5.765,5.766,5.765
					c3.183,0,5.764-2.582,5.764-5.765c0-3.185-2.581-5.766-5.764-5.766C324.431,630.793,321.85,633.374,321.85,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,636.559c0,3.183,2.583,5.765,5.766,5.765
					c3.184,0,5.764-2.582,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C306.022,630.793,303.439,633.374,303.439,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,636.559c0,3.183,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.582,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C287.611,630.793,285.029,633.374,285.029,636.559"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,654.969c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S929.389,651.786,929.389,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,654.969c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S910.979,651.786,910.979,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,654.969c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S892.568,651.786,892.568,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,654.969c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C876.739,649.204,874.159,651.786,874.159,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,654.969c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C858.329,649.204,855.748,651.786,855.748,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,654.969c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					c0-3.183-2.582-5.765-5.766-5.765S837.338,651.786,837.338,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,654.969c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C821.509,649.204,818.928,651.786,818.928,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,654.969c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C803.099,649.204,800.517,651.786,800.517,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,654.969c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C784.688,649.204,782.107,651.786,782.107,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,654.969c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C766.278,649.204,763.696,651.786,763.696,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,654.969c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C747.869,649.204,745.286,651.786,745.286,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,654.969c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C674.227,649.204,671.645,651.786,671.645,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,654.969c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C655.817,649.204,653.235,651.786,653.235,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,654.969c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C637.406,649.204,634.825,651.786,634.825,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,654.969c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C618.996,649.204,616.414,651.786,616.414,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,654.969c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.183-2.58-5.765-5.763-5.765C563.766,649.204,561.184,651.786,561.184,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,654.969c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C545.354,649.204,542.773,651.786,542.773,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,654.969c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.183-2.58-5.765-5.764-5.765S524.362,651.786,524.362,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,654.969c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C342.842,649.204,340.261,651.786,340.261,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,654.969c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C324.431,649.204,321.85,651.786,321.85,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,654.969c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C306.022,649.204,303.439,651.786,303.439,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,654.969c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C287.611,649.204,285.029,651.786,285.029,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,654.969c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					c0-3.183-2.58-5.765-5.764-5.765S248.209,651.786,248.209,654.969"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,673.378c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C950.381,667.613,947.8,670.195,947.8,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,673.378c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S929.389,670.195,929.389,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,673.378c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S910.979,670.195,910.979,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,673.378c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S892.568,670.195,892.568,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,673.378c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C876.739,667.613,874.159,670.195,874.159,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,673.378c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C858.329,667.613,855.748,670.195,855.748,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,673.378c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.183-2.582-5.765-5.766-5.765S837.338,670.195,837.338,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,673.378c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C821.509,667.613,818.928,670.195,818.928,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,673.378c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C803.099,667.613,800.517,670.195,800.517,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,673.378c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C784.688,667.613,782.107,670.195,782.107,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,673.378c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C766.278,667.613,763.696,670.195,763.696,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,673.378c0,3.185,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C637.406,667.613,634.825,670.195,634.825,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,673.378c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C618.996,667.613,616.414,670.195,616.414,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,673.378c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.183-2.582-5.765-5.765-5.765C600.585,667.613,598.004,670.195,598.004,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,673.378c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.183-2.581-5.765-5.765-5.765S579.593,670.195,579.593,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,673.378c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.183-2.58-5.765-5.763-5.765C563.766,667.613,561.184,670.195,561.184,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,673.378c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C545.354,667.613,542.773,670.195,542.773,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,673.378c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.183-2.58-5.765-5.764-5.765S524.362,670.195,524.362,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,673.378c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.183-2.58-5.765-5.765-5.765C361.251,667.613,358.67,670.195,358.67,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,673.378c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.183-2.579-5.765-5.764-5.765C342.842,667.613,340.261,670.195,340.261,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,673.378c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.183-2.581-5.765-5.764-5.765C324.431,667.613,321.85,670.195,321.85,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,673.378c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.183-2.58-5.765-5.764-5.765C306.022,667.613,303.439,670.195,303.439,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,673.378c0,3.185,2.583,5.766,5.767,5.766s5.764-2.581,5.764-5.766
					c0-3.183-2.58-5.765-5.764-5.765S266.618,670.195,266.618,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,673.378c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.183-2.58-5.765-5.764-5.765S248.209,670.195,248.209,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,673.378c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C232.38,667.613,229.798,670.195,229.798,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,673.378c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.183-2.581-5.765-5.765-5.765C213.97,667.613,211.388,670.195,211.388,673.378"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,691.79c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C968.791,686.024,966.21,688.605,966.21,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,691.79c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C950.381,686.024,947.8,688.605,947.8,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,691.79c0,3.183,2.582,5.764,5.766,5.764s5.765-2.581,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S929.389,688.605,929.389,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,691.79c0,3.183,2.581,5.764,5.765,5.764s5.765-2.581,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S910.979,688.605,910.979,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,691.79c0,3.183,2.582,5.764,5.766,5.764s5.765-2.581,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S892.568,688.605,892.568,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,691.79c0,3.183,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C876.739,686.024,874.159,688.605,874.159,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,691.79c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C858.329,686.024,855.748,688.605,855.748,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,691.79c0,3.183,2.581,5.764,5.765,5.764s5.766-2.581,5.766-5.764
					c0-3.185-2.582-5.766-5.766-5.766S837.338,688.605,837.338,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,691.79c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C821.509,686.024,818.928,688.605,818.928,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,691.79c0,3.183,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C803.099,686.024,800.517,688.605,800.517,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,691.79c0,3.183,2.58,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C784.688,686.024,782.107,688.605,782.107,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,691.79c0,3.183,2.582,5.764,5.766,5.764
					c3.185,0,5.764-2.581,5.764-5.764c0-3.185-2.579-5.766-5.764-5.766C766.278,686.024,763.696,688.605,763.696,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,691.79c0,3.183,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C747.869,686.024,745.286,688.605,745.286,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,691.79c0,3.183,2.581,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C637.406,686.024,634.825,688.605,634.825,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,691.79c0,3.183,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C618.996,686.024,616.414,688.605,616.414,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,691.79c0,3.183,2.582,5.764,5.766,5.764s5.765-2.581,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S579.593,688.605,579.593,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,691.79c0,3.183,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.581,5.763-5.764c0-3.185-2.58-5.766-5.763-5.766C563.766,686.024,561.184,688.605,561.184,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,691.79c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C545.354,686.024,542.773,688.605,542.773,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,691.79c0,3.183,2.582,5.764,5.766,5.764s5.764-2.581,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S524.362,688.605,524.362,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,691.79c0,3.183,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C361.251,686.024,358.67,688.605,358.67,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,691.79c0,3.183,2.581,5.764,5.764,5.764
					c3.185,0,5.764-2.581,5.764-5.764c0-3.185-2.579-5.766-5.764-5.766C342.842,686.024,340.261,688.605,340.261,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,691.79c0,3.183,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C324.431,686.024,321.85,688.605,321.85,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,691.79c0,3.183,2.583,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C306.022,686.024,303.439,688.605,303.439,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,691.79c0,3.183,2.583,5.764,5.767,5.764s5.764-2.581,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S266.618,688.605,266.618,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,691.79c0,3.183,2.581,5.764,5.765,5.764s5.764-2.581,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S248.209,688.605,248.209,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,691.79c0,3.183,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C232.38,686.024,229.798,688.605,229.798,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,691.79c0,3.183,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C213.97,686.024,211.388,688.605,211.388,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,691.79c0,3.183,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C195.56,686.024,192.978,688.605,192.978,691.79"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,710.199c0,3.186,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.579,5.766-5.765c0-3.184-2.581-5.766-5.766-5.766C987.202,704.433,984.62,707.015,984.62,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,710.199c0,3.186,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.579,5.764-5.765c0-3.184-2.58-5.766-5.764-5.766C950.381,704.433,947.8,707.015,947.8,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,710.199c0,3.186,2.582,5.765,5.766,5.765s5.765-2.579,5.765-5.765
					c0-3.184-2.581-5.766-5.765-5.766S929.389,707.015,929.389,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,710.199c0,3.186,2.581,5.765,5.765,5.765s5.765-2.579,5.765-5.765
					c0-3.184-2.581-5.766-5.765-5.766S910.979,707.015,910.979,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,710.199c0,3.186,2.582,5.765,5.766,5.765s5.765-2.579,5.765-5.765
					c0-3.184-2.581-5.766-5.765-5.766S892.568,707.015,892.568,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,710.199c0,3.186,2.58,5.765,5.765,5.765
					c3.184,0,5.765-2.579,5.765-5.765c0-3.184-2.581-5.766-5.765-5.766C876.739,704.433,874.159,707.015,874.159,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,710.199c0,3.186,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.579,5.764-5.765c0-3.184-2.58-5.766-5.764-5.766C858.329,704.433,855.748,707.015,855.748,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,710.199c0,3.186,2.581,5.765,5.765,5.765s5.766-2.579,5.766-5.765
					c0-3.184-2.582-5.766-5.766-5.766S837.338,707.015,837.338,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,710.199c0,3.186,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.579,5.764-5.765c0-3.184-2.58-5.766-5.764-5.766C821.509,704.433,818.928,707.015,818.928,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,710.199c0,3.186,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.579,5.765-5.765c0-3.184-2.58-5.766-5.765-5.766C803.099,704.433,800.517,707.015,800.517,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,710.199c0,3.186,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.579,5.764-5.765c0-3.184-2.581-5.766-5.764-5.766C784.688,704.433,782.107,707.015,782.107,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,710.199c0,3.186,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.579,5.764-5.765c0-3.184-2.579-5.766-5.764-5.766C766.278,704.433,763.696,707.015,763.696,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,710.199c0,3.186,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.579,5.765-5.765c0-3.184-2.581-5.766-5.765-5.766C747.869,704.433,745.286,707.015,745.286,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,710.199c0,3.186,2.581,5.765,5.765,5.765s5.763-2.579,5.763-5.765
					c0-3.184-2.579-5.766-5.763-5.766S726.876,707.015,726.876,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,710.199c0,3.186,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.579,5.766-5.765c0-3.184-2.581-5.766-5.766-5.766C711.047,704.433,708.465,707.015,708.465,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,710.199c0,3.186,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.579,5.765-5.765c0-3.184-2.581-5.766-5.765-5.766C692.638,704.433,690.055,707.015,690.055,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,710.199c0,3.186,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.579,5.764-5.765c0-3.184-2.58-5.766-5.764-5.766C674.227,704.433,671.645,707.015,671.645,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,710.199c0,3.186,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.579,5.763-5.765c0-3.184-2.58-5.766-5.763-5.766C563.766,704.433,561.184,707.015,561.184,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,710.199c0,3.186,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.579,5.764-5.765c0-3.184-2.58-5.766-5.764-5.766C545.354,704.433,542.773,707.015,542.773,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,710.199c0,3.186,2.581,5.765,5.765,5.765
					c3.185,0,5.765-2.579,5.765-5.765c0-3.184-2.58-5.766-5.765-5.766C361.251,704.433,358.67,707.015,358.67,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,710.199c0,3.186,2.581,5.765,5.764,5.765
					c3.185,0,5.764-2.579,5.764-5.765c0-3.184-2.579-5.766-5.764-5.766C342.842,704.433,340.261,707.015,340.261,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,710.199c0,3.186,2.581,5.765,5.766,5.765
					c3.183,0,5.764-2.579,5.764-5.765c0-3.184-2.581-5.766-5.764-5.766C324.431,704.433,321.85,707.015,321.85,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,710.199c0,3.186,2.583,5.765,5.767,5.765s5.764-2.579,5.764-5.765
					c0-3.184-2.58-5.766-5.764-5.766S266.618,707.015,266.618,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,710.199c0,3.186,2.581,5.765,5.765,5.765s5.764-2.579,5.764-5.765
					c0-3.184-2.58-5.766-5.764-5.766S248.209,707.015,248.209,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,710.199c0,3.186,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.579,5.765-5.765c0-3.184-2.581-5.766-5.765-5.766C232.38,704.433,229.798,707.015,229.798,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,710.199c0,3.186,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.579,5.765-5.765c0-3.184-2.581-5.766-5.765-5.766C213.97,704.433,211.388,707.015,211.388,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,710.199c0,3.186,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.579,5.764-5.765c0-3.184-2.581-5.766-5.764-5.766C195.56,704.433,192.978,707.015,192.978,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,728.61c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.58,5.766-5.764s-2.581-5.766-5.766-5.766C987.202,722.844,984.62,725.426,984.62,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,728.61c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C968.791,722.844,966.21,725.426,966.21,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,728.61c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764s-2.58-5.766-5.764-5.766C950.381,722.844,947.8,725.426,947.8,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,728.61c0,3.184,2.582,5.764,5.766,5.764s5.765-2.58,5.765-5.764
					s-2.581-5.766-5.765-5.766S929.389,725.426,929.389,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,728.61c0,3.184,2.581,5.764,5.765,5.764s5.765-2.58,5.765-5.764
					s-2.581-5.766-5.765-5.766S910.979,725.426,910.979,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,728.61c0,3.184,2.582,5.764,5.766,5.764s5.765-2.58,5.765-5.764
					s-2.581-5.766-5.765-5.766S892.568,725.426,892.568,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,728.61c0,3.184,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C876.739,722.844,874.159,725.426,874.159,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,728.61c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764s-2.58-5.766-5.764-5.766C858.329,722.844,855.748,725.426,855.748,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,728.61c0,3.184,2.581,5.764,5.765,5.764s5.766-2.58,5.766-5.764
					s-2.582-5.766-5.766-5.766S837.338,725.426,837.338,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,728.61c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764s-2.58-5.766-5.764-5.766C821.509,722.844,818.928,725.426,818.928,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,728.61c0,3.184,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.58,5.765-5.764s-2.58-5.766-5.765-5.766C803.099,722.844,800.517,725.426,800.517,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,728.61c0,3.184,2.58,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764s-2.581-5.766-5.764-5.766C784.688,722.844,782.107,725.426,782.107,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,728.61c0,3.184,2.582,5.764,5.766,5.764
					c3.185,0,5.764-2.58,5.764-5.764s-2.579-5.766-5.764-5.766C766.278,722.844,763.696,725.426,763.696,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,728.61c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C747.869,722.844,745.286,725.426,745.286,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,728.61c0,3.184,2.581,5.764,5.765,5.764s5.763-2.58,5.763-5.764
					s-2.579-5.766-5.763-5.766S726.876,725.426,726.876,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,728.61c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.58,5.766-5.764s-2.581-5.766-5.766-5.766C711.047,722.844,708.465,725.426,708.465,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,728.61c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C692.638,722.844,690.055,725.426,690.055,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,728.61c0,3.184,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764s-2.58-5.766-5.764-5.766C674.227,722.844,671.645,725.426,671.645,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,728.61c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.764-2.58,5.764-5.764s-2.58-5.766-5.764-5.766C655.817,722.844,653.235,725.426,653.235,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,728.61c0,3.184,2.581,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C637.406,722.844,634.825,725.426,634.825,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,728.61c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.58,5.765-5.764s-2.58-5.766-5.765-5.766C618.996,722.844,616.414,725.426,616.414,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,728.61c0,3.184,2.581,5.764,5.765,5.764
					c3.183,0,5.765-2.58,5.765-5.764s-2.582-5.766-5.765-5.766C600.585,722.844,598.004,725.426,598.004,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,728.61c0,3.184,2.582,5.764,5.766,5.764s5.765-2.58,5.765-5.764
					s-2.581-5.766-5.765-5.766S579.593,725.426,579.593,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,728.61c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.58,5.763-5.764s-2.58-5.766-5.763-5.766C563.766,722.844,561.184,725.426,561.184,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,728.61c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764s-2.58-5.766-5.764-5.766C545.354,722.844,542.773,725.426,542.773,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,728.61c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764s-2.581-5.766-5.764-5.766C379.662,722.844,377.08,725.426,377.08,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,728.61c0,3.184,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.58,5.765-5.764s-2.58-5.766-5.765-5.766C361.251,722.844,358.67,725.426,358.67,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,728.61c0,3.184,2.581,5.764,5.764,5.764
					c3.185,0,5.764-2.58,5.764-5.764s-2.579-5.766-5.764-5.766C342.842,722.844,340.261,725.426,340.261,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,728.61c0,3.184,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764s-2.581-5.766-5.764-5.766C324.431,722.844,321.85,725.426,321.85,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,728.61c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764s-2.58-5.766-5.764-5.766C306.022,722.844,303.439,725.426,303.439,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,728.61c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C287.611,722.844,285.029,725.426,285.029,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,728.61c0,3.184,2.581,5.764,5.765,5.764s5.764-2.58,5.764-5.764
					s-2.58-5.766-5.764-5.766S248.209,725.426,248.209,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,728.61c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C232.38,722.844,229.798,725.426,229.798,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,728.61c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C213.97,722.844,211.388,725.426,211.388,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,728.61c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764s-2.581-5.766-5.764-5.766C195.56,722.844,192.978,725.426,192.978,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.766-5.766-5.766C987.202,741.254,984.62,743.836,984.62,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,747.02c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C968.791,741.254,966.21,743.836,966.21,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,747.02c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C950.381,741.254,947.8,743.836,947.8,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,747.02c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.766-5.765-5.766S929.389,743.836,929.389,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,747.02c0,3.184,2.581,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.766-5.765-5.766S910.979,743.836,910.979,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,747.02c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.766-5.765-5.766S892.568,743.836,892.568,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,747.02c0,3.184,2.58,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C876.739,741.254,874.159,743.836,874.159,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,747.02c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C858.329,741.254,855.748,743.836,855.748,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,747.02c0,3.184,2.581,5.765,5.765,5.765s5.766-2.581,5.766-5.765
					s-2.582-5.766-5.766-5.766S837.338,743.836,837.338,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,747.02c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C821.509,741.254,818.928,743.836,818.928,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C803.099,741.254,800.517,743.836,800.517,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,747.02c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C784.688,741.254,782.107,743.836,782.107,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.766-5.764-5.766C766.278,741.254,763.696,743.836,763.696,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,747.02c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C747.869,741.254,745.286,743.836,745.286,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,747.02c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.766-5.763-5.766S726.876,743.836,726.876,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.766-5.766-5.766C711.047,741.254,708.465,743.836,708.465,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,747.02c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C692.638,741.254,690.055,743.836,690.055,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C674.227,741.254,671.645,743.836,671.645,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C655.817,741.254,653.235,743.836,653.235,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,747.02c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C637.406,741.254,634.825,743.836,634.825,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C618.996,741.254,616.414,743.836,616.414,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,747.02c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765s-2.582-5.766-5.765-5.766C600.585,741.254,598.004,743.836,598.004,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,747.02c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.766-5.765-5.766S579.593,743.836,579.593,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765s-2.58-5.766-5.763-5.766C563.766,741.254,561.184,743.836,561.184,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,747.02c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C545.354,741.254,542.773,743.836,542.773,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,747.02c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.766-5.764-5.766S524.362,743.836,524.362,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,747.02c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C508.534,741.254,505.953,743.836,505.953,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,747.02c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C490.125,741.254,487.542,743.836,487.542,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765s-2.58-5.766-5.763-5.766C471.714,741.254,469.132,743.836,469.132,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,747.02c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.766-5.764-5.766S450.721,743.836,450.721,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C434.893,741.254,432.311,743.836,432.311,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,747.02c0,3.184,2.581,5.765,5.765,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.766-5.764-5.766S413.901,743.836,413.901,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C379.662,741.254,377.08,743.836,377.08,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,747.02c0,3.184,2.581,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C361.251,741.254,358.67,743.836,358.67,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,747.02c0,3.184,2.581,5.765,5.764,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.766-5.764-5.766C342.842,741.254,340.261,743.836,340.261,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,747.02c0,3.184,2.581,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C324.431,741.254,321.85,743.836,321.85,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,747.02c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C306.022,741.254,303.439,743.836,303.439,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,747.02c0,3.184,2.581,5.765,5.765,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.766-5.764-5.766S248.209,743.836,248.209,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C232.38,741.254,229.798,743.836,229.798,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C213.97,741.254,211.388,743.836,211.388,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C195.56,741.254,192.978,743.836,192.978,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C177.149,741.254,174.567,743.836,174.567,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,765.43c0,3.184,2.582,5.768,5.765,5.768
					c3.185,0,5.766-2.584,5.766-5.768c0-3.183-2.581-5.766-5.766-5.766C987.202,759.664,984.62,762.247,984.62,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C968.791,759.664,966.21,762.247,966.21,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.184,0,5.764-2.584,5.764-5.768c0-3.183-2.58-5.766-5.764-5.766C950.381,759.664,947.8,762.247,947.8,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,765.43c0,3.184,2.582,5.768,5.766,5.768s5.765-2.584,5.765-5.768
					c0-3.183-2.581-5.766-5.765-5.766S929.389,762.247,929.389,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,765.43c0,3.184,2.581,5.768,5.765,5.768s5.765-2.584,5.765-5.768
					c0-3.183-2.581-5.766-5.765-5.766S910.979,762.247,910.979,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,765.43c0,3.184,2.582,5.768,5.766,5.768s5.765-2.584,5.765-5.768
					c0-3.183-2.581-5.766-5.765-5.766S892.568,762.247,892.568,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,765.43c0,3.184,2.58,5.768,5.765,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C876.739,759.664,874.159,762.247,874.159,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.184,0,5.764-2.584,5.764-5.768c0-3.183-2.58-5.766-5.764-5.766C858.329,759.664,855.748,762.247,855.748,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,765.43c0,3.184,2.581,5.768,5.765,5.768s5.766-2.584,5.766-5.768
					c0-3.183-2.582-5.766-5.766-5.766S837.338,762.247,837.338,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.184,0,5.764-2.584,5.764-5.768c0-3.183-2.58-5.766-5.764-5.766C821.509,759.664,818.928,762.247,818.928,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.185,0,5.765-2.584,5.765-5.768c0-3.183-2.58-5.766-5.765-5.766C803.099,759.664,800.517,762.247,800.517,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,765.43c0,3.184,2.58,5.768,5.766,5.768
					c3.183,0,5.764-2.584,5.764-5.768c0-3.183-2.581-5.766-5.764-5.766C784.688,759.664,782.107,762.247,782.107,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.185,0,5.764-2.584,5.764-5.768c0-3.183-2.579-5.766-5.764-5.766C766.278,759.664,763.696,762.247,763.696,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,765.43c0,3.184,2.583,5.768,5.766,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C747.869,759.664,745.286,762.247,745.286,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,765.43c0,3.184,2.581,5.768,5.765,5.768s5.763-2.584,5.763-5.768
					c0-3.183-2.579-5.766-5.763-5.766S726.876,762.247,726.876,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,765.43c0,3.184,2.582,5.768,5.765,5.768
					c3.185,0,5.766-2.584,5.766-5.768c0-3.183-2.581-5.766-5.766-5.766C711.047,759.664,708.465,762.247,708.465,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,765.43c0,3.184,2.583,5.768,5.766,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C692.638,759.664,690.055,762.247,690.055,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.184,0,5.764-2.584,5.764-5.768c0-3.183-2.58-5.766-5.764-5.766C674.227,759.664,671.645,762.247,671.645,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,765.43c0,3.184,2.582,5.768,5.765,5.768
					c3.184,0,5.764-2.584,5.764-5.768c0-3.183-2.58-5.766-5.764-5.766C655.817,759.664,653.235,762.247,653.235,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,765.43c0,3.184,2.581,5.768,5.765,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C637.406,759.664,634.825,762.247,634.825,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,765.43c0,3.184,2.582,5.768,5.765,5.768
					c3.185,0,5.765-2.584,5.765-5.768c0-3.183-2.58-5.766-5.765-5.766C618.996,759.664,616.414,762.247,616.414,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,765.43c0,3.184,2.581,5.768,5.765,5.768
					c3.183,0,5.765-2.584,5.765-5.768c0-3.183-2.582-5.766-5.765-5.766C600.585,759.664,598.004,762.247,598.004,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,765.43c0,3.184,2.582,5.768,5.766,5.768s5.765-2.584,5.765-5.768
					c0-3.183-2.581-5.766-5.765-5.766S579.593,762.247,579.593,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.183,0,5.763-2.584,5.763-5.768c0-3.183-2.58-5.766-5.763-5.766C563.766,759.664,561.184,762.247,561.184,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.184,0,5.764-2.584,5.764-5.768c0-3.183-2.58-5.766-5.764-5.766C545.354,759.664,542.773,762.247,542.773,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,765.43c0,3.184,2.582,5.768,5.766,5.768s5.764-2.584,5.764-5.768
					c0-3.183-2.58-5.766-5.764-5.766S524.362,762.247,524.362,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,765.43c0,3.184,2.581,5.768,5.765,5.768
					c3.183,0,5.764-2.584,5.764-5.768c0-3.183-2.581-5.766-5.764-5.766C508.534,759.664,505.953,762.247,505.953,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,765.43c0,3.184,2.583,5.768,5.766,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C490.125,759.664,487.542,762.247,487.542,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.183,0,5.763-2.584,5.763-5.768c0-3.183-2.58-5.766-5.763-5.766C471.714,759.664,469.132,762.247,469.132,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,765.43c0,3.184,2.582,5.768,5.766,5.768s5.764-2.584,5.764-5.768
					c0-3.183-2.58-5.766-5.764-5.766S450.721,762.247,450.721,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,765.43c0,3.184,2.583,5.768,5.766,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C398.073,759.664,395.49,762.247,395.49,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.183,0,5.764-2.584,5.764-5.768c0-3.183-2.581-5.766-5.764-5.766C379.662,759.664,377.08,762.247,377.08,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,765.43c0,3.184,2.581,5.768,5.765,5.768
					c3.185,0,5.765-2.584,5.765-5.768c0-3.183-2.58-5.766-5.765-5.766C361.251,759.664,358.67,762.247,358.67,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,765.43c0,3.184,2.581,5.768,5.764,5.768
					c3.185,0,5.764-2.584,5.764-5.768c0-3.183-2.579-5.766-5.764-5.766C342.842,759.664,340.261,762.247,340.261,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.183,0,5.764-2.584,5.764-5.768c0-3.183-2.581-5.766-5.764-5.766C324.431,759.664,321.85,762.247,321.85,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,765.43c0,3.184,2.583,5.768,5.766,5.768
					c3.184,0,5.764-2.584,5.764-5.768c0-3.183-2.58-5.766-5.764-5.766C306.022,759.664,303.439,762.247,303.439,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,765.43c0,3.184,2.582,5.768,5.765,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C287.611,759.664,285.029,762.247,285.029,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,765.43c0,3.184,2.582,5.768,5.765,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C213.97,759.664,211.388,762.247,211.388,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.183,0,5.764-2.584,5.764-5.768c0-3.183-2.581-5.766-5.764-5.766C195.56,759.664,192.978,762.247,192.978,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,783.841c0,3.185,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.579,5.766-5.764c0-3.184-2.581-5.766-5.766-5.766C987.202,778.075,984.62,780.657,984.62,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C968.791,778.075,966.21,780.657,966.21,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.579,5.764-5.764c0-3.184-2.58-5.766-5.764-5.766C950.381,778.075,947.8,780.657,947.8,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,783.841c0,3.185,2.582,5.764,5.766,5.764s5.765-2.579,5.765-5.764
					c0-3.184-2.581-5.766-5.765-5.766S929.389,780.657,929.389,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,783.841c0,3.185,2.581,5.764,5.765,5.764s5.765-2.579,5.765-5.764
					c0-3.184-2.581-5.766-5.765-5.766S910.979,780.657,910.979,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,783.841c0,3.185,2.582,5.764,5.766,5.764s5.765-2.579,5.765-5.764
					c0-3.184-2.581-5.766-5.765-5.766S892.568,780.657,892.568,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,783.841c0,3.185,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C876.739,778.075,874.159,780.657,874.159,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.579,5.764-5.764c0-3.184-2.58-5.766-5.764-5.766C858.329,778.075,855.748,780.657,855.748,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,783.841c0,3.185,2.581,5.764,5.765,5.764s5.766-2.579,5.766-5.764
					c0-3.184-2.582-5.766-5.766-5.766S837.338,780.657,837.338,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.579,5.764-5.764c0-3.184-2.58-5.766-5.764-5.766C821.509,778.075,818.928,780.657,818.928,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,783.841c0,3.185,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.579,5.765-5.764c0-3.184-2.58-5.766-5.765-5.766C803.099,778.075,800.517,780.657,800.517,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,783.841c0,3.185,2.58,5.764,5.766,5.764
					c3.183,0,5.764-2.579,5.764-5.764c0-3.184-2.581-5.766-5.764-5.766C784.688,778.075,782.107,780.657,782.107,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,783.841c0,3.185,2.582,5.764,5.766,5.764
					c3.185,0,5.764-2.579,5.764-5.764c0-3.184-2.579-5.766-5.764-5.766C766.278,778.075,763.696,780.657,763.696,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,783.841c0,3.185,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C747.869,778.075,745.286,780.657,745.286,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,783.841c0,3.185,2.581,5.764,5.765,5.764s5.763-2.579,5.763-5.764
					c0-3.184-2.579-5.766-5.763-5.766S726.876,780.657,726.876,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,783.841c0,3.185,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.579,5.766-5.764c0-3.184-2.581-5.766-5.766-5.766C711.047,778.075,708.465,780.657,708.465,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,783.841c0,3.185,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C692.638,778.075,690.055,780.657,690.055,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,783.841c0,3.185,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.579,5.764-5.764c0-3.184-2.58-5.766-5.764-5.766C674.227,778.075,671.645,780.657,671.645,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,783.841c0,3.185,2.582,5.764,5.765,5.764
					c3.184,0,5.764-2.579,5.764-5.764c0-3.184-2.58-5.766-5.764-5.766C655.817,778.075,653.235,780.657,653.235,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,783.841c0,3.185,2.581,5.764,5.765,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C637.406,778.075,634.825,780.657,634.825,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,783.841c0,3.185,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.579,5.765-5.764c0-3.184-2.58-5.766-5.765-5.766C618.996,778.075,616.414,780.657,616.414,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,783.841c0,3.185,2.581,5.764,5.765,5.764
					c3.183,0,5.765-2.579,5.765-5.764c0-3.184-2.582-5.766-5.765-5.766C600.585,778.075,598.004,780.657,598.004,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,783.841c0,3.185,2.582,5.764,5.766,5.764s5.765-2.579,5.765-5.764
					c0-3.184-2.581-5.766-5.765-5.766S579.593,780.657,579.593,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,783.841c0,3.185,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.579,5.763-5.764c0-3.184-2.58-5.766-5.763-5.766C563.766,778.075,561.184,780.657,561.184,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.579,5.764-5.764c0-3.184-2.58-5.766-5.764-5.766C545.354,778.075,542.773,780.657,542.773,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,783.841c0,3.185,2.582,5.764,5.766,5.764s5.764-2.579,5.764-5.764
					c0-3.184-2.58-5.766-5.764-5.766S524.362,780.657,524.362,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,783.841c0,3.185,2.581,5.764,5.765,5.764
					c3.183,0,5.764-2.579,5.764-5.764c0-3.184-2.581-5.766-5.764-5.766C508.534,778.075,505.953,780.657,505.953,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,783.841c0,3.185,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C490.125,778.075,487.542,780.657,487.542,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,783.841c0,3.185,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.579,5.763-5.764c0-3.184-2.58-5.766-5.763-5.766C471.714,778.075,469.132,780.657,469.132,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,783.841c0,3.185,2.582,5.764,5.766,5.764s5.764-2.579,5.764-5.764
					c0-3.184-2.58-5.766-5.764-5.766S450.721,780.657,450.721,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,783.841c0,3.185,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C398.073,778.075,395.49,780.657,395.49,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,783.841c0,3.185,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.579,5.764-5.764c0-3.184-2.581-5.766-5.764-5.766C379.662,778.075,377.08,780.657,377.08,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,783.841c0,3.185,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.579,5.765-5.764c0-3.184-2.58-5.766-5.765-5.766C361.251,778.075,358.67,780.657,358.67,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,783.841c0,3.185,2.581,5.764,5.764,5.764
					c3.185,0,5.764-2.579,5.764-5.764c0-3.184-2.579-5.766-5.764-5.766C342.842,778.075,340.261,780.657,340.261,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.579,5.764-5.764c0-3.184-2.581-5.766-5.764-5.766C324.431,778.075,321.85,780.657,321.85,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,783.841c0,3.185,2.583,5.764,5.766,5.764
					c3.184,0,5.764-2.579,5.764-5.764c0-3.184-2.58-5.766-5.764-5.766C306.022,778.075,303.439,780.657,303.439,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,783.841c0,3.185,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C287.611,778.075,285.029,780.657,285.029,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,783.841c0,3.185,2.583,5.764,5.767,5.764s5.764-2.579,5.764-5.764
					c0-3.184-2.58-5.766-5.764-5.766S266.618,780.657,266.618,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,802.251c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.185-2.581-5.766-5.766-5.766C987.202,796.485,984.62,799.066,984.62,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C968.791,796.485,966.21,799.066,966.21,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C950.381,796.485,947.8,799.066,947.8,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,802.251c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S929.389,799.066,929.389,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,802.251c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S910.979,799.066,910.979,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,802.251c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S892.568,799.066,892.568,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,802.251c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C876.739,796.485,874.159,799.066,874.159,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C858.329,796.485,855.748,799.066,855.748,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,802.251c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					c0-3.185-2.582-5.766-5.766-5.766S837.338,799.066,837.338,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C821.509,796.485,818.928,799.066,818.928,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C803.099,796.485,800.517,799.066,800.517,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,802.251c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C784.688,796.485,782.107,799.066,782.107,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C766.278,796.485,763.696,799.066,763.696,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,802.251c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C747.869,796.485,745.286,799.066,745.286,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,802.251c0,3.184,2.581,5.766,5.765,5.766s5.763-2.582,5.763-5.766
					c0-3.185-2.579-5.766-5.763-5.766S726.876,799.066,726.876,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,802.251c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.185-2.581-5.766-5.766-5.766C711.047,796.485,708.465,799.066,708.465,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,802.251c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C692.638,796.485,690.055,799.066,690.055,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C674.227,796.485,671.645,799.066,671.645,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,802.251c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C655.817,796.485,653.235,799.066,653.235,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,802.251c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C637.406,796.485,634.825,799.066,634.825,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,802.251c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C618.996,796.485,616.414,799.066,616.414,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,802.251c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C600.585,796.485,598.004,799.066,598.004,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,802.251c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S579.593,799.066,579.593,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.185-2.58-5.766-5.763-5.766C563.766,796.485,561.184,799.066,561.184,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C545.354,796.485,542.773,799.066,542.773,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,802.251c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S524.362,799.066,524.362,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,802.251c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C508.534,796.485,505.953,799.066,505.953,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,802.251c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C490.125,796.485,487.542,799.066,487.542,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.185-2.58-5.766-5.763-5.766C471.714,796.485,469.132,799.066,469.132,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,802.251c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S450.721,799.066,450.721,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C434.893,796.485,432.311,799.066,432.311,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C379.662,796.485,377.08,799.066,377.08,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,802.251c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C361.251,796.485,358.67,799.066,358.67,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,802.251c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C342.842,796.485,340.261,799.066,340.261,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C324.431,796.485,321.85,799.066,321.85,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,802.251c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C306.022,796.485,303.439,799.066,303.439,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,802.251c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C287.611,796.485,285.029,799.066,285.029,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,820.662c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.58,5.766-5.764c0-3.185-2.581-5.766-5.766-5.766C987.202,814.896,984.62,817.478,984.62,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C968.791,814.896,966.21,817.478,966.21,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C950.381,814.896,947.8,817.478,947.8,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,820.662c0,3.184,2.582,5.764,5.766,5.764s5.765-2.58,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S929.389,817.478,929.389,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,820.662c0,3.184,2.581,5.764,5.765,5.764s5.765-2.58,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S910.979,817.478,910.979,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,820.662c0,3.184,2.582,5.764,5.766,5.764s5.765-2.58,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S892.568,817.478,892.568,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,820.662c0,3.184,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C876.739,814.896,874.159,817.478,874.159,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C858.329,814.896,855.748,817.478,855.748,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,820.662c0,3.184,2.581,5.764,5.765,5.764s5.766-2.58,5.766-5.764
					c0-3.185-2.582-5.766-5.766-5.766S837.338,817.478,837.338,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C821.509,814.896,818.928,817.478,818.928,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.58,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C803.099,814.896,800.517,817.478,800.517,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,820.662c0,3.184,2.58,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C784.688,814.896,782.107,817.478,782.107,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.185,0,5.764-2.58,5.764-5.764c0-3.185-2.579-5.766-5.764-5.766C766.278,814.896,763.696,817.478,763.696,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,820.662c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C747.869,814.896,745.286,817.478,745.286,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,820.662c0,3.184,2.581,5.764,5.765,5.764s5.763-2.58,5.763-5.764
					c0-3.185-2.579-5.766-5.763-5.766S726.876,817.478,726.876,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,820.662c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.58,5.766-5.764c0-3.185-2.581-5.766-5.766-5.766C711.047,814.896,708.465,817.478,708.465,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,820.662c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C692.638,814.896,690.055,817.478,690.055,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C674.227,814.896,671.645,817.478,671.645,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,820.662c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C655.817,814.896,653.235,817.478,653.235,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,820.662c0,3.184,2.581,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C637.406,814.896,634.825,817.478,634.825,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,820.662c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.58,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C618.996,814.896,616.414,817.478,616.414,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,820.662c0,3.184,2.581,5.764,5.765,5.764
					c3.183,0,5.765-2.58,5.765-5.764c0-3.185-2.582-5.766-5.765-5.766C600.585,814.896,598.004,817.478,598.004,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,820.662c0,3.184,2.582,5.764,5.766,5.764s5.765-2.58,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S579.593,817.478,579.593,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.58,5.763-5.764c0-3.185-2.58-5.766-5.763-5.766C563.766,814.896,561.184,817.478,561.184,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C545.354,814.896,542.773,817.478,542.773,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,820.662c0,3.184,2.582,5.764,5.766,5.764s5.764-2.58,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S524.362,817.478,524.362,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,820.662c0,3.184,2.581,5.764,5.765,5.764
					c3.183,0,5.764-2.58,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C508.534,814.896,505.953,817.478,505.953,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,820.662c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C490.125,814.896,487.542,817.478,487.542,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.58,5.763-5.764c0-3.185-2.58-5.766-5.763-5.766C471.714,814.896,469.132,817.478,469.132,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,820.662c0,3.184,2.582,5.764,5.766,5.764s5.764-2.58,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S450.721,817.478,450.721,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C434.893,814.896,432.311,817.478,432.311,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,820.662c0,3.184,2.581,5.764,5.765,5.764s5.764-2.58,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S413.901,817.478,413.901,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,820.662c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C398.073,814.896,395.49,817.478,395.49,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C379.662,814.896,377.08,817.478,377.08,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,820.662c0,3.184,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.58,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C361.251,814.896,358.67,817.478,358.67,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,820.662c0,3.184,2.581,5.764,5.764,5.764
					c3.185,0,5.764-2.58,5.764-5.764c0-3.185-2.579-5.766-5.764-5.766C342.842,814.896,340.261,817.478,340.261,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C324.431,814.896,321.85,817.478,321.85,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,820.662c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C306.022,814.896,303.439,817.478,303.439,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,820.662c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C287.611,814.896,285.029,817.478,285.029,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,820.662c0,3.184,2.583,5.764,5.767,5.764s5.764-2.58,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S266.618,817.478,266.618,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,820.662c0,3.184,2.581,5.764,5.765,5.764s5.764-2.58,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S248.209,817.478,248.209,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,839.071c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.765-5.766-5.765C987.202,833.307,984.62,835.888,984.62,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,839.071c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C968.791,833.307,966.21,835.888,966.21,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,839.071c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C950.381,833.307,947.8,835.888,947.8,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,839.071c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S929.389,835.888,929.389,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,839.071c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S910.979,835.888,910.979,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,839.071c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S892.568,835.888,892.568,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,839.071c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C876.739,833.307,874.159,835.888,874.159,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,839.071c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C858.329,833.307,855.748,835.888,855.748,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,839.071c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.765-5.766-5.765S837.338,835.888,837.338,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,839.071c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C821.509,833.307,818.928,835.888,818.928,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,839.071c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.765-5.765-5.765C803.099,833.307,800.517,835.888,800.517,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,839.071c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.765-5.764-5.765C784.688,833.307,782.107,835.888,782.107,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,839.071c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.184-2.579-5.765-5.764-5.765C766.278,833.307,763.696,835.888,763.696,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,839.071c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C747.869,833.307,745.286,835.888,745.286,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,839.071c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.184-2.579-5.765-5.763-5.765S726.876,835.888,726.876,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,839.071c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.765-5.766-5.765C711.047,833.307,708.465,835.888,708.465,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,839.071c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C692.638,833.307,690.055,835.888,690.055,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,839.071c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C674.227,833.307,671.645,835.888,671.645,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,839.071c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C655.817,833.307,653.235,835.888,653.235,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,839.071c0,3.185,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C637.406,833.307,634.825,835.888,634.825,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,839.071c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.765-5.765-5.765C618.996,833.307,616.414,835.888,616.414,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,839.071c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.765-5.765-5.765C600.585,833.307,598.004,835.888,598.004,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,839.071c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S579.593,835.888,579.593,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,839.071c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.184-2.58-5.765-5.763-5.765C563.766,833.307,561.184,835.888,561.184,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,839.071c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C545.354,833.307,542.773,835.888,542.773,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,839.071c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.765-5.764-5.765S524.362,835.888,524.362,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,839.071c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.765-5.764-5.765C508.534,833.307,505.953,835.888,505.953,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,839.071c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C490.125,833.307,487.542,835.888,487.542,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,839.071c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.184-2.58-5.765-5.763-5.765C471.714,833.307,469.132,835.888,469.132,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,839.071c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.765-5.764-5.765S450.721,835.888,450.721,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,839.071c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C434.893,833.307,432.311,835.888,432.311,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,839.071c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.765-5.764-5.765S413.901,835.888,413.901,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,839.071c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C398.073,833.307,395.49,835.888,395.49,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,857.483c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.582,5.766-5.764c0-3.187-2.581-5.768-5.766-5.768C987.202,851.716,984.62,854.297,984.62,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C968.791,851.716,966.21,854.297,966.21,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.187-2.58-5.768-5.764-5.768C950.381,851.716,947.8,854.297,947.8,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,857.483c0,3.182,2.582,5.764,5.766,5.764s5.765-2.582,5.765-5.764
					c0-3.187-2.581-5.768-5.765-5.768S929.389,854.297,929.389,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,857.483c0,3.182,2.581,5.764,5.765,5.764s5.765-2.582,5.765-5.764
					c0-3.187-2.581-5.768-5.765-5.768S910.979,854.297,910.979,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,857.483c0,3.182,2.582,5.764,5.766,5.764s5.765-2.582,5.765-5.764
					c0-3.187-2.581-5.768-5.765-5.768S892.568,854.297,892.568,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,857.483c0,3.182,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C876.739,851.716,874.159,854.297,874.159,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.187-2.58-5.768-5.764-5.768C858.329,851.716,855.748,854.297,855.748,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,857.483c0,3.182,2.581,5.764,5.765,5.764s5.766-2.582,5.766-5.764
					c0-3.187-2.582-5.768-5.766-5.768S837.338,854.297,837.338,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.187-2.58-5.768-5.764-5.768C821.509,851.716,818.928,854.297,818.928,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,857.483c0,3.182,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.187-2.58-5.768-5.765-5.768C803.099,851.716,800.517,854.297,800.517,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,857.483c0,3.182,2.58,5.764,5.766,5.764
					c3.183,0,5.764-2.582,5.764-5.764c0-3.187-2.581-5.768-5.764-5.768C784.688,851.716,782.107,854.297,782.107,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,857.483c0,3.182,2.582,5.764,5.766,5.764
					c3.185,0,5.764-2.582,5.764-5.764c0-3.187-2.579-5.768-5.764-5.768C766.278,851.716,763.696,854.297,763.696,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,857.483c0,3.182,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C747.869,851.716,745.286,854.297,745.286,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,857.483c0,3.182,2.581,5.764,5.765,5.764s5.763-2.582,5.763-5.764
					c0-3.187-2.579-5.768-5.763-5.768S726.876,854.297,726.876,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,857.483c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.582,5.766-5.764c0-3.187-2.581-5.768-5.766-5.768C711.047,851.716,708.465,854.297,708.465,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,857.483c0,3.182,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C692.638,851.716,690.055,854.297,690.055,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,857.483c0,3.182,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.187-2.58-5.768-5.764-5.768C674.227,851.716,671.645,854.297,671.645,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,857.483c0,3.182,2.582,5.764,5.765,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.187-2.58-5.768-5.764-5.768C655.817,851.716,653.235,854.297,653.235,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,857.483c0,3.182,2.581,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C637.406,851.716,634.825,854.297,634.825,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,857.483c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.187-2.58-5.768-5.765-5.768C618.996,851.716,616.414,854.297,616.414,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,857.483c0,3.182,2.581,5.764,5.765,5.764
					c3.183,0,5.765-2.582,5.765-5.764c0-3.187-2.582-5.768-5.765-5.768C600.585,851.716,598.004,854.297,598.004,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,857.483c0,3.182,2.582,5.764,5.766,5.764s5.765-2.582,5.765-5.764
					c0-3.187-2.581-5.768-5.765-5.768S579.593,854.297,579.593,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,857.483c0,3.182,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.582,5.763-5.764c0-3.187-2.58-5.768-5.763-5.768C563.766,851.716,561.184,854.297,561.184,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.187-2.58-5.768-5.764-5.768C545.354,851.716,542.773,854.297,542.773,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,857.483c0,3.182,2.582,5.764,5.766,5.764s5.764-2.582,5.764-5.764
					c0-3.187-2.58-5.768-5.764-5.768S524.362,854.297,524.362,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,857.483c0,3.182,2.581,5.764,5.765,5.764
					c3.183,0,5.764-2.582,5.764-5.764c0-3.187-2.581-5.768-5.764-5.768C508.534,851.716,505.953,854.297,505.953,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,857.483c0,3.182,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C490.125,851.716,487.542,854.297,487.542,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,857.483c0,3.182,2.582,5.764,5.766,5.764
					c3.183,0,5.763-2.582,5.763-5.764c0-3.187-2.58-5.768-5.763-5.768C471.714,851.716,469.132,854.297,469.132,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,857.483c0,3.182,2.582,5.764,5.766,5.764s5.764-2.582,5.764-5.764
					c0-3.187-2.58-5.768-5.764-5.768S450.721,854.297,450.721,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,857.483c0,3.182,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.187-2.58-5.768-5.764-5.768C434.893,851.716,432.311,854.297,432.311,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,857.483c0,3.182,2.581,5.764,5.765,5.764s5.764-2.582,5.764-5.764
					c0-3.187-2.58-5.768-5.764-5.768S413.901,854.297,413.901,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,857.483c0,3.182,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C398.073,851.716,395.49,854.297,395.49,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,857.483c0,3.182,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.582,5.764-5.764c0-3.187-2.581-5.768-5.764-5.768C379.662,851.716,377.08,854.297,377.08,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,857.483c0,3.182,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.187-2.58-5.768-5.765-5.768C361.251,851.716,358.67,854.297,358.67,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,857.483c0,3.182,2.581,5.764,5.764,5.764
					c3.185,0,5.764-2.582,5.764-5.764c0-3.187-2.579-5.768-5.764-5.768C342.842,851.716,340.261,854.297,340.261,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.582,5.764-5.764c0-3.187-2.581-5.768-5.764-5.768C324.431,851.716,321.85,854.297,321.85,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,875.891c0,3.188,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.578,5.766-5.766c0-3.182-2.581-5.764-5.766-5.764C987.202,870.127,984.62,872.709,984.62,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C968.791,870.127,966.21,872.709,966.21,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C950.381,870.127,947.8,872.709,947.8,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,875.891c0,3.188,2.582,5.766,5.766,5.766s5.765-2.578,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S929.389,872.709,929.389,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,875.891c0,3.188,2.581,5.766,5.765,5.766s5.765-2.578,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S910.979,872.709,910.979,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,875.891c0,3.188,2.582,5.766,5.766,5.766s5.765-2.578,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S892.568,872.709,892.568,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,875.891c0,3.188,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C876.739,870.127,874.159,872.709,874.159,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C858.329,870.127,855.748,872.709,855.748,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,875.891c0,3.188,2.581,5.766,5.765,5.766s5.766-2.578,5.766-5.766
					c0-3.182-2.582-5.764-5.766-5.764S837.338,872.709,837.338,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C821.509,870.127,818.928,872.709,818.928,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,875.891c0,3.188,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.578,5.765-5.766c0-3.182-2.58-5.764-5.765-5.764C803.099,870.127,800.517,872.709,800.517,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,875.891c0,3.188,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.578,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C784.688,870.127,782.107,872.709,782.107,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,875.891c0,3.188,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.578,5.764-5.766c0-3.182-2.579-5.764-5.764-5.764C766.278,870.127,763.696,872.709,763.696,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,875.891c0,3.188,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C747.869,870.127,745.286,872.709,745.286,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,875.891c0,3.188,2.581,5.766,5.765,5.766s5.763-2.578,5.763-5.766
					c0-3.182-2.579-5.764-5.763-5.764S726.876,872.709,726.876,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,875.891c0,3.188,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.578,5.766-5.766c0-3.182-2.581-5.764-5.766-5.764C711.047,870.127,708.465,872.709,708.465,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,875.891c0,3.188,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C692.638,870.127,690.055,872.709,690.055,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,875.891c0,3.188,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C674.227,870.127,671.645,872.709,671.645,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,875.891c0,3.188,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C655.817,870.127,653.235,872.709,653.235,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,875.891c0,3.188,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C637.406,870.127,634.825,872.709,634.825,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,875.891c0,3.188,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.578,5.765-5.766c0-3.182-2.58-5.764-5.765-5.764C618.996,870.127,616.414,872.709,616.414,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,875.891c0,3.188,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.578,5.765-5.766c0-3.182-2.582-5.764-5.765-5.764C600.585,870.127,598.004,872.709,598.004,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,875.891c0,3.188,2.582,5.766,5.766,5.766s5.765-2.578,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S579.593,872.709,579.593,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,875.891c0,3.188,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.578,5.763-5.766c0-3.182-2.58-5.764-5.763-5.764C563.766,870.127,561.184,872.709,561.184,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C545.354,870.127,542.773,872.709,542.773,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,875.891c0,3.188,2.582,5.766,5.766,5.766s5.764-2.578,5.764-5.766
					c0-3.182-2.58-5.764-5.764-5.764S524.362,872.709,524.362,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,875.891c0,3.188,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.578,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C508.534,870.127,505.953,872.709,505.953,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,875.891c0,3.188,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C490.125,870.127,487.542,872.709,487.542,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,875.891c0,3.188,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.578,5.763-5.766c0-3.182-2.58-5.764-5.763-5.764C471.714,870.127,469.132,872.709,469.132,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,875.891c0,3.188,2.582,5.766,5.766,5.766s5.764-2.578,5.764-5.766
					c0-3.182-2.58-5.764-5.764-5.764S450.721,872.709,450.721,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,875.891c0,3.188,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C434.893,870.127,432.311,872.709,432.311,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,875.891c0,3.188,2.581,5.766,5.765,5.766s5.764-2.578,5.764-5.766
					c0-3.182-2.58-5.764-5.764-5.764S413.901,872.709,413.901,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,875.891c0,3.188,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C398.073,870.127,395.49,872.709,395.49,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,875.891c0,3.188,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.578,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C379.662,870.127,377.08,872.709,377.08,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,875.891c0,3.188,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.578,5.765-5.766c0-3.182-2.58-5.764-5.765-5.764C361.251,870.127,358.67,872.709,358.67,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,875.891c0,3.188,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.578,5.764-5.766c0-3.182-2.579-5.764-5.764-5.764C342.842,870.127,340.261,872.709,340.261,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.578,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C324.431,870.127,321.85,872.709,321.85,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,875.891c0,3.188,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.578,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C306.022,870.127,303.439,872.709,303.439,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,875.891c0,3.188,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C287.611,870.127,285.029,872.709,285.029,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,875.891c0,3.188,2.583,5.766,5.767,5.766s5.764-2.578,5.764-5.766
					c0-3.182-2.58-5.764-5.764-5.764S266.618,872.709,266.618,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,894.303c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.186-2.581-5.766-5.766-5.766C987.202,888.537,984.62,891.117,984.62,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,894.303c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C968.791,888.537,966.21,891.117,966.21,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,894.303c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C950.381,888.537,947.8,891.117,947.8,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,894.303c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.186-2.581-5.766-5.765-5.766S929.389,891.117,929.389,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,894.303c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.186-2.581-5.766-5.765-5.766S910.979,891.117,910.979,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,894.303c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.186-2.581-5.766-5.765-5.766S892.568,891.117,892.568,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,894.303c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C876.739,888.537,874.159,891.117,874.159,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,894.303c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C858.329,888.537,855.748,891.117,855.748,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,894.303c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					c0-3.186-2.582-5.766-5.766-5.766S837.338,891.117,837.338,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,894.303c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C821.509,888.537,818.928,891.117,818.928,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.186-2.58-5.766-5.765-5.766C803.099,888.537,800.517,891.117,800.517,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,894.303c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.186-2.581-5.766-5.764-5.766C784.688,888.537,782.107,891.117,782.107,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.186-2.579-5.766-5.764-5.766C766.278,888.537,763.696,891.117,763.696,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,894.303c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C747.869,888.537,745.286,891.117,745.286,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,894.303c0,3.184,2.581,5.766,5.765,5.766s5.763-2.582,5.763-5.766
					c0-3.186-2.579-5.766-5.763-5.766S726.876,891.117,726.876,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,894.303c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.186-2.581-5.766-5.766-5.766C711.047,888.537,708.465,891.117,708.465,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,894.303c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C692.638,888.537,690.055,891.117,690.055,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C674.227,888.537,671.645,891.117,671.645,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,894.303c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C655.817,888.537,653.235,891.117,653.235,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,894.303c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C637.406,888.537,634.825,891.117,634.825,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,894.303c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.186-2.58-5.766-5.765-5.766C618.996,888.537,616.414,891.117,616.414,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,894.303c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.186-2.582-5.766-5.765-5.766C600.585,888.537,598.004,891.117,598.004,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,894.303c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.186-2.581-5.766-5.765-5.766S579.593,891.117,579.593,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.186-2.58-5.766-5.763-5.766C563.766,888.537,561.184,891.117,561.184,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,894.303c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C545.354,888.537,542.773,891.117,542.773,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,894.303c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.186-2.58-5.766-5.764-5.766S524.362,891.117,524.362,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,894.303c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.186-2.581-5.766-5.764-5.766C508.534,888.537,505.953,891.117,505.953,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,894.303c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C490.125,888.537,487.542,891.117,487.542,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.186-2.58-5.766-5.763-5.766C471.714,888.537,469.132,891.117,469.132,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,894.303c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.186-2.58-5.766-5.764-5.766S450.721,891.117,450.721,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C434.893,888.537,432.311,891.117,432.311,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,894.303c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					c0-3.186-2.58-5.766-5.764-5.766S413.901,891.117,413.901,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,894.303c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C398.073,888.537,395.49,891.117,395.49,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.186-2.581-5.766-5.764-5.766C379.662,888.537,377.08,891.117,377.08,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,894.303c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.186-2.58-5.766-5.765-5.766C361.251,888.537,358.67,891.117,358.67,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,894.303c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.186-2.579-5.766-5.764-5.766C342.842,888.537,340.261,891.117,340.261,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,894.303c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.186-2.581-5.766-5.764-5.766C324.431,888.537,321.85,891.117,321.85,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,894.303c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.186-2.58-5.766-5.764-5.766C306.022,888.537,303.439,891.117,303.439,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,894.303c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C287.611,888.537,285.029,891.117,285.029,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,894.303c0,3.184,2.583,5.766,5.767,5.766s5.764-2.582,5.764-5.766
					c0-3.186-2.58-5.766-5.764-5.766S266.618,891.117,266.618,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,912.712c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.764-5.766-5.764C987.202,906.948,984.62,909.528,984.62,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,912.712c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C968.791,906.948,966.21,909.528,966.21,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,912.712c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C950.381,906.948,947.8,909.528,947.8,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,912.712c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.764-5.765-5.764S929.389,909.528,929.389,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,912.712c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.764-5.765-5.764S910.979,909.528,910.979,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,912.712c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.764-5.765-5.764S892.568,909.528,892.568,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,912.712c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C876.739,906.948,874.159,909.528,874.159,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,912.712c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C858.329,906.948,855.748,909.528,855.748,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,912.712c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.764-5.766-5.764S837.338,909.528,837.338,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,912.712c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C821.509,906.948,818.928,909.528,818.928,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,912.712c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.764-5.765-5.764C803.099,906.948,800.517,909.528,800.517,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,912.712c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.764-5.764-5.764C784.688,906.948,782.107,909.528,782.107,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,912.712c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.184-2.579-5.764-5.764-5.764C766.278,906.948,763.696,909.528,763.696,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,912.712c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C747.869,906.948,745.286,909.528,745.286,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,912.712c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.184-2.579-5.764-5.763-5.764S726.876,909.528,726.876,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,912.712c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.764-5.766-5.764C711.047,906.948,708.465,909.528,708.465,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,912.712c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C692.638,906.948,690.055,909.528,690.055,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,912.712c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C674.227,906.948,671.645,909.528,671.645,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,912.712c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C655.817,906.948,653.235,909.528,653.235,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,912.712c0,3.185,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C637.406,906.948,634.825,909.528,634.825,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,912.712c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.764-5.765-5.764C618.996,906.948,616.414,909.528,616.414,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,912.712c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.764-5.765-5.764C600.585,906.948,598.004,909.528,598.004,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,912.712c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.764-5.765-5.764S579.593,909.528,579.593,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,912.712c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.184-2.58-5.764-5.763-5.764C563.766,906.948,561.184,909.528,561.184,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,912.712c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C545.354,906.948,542.773,909.528,542.773,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,912.712c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.764-5.764-5.764S524.362,909.528,524.362,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,912.712c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.764-5.764-5.764C508.534,906.948,505.953,909.528,505.953,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,912.712c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C490.125,906.948,487.542,909.528,487.542,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,912.712c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.184-2.58-5.764-5.763-5.764C471.714,906.948,469.132,909.528,469.132,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,912.712c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.764-5.764-5.764S450.721,909.528,450.721,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,912.712c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C434.893,906.948,432.311,909.528,432.311,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,912.712c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.764-5.764-5.764S413.901,909.528,413.901,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,912.712c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C398.073,906.948,395.49,909.528,395.49,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,912.712c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.764-5.764-5.764C379.662,906.948,377.08,909.528,377.08,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,912.712c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.764-5.765-5.764C361.251,906.948,358.67,909.528,358.67,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,912.712c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.184-2.579-5.764-5.764-5.764C342.842,906.948,340.261,909.528,340.261,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,912.712c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.764-5.764-5.764C324.431,906.948,321.85,909.528,321.85,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,912.712c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.764-5.764-5.764C306.022,906.948,303.439,909.528,303.439,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,912.712c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.764-5.765-5.764C287.611,906.948,285.029,909.528,285.029,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,931.123c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.765-5.766-5.765C987.202,925.358,984.62,927.939,984.62,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,931.123c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C968.791,925.358,966.21,927.939,966.21,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,931.123c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C950.381,925.358,947.8,927.939,947.8,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,931.123c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S929.389,927.939,929.389,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,931.123c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S910.979,927.939,910.979,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,931.123c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S892.568,927.939,892.568,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,931.123c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C876.739,925.358,874.159,927.939,874.159,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,931.123c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C858.329,925.358,855.748,927.939,855.748,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,931.123c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.765-5.766-5.765S837.338,927.939,837.338,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,931.123c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C821.509,925.358,818.928,927.939,818.928,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,931.123c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.765-5.765-5.765C803.099,925.358,800.517,927.939,800.517,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,931.123c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.765-5.764-5.765C784.688,925.358,782.107,927.939,782.107,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,931.123c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.184-2.579-5.765-5.764-5.765C766.278,925.358,763.696,927.939,763.696,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,931.123c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C747.869,925.358,745.286,927.939,745.286,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,931.123c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.184-2.579-5.765-5.763-5.765S726.876,927.939,726.876,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,931.123c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.765-5.766-5.765C711.047,925.358,708.465,927.939,708.465,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,931.123c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C692.638,925.358,690.055,927.939,690.055,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,931.123c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C674.227,925.358,671.645,927.939,671.645,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,931.123c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C655.817,925.358,653.235,927.939,653.235,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,931.123c0,3.185,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C637.406,925.358,634.825,927.939,634.825,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,931.123c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.765-5.765-5.765C618.996,925.358,616.414,927.939,616.414,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,931.123c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.765-5.765-5.765C600.585,925.358,598.004,927.939,598.004,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,931.123c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.765-5.765-5.765S579.593,927.939,579.593,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,931.123c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.184-2.58-5.765-5.763-5.765C563.766,925.358,561.184,927.939,561.184,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,931.123c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C545.354,925.358,542.773,927.939,542.773,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,931.123c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.765-5.764-5.765S524.362,927.939,524.362,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,931.123c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.765-5.764-5.765C508.534,925.358,505.953,927.939,505.953,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,931.123c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C490.125,925.358,487.542,927.939,487.542,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,931.123c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.184-2.58-5.765-5.763-5.765C471.714,925.358,469.132,927.939,469.132,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,931.123c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.765-5.764-5.765S450.721,927.939,450.721,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,931.123c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C434.893,925.358,432.311,927.939,432.311,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,931.123c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.765-5.764-5.765S413.901,927.939,413.901,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,931.123c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C398.073,925.358,395.49,927.939,395.49,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,931.123c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.765-5.764-5.765C379.662,925.358,377.08,927.939,377.08,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,931.123c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.765-5.765-5.765C361.251,925.358,358.67,927.939,358.67,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,931.123c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.184-2.579-5.765-5.764-5.765C342.842,925.358,340.261,927.939,340.261,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,931.123c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.765-5.764-5.765C324.431,925.358,321.85,927.939,321.85,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,931.123c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.765-5.764-5.765C306.022,925.358,303.439,927.939,303.439,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,949.533c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.185-2.581-5.764-5.766-5.764C987.202,943.77,984.62,946.349,984.62,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,949.533c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.764-5.765-5.764C968.791,943.77,966.21,946.349,966.21,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,949.533c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.764-5.764-5.764C950.381,943.77,947.8,946.349,947.8,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,949.533c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.764-5.765-5.764S929.389,946.349,929.389,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,949.533c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.764-5.765-5.764S910.979,946.349,910.979,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,949.533c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.764-5.765-5.764S892.568,946.349,892.568,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,949.533c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.764-5.765-5.764C876.739,943.77,874.159,946.349,874.159,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,949.533c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.764-5.764-5.764C858.329,943.77,855.748,946.349,855.748,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,949.533c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					c0-3.185-2.582-5.764-5.766-5.764S837.338,946.349,837.338,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,949.533c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.764-5.764-5.764C821.509,943.77,818.928,946.349,818.928,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,949.533c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.764-5.765-5.764C803.099,943.77,800.517,946.349,800.517,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,949.533c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.764-5.764-5.764C784.688,943.77,782.107,946.349,782.107,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,949.533c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.764-5.764-5.764C766.278,943.77,763.696,946.349,763.696,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,949.533c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.764-5.765-5.764C747.869,943.77,745.286,946.349,745.286,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,949.533c0,3.184,2.581,5.766,5.765,5.766s5.763-2.582,5.763-5.766
					c0-3.185-2.579-5.764-5.763-5.764S726.876,946.349,726.876,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,949.533c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.185-2.581-5.764-5.766-5.764C711.047,943.77,708.465,946.349,708.465,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,949.533c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.764-5.765-5.764C692.638,943.77,690.055,946.349,690.055,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,949.533c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.764-5.764-5.764C674.227,943.77,671.645,946.349,671.645,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,949.533c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.764-5.764-5.764C655.817,943.77,653.235,946.349,653.235,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,949.533c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.764-5.765-5.764C637.406,943.77,634.825,946.349,634.825,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,949.533c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.764-5.765-5.764C618.996,943.77,616.414,946.349,616.414,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,949.533c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.764-5.765-5.764C600.585,943.77,598.004,946.349,598.004,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,949.533c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.764-5.765-5.764S579.593,946.349,579.593,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,949.533c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.185-2.58-5.764-5.763-5.764C563.766,943.77,561.184,946.349,561.184,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,949.533c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.764-5.764-5.764C545.354,943.77,542.773,946.349,542.773,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,949.533c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.764-5.764-5.764S524.362,946.349,524.362,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,949.533c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.764-5.764-5.764C508.534,943.77,505.953,946.349,505.953,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,949.533c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.764-5.765-5.764C490.125,943.77,487.542,946.349,487.542,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,949.533c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.185-2.58-5.764-5.763-5.764C471.714,943.77,469.132,946.349,469.132,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,949.533c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.764-5.764-5.764S450.721,946.349,450.721,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,949.533c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.764-5.764-5.764C434.893,943.77,432.311,946.349,432.311,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,949.533c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.764-5.764-5.764S413.901,946.349,413.901,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,949.533c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.764-5.765-5.764C398.073,943.77,395.49,946.349,395.49,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,949.533c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.764-5.764-5.764C379.662,943.77,377.08,946.349,377.08,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,949.533c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.764-5.765-5.764C361.251,943.77,358.67,946.349,358.67,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,949.533c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.764-5.764-5.764C342.842,943.77,340.261,946.349,340.261,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,949.533c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.764-5.764-5.764C324.431,943.77,321.85,946.349,321.85,949.533"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,967.942c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C968.791,962.179,966.21,964.761,966.21,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,967.942c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C950.381,962.179,947.8,964.761,947.8,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,967.942c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S929.389,964.761,929.389,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,967.942c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S910.979,964.761,910.979,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,967.942c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S892.568,964.761,892.568,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,967.942c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C876.739,962.179,874.159,964.761,874.159,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,967.942c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C858.329,962.179,855.748,964.761,855.748,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,967.942c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.182-2.582-5.764-5.766-5.764S837.338,964.761,837.338,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,967.942c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C821.509,962.179,818.928,964.761,818.928,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,967.942c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.764-5.765-5.764C803.099,962.179,800.517,964.761,800.517,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,967.942c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C784.688,962.179,782.107,964.761,782.107,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,967.942c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.182-2.579-5.764-5.764-5.764C766.278,962.179,763.696,964.761,763.696,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,967.942c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C747.869,962.179,745.286,964.761,745.286,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,967.942c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.182-2.579-5.764-5.763-5.764S726.876,964.761,726.876,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,967.942c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.182-2.581-5.764-5.766-5.764C711.047,962.179,708.465,964.761,708.465,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,967.942c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C692.638,962.179,690.055,964.761,690.055,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,967.942c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C674.227,962.179,671.645,964.761,671.645,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,967.942c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C655.817,962.179,653.235,964.761,653.235,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,967.942c0,3.185,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C637.406,962.179,634.825,964.761,634.825,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,967.942c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.764-5.765-5.764C618.996,962.179,616.414,964.761,616.414,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,967.942c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.764-5.765-5.764C600.585,962.179,598.004,964.761,598.004,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,967.942c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.764-5.765-5.764S579.593,964.761,579.593,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,967.942c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.182-2.58-5.764-5.763-5.764C563.766,962.179,561.184,964.761,561.184,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,967.942c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C545.354,962.179,542.773,964.761,542.773,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,967.942c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.182-2.58-5.764-5.764-5.764S524.362,964.761,524.362,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,967.942c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C508.534,962.179,505.953,964.761,505.953,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,967.942c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C490.125,962.179,487.542,964.761,487.542,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,967.942c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.182-2.58-5.764-5.763-5.764C471.714,962.179,469.132,964.761,469.132,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,967.942c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.182-2.58-5.764-5.764-5.764S450.721,964.761,450.721,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,967.942c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.764-5.764-5.764C434.893,962.179,432.311,964.761,432.311,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,967.942c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.182-2.58-5.764-5.764-5.764S413.901,964.761,413.901,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,967.942c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C398.073,962.179,395.49,964.761,395.49,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,967.942c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C379.662,962.179,377.08,964.761,377.08,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,967.942c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.764-5.765-5.764C361.251,962.179,358.67,964.761,358.67,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,967.942c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.182-2.579-5.764-5.764-5.764C342.842,962.179,340.261,964.761,340.261,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,967.942c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.764-5.764-5.764C324.431,962.179,321.85,964.761,321.85,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,986.354c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C968.791,980.589,966.21,983.17,966.21,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,986.354c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C950.381,980.589,947.8,983.17,947.8,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,986.354c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					c0-3.185-2.581-5.766-5.765-5.766S929.389,983.17,929.389,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,986.354c0,3.184,2.581,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					c0-3.185-2.581-5.766-5.765-5.766S910.979,983.17,910.979,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,986.354c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					c0-3.185-2.581-5.766-5.765-5.766S892.568,983.17,892.568,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,986.354c0,3.184,2.58,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C876.739,980.589,874.159,983.17,874.159,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,986.354c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C858.329,980.589,855.748,983.17,855.748,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,986.354c0,3.184,2.581,5.765,5.765,5.765s5.766-2.581,5.766-5.765
					c0-3.185-2.582-5.766-5.766-5.766S837.338,983.17,837.338,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,986.354c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C821.509,980.589,818.928,983.17,818.928,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,986.354c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765c0-3.185-2.58-5.766-5.765-5.766C803.099,980.589,800.517,983.17,800.517,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,986.354c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765c0-3.185-2.581-5.766-5.764-5.766C784.688,980.589,782.107,983.17,782.107,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,986.354c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765c0-3.185-2.579-5.766-5.764-5.766C766.278,980.589,763.696,983.17,763.696,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,986.354c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C747.869,980.589,745.286,983.17,745.286,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,986.354c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					c0-3.185-2.579-5.766-5.763-5.766S726.876,983.17,726.876,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,986.354c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765c0-3.185-2.581-5.766-5.766-5.766C711.047,980.589,708.465,983.17,708.465,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,986.354c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C692.638,980.589,690.055,983.17,690.055,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,986.354c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C674.227,980.589,671.645,983.17,671.645,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,986.354c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C655.817,980.589,653.235,983.17,653.235,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,986.354c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C637.406,980.589,634.825,983.17,634.825,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,986.354c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765c0-3.185-2.58-5.766-5.765-5.766C618.996,980.589,616.414,983.17,616.414,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,986.354c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.765-2.581,5.765-5.765c0-3.185-2.582-5.766-5.765-5.766C600.585,980.589,598.004,983.17,598.004,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,986.354c0,3.184,2.582,5.765,5.766,5.765s5.765-2.581,5.765-5.765
					c0-3.185-2.581-5.766-5.765-5.766S579.593,983.17,579.593,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,986.354c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765c0-3.185-2.58-5.766-5.763-5.766C563.766,980.589,561.184,983.17,561.184,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,986.354c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C545.354,980.589,542.773,983.17,542.773,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,986.354c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					c0-3.185-2.58-5.766-5.764-5.766S524.362,983.17,524.362,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,986.354c0,3.184,2.581,5.765,5.765,5.765
					c3.183,0,5.764-2.581,5.764-5.765c0-3.185-2.581-5.766-5.764-5.766C508.534,980.589,505.953,983.17,505.953,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,986.354c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C490.125,980.589,487.542,983.17,487.542,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,986.354c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.763-2.581,5.763-5.765c0-3.185-2.58-5.766-5.763-5.766C471.714,980.589,469.132,983.17,469.132,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,986.354c0,3.184,2.582,5.765,5.766,5.765s5.764-2.581,5.764-5.765
					c0-3.185-2.58-5.766-5.764-5.766S450.721,983.17,450.721,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,986.354c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765c0-3.185-2.58-5.766-5.764-5.766C434.893,980.589,432.311,983.17,432.311,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,986.354c0,3.184,2.581,5.765,5.765,5.765s5.764-2.581,5.764-5.765
					c0-3.185-2.58-5.766-5.764-5.766S413.901,983.17,413.901,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,986.354c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765c0-3.185-2.581-5.766-5.765-5.766C398.073,980.589,395.49,983.17,395.49,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,986.354c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765c0-3.185-2.581-5.766-5.764-5.766C379.662,980.589,377.08,983.17,377.08,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,986.354c0,3.184,2.581,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765c0-3.185-2.58-5.766-5.765-5.766C361.251,980.589,358.67,983.17,358.67,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,986.354c0,3.184,2.581,5.765,5.764,5.765
					c3.185,0,5.764-2.581,5.764-5.765c0-3.185-2.579-5.766-5.764-5.766C342.842,980.589,340.261,983.17,340.261,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,986.354c0,3.184,2.581,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765c0-3.185-2.581-5.766-5.764-5.766C324.431,980.589,321.85,983.17,321.85,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766S975.159,999,971.976,999C968.791,999,966.21,1001.58,966.21,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.764-5.764-5.764C950.381,999,947.8,1001.58,947.8,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1004.764c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					S938.338,999,935.154,999S929.389,1001.58,929.389,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1004.764c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					S919.928,999,916.744,999S910.979,1001.58,910.979,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1004.764c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					S901.518,999,898.334,999S892.568,1001.58,892.568,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1004.764c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766S883.107,999,879.924,999C876.739,999,874.159,1001.58,874.159,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.764-5.764-5.764C858.329,999,855.748,1001.58,855.748,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1004.764c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					S846.286,999,843.103,999S837.338,1001.58,837.338,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.764-5.764-5.764C821.509,999,818.928,1001.58,818.928,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.764-5.765-5.764C803.099,999,800.517,1001.58,800.517,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1004.764c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766S791.056,999,787.873,999C784.688,999,782.107,1001.58,782.107,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766S772.646,999,769.462,999C766.278,999,763.696,1001.58,763.696,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,1004.764c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766S754.235,999,751.052,999C747.869,999,745.286,1001.58,745.286,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1004.764c0,3.184,2.581,5.766,5.765,5.766s5.763-2.582,5.763-5.766
					S735.826,999,732.642,999S726.876,1001.58,726.876,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1004.764c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766S717.415,999,714.23,999C711.047,999,708.465,1001.58,708.465,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1004.764c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766S699.005,999,695.821,999C692.638,999,690.055,1001.58,690.055,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.764-5.764-5.764C674.227,999,671.645,1001.58,671.645,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,1004.764c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766S662.185,999,659,999C655.817,999,653.235,1001.58,653.235,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1004.764c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766S643.773,999,640.59,999C637.406,999,634.825,1001.58,634.825,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,1004.764c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766S606.952,999,603.769,999C600.585,999,598.004,1001.58,598.004,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,1004.764c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					S588.543,999,585.359,999S579.593,1001.58,579.593,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766S570.133,999,566.95,999C563.766,999,561.184,1001.58,561.184,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.764-5.764-5.764C545.354,999,542.773,1001.58,542.773,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1004.764c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.764-5.764-5.764S524.362,1001.58,524.362,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,1004.764c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.582,5.764-5.766S514.901,999,511.718,999C508.534,999,505.953,1001.58,505.953,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,1004.764c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766S496.492,999,493.308,999C490.125,999,487.542,1001.58,487.542,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766s-2.58-5.764-5.763-5.764C471.714,999,469.132,1001.58,469.132,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,1004.764c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.764-5.764-5.764S450.721,1001.58,450.721,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766S441.26,999,438.077,999C434.893,999,432.311,1001.58,432.311,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,1004.764c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.764-5.764-5.764S413.901,1001.58,413.901,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,1004.764c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766S404.439,999,401.256,999C398.073,999,395.49,1001.58,395.49,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766S386.029,999,382.846,999C379.662,999,377.08,1001.58,377.08,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1004.764c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.764-5.765-5.764C361.251,999,358.67,1001.58,358.67,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1004.764c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766S349.209,999,346.025,999C342.842,999,340.261,1001.58,340.261,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766S330.799,999,327.616,999C324.431,999,321.85,1001.58,321.85,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1004.764c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.764-5.765-5.764C177.149,999,174.567,1001.58,174.567,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.582,5.763-5.766S165.105,999,161.923,999C158.738,999,156.157,1001.58,156.157,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C968.791,1017.41,966.21,1019.989,966.21,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765C950.381,1017.41,947.8,1019.989,947.8,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1023.175c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.186-2.581-5.765-5.765-5.765S929.389,1019.989,929.389,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1023.175c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.186-2.581-5.765-5.765-5.765S910.979,1019.989,910.979,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1023.175c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.186-2.581-5.765-5.765-5.765S892.568,1019.989,892.568,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1023.175c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C876.739,1017.41,874.159,1019.989,874.159,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765C858.329,1017.41,855.748,1019.989,855.748,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1023.175c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.186-2.582-5.765-5.766-5.765S837.338,1019.989,837.338,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765C821.509,1017.41,818.928,1019.989,818.928,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.186-2.58-5.765-5.765-5.765C803.099,1017.41,800.517,1019.989,800.517,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1023.175c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.186-2.581-5.765-5.764-5.765C784.688,1017.41,782.107,1019.989,782.107,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.186-2.579-5.765-5.764-5.765C766.278,1017.41,763.696,1019.989,763.696,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,1023.175c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C747.869,1017.41,745.286,1019.989,745.286,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1023.175c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.186-2.579-5.765-5.763-5.765S726.876,1019.989,726.876,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1023.175c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.186-2.581-5.765-5.766-5.765C711.047,1017.41,708.465,1019.989,708.465,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1023.175c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C692.638,1017.41,690.055,1019.989,690.055,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765C674.227,1017.41,671.645,1019.989,671.645,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,1023.175c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.186-2.582-5.765-5.765-5.765C600.585,1017.41,598.004,1019.989,598.004,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,1023.175c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.186-2.581-5.765-5.765-5.765S579.593,1019.989,579.593,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.186-2.58-5.765-5.763-5.765C563.766,1017.41,561.184,1019.989,561.184,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765C545.354,1017.41,542.773,1019.989,542.773,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1023.175c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.186-2.58-5.765-5.764-5.765S524.362,1019.989,524.362,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,1023.175c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.186-2.581-5.765-5.764-5.765C508.534,1017.41,505.953,1019.989,505.953,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,1023.175c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C490.125,1017.41,487.542,1019.989,487.542,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.186-2.58-5.765-5.763-5.765C471.714,1017.41,469.132,1019.989,469.132,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,1023.175c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.186-2.58-5.765-5.764-5.765S450.721,1019.989,450.721,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765C434.893,1017.41,432.311,1019.989,432.311,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,1023.175c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.186-2.58-5.765-5.764-5.765S413.901,1019.989,413.901,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,1023.175c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C398.073,1017.41,395.49,1019.989,395.49,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.186-2.581-5.765-5.764-5.765C379.662,1017.41,377.08,1019.989,377.08,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1023.175c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.186-2.58-5.765-5.765-5.765C361.251,1017.41,358.67,1019.989,358.67,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1023.175c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.186-2.579-5.765-5.764-5.765C342.842,1017.41,340.261,1019.989,340.261,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.186-2.581-5.765-5.764-5.765C324.431,1017.41,321.85,1019.989,321.85,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1023.175c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765C306.022,1017.41,303.439,1019.989,303.439,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1023.175c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C232.38,1017.41,229.798,1019.989,229.798,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1023.175c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C213.97,1017.41,211.388,1019.989,211.388,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.186-2.581-5.765-5.764-5.765C195.56,1017.41,192.978,1019.989,192.978,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1023.175c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.186-2.58-5.765-5.765-5.765C177.149,1017.41,174.567,1019.989,174.567,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.581,5.763-5.766c0-3.186-2.581-5.765-5.763-5.765C158.738,1017.41,156.157,1019.989,156.157,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1023.175c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.186-2.581-5.765-5.765-5.765S137.747,1019.989,137.747,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C968.791,1035.819,966.21,1038.4,966.21,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C950.381,1035.819,947.8,1038.4,947.8,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1041.585c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S929.389,1038.4,929.389,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1041.585c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S910.979,1038.4,910.979,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1041.585c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S892.568,1038.4,892.568,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1041.585c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C876.739,1035.819,874.159,1038.4,874.159,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C858.329,1035.819,855.748,1038.4,855.748,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1041.585c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					c0-3.185-2.582-5.766-5.766-5.766S837.338,1038.4,837.338,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C821.509,1035.819,818.928,1038.4,818.928,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C803.099,1035.819,800.517,1038.4,800.517,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1041.585c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C784.688,1035.819,782.107,1038.4,782.107,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C766.278,1035.819,763.696,1038.4,763.696,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,1041.585c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C747.869,1035.819,745.286,1038.4,745.286,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1041.585c0,3.184,2.581,5.766,5.765,5.766s5.763-2.582,5.763-5.766
					c0-3.185-2.579-5.766-5.763-5.766S726.876,1038.4,726.876,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.185-2.581-5.766-5.766-5.766C711.047,1035.819,708.465,1038.4,708.465,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1041.585c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C692.638,1035.819,690.055,1038.4,690.055,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C618.996,1035.819,616.414,1038.4,616.414,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,1041.585c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C600.585,1035.819,598.004,1038.4,598.004,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,1041.585c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S579.593,1038.4,579.593,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.185-2.58-5.766-5.763-5.766C563.766,1035.819,561.184,1038.4,561.184,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M505.953,1041.585c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C508.534,1035.819,505.953,1038.4,505.953,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,1041.585c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C490.125,1035.819,487.542,1038.4,487.542,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.582,5.763-5.766c0-3.185-2.58-5.766-5.763-5.766C471.714,1035.819,469.132,1038.4,469.132,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,1041.585c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S450.721,1038.4,450.721,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M432.311,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C434.893,1035.819,432.311,1038.4,432.311,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,1041.585c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S413.901,1038.4,413.901,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,1041.585c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C398.073,1035.819,395.49,1038.4,395.49,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C379.662,1035.819,377.08,1038.4,377.08,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1041.585c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C361.251,1035.819,358.67,1038.4,358.67,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1041.585c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C342.842,1035.819,340.261,1038.4,340.261,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C324.431,1035.819,321.85,1038.4,321.85,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1041.585c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C306.022,1035.819,303.439,1038.4,303.439,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C287.611,1035.819,285.029,1038.4,285.029,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1041.585c0,3.184,2.583,5.766,5.767,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S266.618,1038.4,266.618,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1041.585c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S248.209,1038.4,248.209,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C232.38,1035.819,229.798,1038.4,229.798,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C213.97,1035.819,211.388,1038.4,211.388,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C195.56,1035.819,192.978,1038.4,192.978,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C177.149,1035.819,174.567,1038.4,174.567,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.582,5.763-5.766c0-3.185-2.581-5.766-5.763-5.766C158.738,1035.819,156.157,1038.4,156.157,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1041.585c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S137.747,1038.4,137.747,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.182-2.581-5.766-5.766-5.766C987.202,1054.229,984.62,1056.813,984.62,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C968.791,1054.229,966.21,1056.813,966.21,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.766-5.764-5.766C950.381,1054.229,947.8,1056.813,947.8,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1059.994c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.766-5.765-5.766S929.389,1056.813,929.389,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1059.994c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.766-5.765-5.766S910.979,1056.813,910.979,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1059.994c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.766-5.765-5.766S892.568,1056.813,892.568,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1059.994c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C876.739,1054.229,874.159,1056.813,874.159,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.766-5.764-5.766C858.329,1054.229,855.748,1056.813,855.748,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1059.994c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.182-2.582-5.766-5.766-5.766S837.338,1056.813,837.338,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.766-5.764-5.766C821.509,1054.229,818.928,1056.813,818.928,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C803.099,1054.229,800.517,1056.813,800.517,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1059.994c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.766-5.764-5.766C784.688,1054.229,782.107,1056.813,782.107,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.182-2.579-5.766-5.764-5.766C766.278,1054.229,763.696,1056.813,763.696,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,1059.994c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C747.869,1054.229,745.286,1056.813,745.286,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1059.994c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.182-2.579-5.766-5.763-5.766S726.876,1056.813,726.876,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.182-2.581-5.766-5.766-5.766C711.047,1054.229,708.465,1056.813,708.465,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1059.994c0,3.185,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C637.406,1054.229,634.825,1056.813,634.825,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C618.996,1054.229,616.414,1056.813,616.414,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,1059.994c0,3.185,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.766-5.765-5.766C600.585,1054.229,598.004,1056.813,598.004,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,1059.994c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.766-5.765-5.766S579.593,1056.813,579.593,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M487.542,1059.994c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C490.125,1054.229,487.542,1056.813,487.542,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M469.132,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.581,5.763-5.766c0-3.182-2.58-5.766-5.763-5.766C471.714,1054.229,469.132,1056.813,469.132,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M450.721,1059.994c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.182-2.58-5.766-5.764-5.766S450.721,1056.813,450.721,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,1059.994c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C398.073,1054.229,395.49,1056.813,395.49,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.766-5.764-5.766C379.662,1054.229,377.08,1056.813,377.08,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1059.994c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C361.251,1054.229,358.67,1056.813,358.67,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1059.994c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.182-2.579-5.766-5.764-5.766C342.842,1054.229,340.261,1056.813,340.261,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.766-5.764-5.766C324.431,1054.229,321.85,1056.813,321.85,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1059.994c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.182-2.58-5.766-5.764-5.766C306.022,1054.229,303.439,1056.813,303.439,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C287.611,1054.229,285.029,1056.813,285.029,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1059.994c0,3.185,2.583,5.766,5.767,5.766s5.764-2.581,5.764-5.766
					c0-3.182-2.58-5.766-5.764-5.766S266.618,1056.813,266.618,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1059.994c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.182-2.58-5.766-5.764-5.766S248.209,1056.813,248.209,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C232.38,1054.229,229.798,1056.813,229.798,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C213.97,1054.229,211.388,1056.813,211.388,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.182-2.581-5.766-5.764-5.766C195.56,1054.229,192.978,1056.813,192.978,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C177.149,1054.229,174.567,1056.813,174.567,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.581,5.763-5.766c0-3.182-2.581-5.766-5.763-5.766C158.738,1054.229,156.157,1056.813,156.157,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1059.994c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.581-5.766-5.765-5.766S137.747,1056.813,137.747,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C121.918,1054.229,119.336,1056.813,119.336,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C968.791,1072.641,966.21,1075.222,966.21,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.584,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C950.381,1072.641,947.8,1075.222,947.8,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1078.406c0,3.182,2.582,5.766,5.766,5.766s5.765-2.584,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S929.389,1075.222,929.389,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1078.406c0,3.182,2.581,5.766,5.765,5.766s5.765-2.584,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S910.979,1075.222,910.979,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1078.406c0,3.182,2.582,5.766,5.766,5.766s5.765-2.584,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S892.568,1075.222,892.568,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1078.406c0,3.182,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C876.739,1072.641,874.159,1075.222,874.159,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.584,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C858.329,1072.641,855.748,1075.222,855.748,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1078.406c0,3.182,2.581,5.766,5.765,5.766s5.766-2.584,5.766-5.766
					c0-3.185-2.582-5.766-5.766-5.766S837.338,1075.222,837.338,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.584,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C821.509,1072.641,818.928,1075.222,818.928,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C803.099,1072.641,800.517,1075.222,800.517,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1078.406c0,3.182,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.584,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C784.688,1072.641,782.107,1075.222,782.107,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.584,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C766.278,1072.641,763.696,1075.222,763.696,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,1078.406c0,3.182,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C747.869,1072.641,745.286,1075.222,745.286,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.584,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C655.817,1072.641,653.235,1075.222,653.235,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1078.406c0,3.182,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C637.406,1072.641,634.825,1075.222,634.825,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C618.996,1072.641,616.414,1075.222,616.414,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,1078.406c0,3.182,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.584,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C600.585,1072.641,598.004,1075.222,598.004,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M579.593,1078.406c0,3.182,2.582,5.766,5.766,5.766s5.765-2.584,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S579.593,1075.222,579.593,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M561.184,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.183,0,5.763-2.584,5.763-5.766c0-3.185-2.58-5.766-5.763-5.766C563.766,1072.641,561.184,1075.222,561.184,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.584,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C545.354,1072.641,542.773,1075.222,542.773,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,1078.406c0,3.182,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C398.073,1072.641,395.49,1075.222,395.49,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.584,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C379.662,1072.641,377.08,1075.222,377.08,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1078.406c0,3.182,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C361.251,1072.641,358.67,1075.222,358.67,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1078.406c0,3.182,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.584,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C342.842,1072.641,340.261,1075.222,340.261,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.584,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C324.431,1072.641,321.85,1075.222,321.85,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1078.406c0,3.182,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.584,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C306.022,1072.641,303.439,1075.222,303.439,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C287.611,1072.641,285.029,1075.222,285.029,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1078.406c0,3.182,2.583,5.766,5.767,5.766s5.764-2.584,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S266.618,1075.222,266.618,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1078.406c0,3.182,2.581,5.766,5.765,5.766s5.764-2.584,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S248.209,1075.222,248.209,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C232.38,1072.641,229.798,1075.222,229.798,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C213.97,1072.641,211.388,1075.222,211.388,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.584,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C195.56,1072.641,192.978,1075.222,192.978,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C177.149,1072.641,174.567,1075.222,174.567,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.584,5.763-5.766c0-3.185-2.581-5.766-5.763-5.766C158.738,1072.641,156.157,1075.222,156.157,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1078.406c0,3.182,2.581,5.766,5.765,5.766s5.765-2.584,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S137.747,1075.222,137.747,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C121.918,1072.641,119.336,1075.222,119.336,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766C950.381,1091.05,947.8,1093.632,947.8,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1096.815c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					s-2.581-5.766-5.765-5.766S929.389,1093.632,929.389,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1096.815c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					s-2.581-5.766-5.765-5.766S910.979,1093.632,910.979,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1096.815c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					s-2.581-5.766-5.765-5.766S892.568,1093.632,892.568,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1096.815c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C876.739,1091.05,874.159,1093.632,874.159,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766C858.329,1091.05,855.748,1093.632,855.748,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1096.815c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					s-2.582-5.766-5.766-5.766S837.338,1093.632,837.338,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766C821.509,1091.05,818.928,1093.632,818.928,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1096.815c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C803.099,1091.05,800.517,1093.632,800.517,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1096.815c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.766-5.764-5.766C784.688,1091.05,782.107,1093.632,782.107,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1096.815c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766C674.227,1091.05,671.645,1093.632,671.645,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766C655.817,1091.05,653.235,1093.632,653.235,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1096.815c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C637.406,1091.05,634.825,1093.632,634.825,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C618.996,1091.05,616.414,1093.632,616.414,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,1096.815c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.766-5.765-5.766C600.585,1091.05,598.004,1093.632,598.004,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766C545.354,1091.05,542.773,1093.632,542.773,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1096.815c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.766-5.764-5.766S524.362,1093.632,524.362,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,1096.815c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C398.073,1091.05,395.49,1093.632,395.49,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1096.815c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.766-5.764-5.766C379.662,1091.05,377.08,1093.632,377.08,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1096.815c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C361.251,1091.05,358.67,1093.632,358.67,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1096.815c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766s-2.579-5.766-5.764-5.766C342.842,1091.05,340.261,1093.632,340.261,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.766-5.764-5.766C324.431,1091.05,321.85,1093.632,321.85,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1096.815c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766C306.022,1091.05,303.439,1093.632,303.439,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C287.611,1091.05,285.029,1093.632,285.029,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1096.815c0,3.184,2.583,5.766,5.767,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.766-5.764-5.766S266.618,1093.632,266.618,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1096.815c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.766-5.764-5.766S248.209,1093.632,248.209,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C232.38,1091.05,229.798,1093.632,229.798,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C213.97,1091.05,211.388,1093.632,211.388,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1096.815c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.766-5.764-5.766C195.56,1091.05,192.978,1093.632,192.978,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C177.149,1091.05,174.567,1093.632,174.567,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.582,5.763-5.766s-2.581-5.766-5.763-5.766C158.738,1091.05,156.157,1093.632,156.157,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1096.815c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					s-2.581-5.766-5.765-5.766S137.747,1093.632,137.747,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C121.918,1091.05,119.336,1093.632,119.336,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.581,5.766-5.764c0-3.186-2.581-5.766-5.766-5.766C987.202,1109.461,984.62,1112.041,984.62,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C968.791,1109.461,966.21,1112.041,966.21,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1115.227c0,3.183,2.582,5.764,5.766,5.764s5.765-2.581,5.765-5.764
					c0-3.186-2.581-5.766-5.765-5.766S929.389,1112.041,929.389,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1115.227c0,3.183,2.582,5.764,5.766,5.764s5.765-2.581,5.765-5.764
					c0-3.186-2.581-5.766-5.765-5.766S892.568,1112.041,892.568,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1115.227c0,3.183,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C876.739,1109.461,874.159,1112.041,874.159,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.186-2.58-5.766-5.764-5.766C858.329,1109.461,855.748,1112.041,855.748,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1115.227c0,3.183,2.581,5.764,5.765,5.764s5.766-2.581,5.766-5.764
					c0-3.186-2.582-5.766-5.766-5.766S837.338,1112.041,837.338,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.186-2.58-5.766-5.764-5.766C821.509,1109.461,818.928,1112.041,818.928,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1115.227c0,3.183,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C803.099,1109.461,800.517,1112.041,800.517,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1115.227c0,3.183,2.58,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.186-2.581-5.766-5.764-5.766C784.688,1109.461,782.107,1112.041,782.107,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.581,5.766-5.764c0-3.186-2.581-5.766-5.766-5.766C711.047,1109.461,708.465,1112.041,708.465,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1115.227c0,3.183,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C692.638,1109.461,690.055,1112.041,690.055,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1115.227c0,3.183,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.186-2.58-5.766-5.764-5.766C674.227,1109.461,671.645,1112.041,671.645,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.186-2.58-5.766-5.764-5.766C655.817,1109.461,653.235,1112.041,653.235,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1115.227c0,3.183,2.581,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C637.406,1109.461,634.825,1112.041,634.825,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C618.996,1109.461,616.414,1112.041,616.414,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.186-2.58-5.766-5.764-5.766C545.354,1109.461,542.773,1112.041,542.773,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1115.227c0,3.183,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.186-2.581-5.766-5.764-5.766C379.662,1109.461,377.08,1112.041,377.08,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1115.227c0,3.183,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C361.251,1109.461,358.67,1112.041,358.67,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1115.227c0,3.183,2.581,5.764,5.764,5.764
					c3.185,0,5.764-2.581,5.764-5.764c0-3.186-2.579-5.766-5.764-5.766C342.842,1109.461,340.261,1112.041,340.261,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.186-2.581-5.766-5.764-5.766C324.431,1109.461,321.85,1112.041,321.85,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1115.227c0,3.183,2.583,5.764,5.766,5.764
					c3.184,0,5.764-2.581,5.764-5.764c0-3.186-2.58-5.766-5.764-5.766C306.022,1109.461,303.439,1112.041,303.439,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C287.611,1109.461,285.029,1112.041,285.029,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1115.227c0,3.183,2.583,5.764,5.767,5.764s5.764-2.581,5.764-5.764
					c0-3.186-2.58-5.766-5.764-5.766S266.618,1112.041,266.618,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1115.227c0,3.183,2.581,5.764,5.765,5.764s5.764-2.581,5.764-5.764
					c0-3.186-2.58-5.766-5.764-5.766S248.209,1112.041,248.209,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C232.38,1109.461,229.798,1112.041,229.798,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C213.97,1109.461,211.388,1112.041,211.388,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1115.227c0,3.183,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.186-2.581-5.766-5.764-5.766C195.56,1109.461,192.978,1112.041,192.978,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C177.149,1109.461,174.567,1112.041,174.567,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.182,0,5.763-2.581,5.763-5.764c0-3.186-2.581-5.766-5.763-5.766C158.738,1109.461,156.157,1112.041,156.157,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1115.227c0,3.183,2.581,5.764,5.765,5.764s5.765-2.581,5.765-5.764
					c0-3.186-2.581-5.766-5.765-5.766S137.747,1112.041,137.747,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C121.918,1109.461,119.336,1112.041,119.336,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M100.926,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.581,5.764-5.764c0-3.186-2.581-5.766-5.764-5.766C103.507,1109.461,100.926,1112.041,100.926,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.185-2.581-5.766-5.766-5.766C987.202,1127.871,984.62,1130.452,984.62,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C968.791,1127.871,966.21,1130.452,966.21,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C950.381,1127.871,947.8,1130.452,947.8,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C858.329,1127.871,855.748,1130.452,855.748,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1133.637c0,3.184,2.581,5.766,5.765,5.766s5.766-2.582,5.766-5.766
					c0-3.185-2.582-5.766-5.766-5.766S837.338,1130.452,837.338,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C821.509,1127.871,818.928,1130.452,818.928,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1133.637c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C803.099,1127.871,800.517,1130.452,800.517,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,1133.637c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C784.688,1127.871,782.107,1130.452,782.107,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,1133.637c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C747.869,1127.871,745.286,1130.452,745.286,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1133.637c0,3.184,2.581,5.766,5.765,5.766s5.763-2.582,5.763-5.766
					c0-3.185-2.579-5.766-5.763-5.766S726.876,1130.452,726.876,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766c0-3.185-2.581-5.766-5.766-5.766C711.047,1127.871,708.465,1130.452,708.465,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1133.637c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C692.638,1127.871,690.055,1130.452,690.055,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1133.637c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C674.227,1127.871,671.645,1130.452,671.645,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C655.817,1127.871,653.235,1130.452,653.235,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1133.637c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C637.406,1127.871,634.825,1130.452,634.825,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C545.354,1127.871,542.773,1130.452,542.773,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1133.637c0,3.184,2.582,5.766,5.766,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S524.362,1130.452,524.362,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1133.637c0,3.184,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C342.842,1127.871,340.261,1130.452,340.261,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C324.431,1127.871,321.85,1130.452,321.85,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1133.637c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766C306.022,1127.871,303.439,1130.452,303.439,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C287.611,1127.871,285.029,1130.452,285.029,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1133.637c0,3.184,2.583,5.766,5.767,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S266.618,1130.452,266.618,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1133.637c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					c0-3.185-2.58-5.766-5.764-5.766S248.209,1130.452,248.209,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C232.38,1127.871,229.798,1130.452,229.798,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C213.97,1127.871,211.388,1130.452,211.388,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1133.637c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C195.56,1127.871,192.978,1130.452,192.978,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C177.149,1127.871,174.567,1130.452,174.567,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.582,5.763-5.766c0-3.185-2.581-5.766-5.763-5.766C158.738,1127.871,156.157,1130.452,156.157,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1133.637c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.581-5.766-5.765-5.766S137.747,1130.452,137.747,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C121.918,1127.871,119.336,1130.452,119.336,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M100.926,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766c0-3.185-2.581-5.766-5.764-5.766C103.507,1127.871,100.926,1130.452,100.926,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.766-5.766-5.766C987.202,1146.28,984.62,1148.862,984.62,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C968.791,1146.28,966.21,1148.862,966.21,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1152.046c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C876.739,1146.28,874.159,1148.862,874.159,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C858.329,1146.28,855.748,1148.862,855.748,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1152.046c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.766-5.766-5.766S837.338,1148.862,837.338,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C821.509,1146.28,818.928,1148.862,818.928,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1152.046c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C803.099,1146.28,800.517,1148.862,800.517,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,1152.046c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.184-2.579-5.766-5.764-5.766C766.278,1146.28,763.696,1148.862,763.696,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,1152.046c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C747.869,1146.28,745.286,1148.862,745.286,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.766-5.766-5.766C711.047,1146.28,708.465,1148.862,708.465,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1152.046c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C692.638,1146.28,690.055,1148.862,690.055,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C545.354,1146.28,542.773,1148.862,542.773,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1152.046c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.766-5.764-5.766S524.362,1148.862,524.362,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.766-5.764-5.766C324.431,1146.28,321.85,1148.862,321.85,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1152.046c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C306.022,1146.28,303.439,1148.862,303.439,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C287.611,1146.28,285.029,1148.862,285.029,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1152.046c0,3.185,2.583,5.766,5.767,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.766-5.764-5.766S266.618,1148.862,266.618,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1152.046c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.766-5.764-5.766S248.209,1148.862,248.209,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C232.38,1146.28,229.798,1148.862,229.798,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C213.97,1146.28,211.388,1148.862,211.388,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1152.046c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.766-5.764-5.766C195.56,1146.28,192.978,1148.862,192.978,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C177.149,1146.28,174.567,1148.862,174.567,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.581,5.763-5.766c0-3.184-2.581-5.766-5.763-5.766C158.738,1146.28,156.157,1148.862,156.157,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1152.046c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.766-5.765-5.766S137.747,1148.862,137.747,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C121.918,1146.28,119.336,1148.862,119.336,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M100.926,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.766-5.764-5.766C103.507,1146.28,100.926,1148.862,100.926,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M82.515,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C85.097,1146.28,82.515,1148.862,82.515,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.582,5.766-5.764c0-3.185-2.581-5.766-5.766-5.766C987.202,1164.692,984.62,1167.273,984.62,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C968.791,1164.692,966.21,1167.273,966.21,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C950.381,1164.692,947.8,1167.273,947.8,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1170.458c0,3.182,2.582,5.764,5.766,5.764s5.765-2.582,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S892.568,1167.273,892.568,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1170.458c0,3.182,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C876.739,1164.692,874.159,1167.273,874.159,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C858.329,1164.692,855.748,1167.273,855.748,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1170.458c0,3.182,2.581,5.764,5.765,5.764s5.766-2.582,5.766-5.764
					c0-3.185-2.582-5.766-5.766-5.766S837.338,1167.273,837.338,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C821.509,1164.692,818.928,1167.273,818.928,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,1170.458c0,3.182,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C803.099,1164.692,800.517,1167.273,800.517,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1170.458c0,3.182,2.581,5.764,5.765,5.764s5.763-2.582,5.763-5.764
					c0-3.185-2.579-5.766-5.763-5.766S726.876,1167.273,726.876,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.582,5.766-5.764c0-3.185-2.581-5.766-5.766-5.766C711.047,1164.692,708.465,1167.273,708.465,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C545.354,1164.692,542.773,1167.273,542.773,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1170.458c0,3.182,2.582,5.764,5.766,5.764s5.764-2.582,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S524.362,1167.273,524.362,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M413.901,1170.458c0,3.182,2.581,5.764,5.765,5.764s5.764-2.582,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S413.901,1167.273,413.901,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M395.49,1170.458c0,3.182,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C398.073,1164.692,395.49,1167.273,395.49,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M377.08,1170.458c0,3.182,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.582,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C379.662,1164.692,377.08,1167.273,377.08,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1170.458c0,3.182,2.583,5.764,5.766,5.764
					c3.184,0,5.764-2.582,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C306.022,1164.692,303.439,1167.273,303.439,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C287.611,1164.692,285.029,1167.273,285.029,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1170.458c0,3.182,2.583,5.764,5.767,5.764s5.764-2.582,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S266.618,1167.273,266.618,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1170.458c0,3.182,2.581,5.764,5.765,5.764s5.764-2.582,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S248.209,1167.273,248.209,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C232.38,1164.692,229.798,1167.273,229.798,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C213.97,1164.692,211.388,1167.273,211.388,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1170.458c0,3.182,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.582,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C195.56,1164.692,192.978,1167.273,192.978,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C177.149,1164.692,174.567,1167.273,174.567,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.182,0,5.763-2.582,5.763-5.764c0-3.185-2.581-5.766-5.763-5.766C158.738,1164.692,156.157,1167.273,156.157,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1170.458c0,3.182,2.581,5.764,5.765,5.764s5.765-2.582,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S137.747,1167.273,137.747,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C121.918,1164.692,119.336,1167.273,119.336,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M100.926,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.183,0,5.764-2.582,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C103.507,1164.692,100.926,1167.273,100.926,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M984.62,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.766-5.766-5.766C987.202,1183.102,984.62,1185.684,984.62,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C968.791,1183.102,966.21,1185.684,966.21,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1188.867c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.766-5.765-5.766S910.979,1185.684,910.979,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1188.867c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.766-5.765-5.766S892.568,1185.684,892.568,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1188.867c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C876.739,1183.102,874.159,1185.684,874.159,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C858.329,1183.102,855.748,1185.684,855.748,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1188.867c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.766-5.766-5.766S837.338,1185.684,837.338,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C821.509,1183.102,818.928,1185.684,818.928,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1188.867c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.184-2.579-5.766-5.763-5.766S726.876,1185.684,726.876,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.766-5.766-5.766C711.047,1183.102,708.465,1185.684,708.465,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M542.773,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C545.354,1183.102,542.773,1185.684,542.773,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1188.867c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.766-5.764-5.766S524.362,1185.684,524.362,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M358.67,1188.867c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C361.251,1183.102,358.67,1185.684,358.67,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M340.261,1188.867c0,3.185,2.581,5.766,5.764,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.184-2.579-5.766-5.764-5.766C342.842,1183.102,340.261,1185.684,340.261,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M321.85,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.766-5.764-5.766C324.431,1183.102,321.85,1185.684,321.85,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1188.867c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C306.022,1183.102,303.439,1185.684,303.439,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C287.611,1183.102,285.029,1185.684,285.029,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1188.867c0,3.185,2.583,5.766,5.767,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.766-5.764-5.766S266.618,1185.684,266.618,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1188.867c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.766-5.764-5.766S248.209,1185.684,248.209,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C232.38,1183.102,229.798,1185.684,229.798,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C213.97,1183.102,211.388,1185.684,211.388,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1188.867c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.766-5.764-5.766C195.56,1183.102,192.978,1185.684,192.978,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C177.149,1183.102,174.567,1185.684,174.567,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.581,5.763-5.766c0-3.184-2.581-5.766-5.763-5.766C158.738,1183.102,156.157,1185.684,156.157,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1188.867c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.766-5.765-5.766S137.747,1185.684,137.747,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C121.918,1183.102,119.336,1185.684,119.336,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M100.926,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.766-5.764-5.766C103.507,1183.102,100.926,1185.684,100.926,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1207.276c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.763-5.764-5.763C950.381,1201.514,947.8,1204.093,947.8,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1207.276c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.763-5.765-5.763S929.389,1204.093,929.389,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1207.276c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.763-5.765-5.763S910.979,1204.093,910.979,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1207.276c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.763-5.765-5.763S892.568,1204.093,892.568,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1207.276c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.763-5.765-5.763C876.739,1201.514,874.159,1204.093,874.159,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1207.276c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.763-5.764-5.763C858.329,1201.514,855.748,1204.093,855.748,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M837.338,1207.276c0,3.185,2.581,5.766,5.765,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.763-5.766-5.763S837.338,1204.093,837.338,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M818.928,1207.276c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.763-5.764-5.763C821.509,1201.514,818.928,1204.093,818.928,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,1207.276c0,3.185,2.581,5.766,5.765,5.766s5.763-2.581,5.763-5.766
					c0-3.184-2.579-5.763-5.763-5.763S726.876,1204.093,726.876,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1207.276c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.184-2.581-5.763-5.766-5.763C711.047,1201.514,708.465,1204.093,708.465,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1207.276c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.763-5.765-5.763C692.638,1201.514,690.055,1204.093,690.055,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1207.276c0,3.185,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.763-5.764-5.763C674.227,1201.514,671.645,1204.093,671.645,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M524.362,1207.276c0,3.185,2.582,5.766,5.766,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.763-5.764-5.763S524.362,1204.093,524.362,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M303.439,1207.276c0,3.185,2.583,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.763-5.764-5.763C306.022,1201.514,303.439,1204.093,303.439,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1207.276c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.763-5.765-5.763C287.611,1201.514,285.029,1204.093,285.029,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1207.276c0,3.185,2.583,5.766,5.767,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.763-5.764-5.763S266.618,1204.093,266.618,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1207.276c0,3.185,2.581,5.766,5.765,5.766s5.764-2.581,5.764-5.766
					c0-3.184-2.58-5.763-5.764-5.763S248.209,1204.093,248.209,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1207.276c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.763-5.765-5.763C232.38,1201.514,229.798,1204.093,229.798,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1207.276c0,3.185,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.763-5.765-5.763C213.97,1201.514,211.388,1204.093,211.388,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1207.276c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.763-5.764-5.763C195.56,1201.514,192.978,1204.093,192.978,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1207.276c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.763-5.765-5.763C177.149,1201.514,174.567,1204.093,174.567,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1207.276c0,3.185,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.581,5.763-5.766c0-3.184-2.581-5.763-5.763-5.763C158.738,1201.514,156.157,1204.093,156.157,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,1207.276c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.763-5.765-5.763S137.747,1204.093,137.747,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,1207.276c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.763-5.765-5.763C121.918,1201.514,119.336,1204.093,119.336,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M100.926,1207.276c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.764-2.581,5.764-5.766c0-3.184-2.581-5.763-5.764-5.763C103.507,1201.514,100.926,1204.093,100.926,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M82.515,1207.276c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.763-5.765-5.763C85.097,1201.514,82.515,1204.093,82.515,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1225.688c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C968.791,1219.923,966.21,1222.504,966.21,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1225.688c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C950.381,1219.923,947.8,1222.504,947.8,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1225.688c0,3.184,2.582,5.764,5.766,5.764s5.765-2.58,5.765-5.764
					c0-3.185-2.581-5.766-5.765-5.766S892.568,1222.504,892.568,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1225.688c0,3.184,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C876.739,1219.923,874.159,1222.504,874.159,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1225.688c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C858.329,1219.923,855.748,1222.504,855.748,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,1225.688c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.766-2.58,5.766-5.764c0-3.185-2.581-5.766-5.766-5.766C711.047,1219.923,708.465,1222.504,708.465,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1225.688c0,3.184,2.583,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C692.638,1219.923,690.055,1222.504,690.055,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1225.688c0,3.184,2.582,5.764,5.766,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C674.227,1219.923,671.645,1222.504,671.645,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,1225.688c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.764-2.58,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766C655.817,1219.923,653.235,1222.504,653.235,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1225.688c0,3.184,2.581,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C637.406,1219.923,634.825,1222.504,634.825,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,1225.688c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.58,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C618.996,1219.923,616.414,1222.504,616.414,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M285.029,1225.688c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C287.611,1219.923,285.029,1222.504,285.029,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M266.618,1225.688c0,3.184,2.583,5.764,5.767,5.764s5.764-2.58,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S266.618,1222.504,266.618,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1225.688c0,3.184,2.581,5.764,5.765,5.764s5.764-2.58,5.764-5.764
					c0-3.185-2.58-5.766-5.764-5.766S248.209,1222.504,248.209,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1225.688c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C232.38,1219.923,229.798,1222.504,229.798,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,1225.688c0,3.184,2.582,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C213.97,1219.923,211.388,1222.504,211.388,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,1225.688c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.764-2.58,5.764-5.764c0-3.185-2.581-5.766-5.764-5.766C195.56,1219.923,192.978,1222.504,192.978,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1225.688c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.58,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C177.149,1219.923,174.567,1222.504,174.567,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1225.688c0,3.184,2.581,5.764,5.766,5.764
					c3.182,0,5.763-2.58,5.763-5.764c0-3.185-2.581-5.766-5.763-5.766C158.738,1219.923,156.157,1222.504,156.157,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1244.098c0,3.186,2.582,5.766,5.766,5.766s5.765-2.58,5.765-5.766
					c0-3.184-2.581-5.766-5.765-5.766S892.568,1240.914,892.568,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M874.159,1244.098c0,3.186,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.58,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C876.739,1238.332,874.159,1240.914,874.159,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M855.748,1244.098c0,3.186,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.58,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C858.329,1238.332,855.748,1240.914,855.748,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1244.098c0,3.186,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.58,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C692.638,1238.332,690.055,1240.914,690.055,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1244.098c0,3.186,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.58,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C674.227,1238.332,671.645,1240.914,671.645,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,1244.098c0,3.186,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.58,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C655.817,1238.332,653.235,1240.914,653.235,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,1244.098c0,3.186,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.58,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C637.406,1238.332,634.825,1240.914,634.825,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,1244.098c0,3.186,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.58,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C618.996,1238.332,616.414,1240.914,616.414,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,1244.098c0,3.186,2.581,5.766,5.765,5.766s5.764-2.58,5.764-5.766
					c0-3.184-2.58-5.766-5.764-5.766S248.209,1240.914,248.209,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,1244.098c0,3.186,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.58,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C232.38,1238.332,229.798,1240.914,229.798,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,1244.098c0,3.186,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.58,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C177.149,1238.332,174.567,1240.914,174.567,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,1244.098c0,3.186,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.58,5.763-5.766c0-3.184-2.581-5.766-5.763-5.766C158.738,1238.332,156.157,1240.914,156.157,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1262.508c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.764-5.765-5.764C968.791,1256.744,966.21,1259.325,966.21,1262.508"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M892.568,1262.508c0,3.184,2.582,5.766,5.766,5.766s5.765-2.582,5.765-5.766
					c0-3.183-2.581-5.764-5.765-5.764S892.568,1259.325,892.568,1262.508"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,1262.508c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.183-2.581-5.764-5.765-5.764C692.638,1256.744,690.055,1259.325,690.055,1262.508"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,1262.508c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766c0-3.183-2.58-5.764-5.764-5.764C674.227,1256.744,671.645,1259.325,671.645,1262.508"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M966.21,1280.919c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C968.791,1275.153,966.21,1277.735,966.21,1280.919"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M947.8,1280.919c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766C950.381,1275.153,947.8,1277.735,947.8,1280.919"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M929.389,1280.919c0,3.185,2.582,5.766,5.766,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.766-5.765-5.766S929.389,1277.735,929.389,1280.919"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M910.979,1280.919c0,3.185,2.581,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.581-5.766-5.765-5.766S910.979,1277.735,910.979,1280.919"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,710.199c0,3.186,2.58,5.765,5.765,5.765
					c3.184,0,5.765-2.579,5.765-5.765c0-3.184-2.581-5.766-5.765-5.766C1005.611,704.433,1003.031,707.015,1003.031,710.199"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,728.61c0,3.184,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C1005.611,722.844,1003.031,725.426,1003.031,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,747.02c0,3.184,2.58,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C1005.611,741.254,1003.031,743.836,1003.031,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,765.43c0,3.184,2.58,5.768,5.765,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C1005.611,759.664,1003.031,762.247,1003.031,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,783.841c0,3.185,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C1005.611,778.075,1003.031,780.657,1003.031,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,802.251c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1005.611,796.485,1003.031,799.066,1003.031,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,820.662c0,3.184,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C1005.611,814.896,1003.031,817.478,1003.031,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,839.071c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C1005.611,833.307,1003.031,835.888,1003.031,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,857.483c0,3.182,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C1005.611,851.716,1003.031,854.297,1003.031,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,875.891c0,3.188,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C1005.611,870.127,1003.031,872.709,1003.031,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,894.303c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.186-2.581-5.766-5.765-5.766C1005.611,888.537,1003.031,891.117,1003.031,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1078.406c0,3.182,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1005.611,1072.641,1003.031,1075.222,1003.031,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1096.815c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C1005.611,1091.05,1003.031,1093.632,1003.031,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1115.227c0,3.183,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C1005.611,1109.461,1003.031,1112.041,1003.031,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1133.637c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1005.611,1127.871,1003.031,1130.452,1003.031,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1152.046c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C1005.611,1146.28,1003.031,1148.862,1003.031,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1170.458c0,3.182,2.58,5.764,5.765,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C1005.611,1164.692,1003.031,1167.273,1003.031,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1188.867c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C1005.611,1183.102,1003.031,1185.684,1003.031,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1207.276c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.763-5.765-5.763C1005.611,1201.514,1003.031,1204.093,1003.031,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1003.031,1244.098c0,3.186,2.58,5.766,5.765,5.766
					c3.184,0,5.765-2.58,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C1005.611,1238.332,1003.031,1240.914,1003.031,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,728.61c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764s-2.581-5.766-5.765-5.766C1024.021,722.844,1021.44,725.426,1021.44,728.61"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,747.02c0,3.184,2.581,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C1024.021,741.254,1021.44,743.836,1021.44,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.184,0,5.765-2.584,5.765-5.768c0-3.183-2.581-5.766-5.765-5.766C1024.021,759.664,1021.44,762.247,1021.44,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.579,5.765-5.764c0-3.184-2.581-5.766-5.765-5.766C1024.021,778.075,1021.44,780.657,1021.44,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1024.021,796.485,1021.44,799.066,1021.44,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C1024.021,814.896,1021.44,817.478,1021.44,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,839.071c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.765-5.765-5.765C1024.021,833.307,1021.44,835.888,1021.44,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.187-2.581-5.768-5.765-5.768C1024.021,851.716,1021.44,854.297,1021.44,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.578,5.765-5.766c0-3.182-2.581-5.764-5.765-5.764C1024.021,870.127,1021.44,872.709,1021.44,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C1024.021,1054.229,1021.44,1056.813,1021.44,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1024.021,1072.641,1021.44,1075.222,1021.44,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C1024.021,1091.05,1021.44,1093.632,1021.44,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C1024.021,1109.461,1021.44,1112.041,1021.44,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1024.021,1127.871,1021.44,1130.452,1021.44,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C1024.021,1146.28,1021.44,1148.862,1021.44,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.582,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C1024.021,1164.692,1021.44,1167.273,1021.44,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C1024.021,1183.102,1021.44,1185.684,1021.44,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1207.276c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.763-5.765-5.763C1024.021,1201.514,1021.44,1204.093,1021.44,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,1225.688c0,3.184,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.58,5.765-5.764c0-3.185-2.581-5.766-5.765-5.766C1024.021,1219.923,1021.44,1222.504,1021.44,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,747.02c0,3.184,2.581,5.765,5.764,5.765
					c3.186,0,5.765-2.581,5.765-5.765s-2.579-5.766-5.765-5.766C1042.433,741.254,1039.852,743.836,1039.852,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,765.43c0,3.184,2.581,5.768,5.764,5.768
					c3.186,0,5.765-2.584,5.765-5.768c0-3.183-2.579-5.766-5.765-5.766C1042.433,759.664,1039.852,762.247,1039.852,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,783.841c0,3.185,2.581,5.764,5.764,5.764
					c3.186,0,5.765-2.579,5.765-5.764c0-3.184-2.579-5.766-5.765-5.766C1042.433,778.075,1039.852,780.657,1039.852,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,802.251c0,3.184,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.582,5.765-5.766c0-3.185-2.579-5.766-5.765-5.766C1042.433,796.485,1039.852,799.066,1039.852,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,820.662c0,3.184,2.581,5.764,5.764,5.764
					c3.186,0,5.765-2.58,5.765-5.764c0-3.185-2.579-5.766-5.765-5.766C1042.433,814.896,1039.852,817.478,1039.852,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,839.071c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.184-2.579-5.765-5.765-5.765C1042.433,833.307,1039.852,835.888,1039.852,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,857.483c0,3.182,2.581,5.764,5.764,5.764
					c3.186,0,5.765-2.582,5.765-5.764c0-3.187-2.579-5.768-5.765-5.768C1042.433,851.716,1039.852,854.297,1039.852,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,875.891c0,3.188,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.578,5.765-5.766c0-3.182-2.579-5.764-5.765-5.764C1042.433,870.127,1039.852,872.709,1039.852,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1021.44,894.303c0,3.184,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.582,5.765-5.766c0-3.186-2.579-5.766-5.765-5.766C1024.021,888.537,1021.44,891.117,1021.44,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,912.712c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.184-2.579-5.764-5.765-5.764C1042.433,906.948,1039.852,909.528,1039.852,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1059.994c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.182-2.579-5.766-5.765-5.766C1042.433,1054.229,1039.852,1056.813,1039.852,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1078.406c0,3.182,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.584,5.765-5.766c0-3.185-2.579-5.766-5.765-5.766C1042.433,1072.641,1039.852,1075.222,1039.852,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1096.815c0,3.184,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.582,5.765-5.766s-2.579-5.766-5.765-5.766C1042.433,1091.05,1039.852,1093.632,1039.852,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1115.227c0,3.183,2.581,5.764,5.764,5.764
					c3.186,0,5.765-2.581,5.765-5.764c0-3.186-2.579-5.766-5.765-5.766C1042.433,1109.461,1039.852,1112.041,1039.852,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1133.637c0,3.184,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.582,5.765-5.766c0-3.185-2.579-5.766-5.765-5.766C1042.433,1127.871,1039.852,1130.452,1039.852,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1152.046c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.184-2.579-5.766-5.765-5.766C1042.433,1146.28,1039.852,1148.862,1039.852,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1170.458c0,3.182,2.581,5.764,5.764,5.764
					c3.186,0,5.765-2.582,5.765-5.764c0-3.185-2.579-5.766-5.765-5.766C1042.433,1164.692,1039.852,1167.273,1039.852,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1188.867c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.184-2.579-5.766-5.765-5.766C1042.433,1183.102,1039.852,1185.684,1039.852,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1039.852,1207.276c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.184-2.579-5.763-5.765-5.763C1042.433,1201.514,1039.852,1204.093,1039.852,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,765.43c0,3.184,2.581,5.768,5.766,5.768
					c3.183,0,5.765-2.584,5.765-5.768c0-3.183-2.582-5.766-5.765-5.766C1060.843,759.664,1058.262,762.247,1058.262,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,783.841c0,3.185,2.581,5.764,5.766,5.764
					c3.183,0,5.765-2.579,5.765-5.764c0-3.184-2.582-5.766-5.765-5.766C1060.843,778.075,1058.262,780.657,1058.262,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,802.251c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1060.843,796.485,1058.262,799.066,1058.262,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,820.662c0,3.184,2.581,5.764,5.766,5.764
					c3.183,0,5.765-2.58,5.765-5.764c0-3.185-2.582-5.766-5.765-5.766C1060.843,814.896,1058.262,817.478,1058.262,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,839.071c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.765-5.765-5.765C1060.843,833.307,1058.262,835.888,1058.262,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,857.483c0,3.182,2.581,5.764,5.766,5.764
					c3.183,0,5.765-2.582,5.765-5.764c0-3.187-2.582-5.768-5.765-5.768C1060.843,851.716,1058.262,854.297,1058.262,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,875.891c0,3.188,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.578,5.765-5.766c0-3.182-2.582-5.764-5.765-5.764C1060.843,870.127,1058.262,872.709,1058.262,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,894.303c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.186-2.582-5.766-5.765-5.766C1060.843,888.537,1058.262,891.117,1058.262,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,912.712c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.764-5.765-5.764C1060.843,906.948,1058.262,909.528,1058.262,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1060.843,1035.819,1058.262,1038.4,1058.262,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.766-5.765-5.766C1060.843,1054.229,1058.262,1056.813,1058.262,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.584,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1060.843,1072.641,1058.262,1075.222,1058.262,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.766-5.765-5.766C1060.843,1091.05,1058.262,1093.632,1058.262,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.183,0,5.765-2.581,5.765-5.764c0-3.186-2.582-5.766-5.765-5.766C1060.843,1109.461,1058.262,1112.041,1058.262,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1060.843,1127.871,1058.262,1130.452,1058.262,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.766-5.765-5.766C1060.843,1146.28,1058.262,1148.862,1058.262,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1170.458c0,3.182,2.581,5.764,5.766,5.764
					c3.183,0,5.765-2.582,5.765-5.764c0-3.185-2.582-5.766-5.765-5.766C1060.843,1164.692,1058.262,1167.273,1058.262,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1188.867c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.766-5.765-5.766C1060.843,1183.102,1058.262,1185.684,1058.262,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1207.276c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.763-5.765-5.763C1060.843,1201.514,1058.262,1204.093,1058.262,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1058.262,1225.688c0,3.184,2.581,5.764,5.766,5.764
					c3.183,0,5.765-2.58,5.765-5.764c0-3.185-2.582-5.766-5.765-5.766C1060.843,1219.923,1058.262,1222.504,1058.262,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,747.02c0,3.184,2.582,5.765,5.766,5.765s5.766-2.581,5.766-5.765
					s-2.582-5.766-5.766-5.766S1076.671,743.836,1076.671,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,765.43c0,3.184,2.582,5.768,5.766,5.768s5.766-2.584,5.766-5.768
					c0-3.183-2.582-5.766-5.766-5.766S1076.671,762.247,1076.671,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,783.841c0,3.185,2.582,5.764,5.766,5.764s5.766-2.579,5.766-5.764
					c0-3.184-2.582-5.766-5.766-5.766S1076.671,780.657,1076.671,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,802.251c0,3.184,2.582,5.766,5.766,5.766s5.766-2.582,5.766-5.766
					c0-3.185-2.582-5.766-5.766-5.766S1076.671,799.066,1076.671,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,820.662c0,3.184,2.582,5.764,5.766,5.764s5.766-2.58,5.766-5.764
					c0-3.185-2.582-5.766-5.766-5.766S1076.671,817.478,1076.671,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,839.071c0,3.185,2.582,5.766,5.766,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.765-5.766-5.765S1076.671,835.888,1076.671,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,857.483c0,3.182,2.582,5.764,5.766,5.764s5.766-2.582,5.766-5.764
					c0-3.187-2.582-5.768-5.766-5.768S1076.671,854.297,1076.671,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,875.891c0,3.188,2.582,5.766,5.766,5.766s5.766-2.578,5.766-5.766
					c0-3.182-2.582-5.764-5.766-5.764S1076.671,872.709,1076.671,875.891"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,894.303c0,3.184,2.582,5.766,5.766,5.766s5.766-2.582,5.766-5.766
					c0-3.186-2.582-5.766-5.766-5.766S1076.671,891.117,1076.671,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,912.712c0,3.185,2.582,5.766,5.766,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.764-5.766-5.764S1076.671,909.528,1076.671,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,931.123c0,3.185,2.582,5.766,5.766,5.766s5.766-2.581,5.766-5.766
					c0-3.184-2.582-5.765-5.766-5.765S1076.671,927.939,1076.671,931.123"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1023.175c0,3.185,2.582,5.766,5.766,5.766
					s5.766-2.581,5.766-5.766c0-3.186-2.582-5.765-5.766-5.765S1076.671,1019.989,1076.671,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1041.585c0,3.184,2.582,5.766,5.766,5.766
					s5.766-2.582,5.766-5.766c0-3.185-2.582-5.766-5.766-5.766S1076.671,1038.4,1076.671,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1059.994c0,3.185,2.582,5.766,5.766,5.766
					s5.766-2.581,5.766-5.766c0-3.182-2.582-5.766-5.766-5.766S1076.671,1056.813,1076.671,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1078.406c0,3.182,2.582,5.766,5.766,5.766
					s5.766-2.584,5.766-5.766c0-3.185-2.582-5.766-5.766-5.766S1076.671,1075.222,1076.671,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1096.815c0,3.184,2.582,5.766,5.766,5.766
					s5.766-2.582,5.766-5.766s-2.582-5.766-5.766-5.766S1076.671,1093.632,1076.671,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1115.227c0,3.183,2.582,5.764,5.766,5.764
					s5.766-2.581,5.766-5.764c0-3.186-2.582-5.766-5.766-5.766S1076.671,1112.041,1076.671,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1133.637c0,3.184,2.582,5.766,5.766,5.766
					s5.766-2.582,5.766-5.766c0-3.185-2.582-5.766-5.766-5.766S1076.671,1130.452,1076.671,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1152.046c0,3.185,2.582,5.766,5.766,5.766
					s5.766-2.581,5.766-5.766c0-3.184-2.582-5.766-5.766-5.766S1076.671,1148.862,1076.671,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1170.458c0,3.182,2.582,5.764,5.766,5.764
					s5.766-2.582,5.766-5.764c0-3.185-2.582-5.766-5.766-5.766S1076.671,1167.273,1076.671,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1188.867c0,3.185,2.582,5.766,5.766,5.766
					s5.766-2.581,5.766-5.766c0-3.184-2.582-5.766-5.766-5.766S1076.671,1185.684,1076.671,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1076.671,1207.276c0,3.185,2.582,5.766,5.766,5.766
					s5.766-2.581,5.766-5.766c0-3.184-2.582-5.763-5.766-5.763S1076.671,1204.093,1076.671,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,747.02c0,3.184,2.58,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					s-2.58-5.766-5.765-5.766S1095.082,743.836,1095.082,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,765.43c0,3.184,2.58,5.768,5.765,5.768s5.765-2.584,5.765-5.768
					c0-3.183-2.58-5.766-5.765-5.766S1095.082,762.247,1095.082,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,783.841c0,3.185,2.58,5.764,5.765,5.764s5.765-2.579,5.765-5.764
					c0-3.184-2.58-5.766-5.765-5.766S1095.082,780.657,1095.082,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,802.251c0,3.184,2.58,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.58-5.766-5.765-5.766S1095.082,799.066,1095.082,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,820.662c0,3.184,2.58,5.764,5.765,5.764s5.765-2.58,5.765-5.764
					c0-3.185-2.58-5.766-5.765-5.766S1095.082,817.478,1095.082,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,839.071c0,3.185,2.58,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.58-5.765-5.765-5.765S1095.082,835.888,1095.082,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,857.483c0,3.182,2.58,5.764,5.765,5.764s5.765-2.582,5.765-5.764
					c0-3.187-2.58-5.768-5.765-5.768S1095.082,854.297,1095.082,857.483"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,912.712c0,3.185,2.58,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.58-5.764-5.765-5.764S1095.082,909.528,1095.082,912.712"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1023.175c0,3.185,2.58,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.186-2.58-5.765-5.765-5.765S1095.082,1019.989,1095.082,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1041.585c0,3.184,2.58,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.58-5.766-5.765-5.766S1095.082,1038.4,1095.082,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1059.994c0,3.185,2.58,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.182-2.58-5.766-5.765-5.766S1095.082,1056.813,1095.082,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1078.406c0,3.182,2.58,5.766,5.765,5.766s5.765-2.584,5.765-5.766
					c0-3.185-2.58-5.766-5.765-5.766S1095.082,1075.222,1095.082,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1096.815c0,3.184,2.58,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					s-2.58-5.766-5.765-5.766S1095.082,1093.632,1095.082,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1115.227c0,3.183,2.58,5.764,5.765,5.764s5.765-2.581,5.765-5.764
					c0-3.186-2.58-5.766-5.765-5.766S1095.082,1112.041,1095.082,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1133.637c0,3.184,2.58,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					c0-3.185-2.58-5.766-5.765-5.766S1095.082,1130.452,1095.082,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1152.046c0,3.185,2.58,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.58-5.766-5.765-5.766S1095.082,1148.862,1095.082,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1170.458c0,3.182,2.58,5.764,5.765,5.764s5.765-2.582,5.765-5.764
					c0-3.185-2.58-5.766-5.765-5.766S1095.082,1167.273,1095.082,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1095.082,1188.867c0,3.185,2.58,5.766,5.765,5.766s5.765-2.581,5.765-5.766
					c0-3.184-2.58-5.766-5.765-5.766S1095.082,1185.684,1095.082,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,747.02c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.766-2.581,5.766-5.765s-2.583-5.766-5.766-5.766C1116.074,741.254,1113.492,743.836,1113.492,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,765.43c0,3.184,2.582,5.768,5.766,5.768
					c3.183,0,5.766-2.584,5.766-5.768c0-3.183-2.583-5.766-5.766-5.766C1116.074,759.664,1113.492,762.247,1113.492,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,783.841c0,3.185,2.582,5.764,5.766,5.764
					c3.183,0,5.766-2.579,5.766-5.764c0-3.184-2.583-5.766-5.766-5.766C1116.074,778.075,1113.492,780.657,1113.492,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,802.251c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.582,5.766-5.766c0-3.185-2.583-5.766-5.766-5.766C1116.074,796.485,1113.492,799.066,1113.492,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,820.662c0,3.184,2.582,5.764,5.766,5.764
					c3.183,0,5.766-2.58,5.766-5.764c0-3.185-2.583-5.766-5.766-5.766C1116.074,814.896,1113.492,817.478,1113.492,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,839.071c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.581,5.766-5.766c0-3.184-2.583-5.765-5.766-5.765C1116.074,833.307,1113.492,835.888,1113.492,839.071"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,894.303c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.582,5.766-5.766c0-3.186-2.583-5.766-5.766-5.766C1116.074,888.537,1113.492,891.117,1113.492,894.303"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.581,5.766-5.766c0-3.186-2.583-5.765-5.766-5.765C1116.074,1017.41,1113.492,1019.989,1113.492,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.582,5.766-5.766c0-3.185-2.583-5.766-5.766-5.766C1116.074,1035.819,1113.492,1038.4,1113.492,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.581,5.766-5.766c0-3.182-2.583-5.766-5.766-5.766C1116.074,1054.229,1113.492,1056.813,1113.492,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.584,5.766-5.766c0-3.185-2.583-5.766-5.766-5.766C1116.074,1072.641,1113.492,1075.222,1113.492,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1096.815c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.582,5.766-5.766s-2.583-5.766-5.766-5.766C1116.074,1091.05,1113.492,1093.632,1113.492,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1115.227c0,3.183,2.582,5.764,5.766,5.764
					c3.183,0,5.766-2.581,5.766-5.764c0-3.186-2.583-5.766-5.766-5.766C1116.074,1109.461,1113.492,1112.041,1113.492,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1133.637c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.582,5.766-5.766c0-3.185-2.583-5.766-5.766-5.766C1116.074,1127.871,1113.492,1130.452,1113.492,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1152.046c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.581,5.766-5.766c0-3.184-2.583-5.766-5.766-5.766C1116.074,1146.28,1113.492,1148.862,1113.492,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1170.458c0,3.182,2.582,5.764,5.766,5.764
					c3.183,0,5.766-2.582,5.766-5.764c0-3.185-2.583-5.766-5.766-5.766C1116.074,1164.692,1113.492,1167.273,1113.492,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1113.492,1188.867c0,3.185,2.582,5.766,5.766,5.766
					c3.183,0,5.766-2.581,5.766-5.766c0-3.184-2.583-5.766-5.766-5.766C1116.074,1183.102,1113.492,1185.684,1113.492,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,747.02c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C1134.484,741.254,1131.902,743.836,1131.902,747.02"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,765.43c0,3.184,2.582,5.768,5.765,5.768
					c3.185,0,5.765-2.584,5.765-5.768c0-3.183-2.58-5.766-5.765-5.766C1134.484,759.664,1131.902,762.247,1131.902,765.43"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,783.841c0,3.185,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.579,5.765-5.764c0-3.184-2.58-5.766-5.765-5.766C1134.484,778.075,1131.902,780.657,1131.902,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,802.251c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1134.484,796.485,1131.902,799.066,1131.902,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,820.662c0,3.184,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.58,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C1134.484,814.896,1131.902,817.478,1131.902,820.662"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1004.764c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.764-5.765-5.764C1134.484,999,1131.902,1001.58,1131.902,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1023.175c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.186-2.58-5.765-5.765-5.765C1134.484,1017.41,1131.902,1019.989,1131.902,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1134.484,1035.819,1131.902,1038.4,1131.902,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C1134.484,1054.229,1131.902,1056.813,1131.902,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1134.484,1072.641,1131.902,1075.222,1131.902,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C1134.484,1091.05,1131.902,1093.632,1131.902,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1115.227c0,3.183,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C1134.484,1109.461,1131.902,1112.041,1131.902,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1133.637c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1134.484,1127.871,1131.902,1130.452,1131.902,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1152.046c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C1134.484,1146.28,1131.902,1148.862,1131.902,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1170.458c0,3.182,2.582,5.764,5.765,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C1134.484,1164.692,1131.902,1167.273,1131.902,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1188.867c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C1134.484,1183.102,1131.902,1185.684,1131.902,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1131.902,1244.098c0,3.186,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.58,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C1134.484,1238.332,1131.902,1240.914,1131.902,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,783.841c0,3.185,2.58,5.764,5.765,5.764
					c3.183,0,5.765-2.579,5.765-5.764c0-3.184-2.582-5.766-5.765-5.766C1152.894,778.075,1150.313,780.657,1150.313,783.841"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,802.251c0,3.184,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1152.894,796.485,1150.313,799.066,1150.313,802.251"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1004.764c0,3.184,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.764-5.765-5.764C1152.894,999,1150.313,1001.58,1150.313,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1023.175c0,3.185,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.186-2.582-5.765-5.765-5.765C1152.894,1017.41,1150.313,1019.989,1150.313,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1041.585c0,3.184,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1152.894,1035.819,1150.313,1038.4,1150.313,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1059.994c0,3.185,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.766-5.765-5.766C1152.894,1054.229,1150.313,1056.813,1150.313,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1078.406c0,3.182,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.584,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1152.894,1072.641,1150.313,1075.222,1150.313,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1096.815c0,3.184,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.766-5.765-5.766C1152.894,1091.05,1150.313,1093.632,1150.313,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1115.227c0,3.183,2.58,5.764,5.765,5.764
					c3.183,0,5.765-2.581,5.765-5.764c0-3.186-2.582-5.766-5.765-5.766C1152.894,1109.461,1150.313,1112.041,1150.313,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1133.637c0,3.184,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1152.894,1127.871,1150.313,1130.452,1150.313,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1152.046c0,3.185,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.766-5.765-5.766C1152.894,1146.28,1150.313,1148.862,1150.313,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1170.458c0,3.182,2.58,5.764,5.765,5.764
					c3.183,0,5.765-2.582,5.765-5.764c0-3.185-2.582-5.766-5.765-5.766C1152.894,1164.692,1150.313,1167.273,1150.313,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1188.867c0,3.185,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.766-5.765-5.766C1152.894,1183.102,1150.313,1185.684,1150.313,1188.867"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1225.688c0,3.184,2.58,5.764,5.765,5.764
					c3.183,0,5.765-2.58,5.765-5.764c0-3.185-2.582-5.766-5.765-5.766C1152.894,1219.923,1150.313,1222.504,1150.313,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1150.313,1244.098c0,3.186,2.58,5.766,5.765,5.766
					c3.183,0,5.765-2.58,5.765-5.766c0-3.184-2.582-5.766-5.765-5.766C1152.894,1238.332,1150.313,1240.914,1150.313,1244.098"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.764-5.765-5.764C1171.305,999,1168.723,1001.58,1168.723,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.186-2.58-5.765-5.765-5.765C1171.305,1017.41,1168.723,1019.989,1168.723,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1171.305,1035.819,1168.723,1038.4,1168.723,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C1171.305,1054.229,1168.723,1056.813,1168.723,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1171.305,1072.641,1168.723,1075.222,1168.723,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1096.815c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C1171.305,1091.05,1168.723,1093.632,1168.723,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1115.227c0,3.183,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C1171.305,1109.461,1168.723,1112.041,1168.723,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1133.637c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1171.305,1127.871,1168.723,1130.452,1168.723,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1152.046c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C1171.305,1146.28,1168.723,1148.862,1168.723,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1170.458c0,3.182,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C1171.305,1164.692,1168.723,1167.273,1168.723,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1207.276c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.763-5.765-5.763C1171.305,1201.514,1168.723,1204.093,1168.723,1207.276"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1168.723,1225.688c0,3.184,2.582,5.764,5.766,5.764
					c3.185,0,5.765-2.58,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C1171.305,1219.923,1168.723,1222.504,1168.723,1225.688"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1023.175c0,3.185,2.582,5.766,5.767,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.186-2.582-5.765-5.765-5.765C1189.715,1017.41,1187.133,1019.989,1187.133,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1041.585c0,3.184,2.582,5.766,5.767,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1189.715,1035.819,1187.133,1038.4,1187.133,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1059.994c0,3.185,2.582,5.766,5.767,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.766-5.765-5.766C1189.715,1054.229,1187.133,1056.813,1187.133,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1078.406c0,3.182,2.582,5.766,5.767,5.766
					c3.183,0,5.765-2.584,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1189.715,1072.641,1187.133,1075.222,1187.133,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1096.815c0,3.184,2.582,5.766,5.767,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.766-5.765-5.766C1189.715,1091.05,1187.133,1093.632,1187.133,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1115.227c0,3.183,2.582,5.764,5.767,5.764
					c3.183,0,5.765-2.581,5.765-5.764c0-3.186-2.582-5.766-5.765-5.766C1189.715,1109.461,1187.133,1112.041,1187.133,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1133.637c0,3.184,2.582,5.766,5.767,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1189.715,1127.871,1187.133,1130.452,1187.133,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1152.046c0,3.185,2.582,5.766,5.767,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.184-2.582-5.766-5.765-5.766C1189.715,1146.28,1187.133,1148.862,1187.133,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1187.133,1170.458c0,3.182,2.582,5.764,5.767,5.764
					c3.183,0,5.765-2.582,5.765-5.764c0-3.185-2.582-5.766-5.765-5.766C1189.715,1164.692,1187.133,1167.273,1187.133,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1023.175c0,3.185,2.582,5.766,5.766,5.766
					s5.764-2.581,5.764-5.766c0-3.186-2.58-5.765-5.764-5.765S1205.544,1019.989,1205.544,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1041.585c0,3.184,2.582,5.766,5.766,5.766
					s5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766S1205.544,1038.4,1205.544,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1059.994c0,3.185,2.582,5.766,5.766,5.766
					s5.764-2.581,5.764-5.766c0-3.182-2.58-5.766-5.764-5.766S1205.544,1056.813,1205.544,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1078.406c0,3.182,2.582,5.766,5.766,5.766
					s5.764-2.584,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766S1205.544,1075.222,1205.544,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1096.815c0,3.184,2.582,5.766,5.766,5.766
					s5.764-2.582,5.764-5.766s-2.58-5.766-5.764-5.766S1205.544,1093.632,1205.544,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1115.227c0,3.183,2.582,5.764,5.766,5.764
					s5.764-2.581,5.764-5.764c0-3.186-2.58-5.766-5.764-5.766S1205.544,1112.041,1205.544,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1133.637c0,3.184,2.582,5.766,5.766,5.766
					s5.764-2.582,5.764-5.766c0-3.185-2.58-5.766-5.764-5.766S1205.544,1130.452,1205.544,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1152.046c0,3.185,2.582,5.766,5.766,5.766
					s5.764-2.581,5.764-5.766c0-3.184-2.58-5.766-5.764-5.766S1205.544,1148.862,1205.544,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1205.544,1170.458c0,3.182,2.582,5.764,5.766,5.764
					s5.764-2.582,5.764-5.764c0-3.185-2.58-5.766-5.764-5.766S1205.544,1167.273,1205.544,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1004.764c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.764-5.765-5.764C1226.535,999,1223.954,1001.58,1223.954,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1023.175c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.186-2.58-5.765-5.765-5.765C1226.535,1017.41,1223.954,1019.989,1223.954,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1041.585c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1226.535,1035.819,1223.954,1038.4,1223.954,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1059.994c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.182-2.58-5.766-5.765-5.766C1226.535,1054.229,1223.954,1056.813,1223.954,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1078.406c0,3.182,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1226.535,1072.641,1223.954,1075.222,1223.954,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1096.815c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.766-5.765-5.766C1226.535,1091.05,1223.954,1093.632,1223.954,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1115.227c0,3.183,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.581,5.765-5.764c0-3.186-2.58-5.766-5.765-5.766C1226.535,1109.461,1223.954,1112.041,1223.954,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1133.637c0,3.184,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1226.535,1127.871,1223.954,1130.452,1223.954,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1152.046c0,3.185,2.581,5.766,5.765,5.766
					c3.185,0,5.765-2.581,5.765-5.766c0-3.184-2.58-5.766-5.765-5.766C1226.535,1146.28,1223.954,1148.862,1223.954,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1223.954,1170.458c0,3.182,2.581,5.764,5.765,5.764
					c3.185,0,5.765-2.582,5.765-5.764c0-3.185-2.58-5.766-5.765-5.766C1226.535,1164.692,1223.954,1167.273,1223.954,1170.458"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.764-5.765-5.764C1244.945,999,1242.364,1001.58,1242.364,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.186-2.581-5.765-5.765-5.765C1244.945,1017.41,1242.364,1019.989,1242.364,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1244.945,1035.819,1242.364,1038.4,1242.364,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.182-2.581-5.766-5.765-5.766C1244.945,1054.229,1242.364,1056.813,1242.364,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.584,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1244.945,1072.641,1242.364,1075.222,1242.364,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.766-5.765-5.766C1244.945,1091.05,1242.364,1093.632,1242.364,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1115.227c0,3.183,2.581,5.764,5.766,5.764
					c3.184,0,5.765-2.581,5.765-5.764c0-3.186-2.581-5.766-5.765-5.766C1244.945,1109.461,1242.364,1112.041,1242.364,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1133.637c0,3.184,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766c0-3.185-2.581-5.766-5.765-5.766C1244.945,1127.871,1242.364,1130.452,1242.364,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1242.364,1152.046c0,3.185,2.581,5.766,5.766,5.766
					c3.184,0,5.765-2.581,5.765-5.766c0-3.184-2.581-5.766-5.765-5.766C1244.945,1146.28,1242.364,1148.862,1242.364,1152.046"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1004.764c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766s-2.579-5.764-5.764-5.764C1263.356,999,1260.774,1001.58,1260.774,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1023.175c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.186-2.579-5.765-5.764-5.765C1263.356,1017.41,1260.774,1019.989,1260.774,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1041.585c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C1263.356,1035.819,1260.774,1038.4,1260.774,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1059.994c0,3.185,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.581,5.764-5.766c0-3.182-2.579-5.766-5.764-5.766C1263.356,1054.229,1260.774,1056.813,1260.774,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.584,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C1263.356,1072.641,1260.774,1075.222,1260.774,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1096.815c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766s-2.579-5.766-5.764-5.766C1263.356,1091.05,1260.774,1093.632,1260.774,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1115.227c0,3.183,2.582,5.764,5.766,5.764
					c3.185,0,5.764-2.581,5.764-5.764c0-3.186-2.579-5.766-5.764-5.766C1263.356,1109.461,1260.774,1112.041,1260.774,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1260.774,1133.637c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766c0-3.185-2.579-5.766-5.764-5.766C1263.356,1127.871,1260.774,1130.452,1260.774,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,986.354c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.765-2.581,5.765-5.765c0-3.185-2.582-5.766-5.765-5.766C1281.766,980.589,1279.186,983.17,1279.186,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1004.764c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.764-5.765-5.764C1281.766,999,1279.186,1001.58,1279.186,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1023.175c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.186-2.582-5.765-5.765-5.765C1281.766,1017.41,1279.186,1019.989,1279.186,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1041.585c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1281.766,1035.819,1279.186,1038.4,1279.186,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1059.994c0,3.185,2.58,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.766-5.765-5.766C1281.766,1054.229,1279.186,1056.813,1279.186,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1078.406c0,3.182,2.58,5.766,5.766,5.766
					c3.183,0,5.765-2.584,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1281.766,1072.641,1279.186,1075.222,1279.186,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1096.815c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.766-5.765-5.766C1281.766,1091.05,1279.186,1093.632,1279.186,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1115.227c0,3.183,2.58,5.764,5.766,5.764
					c3.183,0,5.765-2.581,5.765-5.764c0-3.186-2.582-5.766-5.765-5.766C1281.766,1109.461,1279.186,1112.041,1279.186,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1279.186,1133.637c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1281.766,1127.871,1279.186,1130.452,1279.186,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,967.942c0,3.185,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.581,5.766-5.766c0-3.182-2.58-5.764-5.766-5.764C1300.178,962.179,1297.596,964.761,1297.596,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,986.354c0,3.184,2.582,5.765,5.764,5.765
					c3.186,0,5.766-2.581,5.766-5.765c0-3.185-2.58-5.766-5.766-5.766C1300.178,980.589,1297.596,983.17,1297.596,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1004.764c0,3.184,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.582,5.766-5.766s-2.58-5.764-5.766-5.764C1300.178,999,1297.596,1001.58,1297.596,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1023.175c0,3.185,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.581,5.766-5.766c0-3.186-2.58-5.765-5.766-5.765C1300.178,1017.41,1297.596,1019.989,1297.596,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1041.585c0,3.184,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.582,5.766-5.766c0-3.185-2.58-5.766-5.766-5.766C1300.178,1035.819,1297.596,1038.4,1297.596,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1059.994c0,3.185,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.581,5.766-5.766c0-3.182-2.58-5.766-5.766-5.766C1300.178,1054.229,1297.596,1056.813,1297.596,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1078.406c0,3.182,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.584,5.766-5.766c0-3.185-2.58-5.766-5.766-5.766C1300.178,1072.641,1297.596,1075.222,1297.596,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1096.815c0,3.184,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.582,5.766-5.766s-2.58-5.766-5.766-5.766C1300.178,1091.05,1297.596,1093.632,1297.596,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1115.227c0,3.183,2.582,5.764,5.764,5.764
					c3.186,0,5.766-2.581,5.766-5.764c0-3.186-2.58-5.766-5.766-5.766C1300.178,1109.461,1297.596,1112.041,1297.596,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1297.596,1133.637c0,3.184,2.582,5.766,5.764,5.766
					c3.186,0,5.766-2.582,5.766-5.766c0-3.185-2.58-5.766-5.766-5.766C1300.178,1127.871,1297.596,1130.452,1297.596,1133.637"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,967.942c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.766-2.581,5.766-5.766c0-3.182-2.58-5.764-5.766-5.764C1318.587,962.179,1316.006,964.761,1316.006,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,986.354c0,3.184,2.581,5.765,5.764,5.765
					c3.186,0,5.766-2.581,5.766-5.765c0-3.185-2.58-5.766-5.766-5.766C1318.587,980.589,1316.006,983.17,1316.006,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,1004.764c0,3.184,2.581,5.766,5.764,5.766
					c3.186,0,5.766-2.582,5.766-5.766s-2.58-5.764-5.766-5.764C1318.587,999,1316.006,1001.58,1316.006,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,1023.175c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.766-2.581,5.766-5.766c0-3.186-2.58-5.765-5.766-5.765C1318.587,1017.41,1316.006,1019.989,1316.006,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,1041.585c0,3.184,2.581,5.766,5.764,5.766
					c3.186,0,5.766-2.582,5.766-5.766c0-3.185-2.58-5.766-5.766-5.766C1318.587,1035.819,1316.006,1038.4,1316.006,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,1059.994c0,3.185,2.581,5.766,5.764,5.766
					c3.186,0,5.766-2.581,5.766-5.766c0-3.182-2.58-5.766-5.766-5.766C1318.587,1054.229,1316.006,1056.813,1316.006,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,1078.406c0,3.182,2.581,5.766,5.764,5.766
					c3.186,0,5.766-2.584,5.766-5.766c0-3.185-2.58-5.766-5.766-5.766C1318.587,1072.641,1316.006,1075.222,1316.006,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,1096.815c0,3.184,2.581,5.766,5.764,5.766
					c3.186,0,5.766-2.582,5.766-5.766s-2.58-5.766-5.766-5.766C1318.587,1091.05,1316.006,1093.632,1316.006,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1316.006,1115.227c0,3.183,2.581,5.764,5.764,5.764
					c3.186,0,5.766-2.581,5.766-5.764c0-3.186-2.58-5.766-5.766-5.766C1318.587,1109.461,1316.006,1112.041,1316.006,1115.227"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,967.942c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.764-5.765-5.764C1336.997,962.179,1334.416,964.761,1334.416,967.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,986.354c0,3.184,2.581,5.765,5.766,5.765
					c3.183,0,5.765-2.581,5.765-5.765c0-3.185-2.582-5.766-5.765-5.766C1336.997,980.589,1334.416,983.17,1334.416,986.354"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,1004.764c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.764-5.765-5.764C1336.997,999,1334.416,1001.58,1334.416,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,1023.175c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.186-2.582-5.765-5.765-5.765C1336.997,1017.41,1334.416,1019.989,1334.416,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,1041.585c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1336.997,1035.819,1334.416,1038.4,1334.416,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,1059.994c0,3.185,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.581,5.765-5.766c0-3.182-2.582-5.766-5.765-5.766C1336.997,1054.229,1334.416,1056.813,1334.416,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,1078.406c0,3.182,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.584,5.765-5.766c0-3.185-2.582-5.766-5.765-5.766C1336.997,1072.641,1334.416,1075.222,1334.416,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1334.416,1096.815c0,3.184,2.581,5.766,5.766,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.766-5.765-5.766C1336.997,1091.05,1334.416,1093.632,1334.416,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1352.826,1004.764c0,3.184,2.582,5.766,5.765,5.766
					c3.186,0,5.765-2.582,5.765-5.766s-2.579-5.764-5.765-5.764C1355.408,999,1352.826,1001.58,1352.826,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1352.826,1023.175c0,3.185,2.582,5.766,5.765,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.186-2.579-5.765-5.765-5.765C1355.408,1017.41,1352.826,1019.989,1352.826,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1352.826,1041.585c0,3.184,2.582,5.766,5.765,5.766
					c3.186,0,5.765-2.582,5.765-5.766c0-3.185-2.579-5.766-5.765-5.766C1355.408,1035.819,1352.826,1038.4,1352.826,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1352.826,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.186,0,5.765-2.581,5.765-5.766c0-3.182-2.579-5.766-5.765-5.766C1355.408,1054.229,1352.826,1056.813,1352.826,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1352.826,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.186,0,5.765-2.584,5.765-5.766c0-3.185-2.579-5.766-5.765-5.766C1355.408,1072.641,1352.826,1075.222,1352.826,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1352.826,1096.815c0,3.184,2.582,5.766,5.765,5.766
					c3.186,0,5.765-2.582,5.765-5.766s-2.579-5.766-5.765-5.766C1355.408,1091.05,1352.826,1093.632,1352.826,1096.815"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1371.237,1004.764c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.766-2.582,5.766-5.766s-2.582-5.764-5.766-5.764C1373.817,999,1371.237,1001.58,1371.237,1004.764"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1371.237,1023.175c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.766-2.581,5.766-5.766c0-3.186-2.582-5.765-5.766-5.765C1373.817,1017.41,1371.237,1019.989,1371.237,1023.175"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1371.237,1041.585c0,3.184,2.58,5.766,5.765,5.766
					c3.184,0,5.766-2.582,5.766-5.766c0-3.185-2.582-5.766-5.766-5.766C1373.817,1035.819,1371.237,1038.4,1371.237,1041.585"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1371.237,1059.994c0,3.185,2.58,5.766,5.765,5.766
					c3.184,0,5.766-2.581,5.766-5.766c0-3.182-2.582-5.766-5.766-5.766C1373.817,1054.229,1371.237,1056.813,1371.237,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1371.237,1078.406c0,3.182,2.58,5.766,5.765,5.766
					c3.184,0,5.766-2.584,5.766-5.766c0-3.185-2.582-5.766-5.766-5.766C1373.817,1072.641,1371.237,1075.222,1371.237,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1389.646,1059.994c0,3.185,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.581,5.766-5.766c0-3.182-2.581-5.766-5.766-5.766C1392.229,1054.229,1389.646,1056.813,1389.646,1059.994"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1389.646,1078.406c0,3.182,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.584,5.766-5.766c0-3.185-2.581-5.766-5.766-5.766C1392.229,1072.641,1389.646,1075.222,1389.646,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M1408.057,1078.406c0,3.182,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.584,5.765-5.766c0-3.185-2.58-5.766-5.765-5.766C1410.639,1072.641,1408.057,1075.222,1408.057,1078.406"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,341.993c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.765-5.765-5.765C803.099,336.229,800.517,338.809,800.517,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,341.993c0,3.184,2.58,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.765-5.764-5.765C784.688,336.229,782.107,338.809,782.107,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,341.993c0,3.184,2.582,5.766,5.766,5.766
					c3.185,0,5.764-2.582,5.764-5.766s-2.579-5.765-5.764-5.765C766.278,336.229,763.696,338.809,763.696,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,341.993c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C747.869,336.229,745.286,338.809,745.286,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,341.993c0,3.184,2.581,5.766,5.765,5.766s5.763-2.582,5.763-5.766
					s-2.579-5.765-5.763-5.765S726.876,338.809,726.876,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,341.993c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.766-2.582,5.766-5.766s-2.581-5.765-5.766-5.765C711.047,336.229,708.465,338.809,708.465,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,341.993c0,3.184,2.583,5.766,5.766,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C692.638,336.229,690.055,338.809,690.055,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,341.993c0,3.184,2.582,5.766,5.766,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.765-5.764-5.765C674.227,336.229,671.645,338.809,671.645,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,341.993c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.764-2.582,5.764-5.766s-2.58-5.765-5.764-5.765C655.817,336.229,653.235,338.809,653.235,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,341.993c0,3.184,2.581,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C637.406,336.229,634.825,338.809,634.825,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,341.993c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.765-5.765-5.765C618.996,336.229,616.414,338.809,616.414,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M598.004,341.993c0,3.184,2.581,5.766,5.765,5.766
					c3.183,0,5.765-2.582,5.765-5.766s-2.582-5.765-5.765-5.765C600.585,336.229,598.004,338.809,598.004,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,341.993c0,3.184,2.581,5.766,5.765,5.766s5.764-2.582,5.764-5.766
					s-2.58-5.765-5.764-5.765S248.209,338.809,248.209,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,341.993c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C232.38,336.229,229.798,338.809,229.798,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,341.993c0,3.184,2.582,5.766,5.765,5.766
					c3.184,0,5.765-2.582,5.765-5.766s-2.581-5.765-5.765-5.765C213.97,336.229,211.388,338.809,211.388,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,341.993c0,3.184,2.582,5.766,5.766,5.766
					c3.183,0,5.764-2.582,5.764-5.766s-2.581-5.765-5.764-5.765C195.56,336.229,192.978,338.809,192.978,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,341.993c0,3.184,2.582,5.766,5.765,5.766
					c3.185,0,5.765-2.582,5.765-5.766s-2.58-5.765-5.765-5.765C177.149,336.229,174.567,338.809,174.567,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,341.993c0,3.184,2.581,5.766,5.766,5.766
					c3.182,0,5.763-2.582,5.763-5.766s-2.581-5.765-5.763-5.765C158.738,336.229,156.157,338.809,156.157,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,341.993c0,3.184,2.581,5.766,5.765,5.766s5.765-2.582,5.765-5.766
					s-2.581-5.765-5.765-5.765S137.747,338.809,137.747,341.993"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,323.583c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C803.099,317.817,800.517,320.399,800.517,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,323.583c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C784.688,317.817,782.107,320.399,782.107,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,323.583c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.766-5.764-5.766C766.278,317.817,763.696,320.399,763.696,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,323.583c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C747.869,317.817,745.286,320.399,745.286,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,323.583c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.766-5.763-5.766S726.876,320.399,726.876,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,323.583c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.766-5.766-5.766C711.047,317.817,708.465,320.399,708.465,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,323.583c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C692.638,317.817,690.055,320.399,690.055,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,323.583c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C674.227,317.817,671.645,320.399,671.645,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,323.583c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.766-5.764-5.766C655.817,317.817,653.235,320.399,653.235,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,323.583c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C637.406,317.817,634.825,320.399,634.825,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,323.583c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C618.996,317.817,616.414,320.399,616.414,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M248.209,323.583c0,3.184,2.581,5.765,5.765,5.765s5.764-2.581,5.764-5.765
					s-2.58-5.766-5.764-5.766S248.209,320.399,248.209,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,323.583c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C232.38,317.817,229.798,320.399,229.798,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,323.583c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.766-5.765-5.766C213.97,317.817,211.388,320.399,211.388,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,323.583c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.766-5.764-5.766C195.56,317.817,192.978,320.399,192.978,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,323.583c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C177.149,317.817,174.567,320.399,174.567,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,323.583c0,3.184,2.581,5.765,5.766,5.765
					c3.182,0,5.763-2.581,5.763-5.765s-2.581-5.766-5.763-5.766C158.738,317.817,156.157,320.399,156.157,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,323.583c0,3.184,2.581,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.766-5.765-5.766S137.747,320.399,137.747,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,323.583c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.766-5.765-5.766C121.918,317.817,119.336,320.399,119.336,323.583"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,305.173c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C803.099,299.408,800.517,301.989,800.517,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,305.173c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,299.408,782.107,301.989,782.107,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,305.173c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,299.408,763.696,301.989,763.696,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,305.173c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,299.408,745.286,301.989,745.286,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,305.173c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,301.989,726.876,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,305.173c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,299.408,708.465,301.989,708.465,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,305.173c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,299.408,690.055,301.989,690.055,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,305.173c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,299.408,671.645,301.989,671.645,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,305.173c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,299.408,653.235,301.989,653.235,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,305.173c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,299.408,634.825,301.989,634.825,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,305.173c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,299.408,616.414,301.989,616.414,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M229.798,305.173c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C232.38,299.408,229.798,301.989,229.798,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,305.173c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C213.97,299.408,211.388,301.989,211.388,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,305.173c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C195.56,299.408,192.978,301.989,192.978,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,305.173c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C177.149,299.408,174.567,301.989,174.567,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,305.173c0,3.184,2.581,5.765,5.766,5.765
					c3.182,0,5.763-2.581,5.763-5.765s-2.581-5.765-5.763-5.765C158.738,299.408,156.157,301.989,156.157,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,305.173c0,3.184,2.581,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S137.747,301.989,137.747,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,305.173c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C121.918,299.408,119.336,301.989,119.336,305.173"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,286.763c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,280.998,782.107,283.579,782.107,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,286.763c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,280.998,763.696,283.579,763.696,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,286.763c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,280.998,745.286,283.579,745.286,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,286.763c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,283.579,726.876,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,286.763c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,280.998,708.465,283.579,708.465,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,286.763c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,280.998,690.055,283.579,690.055,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,286.763c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,280.998,671.645,283.579,671.645,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,286.763c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,280.998,653.235,283.579,653.235,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,286.763c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,280.998,634.825,283.579,634.825,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,286.763c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C618.996,280.998,616.414,283.579,616.414,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M211.388,286.763c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C213.97,280.998,211.388,283.579,211.388,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M192.978,286.763c0,3.184,2.582,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C195.56,280.998,192.978,283.579,192.978,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M174.567,286.763c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.765-5.765-5.765C177.149,280.998,174.567,283.579,174.567,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,286.763c0,3.184,2.581,5.765,5.766,5.765
					c3.182,0,5.763-2.581,5.763-5.765s-2.581-5.765-5.763-5.765C158.738,280.998,156.157,283.579,156.157,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,286.763c0,3.184,2.581,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S137.747,283.579,137.747,286.763"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M800.517,268.352c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.764-5.765-5.764C803.099,262.588,800.517,265.168,800.517,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,268.352c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.764-5.764-5.764C784.688,262.588,782.107,265.168,782.107,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,268.352c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.764-5.764-5.764C766.278,262.588,763.696,265.168,763.696,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,268.352c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.764-5.765-5.764C747.869,262.588,745.286,265.168,745.286,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,268.352c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.764-5.763-5.764S726.876,265.168,726.876,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,268.352c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.764-5.766-5.764C711.047,262.588,708.465,265.168,708.465,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,268.352c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.764-5.765-5.764C692.638,262.588,690.055,265.168,690.055,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,268.352c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.764-5.764-5.764C674.227,262.588,671.645,265.168,671.645,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,268.352c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.764-5.764-5.764C655.817,262.588,653.235,265.168,653.235,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,268.352c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.764-5.765-5.764C637.406,262.588,634.825,265.168,634.825,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M616.414,268.352c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.764-5.765-5.764C618.996,262.588,616.414,265.168,616.414,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M156.157,268.352c0,3.184,2.581,5.765,5.766,5.765
					c3.182,0,5.763-2.581,5.763-5.765s-2.581-5.764-5.763-5.764C158.738,262.588,156.157,265.168,156.157,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,268.352c0,3.184,2.581,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.764-5.765-5.764S137.747,265.168,137.747,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M119.336,268.352c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.765-2.581,5.765-5.765s-2.58-5.764-5.765-5.764C121.918,262.588,119.336,265.168,119.336,268.352"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,249.942c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,244.177,763.696,246.758,763.696,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,249.942c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,244.177,745.286,246.758,745.286,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,249.942c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,246.758,726.876,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,249.942c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,244.177,708.465,246.758,708.465,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,249.942c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,244.177,690.055,246.758,690.055,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,249.942c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,244.177,671.645,246.758,671.645,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,249.942c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,244.177,653.235,246.758,653.235,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M634.825,249.942c0,3.184,2.581,5.765,5.765,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C637.406,244.177,634.825,246.758,634.825,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M137.747,249.942c0,3.184,2.581,5.765,5.765,5.765s5.765-2.581,5.765-5.765
					s-2.581-5.765-5.765-5.765S137.747,246.758,137.747,249.942"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,231.532c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,225.767,763.696,228.348,763.696,231.532"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,231.532c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,225.767,745.286,228.348,745.286,231.532"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,231.532c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,228.348,726.876,231.532"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,231.532c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,225.767,708.465,228.348,708.465,231.532"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,231.532c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,225.767,690.055,228.348,690.055,231.532"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M671.645,231.532c0,3.184,2.582,5.765,5.766,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C674.227,225.767,671.645,228.348,671.645,231.532"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,231.532c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,225.767,653.235,228.348,653.235,231.532"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,213.122c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,207.356,782.107,209.938,782.107,213.122"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,213.122c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,207.356,763.696,209.938,763.696,213.122"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,213.122c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,207.356,745.286,209.938,745.286,213.122"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,213.122c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,209.938,726.876,213.122"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,213.122c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,207.356,708.465,209.938,708.465,213.122"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,213.122c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,207.356,690.055,209.938,690.055,213.122"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M653.235,213.122c0,3.184,2.582,5.765,5.765,5.765
					c3.184,0,5.764-2.581,5.764-5.765s-2.58-5.765-5.764-5.765C655.817,207.356,653.235,209.938,653.235,213.122"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,194.711c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,188.946,782.107,191.527,782.107,194.711"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,194.711c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,188.946,763.696,191.527,763.696,194.711"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,194.711c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,188.946,745.286,191.527,745.286,194.711"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,194.711c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,191.527,726.876,194.711"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,194.711c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,188.946,708.465,191.527,708.465,194.711"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M690.055,194.711c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C692.638,188.946,690.055,191.527,690.055,194.711"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M782.107,176.301c0,3.184,2.58,5.765,5.766,5.765
					c3.183,0,5.764-2.581,5.764-5.765s-2.581-5.765-5.764-5.765C784.688,170.536,782.107,173.117,782.107,176.301"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M763.696,176.301c0,3.184,2.582,5.765,5.766,5.765
					c3.185,0,5.764-2.581,5.764-5.765s-2.579-5.765-5.764-5.765C766.278,170.536,763.696,173.117,763.696,176.301"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M745.286,176.301c0,3.184,2.583,5.765,5.766,5.765
					c3.184,0,5.765-2.581,5.765-5.765s-2.581-5.765-5.765-5.765C747.869,170.536,745.286,173.117,745.286,176.301"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M726.876,176.301c0,3.184,2.581,5.765,5.765,5.765s5.763-2.581,5.763-5.765
					s-2.579-5.765-5.763-5.765S726.876,173.117,726.876,176.301"/>
                <path clip-path="url(#SVGID_6_)" fill="#FFFFFF" d="M708.465,176.301c0,3.184,2.582,5.765,5.765,5.765
					c3.185,0,5.766-2.581,5.766-5.765s-2.581-5.765-5.766-5.765C711.047,170.536,708.465,173.117,708.465,176.301"/>
            </g>
        </g>
        <g class="marker">
            <path clip-path="url(#SVGID_4_)" fill="#F7001B" d="M659,845.98c-3.503,0-6.533-2.253-7.541-5.605
				c-1.886-6.283-5.593-10.384-9.518-14.726c-5.4-5.975-11.521-12.746-11.521-24.354c0-15.225,13.355-28.579,28.58-28.579
				s28.58,13.354,28.58,28.579c0,11.606-6.118,18.376-11.516,24.349c-3.927,4.344-7.637,8.447-9.523,14.73
				C665.533,843.728,662.503,845.98,659,845.98"/>
            <g opacity="0.5">
                <path clip-path="url(#SVGID_4_)" fill="#FFFFFF" d="M659,778.29c-12.256,0-23.007,10.75-23.007,23.006
					c0,9.464,4.898,14.881,10.083,20.616c4.167,4.61,8.475,9.378,10.721,16.857c0.293,0.973,1.188,1.638,2.203,1.638
					c1.016,0,1.911-0.665,2.203-1.638c2.247-7.479,6.555-12.247,10.722-16.857c5.184-5.735,10.082-11.152,10.082-20.616
					C682.007,789.04,671.256,778.29,659,778.29 M668.511,818.827c-3.263,3.611-6.856,7.585-9.511,12.998
					c-2.654-5.413-6.248-9.387-9.51-12.998c-4.773-5.279-8.895-9.839-8.895-17.531c0-9.631,8.773-18.405,18.405-18.405
					c9.633,0,18.406,8.774,18.406,18.405C677.406,808.988,673.284,813.548,668.511,818.827 M658.972,792.094
					c-5.09,0-9.231,4.116-9.231,9.174c0,5.06,4.141,9.175,9.231,9.175s9.231-4.115,9.231-9.175
					C668.203,796.21,664.062,792.094,658.972,792.094 M658.972,805.842c-2.553,0-4.63-2.052-4.63-4.574
					c0-2.521,2.077-4.572,4.63-4.572c2.553,0,4.629,2.051,4.629,4.572C663.601,803.79,661.524,805.842,658.972,805.842"/>
            </g>
        </g>
        <g class="marker">
            <path clip-path="url(#SVGID_4_)" fill="#F7001B" d="M880.399,939.023c-3.503,0-6.533-2.253-7.54-5.606
				c-1.887-6.281-5.594-10.383-9.519-14.724c-5.4-5.976-11.521-12.747-11.521-24.354c0-15.225,13.355-28.58,28.58-28.58
				s28.58,13.355,28.58,28.58c0,11.605-6.118,18.375-11.517,24.348c-3.927,4.344-7.637,8.448-9.523,14.729
				C886.933,936.771,883.902,939.023,880.399,939.023"/>
            <g opacity="0.5" clip-path="url(#SVGID_4_)">
                <g>
                    <defs>
                        <rect id="SVGID_11_" x="857.393" y="871.333" width="46.014" height="62.118"/>
                    </defs>
                    <clipPath id="SVGID_12_">
                        <use xlink:href="#SVGID_11_"  overflow="visible"/>
                    </clipPath>
                    <path clip-path="url(#SVGID_12_)" fill="#FFFFFF" d="M880.399,871.333c-12.257,0-23.007,10.751-23.007,23.007
						c0,9.463,4.898,14.88,10.082,20.616c4.168,4.61,8.475,9.378,10.722,16.856c0.292,0.974,1.188,1.639,2.203,1.639
						s1.911-0.665,2.202-1.639c2.247-7.479,6.556-12.246,10.722-16.856c5.185-5.736,10.083-11.153,10.083-20.616
						C903.406,882.084,892.655,871.333,880.399,871.333 M889.91,911.871c-3.263,3.61-6.856,7.585-9.511,12.997
						c-2.654-5.412-6.248-9.387-9.511-12.997c-4.773-5.28-8.895-9.84-8.895-17.531c0-9.632,8.773-18.405,18.405-18.405
						c9.633,0,18.405,8.773,18.405,18.405C898.805,902.031,894.683,906.591,889.91,911.871 M880.371,885.137
						c-5.09,0-9.231,4.116-9.231,9.174c0,5.06,4.142,9.177,9.231,9.177s9.23-4.117,9.23-9.177
						C889.602,889.253,885.461,885.137,880.371,885.137 M880.371,898.885c-2.554,0-4.631-2.051-4.631-4.574
						c0-2.521,2.077-4.571,4.631-4.571c2.553,0,4.63,2.051,4.63,4.571C885.001,896.834,882.924,898.885,880.371,898.885"/>
                </g>
            </g>
        </g>
        <g class="marker">
            <path clip-path="url(#SVGID_4_)" fill="#F7001B" d="M529.604,884.027c-3.502,0-6.533-2.253-7.54-5.606
				c-1.887-6.282-5.594-10.383-9.519-14.725c-5.4-5.975-11.521-12.746-11.521-24.354c0-15.224,13.355-28.578,28.58-28.578
				s28.58,13.354,28.58,28.578c0,11.607-6.118,18.377-11.516,24.35c-3.927,4.344-7.637,8.447-9.523,14.729
				C536.137,881.774,533.106,884.027,529.604,884.027"/>
            <g opacity="0.5" clip-path="url(#SVGID_4_)">
                <g>
                    <defs>
                        <rect id="SVGID_7_" x="506.597" y="816.337" width="46.013" height="62.117"/>
                    </defs>
                    <clipPath id="SVGID_8_">
                        <use xlink:href="#SVGID_7_"  overflow="visible"/>
                    </clipPath>
                    <path clip-path="url(#SVGID_8_)" fill="#FFFFFF" d="M529.604,816.337c-12.256,0-23.007,10.75-23.007,23.006
						c0,9.464,4.898,14.881,10.083,20.616c4.167,4.61,8.475,9.378,10.721,16.857c0.292,0.973,1.188,1.638,2.203,1.638
						c1.015,0,1.911-0.665,2.203-1.638c2.247-7.479,6.555-12.247,10.722-16.857c5.184-5.735,10.082-11.152,10.082-20.616
						C552.611,827.087,541.86,816.337,529.604,816.337 M539.115,856.874c-3.263,3.611-6.856,7.585-9.511,12.998
						c-2.654-5.413-6.248-9.387-9.51-12.998c-4.773-5.279-8.895-9.839-8.895-17.531c0-9.631,8.772-18.405,18.405-18.405
						c9.633,0,18.406,8.774,18.406,18.405C548.01,847.035,543.888,851.595,539.115,856.874 M529.576,830.141
						c-5.09,0-9.232,4.116-9.232,9.174c0,5.06,4.142,9.175,9.232,9.175s9.231-4.115,9.231-9.175
						C538.807,834.257,534.666,830.141,529.576,830.141 M529.576,843.889c-2.553,0-4.63-2.052-4.63-4.574
						c0-2.521,2.077-4.572,4.63-4.572c2.552,0,4.629,2.051,4.629,4.572C534.205,841.837,532.127,843.889,529.576,843.889"/>
                </g>
            </g>
        </g>
        <g class="marker">
            <path clip-path="url(#SVGID_4_)" fill="#F7001B" d="M768.937,975.257c-3.503,0-6.532-2.253-7.54-5.606
				c-1.887-6.282-5.594-10.383-9.519-14.725c-5.4-5.975-11.521-12.746-11.521-24.354c0-15.225,13.355-28.579,28.58-28.579
				c15.226,0,28.58,13.354,28.58,28.579c0,11.606-6.117,18.376-11.517,24.349c-3.927,4.344-7.636,8.447-9.522,14.729
				C775.47,973.004,772.44,975.257,768.937,975.257"/>
            <g opacity="0.5" clip-path="url(#SVGID_4_)">
                <g>
                    <defs>
                        <rect id="SVGID_9_" x="745.93" y="907.566" width="46.014" height="62.117"/>
                    </defs>
                    <clipPath id="SVGID_10_">
                        <use xlink:href="#SVGID_9_"  overflow="visible"/>
                    </clipPath>
                    <path clip-path="url(#SVGID_10_)" fill="#FFFFFF" d="M768.938,907.566c-12.258,0-23.007,10.75-23.007,23.007
						c0,9.463,4.898,14.88,10.083,20.615c4.167,4.61,8.475,9.378,10.722,16.857c0.292,0.973,1.188,1.638,2.203,1.638
						c1.015,0,1.91-0.665,2.201-1.638c2.248-7.479,6.556-12.247,10.723-16.857c5.185-5.735,10.082-11.152,10.082-20.615
						C791.943,918.316,781.193,907.566,768.938,907.566 M778.447,948.104c-3.262,3.61-6.855,7.585-9.51,12.997
						c-2.655-5.412-6.249-9.387-9.511-12.997c-4.773-5.28-8.895-9.84-8.895-17.531c0-9.632,8.771-18.405,18.405-18.405
						c9.633,0,18.404,8.773,18.404,18.405C787.342,938.265,783.221,942.824,778.447,948.104 M768.909,921.37
						c-5.09,0-9.232,4.116-9.232,9.174c0,5.06,4.143,9.177,9.232,9.177s9.229-4.117,9.229-9.177
						C778.139,925.486,773.999,921.37,768.909,921.37 M768.909,935.118c-2.554,0-4.631-2.052-4.631-4.574
						c0-2.521,2.077-4.571,4.631-4.571c2.552,0,4.629,2.05,4.629,4.571C773.538,933.066,771.461,935.118,768.909,935.118"/>
                </g>
            </g>
        </g>
        <g class="marker">
            <path clip-path="url(#SVGID_4_)" fill="#F7001B" d="M640.276,937.7c-3.502,0-6.533-2.254-7.54-5.607
				c-1.887-6.281-5.594-10.382-9.519-14.724c-5.4-5.975-11.521-12.746-11.521-24.354c0-15.225,13.355-28.579,28.58-28.579
				s28.58,13.354,28.58,28.579c0,11.606-6.118,18.376-11.516,24.348c-3.927,4.345-7.637,8.448-9.523,14.729
				C646.81,935.446,643.779,937.7,640.276,937.7"/>
            <g opacity="0.5" clip-path="url(#SVGID_4_)">
                <g>
                    <defs>
                        <rect id="SVGID_13_" x="617.27" y="870.009" width="46.013" height="62.118"/>
                    </defs>
                    <clipPath id="SVGID_14_">
                        <use xlink:href="#SVGID_13_"  overflow="visible"/>
                    </clipPath>
                    <path clip-path="url(#SVGID_14_)" fill="#FFFFFF" d="M640.276,870.009c-12.256,0-23.007,10.751-23.007,23.007
						c0,9.464,4.898,14.88,10.083,20.616c4.167,4.61,8.475,9.378,10.721,16.857c0.292,0.973,1.188,1.638,2.203,1.638
						s1.911-0.665,2.203-1.638c2.247-7.479,6.555-12.247,10.722-16.857c5.184-5.736,10.082-11.152,10.082-20.616
						C663.283,880.76,652.532,870.009,640.276,870.009 M649.788,910.547c-3.263,3.61-6.856,7.585-9.511,12.998
						c-2.654-5.413-6.248-9.388-9.51-12.998c-4.773-5.279-8.895-9.84-8.895-17.531c0-9.632,8.773-18.405,18.405-18.405
						c9.633,0,18.406,8.773,18.406,18.405C658.683,900.707,654.561,905.268,649.788,910.547 M640.249,883.813
						c-5.09,0-9.232,4.116-9.232,9.173c0,5.06,4.142,9.176,9.232,9.176c5.09,0,9.231-4.116,9.231-9.176
						C649.479,887.93,645.338,883.813,640.249,883.813 M640.249,897.561c-2.553,0-4.63-2.051-4.63-4.574
						c0-2.521,2.077-4.572,4.63-4.572c2.552,0,4.629,2.052,4.629,4.572C644.877,895.51,642.8,897.561,640.249,897.561"/>
                </g>
            </g>
        </g>
    </g>
</g>
</svg>

                        </div>
                    </div>
                    <div class="contactAgency__details">
                        <div class="contactAgency__title"><span>Biura Personnel Service na świecie</span></div>
                        <div class="contactAgency__merge">
                            <div class="contactAgency__selectBox">
                                <select class="contactAgency__select">
                                    <option class="contactAgency__select_option" value="0">Polska</option>
                                    <option class="contactAgency__select_option" value="1">Ukraina</option>
                                    <option class="contactAgency__select_option" value="2">Niemcy</option>
                                    <option class="contactAgency__select_option" value="3">Węgry</option>
                                    <option class="contactAgency__select_option" value="4">Czechy</option>
                                </select>
                            </div>
                            <div class="contactAgency__info">
                                <div class="contactAgency__text">
                                    <div class="contactAgency__separated">
                                        <div class="contactAgency__item">
                                            <div class="contactAgency__icon"><img src="<?php echo TEMP_URI;?> /assets/images/icoGlobe.png" alt="pin"></div><span>Polska</span>
                                        </div>
                                        <div class="contactAgency__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrowRed.png"></div>
                                    </div>
                                    <div class="contactAgency__separated">
                                        <div class="contactAgency__item">
                                            <div class="contactAgency__icon"><img src="<?php echo TEMP_URI;?> /assets/images/icoGlobe.png" alt="pin"></div><span>Ukraina</span>
                                        </div>
                                        <div class="contactAgency__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrowRed.png"></div>
                                    </div>
                                    <div class="contactAgency__separated">
                                        <div class="contactAgency__item">
                                            <div class="contactAgency__icon"><img src="<?php echo TEMP_URI;?> /assets/images/icoGlobe.png" alt="pin"></div><span>Niemcy</span>
                                        </div>
                                        <div class="contactAgency__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrowRed.png"></div>
                                    </div>
                                    <div class="contactAgency__separated">
                                        <div class="contactAgency__item">
                                            <div class="contactAgency__icon"><img src="<?php echo TEMP_URI;?> /assets/images/icoGlobe.png" alt="pin"></div><span>Węgry</span>
                                        </div>
                                        <div class="contactAgency__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrowRed.png"></div>
                                    </div>
                                    <div class="contactAgency__separated">
                                        <div class="contactAgency__item">
                                            <div class="contactAgency__icon"><img src="<?php echo TEMP_URI;?> /assets/images/icoGlobe.png" alt="pin"></div><span>Czechy</span>
                                        </div>
                                        <div class="contactAgency__arrow"><img src="<?php echo TEMP_URI;?> /assets/images/separatorArrowRed.png"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="contactAgency__contactInfo">
                                <div class="contactAgency__contactWrapper">
                                    <div class="contactAgency__worker">
                                        <div class="contactAgency__avatar"><img src="<?php echo TEMP_URI;?> /assets/images/pointOnMap.png" alt="avatar"></div>
                                        <div class="contactAgency__workerInfo"><span>SkyTower,<br>ul. Gwiaździsta 66 lokal 2B.06,<br>53-413 Wrocław,<br>Polska</span></div>
                                    </div>
                                    <div class="contactAgency__phone">
                                        <div class="contactAgency__phone__icon"><img src="<?php echo TEMP_URI;?> /assets/images/icoCall.png" alt="avatar"></div>
                                        <div class="contactAgency__phoneNumber"><a href="tel:+48717572208">+48 71 757 22 08</a></div>
                                    </div>
                                    <div class="contactAgency__email">
                                        <div class="contactAgency__email__icon"><img src="<?php echo TEMP_URI;?> /assets/images/airplane.svg" alt="avatar"></div>
                                        <div class="contactAgency__emailAddress"><a class="negativeHover" href="mailto:biuro@personnelservice.pl">biuro@personnelservice.pl</a></div>
                                    </div>
                                </div>
                                <div class="contactAgency__contactWrapper">
                                    <div class="contactAgency__worker">
                                        <div class="contactAgency__avatar"><img src="<?php echo TEMP_URI;?> /assets/images/pointOnMap.png" alt="avatar"></div>
                                        <div class="contactAgency__workerInfo"><span>XYZ,<br>ul. XYZ XYZ lokal XYZ,<br>11-111 Lwów,<br>Ukraina</span></div>
                                    </div>
                                    <div class="contactAgency__phone">
                                        <div class="contactAgency__phone__icon"><img src="<?php echo TEMP_URI;?> /assets/images/icoCall.png" alt="avatar"></div>
                                        <div class="contactAgency__phoneNumber"><span>+48 11 111 11 11</span></div>
                                    </div>
                                    <div class="contactAgency__email">
                                        <div class="contactAgency__email__icon"><img src="<?php echo TEMP_URI;?> /assets/images/airplane.svg" alt="avatar"></div>
                                        <div class="contactAgency__emailAddress"><span>asdasdasdasdasdasdasd@personnelservice.pl</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--calendar-->
    <div class="calendarPanel bgDarkGray textWhite shadow">
        <div class="calendarPanel__content">
            <div class="calendarPanel__wrapper">
                <div class="calendarPanel__main">
                    <div class="calendarPanel__description">
                        <div class="calendarPanel__topic"><span>Kalendarium</span></div>
                        <div class="calendarPanel__text"><span>
                    Tutaj znajdziesz wszelkie informacje o terminach publikacji raportów okresowych,konferencjach wynikowych, datach walnych zgromadzeń, oraz datach najistotniejszych zdarzeń dotyczących
                    firmy Personnel Service.</span></div>
                    </div>
                    <div class="calendarPanel__calendarSector">
                        <div class="calendarPanel__shortInfo"><span>Dzisiaj jest: 3 kwietnia 2020</span></div>
                        <div class="calendarPanel__calendarBox">
                            <div class="calendarPanel__calendarWrapper">
                                <div class="calendarPanel__calendarSpace">
                                    <div class="calendarPanel__currentMonthYear"><span>Kwiecień 2020</span></div>
                                    <div class="calendarPanel__days">
                                        <div class="calendarPanel__dayItem event active" data-event="{&quot;day&quot;:1, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>1</span></div>
                                        <div class="calendarPanel__dayItem event disableForReal"><span></span></div>
                                        <div class="calendarPanel__dayItem event" data-event="{&quot;title&quot;:&quot;Test wydarzenia XYZ.&quot;,&quot;day&quot;:3,&quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>3</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:4, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>4</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:5, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>5</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:6, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>6</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:7, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>7</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:8, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>8</span></div>
                                        <div class="calendarPanel__dayItem event" data-event="{&quot;title&quot;:&quot;Test wydarzenia XYZ.&quot;,&quot;day&quot;:9,&quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>9</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:10, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>10</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:11, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>11</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:12, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>12</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:13, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>13</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:14, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>14</span></div>
                                        <div class="calendarPanel__dayItem event" data-event="{&quot;title&quot;:&quot;Test wydarzenia XYZ.&quot;,&quot;day&quot;:15,&quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>15</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:16, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>16</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:17, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>17</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:18, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>18</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:19, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>19</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:20, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>20</span></div>
                                        <div class="calendarPanel__dayItem event" data-event="{&quot;title&quot;:&quot;Pełna nazwa najbliższego wydarzenia zaplanowanego na dany dzień.&quot;,&quot;day&quot;:21,&quot;weekday&quot;:&quot;Piątek&quot;}"><span>21</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:22, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>22</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:23, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>23</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:24, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>24</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:25, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>25</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:26, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>26</span></div>
                                        <div class="calendarPanel__dayItem event" data-event="{&quot;title&quot;:&quot;Test wydarzenia XYZ.&quot;,&quot;day&quot;:27,&quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>27</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:28, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>28</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:29, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>29</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:30, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>30</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:31, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>31</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:32, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>32</span></div>
                                        <div class="calendarPanel__dayItem event" data-event="{&quot;title&quot;:&quot;Test wydarzenia XYZ.&quot;,&quot;day&quot;:33,&quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>33</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:34, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>34</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:35, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>35</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:36, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>36</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:37, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>37</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:38, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>38</span></div>
                                        <div class="calendarPanel__dayItem event" data-event="{&quot;title&quot;:&quot;Test wydarzenia XYZ.&quot;,&quot;day&quot;:39,&quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>39</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:40, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>40</span></div>
                                        <div class="calendarPanel__dayItem disabled" data-event="{&quot;day&quot;:41, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>41</span></div>
                                        <div class="calendarPanel__dayItem" data-event="{&quot;day&quot;:42, &quot;weekday&quot;:&quot;Poniedziałek&quot;}"><span>42</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="calendarPanel__selectedDay">
                                <div class="calendarPanel__cardMonthYear"><span>Kwiecień 2020</span></div>
                                <div class="calendarPanel__cardDay"><span></span></div>
                                <div class="calendarPanel__cardWeekday"><span></span></div>
                                <div class="calendarPanel__cardSpace"></div>
                                <div class="calendarPanel__cardDesc"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="backgroundSector shadow" style="background-image: url(<?php echo TEMP_URI;?> /assets/images/runners.png)"></div>
</div>
<?php get_footer();
