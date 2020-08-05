<div id="blurredOverlay"></div>
<div class="bannerMain withBannerBox">
    <div class="bannerMain__image" style="background-image:url('<?php echo TEMP_URI;?>./assets/images/fota_glowna.png');"></div>
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