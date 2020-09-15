<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="profile_header">
                <div style="height: 20px"></div>
                <label class="btn change_pic_btn" >
                    <div style="padding-top: 7px">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                    </div>
                    <input type="file" style="visibility: hidden;"/>
                </label>
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

            <label class="btn change_pic_btn"  style="position: absolute;left: 210px;top: 360px;">
                <div style="padding-top: 7px">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </div>
                <input type="file" style="visibility: hidden;"/>
            </label>
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