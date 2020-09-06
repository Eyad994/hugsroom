
$(function () {
    if(screen.width < "768") {

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
  stagePadding: 55,
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

    if(screen.width < "768") {


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
