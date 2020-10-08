@extends('layouts.layout')
@section('content')
<style>
    .h-200{
        height: 200px;
    }
    .site-content{
        padding-top: 100px;
        padding-bottom: 100px
    }
    .last_list{
        list-style: none;
        padding-left: 140px;
        padding-top: 20px;
    }
    @media (max-width: 768px) {
        .container-bloody {
            background: #ffffff !important;
        }
        .h-200{
            height: 0px !important;
        }
        #create-site-why-terms{
            float: left !important;
        }
        .create-box{
            background: #ffffff;
        }
        body {
            background-color: #ffffff !important;
        }
        .container-bloody > *:not(.prevent-bleed){
            height: 650px !important;
        }
        .site-content{
            padding-top: 50px !important;
            display: contents;
        }
        .last_list{
            list-style: none;
            padding-left: 0;
            padding-top: 0;
        }
    }

    .last_step_icon{
        font-size: 25px;
        width: 40px;
        float: left;
        padding-top: 8px;
        color: #a09f9f;
    }
    .last_step_for{
        font-size: 14px;
    }
    .last_step_value{
        font-size: 16px;color: black;
        overflow: hidden;
    }
    .main_content, .site-content{
        background: #ffffff;
    }

    .start-a-site-box {
        background-color: #ffffff;
    }
    .js .site-create-steps .site-create-step .start-a-site-box{
        background-color: #ffffff !important;
    }
</style>
    <div class="site-content">
        <div class="site-create-steps">
            <div class="row create-box">
                <form action="" method="post" name="create" class="js-create-site-steps js-supress-bubbles" id="create">
                    <input type="hidden" name="csrf" value="">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <!------------------------------------------ section1-------------------------------->
                    <section class="site-create-step active" id="sc-terms" data-ga-label-prefix="Terms of Use - c - ' : ''; ?>" >
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Open a Room</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 14.2857%;">
                                        <span class="sr-only"><span class="progress-bar-value"></span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row copy-margin">
                            <div class="col-md-1 col-md-offset-3 col-sm-2 col-sm-offset-2 col-xs-3 col-xs-offset-1 vertical-top">
                                <i class="cbicon-share-updates start-a-site-icons" aria-hidden="true" role="presentation"></i>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-7 vertical-top">
                                <p class="small-text">Let’s open a totally free room for you in few minutes .</p>
                                <div aria-hidden="true" style="clip-path:inset(100%); clip:rect(1px, 1px, 1px, 1px); height:1px; overflow:hidden; position:absolute; white-space:nowrap; width:1px;">
                                    <div class="form-group ">
                                        <label class="control-label" for="lookingForBees">Looking for Bees</label>
                                        <div class="">
                                            <input type="text" name="lookingForBees" class="input-block-level form-control" data-skippable="true" id="lookingForBees" autocomplete="off" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="form-group-terms">
                                    <div class="checkbox">
                                        <input type="hidden" name="terms" value="0">
                                        <label>
                                            <input type="checkbox" name="terms" data-ga-action="Click - box" data-ga-label="Terms" data-qa-id="site-create-flow-terms" id="terms" required="required" value="1">
                                            <span class="required">
                                                <span aria-hidden="true" role="presentation" title="Required">*</span>
                                                <span class="sr-only">Required</span>
                                            </span>
                                            I am at least 18 years of age.
                                            <br />
                                            <span id="over18_msg" style="display: none;color:red">
                                                * This Field is required
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copy-margin center">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <button class="btn btn-primary main_background_color btn-lg btn-continue" id="open-why-terms" type="button" data-ga-label="Continue" data-ga-action="Click - button" data-role="next" data-qa-id="site-create-flow-forward-sc-terms" onclick="goNext('sc-terms','sc-who')" >Continue</button>
                                <p class="center">
                                    <button class="btn btn-link" type="button" data-ga-label="Why We Ask" data-ga-action="Click - link" data-toggle="collapse" data-target="#create-site-why-terms" aria-expanded="false" aria-controls="create-site-why-terms" data-qa-id="site-create-flow-help-link" onclick="toggleAlert(this)">Why We Ask<span class="sr-only"> who this website is for</span>
                                    </button>
                                </p>
                                <div class="collapse alert alert-info" id="create-site-why-terms">
                                    <p>For the privacy and protection of minors, we do not permit children under the age of 18 to create or maintain a Hugs Room website.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                        <!--------------------------------------------- section2 ----------------------------------------------->

                    <section class="site-create-step" id="sc-who" data-ga-label-prefix="Myself vs Someone Else a - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-who','sc-terms')" >
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Room Resident</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 28.5714%;">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row copy-margin">
                            <div class="col-md-2 col-md-offset-3 col-sm-2 col-sm-offset-2 col-xs-3 col-xs-offset-1 vertical-center horizontal-right">
                                <i class="cbicon-sett-roles start-a-site-icons" aria-hidden="true" role="presentation"></i>
                            </div>
                            <div class="col-md-6 col-sm-7 col-xs-7 vertical-center">
                                <p class="medium-text"><strong>Who is the Room for?</strong></p>
                            </div>
                        </div>

                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="content">

                                <fieldset class="form-group">
                                    <legend class="control-label"></legend>
                                    <div class="row site-create-flex-container">
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Me" id="is-for-self-myself" name="isForSelf" type="radio" value="1" required="required">
                                            </div>
                                            <button class="btn btn-block btn-primary btn-lg main_background_color" data-activate="#is-for-self-myself" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Me" data-qa-id="site-create-flow-for-me" type="button" onclick="goNext('sc-who','sc-patient-name-me')">{{----}}
                                                <span class="sr-only">This site is for </span>Me
                                            </button>
                                        </div>
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Someone else" id="is-for-self-someone-else" name="isForSelf" type="radio" value="0" required="required" checked="checked">    </div>

                                            <button class="btn btn-block btn-primary btn-lg main_background_color" data-activate="#is-for-self-someone-else" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Someone else" data-qa-id="site-create-flow-for-someone-else" type="button" onclick="goNext('sc-who','sc-patient-name-else')" >
                                                <span class="sr-only">This site is for </span>
                                                Someone Else
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>

                                <p class="center">
                                    <button class="btn btn-link" type="button" data-ga-label="Why We Ask" data-ga-action="Click - link" data-toggle="collapse" data-target="#create-site-why-who" aria-expanded="false" aria-controls="create-site-why-who" data-qa-id="site-create-flow-help-link" onclick="toggleAlert(this)">Why We Ask<span class="sr-only"> who this website is for</span>
                                    </button>
                                </p>

                                <div class="collapse alert alert-info" id="create-site-why-who">
                                    <p>In order to create a Site on behalf of someone else, you need to have their express permission. If that person is not able to provide permission because they are under the age of 18 or because of their health circumstances you must be authorized to act on their behalf.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!----------------------------------------- section3 help ---------------------------------->

                    <section class="site-create-step" id="sc-public-help" data-ga-label-prefix="Public Search Listing - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-public-help','sc-who')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Public Hugs</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row copy-margin">
                            <div class="col-md-1 col-md-offset-3 col-sm-2 col-sm-offset-2 col-xs-3 col-xs-offset-1 vertical-top">
                                <input type="hidden" id="pubic_help" value="0">
                                <i class="cbicon-site-start-search start-a-site-icons" aria-hidden="true" role="presentation"></i>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-7 vertical-top">
                                <div class="start-a-site-text">
                                    Anyone can Search, View & Interact with your Room. The Room
                                    will be publicly displayed for public hugs
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-10 col-sm-offset-1  col-xs-12">
                            <div class="content">
                                <fieldset class="form-group">
                                    <legend class="control-label">
                                    </legend>

                                    <div class="row site-create-flex-container">
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Googleable" id="googleable-yes" name="isGoogleable" type="radio" value="1" required="required">    </div>

                                            <button class="btn btn-block btn-primary btn-lg main_background_color" data-activate="#googleable-yes" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Googleable" data-qa-id="site-create-flow-googleable" type="button" onclick="goNext('sc-public-help-yes','sc-patient-name')">
                                                Yes
                                            </button>
                                        </div>
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Not Googleable" id="googleable-no" name="isGoogleable" type="radio" value="0" required="required" checked="checked">
                                            </div>

                                            <button class="btn btn-block btn-primary btn-lg main_background_color" data-activate="#googleable-no" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Not Googleable" data-qa-id="site-create-flow-not-googleable" type="button" onclick="goNext('sc-public-help-no','sc-patient-name')">
                                                No
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>

                                <p class="center">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-ga-label="Help Me Decide" data-ga-action="Click - link" data-target="#create-site-public-search-listing-decide-help" aria-expanded="false" aria-controls="create-site-public-search-listing-decide-help" data-qa-id="site-create-flow-help-link">Help Me Decide</button>
                                </p>

                                <div class="collapse alert alert-info" id="create-site-public-search-listing-decide-help">
                                    <p>Clicking <strong>Yes</strong> means that search engines will display basic information about your Hugs Room site, including your name, a summary of your story, and a link to your site. If you don’t want to be included in search engine results, click  <strong>No</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------------------------- section3 --------------------------------------------->

                    <section class="site-create-step" id="sc-patient-name-me" data-ga-label-prefix="Patient Name - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-patient-name-me-prev','sc-public-help')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Room Resident</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 42.8571%;">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">

                            <div class="start-a-site-box">
                                <p class="center medium-text">
                                    <strong>
                                        <span class="create-other">What is your name?</span>
                                        <span class="create-self" style="display: none;">What is your name?</span>
                                    </strong>
                                </p>
                                @php
                                    $first_name = "";
                                    $last_name = "";
                                    if (Auth::check()){
                                        $first_name = auth()->user()->first_name;
                                        $last_name = auth()->user()->last_name;
                                    }
                                @endphp

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group "><label for="firstName"><span class="required"><span aria-hidden="true" role="presentation" title="Required">*</span><span class="sr-only">Required</span></span> First Name</label>
                                                <input type="text" name="firstName" class="input-block-level form-control" data-ga-action="Click - field" data-ga-label="First Name" data-qa-id="site-create-flow-site-first-name" id="firstName-me" maxlength="50" required="required" value="{{$first_name}}"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group "><label for="lastName"><span class="required"><span aria-hidden="true" role="presentation" title="Required">*</span><span class="sr-only">Required</span></span> Last Name</label>
                                                <input type="text" name="lastName" class="input-block-level form-control" data-ga-action="Click - field" data-ga-label="Last Name" data-qa-id="site-create-flow-site-last-name" id="lastName-me" maxlength="50" required="required"  value="{{$last_name}}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row copy-margin center">
                                <div class="col-md-8 col-md-offset-2 col-sm-12">
                                    <button class="btn btn-primary main_background_color btn-lg btn-continue" type="button" data-ga-label="Continue" data-ga-action="Click - button" data-role="next" data-qa-id="site-create-flow-forward-sc-patient-name" onclick="goNext('sc-patient-name-me','sc-title-and-address')">Continue</button>                        </div>
                            </div>
                        </div>

                    </section>

                    <!------------------------------------------------ section4 --------------------------------------------->

                    <section class="site-create-step" id="sc-patient-name-else" data-ga-label-prefix="Patient Name - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-patient-name-else-prev','sc-public-help')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Resident Name</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 42.8571%;">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">

                            <div class="start-a-site-box">
                                <p class="center medium-text">
                                    <strong>
                                        <span class="create-other">What is their name?</span>
                                        <span class="create-self" style="display: none;">What is your name?</span>
                                    </strong>
                                </p>

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group "><label for="firstName"><span class="required"><span aria-hidden="true" role="presentation" title="Required">*</span><span class="sr-only">Required</span></span> <span class="create-other">Person’s</span> First Name</label><input type="text" name="firstName" class="input-block-level form-control" data-ga-action="Click - field" data-ga-label="First Name" data-qa-id="site-create-flow-site-first-name" id="firstName-else" maxlength="50" required="required" data-profile="Mekdad" value=""></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group "><label for="lastName"><span class="required"><span aria-hidden="true" role="presentation" title="Required">*</span><span class="sr-only">Required</span></span> <span class="create-other">Person’s</span> Last Name</label><input type="text" name="lastName" class="input-block-level form-control" data-ga-action="Click - field" data-ga-label="Last Name" data-qa-id="site-create-flow-site-last-name" id="lastName-else" maxlength="50" required="required" data-profile="Abo.ateleh" value=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row copy-margin center">
                                <div class="col-md-8 col-md-offset-2 col-sm-12">
                                    <button class="btn btn-primary main_background_color btn-lg btn-continue" type="button" data-ga-label="Continue" data-ga-action="Click - button" data-role="next" data-qa-id="site-create-flow-forward-sc-patient-name" onclick="goNext('sc-patient-name-else','sc-title-and-address')">Continue</button>                        </div>
                            </div>
                        </div>

                    </section>


                    <!------------------------------------------------ section5 -------------------------------------------->

                    <section class="site-create-step" id="sc-title-and-address" data-ga-label-prefix="Site Title and Address - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-title-and-address','sc-patient-name')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>
                        <input type="hidden" id="me-or-else" value="1">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Room Details</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color  progress-bar-room-name" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 57.1429%;">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="start-a-site-box">
                                <div class="content">
                                    <p>
                                        <strong>1. What would you like <span class="create-self" style="display: none;">your</span><span class="create-other">the</span> Room title to be?</strong></p>
                                    <div class="form-group ">
                                        <label for="title">
                                            <span class="required"><span aria-hidden="true" role="presentation" title="Required">*</span>
                                                <span class="sr-only">Required</span>
                                            </span> Room Title
                                        </label>
                                        <input type="text" name="title" class="input-block-level form-control" id="title" maxlength="25" required="required" value="{{ auth()->user()->first_name  }} {{ auth()->user()->last_name }}"></div>

                                    <p><strong>2. <span class="create-self" style="display: none;">Your</span><span class="create-other">The</span> recommended room address below cannot be changed after <span class="create-self" style="display: none;">your</span><span class="create-other create-other-possessive-name">their</span> room is created.</strong></p>
                                    <div class="form-group has-warning"><label for="name"><span class="required"><span aria-hidden="true" role="presentation" title="Required">*</span><span class="sr-only">Required</span></span> Room Address</label><div class="input-group ">
                                        <span class="input-group-addon"><span class="hidden-sm hidden-xs">Hugs Room.org/</span>visit/</span>
                                        <input type="text" name="name" class="input form-control" data-ga-action="Click - field" data-ga-label="URL Address" data-qa-id="site-create-flow-site-url" id="room-link" maxlength="100" autocomplete="off" required="required" value="{{ auth()->user()->first_name }}{{ auth()->user()->last_name }}"></div>
                                        <ul class="help-inline list-unstyled">
                                            <li>Please enter a Room address</li>
                                        </ul>
                                    </div>
                                    <div aria-hidden="true" class="sign-up-input-text-normal sign-up-login-id">
                                        <label for="siteAddress">Room Address</label>
                                        <input type="text" name="siteAddress" id="siteAddress" autocomplete="off" maxlength="50" title="Please fill in the room address." value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row copy-margin center">
                                <div class="col-md-8 col-md-offset-2 col-sm-12">
                                    <button class="btn btn-primary main_background_color btn-lg btn-continue" type="button" data-ga-label="Continue" data-ga-action="Click - button" data-role="next" data-qa-id="site-create-flow-forward-sc-title-and-address" onclick="goNext('sc-title-and-address','sc-custom-privacy')">Continue</button>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!------------------------------------- section6 --------------------------------->

                    <section class="site-create-step" id="sc-custom-privacy" data-ga-label-prefix="Custom Privacy - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-custom-privacy','sc-title-and-address')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back    </button>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Room Privacy</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 71.4286%">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="text-center"><h3>Who Can See Your Room?</h3></div>
                            <div class="content">

                                <fieldset class="form-group">
                                    <legend class="control-label"></legend>
                                    <div class="row site-create-flex-container">
                                        <div class="site-create-flex-item site-create-3-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input id="privacy-medium" name="privacy" type="radio" value="medium" checked="checked">    </div>

                                                <button style="background-color: #e84b7c;box-shadow: 5px 5px 5px #bcbcbc;color: #fff;border:0px" class="btn btn-block btn-tertiary btn-lg btn-privacy" data-activate="#privacy-medium" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Medium Privacy" data-qa-id="site-create-flow-privacy-medium" type="button"  onclick="goNext('sc-custom-privacy','last_step_public')">
                                                    <div class="privacy-block">
                                                        <div class="privacy-title">PUBLIC USERS</div>
                                                        <div class="privecy_text">
                                                            Anyone can Search, View & Interact with your Room
                                                        </div>
                                                        <span class="privacy-text"><div class="recommendation-block">
                                                                <div class="svg-icon svg-recommended svg-icon-sm">
                                                                    <svg id="RecommendedBadge" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.747 22.875">
                                                                        <g id="CaringBridge_ListItem_Search-Card_Closest-Match" data-name="CaringBridge/ListItem/Search-Card/Closest-Match" transform="translate(0)">
                                                                            <g id="RecommendedBadge-2" data-name="RecommendedBadge">
                                                                                <path id="Fill-1" style="fill: #4baaba;fill-rule: evenodd;" d="M37.026,29.148l-.48-.329a1.487,1.487,0,0,1-.581-1.642l.152-.556a1.512,1.512,0,0,0-1.213-1.9l-.581-.1a1.474,1.474,0,0,1-1.238-1.213l-.1-.581a1.5,1.5,0,0,0-1.9-1.187l-.556.177a1.515,1.515,0,0,1-1.642-.556l-.355-.505a1.49,1.49,0,0,0-2.224-.227l-.429.4a1.486,1.486,0,0,1-1.743.2l-.505-.278a1.519,1.519,0,0,0-2.122.758l-.227.556a1.451,1.451,0,0,1-1.466.935l-.581-.026a1.479,1.479,0,0,0-1.566,1.592l.05.581a1.518,1.518,0,0,1-.91,1.49l-.531.227a1.508,1.508,0,0,0-.732,2.122l.3.505a1.486,1.486,0,0,1-.177,1.743l-.379.429A1.475,1.475,0,0,0,15.574,34l.48.329a1.487,1.487,0,0,1,.581,1.642l-.228.582a1.512,1.512,0,0,0,1.213,1.9l.581.1a1.474,1.474,0,0,1,1.238,1.213l.1.581a1.5,1.5,0,0,0,1.9,1.187l.556-.177a1.515,1.515,0,0,1,1.642.556l.353.48a1.49,1.49,0,0,0,2.224.227l.429-.4a1.486,1.486,0,0,1,1.743-.2l.505.278a1.519,1.519,0,0,0,2.122-.758l.227-.556a1.451,1.451,0,0,1,1.466-.935l.581.026a1.479,1.479,0,0,0,1.566-1.592l-.024-.58a1.518,1.518,0,0,1,.91-1.49l.531-.227A1.508,1.508,0,0,0,37,34.051l-.3-.505a1.486,1.486,0,0,1,.177-1.743l.379-.429a1.473,1.473,0,0,0-.227-2.226ZM26.944,33.924l-2.072,2.047L22.825,33.9l-1.971-2,2.072-2.047,1.971,2,4.725-4.7,2.047,2.072Z" transform="translate(-14.912 -20.136)"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>

                                                                <span class="recommended-text"> Most popular</span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </button>
                                        </div>
                                        <div class="site-create-flex-item site-create-3-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Low Privacy" id="privacy-low" default-class="btn-tertiary" additional-class="btn-privacy not-recommended" name="privacy" type="radio" value="low">    </div>

                                            <button class="btn btn-block btn-tertiary btn-lg btn-privacy not-recommended" style="background-color: #e84b7c;box-shadow: 5px 5px 5px #bcbcbc;color: #fff;border:0px" data-activate="#privacy-low" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Low Privacy" data-qa-id="site-create-flow-privacy-low" type="button" onclick="goNext('sc-custom-privacy','sc-public-search-listing')">
                                                <div class="privacy-block"><div class="privacy-title">LIMITED</div>
                                                    <div class="privecy_text">
                                                        Anyone can Search your Room. But they need to first Register to View the Room. They also need to request to Follow you before they can Interact
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="site-create-flex-item site-create-3-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="High Privacy" id="privacy-high" default-class="btn-tertiary" additional-class="btn-privacy not-recommended" name="privacy" type="radio" value="high">    </div>

                                            <button class="btn btn-block btn-tertiary btn-lg btn-privacy not-recommended" style="background-color: #e84b7c;box-shadow: 5px 5px 5px #bcbcbc;color: #fff;border:0px" data-activate="#privacy-high" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate High Privacy" data-qa-id="site-create-flow-privacy-high" type="button"  onclick="goNext('sc-custom-privacy','last_step_praivet')">
                                                <div class="privacy-block"><div class="privacy-title">PRIVATE</div>
                                                    <div class="privecy_text">
                                                        Nobody can Search your Room. Your Room is only accessible by sharing a direct link. Everyone need to Register & request to Follow you before they can View or Interact.
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </section>
                    <!------------------------------ section7 ------------------------------>

                    <section class="site-create-step" id="sc-custom-cb-search" data-ga-label-prefix="Custom CB Searchability - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back"  onclick="goNext('sc-custom-cb-search','sc-custom-privacy')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Room on Google</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row copy-margin">
                        <div class="row copy-margin">
                            <div class="col-md-1 col-md-offset-3 col-sm-2 col-sm-offset-2 col-xs-3 col-xs-offset-1 vertical-top">
                                <i class="cbicon-heart start-a-site-icons" aria-hidden="true" role="presentation"></i>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-7 vertical-top">
                                <div class="start-a-site-text">Would you like Search Engines like Google to also be able to search for your Room?</div>
                            </div>
                        </div>

                        <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                            <div class="content">
                                <fieldset class="form-group">
                                    <legend class="control-label">
                                    </legend>

                                    <div class="row site-create-flex-container">
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Searchable" id="searchable-yes" additional-class="cb-search-button" name="isSearchable" type="radio" value="1" required="required" checked="checked">    </div>

                                            <button class="btn btn-block btn-primary btn-lg cb-search-button main_background_color" onclick="goNext('sc-public-search-listing','last_step_searchable')"   data-activate="#searchable-yes" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Searchable" data-qa-id="site-create-flow-searchable" type="button">                        Yes                </button>
                                        </div>
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Not Searchable" id="searchable-no" additional-class="cb-search-button" name="isSearchable" type="radio" value="0" required="required">    </div>

                                            <button class="btn btn-block btn-primary btn-lg cb-search-button main_background_color"  onclick="goNext('sc-public-search-listing','last_step_notsearchable')"  data-activate="#searchable-no" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Not Searchable" data-qa-id="site-create-flow-not-searchable" type="button">                        No                </button>
                                        </div>
                                    </div>
                                </fieldset>

                                <p class="center">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-ga-label="Help Me Decide" data-ga-action="Click - link" data-target="#create-site-custom-cb-search-decide-help" aria-expanded="false" aria-controls="create-site-custom-cb-search-decide-help" data-qa-id="site-create-flow-help-link">Help Me Decide</button>
                                </p>

                                <div class="collapse alert alert-info" id="create-site-custom-cb-search-decide-help">
                                    <p>Clicking <strong>Yes</strong> means your room appears in the Hugs Room search results. If you prefer more privacy, click <strong>No</strong>.</p>
                                </div>
                            </div>
                            <input type="hidden" id="issearchable" value="1">
                        </div>
                        </div>
                    </section>

                    <!------------------------------- section7 b---------------------------->

                    <section class="site-create-step" id="sc-public-search-listing" data-ga-label-prefix="Public Search Listing - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-public-search-listing','sc-custom-privacy')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Room on Google</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row copy-margin">
                            <div class="col-md-1 col-md-offset-3 col-sm-2 col-sm-offset-2 col-xs-3 col-xs-offset-1 vertical-top">

                                <i class="cbicon-site-start-search start-a-site-icons" aria-hidden="true" role="presentation"></i>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-7 vertical-top">
                                <div class="start-a-site-text">
                                    Would you like Search Engines like Google to also be able to search for your Room?</div>
                            </div>
                        </div>

                        <div class="col-sm-10 col-sm-offset-1  col-xs-12">
                            <div class="content">
                                <fieldset class="form-group">
                                    <legend class="control-label">
                                    </legend>

                                    <div class="row site-create-flex-container">
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Googleable" id="googleable-yes" name="isGoogleable" type="radio" value="1" required="required">    </div>

                                            <button class="btn btn-block btn-primary btn-lg main_background_color" onclick="goNext('sc-public-search-listing','last_step_searchable')" data-activate="#googleable-yes" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Googleable" data-qa-id="site-create-flow-googleable" type="button">                        Yes                </button>
                                        </div>
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Not Googleable" id="googleable-no" name="isGoogleable" type="radio" value="0" required="required" checked="checked">    </div>

                                            <button class="btn btn-block btn-primary btn-lg main_background_color" onclick="goNext('sc-public-search-listing','last_step_notsearchable')" data-activate="#googleable-no" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Not Googleable" data-qa-id="site-create-flow-not-googleable" type="button">                        No                </button>
                                        </div>
                                    </div>
                                </fieldset>

                                <p class="center">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-ga-label="Help Me Decide" data-ga-action="Click - link" data-target="#create-site-public-search-listing-decide-help" aria-expanded="false" aria-controls="create-site-public-search-listing-decide-help" data-qa-id="site-create-flow-help-link">Help Me Decide</button>
                                </p>

                                <div class="collapse alert alert-info" id="create-site-public-search-listing-decide-help">
                                    <p>Clicking <strong>Yes</strong> means that search engines will display basic information about your Hugs Room site, including your name, a summary of your story, and a link to your site. If you don’t want to be included in search engine results, click  <strong>No</strong>.</p>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="howCanSeeYourRoomStatus" value="1">
                    </section>

                    <!------------------------------- section7 c---------------------------->

                    <section class="site-create-step" id="sc-praivet-cb-search" data-ga-label-prefix="Public Search Listing - ">
                        <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-praivet-cb-search','sc-custom-privacy')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Room on Google</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row copy-margin">
                            <div class="col-md-1 col-md-offset-3 col-sm-2 col-sm-offset-2 col-xs-3 col-xs-offset-1 vertical-top">

                                <i class="cbicon-site-start-search start-a-site-icons" aria-hidden="true" role="presentation"></i>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-7 vertical-top">
                                <div class="start-a-site-text">
                                    Would you like Search Engines like Google to also be able to search for your Room?</div>
                            </div>
                        </div>

                        <div class="col-sm-10 col-sm-offset-1  col-xs-12">
                            <div class="content">
                                <fieldset class="form-group">
                                    <legend class="control-label">
                                    </legend>

                                    <div class="row site-create-flex-container">
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Googleable" id="googleable-yes" name="isGoogleable" type="radio" value="1" required="required">    </div>

                                            <button class="btn btn-block btn-primary btn-lg main_background_color"  onclick="goNext('sc-praivet-cb-search','last_step')" data-activate="#googleable-yes" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Googleable" data-qa-id="site-create-flow-googleable" type="button">                        Yes                </button>
                                        </div>
                                        <div class="site-create-flex-item site-create-2-cols-flex-item">
                                            <div style="display: none !important;">
                                                <input data-ga-action="Click - radio" data-ga-label="Not Googleable" id="googleable-no" name="isGoogleable" type="radio" value="0" required="required" checked="checked">    </div>

                                            <button class="btn btn-block btn-primary btn-lg main_background_color" onclick="goNext('sc-praivet-cb-search','last_step')" data-activate="#googleable-no" data-advance-steps="true" data-ga-action="Click - button" data-ga-label="Activate Not Googleable" data-qa-id="site-create-flow-not-googleable" type="button">                        No                </button>
                                        </div>
                                    </div>
                                </fieldset>

                                <p class="center">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-ga-label="Help Me Decide" data-ga-action="Click - link" data-target="#create-site-public-search-listing-decide-help" aria-expanded="false" aria-controls="create-site-public-search-listing-decide-help" data-qa-id="site-create-flow-help-link">Help Me Decide</button>
                                </p>

                                <div class="collapse alert alert-info" id="create-site-public-search-listing-decide-help">
                                    <p>Clicking <strong>Yes</strong> means that search engines will display basic information about your Hugs Room site, including your name, a summary of your story, and a link to your site. If you don’t want to be included in search engine results, click  <strong>No</strong>.</p>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="howCanSeeYourRoomStatus" value="1">
                    </section>

                    <section class="site-create-step" id="last_step">
                       {{-- <div class="col-sm-10 col-sm-offset-1 section-top-margin">
                            <button class="btn btn-default btn-default-border btn-sm" type="button" data-ga-label="Previous" data-ga-action="Click - button" data-role="previous" data-qa-id="site-create-flow-back" onclick="goNext('sc-custom-privacy','sc-title-and-address')">
                                <i class="cbicon-left-chevron" role="presentation" aria-hidden="true"></i>&nbsp;
                                Back    </button>
                        </div>--}}

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="text-center"><h1>Let’s Review</h1></div>
                                <div class="progress show-when-loaded">
                                    <div class="progress-bar main_background_color" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only"><span class="progress-bar-value">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="text-center"><h4 style="padding: 10px">Please confirm all the details are ok before we check you into your Room</h4></div>
                            <div class="content">
                                <div>
                                    <ul class="last_list" style="list-style: none">
                                        <li onclick="goToSection('sc-who')" style="cursor: pointer">
                                            <div class="last_step_icon" >
                                                <img src="{{asset('imgs/user_info/1.jpg')}}" style="padding-right: 10px;">
                                            </div>
                                            <div class="last_step_for">{{--Site For--}} Room Resident</div>
                                            <div >
                                                <label>
                                                    <label class="last_step_value" id="last_site_for">ME</label>
                                                </label>
                                            </div>
                                        </li>
                                        <li onclick="goToSection('sc-patient-name')" style="cursor: pointer">
                                            <div class="last_step_icon" >
                                                <img src="{{asset('imgs/user_info/2.jpg')}}" style="padding-right: 10px;width: 35px">
                                            </div>
                                            <div class="last_step_for">Name</div>
                                            <div >
                                                <label>
                                                    <label class="last_step_value" id="last_name">ME</label>
                                                </label>
                                            </div>
                                        </li>
                                        <li onclick="goToSection('sc-public-help')" style="cursor: pointer">
                                            <div class="last_step_icon" >
                                                <img src="{{asset('imgs/user_info/7.jpg')}}" style="padding-right: 10px;width: 35px">
                                            </div>
                                            <div class="last_step_for">Public health</div>
                                            <div >
                                                <label>
                                                    <label class="last_step_value" id="last_public">Yes</label>
                                                </label>
                                            </div>
                                        </li>
                                        <li onclick="goToSection('sc-title-and-address')" style="cursor: pointer">
                                            <div class="last_step_icon" >
                                                <img src="{{asset('imgs/user_info/3.jpg')}}" style="padding-right: 10px;width: 35px">
                                            </div>
                                            <div class="last_step_for">Room Address</div>
                                            <div style="overflow: hidden" >
                                                <label>
                                                    <label class="last_step_value" id="last_address" >ME</label>
                                                </label>
                                            </div>
                                        </li>
                                        <li onclick="goToSection('sc-title-and-address')" style="cursor: pointer">
                                            <div class="last_step_icon" >
                                                <img src="{{asset('imgs/user_info/4.jpg')}}" style="padding-right: 10px;width: 35px">
                                            </div>
                                            <div class="last_step_for">Room Tag/Title</div>
                                            <div >
                                                <label>
                                                    <label class="last_step_value" id="last_title">ME</label>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="review_privacy" onclick="goToSection('sc-custom-privacy')" style="cursor: pointer">
                                            <div class="last_step_icon" >
                                                <img src="{{asset('imgs/user_info/5.jpg')}}" style="padding-right: 10px;width: 35px">
                                            </div>
                                            <div class="last_step_for">Privacy</div>
                                            <div >
                                                <label>
                                                    <label class="last_step_privecy" id="last_Privacy">ME</label>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="review_google" onclick="goToSection('sc-praivet-cb-search')" style="cursor: pointer">
                                            <div class="last_step_icon" >
                                                <img src="{{asset('imgs/user_info/6.jpg')}}" style="padding-right: 10px;width: 35px">
                                            </div>
                                            <div class="last_step_for">Search Engine Support</div>
                                            <div >
                                                <label>
                                                    <label class="last_step_privecy" id="last_google">ME</label>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                    <h4 style="text-align: center;padding: 5px">You can adjust details later from room settings</h4>
                                    <div class="copy-margin center">
                                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                                            <button class="btn btn-primary main_background_color btn-lg btn-continue" id="last-step" type="button"  data-qa-id="site-create-flow-forward-sc-terms" onclick="submitCreateRoomForm()">Let’s Go</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </section>


                    <section>
                        <div class="col-sm-10 col-sm-offset-1">
                            <input type="hidden" name="client-metrics" class="client-metrics" data-qa-id="site-create-client-metrics" value="{&quot;vpw&quot;:1920,&quot;vph&quot;:969,&quot;dpi&quot;:96,&quot;dw&quot;:1920,&quot;dh&quot;:1080,&quot;daw&quot;:1920,&quot;dah&quot;:1040,&quot;touch&quot;:false,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36&quot;}">                                        <div style="display: none !important;">
                                <button type="submit">Submit</button>
                            </div>
                            <input type="hidden" name="stp" value="1">
                        </div>
                    </section>
                </form>
                <div class="h-200" ></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('js/main/create.js')}}"></script>
@endsection
