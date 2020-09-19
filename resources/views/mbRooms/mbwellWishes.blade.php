@extends('layouts.layout')
@section('content')

    <link rel="stylesheet" href="{{asset('css/mbcardSwip.css')}}">
    <link href="{{asset('css/roomsmb.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        $(function () {
            if (screen.width > "768") {
                window.location.href = "/rooms/wellWishes/{{ $room->id }}";
            }
        });
    </script>
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
        .post_text {
            padding: 0px;
            overflow: hidden;
            width: 100%;
        }
        .well_wishes_actions {
            width: 25px;
            float: right;
        }
    </style>
    <div class="container section_container" style="margin-top: 0 !important;background: #ebe5e0;">
        <div class="container-fluid" style="padding-bottom: 100px;">
            <div class="section_title">Thoughts & Well Wishes</div>
            @if(isset($post))
                <div class="posts_section">
                    <div class="post_info">
                        <img src="{{asset('imgs/homeGroup2.png')}}" class="comment_img">
                        <div class="comment-signature comment_name" >{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div>
                        <div class="comment-date">{{ $post->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="post_text" style="padding-top: 10px">{!! $post->body !!}</div>
                    <div class="post_likes" style="margin-top: -30px">
                        <form action="/post/{{ $post->id }}/like" method="POST">
                            @csrf
                            @if($post->isLikedBy(auth()->user()))
                                <button type="submit" class="btn like_btn"><i class="fa fa-heart" style="    font-size: 18px;padding-top: 10px;"></i></button>
                            @else
                                <button class="btn like_btn" style="color: unset"><i class="fa fa-heart" style="    font-size: 18px;padding-top: 7px;"></i></button>
                            @endif
                        </form>
                        <div class="how_liked">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>
                        <div class="well_wishes_actions" ><i class="fa fa-edit"></i></div>
                        <div class="well_wishes_actions" ><i class="fa fa-trash"></i></div>
                    </div>
                </div>
            @endif


        </div>
    </div>
    <div class="mobileFooter" style="display: none;">
        <div class="navbar" style="width: 100%;background: #ffffff;  z-index: 40000;padding-top: 5px;">
            <form action="{{ route('storeComment') }}" method="POST" id="postWishForm">
                @csrf
            <input type="text" placeholder="Share Thoughts & Well Wishes" style="width: 80%;border: 1px solid #e84b7c;border-radius: 10px;height: 35px;padding-left: 10px" >
            <button class="btn" style="color: #e84b7c;background: #ffffff">POST</button>
            </form>
        </div>
    </div>
    <script src='{{ asset('js/cdn/2.1.3/jquery.min.js') }}'></script>
    <script src='{{asset("js/cdn/owl.carousel.min.js")}}'></script>
    <script  src="{{asset('js/roommbcardSwip.js')}}"></script>
    <script type="text/javascript">
        $(".owl-carousel").trigger("to.owl.carousel", [2, 1]);
    </script>
@endsection

<script>
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
</script>
