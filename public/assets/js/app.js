var scrolled = 0;
$(document).ready(function () {
    $(".scroll-up").on('click', function () {
        scrolled = scrolled - 590;
        $(".list").animate({
            scrollTop: scrolled
        });
    });

    $(".scroll-down").on('click', function () {
        scrolled = scrolled + 590;
        $(".list").animate({
            scrollTop: scrolled
        });
    });
});

new WOW().init();