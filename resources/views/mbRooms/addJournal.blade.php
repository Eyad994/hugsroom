@extends('layouts.layout')
@section('content')

    <link href="{{asset('css/ckeditor/samples.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/ckeditor/sample.js')}}"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">

    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <link href="{{asset('css/roomsmb.css')}}" rel="stylesheet" type="text/css">

    @include("layouts.mbsub_slider_header")
    <div class="container section_container" style="height: 600px !important;">
        <div class="container-fluid">
            <form action="{{ route('storePost') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <div class="post_form">
                    <div style="font-size: 17px;font-weight: bold">Title</div>
                    <div style="padding-bottom: 20px">
                        <input type="text" name="title" class="form-control" value="{{date("F j, Y")}}">
                    </div>
                    <div class="adjoined-bottom">
                        <div class="grid-container">
                            <div>
                                <textarea name="body" id="editor">
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 20px 0px">
                        <button class="btn upload_post_photo_btn"><i class="fa fa-image"></i> Upload Photos</button>
                        <button class="btn upload_post_photo_btn"><i class="fa fa-film"></i></button>
                    </div>
                    <div style="width: 100%;text-align: center">
                        <button class="btn" type="submit" style="background:#e84b7c;width: 35%;font-size: 17px;padding: 7px 20px;color:#ffffff">
                            Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        initSample();
    </script>

    <script src='{{ asset('js/cdn/2.1.3/jquery.min.js') }}'></script>
    <script src='{{asset("js/cdn/owl.carousel.min.js")}}'></script>
    <script  src="{{asset('js/roommbcardSwip.js')}}"></script>
@endsection
