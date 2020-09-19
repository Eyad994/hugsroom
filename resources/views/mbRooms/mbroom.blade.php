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
                window.location.href = "/rooms/room/{{ $room->id }}";
            }
        });
    </script>
    @include("layouts.mbsub_slider_header")
    <style>
        /* unvisited link */
        a:link {
            color: #585858;
        }

        /* visited link */
        a:visited {
            color: #585858;
        }

        /* mouse over link */
        a:hover {
            color: #585858;
        }

        /* selected link */
        a:active {
            color: #585858;
        }
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }
        .post_likes {
            width: 100%;
            padding:30px 0px;
            margin-top: -45px;
        }
        .how_liked {
            margin-top: 10px;
        }
    </style>

    <div class="container section_container" style="margin-top: 0 !important;background: #f5f2ef;display: table;padding-bottom: 100px;padding-top: 0px">
        <div class="container-fluid">
            <a href="{{asset("rooms/addJournal/1")}}" >
                <div style="width: 100%;height: 80px;background: #ffffff">
                    <div style="width: 80px;float: left;padding: 17px 15px;">
                        <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 50px;height: 50px;border-radius: 50px;margin-top: -2px;object-fit: cover;}">
                    </div>
                    <div style="width: 240px;color: #797979;float: left;font-size: 20px;padding: 22px 0px;">Post a Journal Entry</div>
                    <i class="fa fa-angle-right" style="font-size: 40px;color: #797979;width: 20px;float: right;padding-top: 17px;"></i>
                </div>
            </a>
            <div style="padding: 10px;color: #e84b7c;">Latest Journal Entry </div>
            @if(isset($post))
                <a href="{{asset("rooms/journal/1")}}">
                    <div class="posts_section">
                        <div class="post_title"> {{ $post->created_at->format('F d, Y') }}</div>
                        <div class="post_info">{{ $room->user->first_name }} {{ $room->user->last_name }}
                            <span class="post_time"> — {{ $post->created_at->diffForHumans() }}</span></div>
                        <div class="post_text">{!! \Illuminate\Support\Str::limit($post->body, 75, ' Show More')  !!}</div>

                        <div class="post_likes">
                            <form action="/post/{{ $post->id }}/like" method="POST" id="likePostForm" class="likePostForm">
                                @csrf
                                <div id="form-data">
                                    @if($post->isLikedBy(auth()->user()))
                                        <button class="btn like_btn"><i class="fa fa-heart"></i></button>
                                    @else
                                        <button class="btn like_btn" style="color: unset"><i class="fa fa-heart"></i></button>
                                    @endif
                                    <div class="how_liked" id="postLikesCount">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>
                                </div>
                            </form>

                            {{--<div class="post_comments" onclick="openCommentsSection()">Post comment</div>--}}
                            <div class="share_post">
                                share
                                <i class="fa fa-share"></i>
                            </div>
                        </div>
                    </div>
                </a>

            @endif
        </div>
        <div style="padding: 10px;color: #e84b7c;">Latest Site Activity</div>
        @if(isset($post))
            <a href="{{asset("rooms/journal/1")}}">
                <div class="posts_section">
                    <div class="post_title"> {{ $post->created_at->format('F d, Y') }}</div>
                    <div class="post_info">{{ $room->user->first_name }} {{ $room->user->last_name }}
                        <span class="post_time"> — {{ $post->created_at->diffForHumans() }}</span></div>
                    <div class="post_text">{!! \Illuminate\Support\Str::limit($post->body, 75, ' Show More')  !!}</div>

                    <div class="post_likes">
                        <form action="/post/{{ $post->id }}/like" method="POST" id="likePostForm" class="likePostForm">
                            @csrf
                            <div id="form-data">
                                @if($post->isLikedBy(auth()->user()))
                                    <button class="btn like_btn"><i class="fa fa-heart"></i></button>
                                @else
                                    <button class="btn like_btn" style="color: unset"><i class="fa fa-heart"></i></button>
                                @endif
                                <div class="how_liked" id="postLikesCount">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>
                            </div>
                        </form>

                        {{--<div class="post_comments" onclick="openCommentsSection()">Post comment</div>--}}
                        <div class="share_post">
                            share
                            <i class="fa fa-share"></i>
                        </div>
                    </div>
                </div>
            </a>
        @endif
    </div>

    <script type="text/javascript">
        initSample();
    </script>

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
    </script>
@endsection
