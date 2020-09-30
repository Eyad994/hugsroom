@extends('layouts.layout')
@section('content')
    <style>
        .site-content{
            background: #f9f9fb;
            padding-bottom: 100px;
        }
        .main_content{
            background: #f9f9fb;
        }
        .profile_title{
            width: 100%;
            height: 60px;
            background: #ffffff;
            text-align: center;
            font-size: 18px;
            border-radius: 10px 10px 0px 0px;
            padding-top: 20px;
            color: #000000;
            font-weight: bold;
        }
        .account_settings{
            width: 100%;
            height: 150px;
            background: #feb25e;
            text-align: center;
            font-size: 18px;
            margin-top: -10px;
            border-radius: 10px 10px 0px 0px;
        }
        .notify_settings{
            width: 100%;
            height: 150px;
            background: #fe5686;
            text-align: center;
            font-size: 18px;
            margin-top: -10px;
            border-radius: 10px 10px 0px 0px;
        }
        .additinal_settings{
            width: 100%;
            height: 150px;
            background: #6ac7e8;
            text-align: center;
            font-size: 18px;
            margin-top: -10px;
            border-radius: 10px;
        }
        .settings_content_box span{
            color: #ffffff;
            width: 100%;
            display: block;
            padding-top: 10px;
            font-weight: bold;
        }
        .settings_content_box{
            width: 200px;
            height: 100px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            display: inline-block;
            color: #ffffff;
        }
        .profile_margin{
            width: 50px;
            /* background: red; */
            height: 30px;
            margin-left: auto;
            margin-right: auto;
            border-top: 1px solid #ffffff;
        }

        @media (max-width: 768px) {
            body {
                background-color: #f9f9fb;
                font-family: 'Quicksand';
            }
        }
    </style>

    <div class="site-content sub_tab_1" >
        <div class="site-create-steps">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 30px 30px">
                        <div class="col-md-12">
                            <div class="profile_title" >Profile</div>
                            <a href="{{asset("profile/account")}}">
                                <div class="account_settings" >
                                    <div class="settings_content_box">
                                        <div class="profile_margin"></div>
                                        <img src="{{asset("imgs/footer_icons/search.png")}}" />
                                        <span style="">Account settings</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{asset("profile/notification")}}">
                                <div class="notify_settings" >
                                    <div class="settings_content_box">
                                        <div class="profile_margin"></div>
                                        <img src="{{asset("imgs/footer_icons/search.png")}}" />
                                        <span style="">Notification settings</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{asset("profile/additionalInfo")}}">
                                <div class="additinal_settings" >
                                    <div class="settings_content_box">
                                        <div class="profile_margin"></div>
                                        <img src="{{asset("imgs/footer_icons/search.png")}}" />
                                        <span style=""> Additional Information</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
