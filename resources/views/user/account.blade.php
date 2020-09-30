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



        @media (max-width: 768px) {
            .container-bloody {
                background-color: #f9f9fb;
            }
            body > .container-fluid {
                height: 105%;
            }
            body {
                background-color: #f9f9fb;
            }
            .site_div_content{
                background: #f9f9fb;
            }
        }
    </style>

    <div class="site-content sub_tab_1" >
        <div class="site-create-steps">
            <div class="row">

                    <section class="site-create-step active" id="sc-terms" >
                        <div class="row site_div_content" style="padding: 0px 30px">
                            <div class="col-md-12">
                                <div class="profile_title" >Edit Your Profile</div>
                                <div class="profile_content">
                                    <img src="{{asset('imgs/homeGroup2.png')}}" class="room_profile_photo" >
                                    <div class="profile_form">
                                        @if(session()->has('msg'))
                                            <div class="alert alert-success">
                                                {{ session()->get('msg') }}
                                            </div>
                                        @endif
                                        <form action="{{ route('updateProfile') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ auth()->id() }}" name="id">
                                            <div class="form-group">
                                                <label for="exampleInputFname">First Name</label>
                                                <input type="text" name="first_name" class="form-control" value="{{ auth()->user()->first_name }}" placeholder="Enter First Name">
                                                    @if($errors->has('first_name'))
                                                    <div class="error" style="color: red">{{ $errors->first('first_name') }}</div>
                                                    @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputLname">Last Name</label>
                                                <input type="text" name="last_name" class="form-control" value="{{ auth()->user()->last_name }}" id="exampleInputLname" placeholder="Enter Lasrt Name">
                                                @if($errors->has('last_name'))
                                                    <div class="error" style="color: red">{{ $errors->first('last_name') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputGender">Gender</label>
                                                <select name="gender" class="form-control" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                    <option value="">Choose Gender</option>
                                                    <option value="1" {{ auth()->user()->gender == 'male' ? 'selected' : '' }} >Male</option>
                                                    <option value="2" {{ auth()->user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                                @if($errors->has('gender'))
                                                    <div class="error" style="color: red">{{ $errors->first('gender') }}</div>
                                                @endif
                                            </div>
                                            <div class="line_full_width"></div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email</label>
                                                <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control" id="exampleInputEmail" placeholder="Enter Your Email">
                                                @if($errors->has('email'))
                                                    <div class="error" style="color: red">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword">New Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Enter Your new Password">
                                                @if($errors->has('password'))
                                                    <div class="error" style="color: red">{{ $errors->first('password') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Connected Social Media</label>
                                            </div>
                                            <div class="line_full_width"></div>
                                            <div class="form-group">
                                                <label for="exampleInputGender">Country</label>
                                                <select name="country" class="form-control select2" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                    <option value="">Choose Country</option>
                                                    @foreach($countries as $k =>$val)
                                                        <option value="{{$val->nicename}}">{{$val->nicename}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputGender">Time Zone</label>
                                                <select name="timezone" class="form-control" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                    <option value="">Choose Time Zone</option>
                                                    <option value="1" {{ auth()->user()->timezone == 1 ? 'selected' : '' }}>Asia</option>
                                                    <option value="2" {{ auth()->user()->timezone == 2 ? 'selected' : '' }}>Europe</option>
                                                </select>
                                                @if($errors->has('timezone'))
                                                    <div class="error" style="color: red">{{ $errors->first('timezone') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputGender">Language</label>
                                                <select name="language" class="form-control" id="exampleInputGender" style="border: 1px solid #cccccc;border-radius: 5px;">
                                                    <option value="">Choose Language</option>
                                                    <option value="1" {{ auth()->user()->lang == 1 ? 'selected' : '' }}>English</option>
                                                    <option value="2" {{ auth()->user()->lang == 2 ? 'selected' : '' }}>Arabic</option>
                                                </select>
                                                @if($errors->has('language'))
                                                    <div class="error" style="color: red">{{ $errors->first('language') }}</div>
                                                @endif
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
