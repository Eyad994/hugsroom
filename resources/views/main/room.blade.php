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
                    <div style="float: left;width: 70px;padding: 8px 0px;border-right: 1px solid #bcbcbc">
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
                <div class="post_info">{{ $post->title }} by {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
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
                    <div class="how_liked">{{ isset($postLikes) ? $postLikes : 0 }} Hearts</div>
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
                                    <img src="{{asset('imgs/homeGroup2.png')}}" class="comment_img">
                                    <div class="comment-signature comment_name" >{{ $comment->user->first_name }} {{ $comment->user->last_name }}</div>
                                    <div class="comment-date">{{ $comment->created_at->diffForHumans() }}</div>
                                </div>
                                <div class="fade-out fade-out-medium hide-read-more" style="width: 100%">
                                    <div class="user-generated comment-body"
                                         data-qa-id="comment-body-5f5e3001bdc412053a6ee1b8">{{ $comment->body }}</div>
                                </div>
                                <span class="toolbar">{{--<button><i class="cbicon-heart" aria-hidden="true"></i></button>--}}</span>
                                <div class="comment-footer">
                                    <div class="comment_like"><i class="fa fa-heart"></i></div>
                                    <div class="comment_edit">edit</div>
                                    <div class="comment_delete">delete</div>
                                </div>
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
