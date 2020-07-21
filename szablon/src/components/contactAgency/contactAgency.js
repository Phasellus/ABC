import $ from 'jquery';
import 'jquery-selectric';

const contactAgency = {
  settings: {
    target: '.contactAgency',
    text: '.contactAgency__text',
    separated: '.contactAgency__separated',
    contactWrapper: '.contactAgency__contactWrapper',
    select: '.contactAgency__select',
    map: '.contactAgency__map',
    marker: '.marker'
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
      select: target.find(settings.select),
      map: target.find(settings.map),
      marker: target.find(settings.marker)
    };
    callback();
  },
  bindEvents() {
    $(this.$target.text).delegate(this.settings.separated, 'click', event =>
      this.toggleMenu($(event.currentTarget).index())
    );
    $(this.$target.marker).on('click', event => {
      this.toggleMenu($(event.currentTarget).index('.marker'));
    });
    $(this.$target.select).selectric({
      disableOnMobile: false,
      nativeOnMobile: false
    });

    $(this.$target.select)
      .selectric()
      .on('change', event =>
        this.toggleMenu(parseInt(event.currentTarget.value))
      );
    $(window).on('load resize', this.mapViewBox.bind(this));
    $(window).on('load', this.toggleMenu(0));
  },
  mapViewBox(event) {
    if ($(window).width() < 960) {
      if ($(window).width() < 500) {
        $(this.settings.map)
          .find('#Warstwa_1')
          .attr('viewBox', '350 600 700 700');

        $(this.settings.map)
          .find('#Warstwa_1')
          .css('height', '250px');
      } else {
        $(this.settings.map)
          .find('#Warstwa_1')
          .attr('viewBox', '250 350 900 900');
        $(this.settings.map)
          .find('#Warstwa_1')
          .css('height', '400px');
      }
    } else {
      $(this.settings.map)
        .find('#Warstwa_1')
        .attr('viewBox', '100 120 1300 1200');
      $(this.settings.map)
        .find('#Warstwa_1')
        .css('height', 'auto');
    }
  },
  toggleMenu(event) {
    //DISABLE ALL
    $(this.settings.contactWrapper).each(function() {
      $(this).css('display', 'none');
    });

    $(this.settings.separated).each(function() {
      $(this)
        .children('.contactAgency__arrow')
        .children('img')
        .css('display', 'none');
      $(this)
        .find('span')
        .css({
          borderBottom: '1px solid #FFB5BD',
          // fontWeight: 'normal',
          color: '#FFB5BD'
        });
      $(this)
        .find('img')
        .css('display', 'none');
    });

    $(this.settings.marker).each(function() {
      $(this)
        .children('g')
        .css('opacity', 0.5);
    });

    //ACTIVE EVENT
    $(this.settings.contactWrapper)
      .eq(event)
      .css('display', 'block');

    $(this.settings.marker)
      .eq(event)
      .children('g')
      .css('opacity', 1);

    $(this.settings.separated)
      .eq(event)
      .children('.contactAgency__arrow')
      .children('img')
      .css('display', 'block');

    $(this.settings.separated)
      .eq(event)
      .find('span')
      .css({
        borderBottom: 'none',
        fontWeight: 'bold',
        color: 'inherit'
      });
    $(this.settings.separated)
      .eq(event)
      .children('.contactAgency__item')
      .children('.contactAgency__icon')
      .children('img')
      .css('display', 'block');

    $('.contactAgency__select')
      .prop('selectedIndex', event)
      .selectric('refresh');
  }
};
export default contactAgency;
