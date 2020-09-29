@extends('layouts.layout')
@section('content')
    <style>
        .additional_title{
            padding: 15px 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .additional_cover img{
            height: 350px;
            width: 100%
        }
        @media (max-width: 768px) {
            .container-bloody {
                background-color: #f9f9fb;
            }
            body > .container-fluid {
                height: 105%;
                background: #f9f9fb;
            }
            body {
                background-color: #f9f9fb;
            }
            .site_div_content{
                background: #f9f9fb;
            }
            .additional_cover img{
                height: 180px;
                width: 100%
            }
        }
    </style>

    <div class="site-content sub_tab_1" >
        <div class="site-create-steps">
            <div class="row">
                <section class="site-create-step active" id="sc-terms" >
                    <div class="row site_div_content">
                        <div class="col-md-12">
                            <div class="additional_cover">
                                <img src="{{asset("imgs/homeGroup3.png")}}" style="">
                            </div>
                            <div class="additional_title">About Us</div>
                            <div class="additional_body" style="padding: 0 20px;">
                                Website.com began in 2005. After years in the web hosting industry, we realized that it was near impossible for the average Jane or Joe to create their own website. Traditional web hosting services were simply too complicated, time consuming, and expensive to manage.

                                We created the Website.com Site Builder with the user's perspective in mind. We wanted to offer a platform that would require no coding skills or design experience. We keep it simple, so users can focus on creating an amazing website that reflects their brand. Best of all - it's free. You can get online, showcase your brand, or start selling products right away.

                                After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders, allowing business owners to launch their online business.

                                Today, we're proud to empower individuals and small business owners around the world. Everyone deserves a website, and we're excited to see what you create.
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
