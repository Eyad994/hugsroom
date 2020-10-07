@extends('layouts.layout')
@section('content')
    <style>
    .setting_menu{
        width: 100%;
        height: 100px !important;
        background: #E84B7B;
        margin-top: 0 !important;
    }
    .setting_items{
        text-align: center;
        background: red;
        height: 100px;
    }
    </style>
    <div class="setting_menu">
        <div class="container-fluid">
            <div class="col-md-2 setting_items">1</div>
            <div class="col-md-2 setting_items">1</div>
            <div class="col-md-2 setting_items">1</div>
            <div class="col-md-2 setting_items">1</div>
            <div class="col-md-2 setting_items">1</div>
            <div class="col-md-2 setting_items">1</div>
        </div>
    </div>
    <div class="container section_container" style="height: 600px;">
        <div class="container-fluid">

        </div>
    </div>
@endsection
