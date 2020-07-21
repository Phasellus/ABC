import 'babel-polyfill';
import $ from 'jquery';
import footerMenuCategory from './components/footerMenuCategory/footerMenuCategory';
import pleaseContact from './components/pleaseContact/pleaseContact';
import contactAgency from './components/contactAgency/contactAgency';
import newsList from './components/newsList/newsList';
import header from './commons/header/header';
import bannerFormBox from './components/bannerFormBox/bannerFormBox';
import calendarPanel from './components/calendarPanel/calendarPanel';
import languagesSwitcher from './components/languagesSwitcher/languagesSwitcher';
import mobileNav from './components/mobileNav/mobileNav';
import cvPanel from './components/cvPanel/cvPanel';
import subNavBlackBar from './components/subNavBlackBar/subNavBlackBar';
import articleBackBox from './components/articleBackBox/articleBackBox';
import blurredOverlay from './components/blurredOverlay/blurredOverlay';
import bannerMain from './components/bannerMain/bannerMain';
import positionHelpers from './components/positionHelpers/positionHelpers';

$(document).ready(() => {
  // PUT LOADERS HERE
  header.init();
  mobileNav.init();
  footerMenuCategory.init();
  pleaseContact.init();
  contactAgency.init();
  newsList.init();
  bannerFormBox.init();
  calendarPanel.init();
  languagesSwitcher.init();
  cvPanel.init();
  subNavBlackBar.init();
  articleBackBox.init();
  blurredOverlay.init();
  bannerMain.init();
  positionHelpers.init();
});
