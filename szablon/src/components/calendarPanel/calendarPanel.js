import $ from 'jquery';

const calendarPanel = {
  settings: {
    target: '.calendarPanel',
    days: '.calendarPanel__days',
    selectedDay: '.calendarPanel__selectedDay',
    dayItem: '.calendarPanel__dayItem'
  },

  init(args) {
    this.settings = $.extend(true, this.settings, args);
    if ($(this.settings.target).length > 0) {
      this.catchDOM(this.settings, this.afterInit.bind(this));
    }
  },
  afterInit() {
    this.bindEvents();
    this.setSelectedDay($(this.settings.dayItem + '.active'));
  },
  catchDOM(settings, callback) {
    const target = $(settings.target);

    this.$target = {
      root: target,
      days: target.find(settings.days),
      selectedDay: target.find(settings.selectedDay),
      dayItem: target.find(settings.dayItem)
    };
    callback();
  },
  bindEvents() {
    $(this.$target.days).delegate(this.settings.dayItem, 'click', event => {
      this.setSelectedDay($(event.currentTarget));
    });
  },
  setSelectedDay(event) {
    let values = event.data('event');
    if (values) {
      $('.calendarPanel__dayItem').each(function() {
        $(this).removeClass('active');
      });
      $(event).addClass('active');
      $('.calendarPanel__cardDay>span').text(values.day);
      $('.calendarPanel__cardWeekday>span').text(values.weekday);
      if (values.title !== undefined) {
        $('.calendarPanel__cardDesc>span').text(values.title);
      } else {
        $('.calendarPanel__cardDesc>span').text('Brak wydarzeń');
      }
    }
  }
};
export default calendarPanel;
