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
            padding: 50px 20px;
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
    </style>

    <div class="site-content sub_tab_1" >
        <div class="site-create-steps">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row" style="padding: 0px 30px">
                        <div class="col-md-12">
                            <div class="profile_title" >Edit Your Profile</div>
                            <div class="profile_content">
                                <img src="{{asset('imgs/homeGroup2.png')}}" class="room_profile_photo" >
                                <div class="profile_form">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputFname">First Name</label>
                                            <input type="text" class="form-control" id="exampleInputFname" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputLname">Last Name</label>
                                            <input type="text" class="form-control" id="exampleInputLname" placeholder="Enter Lasrt Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputGender">Gender</label>
                                            <select class="form-control" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                <option value="">Chose Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="line_full_width"></div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email</label>
                                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Your Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword">New Password</label>
                                            <input type="text" class="form-control" id="exampleInputPassword" placeholder="Enter Your new Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Connected Social Media</label>
                                        </div>
                                        <div class="line_full_width"></div>
                                        <div class="form-group">
                                            <label for="exampleInputGender">Country</label>
                                            <select class="form-control" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                <option value="">Choose Country</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputGender">Time Zone</label>
                                            <select class="form-control" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                <option value="">Choose Time Zone</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputGender">Language</label>
                                            <select class="form-control" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                <option value="">Choose Language</option>
                                                <option value="1">English</option>
                                                <option value="2">Arabic</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary main_background_color">Save</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
