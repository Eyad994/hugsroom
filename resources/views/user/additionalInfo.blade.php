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
        .profile_title {
            width: 100%;
            height: 60px;
            background: #ffffff;
            text-align: center;
            font-size: 18px;
            padding-top: 20px;
            color: #000000;
            font-weight: bold;
            box-shadow: 2px 3px 6px #908c8c;
        }
        .room_profile_photo{
            height: 70px;
            width: 70px;
            border-radius: 100px;
            border: 2px solid #ffffff;
            object-fit: cover
        }
        .profile_content{
            margin-top: 5px;
            padding: 0 20px;
            background: #ffffff;
            padding-bottom: 20px;
        }
        .profile_form{
            padding-top: 30px;
        }
        .line_full_width{
            width: 100%;
            height: 40px;
            margin-top: 30px;
            border-top: 1px solid #cccccc;
        }


        @media (max-width: 768px) {
            body {
                background-color: #f9f9fb;;
            }
        }
    </style>

    <div class="site-content sub_tab_1" >
        <div class="site-create-steps">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 0px 30px">
                        <div class="col-md-12">
                            <div class="profile_title" >Additional Settings</div>
                            <div class="profile_content">
                                <div class="profile_form">
                                    <a href="{{asset("aboutUs")}}">
                                        <div class="form-group">
                                            <label>About Us</label>
                                            <i class="fa fa-angle-right" style="float: right;font-size: 20px;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="form-group">
                                            <label>Partners</label>
                                            <i class="fa fa-angle-right" style="float: right;font-size: 20px;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="form-group">
                                            <label>FAQ</label>
                                            <i class="fa fa-angle-right" style="float: right;font-size: 20px;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="form-group">
                                            <label>Privacy</label>
                                            <i class="fa fa-angle-right" style="float: right;font-size: 20px;"></i>
                                        </div>
                                    </a>
                                    <div class="line_full_width"></div>
                                    <a href="#">
                                        <div class="form-group">
                                            <label>Feedback</label>
                                            <i class="fa fa-angle-right" style="float: right;font-size: 20px;"></i>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="form-group">
                                            <label>Contact Us</label>
                                            <i class="fa fa-angle-right" style="float: right;font-size: 20px;"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
