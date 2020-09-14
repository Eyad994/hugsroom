@extends('layouts.layout')
@section('content')
    <script src="{{asset('css/ckeditor/samples.css')}}"></script>
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/ckeditor/sample.js')}}"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description"
          content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
    <style>
        .sub_menu_icons {
            width: 100px;
            color: #ffffff;
            font-size: 40px;
            padding: 20px;
        }

        .profile_header {
            width: 100%;
            background: #4ba2b5;
            height: 350px;
            margin-top: 10px;
            position: relative;
        }

        .settings_btn {
            float: right;
            margin-right: 20px;
        }

        .change_pic_btn {
            border-radius: 100px;
            width: 30px;
            height: 30px;
            padding: 0px;
            float: left;
            margin-left: 20px;
            color: #ffffff;
            background: #8e8e8e;
        }

        .profile_info {
            height: 70px;
            background: #efefef61;
            width: 100%;
            bottom: 0px;
            position: absolute;
            padding-left: 300px;
            padding-top: 20px;
            font-size: 23px;
            font-weight: bold;
            color: #ffffff;
        }

        .profile_visitor_info {
            background: #ffffff;
            height: 70px;
            width: 100%;
            padding-top: 20px;
        }

        .profile_menu {
            background: #E84B7B;
            height: 100px;
            width: 100%;
        }

        .profile_photo {
            width: 250px;
            height: 250px;
            background: silver;
            border-radius: 250px;
            position: absolute;
            top: 160px;
            left: 30px;
            overflow: hidden;
        }

        .post_form {
            width: 100%;
            background: #f4f4f4;
            border: 1px solid #dddddd;
            border-radius: 5px;
            padding: 20px 20px;
        }

        .upload_post_photo_btn {
            background: #f4f4f4;
            color: #e84b7c;
        }

        .upload_post_photo_btn:hover {
            background: #ebe5e0;
            color: #e84b7c;
        }

        .section_title {
            font-size: 35px;
            font-weight: bold;
            width: 100%;
            text-align: center;
            padding-bottom: 30px;
        }

        .section_container {
            background: #ebe5e0;
            float: left;
            width: 100% !important;
            margin-top: 50px !important;
            padding-top: 50px;

        }

        .posts_section {
            background: #ffffff;
            padding: 50px 30px;
        }

        .post_title {
            font-size: 27px;
            font-weight: bold;
        }

        .post_text {
            padding: 20px 0px;
        }

        .like_btn {
            background: #ffffff;
            font-size: 30px;
            color: #e84b7c;
            float: left;
        }

        .like_btn:hover {
            color: #ab3c5e;
        }

        .how_liked {
            width: 80px;
            float: left;
            padding: 14px 0px;
            color: #bb0840;
            cursor: pointer;
        }

        .post_comments {
            width: 120px;
            float: left;
            padding: 14px 0px;
            cursor: pointer;
        }

        .post_comments:hover {
            color: #bb0840
        }

        .share_post {
            width: 80px;
            float: right;
            padding: 14px 0px;
            color: #bb0840;
            cursor: pointer;
        }

        .comments_section {
            height: 70px;
            background: #f4f4f4;
            border-bottom: 1px solid #cccccc;
            font-size: 20px;
            padding: 20px 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .post_comment_title {
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            padding-bottom: 10px;
        }

        .post_comment_name {
            padding-left: 30px;
            font-weight: bold;
            padding-bottom: 10px;

        }

        .post_comment_text {
            padding: 0px 30px;
        }

        .post_comment_submit {
            background: #e84b7c;
            font-size: 17px;
            padding: 7px 20px;
            color: #ffffff;
        }

        .post_comment_form {
            background: #f4f4f4;
            display: none;
        }

        .read_more_posts_section {
            padding: 30px;
            text-align: center;
        }

        .main_content {
            background: #f5f2ef !important;
        }

        .main_header {
            height: 451px !important;
        }

        .profile_menu_items {
            padding-top: 25px;
            text-align: center;
            font-size: 30px;
            color: #ffffff;
            cursor: pointer;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            if (screen.width < "768") {
                window.location.href = "/rooms/mbroom/1";
            }
        });
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="profile_header">
                    <div style="height: 20px"></div>
                    <button type="button" class="btn change_pic_btn">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn settings_btn">
                        <i class="fa fa-cog" style="    font-size: 17px;color: #8e8d8d;padding: 0px 3px;"></i> Settings
                    </button>
                    <div class="profile_info">
                        {{ $room->title }}
                    </div>
                </div>
                <div class="profile_photo">
                    <img src="{{asset('imgs/homeGroup2.png')}}" style="width: 250px;height: 250px; object-fit: cover">
                </div>
                <button type="button" class="btn change_pic_btn" style="position: absolute;left: 210px;top: 360px;">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </button>
                <div class="profile_visitor_info">
                    <button type="button" class="btn settings_btn"
                            style="float: left;margin-left: 300px;background: #E84B7B;color: #ffffff;">
                        <i class="fa fa-cog" style="font-size: 17px;color: #ffffff;padding: 0px 3px;"></i> Settings
                    </button>
                    <div style="float: left;width: 50px;padding: 8px 0px;border-right: 1px solid #bcbcbc">
                        <span>{{ $room->unique_visitor }}</span> Visits
                    </div>
                    <div style="padding:8px 10px;width: 100px;float: left;">
                        Share
                        <i class="fa fa-share"></i>
                    </div>
                </div>
                <div class="profile_menu">
                    <div class="col-md-2 profile_menu_items"><i class="fa fa-home"></i>
                        <div style="font-size: 15px">Home</div>
                    </div>
                    <div class="col-md-2 profile_menu_items"><i class="fa fa-pencil"></i>
                        <div style="font-size: 15px">Journal</div>
                    </div>
                    <div class="col-md-2 profile_menu_items"><i class="fa fa-picture-o"></i>
                        <div style="font-size: 15px">Gallery</div>
                    </div>
                    <div class="col-md-2 profile_menu_items"><i class="fa fa-gift"></i>
                        <div style="font-size: 15px">Gift</div>
                    </div>
                    <div class="col-md-2 profile_menu_items"><i class="fa fa-snowflake-o"></i>
                        <div style="font-size: 15px">Planner</div>
                    </div>
                    <div class="col-md-2 profile_menu_items"><i class="fa fa-heart"></i>
                        <div style="font-size: 15px">Well Wishes</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container section_container" style="height: 600px;">
        <div class="container-fluid">
            <div class="section_title">Update Your Visitors</div>
            <form action="{{ route('storePost') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <div class="post_form">
                    <div style="font-size: 17px;font-weight: bold">Title</div>
                    <div style="padding-bottom: 20px">
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="adjoined-bottom">
                        <div class="grid-container">
                            <div class="grid-width-100">
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
                            Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container section_container" style="margin-top: 0 !important;background: #f5f2ef;display: table">
        <div class="container-fluid">
            <div class="section_title">Newest Update</div>
            @if(isset($post))
            <div class="posts_section">
                <div class="post_title"> {{ $post->created_at->format('F d, Y') }}</div>
                <div class="post_info">{{ $post->title }} by {{ $room->user->first_name }} {{ $room->user->last_name }}
                    <span class="post_time"> — {{ $post->created_at->diffForHumans() }}</span></div>
                <div class="post_text">{!! $post->body !!}</div>
                <div class="post_likes">
                    <form action="/post/{{ $post->id }}/like" method="POST">
                        @csrf
                    @if($post->isLikedBy(auth()->user()))
                        <button type="submit" class="btn like_btn"><i class="fa fa-heart"></i></button>
                    @else
                        <button class="btn like_btn" style="color: unset"><i class="fa fa-heart"></i></button>
                    @endif
                    </form>
                    <div class="how_liked">{{ $postLikes }} Hearts</div>
                    <div class="post_comments" onclick="openCommentsSection()">Post comment</div>
                    <div class="share_post">
                        share
                        <i class="fa fa-share"></i>
                    </div>
                </div>
            </div>

            <div class="comments_section" onclick="openCommentsSection()">
                <span>COMMENTS</span>
                <i class="fa fa-angle-down" aria-hidden="true" style="float: right;font-size:30px"></i>
            </div>
            <div class="post_comment_form">
                <div class="post_comment_title">Post a Comment</div>
                <div class="post_comment_name">{{-->{{auth()->user()->name}}--}} {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div>
                <form action="{{ route('storeComment') }}" method="POST">
                    @csrf
                    <div class="post_comment_text">
                        <textarea name="comment" class="form-control"></textarea>
                    </div>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div style="padding: 15px 30px">
                        <button type="submit" class="btn post_comment_submit">Post a Comment</button>
                    </div>
                </form>

                <div class="row">
                    @foreach($post->comments as $comment)
                        <div class="col-xs-12">
                            <div class="comment-item">
                                <div class="info-line">
                                    <span class="comment-signature">{{ $comment->user->first_name }} {{ $comment->user->last_name }}</span>
                                    | <span class="comment-date">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="fade-out fade-out-medium hide-read-more">
                                    <div class="user-generated comment-body"
                                         data-qa-id="comment-body-5f5e3001bdc412053a6ee1b8">{{ $comment->body }}</div>
                                </div>
                                <span class="toolbar">
                                <button><i class="cbicon-heart" aria-hidden="true"></i></button>
                            </span>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="read_more_posts_section">
                <button class="btn post_comment_submit"> Read More Journal Entries</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        initSample();
        function openCommentsSection() {
            $(".post_comment_form").toggle();
        }
    </script>
@endsection
