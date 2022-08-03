$(document).ready(function() {
    wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       400,          // < --------------- This one
          mobile:       true,       // default
          live:         true        // default
        }
      )
      wow.init();
    if($('.intro-section__slider').length) {
        $('.intro-section__slider').slick({
            prevArrow: '<button class="slick-prev"><svg style="display: block" viewBox="0 0 13.3 25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 12.5,12.5 0.5,24.5"></polyline> </svg></button>',
            nextArrow: '<button class="slick-next"><svg style="display: block" viewBox="0 0 13.3 25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 12.5,12.5 0.5,24.5"></polyline> </svg></button>',
        })
    }
    
    if($('.relinking-section__slider').length) {
        $('.relinking-section__slider').slick({
            slidesToShow : screen.availWidth < 760 ? 1 :
                           screen.availWidth < 1090 ? 2 : 3,
        })
    }

    if($('.houses-content__slider').length) {
        $('.houses-content__slider').slick({
            dots: true,
            prevArrow: '<button class="slick-prev"><svg style="display: block" viewBox="0 0 13.3 25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 12.5,12.5 0.5,24.5"></polyline> </svg></button>',
            nextArrow: '<button class="slick-next"><svg style="display: block" viewBox="0 0 13.3 25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 12.5,12.5 0.5,24.5"></polyline> </svg></button>',
        })
    }

    if($('.houses-tabs__nav').length) {
        $('.houses-tab__title').on('click', function(e) {
            if($(e.currentTarget).hasClass('active')) return

            const activeTabContent = $('.houses-tab.active')
            const activeTabNav = $('.houses-tab__title.active')
            const dataFor = $(e.currentTarget).data('for')
            const tabContent = $('.houses-tab[data-tab="' + dataFor + '"]')

            activeTabContent.removeClass('active')
            activeTabNav.removeClass('active')
            tabContent.addClass('active')
            $(e.currentTarget).addClass('active')
        })
    }

    if($('.picking-section__tabs').length) {
        $('.picking-section__list').on('click', function(e) {
            if($(e.target).hasClass('picking-section__list-item') || $(e.target).parent().hasClass('picking-section__list-item')  || $(e.target).parents().hasClass('picking-section__list-btn')) {
                const picking = $(e.target).parents('.picking-section__list-item').length ? $(e.target).parents('.picking-section__list-item') : $(e.target) 
                picking.toggleClass('active')
            }
        })

        $('.picking-section__nav-txt').on('click', function(e) {
            if($(e.target).parent().hasClass('active')) return

            const pickerDataFor = $(e.target).parent().data('for')
            const pickerContentNextActive = $('.picking-section__tab[data-for="' + pickerDataFor + '"]')
            const activePicker = $('.picking-section__tab.active')
            const activeNavPicker = $('.picking-section__nav-item.active')

            pickerContentNextActive.addClass('active')
            activePicker.removeClass('active')
            activeNavPicker.removeClass('active')
            $(e.target).parent().addClass('active')
        })
    }

    if($('.other-form-content__agree-label').length) {
        $('.other-form-content__agree-label input').change(function(e) {
            $('.other-form-content__agree-label .other-form-content__check').toggleClass('active')
        })
    }

    if($('.effiency-table__show-btn').length) {
        $('.effiency-table__show-btn').on('click', function() {
            const table = $('.effiency-table table')
            table.toggleClass('active')
            $('.effiency-table__title').toggleClass('active')
            if(table.hasClass('active')) {
                $('.effiency-table__show-btn').text('Скрыть сравнительную таблицу технологий строительства')
            } else {
                $('.effiency-table__show-btn').text('Показать сравнительную таблицу технологий строительства')
            }
        })
    }

    if($('.houses-tab__content-slider').length) {
        $('.houses-tab__content-slider').slick({
            dots: true,
            prevArrow: '<button class="slick-prev"><svg style="display: block" viewBox="0 0 13.3 25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 12.5,12.5 0.5,24.5"></polyline> </svg></button>',
            nextArrow: '<button class="slick-next"><svg style="display: block" viewBox="0 0 13.3 25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 12.5,12.5 0.5,24.5"></polyline> </svg></button>',
        })
    }

    if($('.call-btn').length) {
        const form = $('.request-call')
        const bg = $('.dark-bg')
        $('.call-btn').on('click', function() {
            form.addClass('active')
            bg.addClass('active')
        })
    }

    if($('.close-svg').length) {
        const form = $('.request-call')
        const bg = $('.dark-bg')
        $('.close-svg').on('click', function() {
            form.removeClass('active')
            bg.removeClass('active')
        })
        bg.on('click', function(e) {
            form.removeClass('active')
            bg.removeClass('active')
        })
    }

    if($('.gallery-section__content').length) {
        $('.gallery-section__content').slick({
            slidesToShow: screen.availWidth < 500 ? 1 : 
                          screen.availWidth < 768 ? 2 : 3,
        })
    }

    if($('.interactive').length && screen.availWidth > 1000) {
        let scrollPos = 0
        const els = [
            {
                el : $('.first'),
                pos : $('.first').position(),
            },
            {
                el : $('.second'),
                pos : $('.second').position(),
            },
            {
                el : $('.third'),
                pos : $('.third').position(),
            },
            {
                el : $('.four'),
                pos : $('.four').position(),
            }
        ]

        function checkDown(obj) {
            return ( $(window).scrollTop() === obj.pos.top || $(window).scrollTop() > obj.pos.top ) && !( $(obj.el).children('img').hasClass('active') )
        }

        function checkUp(obj) {
            return ( $(window).scrollTop() === obj.pos.top || $(window).scrollTop() < obj.pos.top )
        }

        $(window).scroll(function(){
           var st = $(this).scrollTop();
           if (st > scrollPos){
                if( checkDown( els[0] ) ) {
                    $('.interactive__title').addClass('active')
                    $('.first > div').addClass('active')
                }
                if( checkDown( els[1] ) ) {
                    $('.second > div').addClass('active')
                }
                if( checkDown( els[2] ) ) {
                    $('.third > div').addClass('active')
                }
                if( checkDown( els[3] ) ) {
                    $('.four > div').addClass('active')
                    $('.first > div').css({
                        transform: 'translateY(calc(' + (els[3].pos.top - els[0].pos.top) + 'px)',
                        position: 'static',
                    })
                    $('.second > div').css({
                        transform: 'translateY(calc(' + (els[3].pos.top - els[1].pos.top) + 'px)',
                        position: 'static',
                    })
                    $('.third > div').css({
                        transform: 'translateY(calc(' + (els[3].pos.top - els[2].pos.top) + 'px)',
                        position: 'static',
                    })
                    $('.four > div').css({
                        transform: 'translateY(0' + 'px)',
                        position: 'static',
                    })
                    
                }
           } else {
                if ( checkUp( els[0] ) ) {
                    els[0].el.children('div').removeClass('active')
                    $('.interactive__title').removeClass('active')
                }
                if ( checkUp( els[1] ) ) {
                    els[1].el.children('div').removeClass('active')
                }
                if ( checkUp( els[2] ) ) {
                    els[2].el.children('div').removeClass('active')
                }
                if( checkUp( els[3] ) ) {
                    els[0].el.children('div').attr('style', '')
                    els[1].el.children('div').attr('style', '')
                    els[2].el.children('div').attr('style', '')
                    $('.interactive__title').attr('style', '')
                    els[3].el.children('div').removeClass('active')
                }
           }
           scrollPos = st;
        });
    }
})