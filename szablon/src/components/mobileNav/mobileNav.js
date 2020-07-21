import $ from 'jquery';

const mobileNav = {
  settings: {
    target: '.mobileNav',
    item: '.mobileNav__item',
    activeLink: '.mobileNav__link.-active',
    content: '.mobileNav__subList'
  },

  init(args) {
    this.settings = $.extend(true, this.settings, args);
    if (this.settings.target) {
      this.catchDOM(this.settings, this.afterInit.bind(this));
    }
  },

  catchDOM(settings, callback) {
    const target = $(settings.target);

    this.$target = {
      root: target,
      item: target.find(settings.item),
      activeLink: target.find(settings.activeLink),
      content: target.find(settings.content)
    };

    callback();
  },

  afterInit() {
    this.bindEvents();
    this.initHideSubMenu();
  },

  bindEvents() {
    this.$target.item.on('click', event => this.toggleNav(event));
  },

  initHideSubMenu() {
    $(this.$target.content)
      .not($(this.$target.activeLink).siblings('ul'))
      .hide();
  },

  toggleNav(event) {
    if ($(event.currentTarget).find('.mobileNav__subList').length > 0) {
      if ($(event.currentTarget).hasClass('-active')) {
        $(event.currentTarget).removeClass('-active');
        this.slideUpNav();
      } else {
        $(this.$target.item).removeClass('-active');
        $(event.currentTarget).addClass('-active');
        this.slideDownNav(event.currentTarget);
      }
    }
  },

  slideUpNav() {
    $(this.$target.content).slideUp(200);
  },

  slideDownNav(activeItem) {
    this.slideUpNav();
    $(activeItem)
      .children('ul')
      .slideDown(200);
  }
};

export default mobileNav;
