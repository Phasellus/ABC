import $ from 'jquery';
import 'jquery-selectric';
import 'jquery-validation';

const countPercents = (value, maxVal) => {
  return (value * 100) / maxVal + '%';
};
const ajaxForm = {
  init : function () {
    $('').on('submit',function (e) {
      e.preventDefault()
      let data={
        action : ''
      }
          $.ajax({
            url: window.ajaxurl,
            data: data,
            method: 'POST',
            success: (response) => {
              console.log(response)
            },
            error: function(xhr, data) {
              $('[data-send]').html($('[data-send]').data('send'));
              $('.bannerFormBox__thinTextAlert').html(
                'Błąd serwera, spróbuj skontaktować się z administratorem serwera'
              );
            }
          });
    })
  }
}
$.validator.addMethod(
  'customPhone',
  function(value) {
    if (value) {
      return value.match(/^\d{3} \d{3} \d{3}$/);
    } else {
      return true;
    }
  },
  'Please enter valid phone number.'
);

$.validator.addMethod(
  'requireTrade',
  function(value) {
    if (value) {
      return value !== '';
    } else {
      return true;
    }
  },
  'Please enter valid phone number.'
);

const frontPageForm = {
  data: {
    form: null,
    currentStep: 1,
    syncingData: false
  },
  init() {
    this.setData();
    this.bindEvents();
    ajaxForm.init()
  },
  setData() {
    this.data.form = $('.js-main-box-form');
  },
  bindEvents() {
    //this.data.form.on('click', '.-next', e => this.nextStep(e));
    this.data.form.on('click', '.-prev', e => this.previousStep(e));
    //sync state between forms
    this.data.form.on('change', 'input, select', e => this.syncData(e));
  },
  syncData(e) {
    const $this = $(e.currentTarget);
    const $target = $(e.delegateTarget).hasClass('-desktop')
      ? $('.js-main-box-form.-mobile')
      : $('.js-main-box-form.-desktop');
    if ($this.attr('type') === 'checkbox') {
      $('[name="' + $this.attr('name') + '"]').prop(
        'checked',
        $this.is(':checked')
      );
    }
    $target.find('[name="' + $this.attr('name') + '"]').val($this.val());
    $('#select, #selectMobile').selectric('refresh');
    $('#select, #selectMobile').selectric('init');
  },
  nextStep(e) {
    e.preventDefault();
    this.changeStep(1);
  },
  previousStep(e) {
    e.preventDefault();
    this.changeStep(-1);
  },
  changeStep(change) {
    let oldStep = this.data.currentStep;
    let newStep = this.data.currentStep + change;
    this.data.currentStep = newStep;
    this.data.form.find('.-step' + oldStep).hide();
    this.data.form.find('.-step' + newStep).show();
  },
  submit() {
    let data = {
      action: 'bannerForm'
    };
    this.data.form.find('input, select').each(function() {
      data[$(this).attr('name')] = $(this).val();
    });
    $('.bannerFormBox__thinTextAlert').html('');
    $('[data-send]').html('<div class="loader"></div>');
    $.ajax({
      url: window.ajaxurl,
      data: data,
      method: 'POST',
      success: () => {
        $('[data-send]').html($('[data-send]').data('send'));
        this.changeStep(1);
        setTimeout(() => {
          this.changeStep(-2);
        }, 4000);
      },
      error: function(xhr, data) {
        $('[data-send]').html($('[data-send]').data('send'));
        $('.bannerFormBox__thinTextAlert').html(
          'Błąd serwera, spróbuj skontaktować się z administratorem serwera'
        );
      }
    });
  }
};

const bannerFormBox = {
  addSelectric() {
    $('#select, #selectMobile').selectric({
      disableOnMobile: false,
      nativeOnMobile: false,
      maxHeight: 190
    });
    $('#slider, #sliderMobile').on('input', e => {
      $('#employeesCount, #employeesCountMobile').text(e.target.value);
      $('#slider, #sliderMobile').css(
        'background',
        'linear-gradient(90deg, #F7001B 0%, #F7001B ' +
          countPercents(e.target.value, 1500) +
          ' , #d3d3d3 ' +
          countPercents(e.target.value, 1500) +
          ' , #d3d3d3 100%)'
      );
    });
  },
  initializeAgreementModal() {
    const modalOverlay = $('.bannerFormBox__agreementsOverlay');
    const modalMobileOverlay = $('.bannerFormBox__agreementsMobileOverlay');
    const openModalLink = $('.bannerFormBox__agreementLink');
    const closeModalLink = $('#closeModal');
    const openMobileModalLink = $('.bannerFormBox__agreementMobileLink');
    const closeMobileModalLink = $('#closeMobileModal');

    $(openModalLink).on('click', e => {
      e.preventDefault();
      e.stopPropagation();
      $(modalOverlay).fadeIn();
    });

    $(closeModalLink).on('click', e => {
      e.preventDefault();
      $(modalOverlay).fadeOut();
    });

    $(openMobileModalLink).on('click', e => {
      e.preventDefault();
      e.stopPropagation();
      $(modalMobileOverlay).fadeIn();
    });

    $(closeMobileModalLink).on('click', e => {
      e.preventDefault();
      $(modalMobileOverlay).fadeOut();
    });
  },
  initializeRecruitmentInfoForm() {
    Array.from($('#recruitmentInfoMobile, #recruitmentInfo')).forEach(form => {
      $(form).validate({
        onkeyup: false,
        onclick: false,
        onfocusout: false,
        rules: {
          agreementAll: {},
          ps_email: {
            required: function() {
              return true;
            },
            email: true
          },
          ps_phone: {
            required: true,
            customPhone: true
          },
          agreement: {
            required: true
          }
        },
        errorPlacement: function(error, element) {
          $(element)
            .parent()
            .children('.bannerFormBox__info')
            .show();
        },
        success: function(error, element) {
          $(element)
            .parent()
            .children('.bannerFormBox__info')
            .hide();
        },
        submitHandler: function() {
          frontPageForm.submit();
        }
      });
    });
  },
  initializeSelectSpecializationForm() {
    Array.from($('#selectSpecialization, #selectSpecializationMobile')).forEach(
      form => {
        $(form).validate({
          onkeyup: false,
          onclick: false,
          onfocusout: false,
          rules: {
            ps_category: {
              required: true,
              requireTrade: true
            },
            special: {
              required: true
            }
          },
          errorPlacement: function(error, element) {
            if (
              !!$(element).attr('id') &&
              $(element)
                .attr('id')
                .startsWith('select')
            ) {
              $(element)
                .parent()
                .parent()
                .parent()
                .children('.bannerFormBox__info, .bannerFormBox__infoFirstStep')
                .show();
            } else {
              $(element)
                .parent()
                .children('.bannerFormBox__info, .bannerFormBox__infoFirstStep')
                .show();
            }
          },
          success: function(error, element) {
            if (
              !!$(element).attr('id') &&
              $(element)
                .attr('id')
                .startsWith('select')
            ) {
              $(element)
                .parent()
                .parent()
                .parent()
                .children('.bannerFormBox__info, .bannerFormBox__infoFirstStep')
                .hide();
            } else {
              $(element)
                .parent()
                .children('.bannerFormBox__info, .bannerFormBox__infoFirstStep')
                .hide();
            }
          },
          submitHandler: function() {
            frontPageForm.changeStep(+1);
          }
        });
      }
    );
  },
  init: () => {
    $(function() {
      bannerFormBox.addSelectric();
      bannerFormBox.initializeRecruitmentInfoForm();
      bannerFormBox.initializeSelectSpecializationForm();
      bannerFormBox.initializeAgreementModal();
      frontPageForm.init();
    });
  }
};

export default bannerFormBox;
