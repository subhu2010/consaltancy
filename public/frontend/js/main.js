$(window).on('scroll', function() {
    if ($(this).scrollTop() > 50) {
        $('.home-menu').addClass("sticky-nav");
    } else {
        $('.home-menu').removeClass("sticky-nav");
    }
});