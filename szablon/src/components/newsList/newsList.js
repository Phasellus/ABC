import $ from 'jquery';

const newsList = {
  settings: {
    target: '.newsList.-column',
    box: '.newsList__box',
    item: '.newsList__item',
    imageSector: '.backgroundSector',
    footer: '.footer',
    api_url: '/wp-admin/admin-ajax.php'
  },
  currentPage: 1,
  lastPage: false,
  init(args) {
    this.settings = $.extend(true, this.settings, args);
    if (this.settings.target.length) {
      this.catchDOM(this.settings, this.afterInit.bind(this));
    }
  },

  catchDOM(settings, callback) {
    const target = $(settings.target);
    const imageSector = $(settings.imageSector);
    const footer = $(settings.footer);

    this.$target = {
      root: target,
      item: target.find(settings.item),
      box: target.find(settings.box),
      imageSector,
      footer
    };

    if (this.$target.root.length === 1) callback();
  },

  afterInit() {
    this.bindEvents();
  },

  bindEvents() {
    const footerHeight = $(this.$target.footer).height();
    const imageSectorHeight = $(this.$target.imageSector).height();

    $(window).on('scroll', () => {
      const windowScrollTop = $(window).scrollTop();
      const fetchPlace =
        $(document).height() -
        $(window).height() -
        footerHeight -
        imageSectorHeight;
      if (windowScrollTop >= fetchPlace && !this.lastPage) {
        this.fetchMoreData();
      }
    });

    $(document).ajaxStart(() => {
      $(window).off('scroll');
    });

    $(document).ajaxSuccess(() => {
      $(window).on('scroll', () => {
        const windowScrollTop = $(window).scrollTop();
        const fetchPlace =
          $(document).height() -
          $(window).height() -
          footerHeight -
          imageSectorHeight;
        if (
          windowScrollTop >= fetchPlace &&
          windowScrollTop <= fetchPlace + 50
        ) {
          this.fetchMoreData();
        }
      });
    });
  },

  fetchMoreData() {
    $.ajax({
      url: this.settings.api_url,
      data: {
        page: this.currentPage++,
        action: 'news_list'
      },
      contentType: 'application/json',
      dataType: 'json',
      success: result => {
        result.forEach(element =>
          this.$target.box.append(`
            <div class="newsList__item">
            <div class="newsItem -row">
              <div class="newsItem__wrapper">
                <div class="newsItem__column">
                  <a class="newsItem__link" href="${element.link}">
                    <img class="newsItem__img" src="${element.thumb}" alt="${element.thumb_alt}"/>
                  </a>
                </div>
                <div class="newsItem__column">
                  <div class="newsItem__contentBox">
                    <div class="newsItem__contentItem">
                      <span class="newsItem__date">${element.date}</span>
                    </div>
                    <div class="newsItem__contentItem">
                      <a class="newsItem__link" href="${element.link}">
                        <span class="newsItem__title">${element.post.post_title}</span>
                      </a>
                    </div>
                    <div class="newsItem__contentItem">
                      <p class="newsItem__text">${element.text}</p>
                    </div>
                    <div class="newsItem__contentItem -btn">
                      <a class="newsItem__btn" href="${element.link}">${element.see}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div></div>`)
        );
      }
    });
  }
};

export default newsList;
