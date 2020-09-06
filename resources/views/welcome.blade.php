@extends('layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/cardSwip.css')}}">
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
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
        .card_text{
            height: 110px !important;
        }
        .uk-card-box{
            width: 100%;
            float: left;
            padding-top: 10px;
        }

        .active .card_text{
            height: 150px !important;
        }
        .active .uk-card-sub-box{
            margin-top: -15px !important;
        }
        .card_title{
            padding: 5px 20px;
            color: #E84B7B;
            font-size: 21px;
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
        .card_text{
            height: 220px;
            font-size: 15px;
            overflow: hidden;
            text-align: left;
            color:#000000;
        }
</style>
    <div class="container-bloody">
    <div class="row xxx">
        <div class="col-md-12">
            <!-- Button trigger modal -->
        {{--     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">
                 Launch demo modal
             </button>--}}

        <!-- Central Modal Small -->
            <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: left">
                                <span aria-hidden="true" style="font-size: 50px;">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{asset("imgs/homeGroup2.png")}}" style="height: 350px;width: 100%">
                            <div>
                                <h3 class="h4 pad-top_20-24" style="padding: 5px 20px;color: #E84B7B;font-size: 21px;text-align: left">Moved the patient room online to help you in difficult times</h3>
                                <div class="pad-top_12" style="padding: 0px 20px">
                                    <p style="height: 200px;font-size: 16px;overflow: hidden;text-align: left">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<span style="text-align: center;font-size: 40px;height: 100%px;color:#707070;padding: 50px;float: left">Moved the patient room online to help you in difficult times</span>--}}
            <div class="uk-margin"></div>
            <div class="uk-section">
                <div class="owl-carousel owl-theme">
                    <div class="item" data-toggle="slide1">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style="margin-top: 15px;">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">

                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" {{--style="height: 250px"--}}  onclick="openmodel('1')">
                                    <div>
                                        <h3 class="h4 pad-top_20-24" style="padding: 5px 20px;color: #E84B7B;font-size: 21px;text-align: left">Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  style="width: 100%;height: 50px;text-align: center;background: #E84B7B;border: 0px;border-radius:10px;color: #ffffff;float: left;line-height: 50px">
                                                Create Room
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item" data-toggle="slide2">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style="margin-top: 15px;">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">

                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" data-toggle="modal" data-target="#centralModalSm">
                                    <div>
                                        <h3 class="h4 pad-top_20-24" style="padding: 5px 20px;color: #E84B7B;font-size: 21px;text-align: left">Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  style="width: 100%;height: 50px;text-align: center;background: #E84B7B;border: 0px;border-radius:10px;color: #ffffff;float: left;line-height: 50px">
                                                Create Room
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item" data-toggle="slide3">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style="margin-top: 15px;">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">

                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" data-toggle="modal" data-target="#centralModalSm">
                                    <div>
                                        <h3 class="h4 pad-top_20-24" style="padding: 5px 20px;color: #E84B7B;font-size: 21px;text-align: left">Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  style="width: 100%;height: 50px;text-align: center;background: #E84B7B;border: 0px;border-radius:10px;color: #ffffff;float: left;line-height: 50px">
                                                Create Room
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item" data-toggle="slide4">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style="margin-top: 15px;">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">

                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" data-toggle="modal" data-target="#centralModalSm">
                                    <div>
                                        <h3 class="h4 pad-top_20-24" style="padding: 5px 20px;color: #E84B7B;font-size: 21px;text-align: left">Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  style="width: 100%;height: 50px;text-align: center;background: #E84B7B;border: 0px;border-radius:10px;color: #ffffff;float: left;line-height: 50px">
                                                Create Room
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item" data-toggle="slide5">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style="margin-top: 15px;">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">

                                    <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" data-toggle="modal" data-target="#centralModalSm">
                                    <div>
                                        <h3 class="h4 pad-top_20-24" style="padding: 5px 20px;color: #E84B7B;font-size: 21px;text-align: left">Moved the patient room online to help you in difficult times</h3>
                                        <div class="pad-top_12" style="padding: 0px 20px">
                                            <p class="card_text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
                                        <div style="height: 50px">
                                            <a href="{{asset("createwebsite")}}" type="btn"  style="width: 100%;height: 50px;text-align: center;background: #E84B7B;border: 0px;border-radius:10px;color: #ffffff;float: left;line-height: 50px">
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
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>

    <script  src="{{asset('js/cardSwip.js')}}"></script>
@endsection
