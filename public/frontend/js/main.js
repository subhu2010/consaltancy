$(window).on('scroll', function() {
    if ($(this).scrollTop() > 50) {
        $('.home-menu').addClass("sticky-nav");
    } else {
        $('.home-menu').removeClass("sticky-nav");
    }
});



$('.partner-slider').owlCarousel({
    loop:true,
    rewind:true,
    margin:20,
    nav:false,
    dots:false,
    autoplay:true,
    slideTransition: 'linear',
    autoplayTimeout: 10000,
    autoplaySpeed: 10000,
    autoplayHoverPause: true,
    responsiveClass:true,
    responsive:{
         0:{
            items:1,
        },
        480:{
            items:2,
        },
        768:{
            items:3,
        },
        1024:{
            items:5,
        },
        1380:{
            items:5,
        },
        1580:{
            items:5,
        }
    }
  })


  $('.owl-testimonial').owlCarousel({
    loop:false,
    rewind:true,
    margin:20,
    nav:false,
    dots:true,
    autoplay:true,
    responsiveClass:true,
    responsive:{
         0:{
            items:1,
            nav:false
        },
        480:{
            items:1,
            nav:false
        },
        768:{
            items:1,
            nav:false
        },
        1024:{
            items:2,
            nav:false
        },
        1380:{
            items:2,
            nav:false
        },
        1580:{
            items:2,
            nav:false
        }
    }
})