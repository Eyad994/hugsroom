

$(function () {

});

$('.owl-carousel').owlCarousel({
    stagePadding: 60,
    loop:true,
    margin:0,
    nav:false,
    items:1,
    lazyLoad: true,
    nav:true,
    responsive:{
        0:{
            items:1,
            stagePadding: 80
        },
        600:{
            items:1,
            stagePadding: 100
        },
        1000:{
            items:1,
            stagePadding: 200
        },
        1200:{
            items:1,
            stagePadding: 250
        },
        1400:{
            items:1,
            stagePadding: 300
        },
        1600:{
            items:1,
            stagePadding: 350
        },
        1800:{
            items:3,
            stagePadding: 400
        }
    }
});


$('.owl-carousel').on('changed.owl.carousel', function (e) {

});
