var plugins = {
    // owlCarousel: $("#slider"),
     menu:$("#menu")
};
$(document).ready(function () {

    function loadMenu(){
        plugins.menu.mmenu({
            //option
            autoHeight: false
        },{
            // configuration
            // offCanvas: {
            //     pageSelector: "#menubar"
            // }
        });
    }
    if(plugins.menu.length){
        loadMenu();
    }

    $('#nav li').hover(function() {
        var posit = $(this).position();
        if (posit.left > 980) {
            $('.submnu', this).css({
                'left': '-100%'
            });
        }
        $('ul:first', this).stop().slideDown(200);
    }, function() {
        $('ul', this).stop().slideUp(100);
    });
    $('#nav li').hover(function() {
        $('div', this).stop().slideDown(200);
    }, function() {
        $('div', this).stop().slideUp(100);
    });
});