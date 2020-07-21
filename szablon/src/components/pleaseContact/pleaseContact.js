import $ from 'jquery';
import 'jquery-selectric';

const pleaseContact = {
  settings: {
    target: '.pleaseContact',
    text: '.pleaseContact__text',
    separated: '.pleaseContact__separated',
    contactWrapper: '.pleaseContact__contactWrapper',
    select: '.pleaseContact_select'
  },

  init(args) {
    this.settings = $.extend(true, this.settings, args);
    if ($(this.settings.target).length > 0) {
      this.catchDOM(this.settings, this.afterInit.bind(this));
    }
  },
  afterInit() {
    this.bindEvents();
  },
  catchDOM(settings, callback) {
    const target = $(settings.target);

    this.$target = {
      root: target,
      text: target.find(settings.text),
      separated: target.find(settings.separated),
      contactWrapper: target.find(settings.contactWrapper),
      select: target.find(settings.select)
    };
    callback();
  },
  bindEvents() {
    $(this.$target.text).delegate(this.settings.separated, 'click', event =>
      this.toggleMenu($(event.currentTarget).index())
    );

    $(this.$target.select).selectric({
      disableOnMobile: false,
      nativeOnMobile: false
    });

    $(this.$target.select)
      .selectric()
      .on('change', event =>
        this.toggleMenu(parseInt(event.currentTarget.value))
      );
    $(window).on('load', this.toggleMenu(0));
  },
  toggleMenu(event) {
    //DISABLE ALL
    $(this.settings.contactWrapper).each(function() {
      $(this).css('display', 'none');
    });
    $(this.settings.separated).each(function() {
      $(this)
        .find('span')
        .css({
          padding: 0,
          fontWeight: 'normal'
        });
    });
    $(this.settings.separated).each(function() {
      $(this)
        .children('img')
        .css('opacity', '0');
    });
    $(this.settings.separated).each(function() {
      $(this)
        .find('img')
        .css('display', 'none');
    });
    //ACTIVE EVENT
    $(this.settings.contactWrapper)
      .eq(event)
      .css('display', 'block');

    $(this.settings.separated)
      .eq(event)
      .children('.pleaseContact__arrow')
      .children('img')
      .css('display', 'block');

    $(this.settings.separated)
      .eq(event)
      .find('span')
      .css({
        paddingBottom: '1px',
        borderBottom: 'none',
        fontWeight: 'bold'
      });
    $('.pleaseContact_select')
      .prop('selectedIndex', event)
      .selectric('refresh');

    $(this.settings.separated)
      .eq(event)
      .children('.pleaseContact__item')
      .children('.pleaseContact__icon')
      .children('img')
      .css('display', 'block');
  }
};
export default pleaseContact;
