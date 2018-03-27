$(function() {
    $(window).load(function() {
        $('.loader').fadeOut();
        $('.page-loader').delay(350).fadeOut('slow');
    });
    var wMode = '';
    showFlag = false, menu = $('#globalnav'), menuBtn = $('.sp-btn'), body = $(document.body), menuWidth = menu.outerWidth(), speed = 300;
    menuBtn.on('click', function() {
        menuToggle();
    });

    function menuToggle(open) {
        if (open == null) {
            open = !body.hasClass('menuopened');
        }
        menuWidth = menu.outerWidth();
        if (open) {
            $('body').animate({
                'left': -menuWidth
            }, speed);
            $('#site-header').animate({
                'margin-right': menuWidth
            }, speed);
            $('#globalnav').animate({
                'right': 0
            }, speed);
            body.addClass('menuopened');
        } else {
            $('#site-header').animate({
                'margin-right': 0
            }, speed);
            $('#globalnav').animate({
                'right': -menuWidth
            }, speed);
            $('body').animate({
                'left': 0
            }, speed);
            body.removeClass('menuopened');
        }
    }
    $('.has-child .has-child2 span').click(function() {
        $(this).parent().toggleClass('active');
    });
    $('a[href^=#]').on('click', function() {
        var speed = 400;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - $('#site-header').height();
        $('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });
    // $('.globalnav-lang a').on({
    //     'mouseenter': function() {
    //         if (5 > wMode) {
    //             return;
    //         }
    //         if ($(this).text() == 'Japanese') {
    //             $(this).text('English');
    //         } else if ($(this).text() == 'English') {
    //             $(this).text('Japanese');
    //         }
    //     },
    //     'mouseleave': function() {
    //         if (5 > wMode) {
    //             return;
    //         }
    //         if ($(this).text() == 'Japanese') {
    //             $(this).text('English');
    //         } else if ($(this).text() == 'English') {
    //             $(this).text('Japanese');
    //         }
    //     }
    // });
    $(window).on('resize', function() {
        var w = $(window).width();
        if (w < 544) {
            wMode = 1;
        } else if (w < 768) {
            wMode = 2;
        } else if (w < 992) {
            wMode = 3;
        } else if (w < 1200) {
            wMode = 4;
        } else {
            wMode = 5;
        }
        if (4 < wMode) {
            menuToggle(false);
        }
    });
    $(window).on('load', function() {
        $('#globalnav .globalnav-list').clone(true).appendTo('#site-header .container');
        $('#globalnav .globalnav-lang').clone(true).appendTo('#site-header .container');
        $(this).resize();
    });
    if (body.hasClass('index')) {
        var fv = $('#firstview'),
            f = 0;
        $(window).on('scroll', function() {
            var h = fv.height();
            if ($(this).scrollTop() >= h) {
                if (showFlag == false) {
                    showFlag = true;
                    $('#site-header').addClass('fixed');
                }
            } else {
                if (showFlag) {
                    showFlag = false;
                    $('#site-header').removeClass('fixed');
                }
            }
        });
        $(window).on('load', function() {
            $('#firstview .slides').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 8000
            });
            $('#sellinganalysis .slides').slick({
                dots: false,
                arrows: false,
                infinite: true,
                fade: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000
            });
        });
        $(window).on('load resize', function() {
            var orgWidth = (3 > wMode) ? 320 : 1200;
            var orgHeight = (3 > wMode) ? 400 : 700;
            var height = orgHeight * ($(window).width() / orgWidth);
            $('#firstview').css('top', height * -1);
            $('#firstview').css('height', height);
            $('#firstview .slide').height(height);
            $('body').css('padding-top', height);
            $('.slide .title').css('padding-top', height * 0.6);
            if (4 > wMode) {
                var left = $('.analysis').offset().left;
                $('.analysis .bg').css('left', -1 * left);
                $('.analysis .bg').css('width', $(window).width());
            }
        });
    }
    $('html,body').delay(200).animate({
        scrollTop: 0
    }, 1, scrollComp);
    var getWidth = $(window).width();

    function posInit() {
        var offsetH = $(window).height() / 2;
        var OFFSET_BASE = 200;
        $('.list-people').waypoint(function(str) {
            $('.item-1').addClass('animated fadeInUp ');
            $('.item-2').addClass('animated fadeInUp delayp2');
            $('.item-3').addClass('animated fadeInUp delayp4');
            $('.item-4').addClass('animated fadeInUp delayp6');
            $('.item-5').addClass('animated fadeInUp delayp8');
            $('.item-6').addClass('animated fadeInUp delayp10');
            $('.item-7').addClass('animated fadeInUp delayp12');
            $('.job-info-block').addClass('animated fadeInUp delayp14');
        }, {
            offset: offsetH
        });
    }

    function scrollComp() {
        setTimeout(posInit, 100);
    }(function($) {
        var allPanels = $('.accordion li');
        $('.accordion li > h5').click(function() {
            if ($(this).parent().hasClass("active")) {
                allPanels.removeClass('active');
            } else {
                allPanels.removeClass('active');
                $(this).parent().addClass('active');
            }
            return false;
        });
    })(jQuery);
    $('.error').parent().find('.form-control').addClass('error-input');
    $('#updates .list .item .arrow').click(function() {
        $(this).parent().toggleClass('active');
    });
    $('.temp h5.title').click(function() {
        $(this).parent().parent().toggleClass('active');
    });
});