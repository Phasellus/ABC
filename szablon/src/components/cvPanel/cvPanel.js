import $ from 'jquery';
import 'jquery-selectric';
import 'jquery-validation';
$.validator.addMethod(
  'customDate',
  function(value, element) {
    if (value) {
      return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
    } else {
      return true;
    }
  },
  'Please enter a date in the format dd/mm/yyyy.'
);

$.validator.addMethod(
  'customPhone',
  function(value, element) {
    if (value) {
      return value.match(/^\d{3} \d{3} \d{3}$/);
    } else {
      return true;
    }
  },
  'Please enter a phone numer format.'
);
const cvPanel = {
  settings: {
    target: '.cvPanel',
    cvPanel__content: '.cvPanel__content',
    cvPanel__wrapper: '.cvPanel__wrapper',
    cvPanel__contentBg: '.cvPanel__contentBg'
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
      cvPanel__content: target.find(settings.cvPanel__content),
      cvPanel__wrapper: target.find(settings.cvPanel__wrapper),
      cvPanel__contentBg: target.find(settings.cvPanel__contentBg)
    };
    callback();
  },
  bindEvents() {
    $('#checkAll').click(function() {
      console.log('test');
      $('input:checkbox')
        .not(this)
        .prop('checked', this.checked);
    });
    $('.agreement').click(function() {
      var all = $('.agreement').length;
      var checked = 0;
      $('.agreement').each(function() {
        if ($(this).prop('checked') === true) checked++;
      });
      all === checked
        ? $('#checkAll').prop('checked', true)
        : $('#checkAll').prop('checked', false);
    });
    $('#addCV').validate({
      onkeyup: false,
      onclick: false,
      onfocusout: false,
      rules: {
        agreementAll: {},
        name: {
          required: true
        },
        surname: {
          required: true
        },
        email: {
          required: function() {
            return true;
          },
          email: true
        },
        city: {
          required: true
        },
        birthday: {
          customDate: true
        },
        phoneNumber: {
          required: true,
          customPhone: true
        },
        country: {
          required: true
        },
        kindOfJob: {
          required: true
        },
        agreement1: {
          required: true
        },
        agreement2: {
          required: true
        }
      },
      errorPlacement: function(error, element) {
        $(element)
          .parent()
          .children('.cvPanel__info')
          .show();
      },
      success: function(error, element) {
        $(element)
          .parent()
          .children('.cvPanel__info')
          .hide();
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  }
};
export default cvPanel;
