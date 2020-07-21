import $ from 'jquery';

const articleBackBox = {
  init() {
    Array.from(
      $('.articleBackBox .articleBackBox__content .articleBackBox__nav li a')
    ).forEach(el =>
      $(el).on('click', e => {
        console.log('click');
        e.preventDefault();
        $('body, html')
          .delay(100)
          .animate(
            { scrollTop: $($(e.target).attr('href')).offset().top - 115 },
            500
          );
      })
    );
  }
};

export default articleBackBox;
