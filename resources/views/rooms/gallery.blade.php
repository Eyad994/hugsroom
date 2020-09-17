@extends('layouts.layout')
@section('content')
    <link href="{{asset('css/roomsweb.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        $(function () {
            if (screen.width < "768") {
                window.location.href = "/rooms/mbgallery/1";
            }
        });
    </script>
    @include("layouts.sub_slider_header")
    <div class="container section_container" style="height: 600px;display: inline-table">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 300px; object-fit: cover;box-shadow: 5px 5px 5px #bcbcbc;">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 300px; object-fit: cover;box-shadow: 5px 5px 5px #bcbcbc;">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 300px; object-fit: cover;box-shadow: 5px 5px 5px #bcbcbc;">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 300px; object-fit: cover;box-shadow: 5px 5px 5px #bcbcbc;">
                </div>
                <div class="col-md-6 gallery_photos">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 100%;height: 300px; object-fit: cover;box-shadow: 5px 5px 5px #bcbcbc;">
                </div>
                <div class="col-md-6 gallery_photos">
                    <label style="width: 100%">
                        <div class="gallery_upload_image">
                            <i class="fa fa-photo"></i>
                            <span style=" font-size: 20px;width: 100%;float: left;"> add more photos</span>
                        </div>

                        <input type="file" style="visibility: hidden;"/>
                    </label>
                </div>
            </div>
        </div>
    </div>

@endsection
