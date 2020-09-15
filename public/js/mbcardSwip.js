

$(function () {
    if(screen.width < "768") {

        //  debugger;
        var active = $(".owl-stage .active .item .item").data().toggle;
        if (active == "slide1") {
            $(".owl-stage-outer").css("background", "#fdccd1");
            $(".xxx").css("background", "#fdccd1");
            $("body").css("background", "#fdccd1");
        }
        if (active == "slide2") {
            $(".owl-stage-outer").css("background", "#ff5686")
            $(".xxx").css("background", "#ff5686");
            $("body").css("background", "#ff5686");
        }
        if (active == "slide3") {
            $(".owl-stage-outer").css("background", "#fed155")
            $(".xxx").css("background", "#fed155");
            $("body").css("background", "#fed155");

        }
        if (active == "slide4") {
            $(".owl-stage-outer").css("background", "#feb25e")
            $(".xxx").css("background", "#feb25e");
            $("body").css("background", "#feb25e");

        }
        if (active == "slide5") {
            $(".owl-stage-outer").css("background", "#6ac7e8")
            $(".xxx").css("background", "#6ac7e8");
            $("body").css("background", "#6ac7e8");

        }

    }else{

    }
});

$('.owl-carousel').owlCarousel({
    stagePadding: 30,
    loop:true,
    margin:0,
    nav:false,
    items:1,
    lazyLoad: true,
    nav:true,
    responsive:{
        0:{
            items:1,
            stagePadding: 45
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

    if(screen.width < "768") {

        //  debugger;
        var active = $(".owl-stage .active .item .item").data().toggle;
        if (active == "slide1") {
            $(".owl-stage-outer").css("background", "#fdccd1");
            $(".xxx").css("background", "#fdccd1");
            $("body").css("background", "#fdccd1");
        }
        if (active == "slide2") {
            $(".owl-stage-outer").css("background", "#ff5686")
            $(".xxx").css("background", "#ff5686");
            $("body").css("background", "#ff5686");
        }
        if (active == "slide3") {
            $(".owl-stage-outer").css("background", "#fed155")
            $(".xxx").css("background", "#fed155");
            $("body").css("background", "#fed155");

        }
        if (active == "slide4") {
            $(".owl-stage-outer").css("background", "#feb25e")
            $(".xxx").css("background", "#feb25e");
            $("body").css("background", "#feb25e");

        }
        if (active == "slide5") {
            $(".owl-stage-outer").css("background", "#6ac7e8")
            $(".xxx").css("background", "#6ac7e8");
            $("body").css("background", "#6ac7e8");

        }

    }else{
        $(".owl-stage-outer").css("background", "#6ac7e8")
        $(".xxx").css("background", "#6ac7e8");
        $("body").css("background", "#6ac7e8");
    }

});
