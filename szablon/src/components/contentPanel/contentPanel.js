import $ from 'jquery';

const contentPanel = {
  blurHeader() {
    const blurredContainers = $('.blur');
    $(window).on('scroll', () => {
      console.log($(window).scrollTop());
    });
  },
  init() {
    contentPanel.blurHeader();
  }
};

export default contentPanel;
