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
            height: 220px;
            font-size: 13px;
            overflow: hidden;
            text-align: left;
            color:#000000;
        }
        .owl-controls{
            display: none !important;
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
                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('1')">
                                    <div>
                                        <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 20px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="cards_create_room_btn">
                                                Create Room
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
                                        <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('1')">
                                        <div>
                                            <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                            <div class="pad-top_12" style="padding: 0px 20px">
                                                <p class="card_text">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="wp-block-button is-style-tertiary-lg" style="padding: 20px 20px">
                                            <div style="height: 50px">
                                                <a href="{{asset("createwebsite")}}" type="btn"  class="cards_create_room_btn">
                                                    Create Room
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
                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('1')">
                                    <div>
                                        <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 20px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="cards_create_room_btn">
                                                Create Room
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
                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('1')">
                                    <div>
                                        <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 20px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="cards_create_room_btn">
                                                Create Room
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
                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('1')">
                                    <div>
                                        <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 20px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  class="cards_create_room_btn">
                                                Create Room
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


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/owl.carousel.min.js'></script>
    <script  src="{{asset('js/mbcardSwip.js')}}"></script>

@endsection
