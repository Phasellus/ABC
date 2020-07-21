import $ from 'jquery';
import 'jquery-selectric';

const languagesSwitcher = {
  settings: {
    target: '.languagesSwitcher',
    select: '.languagesSwitcher__select'
  },

  init(args) {
    this.settings = $.extend(true, this.settings, args);
    if (this.settings.target.length > 0) {
      this.catchDOM(this.settings, this.afterInit.bind(this));
    }
  },

  catchDOM(settings, callback) {
    const target = $(settings.target);

    this.$target = {
      root: target,
      select: target.find(settings.select)
    };

    callback();
  },

  afterInit() {
    $(this.$target.select).selectric({
      disableOnMobile: false,
      nativeOnMobile: false
    });
    $(this.$target.select).on('change', function() {
      if (
        $(this)
          .find('option:selected')
          .val() !== ''
      )
        window.location.href = $(this)
          .find('option:selected')
          .val();
    });
  }
};

export default languagesSwitcher;
