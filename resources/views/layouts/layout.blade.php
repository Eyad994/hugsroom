<html>
<head>

  {{--  <script type="text/javascript">// Foresee All Pages*****************************************
        var d = new Date();
        d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = "showSurvey=true;" + expires + ";path=/";
    </script>
--}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Hugs Room</title>
    <link href="{{asset('imgs/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link href="{{asset('imgs/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <link href="{{asset('css/v4.3222908342.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/v5.3222908342.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/cbcomponents.752154146.css')}}" rel="stylesheet" type="text/css">
   {{-- <link href="{{asset('css/main.482494395.css')}}" rel="stylesheet" type="text/css">--}}
    <link href="{{asset('css/main.2868986225.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/main.4086732098.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/main.3775130132.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/print.2137607392.css')}}" media="print" rel="stylesheet" type="text/css">
{{--    <link rel="stylesheet" href="https://swiperjs.com/package/swiper-bundle.min.css">--}}
   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset("css/cdn/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
 {{--   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css'>--}}
    <link rel='stylesheet' href='{{asset("css/cdn/owl.carousel.css")}}'>
    <link rel='stylesheet' href='{{asset("css/cdn/owl.theme.default.css")}}'>
    <link rel='stylesheet' href='{{asset("css/cdn/uikit.min.css")}} '>


{{--

        <script src='js/core/main.js'></script>
        <script src='js/daygrid/main.js'></script>
        <script src='js/timegrid/main.js'></script>
        <script src='js/list/main.js'></script>
        <script src='js/interaction/main.js'></script>
         <script type="text/javascript" src="js/cbcomponents.js"></script>
    --}}

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
   {{-- <script type="text/javascript" src="js/jquery.min.js"></script>--}}

    <link href="{{asset('css/mainEN.css')}}" media="print" rel="stylesheet" type="text/css">


{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
    <link rel="stylesheet" href='{{asset("css/cdn/bootstrap.min.css")}}' >

    <script src='{{asset("js/cdn/3.5.1/jquery.min.js")}}'></script>
    <script src='{{asset("js/cdn/3.4.1/bootstrap.min.js")}}'></script>

    <script src="{{asset('js/main/main.js')}}"></script>


</head>
<style type="text/css">

    a,
    a:focus,
    a:active,
    a:visited,
    a:link,
    button:focus,
    input:focus,
    textarea:focus,
    a.image-link:focus,
    div:focus{
        outline: none !important;
    }
    *,*:focus,*:hover{
        outline:none !important;
    }
    a, a:hover, a:active, a:focus, a img, object, embed {
        outline: none !important;
        ie-dummy: expression(this.hideFocus=true); /* MSIE - Microsoft Internet Explorer 9 remove outline */
    }
    p{
        color: gray !important;
    }


    .navbar-nav{
        margin-top: 65px !important;;
        width: 100%;
    }
    @media (max-width: 768px) {

        .uk-margin{
            margin-top: -50px!important;
        }

        .navbar-global{
            display: none;
        }
        .fat-footer{
            display: none;
        }

        .navbar-nav{
            margin-top: 130px !important;
            width: 100%;
        }
        .mobileFooter .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            bottom: -2;
            width: 100%;
            margin-bottom: 0px;
        }

        .mobileFooter .navbar a {
            float: left;
            display: block;
            color: #a2a2a2;
            text-align: center;
            padding: 5px 0px;
            text-decoration: none;
            font-size: 14px;
        }

        .mobileFooter .navbar a:hover {
            background: #f1f1f1;
            color: #e64d7b;
        }

        .mobileFooter .navbar a.active {
            background-color: #ffffff;
            color: #e64d7b;
        }

        .mobileFooter .main {
            padding: 16px;
            margin-bottom: 30px;
        }
        .mobileFooter{display: block !important;}
        .nav li{
            width: 100%;
            text-align: end;
        }
        .main_content{
            padding-bottom:0px !important;;
        }
        .page2_main_img{
            margin-top: 0px !important;
            height: 350px;
            width: 100%;
        }
        .card_text{
            height: 110px !important;
        }
        .uk-card-box{
            width: 100%;
            float: left;
            padding-top: 10px;
        }

        .active .card_text{
            height: 100px !important;
        }
        .active .uk-card-sub-box{
            margin-top: -5px !important;
        }
    }
    .page2_main_img{
        margin-top: 100px;
        height: 350px;
        width: 100%;
    }
    .main_content{
        background: #ffffff;
        padding-bottom:100px
    }
    .header_sub_menu{
        background: #ffffff;
        direction: ltr;
        padding: 10px 10px;
        width: 150px;
        list-style: none;
        border-radius: 5px;
        text-align: left;
        position: absolute;
        border: 1px solid #bcbcbc;
        z-index: 1;

    }

    body{
        background-color: #ebe5e0;
        font-family: 'Quicksand';;
    }

    h3{
        font-family: 'Quicksand';font-size: 22px;
    }
    .main_background_color{
        background: #E84B7B !important;
        border: 1px solid #E84B7B !important;
    }

    .main_text_color{
        background: #E84B7B !important;
    }
    .logout_btn{
        width: 100%;
        background: #ffffff;
        border: 0px;
        text-align: left;
        padding: 0px;
        margin-top: 10px;
    }
    .owl-stage-outer{
        width: 100%;
    }
    .post_footer_icons .fa:hover{
        color : #e84b7b !important;
    }
    .post_footer_icons .fa{
        cursor: pointer;
    }
    .sub_header_menu{
        width: 33%;
        text-align: center;
        float: left;
        height: 38px;
        padding-top: 10px;
    }

    .uk-card-sub-box{
        padding: 0px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 2px 2px 10px 1px #e4e1e1;
        background: #FFFFFF;
        border: 1px solid #c5bdbd;
        margin-top: 0px;
    }
    .privecy_text{
        width:100%;
        white-space: normal;
        text-align: center;
        font-size: 15px;
    }
    a:link {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
    }
</style>
<body class="homepage-16Q1" data-ga-category="Brooklyn">
<div class="container-bloody">
    <div class=" navbar-global main_header" role="navigation" aria-label="Global Navigation" data-ga-label-prefix="Global Nav - ">
        <div class="top-tier" >
            <img src="{{asset("imgs/logo.png")}}" style="position: absolute;width: 200px;height: 60px;margin-top: 50px;"/>
            {{--<div class="nav-account">
                @auth
                    {{ auth()->user()->first_name.' '.auth()->user()->last_name}}
                @else
                <a href="https://www.caringbridge.org/signin/new?returl=%2F" class="link-login" data-qa-id="global-nav-login">
                    Sign In
                    <span class="hidden-xs">or Register</span>
                </a>
                @endauth
            </div>--}}
            <span class="nav-hamburger visible-xs">
            <a class="navbar-toggle collapsed" role="button" data-toggle="collapse" data-target="#navbar" data-ga-label="Toggle navigation" data-qa-id="global-nav-toggle">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-reorder" role="presentation" aria-hidden="true"></i>
                <i class="cbicon-remove" role="presentation" aria-hidden="true"></i>
                <div>Menu</div>
            </a>
        </span>

        </div>

        <div class="bottom-tier collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav" role="menubar">
                @if (Auth::check())
                    <li role="menuitem">
                        <div class="" style="color:#ffffff;float: left;">
                            <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 23px;margin-top: 5px"></i>
                        </div>
                        <i class="fa fa-angle-down" aria-hidden="true" style="color: #ffffff;padding-top:10px;margin-left: 2px;" data-toggle="account" onclick="open_sub_menu(this)"></i>
                        <ul class="header_sub_menu" id="account" style="display: none">


                            <li><a href="{{asset('profile')}}" style="color: #000000" >Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" style="margin: 0px;">
                                    @csrf
                                    <input type="submit" value="logout" class="logout_btn">
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    <li style="font-size: 10px"> <a href="{{asset('login2')}}" >login or signup</a></li>
                @endif
                <li role="menuitem" style="    border-left: 1px solid #ffffff;padding-top: 5px;">
                    <i class="fa fa-search" aria-hidden="true" style="color:#ffffff"></i>
                </li>
                <li role="menuitem" style="padding-top:5px ">
                    <img src="{{asset("imgs/path_34.png")}}" style="float: left"/>
                    <i class="fa fa-angle-down" aria-hidden="true" style="color: #ffffff;padding-top:3px;;margin-left: 7px;"></i>
                </li>
                <li role="menuitem">
                    <div class="" style="color:#ffffff;padding-bottom: 10px;float: left;">CONTACT Us </div>
                    <i class="fa fa-angle-down" aria-hidden="true" style="color: #ffffff;padding-top:7px;margin-left: 15px;"></i>
                    <ul class="header_sub_menu" style="display: none">
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdfadsf</li>
                    </ul>
                </li>
                <li role="menuitem">
                    <div class="" style="color:#ffffff;padding-bottom: 10px;float: left;">Gallery</div>
                    <i class="fa fa-angle-down" aria-hidden="true" style="color: #ffffff;padding-top:7px;margin-left: 15px;"></i>
                    <ul class="header_sub_menu" style="display: none">
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdfadsf</li>
                    </ul>
                </li>
                <li role="menuitem">
                    <div class="" style="color:#ffffff;padding-bottom: 10px;float: left;"><a style="color: white" href="{{ asset('rooms') }}">Rooms</a></div>
                    <i class="fa fa-angle-down" aria-hidden="true" style="color: #ffffff;padding-top:7px;margin-left: 15px;"></i>
                    <ul class="header_sub_menu" style="display: none">
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdfadsf</li>
                    </ul>
                </li>
                <li role="menuitem">
                    <div class="" style="color:#ffffff;padding-bottom: 10px;float: left;"><a href="{{ asset('/') }}" style="color: white">Home</a></div>
                    <i class="fa fa-angle-down" aria-hidden="true" style="color: #ffffff;padding-top:7px;margin-left: 15px;"></i>
                    <ul class="header_sub_menu" style="display: none">
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdf</li>
                        <li>asdfadsf</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 main_content" >
            <div class="container-bloody">
                @yield('content')

            </div>

        </div>

    </div>
    <footer class="fat-footer" data-ga-label-prefix="Fat Footer - ">
        <div class="container" style="padding-top: 40px">
            <div class="row hidden-print">

                <div class="col-lg-3 col-sm-6 footer-col-1">
                    <a href="" >
                        <img src="{{asset('imgs/logo.png')}}" alt="CaringBridge logo. Go to home page." width="200" />
                    </a>
                    <p class="mission-statement">Our Vision reflects how patients, caregivers, family and friends like you see CaringBridge: A world where no one goes through a health journey alone.</p>
                    <nav class="social-media">
                        <ul class="list-inline">
                            <li>
                                <a href="https&#x3A;&#x2F;&#x2F;www.facebook.com&#x2F;caringbridge" title="Facebook" target="_blank" data-ga-label="Facebook">
                                    <div class="svg-icon svg-icon-md svg-social-icon">

                                        <svg width="167px" height="167px" viewBox="0 0 167 167" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>Facebook</title>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Facebook">
                                                    <circle id="Oval" fill="#314A7E" cx="84" cy="84" r="81"></circle>
                                                    <g id="F" transform="translate(62.000000, 36.000000)" fill="#FFFFFF">
                                                        <path style="fill:#FFFFFF;" d="M42.8787963,48.3969608 L29.4276937,48.3969608 L29.4276937,96.7329017 L9.48420833,96.7329017 L9.48420833,48.3969608 L0,48.3969608 L0,31.3215432 L9.48420833,31.3215432 L9.48420833,20.2728633 C9.48420833,12.372813 13.2088495,0 29.6053459,0 L44.3747091,0.0630539542 L44.3747091,16.6360739 L33.6590476,16.6360739 C31.9006939,16.6360739 29.4276937,17.5208633 29.4276937,21.2898625 L29.4276937,31.3378152 L44.618981,31.3378152 L42.8787963,48.3969608 Z" id="Fill-4"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="sr-only">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https&#x3A;&#x2F;&#x2F;www.twitter.com&#x2F;caringbridge" title="Twitter" target="_blank" data-ga-label="Twitter">
                                    <div class="svg-icon svg-icon-md svg-social-icon">

                                        <svg width="167px" height="167px" viewBox="0 0 167 167" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>Twitter</title>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Twitter">
                                                    <circle id="Oval-2" fill="#339DC3" cx="84" cy="84" r="81"></circle>
                                                    <g id="Bird" transform="translate(33.000000, 42.000000)" fill="#FFFFFF">
                                                        <path d="M100.191839,9.71234294 C96.5055545,11.3598817 92.5426978,12.4724789 88.3840198,12.9728426 C92.6295051,10.4079704 95.8878092,6.35421138 97.4261163,1.5153289 C93.4531656,3.88900517 89.0522346,5.61180192 84.3727124,6.53930525 C80.6218272,2.51605617 75.2781278,0 69.363115,0 C58.0115391,0 48.8079406,9.27503326 48.8079406,20.7122069 C48.8079406,22.3353378 48.9916492,23.9157546 49.3429162,25.4310835 C32.260036,24.5686681 17.1131618,16.3228381 6.97285134,3.78933925 C5.20238503,6.84847302 4.18895962,10.4079704 4.18895962,14.2034117 C4.18895962,21.3874945 7.82073714,27.7274678 13.3340136,31.4435831 C9.96669573,31.3337472 6.7931803,30.4042099 4.02342001,28.850235 C4.02140123,28.937697 4.02140123,29.0271929 4.02140123,29.1126208 C4.02140123,39.1463356 11.1093228,47.5142055 20.5107613,49.4180281 C18.7907644,49.8919497 16.9698287,50.1461996 15.0984236,50.1461996 C13.7700692,50.1461996 12.4841091,50.0180576 11.2304493,49.7760118 C13.8467827,58.0035358 21.4333418,63.9895935 30.4310252,64.1584154 C23.3955918,69.7152993 14.5331664,73.0246149 4.89956867,73.0246149 C3.24417258,73.0246149 1.6049267,72.929017 0,72.7357871 C9.09256584,78.6140429 19.901091,82.0413304 31.5090514,82.0413304 C69.3166831,82.0413304 89.9950028,50.4838433 89.9950028,23.1102912 C89.9950028,22.2132979 89.9748151,21.3203725 89.9344396,20.4335492 C93.953822,17.5127273 97.4382289,13.8657679 100.191839,9.71234294" id="Fill-4"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="sr-only">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https&#x3A;&#x2F;&#x2F;www.instagram.com&#x2F;caringbridgeofficial" title="Instagram" target="_blank" data-ga-label="Instagram">
                                    <div class="svg-icon svg-icon-md svg-social-icon">

                                        <svg width="167px" height="167px" viewBox="0 0 167 167" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>Instagram</title>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Instagram">
                                                    <circle id="Oval-2" fill="#D92F74" cx="84" cy="84" r="81"></circle>
                                                    <g transform="translate(38.000000, 39.000000)" fill="#FFFFFF">
                                                        <path d="M81.8349091,62.6392727 C81.6358182,66.9883636 80.9094545,69.3510909 80.2985455,70.922 C79.4894545,73.0047273 78.5221818,74.4910909 76.9612727,76.052 C75.4003636,77.6138182 73.914,78.5801818 71.8312727,79.3892727 C70.2603636,80.0010909 67.8976364,80.7265455 63.5485455,80.9256364 C58.8449091,81.1401818 57.4330909,81.1856364 45.5212727,81.1856364 C33.6085455,81.1856364 32.1976364,81.1401818 27.494,80.9256364 C23.144,80.7265455 20.7821818,80.0010909 19.2103636,79.3892727 C17.1276364,78.5801818 15.6412727,77.6138182 14.0803636,76.052 C12.5194545,74.4910909 11.5521818,73.0047273 10.7430909,70.922 C10.1321818,69.3510909 9.40581818,66.9883636 9.20763636,62.6392727 C8.99309091,57.9347273 8.94763636,56.5238182 8.94763636,44.612 C8.94763636,32.7001818 8.99309091,31.2892727 9.20763636,26.5847273 C9.40581818,22.2356364 10.1321818,19.8729091 10.7430909,18.3010909 C11.5521818,16.2183636 12.5194545,14.7329091 14.0803636,13.1710909 C15.6412727,11.6101818 17.1276364,10.6438182 19.2103636,9.83472727 C20.7821818,9.22381818 23.144,8.49654545 27.494,8.29836364 C32.1976364,8.08381818 33.6094545,8.03836364 45.5212727,8.03836364 C57.4330909,8.03836364 58.844,8.08381818 63.5485455,8.29836364 C67.8976364,8.49654545 70.2603636,9.22381818 71.8312727,9.83472727 C73.914,10.6438182 75.4003636,11.6101818 76.9612727,13.1710909 C78.5221818,14.7329091 79.4894545,16.2183636 80.2985455,18.3010909 C80.9094545,19.8729091 81.6358182,22.2356364 81.8349091,26.5847273 C82.0485455,31.2892727 82.0949091,32.7001818 82.0949091,44.612 C82.0949091,56.5238182 82.0485455,57.9347273 81.8349091,62.6392727 M89.864,26.2183636 C89.6476364,21.4701818 88.894,18.2265455 87.7912727,15.3892727 C86.6503636,12.4556364 85.1249091,9.96836364 82.6458182,7.48745455 C80.1649091,5.00745455 77.6776364,3.482 74.7430909,2.342 C71.9058182,1.23927273 68.6630909,0.484727273 63.914,0.268363636 C59.1567273,0.0510909091 57.6367273,0.000181818182 45.5212727,0.000181818182 C33.4049091,0.000181818182 31.8858182,0.0510909091 27.1276364,0.268363636 C22.3794545,0.484727273 19.1358182,1.23927273 16.2985455,2.342 C13.3649091,3.482 10.8767273,5.00745455 8.39672727,7.48745455 C5.91672727,9.96836364 4.39127273,12.4556364 3.25127273,15.3892727 C2.14854545,18.2265455 1.394,21.4701818 1.17763636,26.2183636 C0.960363636,30.9765455 0.908545455,32.4956364 0.908545455,44.612 C0.908545455,56.7274545 0.960363636,58.2474545 1.17763636,63.0047273 C1.394,67.7538182 2.14854545,70.9965455 3.25127273,73.8338182 C4.39127273,76.7683636 5.91672727,79.2556364 8.39672727,81.7365455 C10.8767273,84.2156364 13.3649091,85.742 16.2985455,86.882 C19.1358182,87.9847273 22.3794545,88.7383636 27.1276364,88.9547273 C31.8858182,89.1729091 33.4049091,89.2238182 45.5212727,89.2238182 C57.6367273,89.2238182 59.1567273,89.1729091 63.914,88.9547273 C68.6630909,88.7383636 71.9058182,87.9847273 74.7430909,86.882 C77.6776364,85.742 80.1649091,84.2156364 82.6458182,81.7365455 C85.1249091,79.2556364 86.6503636,76.7683636 87.7912727,73.8338182 C88.894,70.9965455 89.6476364,67.7538182 89.864,63.0047273 C90.0812727,58.2474545 90.1330909,56.7274545 90.1330909,44.612 C90.1330909,32.4956364 90.0812727,30.9765455 89.864,26.2183636" id="Fill-1"></path>
                                                        <path d="M45.521,59.4823636 C37.3082727,59.4823636 30.651,52.8250909 30.651,44.6123636 C30.651,36.3987273 37.3082727,29.7414545 45.521,29.7414545 C53.7337273,29.7414545 60.391,36.3987273 60.391,44.6123636 C60.391,52.8250909 53.7337273,59.4823636 45.521,59.4823636 M45.521,21.7032727 C32.8691818,21.7032727 22.6119091,31.9596364 22.6119091,44.6123636 C22.6119091,57.2641818 32.8691818,67.5205455 45.521,67.5205455 C58.1728182,67.5205455 68.4291818,57.2641818 68.4291818,44.6123636 C68.4291818,31.9596364 58.1728182,21.7032727 45.521,21.7032727" id="Fill-4"></path>
                                                        <path d="M69.3349091,15.4447273 C66.3785455,15.4447273 63.9812727,17.8410909 63.9812727,20.7983636 C63.9812727,23.7547273 66.3785455,26.1510909 69.3349091,26.1510909 C72.2912727,26.1510909 74.6885455,23.7547273 74.6885455,20.7983636 C74.6885455,17.8410909 72.2912727,15.4447273 69.3349091,15.4447273" id="Fill-6"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 col-sm-6 footer-col-2">
                    <nav class="col-xs-6">
                        <ul class="nav fat-footer-lists">
                            <li class="important-nav">
                                <a href="https://www.caringbridge.org/about-us">
                                    About Us                        </a>
                            </li>
                            <li class="important-nav">
                                <a href="https://www.caringbridge.org/visit">
                                    Find a Website                        </a>
                            </li>
                            <li class="important-nav">
                                <a href="https://www.caringbridge.org/createwebsite">
                                    Start a Website                        </a>
                            </li>
                            <li class="important-nav">
                                <a href="https://www.caringbridge.org/about-us/get-involved">
                                    Get Involved                        </a>
                            </li>
                            <li class="important-nav">
                                <a href="https://www.caringbridge.org/resources">
                                    Resources                        </a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="col-xs-6">
                        <ul class="nav fat-footer-lists">
                            <li>
                                <a href="https://www.caringbridge.org/contact-us">
                                    Contact Us                        </a>
                            </li>
                            <li>
                                <a href="https://www.caringbridge.org/about-us/careers">
                                    Careers                        </a>
                            </li>
                            <li>
                                <a href="https://www.caringbridge.org/about-us/financials-ratings">
                                    Financials                        </a>
                            </li>
                            <li>
                                <a href="https://www.caringbridge.org/newsroom">
                                    Newsroom                        </a>
                            </li>
                            <li>
                                <a href="https://www.caringbridge.org/healing">
                                    Healing                        </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="clearfix visible-sm-block visible-md-block"></div>

                <div class="col-lg-3 col-sm-6 footer-col-3">
                    <nav>
                        <ul class="nav fat-footer-lists">
                            <li class="important-nav">
                                <a href="https://www.caringbridge.org/help" target="_blank">
                                    Help                        </a>
                            </li>
                            <li>
                                <a href="https://caringbridgehelp.custhelp.com/app/answers/detail/a_id/702" target="_blank">
                                    How to find someone's website                        </a>
                            </li>
                            <li>
                                <a href="https://caringbridgehelp.custhelp.com/app/answers/detail/a_id/630" target="_blank">
                                    How to leave a message                        </a>
                            </li>
                            <li>
                                <a href="https://caringbridgehelp.custhelp.com/app/answers/detail/a_id/711" target="_blank">
                                    How to sign in                        </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 col-sm-6 footer-col-4">

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-lg-12">
                    <hr class="visible-print">
                    <p class="fine-print text-center"><a href="https://www.caringbridge.org/copyright">Copyright</a> &#169; 2020 CaringBridge &#174;, a 501(c)(3) nonprofit organization, EIN: 42-1529394. By using this website you agree to our <a href="https://www.caringbridge.org/terms-of-use">Terms of Use</a> and <a href="https://www.caringbridge.org/privacy-policy">Privacy Policy</a>. View our <a href="https://www.caringbridge.org/sitemap">Site Map</a>.</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="mobileFooter" style="display: none;">
    <div class="navbar" style="width: 100%;background: #ffffff;  z-index: 30000">
        <a href="{{ asset('/') }}" class="active" style="width: 25%">
            <img src="{{asset("imgs/footer_icons/home.png")}}" /><br />Home
        </a>
        <a href="{{ asset('/rooms') }}" style="width: 25%">
            <img src="{{asset("imgs/footer_icons/search.png")}}" />
            <br />Rooms
        </a>
        <a href="#contact" style="width: 25%">
            <img src="{{asset("imgs/footer_icons/notifications.png")}}" />
            <br>Notifications</a>
        <a href="/profile" style="width: 25%">
            <img src="{{asset("imgs/footer_icons/user.png")}}" /><br />Profile</a>
    </div>
</div>

@yield('script')
</body>
</html>