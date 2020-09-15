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
    @include("layouts.mbsub_slider_header")
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
                    <label style="width: 100%">
                        <div class="gallery_upload_image">
                            <i class="fa fa-photo"></i>
                            <span style=" font-size: 12px;width: 100%;float: left;"> add more photos</span>
                        </div>
                        <input type="file" style="visibility: hidden;"/>
                    </label>
                </div>
            </div>
        </div>
    </div>
    {{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/owl.carousel.min.js'></script>--}}
    <script src='{{asset("js/cdn/2.1.3/jquery.min.js")}}'></script>
    <script src='{{asset("js/cdn/owl.carousel.min.js")}}'></script>
    <script  src="{{asset('js/roommbcardSwip.js')}}"></script>
@endsection
