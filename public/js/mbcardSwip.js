$('.owl-carousel').owlCarousel({
    stagePadding: 200,
    loop:true,
    margin:10,
    nav:false,
    items:1,
    lazyLoad: true,
    nav:true,
    responsive:{
        0:{
            items:1,
            stagePadding: 60
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
})


/*
$(function () {
    if(screen.width < "640") {

        var active = $(".uk-section .active .item").data().toggle;

        if (active == "slide1") {
            $(".owl-stage-outer").css("background", "orange")
        }
        if (active == "slide2") {
            $(".owl-stage-outer").css("background", "red")
        }
        if (active == "slide3") {
            $(".owl-stage-outer").css("background", "green")

        }
        if (active == "slide4") {
            $(".owl-stage-outer").css("background", "blue")

        }
        if (active == "slide5") {
            $(".owl-stage-outer").css("background", "silver")

        }

    }else{
        $(".owl-stage-outer").css("background", "#edebeb")
    }
});

$('.owl-carousel').owlCarousel({
    loop:true,
  stagePadding: 35,
    margin:10,
    nav:true,
  navText : ['<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>','<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'],
    responsive:{
        0:{
            items:1
        },
        640:{
            items:2
        },
      960:{
            items:3
        },
        1200:{
            items:3
        }
    }
});

$('.owl-carousel').on('changed.owl.carousel', function (e) {

    if(screen.width < "640") {


        var active = $(".uk-section .active .item").data().toggle;
        if (active == "slide1") {
            $(".owl-stage-outer").css("background", "orange")
        }
        if (active == "slide2") {
            $(".owl-stage-outer").css("background", "red")
        }
        if (active == "slide3") {
            $(".owl-stage-outer").css("background", "green")

        }
        if (active == "slide4") {
            $(".owl-stage-outer").css("background", "blue")

        }
        if (active == "slide5") {
            $(".owl-stage-outer").css("background", "silver")

        }

    }else{
        $(".owl-stage-outer").css("background", "#edebeb")
    }

});*/
