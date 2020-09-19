@extends('layouts.layout')

@section('content')
    <style>
        @media (max-width: 768px) {
            .container-bloody {
                background: #f5f2ef !important;
            }

            body {
                background-color: #f5f2ef !important;
            }
        }
    </style>
    <div class="user-signin-page">
        <center>
            <div class="layout-corporate prevent-bleed" id="register">
                <div class="content clear">
                    <div class="signin-form">
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-10 text-center">


                            </div>
                        </div>
                        <div class="row">
                            <div class="heading-message">
                                <h1>Welcome</h1>
                                <p class="subheading">We’re glad you’re here.</p>
                                <hr style="width: 95%">
                            </div>
                        </div>
                        <div class="row" style="text-align: start">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                <div id="flash-messages">
                                </div>

                                <div class="active" id="sign-in-email" data-step="email" data-ga-label-prefix="Email - ">
                                    <div class="content">

                                        <form action="checkIsUser" method="post" id="checkIsUser">
                                            @csrf
                                            <div class="form-group ">
                                                <label for="email">Enter Email</label>
                                                <input type="email" name="email" id="email" required="required" autofocus="autofocus" placeholder="Enter Email" class="form-control" value="{{ old('email') }}">
                                            </div>
                                            <div class="visuallyhidden">
                                                <input type="password" name="password_placeholder" placeholder="*">
                                            </div>
                                            <div class="form-group ">
                                                <input type="submit" name="submit-btn" class="btn btn-primary btn-lg btn-block btn-lg main_background_color" value="Continue">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <span class="text-rule">or</span>

                                <ul class="social-btns list-unstyled">
                                    <li>
                                        <a href="{{ env('APP_URL') }}/login/facebook" data-qa-id="profile-signin-facebook" class="facebook-signin">
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
                                            <span class="text-center">Sign In Using Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ env('APP_URL') }}login/google" data-qa-id="profile-signin-google" class="google-signin">
                                            <div class="svg-icon svg-icon-md svg-social-icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 26 26" version="1.1">
                                                    <g stroke="none" fill="none" transform="translate(4, 4)">
                                                        <path d="M9,3.48 C10.69,3.48 11.83,4.21 12.48,4.82 L15.02,2.34 C13.46,0.89 11.43,0 9,0 C5.48,0 2.44,2.02 0.96,4.96 L3.87,7.22 C4.6,5.05 6.62,3.48 9,3.48 L9,3.48 Z" style="fill:#EA4335;"></path>
                                                        <path d="M17.64,9.2 C17.64,8.46 17.58,7.92 17.45,7.36 L9,7.36 L9,10.7 L13.96,10.7 C13.86,11.53 13.32,12.78 12.12,13.62 L14.96,15.82 C16.66,14.25 17.64,11.94 17.64,9.2 L17.64,9.2 Z" style="fill:#4285F4;"></path>
                                                        <path d="M3.88,10.78 C3.69,10.22 3.58,9.62 3.58,9 C3.58,8.38 3.69,7.78 3.87,7.22 L0.96,4.96 C0.35,6.18 0,7.55 0,9 C0,10.45 0.35,11.82 0.96,13.04 L3.88,10.78 L3.88,10.78 Z" style="fill:#FBBC05;"></path>
                                                        <path d="M9,18 C11.43,18 13.47,17.2 14.96,15.82 L12.12,13.62 C11.36,14.15 10.34,14.52 9,14.52 C6.62,14.52 4.6,12.95 3.88,10.78 L0.97,13.04 C2.45,15.98 5.48,18 9,18 L9,18 Z" style="fill:#34A853;"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="text-center">Sign In Using Google</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection

@section('script')
    <script>
        $('#checkIsUser').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    var email = $('#email').val();
                    if (data > 0)
                    {
                        window.location = "{{ env('APP_URL') }}login?email=" + email
                    } else  {
                        window.location = "{{ env('APP_URL') }}register?email=" + email
                    }
                }
            });

        });
    </script>
@endsection