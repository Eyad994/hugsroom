@extends('layouts.layout')
@section('content')
    <script type="text/javascript">

    </script>
    <style>

        .post_person_name{
            font-size: 20px;
            color: #E84B7B;
            padding-left: 75px;
            width: 70%;
            font-weight: bold;
            overflow: hidden;
        }
        .sub_tab_active{
            border-bottom: 2px solid #ffffff
        }
        .sub_header_menu{
            cursor: pointer;
        }
        .room_img_btn{
            width: 100px;
            height: 25px;
            position: absolute;
            background: white;
            /* top: 0px; */
            bottom: 60px;
            border-radius: 5px;
            right: 25px;
            padding: 4px 10px;
            overflow: hidden;
            display: list-item;
        }
        .post_time{
            padding-left: 120px;
            color: #E84B7B;
        }
        .room_profile_photo{
            position: absolute;
            height: 70px;
            width: 70px;
            border-radius: 100px;
            left: 30px;
            top:10px;
            border: 2px solid #ffffff;
            object-fit: cover
        }
        @media (max-width: 768px) {
            body {
                background: #ffffff !important;
            }

            .container-fluid {
                background: #ffffff !important;
            }
            .post_person_name{
                width: 280px;
                overflow: hidden;
                height: 30px;
                padding-left: 85px;
                font-size: 18px;
            }
            .post_time{
                font-size: 10px;
                padding-left: 120px;
                color: #E84B7B;
                padding-left: 85px;
            }
            .post_likes{
                width: 60px;
                float: right;
                position: absolute;
                right: 15px;
                top: 16px;
                height: 40px;
            }
            .room_profile_photo{
                height: 70px;
                width: 70px;
            }

        }
    </style>
    <div class="room_header" style="height: 80px;background: #E84B7B;margin-top: -5px">
        <div style="color: #ffffff;width: 100%;font-size: 30px;text-align: center;padding-top: 20px">Health Companies</div>
    </div>
    <div class="site-content sub_tab_1" style="padding-bottom: 100px;">
        <div class="site-create-steps" style="padding-right: 30px;padding-left: 30px">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 30px 50px">
                        <div class="col-md-3"></div>
                        <div class="col-md-6"><input type="button" class="btn form-control" style="background: #FEB25D;color:#ffffff;height: 50px" value="+ Add Vendor Details" ></div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row" style="padding-top: 30px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 470px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1;padding: 20px; ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="{{asset("imgs/homeGroup2.png")}}" class="room_profile_photo" >
                                    </div>
                                    <div class="post_person_name" >Company Name </div>
                                </div>
                                <div style="padding-top: 30px;height: 135px;overflow: hidden;">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="{{asset('imgs/rectangle.png')}}" style="height: 200px;width: 100%;">
                                </div>
                                <div style="height: 100px;width: 100%" class="post_footer_icons">
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-edit" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-bell-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-picture-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">
                                            <img style="height: 26px;margin-top: 12px; filter: opacity(0.3) drop-shadow(0 0 0 gray);" src="{{ asset('imgs/image0.png') }}" alt="">
                                        </i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="padding-top: 30px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 470px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1;padding: 20px; ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="{{asset("imgs/homeGroup2.png")}}" class="room_profile_photo" >
                                    </div>
                                    <div class="post_person_name" >Company Name </div>
                                </div>
                                <div style="padding-top: 30px;height: 135px;overflow: hidden;">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="{{asset('imgs/rectangle.png')}}" style="height: 200px;width: 100%;">
                                </div>
                                <div style="height: 100px;width: 100%" class="post_footer_icons">
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-edit" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-bell-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-picture-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">
                                            <img style="height: 26px;margin-top: 12px; filter: opacity(0.3) drop-shadow(0 0 0 gray);" src="{{ asset('imgs/image0.png') }}" alt="">
                                        </i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="padding-top: 30px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 470px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1;padding: 20px; ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="{{asset("imgs/homeGroup2.png")}}" class="room_profile_photo" >
                                    </div>
                                    <div class="post_person_name" >Company Name </div>
                                </div>
                                <div style="padding-top: 30px;height: 135px;overflow: hidden;">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="{{asset('imgs/rectangle.png')}}" style="height: 200px;width: 100%;">
                                </div>
                                <div style="height: 100px;width: 100%" class="post_footer_icons">
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-edit" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-bell-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-picture-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">
                                            <img style="height: 26px;margin-top: 12px; filter: opacity(0.3) drop-shadow(0 0 0 gray);" src="{{ asset('imgs/image0.png') }}" alt="">
                                        </i>
                                    </div>
                                    <div style="width: 20%;float: left;text-align: center">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection