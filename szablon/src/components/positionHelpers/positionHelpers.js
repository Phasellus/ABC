import $ from 'jquery';

const positionHelpers = {
  returnPositionHelpersHeight() {
    const windowHeight = $(window).height();
    const headerHeight = $('.headerPosition').height();

    return windowHeight - headerHeight;
  },
  init() {
    const responsiveMarginsPositionHelper = $('.responsiveMargins');

    function calculateMarginTop(headerHeight) {
      const windowWidth = $(window).width();

      if (windowWidth <= 980) {
        $(responsiveMarginsPositionHelper).css('margin-top', `335px`);
      } else {
        $(responsiveMarginsPositionHelper).css(
          'margin-top',
          `${headerHeight <= 705 ? headerHeight : 705}px`
        );
      }
    }

    calculateMarginTop(positionHelpers.returnPositionHelpersHeight());

    $(window).on('resize', () => {
      calculateMarginTop(positionHelpers.returnPositionHelpersHeight());
    });
  }
};

export default positionHelpers;
