@extends('layouts.layout')
@section('content')

    <link href="{{asset('css/ckeditor/samples.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/ckeditor/sample.js')}}"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">

    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <link href="{{asset('css/roomsmb.css')}}" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        $(function () {
            if(screen.width > "768") {
                window.location.href = "/rooms/gallery/1";
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
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="object-fit: cover; width: 170px;height: 170px">
                </div>
                <button type="button" class="btn change_pic_btn" style="position: absolute;left: 250px;top: 200px;" >
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </button>
                <div class="post_profile_name">

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

    <div class="row xxx" style="height: 200px !important;background: #ebe5e0;">
        <div class="col-md-12">
            <div class="owl-carousel">
                <div class="item">
                    <div class="item" data-toggle="slide1">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <div style="height: 200px; text-align: center">
                                        <div style="color: #e84b7c;font-size: 80px;padding-top: 30px;"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                                        <div style="color: #e84b7c;font-size: 27px;padding-top: 4px;">Gallery</div>
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
        </div>
    </div>
    <div class="container section_container" style="height: 600px !important;">
        <div class="container-fluid">
            <div class="row" style="padding: 20px;padding-bottom: 80px">
                <div class="col-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 200px; object-fit: cover">
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/owl.carousel.min.js'></script>
    <script  src="{{asset('js/roommbcardSwip.js')}}"></script>
@endsection
