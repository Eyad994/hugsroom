@extends('layouts.layout')
@section('content')
    <link href="{{asset('css/roomsweb.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ckeditor/samples.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/ckeditor/sample.js')}}"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
    <script type="text/javascript">
        $(function () {
            if (screen.width < "768") {
                window.location.href = "/rooms/mbwellWishes/{{ $room->id }}";
            }
        });
    </script>
    @include("layouts.sub_slider_header")
    <style>
        .like_btn {
            background: #ffffff;
            font-size: 30px;
            color: #e84b7c;
            float: left;
            margin-left: 80px;
        }
        .post_text {
             padding: 0px;
        }
        .well_wishes_heart{
            width: 100px;
            font-size: 50px;
            float: left;
            height: 70px;
            color: #e84b7c;
        }
        .well_wishes_actions{
            width: 60px;
            float: left;
            padding-top: 16px;
            font-size: 14px;
            color: #9e9d9d;
            cursor: pointer;
        }
    </style>
    <div class="container section_container" style="height: 600px;">
        <div class="container-fluid">
            <div class="section_title">Thoughts & Well Wishes</div>
            <form action="{{ route('storePost') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <div class="post_form">
                    <div style="font-size: 17px;font-weight: bold">Enter Your Thoughts and Well Wishes</div>
                    <div class="adjoined-bottom">
                        <div class="grid-container">
                            <div class="">
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
                        {{--<button class="btn" style="border: 1px solid #e84b7c;font-size: 17px;padding: 7px 20px;color:#e84b7c;">Save as Draft</button>--}}
                        <button class="btn" type="submit"
                                style="background:#e84b7c;width: 15%;font-size: 17px;padding: 7px 20px;color:#ffffff">
                            Post Well Wish
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container section_container" style="margin-top: 0 !important;background: #ebe5e0;display: table">
        <div class="container-fluid">
            @if(isset($post))
            <div class="posts_section">
                <div class="well_wishes_heart"><i class="fa fa-heart"></i> </div>
                <div class="post_info"> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                    <span class="post_time"> — {{ $post->created_at->diffForHumans() }}</span></div>
                <div class="post_text">{!! $post->body !!}</div>
                <div class="post_likes">
                    <form action="/post/{{ $post->id }}/like" method="POST">
                        @csrf
                    @if($post->isLikedBy(auth()->user()))
                        <button type="submit" class="btn like_btn"><i class="fa fa-heart" style="    font-size: 18px;padding-top: 10px;"></i></button>
                    @else
                        <button class="btn like_btn" style="color: unset"><i class="fa fa-heart" style="    font-size: 18px;padding-top: 10px;"></i></button>
                    @endif
                    </form>
                    <div class="how_liked">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>
                    <div class="well_wishes_actions" ><i class="fa fa-edit"></i> Edit</div>
                    <div class="well_wishes_actions" ><i class="fa fa-trash"></i> Delete</div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <script type="text/javascript">
        initSample();
    </script>
@endsection
