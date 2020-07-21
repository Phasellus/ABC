import $ from 'jquery';

const subNavBlackBar = {
  init() {
    Array.from(
      $(
        '.subNavBlackBar .subNavBlackBar__container .subNavBlackBar__subList li a'
      )
    ).forEach(el =>
      $(el).on('click', e => {
        $(e.target)
          .attr('href')
          .startsWith('#') && e.preventDefault();
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

export default subNavBlackBar;
