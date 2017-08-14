var plugins = {
    // owlCarousel: $("#slider"),
    menu: $('.sidebar'),
    slider1: $('#slider1'),
    memberCarousel: $('.member-carousel'),
    module7: $('#hieuSuat'),
    footer1:$('.backToTop')

};
$(document).ready(function () {
    function runSlider1() {
        plugins.slider1.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menu.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {

                $('#blurrMe').toggleClass('blurred')
                plugins.menu.toggleClass('closed');
            }
        })
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
    sidebar();
    function footer1BackTopTop(){
        plugins.footer1.click(function(){
            $('html, body').animate({scrollTop:0}, 'slow');
            return false;
        });
    }
    function runModule7(){
        var waypoint = new Waypoint({
            element: document.getElementById('hieuSuat'),
            handler: function () {
                var options1 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                };
                var options2 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '%'
                };
                var numHs1 = new CountUp("hs1", 0, 500, 0, 1.5, options1);
                var numHs2 = new CountUp("hs2", 0, 1000, 0, 2, options1);
                var numHs3 = new CountUp("hs3", 0, 100, 0, 2.2, options2);
                var numHs4 = new CountUp("hs4", 0, 500, 0, 2, options1);
                numHs1.start();
                numHs2.start();
                numHs3.start();
                numHs4.start();

                waypoint.disable();
            },
            offset: '85%'
        })
    }
    if (plugins.memberCarousel.length) {
        memberCarousel();
    }
    if (plugins.slider1.length) {
        runSlider1();
    }
    if (plugins.module7.length) {
        runModule7();
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
    if(plugins.footer1.length){
        footer1BackTopTop();
    }
});