@extends('layouts.layout')
@section('content')
    <script src="{{asset('css/ckeditor/samples.css')}}"></script>
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/ckeditor/sample.js')}}"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
    <style>
        .main_header, .fat-footer{
            display: none !important;
        }
        .sub_menu_icons{
            width: 100px;
            color: #ffffff;
            font-size: 40px;
            padding: 20px;
        }
        .profile_header{
            width: 100%;
            background: #4ba2b5;
            height: 350px;
            margin-top: 0px;
            position: relative;
        }
        .settings_btn{
            float: right;
            margin-right: 20px;
        }
        .change_pic_btn{
            border-radius: 100px;
            width: 30px;
            height: 30px;
            padding: 0px;
            float: left;
            margin-left: 20px;
            color: #ffffff;
            background: #8e8e8e;
        }

        .profile_visitor_info{
            background: #ffffff;
            height: 70px;
            width: 100%;
            padding-top: 20px;
        }
        .profile_photo{
            width: 170px;
            height: 170px;
            background: silver;
            border-radius: 250px;
            position: absolute;
            top: 70px;
            overflow: hidden;
            background-position: center;
            vertical-align: middle;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
        }
        .post_form{
            width: 100%;
            background: #f4f4f4;
            border: 1px solid #dddddd;
            border-radius: 5px;
            padding: 20px 20px;
        }
        .upload_post_photo_btn{
            background: #f4f4f4;
            color: #e84b7c;
        }
        .upload_post_photo_btn:hover{
            background: #ebe5e0;
            color: #e84b7c;
        }
        .section_title{
            font-size: 22px;
            font-weight: bold;
            width: 100%;
            text-align: center;
            padding-bottom: 30px;
        }
        .section_container{
            background: #ebe5e0;
            float: left;
            width: 100% !important;
            margin-top: 50px !important;
            padding-top: 50px;

        }
        .posts_section{
            background: #ffffff;
            padding: 30px 20px;
        }
        .post_title{
            font-size: 23px;
            font-weight: bold;
        }
        .post_text{
            padding: 20px 0px;
        }
        .like_btn{
            background: #ffffff;
            font-size: 30px;
            color: #e84b7c;
            float: left;
            margin-left: -10px;
        }
        .like_btn:hover{
            color:#ab3c5e;
        }
        .how_liked{
            width: 80px;
            float: left;
            padding: 14px 0px;
            color: #bb0840;
            cursor: pointer;
        }

        .share_post{
            width: 60px;
            float: right;
            padding: 14px 0px;
            color: #bb0840;
            cursor: pointer;
        }
        .comments_section{
            height: 70px;
            background: #f4f4f4;
            border-bottom: 1px solid #cccccc;
            font-size: 20px;
            padding: 20px 30px;
            font-weight: bold;
            cursor: pointer;
        }
        .post_comment_title{
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            padding-bottom: 10px;
        }
        .post_comment_name{
            padding-left: 30px;
            font-weight: bold;
            padding-bottom: 10px;

        }
        .post_comment_text{
            padding: 0px 30px;
        }
        .post_comment_submit{
            background: #e84b7c;
            font-size: 17px;
            padding: 7px 20px;
            color: #ffffff;
        }
        .post_comment_form{
            background: #f4f4f4;
            display: none;
        }
        .read_more_posts_section{
            padding: 30px;
            text-align: center;
            height: 170px;
        }
        .main_content{
            background: #f5f2ef !important;
        }
        .main_header{
            height: 451px !important;
        }
        .profile_menu_items{
            padding-top: 25px;
            text-align: center;
            font-size: 30px;
            color: #ffffff;
            cursor: pointer;
        }
        .post_likes{
            width: 100%;
            padding: 30px 0px;
        }
        .container-fluid {
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
        }
        .post_profile_name{
            position: absolute;
            top: 260px;
            width: 94%;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            color: #ffffff;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #ffffff;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            height:750px
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
        }

        .uk-section{
            padding-bottom: 0px !important;
        }
        .card_title{
            padding: 5px 20px;
            color: #E84B7B !important;
            font-size:16px;
            text-align: left
        }
        .cards_create_room_btn{
            width: 100%;
            height: 50px;
            text-align: center;
            background: #E84B7B;
            border: 0px;
            border-radius:10px;
            color: #ffffff;
            float: left;
            line-height: 50px
        }
        .container-bloody > *:not(.prevent-bleed){
            margin-top: -0px !important;
            height: 270px !important;
        }
        .card_text{
            height: 220px;
            font-size: 13px;
            overflow: hidden;
            text-align: left;
            color:#000000;
        }
        .owl-controls{
            display: none !important;
        }

    </style>
    <script type="text/javascript">
        $(function () {
            if(screen.width > "768") {
                window.location.href = "/rooms/room/1";
            }
        });
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="profile_header">
                    <div style="height: 20px"></div>
                    <button type="button" class="btn change_pic_btn" >
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </button>
                    <div class="share_icon" style="padding: 2px 20px;float: right;">
                        <i class="fa fa-share-alt" style="font-size: 25px;color:#ffffff"></i>
                    </div>
                </div>
                <div class="profile_photo">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 170px;height: 170px">
                </div>
                <button type="button" class="btn change_pic_btn" style="position: absolute;left: 250px;top: 200px;" >
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </button>
                <div class="post_profile_name">
                    Miqdad Abu-Etailah
                </div>
                {{--<div class="profile_visitor_info">
                    <button type="button" class="btn settings_btn" style="float: left;margin-left: 300px;background: #E84B7B;color: #ffffff;">
                        <i class="fa fa-cog" style="font-size: 17px;color: #ffffff;padding: 0px 3px;"></i> Settings
                    </button>
                    <div style="float: left;width: 50px;padding: 8px 0px;border-right: 1px solid #bcbcbc">
                        <span>5 </span> Visits
                    </div>
                    <div style="padding:8px 10px;width: 100px;float: left;">
                        Share
                        <i class="fa fa-share"></i>
                    </div>
                </div>--}}
            </div>
        </div>

    </div>

    <div class="row xxx" style="height: 310px !important;background: #ebe5e0;">
        <div class="col-md-12">
            <div class="owl-carousel">
                <div class="item">
                    <div class="item" data-toggle="slide1">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <div style="height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item black">
                    <a href="#">
                        <div class="item" data-toggle="slide2">
                            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                                <div class="uk-card-box">
                                    <div  class="uk-card-sub-box">
                                        <div style="height: 200px;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <div class="item" data-toggle="slide3">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <div style="height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item black">
                    <div class="item" data-toggle="slide4">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <div style="height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item" data-toggle="slide5">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <div style="height: 200px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%;">
                <span style="padding-left: 20px;color: #E84B7B;font-size: 20px"><i class="fa fa-users"></i> 5 Visits </span>
                <button type="button" class="btn settings_btn" style="float: right;background: #E84B7B;color: #ffffff;">
                    <i class="fa fa-cog" style="font-size: 17px;color: #ffffff;padding: 0px 3px;"></i> Settings
                </button>
            </div>
        </div>
    </div>
    <div class="container section_container" style="height: 650px !important;">
        <div class="container-fluid">
            <div class="section_title">Update Your Visitors</div>
            <div class="post_form">
                <div style="font-size: 17px;font-weight: bold">Title</div>
                <div style="padding-bottom: 20px">
                    <input type="text" class="form-control">
                </div>
                <div class="adjoined-bottom">
                    <div class="grid-container">
                        <div class="grid-width-100">
                            <div id="editor">

                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 20px 0px">
                    <button class="btn upload_post_photo_btn" ><i class="fa fa-image"></i> Upload Photos</button>
                    <button class="btn upload_post_photo_btn" ><i class="fa fa-film"></i></button>
                </div>
                <div style="width: 100%;text-align: center">
                    <button class="btn" style="border: 1px solid #e84b7c;font-size: 17px;padding: 7px 20px;color:#e84b7c;">Save as Draft</button>
                    <button class="btn" style="background:#e84b7c;font-size: 17px;padding: 7px 20px;color:#ffffff">Post</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container section_container" style="margin-top: 0 !important;background: #f5f2ef;display: table">
        <div class="container-fluid">
            <div class="section_title">Newest Update</div>
            <div class="posts_section">
                <div class="post_title">September 11, 2020</div>
                <div class="post_info">Journal entry by Meqdad Abu-Ateleh <span class="post_time"> — 4 hours ago</span></div>
                <div class="post_text">fdg sdf sdfg fds</div>
                <div class="post_likes">
                    <button class="btn like_btn" ><i class="fa fa-heart"></i></button>
                    <div class="how_liked">1 Hearts</div>
                    <div class="share_post">
                        share
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>
            <div class="comments_section" onclick="openCommentsSection()">
                <span>COMMENTS</span>
                <i class="fa fa-angle-down" aria-hidden="true" style="float: right;font-size:30px"></i>
            </div>
            <div class="post_comment_form">
                <div class="post_comment_title">Post a Comment</div>
                <div class="post_comment_name">{{-->{{auth()->user()->name}}--}} Mekdad Mohammad</div>
                <div class="post_comment_text">
                        <textarea class="form-control">
                        </textarea>
                </div>
                <div style="padding: 15px 30px"><button class="btn post_comment_submit">Post a Comment</button></div>
            </div>
            <div class="read_more_posts_section">
                <button class="btn post_comment_submit"> Read More Journal Entries</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        initSample();
        function openCommentsSection() {
            $(".post_comment_form").toggle();
        }
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/owl.carousel.min.js'></script>
    <script  src="{{asset('js/roommbcardSwip.js')}}"></script>
@endsection
