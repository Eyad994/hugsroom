@extends('layouts.layout')
@section('content')

    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <link href="{{asset('css/roomsmb.css')}}" rel="stylesheet" type="text/css">

    @include("layouts.mbsub_slider_header")
    <style>
        .like_btn {
            background: #ffffff;
            font-size: 30px;
            color: #e84b7c;
            float: left;
            margin-left: 5px;
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
        .posts_section{
            margin-top: 20px;

        }
        .section_container{
            padding-top: 0px;
        }
        .section_title{
            padding-top: 30px;
            color: #504a4a;
        }
    </style>
    <div class="container section_container" style="margin-top: 0 !important;background: #ebe5e0;display: table">
        <div class="container-fluid" style="padding-bottom: 100px;">
            <div class="section_title">Thoughts & Well Wishes</div>
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
    <div class="mobileFooter" style="display: none;">
        <div class="navbar" style="width: 100%;background: #ffffff;  z-index: 40000;padding-top: 5px;">
            <input type="text" placeholder="Share Thoughts & Well Wishes" style="width: 80%;border: 1px solid #e84b7c;border-radius: 10px;height: 35px;padding-left: 10px" >
            <button class="btn" style="color: #e84b7c;background: #ffffff">POST</button>
        </div>
    </div>
    <script src='{{ asset('js/cdn/2.1.3/jquery.min.js') }}'></script>
    <script src='{{asset("js/cdn/owl.carousel.min.js")}}'></script>
    <script  src="{{asset('js/roommbcardSwip.js')}}"></script>
@endsection
