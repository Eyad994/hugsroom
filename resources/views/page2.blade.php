@extends('layouts.layout')
@section('content')
    <style>
        .page2_main_img{
            display: none;
            margin-top: 0px;
            height: 250px;
        }
        .pad-top_20-24{
            padding: 5px 20px;
            color: #E84B7B;
            font-size: 21px;
            text-align: left;
            display: none;
            font-weight: bold;
        }
        body {
            background-color: #ffffff !important;
            padding-bottom:0px;
        }
        body > .container-fluid {
            background-color: #ffffff;
        }
        .slider_btn{
            height: 50px;
            margin: 20px 0;
            width: 100%;
            background: #e84b7c;
            color: #ffffff !important;
            font-size: 15px;
            font-weight: bold;
            border: 0;
            border-radius: 5px;
            padding: 15px !important;
        }
        .slides_content{
            padding: 0px 20px;
            display: none;
        }
        .page2_mobileFooter{
            display: none;
        }
        .back_btn{
          display: none;

        }
        @media (max-width: 768px)
        {
            .page2_mobileFooter .navbar {
                overflow: hidden;
                background-color: #333;
                position: fixed;
                bottom: -2;
                width: 100%;
                margin-bottom: 0px;
            }

            .page2_mobileFooter .navbar a {
                float: left;
                display: block;
                color: #a2a2a2;
                text-align: center;
                padding: 5px 0px;
                text-decoration: none;
                font-size: 14px;
            }
            .page2_mobileFooter .navbar a.active {
                background-color: #ffffff;
                color: #e64d7b;
            }

            .page2_mobileFooter .main {
                padding: 16px;
                margin-bottom: 30px;
            }
            .back_btn{
                position: absolute;
                top: 16px;
                width: 25px;
                height: 25px;
                background: #777575;
                color: #ffffff;
                border-radius: 20px;
                padding: 2px 8px;
                font-size: 20px;
                left: 15px;
                display: block;
                z-index: 11111;
            }
            .back_btn:focus , .back_btn:hover{
                position: absolute;
                top: 16px;
                width: 25px;
                height: 25px;
                background: #777575;
                color: #ffffff;
                border-radius: 20px;
                padding: 2px 8px;
                font-size: 20px;
                left: 15px;
                display: block;
                z-index: 11111;
            }
        }

        .page2_mobileFooter{
            display: none;
        }

    </style>

    <div class="row">
        <div class="col-md-12" style="float: left;padding: 0px">
            <a href="{{asset('/mbhome')}}" class="back_btn">
                <i class="fa fa-angle-left"></i>
            </a>
            <img src="{{asset("imgs/thumbnail/1.jpeg")}}" class="page2_main_img" {{$id == 1?'style=display:block !important':''}}>
            <img src="{{asset("imgs/thumbnail/2.jpeg")}}" class="page2_main_img" {{$id == 2?'style=display:block !important':''}}>
            <img src="{{asset("imgs/thumbnail/3.jpeg")}}" class="page2_main_img" {{$id == 3?'style=display:block !important':''}}>
            <img src="{{asset("imgs/thumbnail/4.jpeg")}}" class="page2_main_img" {{$id == 4?'style=display:block !important':''}}>
            <img src="{{asset("imgs/thumbnail/5.jpeg")}}" class="page2_main_img" {{$id == 5?'style=display:block !important':''}}>
            <div>
                <h3 class="h4 pad-top_20-24" {{$id == 1?'style=display:block !important':''}}>Patient Room Online</h3>
                <h3 class="h4 pad-top_20-24" {{$id == 2?'style=display:block !important':''}}>Find More Help</h3>
                <h3 class="h4 pad-top_20-24" {{$id == 3?'style=display:block !important':''}}>Helping Hospital</h3>
                <h3 class="h4 pad-top_20-24" {{$id == 4?'style=display:block !important':''}}>Even as Strangers</h3>
                <h3 class="h4 pad-top_20-24" {{$id == 5?'style=display:block !important':''}}>Search and Follow</h3>
                <div class="pad-top_12 slides_content" {{$id == 1?'style=display:block !important':''}}>
                    <p>
                        A dedicated solution that is moving the patient room online alongside invited family and friends.
                        Open a totally free room with virtual walls. You can write health updates, receive Well Wishes, access relevant resources, and share photo memories to keep you smiling while you get better.
                        Stay connected with your loved ones away from potential distractions, negativity, and the privacy concerns of social media when your peace and privacy is needed most.
                        You can select your privacy setting and choose who to invite to your room.
                        Appreciate everybody’s’ contribution during those difficult times without having to scroll up through chats. Every post here is clearly displayed to draw a smile and warm your heart today and tomorrow.
                    </p>
                    <p>
                        Hugs are now closer than ever.
                    </p>
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
                <div class="page2_mobileFooter" {{$id == 1?'style=display:block !important':''}}>
                    <div class="navbar" style="width: 100%;background: #ffffff00;  z-index: 40000;margin-bottom: 50px;left: 0px;padding: 0 10px">
                        <div class="more_info_btn">
                            <a href="#" class="btn slider_btn">Open Room</a>
                        </div>
                    </div>
                </div>
                <div class="pad-top_12 slides_content" {{$id == 2?'style=display:block !important':''}}>
                    <p>
                        Have you felt the need to do more while a close family member or a friend is ill?
                    </p>
                    <p>
                        Whether you live in another continent or across the street you can now show your empathy and draw on the strength of others in difficult times by visiting your patient anywhere and anytime.
                        You can now Search, Follow, Interact and Share your patients’ according to their privacy settings.
                    </p>
                    <p>
                        We will notify everyone of every new post alongside updates from the patient’s family on their recovery.
                    </p>
                    <p>
                        This is an everlasting virtual room for beautiful memories to help you stay strong while your patient recovers.
                    </p>
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
                <div class="page2_mobileFooter" {{$id == 2?'style=display:block !important':''}}>
                    <div class="navbar" style="width: 100%;background: #ffffff00;  z-index: 40000;margin-bottom: 50px;left: 0px;padding: 0 10px">
                        <div class="more_info_btn">
                            <a href="#" class="btn slider_btn">Search & Follow</a>
                        </div>
                    </div>
                </div>
                <div class="pad-top_12 slides_content" {{$id == 3?'style=display:block !important':''}}>
                    <p>
                        How about patients that don’t have their family and friends around while in hospital?
                    </p>
                    <p>
                        Public Room can be opened by patients or nurses for total strangers to give the love and support they need.
                    </p>
                    <p>
                        Little encouraging words can go a long way in patient recovery. Improve the mental health of yourself and others.
                    </p>
                    <p>
                        We don’t need to stay alone in difficult times, your kind words and deeds will remain forever.
                    </p>
                </div>
                <div class="page2_mobileFooter" {{$id == 3?'style=display:block !important':''}}>
                    <div class="navbar" style="width: 100%;background: #ffffff00;  z-index: 40000;margin-bottom: 50px;left: 0px;padding: 0 10px">
                        <div class="more_info_btn">
                            <a href="#" class="btn slider_btn">Unite in Care</a>
                        </div>
                    </div>
                </div>
                <div class="pad-top_12 slides_content" {{$id == 4?'style=display:block !important':''}}>
                    <p>
                        At the same time, we need to reduce the risk to patients from epidemic diseases, infections.
                    </p>
                    <p>
                        Now you can allow the ward to run more smoothly and better care for your patient because having visitors at the bedside may mean staff feel they cannot disturb the patient and, therefore, cannot attend to tasks such as washing or changing dressings.
                    </p>
                    <p>
                        Don’t risk your patient or your immune system. Unnecessary stress is behind, and a closer hug is a click away.
                    </p>
                </div>
                <div class="pad-top_12 slides_content" {{$id == 5?'style=display:block !important':''}}>
                    <p>
                        Access specially curated content when peace and privacy is needed most. Away from negative distractions or irrelevant advertisement
                    </p>
                    <p>
                        We are preparing information you need throughout your care journey. For instance, you can access feel good stories from all over the world, mental health material, and data from pharmacies, medical equipment, health insurance and gift shops around you.
                    </p>
                    <p>
                        We are preparing information you need throughout your care journey. For instance, you can access feel good stories from all over the world, mental health material, and data from pharmacies, medical equipment, health insurance and gift shops around you.
                    </p>
                    <p>
                        Your care journey just got better
                    </p>
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
                <div class="page2_mobileFooter" {{$id == 5?'style=display:block !important':''}}>
                    <div class="navbar" style="width: 100%;background: #ffffff00;  z-index: 40000;margin-bottom: 50px;left: 0px;padding: 0 10px">
                        <div class="more_info_btn">
                            <a href="#" class="btn slider_btn">Open Room</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
