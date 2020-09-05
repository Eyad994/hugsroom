@extends('layouts.layout')
@section('content')
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
    </style>

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
                            <h3 class="h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
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

                <!--------------------------------------------------slide1------------------------------------------->

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
                                <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
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

                <!--------------------------------------------------slide2------------------------------------------->

                <div class="item" data-toggle="slide2">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">

                                <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;"  onclick="openmodel('2')">
                                <div>
                                    <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                    <div class="pad-top_12" style="padding: 0px 20px">
                                        <p class="card_text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                        </p>
                                    </div>
                                </div>
                                <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
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

                <!--------------------------------------------------slide3------------------------------------------->

                <div class="item" data-toggle="slide3">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">

                                <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('3')">
                                <div>
                                    <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                    <div class="pad-top_12" style="padding: 0px 20px">
                                        <p class="card_text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                        </p>
                                    </div>
                                </div>
                                <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
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

                <!--------------------------------------------------slide4------------------------------------------->

                <div class="item" data-toggle="slide4">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">

                                <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('4')">
                                <div>
                                    <h3 class=" h4 pad-top_20-24 card_title" >Moved the patient room online to help you in difficult times</h3>
                                    <div class="pad-top_12" style="padding: 0px 20px">
                                        <p class="card_text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                        </p>
                                    </div>
                                </div>
                                <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
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

                <!--------------------------------------------------slide5------------------------------------------->

                <div class="item" data-toggle="slide5">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">

                                <img src="{{asset("imgs/homeGroup2.png")}}" style="object-fit: cover; width: 100%;height: 250px;" onclick="openmodel('5')">
                                <div>
                                    <h3 class=" h4 pad-top_20-24 card_title card_title" >Moved the patient room online to help you in difficult times</h3>
                                    <div class="pad-top_12" style="padding: 0px 20px">
                                        <p class="card_text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem <Ipsum class=""></Ipsum>
                                        </p>
                                    </div>
                                </div>
                                <div class="wp-block-button is-style-tertiary-lg" style="padding: 30px 20px">
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

                <!------------------------------------------------- end slides ------------------------------------------->

            </div>
        </div>
    </div>
    </div>



@endsection
