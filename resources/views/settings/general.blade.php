@extends('layouts.layout')
@section('content')
    <style>
        .main_content{
            display: grid;
        }
    .setting_menu{
        width: 100%;
        height: 100px !important;
        background: #E84B7B;
        margin-top: 0 !important;
    }
    .setting_items{
        text-align: center;
        height: 100px;
        padding: 12px 0px;
        color: #ffffff;
    }
        {{--------------------Ibraheem------------------}}
    .setting_title{
            font-size: 23px;
            font-weight: bold;
            padding: 10px 0px;
            margin-top: 20px;
        }
    .setting_panel{
        margin-top: 10px;
        width: 100%;
        border: 1px solid #ddd;
    }
    .setting_panel_header{
        width: 100%;
        height: 50px;
        background: #f5f2ef;
        font-size: 20px;
        padding: 12px;
        padding-left: 19px;
        font-weight: bold;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
    }
    .ad{
        width: 100%;
        height: 64px;;
        background: #ffffff;
        font-weight: bold;
        padding: 40px 115px 40px 60px;
    }
    .bb{
        background: green;
        width: 100%;
        height: 200px;
        padding-top: 80px;
    }
    .user_info{
        padding: 30px 150px;
        padding-right: 60px;

    }
    .submit_settings_form{
        background: #e84b7c;
        color: #ffffff;
        font-size: 16px;
        height: 40px;
        width: 170px;
    }




        {{--------------------endIbraheem------------------}}
    </style>
    <div class="setting_menu">
        <div class="container-fluid">
            <a href="#" class="col-md-2 setting_items">
                <img src="{{asset("imgs/icons/facebook.png")}}">
                <span style="display: block;">Genral</span>
            </a>
            <a href="#" class="col-md-2 setting_items">
                <img src="{{asset("imgs/icons/facebook.png")}}">
                <span style="display: block;">Genral</span>
            </a>
            <a href="#" class="col-md-2 setting_items">
                <img src="{{asset("imgs/icons/facebook.png")}}">
                <span style="display: block;">Genral</span>
            </a>
            <a href="#" class="col-md-2 setting_items">
                <img src="{{asset("imgs/icons/facebook.png")}}">
                <span style="display: block;">Genral</span>
            </a>
            <a href="#" class="col-md-2 setting_items">
                <img src="{{asset("imgs/icons/facebook.png")}}">
                <span style="display: block;">Genral</span>
            </a>
            <a href="#" class="col-md-2 setting_items">
                <img src="{{asset("imgs/icons/facebook.png")}}">
                <span style="display: block;">Genral</span>
            </a>
        </div>
    </div>
    <div class="container section_container" style="height: 100%;">
        <div class="container-fluid">
            {{--------------------Ibraheem------------------}}
            <div class="setting_title">General Settings </div>
            <div class="setting_panel">
                <div class="setting_panel_header">
                    Name
                    <span style="float: right;">
                        <i class="fa fa-angle-down" style="font-size: 20px;font-weight: bold;"></i>
                    </span>
                </div>
                <div class="panel_body">
                    <div class="ad">The name of the person for whom the site was created.(This is also how visitors can search for this site.)</div>
                    <form class="user_info">
                        <div class="form-group row">
                            <label for="inputFname" class="col-sm-2 col-form-label">* First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFname" name="inputFname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLname" class="col-sm-2 col-form-label">* Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLname" name="inputLname" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn submit_settings_form"value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="setting_panel">
                <div class="setting_panel_header">
                    Site Information
                    <span style="float: right;"><i class="fa fa-angle-down" style="font-size: 20px;font-weight: bold;"></i></span>
                </div>
                <div class="panel_body">
                    <div class="ad">Site Title displays on the site banner and can be different from the name, if you wish. (Example: "A Cancer Journey.") Site Title can be used in CaringBridge search.</div>
                    <form class="user_info">
                        <div class="form-group row">
                            <label for="inputRoomTitle" class="col-sm-2 col-form-label">*Room Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputRoomTitle" name="inputRoomTitle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputRoomName" class="col-sm-2 col-form-label">*Room Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputRoomName" name="inputRoomName" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="roomAddress" class="col-sm-2 col-form-label">*Room Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="roomAddress" name="roomAddress" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn submit_settings_form"value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="setting_panel">
                <div class="setting_panel_header">
                    Comment Replies
                    <span style="float: right;"><i class="fa fa-angle-down" style="font-size: 20px;font-weight: bold;"></i></span>
                </div>
                <div class="panel_body">
                    <div class="ad">Enable replies to individual comments on journal entries?</div>
                    <div class="user_info">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting_panel">
                <div class="setting_panel_header">
                    Name
                    <span style="float: right;">
                        <i class="fa fa-angle-down" style="font-size: 20px;font-weight: bold;"></i>
                    </span>
                </div>
                <div class="panel_body">
                    <div class="ad">The name of the person for whom the site was created.(This is also how visitors can search for this site.)</div>
                    <form class="user_info">
                        <div class="form-group row">
                            <label for="inputFname" class="col-sm-2 col-form-label">* First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFname" name="inputFname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLname" class="col-sm-2 col-form-label">* Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLname" name="inputLname" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn submit_settings_form"value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="setting_panel">
                <div class="setting_panel_header">
                    Name
                    <span style="float: right;">
                        <i class="fa fa-angle-down" style="font-size: 20px;font-weight: bold;"></i>
                    </span>
                </div>
                <div class="panel_body">
                    <div class="ad">The name of the person for whom the site was created.(This is also how visitors can search for this site.)</div>
                    <form class="user_info">
                        <div class="form-group row">
                            <label for="inputFname" class="col-sm-2 col-form-label">* First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFname" name="inputFname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLname" class="col-sm-2 col-form-label">* Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLname" name="inputLname" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn submit_settings_form"value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="setting_panel">
                <div class="setting_panel_header">
                    Name
                    <span style="float: right;">
                        <i class="fa fa-angle-down" style="font-size: 20px;font-weight: bold;"></i>
                    </span>
                </div>
                <div class="panel_body">
                    <div class="ad">The name of the person for whom the site was created.(This is also how visitors can search for this site.)</div>
                    <form class="user_info">
                        <div class="form-group row">
                            <label for="inputFname" class="col-sm-2 col-form-label">* First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFname" name="inputFname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLname" class="col-sm-2 col-form-label">* Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLname" name="inputLname" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn submit_settings_form"value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="setting_panel">
                <div class="setting_panel_header">
                    Name
                    <span style="float: right;">
                        <i class="fa fa-angle-down" style="font-size: 20px;font-weight: bold;"></i>
                    </span>
                </div>
                <div class="panel_body">
                    <div class="ad">The name of the person for whom the site was created.(This is also how visitors can search for this site.)</div>
                    <form class="user_info">
                        <div class="form-group row">
                            <label for="inputFname" class="col-sm-2 col-form-label">* First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFname" name="inputFname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLname" class="col-sm-2 col-form-label">* Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLname" name="inputLname" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn submit_settings_form"value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            {{--------------------endIbraheem------------------}}
         </div>
    </div>
@endsection
