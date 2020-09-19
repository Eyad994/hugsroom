<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="profile_header" style="background-image: url({{ asset("uploads/background/$room->cover_image") }})">
                <div style="height: 20px"></div>
                <label class="btn change_pic_btn" >
                    <div style="padding-top: 7px">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </div>
                    <form action="" id="background-image-form" method="POST">
                        @csrf
                        <input type="file" name="background-image" id="background-image" style="visibility: hidden;"/>
                    </form>
                </label>
                <div class="share_icon" style="padding: 2px 20px;float: right;">
                    <i class="fa fa-share-alt" style="font-size: 25px;color:#ffffff"></i>
                </div>
            </div>
            <div class="profile_photo">
                <img @if($room->profile_image == null) src="{{asset('imgs/homeGroup2.png')}}" @endif style="object-fit: cover; width: 170px;height: 170px; background-size: cover; background-image: url({{ asset("uploads/profile/$room->profile_image") }})">
            </div>
            <label class="btn change_pic_btn"  style="position: absolute;left: 250px;top: 200px;" >
                <div style="padding-top: 7px">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </div>
                <form action="" id="profile-image-form" method="POST">
                    @csrf
                    <input type="file" id="profile_image_upload" name="profile_image_upload" style="visibility: hidden;"/>
                </form>
            </label>
            <div class="post_profile_name">
                {{ $room->first_name }} {{ $room->last_name }}
            </div>
            {{--<div class="profile_visitor_info">
                <button type="button" class="btn settings_btn" style="float: left;margin-left: 300px;background: #E84B7B;color: #ffffff;">
                    <i class="fa fa-cog" style="font-size: 17px;color: #ffffff;padding: 0px 3px;"></i> Settings
                </button>
                <div style="float: left;width: 50px;padding: 8px 0px;border-right: 1px solid #bcbcbc">
                    <span>5 </span> Visits
                </div>
                <div style="padding:8px 10px;width: 100px;float: left;">
                    Share
                    <i class="fa fa-share"></i>
                </div>
            </div>--}}
        </div>
    </div>

</div>

<div class="row xxx" style="height: 310px !important;background: #ebe5e0;">
    <div class="col-md-12">
        <div class="owl-carousel">
            <div class="item">
                <a href="{{asset('/rooms/mbroom/1')}}">
                <div class="item" data-toggle="slide1">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">
                                <div style="height: 200px; text-align: center">
                                    <div style="color: #e84b7c;font-size: 80px;padding-top: 30px;"><i class="fa fa-pencil"></i></div>
                                    <div style="color: #e84b7c;font-size: 27px;padding-top: 4px;">Journal</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="item black active">
                <a href="{{asset('/rooms/mbgallery/1')}}">
                    <div class="item active" data-toggle="slide2">
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <div class="uk-card-box">
                                <div  class="uk-card-sub-box">
                                    <div style="height: 200px; text-align: center">
                                        <div style="color: #e84b7c;font-size: 80px;padding-top: 30px;"><i class="fa fa-picture-o"></i></div>
                                        <div style="color: #e84b7c;font-size: 27px;padding-top: 4px;">Gallery</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="{{asset('/rooms/mbwellWishes/1')}}">
                <div class="item" data-toggle="slide3">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">
                                <div style="height: 200px; text-align: center">
                                    <div style="color: #e84b7c;font-size: 80px;padding-top: 30px;"><i class="fa fa-heart"></i></div>
                                    <div style="color: #e84b7c;font-size: 27px;padding-top: 4px;">Well Wishes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="item black">
                <div class="item" data-toggle="slide4">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">
                                <div style="height: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item" data-toggle="slide5">
                    <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                        <div class="uk-card-box">
                            <div  class="uk-card-sub-box">
                                <div style="height: 200px;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%;">
            <span style="padding-left: 20px;color: #E84B7B;font-size: 20px"><i class="fa fa-users"></i> {{ $room->unique_visitor }} Visits </span>
            <button type="button" class="btn settings_btn" style="float: right;background: #E84B7B;color: #ffffff;">
                <i class="fa fa-cog" style="font-size: 17px;color: #ffffff;padding: 0px 3px;"></i> Following
            </button>
        </div>
    </div>
</div>

<script>


    $('#background-image').change(function () {
        let formData = new FormData($('#background-image-form')[0]);
        let file = $('input[type=file]')[0].files[0];
        formData.append('file', file, file.name);
        $.ajax({
            url: '{{ url("/room/$room->id/uploadBackgroundImage") }}',
            headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
            type: 'POST',
            contentType: false,
            processData: false,
            cache: false,
            data: formData,
            success: function(data) {
                location.reload();
            }
        });
    });

    $('#profile_image_upload').change(function () {

        let formData = new FormData($('#background-image-form')[0]);
        let file = $('input[name=profile_image_upload]')[0].files[0];
        formData.append('file', file, file.name);
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
            url: '/room/{{ $room->id }}/uploadProfileImage',
            type: 'POST',
            data: formData,
            //Options to tell JQuery not to process data or worry about content-type
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                location.reload();
            }
        });
    })

</script>