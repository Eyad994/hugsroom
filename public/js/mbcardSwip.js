

$(function () {
    if(screen.width < "640") {

        //  debugger;
        var active = $(".owl-stage .active .item .item").data().toggle;
        if (active == "slide1") {
            $(".owl-stage-outer").css("background", "orange");
            $(".xxx").css("background", "orange");
            $("body").css("background", "orange");
        }
        if (active == "slide2") {
            $(".owl-stage-outer").css("background", "#00bcd4")
            $(".xxx").css("background", "#00bcd4");
            $("body").css("background", "#00bcd4");
        }
        if (active == "slide3") {
            $(".owl-stage-outer").css("background", "#2196f3")
            $(".xxx").css("background", "#2196f3");
            $("body").css("background", "#2196f3");

        }
        if (active == "slide4") {
            $(".owl-stage-outer").css("background", "#673ab7")
            $(".xxx").css("background", "#673ab7");
            $("body").css("background", "#673ab7");

        }
        if (active == "slide5") {
            $(".owl-stage-outer").css("background", "#607d8b")
            $(".xxx").css("background", "#607d8b");
            $("body").css("background", "#607d8b");

        }

    }else{

    }
});

$('.owl-carousel').owlCarousel({
    stagePadding: 100,
    loop:true,
    margin:0,
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
});


$('.owl-carousel').on('changed.owl.carousel', function (e) {

    if(screen.width < "640") {

        //  debugger;
        var active = $(".owl-stage .active .item .item").data().toggle;
        if (active == "slide1") {
            $(".owl-stage-outer").css("background", "orange");
            $(".xxx").css("background", "orange");
            $("body").css("background", "orange");
        }
        if (active == "slide2") {
            $(".owl-stage-outer").css("background", "#00bcd4")
            $(".xxx").css("background", "#00bcd4");
            $("body").css("background", "#00bcd4");
        }
        if (active == "slide3") {
            $(".owl-stage-outer").css("background", "#2196f3")
            $(".xxx").css("background", "#2196f3");
            $("body").css("background", "#2196f3");

        }
        if (active == "slide4") {
            $(".owl-stage-outer").css("background", "#673ab7")
            $(".xxx").css("background", "#673ab7");
            $("body").css("background", "#673ab7");

        }
        if (active == "slide5") {
            $(".owl-stage-outer").css("background", "#607d8b")
            $(".xxx").css("background", "#607d8b");
            $("body").css("background", "#607d8b");

        }

    }else{
        $(".owl-stage-outer").css("background", "##009688")
        $(".xxx").css("background", "#009688");
        $("body").css("background", "#009688");
    }

});
