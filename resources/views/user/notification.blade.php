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
            padding-top: 15px;
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
            padding: 20px 20px;
            background: #ffffff;

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
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 28px;
            float: right;
            padding-right: 60px;
            margin-top: -5px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <div class="site-content sub_tab_1" >
        <div class="site-create-steps">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 0px 30px">
                        <div class="col-md-12">
                            <div class="profile_title" >Notification Settings</div>
                            <div class="profile_content">
                                <div class="profile_form">
                                    <!-- Rounded switch -->
                                    <div class="form-group" style="height: 30px;">
                                        <label>New Journal updates</label>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round" style="width: 55px"></span>
                                        </label>
                                    </div>
                                    <div class="form-group" style="height: 30px;">
                                        <label>New Well Wishes</label>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round" style="width: 55px"></span>
                                        </label>
                                    </div>
                                    <div class="form-group" style="height: 30px;">
                                        <label>New Photos</label>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round" style="width: 55px"></span>
                                        </label>
                                    </div>
                                    <div class="form-group" style="height: 30px;">
                                        <label>New Gifts</label>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round" style="width: 55px"></span>
                                        </label>
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
