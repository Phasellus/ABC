import $ from 'jquery';

const bannerMain = {
  returnAvailableSpaceForBanner() {
    const windowHeight = $(window).height();
    const headerHeight = $('.headerPosition').height();

    return windowHeight - headerHeight;
  },
  init() {
    const bannerContainer = $('.bannerMain');
    const calculateBannerHeight = height => {
      $(bannerContainer).css('height', height <= 705 ? height : 705);
    };

    calculateBannerHeight(bannerMain.returnAvailableSpaceForBanner());
    $(window).on('resize', () => {
      calculateBannerHeight(bannerMain.returnAvailableSpaceForBanner());
    });
  }
};

export default bannerMain;
