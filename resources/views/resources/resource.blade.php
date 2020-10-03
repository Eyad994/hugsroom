@extends('layouts.layout')
@section('content')
    <script type="text/javascript">

    </script>
    <style>

        .post_person_name{
            font-size: 20px;
            color: #E84B7B;
            padding-left: 100px;
            width: 70%;
            font-weight: bold;
            overflow: hidden;
            margin-top: 20px;
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
            padding-left: 100px;
            color: #827a7d !important;
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
                height: 100% !important;
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
    <div class="room_header" style="height: 70px;background: #E84B7B;padding-top: 32px;">
        <div style="color: #ffffff;width: 100%;">
            <div class="sub_header_menu sub_tab_mine sub_tab_active" onclick="subHeaderTap(1)">
                Upbeat STORIES
            </div>
            <div class="sub_header_menu sub_tab_following"  onclick="subHeaderTap(2)">
                Health Articles
            </div>
            <div  class="sub_header_menu sub_tab_public" onclick="subHeaderTap(3)">
                Vendors
            </div>
        </div>

    </div>
    <div class="site-content sub_tab_1" style="padding-bottom: 100px;">
        <div class="site-create-steps" style="padding-right: 30px;padding-left: 30px">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 30px 0px">
                        <div class="col-md-3"></div>
                        <div class="col-md-6"><input type="button" class="btn form-control" style="background: #FEB25D;color:#ffffff;height: 50px" value="+ Add Vendor Details" ></div>
                        <div class="col-md-3"></div>
                    </div>
                    <?php $i=0; ?>
                    @foreach($userRooms as $room)
                        @if($i == 0)
                            <div class="row">
                        @else
                            <div class="row" style="padding-top: 30px">
                            @endif
                            <?php $i++ ?>
                            <div class="col-md-12">
                                <div style="width: 100%;height: 490px;border-radius: 20px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                    <div class="post-header" style="height:90px;">
                                        <div style="padding-top: 12px">
                                            <img src="{{asset('imgs/homeGroup2.png')}}" class="room_profile_photo" >
                                        </div>
                                        <div class="post_person_name" >{{ $room->title }} </div>
                                        <div class="post_time" >{{ $room->created_at->diffForHumans() }}</div>
                                        <div class="post_likes" style="width: 50px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;font-size: 20px;color: #717171;">
                                            &nbsp; <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div style="width: 100%;height: 350px;padding: 0px 20px;">
                                        <div style="padding: 10px 0px;font-size: 20px;font-weight: bold;color: #e84b7c;">Your Title Here</div>
                                        <a href="{{asset("resources/stories/1")}}">
                                            <img src="{{asset('imgs/hospital.png')}}" style="height: 300px;width: 100%;">
                                        </a>
                                    </div>
                                    <div style="height: 100px;width: 100%" class="post_footer_icons">
                                        <div style="width: 100px;float: left;text-align: left;padding-left: 5px;">
                                            <i class="fa fa-heart-o" aria-hidden="true" style="padding-top:15px;margin-left: 15px;font-size: 22px;color: #e84b7c;"></i>
                                            <span>120</span>
                                        </div>
                                        <div style="width: 20%;float: left;text-align: left">
                                            <i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #e84b7c;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                            <span>200</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
    <div class="site-content sub_tab_2" style="padding-bottom: 100px;display: none">
        <div class="site-create-steps" style="padding-right: 30px;padding-left: 30px">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 30px 50px">
                        <div class="col-md-3"></div>
                        <div class="col-md-6"><input type="button" class="btn form-control" style="background: #E84B7B;color:#ffffff;height: 50px" value="+ Add Vendor Details" ></div>
                        <div class="col-md-3"></div>
                    </div>
                    <?php $i=0; ?>
                    @foreach($userRooms as $room)
                        @if($i == 0)
                            <div class="row">
                                @else
                                    <div class="row" style="padding-top: 30px">
                                        @endif
                                        <?php $i++ ?>
                                        <div class="col-md-12">
                                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                                <div class="post-header" style="height:60px;">
                                                    <div style="padding-top: 12px">
                                                        <img src="imgs/homeGroup2.png" class="room_profile_photo">
                                                    </div>
                                                    <div onclick="redirectToRoom('{{$room->id}}')">
                                                        <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">{{ $room->title }} </div>
                                                        </a>
                                                        <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">{{ $room->created_at->diffForHumans() }}</div>
                                                        <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                                            &nbsp; <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                                            &nbsp;&nbsp; {{ $room->non_unique_visitor }}
                                                        </div>
                                                    </div>
                                                    <div style="width: 100%;height: 200px;">
                                                        <img src="imgs/homeGroup3.png" style="height: 200px;width: 100%;">
                                                        <div class="room_img_btn" style="color: #e84b7c;display: flex">
                                                            <i class="fa fa-user"></i>
                                                            <span>Following</span>
                                                        </div>
                                                    </div>
                                                    <div style="height: 100px;width: 100%" class="post_footer_icons">
                                                        <div style="width: 25%;float: left;text-align: center">
                                                            <i class="fa fa-edit" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                                        </div>
                                                        <div style="width: 25%;float: left;text-align: center">
                                                            <i class="fa fa-bell-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                                        </div>
                                                        <div style="width: 25%;float: left;text-align: center">
                                                            <i class="fa fa-picture-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                                        </div>
                                                        <div style="width: 25%;float: left;text-align: center">
                                                            <i class="fa fa-heart-o" aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                </section>
            </div>
        </div>
    </div>
    <div class="site-content sub_tab_3" style="padding-bottom: 100px;display: none">
        <div class="site-create-steps" style="padding-right: 30px;padding-left: 30px">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 30px 0px">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <input type="button" class="btn form-control" style="background: #FEB25D;color:#ffffff;height: 50px" value="+ Add Vendor Details" >
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <?php $i=0; ?>
                    @foreach($userRooms as $room)
                        @if($i == 0)
                            <div class="row">
                        @else
                            <div class="row" style="padding-top: 30px">
                                @endif
                                <?php $i++ ?>
                                <div class="col-md-12">
                                    <div style="width: 100%;height: 400px;border-radius: 20px;box-shadow: 2px 2px 10px 1px #e4e1e1;overflow: hidden ">
                                        <div style="width: 100%;height: 350px;">
                                            <a href="{{asset("resources/vendors/1")}}">
                                                <img src="{{asset('imgs/rectangle.png')}}" style="height: 200px;width: 100%;">
                                            </a>
                                            <div style="font-size: 20px;font-weight: bold;color: #e84b7c;padding: 0 20px;padding-top: 10px;">Pharmacies</div>
                                            <div style="font-weight: bold;color: #737071;height: 93px;font-size: 13px;overflow: hidden;padding: 0 20px;padding-bottom: 10px;">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                            <div style="padding: 0 20px">
                                                <a type="button" href="{{asset("resources/vendors/1")}}" class="btn form-control" style="background: #E84B7B;color: #ffffff;height: 50px;padding-top: 13px;font-size: 16px;" value="" >View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
    <script  src="{{asset('js/rooms/main.js')}}"></script>

@endsection
