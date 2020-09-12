@extends('layouts.layout')
@section('content')
    <style>
        @media (max-width: 768px) {
            body {
                background: #ffffff !important;
            }

            .container-fluid {
                background: #ffffff !important;
            }
        }
        .sub_tab_active{
            border-bottom: 2px solid #ffffff
        }
        .sub_header_menu{
            cursor: pointer;
        }
    </style>
    <div class="room_header" style="height: 100px;background: #E84B7B;margin-top: -5px">
        <div style="color: #ffffff;width: 100%;font-size: 30px;text-align: center;padding-top: 20px">My Room</div>
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
                                            <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                        </div>
                                        <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">{{ $room->title }} </div>
                                        <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">{{ $room->created_at->diffForHumans() }}</div>
                                        <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                            <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                            {{ $room->likes }}
                                        </div>
                                    </div>
                                    <div style="width: 100%;height: 200px;">
                                        <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
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
                        @endforeach
                    {{--<div class="row" style="padding-top: 100px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
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
                    <div class="row" style="padding-top: 100px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
                                </div>
                                <div style="height: 100px;width: 100%" class="post_footer_icons">
                                    <div style="width: 25%;float: left;text-align: center" >
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
                    </div>--}}
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
                    <div class="row">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
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
                    <div class="row" style="padding-top: 100px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
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
                    <div class="row" style="padding-top: 100px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
                                </div>
                                <div style="height: 100px;width: 100%" class="post_footer_icons">
                                    <div style="width: 25%;float: left;text-align: center" >
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
                    <div class="row">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
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
                    <div class="row" style="padding-top: 100px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
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
                    <div class="row" style="padding-top: 100px">
                        <div class="col-md-12">
                            <div style="width: 100%;height: 310px;border-radius: 20px 20px 0px 0px;box-shadow: 2px 2px 10px 1px #e4e1e1 ">
                                <div class="post-header" style="height:60px;">
                                    <div style="padding-top: 12px">
                                        <img src="imgs/homeGroup2.png" style="position: absolute;height: 100px;width: 100px;border-radius: 100px;left: 30px;top:10px;border: 2px solid #ffffff">
                                    </div>
                                    <div class="post_person_name" style="font-size: 20px;color:#E84B7B;padding-left: 120px;font-weight: bold;">Sara Khalid</div>
                                    <div class="post_time" style="font-size: 10px;padding-left: 120px;color:#E84B7B">15 minutes ago</div>
                                    <div class="post_likes" style="width: 90px;float: right;position: absolute;right: 15px;top: 16px;height: 40px;}">
                                        <i class="fa fa-heart-o" aria-hidden="true" style="color: #E84B7B;padding-top:7px;margin-left: 15px;font-size: 20px;"></i>
                                        200
                                    </div>
                                </div>
                                <div style="width: 100%;height: 200px;">
                                    <img src="imgs/homeGroup2.png" style="height: 200px;width: 100%;">
                                </div>
                                <div style="height: 100px;width: 100%" class="post_footer_icons">
                                    <div style="width: 25%;float: left;text-align: center" >
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
                </section>
            </div>
        </div>
    </div>
    <script  src="{{asset('js/rooms/main.js')}}"></script>
@endsection
