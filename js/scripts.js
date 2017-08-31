var plugins = {
    // owlCarousel: $("#slider"),
    menu: $('.sidebar'),
    slider1: $('#slider1'),
    memberCarousel: $('.member-carousel'),
    module7: $('#hieuSuat'),
    footer1: $('.backToTop'),
    module12: $('#btnSendMail'),
    section2: $('#btnAnalytic')

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
    function footer1BackTopTop() {
        plugins.footer1.click(function () {
            $('html, body').animate({scrollTop: 0}, 'slow');
            return false;
        });
    }

    function runModule7() {
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

    function getBaseURL() {
        var url = location.href;  // entire url including querystring - also: window.location.href;
        var baseURL = url.substring(0, url.indexOf('/', 14));
        if (baseURL.indexOf('http://localhost') != -1) {
            // Base Url for localhost
            var url = location.href;  // window.location.href;
            var pathname = location.pathname;  // window.location.pathname;
            var index1 = url.indexOf(pathname);
            var index2 = url.indexOf("/", index1 + 1);
            var baseLocalUrl = url.substr(0, index2);
            return baseLocalUrl + "/";
        }
        else {
            // Root Url for domain name
            return baseURL + "/";
        }

    }

    function runSection2() {
        $('.errorWebsite').css('display', 'none');
        $('.errorPhone').css('display', 'none');
        $('.errorEmail').css('display', 'none');
        var data = new FormData($(this).get(0));
        data.append('website', $("input[name='website']").val());
        data.append('phone_number', $("input[name='phone_number']").val());
        data.append('email_return', $("input[name='email_return']").val());
        $.ajax({
            type: "POST",
            url: getBaseURL() + "phan-tich-website",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                // window.location.href = data;
                var url = getBaseURL() + 'phan-tich-website-online';
                var form = $('<form action="' + url + '" method="post">' +
                  '  <input type="hidden" name="_token" value="'+$('meta[name="csrf-token"]').attr('content')+'" />'+
                    '<input type="text" name="hdWebsiteReceive" value="' + data.hdWebsiteReceive + '" />' +
                    '<input type="text" name="hdPhoneNumberReceive" value="' + data.hdPhoneNumberReceive + '" />' +
                    '<input type="text" name="hdEmailCustomerReceive" value="' + data.hdEmailCustomerReceive + '" />' +
                    '</form>');
                $('body').append(form);
                form.submit();

                // window.location.href = data.data;
                // $('.loadingsending').css('display','none');
                // $('.successsending').css('display','inline-block');
                // $('.successsending').fadein(500);
                // settimeout("$('.successsending').fadeout(1500);", 3000);
                $("input[name='website']").val("");
                $("input[name='phone_number']").val("");
                $("input[name='email_return']").val("");
            },
            error: function (data) {
                // $('.loadingSending').css('display','none');
                var errors = $.parseJSON(data.responseText);
                if (errors.hasOwnProperty('website')) {
                    $('.errorWebsite').css('display', 'inline-block');
                    $('.errorWebsite').attr('data-original-title', errors['website']);
                    $('.errorWebsite').tooltip('show');
                    setTimeout(function () {
                        $('.errorWebsite').tooltip('hide');
                        ;
                    }, 4000);
                }
                if (errors.hasOwnProperty('phone_number')) {
                    $('.errorPhone').css('display', 'inline-block');
                    $('.errorPhone').attr('data-original-title', errors['phone_number']);
                    $('.errorPhone').tooltip('show');
                    setTimeout(function () {
                        $('.errorPhone').tooltip('hide');
                        ;
                    }, 4000);
                }
                if (errors.hasOwnProperty('email_return')) {
                    $('.errorEmail').css('display', 'inline-block');
                    $('.errorEmail').attr('data-original-title', errors['email_return']);
                    $('.errorEmail').tooltip('show');
                    setTimeout(function () {
                        $('.errorEmail').tooltip('hide');
                        ;
                    }, 4000);
                }
                // console.log((errors.hasOwnProperty('email'))?errors['email']:'Không có lỗi email');
                // Render the errors with js ...
            }
        });

    }

    function runModule12() {
        $('.loadingSending').css('display', 'inline-block');
        $('.errorEmail').css('display', 'none');
        $('.errorName').css('display', 'none');
        $('.errorInfo').css('display', 'none');
        var data = new FormData($(this).get(0));
        data.append('name', $("input[name='name']").val());
        data.append('email', $("input[name='email']").val());
        data.append('phone', $("input[name='phone']").val());
        data.append('website', $("input[name='website']").val());
        data.append('keyword', $("textarea[name='keyword']").val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: getBaseURL() + "sendmail",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    $('.loadingSending').css('display', 'none');
                    $('.successSending').css('display', 'inline-block');
                    $('.successSending').fadeIn(500);
                    setTimeout("$('.successSending').fadeOut(1500);", 3000);
                    $("input[name='name']").val("");
                    $("input[name='email']").val("");
                    $("input[name='phone']").val("");
                    $("input[name='website']").val("");
                    $("textarea[name='keyword']").val("");
                }
                else {
                    alert('fail');
                }
            },
            error: function (data) {
                $('.loadingSending').css('display', 'none');
                var errors = $.parseJSON(data.responseText);
                if (errors.hasOwnProperty('email')) {
                    $('.errorEmail').css('display', 'inline-block');
                    $('.errorEmail').attr('data-original-title', errors['email']);
                    $('.errorEmail').tooltip('show');
                    setTimeout(function () {
                        $('.errorEmail').tooltip('hide');
                        ;
                    }, 4000);
                }
                if (errors.hasOwnProperty('name')) {
                    $('.errorName').css('display', 'inline-block');
                    $('.errorName').attr('data-original-title', errors['name']);
                    $('.errorName').tooltip('show');
                    setTimeout(function () {
                        $('.errorName').tooltip('hide');
                        ;
                    }, 4000);
                }
                if (errors.hasOwnProperty('keyword')) {
                    $('.errorInfo').css('display', 'inline-block');
                    $('.errorInfo').attr('data-original-title', errors['keyword']);
                    $('.errorInfo').tooltip('show');
                    setTimeout(function () {
                        $('.errorInfo').tooltip('hide');
                        ;
                    }, 4000);
                }
                // console.log((errors.hasOwnProperty('email'))?errors['email']:'Không có lỗi email');
                // Render the errors with js ...
            }
        });
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
    if (plugins.module12.length) {
        $("[rel=popover]").tooltip();
        plugins.module12.click(function () {
            runModule12();
        });
    }
    if (plugins.section2.length) {
        $("[rel=popover]").tooltip();
        plugins.section2.click(function () {
            runSection2();
        });
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
    if (plugins.footer1.length) {
        footer1BackTopTop();
    }
});