@extends('layouts.layout')
@section('content')

    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <link href="{{asset('css/roomsmb.css')}}" rel="stylesheet" type="text/css">

    @include("layouts.mbsub_slider_header")

    <div class="container section_container" style="margin-top: 0 !important;background: #f5f2ef;display: table;padding-bottom: 100px;padding-top: 0px">
        <div class="container-fluid">
            @if(isset($post))
                <div class="posts_section">
                    <div class="post_title"> {{ $post->created_at->format('F d, Y') }}</div>
                    <div class="post_info">{{ $post->title }} by {{ $room->user->first_name }} {{ $room->user->last_name }}
                        <span class="post_time"> — {{ $post->created_at->diffForHumans() }}</span></div>
                    <div class="post_text">{!! $post->body !!}</div>
                    <div class="post_likes">
                        <form action="/post/{{ $post->id }}/like" method="POST" id="likePostForm">
                            @csrf
                            <div id="form-data">
                                @if($post->isLikedBy(auth()->user()))
                                    <button class="btn like_btn"><i class="fa fa-heart"></i></button>
                                @else
                                    <button class="btn like_btn" style="color: unset"><i class="fa fa-heart"></i></button>
                                @endif
                                <div class="how_liked">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>
                            </div>
                        </form>
                        {{--<div class="post_comments" onclick="openCommentsSection()">Post comment</div>--}}
                        <div class="share_post">
                            share
                            <i class="fa fa-share"></i>
                        </div>
                    </div>
                </div>

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
                                <div class="comment-footer">
                                    <form action="{{ route('likeComment', $comment->id) }}" id="{{ $comment->id }}" method="POST" class="like-form">
                                        @csrf
                                        <div id="comment-likes-data-{{ $comment->id }}" class="comment-likes-data">
                                            @if($comment->isLikedByComment(auth()->user()))
                                                <button class="btn like_btn"><i class="fa fa-heart"></i></button>
                                            @else
                                                <button class="btn like_btn" style="color: unset"><i class="fa fa-heart"></i></button>
                                            @endif
                                                <div class="how_liked">{{ $comment->likesComment->count() }} Hearts</div>
                                        </div>
                                    </form>
                                    <div class="comment_edit">edit</div>
                                    <div class="comment_delete">delete</div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>
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

                }
            });
        });

        $('.like-form').on('submit', function (e) {

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
