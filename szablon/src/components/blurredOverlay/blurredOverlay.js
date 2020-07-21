import $ from 'jquery';

const blurredOverlay = {
  init() {
    const headerHeight = $('.headerPosition').height();

    const calculateBlurredOverlayHeight = headerPositionHeight => {
      $('#blurredOverlay').css(
        'height',
        `calc(100% - ${headerPositionHeight}px)`
      );
    };

    calculateBlurredOverlayHeight(headerHeight);

    $(window).on('resize', () => {
      const headerHeight_resize = $('.headerPosition').height();
      calculateBlurredOverlayHeight(headerHeight_resize);
    });
  }
};

export default blurredOverlay;
