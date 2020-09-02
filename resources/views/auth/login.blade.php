{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
@extends('layouts.layout')

@section('content')
    <div class="user-signin-page">
        <center>
            <div class="layout-corporate prevent-bleed">
                <div class="content clear">
                    <div class="signin-form">
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-10 text-center">


                            </div>
                        </div>
                        <div class="row">
                            <div class="heading-message">
                                <h1>Welcome Back</h1>
                                <p class="subheading">Let’s get you signed in.</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="text-align: start">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                <div id="flash-messages">
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <p class="form-control-static">{{$email}}</p>
                                    </div>
                                    <div class="visuallyhidden">
                                        <input type="email" name="email" value="abo.ateleh@gmail.com">
                                    </div>
                                    <div class="form-group "><label for="password">Password</label><div class="input-group"><input type="password" name="password" data-ga-action="Click - field" data-ga-label="Password" data-qa-id="profile-signin-password" data-value-missing="You must enter your password." required="required" id="password" autofocus="autofocus" class="js-unmaskable form-control" placeholder="Enter Your Password" value=""><input type="text" class="js-unmaskable form-control hidden"><div class="input-group-btn"><button type="button" class="btn btn-link">Show password</button></div></div></div>
                                    <div class="form-group "><input type="submit" name="submit-btn" class="btn btn-primary btn-lg main_background_color" data-qa-id="profile-signin-submit" id="submit-login-modal" value="Sign In"></div>
                                    <div class="text-center">
                                        <div class="checkbox"><input type="hidden" name="remember-me" value="0"><label><input type="checkbox" name="remember-me" data-ga-action="Click - box" data-ga-label="Remember Me" data-qa-id="profile-signin-remember-me" id="remember-me" value="1" checked="checked">Stay signed in on this device and browser</label></div>            </div>
                                    <input type="hidden" name="csrf" value=""></form>            <div class="help-block text-center">
                                    <small><a href="https://www.caringbridge.org/auth/forgot-password" class="forgot-password">Need password help?</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection