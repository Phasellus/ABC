import $ from 'jquery';

const footerMenuCategory = {
  settings: {
    target: '.footerMenuCategory',
    element: '.footerMenuCategory__titleBox',
    content: '.footerMenuCategory__secondLevelMenu'
  },

  init(args) {
    this.settings = $.extend(true, this.settings, args);
    if (this.settings.target.length) {
      this.catchDOM(this.settings, this.afterInit.bind(this));
    }
  },

  catchDOM(settings, callback) {
    const target = $(settings.target);
    this.$target = {
      root: target,
      element: target.find(settings.element),
      content: target.find(settings.content)
    };
    callback();
  },

  afterInit() {
    this.bindEvents();
  },

  bindEvents() {
    let width = $(window).width();

    $(window).on('resize', () => {
      width = $(window).width();
      if (width > 980) this.slideDownEachOne();
      if (width <= 980) this.slideUpEachOne();
    });

    this.$target.element.on('click', event => {
      this.checkWindowWidth(event, width);
    });
  },

  checkWindowWidth(event, width) {
    if (width <= 980) {
      this.toggleList(event);
    } else undefined;
  },

  toggleList(event) {
    if ($(event.currentTarget).hasClass('-active')) {
      $(event.currentTarget).removeClass('-active');
      this.slideUp(event);
    } else {
      this.slideUpEachOne();
      this.slideDown(event);
      $(event.currentTarget).addClass('-active');
    }
  },

  slideUpEachOne() {
    for (let i = 0; i < this.$target.element.length; i++) {
      $(this.$target.content[i]).slideUp(200);
      $(this.$target.element[i]).removeClass('-active');
      $(this.$target.element[i])
        .children()
        .first()
        .removeClass('fa-caret-down')
        .addClass('fa-caret-right');
    }
  },

  slideDownEachOne() {
    for (let i = 0; i < this.$target.element.length; i++) {
      $(this.$target.content[i]).show();
      $(this.$target.element[i]).removeClass('-active');
    }
  },

  slideDown(event) {
    $(event.currentTarget)
      .siblings(this.settings.content)
      .slideDown(200);

    $(event.currentTarget)
      .children()
      .first()
      .removeClass('fa-caret-right')
      .addClass('fa-caret-down');
  },

  slideUp(event) {
    $(event.currentTarget)
      .siblings()
      .slideUp(200);

    $(event.currentTarget)
      .children()
      .first()
      .removeClass('fa-caret-down')
      .addClass('fa-caret-right');
  }
};
export default footerMenuCategory;
