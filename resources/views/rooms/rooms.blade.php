@extends('layouts.layout')
@section('content')
    <script type="text/javascript">

    </script>
    <style>

        .post_person_name{
            font-size: 20px;
            color: #E84B7B;
            padding-left: 120px;
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
            height: 100px;
            width: 100px;
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
        .search_room_text{
            width: 90%;
            height: 40px;
            border: 0px;
            border-radius: 5px 0px 0px 5px;

        }
        .search_room_btn{
            margin-left: -5px;
            height: 40px;
            border-radius: 0px 5px 5px 0px;
            background: white;
            border: 0px;
            margin-top: -2px;
        }
    </style>
    <div class="room_header" style="height: 140px;background: #E84B7B;margin-top: -5px">
        <div style="color: #ffffff;width: 100%;font-size: 30px;text-align: center;padding-top: 20px">Rooms</div>
        <div class="search_room_box">
            <input type="text" class="search_room_text">
            <button class="btn search_room_btn">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div style="color: #ffffff;width: 100%;">
            <div class="sub_header_menu sub_tab_mine sub_tab_active" onclick="subHeaderTap(1)">
                Mine
            </div>
            <div class="sub_header_menu sub_tab_following"  onclick="subHeaderTap(2)">
                Following
            </div>
            <div  class="sub_header_menu sub_tab_public" onclick="subHeaderTap(3)">
                Public
            </div>
        </div>

    </div>
    <div class="site-content sub_tab_1" style="padding-bottom: 100px;">
        <div class="site-create-steps" style="padding-right: 30px;padding-left: 30px">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 30px 50px">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <a href="{{asset('createwebsite')}}">
                                <input type="button" class="btn form-control" style="background: #E84B7B;color:#ffffff;height: 50px" value="+ Open New Room" ></div>
                            </a>
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
                                            <div onclick="redirectToRoom('{{$room->id}}')">
                                                <img src="imgs/homeGroup2.png" class="room_profile_photo" >
                                            </div>
                                        </div>
                                        <div onclick="redirectToRoom('{{$room->id}}')">
                                            <div class="post_person_name" >{{ $room->title }} </div>
                                        </div>
                                        <div class="post_time" >{{ $room->created_at->diffForHumans() }}</div>
                                        <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                            &nbsp; <img src="{{asset("imgs/icons/viewer.jpg")}}" style="width: 30px;height: 30px;margin-left: 15px;">
                                            &nbsp;&nbsp; <span style="margin-left: -10px;">{{ $room->non_unique_visitor }}</span>
                                        </div>
                                    </div>
                                    <div style="width: 100%;height: 200px;">
                                        <div onclick="redirectToRoom('{{$room->id}}')">
                                            <img src="imgs/homeGroup3.png" style="height: 200px;width: 100%;">
                                        </div>
                                    </div>
                                    <div style="height: 100px;width: 100%" class="post_footer_icons">
                                        <a href="{{"rooms/room/".$room->id}}" style="width: 20%;float: left;text-align: center">
                                            <img src="{{asset("imgs/rooms/jurnal_b.svg")}}" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">
                                            {{--<img src="{{asset("imgs/rooms/jurnal_c.svg")}}" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">--}}
                                        </a>
                                        <a href="{{"rooms/mbwellWishes/".$room->id}}" style="width: 20%;float: left;text-align: center">
                                            <img src="{{asset("imgs/rooms/wellwish_b.svg")}}" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">
                                            {{--<img src="{{asset("imgs/rooms/wellwish_c.svg")}}" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">--}}
                                        </a>
                                        <a href="{{"rooms/mbgallery/".$room->id}}" style="width: 20%;float: left;text-align: center">
                                            <img src="{{asset("imgs/rooms/gellery_b.svg")}}" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">
                                        </a>
                                        <div style="width: 20%;float: left;text-align: center">
                                            <a href="{{"rooms/room/".$room->id}}"  aria-hidden="true" style="color: #99a6ad;padding-top:15px;margin-left: 15px;font-size: 22px;">
                                                <img style="height: 26px;margin-top: 12px; filter: opacity(0.3) drop-shadow(0 0 0 gray);" src="{{ asset('imgs/image0.png') }}" alt="">
                                            </a>
                                        </div>
                                        <a href="#"  style="width: 20%;float: left;text-align: center">
                                            <img style="height: 26px;margin-top: 12px; filter: opacity(0.3) drop-shadow(0 0 0 gray);" src="{{ asset('imgs/icons/task.jpg') }}" alt="">
                                        </a>
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
                        <div class="col-md-6"><input type="button" class="btn form-control" style="background: #E84B7B;color:#ffffff;height: 50px" value="+ Open New Room" ></div>
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
                    <div class="row" style="padding: 30px 50px">
                        <div class="col-md-3"></div>
                        <div class="col-md-6"><input type="button" class="btn form-control" style="background: #E84B7B;color:#ffffff;height: 50px" value="+ Open New Room" ></div>
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
                                                    <div class="room_img_btn" style="color: #818080;">
                                                        <img src="imgs/homeGroup2.png" style="width: 17px;height: 17px;border-radius: 20px;margin-top: -2px;object-fit: cover;}">
                                                        <span>{{ $room->user->country }}</span>
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
    <script  src="{{asset('js/rooms/main.js')}}"></script>

@endsection
