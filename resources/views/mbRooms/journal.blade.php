@extends('layouts.layout')
@section('content')

    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <link href="{{asset('css/roomsmb.css')}}" rel="stylesheet" type="text/css">
    <style>
        .post_title {
            font-size: 18px;
            font-weight: bold;
            color: #636262;
            padding-left: 50px;
        }
        .post_header_section{
            border-bottom: 1px solid #cec8c3;
            padding: 5px 20px;
        }
        .post_text{
            width: 95%;
            padding: 20px;
            overflow: hidden;
        }
        .like_btn{
            float: none;
            margin-top: 0px;
        }
        .share_post {
            width: 60px;
            padding: 14px 0px;
            color: #bb0840;
            position: absolute;
            cursor: pointer;
            right: 20px;
            top: 0px;
        }
        body > .container-fluid {
            overflow-x: hidden;
            padding: 0;
            background-color: #f5f2ef;
        }
        .comment-body{
            padding: 0px 20px;
        }
        .well_wishes_actions {
            width: 25px;
            float: right;
            padding-top: 16px;
            font-size: 14px;
            color: #9e9d9d;
            cursor: pointer;
            right: 0px;


        }
    </style>
    @include("layouts.mbsub_slider_header")
        @if(isset($post))
            <div style="width: 100%;display: initial;padding: 0px">
                <div class="posts_section" style="box-shadow: 0px 0px 0px;padding:0px;padding-top: 15px">
                    <div class="post_header_section" style="">
                        <img src="{{asset('imgs/homeGroup2.png')}}" class="comment_img">
                        <div class="post_title"> {{ $post->created_at->format('F d, Y') }}</div>
                        <div class="post_info" style="    font-size: 12px;color: #bcbcbc;padding-left: 50px;">by {{ $room->user->first_name }} {{ $room->user->last_name }}
                            <span class="post_time"> — {{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    <div class="post_text">{!! $post->body  !!} </div>
                    <div style="border-top:1px solid #cec8c3;position: relative ">
                        <form action="/post/{{ $post->id }}/like" method="POST" id="likePostForm">
                            @csrf
                            <div id="form-data" style="display: flex;padding: 0px 20px">
                                @if($post->isLikedBy(auth()->user()))
                                    <button class="btn like_btn"><i class="fa fa-heart"></i></button>
                                @else
                                    <button class="btn like_btn" style="color: unset"><i class="fa fa-heart"></i></button>
                                @endif
                                <div class="how_liked">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>
                            </div>
                        </form>
                        <div class="share_post">
                            share
                            <i class="fa fa-share"></i>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container section_container" style="margin-top: 0 !important;background: #f5f2ef;padding:0px 20px 100px 20px">
            <div class="container-fluid" style="padding-bottom: 100px;">
                <div class="post_comment_form" style="display: block">
                    <div class="row" style="margin-top: 10px">
                        <div class="comment_number" id="postCommentsCount"> {{ $post->comments->count() }} Comments </div>
                        <div id="comments-data" class="comments-data">
                            @foreach($post->comments as $comment)
                                <div class="col-xs-12">
                                    <div class="comment-item" style="margin:10px 0px !important;">
                                        <div class="info-line">
                                            <img src="{{asset('imgs/homeGroup2.png')}}" class="comment_img">
                                            <div class="comment-signature comment_name" >{{ $comment->user->first_name }} {{ $comment->user->last_name }}</div>
                                            <div class="comment-date">{{ $comment->created_at->diffForHumans() }}</div>
                                        </div>
                                        <div class="fade-out fade-out-medium hide-read-more" style="width: 100%">
                                            <div class="user-generated comment-body"
                                                 data-qa-id="comment-body-5f5e3001bdc412053a6ee1b8">{{ $comment->body }}</div>
                                        </div>
                                        <div class="comment-footer" style="height: 60px">
                                            <form action="{{ route('likeComment', $comment->id) }}" id="{{ $comment->id }}" method="POST" class="like-form">
                                                @csrf
                                                <div id="comment-likes-data-{{ $comment->id }}" class="comment-likes-data">
                                                    @if($comment->isLikedByComment(auth()->user()))
                                                        <button class="btn like_btn" style="float: left"><i class="fa fa-heart"></i></button>
                                                    @else
                                                        <button class="btn like_btn" style="color: unset;float: left"><i class="fa fa-heart"></i></button>
                                                    @endif
                                                    <div class="how_liked" style="float:left">{{ $comment->likesComment->count() }} Hearts</div>
                                                </div>
                                            </form>
                                            {{--<div class="comment_edit">edit</div>
                                            <div class="comment_delete">delete</div>--}}
                                            <div style="position: absolute;right: 0px;padding: 3px 25px;">
                                            <div class="well_wishes_actions" ><i class="fa fa-edit"></i> </div>
                                            <div class="well_wishes_actions" ><i class="fa fa-trash"></i> </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    <div class="mobileFooter" style="display: none;">
        <div class="navbar" style="width: 100%;background: #ffffff;  z-index: 40000;padding-top: 5px;">
            <form action="{{ route('storeComment') }}" method="POST" id="postCommentForm">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="text" name="comment" placeholder="Post a Comment " style="width: 80%;border: 1px solid #e84b7c;border-radius: 10px;height: 35px;padding-left: 10px" >
                <button type="submit" class="btn" style="color: #e84b7c;background: #ffffff">POST</button>
            </form>
        </div>
    </div>
    <script src='{{ asset('js/cdn/2.1.3/jquery.min.js') }}'></script>
    <script src='{{asset("js/cdn/owl.carousel.min.js")}}'></script>
    <script  src="{{asset('js/roommbcardSwip.js')}}"></script>

    <script>

        $('#likePostForm').on('submit', function (e) {
debugger;
            e.stopPropagation();
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $("#form-data").load(" #form-data > *");
                }
            });
        });

        $('#postCommentForm').on('submit', function (e) {

            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    var count = data + " Comments";
                    $('#postCommentsCount').html(count);
                    $("#comments-data").load(" #comments-data > *");
                    e.preventDefault();
                }
            });
        });
        $(document).on('submit','.like-form',function(e){
        //$('.like-form').on('submit', function (e) {

            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var id = form.attr('id');

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $("#comment-likes-data-"+id).load(" #comment-likes-data-"+id +"> *");
                }
            });
        });

    </script>
@endsection
