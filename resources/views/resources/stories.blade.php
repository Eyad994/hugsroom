@extends('layouts.layout')
@section('content')
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
        .post-header{
            height:90px;
            position: relative;
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
                padding-left: 100px;
                font-size: 18px;
            }
            .post_time{
                font-size: 10px;
                color: #E84B7B;
                padding-left: 100px;
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

    <div class="row">
        <div class="col-md-12" style="height:700px;float: left;padding: 0">
            <img src="{{asset("uploads/resources/$resource->image")}}" class="page2_main_img">
            <div class="post-header">
                <div style="padding-top: 12px">
                    <img src="{{asset('imgs/homeGroup2.png')}}" class="room_profile_photo" >
                </div>
                <div class="post_person_name" >{{ $resource->user->first_name }} {{ $resource->user->last_name }}</div>
                <div class="post_time">{{ $resource->created_at->diffForHumans() }}</div>
                <div class="post_likes" style="width: 150px;float: right;position: absolute;right: 15px;top: 22px;height: 40px;font-size: 20px;color: #717171;">
                    <div style="width: 70px;float: left;text-align: left;padding-left: 5px;font-size: 12px">
                        <i class="fa fa-heart-o" aria-hidden="true" style="padding-top:15px;margin-left: 15px;font-size: 22px;color: #e84b7c;"></i>
                        <span>120</span>
                    </div>
                    <div style="width: 70px;float: left;text-align: left;font-size: 12px">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: #e84b7c;padding-top:15px;margin-left: 15px;font-size: 22px;"></i>
                        <span>200</span>
                    </div>
                </div>
            </div>
            <div style="width: 100%;padding: 0px 20px;">
                <div style="padding: 10px 15px;font-size: 20px;font-weight: bold;color: #e84b7c;">{{ $resource->title }}</div>
            </div>
            <div>
                <div class="pad-top_12" style="padding: 0px 35px">
                    <p style="font-size: 16px;overflow: hidden;text-align: left;padding-left: 15px">
                        {!! $resource->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
