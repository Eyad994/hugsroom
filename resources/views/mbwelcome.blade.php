@extends('layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #ffffff;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            height:750px
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
        }

        .uk-section{
            padding-bottom: 0px !important;
        }
        .card_title{
            padding: 5px 20px;
            color: #E84B7B !important;
            font-size:16px;
            text-align: left
        }
        .cards_create_room_btn{
            width: 100%;
            height: 50px;
            text-align: center;
            background: #E84B7B;
            border: 0px;
            border-radius:10px;
            color: #ffffff;
            float: left;
            line-height: 50px
        }
        .container-bloody > *:not(.prevent-bleed){
             margin-top: -0px !important;
        }
        .card_text{
            height: 80px !important;
            font-size: 14px;
            overflow: hidden;
            text-align: center;
            color:#000000;
        }
        .owl-controls{
            display: none !important;
        }
        .slider_main_btn{
            width: 100%;
            height: 50px;
            text-align: center;
            background: #E84B7B;
            border: 0px;
            border-radius:10px;
            color: #ffffff;
            float: left;
            line-height: 50px;
            font-weight: bold;

        }
        .slider_title_1{
            padding: 5px 20px;
            color: #E84B7B;
            font-size: 21px;
            text-align: center;
            color: #e84b7c !important;
        }
        .slider_title_2{
            padding: 0px 20px;
            color: #E84B7B;
            font-size: 21px;
            text-align: center;
            margin-top: -10px;
            color: #e84b7c !important;
        }
        .active .card_text {
            height: 80px !important;
        }
    </style>
<script type="text/javascript">
    $(function () {
        if(screen.width > "768") {
            window.location.href = "/";
        }
    });
</script>

    <div class="row xxx" style="height: 650px !important;">
        <div class="col-md-12">
            <div class="owl-carousel">
                <div class="item">
                    <div class="item" data-toggle="slide1">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <img src="{{asset("imgs/slider/1.jpg")}}" style=" width: 100%;height: 300px;" onclick="openmodel('1')">
                                    <div>
                                        <h3 class="h4 pad-top_20-24 slider_title_1">Patients</h3>
                                        <h3 class="h4 pad-top_20-24 slider_title_2 ">Room Online </h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                A health journey is difficult to undergo alone so we are connecting loved ones  without distractions anywhere & anytime
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 5px 20px 20px 20px" >
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="slider_main_btn">
                                                Open Room
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item black">
                    <a href="#">
                        <div class="item" data-toggle="slide2">
                            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                                <div class="uk-card-box">
                                    <div  class="uk-card-sub-box">
                                        <img src="{{asset("imgs/slider/2.jpg")}}" style=" width: 100%;height: 300px;" onclick="openmodel('5')">
                                        <div>
                                            <h3 class="h4 pad-top_20-24 slider_title_1"> Search</h3>
                                            <h3 class="h4 pad-top_20-24 slider_title_2">and Follow</h3>
                                            <div class="pad-top_12" style="padding: 0px 20px">
                                                <p class="card_text">
                                                    Virtual Rooms of beautiful memories to keep you strong while your patient recover
                                                </p>
                                            </div>
                                        </div>
                                        <div class="wp-block-button is-style-tertiary-lg" style="padding: 5px 20px 20px 20px">
                                            <div style="height: 50px">
                                                <a href="{{asset("createwebsite")}}" type="btn"  class="slider_main_btn">
                                                    Search Rooms
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <div class="item" data-toggle="slide3">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <img src="{{asset("imgs/slider/3.jpg")}}" style=" width: 100%;height: 300px;" onclick="openmodel('4')">
                                    <div>
                                        <h3 class="h4 pad-top_20-24 slider_title_1" >Even</h3>
                                        <h3 class="h4 pad-top_20-24 slider_title_2" >as Strangers</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Patients without their loved ones around have public rooms to receive support from all over the world
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 5px 20px 20px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="slider_main_btn">
                                                Unite in Care
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item black">
                    <div class="item" data-toggle="slide4">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <img src="{{asset("imgs/slider/4.jpg")}}" style=" width: 100%;height: 300px;" onclick="openmodel('3')">
                                    <div>
                                        <h3 class="h4 pad-top_20-24 slider_title_1" >Helping </h3>
                                        <h3 class="h4 pad-top_20-24 slider_title_2" >Hospitals</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Less visitations means less contamination & smoother operations
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 5px 20px 20px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="slider_main_btn">
                                                Our Partners
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item" data-toggle="slide5">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <img src="{{asset("imgs/slider/5.jpg")}}" style=" width: 100%;height: 300px;" onclick="openmodel('2')">
                                    <div>
                                        <h3 class="h4 pad-top_20-24 slider_title_1"> Find more</h3>
                                        <h3 class="h4 pad-top_20-24 slider_title_2">Help</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Your kind deeds & lovely words will remain forever
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 5px 20px 20px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="slider_main_btn">
                                                Resources
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='{{asset("js/cdn/2.1.3/jquery.min.js")}}'></script>
    <script src='{{asset("js/cdn/owl.carousel.min.js")}}'></script>
    <script  src="{{asset('js/mbcardSwip.js')}}"></script>

@endsection
