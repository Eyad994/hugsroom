@extends('layouts.layout')

@section('content')
    <div style="padding: 70px 0px;height: 570px">
        <section class="simple-container create-profile progressive-form started">
            <a href="{{asset('register')}}" class="form-back back" data-ga-label="Back" aria-label="Back">
                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>
            </a>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <fieldset class="form-step current-step" id="step-name" data-button-ga-label="register-name-continue" data-button-qa-id="register-name-continue">
                    <h1>Looks Like You’re New Here!</h1>
                    <p class="subheading">Let’s get you registered.</p>
                    <div style="width: 100%;border-top: 1px solid #c5bdb5;margin-top: 20px;padding-bottom: 20px "></div>

                    <label for="email">
                        Your Email
                    </label>
                    <p>{{$email}}</p>
                    <input type="hidden" name="email" value="{{$email}}">

                    <div aria-hidden="true" class="sign-up-input-text-normal sign-up-login-id">
                        <label for="loginId">Login Id</label>
                        <input type="text" name="loginId" id="loginId" autocomplete="off" title="Please fill out this field." value="" maxlength="50">
                    </div>

                    <div id="invalid-firstname" class="alert alert-error alert-danger" style="display: none"></div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstName" autofocus="autofocus" value="{{ old('firstName') }}" data-ga-action="Click - field" data-ga-label="First Name" data-qa-id="profile-signup-first-name" id="firstname" class="form-control" title="Please fill out this field." data-h5-errorid="invalid-firstname" value="" required="required" maxlength="50">
                    <div id="invalid-lastname" class="alert alert-error alert-danger" style="display: none"></div>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastName" data-ga-action="Click - field"  value="{{ old('lastName') }}" data-ga-label="Last Name" data-qa-id="profile-signup-last-name" id="lastname" class="form-control" title="Please fill out this field." data-h5-errorid="invalid-lastname" value="" required="required" maxlength="50">
                    <div id="register_step_1" style="padding-top: 40px;color: #e64d7b;display: none">
                        * first Name and Last Name Shouldn't be Empty
                    </div>
                    <input type="button" name="submit-btn" class="btn btn-primary btn-lg form-progress-button main_background_color" data-qa-id="register-name-continue" id="password_next_step" data-step-label="Continue" data-submit-label="Register" value="Continue" data-ga-label="register-name-continue " style="margin-top: 50px">
                </fieldset>
                <fieldset id="step-password" style="display: none">
                    <div class="hide-if-no-js">
                        <h1>Choose a Password</h1>
                        <p class="subheading">You may enter a combination of at least six numbers, letters and punctuation marks.</p>
                        <hr>
                    </div>
                    <div class="visuallyhidden">
                        <input type="email" name="email" value="{{$email}}">
                    </div>
                    <div id="invalid-password" class="alert alert-danger alert-error" style="display:none"></div>
                    <label for="password">Type a Password</label>
                    <div class="input-group" style="width: 100%">
                        <input type="password" id="password" name="password" required class="js-unmaskable form-control" data-reset-on-reveal="true" data-ga-action="Click - field" data-ga-label="Password" data-qa-id="profile-signup-password" title="Password is less than 6 characters." data-h5-errorid="invalid-password" data-new-password="true">
                    </div>
                    <label for="password">confirm Password</label>
                    <div class="input-group" style="width: 100%">
                    <input id="password-confirm" type="password" class="form-control" required name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div id="invalid-terms" class="alert alert-danger alert-error" style="display:none"></div>
                    <div class="checkbox"><input type="hidden" name="terms" value="0">
                        <label>
                            <input type="checkbox" required name="terms" data-ga-action="Click - box" data-ga-label="Terms" data-qa-id="profile-signup-terms" id="terms" title="Please confirm you are at least 16 years of age and agree to our terms of service and privacy policies." data-h5-errorid="invalid-terms" value="1">
                            I am at least 16 years of age and agree to the
                            <a href="https://www.caringbridge.org/terms-of-use" target="_blank">terms of use</a>
                            and
                            <a href="https://www.caringbridge.org/privacy-policy" target="_blank">
                                privacy policy</a>.
                        </label>
                    </div>
                    <div class="checkbox"><input type="hidden" name="ecomm" value="0">
                        <label>
                            <input type="checkbox" name="ecomm" data-ga-action="Click - box" data-ga-label="Ecomm Opt In" data-qa-id="profile-signup-ecomm" id="login-ecomm" value="1">Send me emails on supporting a friend in tough times through stories, articles, videos and more.</label></div>

                    <input type="submit" class="btn btn-primary btn-lg main_background_color" value="Continue" style="margin-top: 20px">
                </fieldset>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                @endif
            </form>
        </section>
    </div>
    <script type="text/javascript" src="{{asset('js/register/main.js')}}"></script>
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
