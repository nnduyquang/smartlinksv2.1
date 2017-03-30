var plugins = {
    // owlCarousel: $("#slider"),
    menu: $("#menu"),
    memberCarousel: $('.member-carousel')
};
$(document).ready(function () {

    function loadMenu() {
        plugins.menu.mmenu({
            //option
            autoHeight: false
        }, {
            // configuration
            // offCanvas: {
            //     pageSelector: "#menubar"
            // }
        });
    }

    function memberCarousel() {
        plugins.memberCarousel.not('.slick-initialized').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '.arrow-prev1',
            nextArrow: '.arrow-next1',
            mobileFirst: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 480,
                slidesToShow: 1,
                slidesToScroll: 1,
            }]
        });
    }

    if (plugins.memberCarousel.length) {
        memberCarousel();
    }

    if (plugins.menu.length) {
        loadMenu();
    }

    new WOW().init();

    $('#nav li').hover(function () {
        var posit = $(this).position();
        if (posit.left > 980) {
            $('.submnu', this).css({
                'left': '-100%'
            });
        }
        $('ul:first', this).stop().slideDown(200);
    }, function () {
        $('ul', this).stop().slideUp(100);
    });
    $('#nav li').hover(function () {
        $('div', this).stop().slideDown(200);
    }, function () {
        $('div', this).stop().slideUp(100);
    });
});