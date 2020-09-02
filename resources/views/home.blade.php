@extends('layouts.layout')

@section('content')
    <div class="container-bloody">

        <style type="text/css">
            .homepage-image {
                background-image: url(imgs/homepage-hero-mobile3.png)
            }
            @media (min-width: 768px) {
                .homepage-image {
                    background-image: url(imgs/homepage-hero4.png)
                }
            }

        </style>
        <section class="section-homepage section-homepage-card-box homepage-image">
            <div class="section-homepage-card">
                <h2 style="">Start your free, personal CaringBridge site today</h2>
                <p style="">Stay connected to family and friends through any health journey</p>
                <div>
                    <a class="btn btn-primary btn-block btn-lg" href="/createwebsite">Create a Site</a>
                    <span class="or-seperator">OR</span>
                    <form action="/search" method="get" class="search">
                        <div class="input-group input-group-lg">
                            <input type="search" class="form-control" placeholder="Find Someone's Site" name="q" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                            <span class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-search">
                            <i class="cbicon-search"></i>
                            <span class="visuallyhidden">Search</span>
                        </button>
                    </span>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="section-homepage section-homepage-benefits">
            <h2 class="sr-only">Benefits</h2>

            <div class="row">

                <div class="col-md-4">
                    <i class="cbicon-share"></i>
                    <h3>Dedicated to Your Health Journey</h3>
                    <p>Your personal CaringBridge website is your place to share health updates, photos and videos with the people who care about you.</p>
                </div>

                <div class="col-md-4">
                    <i class="cbicon-padlock"></i>
                    <h3>Private, Protected and Ad-Free</h3>
                    <p>You’re in control of your privacy. Customize your settings to make your updates private or public. Your personal data is never sold, and there’s no outside advertising.</p>
                </div>

                <div class="col-md-4">
                    <i class="cbicon-support"></i>
                    <h3>Coordinate Help</h3>
                    <p>Your personal CaringBridge website is designed to rally your family and friends together, to offer you support when and how you need it.</p>
                </div>

            </div>

        </section>

        <p class='hp-wp-p-ignore'></p>

        <section class="section-homepage container-bloody sihp-dynamic">
            <div class="sihp-post">
                <div class="sihp-article">
                    <section class="sihp-photo col-lg-7 col-md-8 col-sm-8 sihp-right-photo">
                        <a class="featured-image-link" href="https://www.caringbridge.org/resources/caringbridge-planner-makes-it-easy-to-request-help/">
                            <img width="768" height="512" src="https://www.caringbridge.org/wp-content/uploads/2020/03/Planner-LP-new-planner-icon@2x-768x512.png" class="featured-image img-responsive wp-post-image" alt="" srcset="https://www.caringbridge.org/wp-content/uploads/2020/03/Planner-LP-new-planner-icon@2x-768x512.png 768w, https://www.caringbridge.org/wp-content/uploads/2020/03/Planner-LP-new-planner-icon@2x-300x200.png 300w, https://www.caringbridge.org/wp-content/uploads/2020/03/Planner-LP-new-planner-icon@2x-1024x683.png 1024w" sizes="(max-width: 768px) 100vw, 768px" />            </a>
                    </section>
                    <div class="post-excerpt sihp-text col-lg-5 col-md-4 col-sm-4 sihp-left-text">
                        <div class="sihp-post-title" >
                            CaringBridge Planner Makes it Easy to Request and Accept Offers of Help            </div>
                        <div class="hidden-lg hidden-md">
                            <p>During a health journey, patients and caregivers almost always need help, and family and friends would do almost anything to help. But human nature and feeling overwhelmed often make it hard for those in the thick of things ask for help. And it can be tricky for those wanting to help to know what is&#8230; <a class="read-more" href="https://www.caringbridge.org/resources/caringbridge-planner-makes-it-easy-to-request-help/">Read More</a></p>
                        </div>
                        <div class="hidden-sm hidden-xs">
                            <p>During a health journey, patients and caregivers almost always need help, and family and friends would do almost anything to help. But human nature and feeling overwhelmed often make it hard for those in the thick of things ask for help. And it can be tricky for those wanting to help to know what is actually helpful. In fact, in a recent survey of patients and caregivers using CaringBridge, 53% of those who responded said they could use help with food, chores, transportation and finances, but they very seldom asked. This simply should not be true &#8230; but from experience you are likely nodding in agreement. With&#8230; <a class="read-more" href="https://www.caringbridge.org/resources/caringbridge-planner-makes-it-easy-to-request-help/">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sihp-post">
                <div class="sihp-article">
                    <section class="sihp-photo col-lg-7 col-md-8 col-sm-8 sihp-left-photo">
                        <a class="featured-image-link" href="https://www.caringbridge.org/resources/how-to-form-a-care-team/">
                            <img width="768" height="432" src="https://www.caringbridge.org/wp-content/uploads/2020/05/Cooper_Family_006-Feature-Image-for-Blog-Post-768x432.jpg" class="featured-image img-responsive wp-post-image" alt="how to form a care team" srcset="https://www.caringbridge.org/wp-content/uploads/2020/05/Cooper_Family_006-Feature-Image-for-Blog-Post-768x432.jpg 768w, https://www.caringbridge.org/wp-content/uploads/2020/05/Cooper_Family_006-Feature-Image-for-Blog-Post-300x169.jpg 300w, https://www.caringbridge.org/wp-content/uploads/2020/05/Cooper_Family_006-Feature-Image-for-Blog-Post-1024x576.jpg 1024w" sizes="(max-width: 768px) 100vw, 768px" />            </a>
                    </section>
                    <div class="post-excerpt sihp-text col-lg-5 col-md-4 col-sm-4 sihp-right-text">
                        <div class="sihp-post-title" >
                            How to Form a Care Team            </div>
                        <div class="hidden-lg hidden-md">
                            <p>So that Hanna Cooper and her husband, Tom, Moberg, could focus on Hanna&#8217;s health and their family, Hanna formed a core care team to manage offers of help including meals, transportation, errands and yard work. In a health crisis, a bewildering number of decisions, choices and practical needs arise quickly and over time. Family and&#8230; <a class="read-more" href="https://www.caringbridge.org/resources/how-to-form-a-care-team/">Read More</a></p>
                        </div>
                        <div class="hidden-sm hidden-xs">
                            <p>So that Hanna Cooper and her husband, Tom, Moberg, could focus on Hanna&#8217;s health and their family, Hanna formed a core care team to manage offers of help including meals, transportation, errands and yard work. In a health crisis, a bewildering number of decisions, choices and practical needs arise quickly and over time. Family and friends want to help, but even well-meaning offers can become overwhelming and can feel like just another project to manage. So how does one go about matching offers of support that may be coming in like a firehose-of-love—food, transport, childcare, yardwork, &#8220;When may I call or stop by to say &#8216;hi?&#8217;&#8221;—with the&#8230; <a class="read-more" href="https://www.caringbridge.org/resources/how-to-form-a-care-team/">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sihp-post">
                <div class="sihp-article">
                    <section class="sihp-photo col-lg-7 col-md-8 col-sm-8 sihp-right-photo">
                        <a class="featured-image-link" href="https://www.caringbridge.org/resources/what-is-caringbridge/">
                            <img width="768" height="432" src="https://www.caringbridge.org/wp-content/uploads/2017/10/caringbridge-logo-thumb-2400x1350-768x432.jpg" class="featured-image img-responsive wp-post-image" alt="" srcset="https://www.caringbridge.org/wp-content/uploads/2017/10/caringbridge-logo-thumb-2400x1350-768x432.jpg 768w, https://www.caringbridge.org/wp-content/uploads/2017/10/caringbridge-logo-thumb-2400x1350-300x169.jpg 300w, https://www.caringbridge.org/wp-content/uploads/2017/10/caringbridge-logo-thumb-2400x1350-1024x576.jpg 1024w" sizes="(max-width: 768px) 100vw, 768px" />            </a>
                    </section>
                    <div class="post-excerpt sihp-text col-lg-5 col-md-4 col-sm-4 sihp-left-text">
                        <div class="sihp-post-title" >
                            What is CaringBridge?
                        </div>
                        <div class="hidden-lg hidden-md">
                            <div style="font-size: 16px;">New to CaringBridge and wondering if you need a site  or how to get started? Find out by <a href="https://www.caringbridge.org/resources/what-is-caringbridge/">watching this short informational video.</a></div>
                        </div>
                        <div class="hidden-sm hidden-xs">
                            <div style="font-size: 16px;">New to CaringBridge and wondering if you need a site  or how to get started? Find out by <a href="https://www.caringbridge.org/resources/what-is-caringbridge/">watching this short informational video.</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="hp-cta">
            <div class="hp-cta-article  hp-cta-bg-color-orange" >

                <section class="hp-cta-photo  col-lg-7 col-md-8 col-sm-8 hp-cta-left-photo">
                    <img src="https://www.caringbridge.org/wp-content/uploads/2018/10/bushaws-family.jpg" class="featured-image img-responsive"/>
                </section>


                <div class="hp-cta-content  col-lg-5 col-md-4 col-sm-4 hp-cta-right-content  hp-cta-content-white-text">

                    <div class="hp-cta-title" >
                        GIVE TOGETHER                </div>

                    <div>
                        <div style="font-size: 16px;">Our nonprofit service is powered by generous people like you, whose kindness makes CaringBridge possible. When you support CaringBridge, you ensure that everyone has a safe place to tell their health story and feel the love of family and friends.</div>
                    </div>

                    <div class="hp-cta-btn-container-wrapper">
                        <div class="hp-cta-btn-container">
                            <a href="https://www.caringbridge.org/give?split=290"
                               class="btn btn-default hp-cta-btn-color-light-berry hp-cta-btn-white-text" style=""
                               data-ga-label="CTA - Donate to CaringBridge">
                                Donate to CaringBridge</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class='hp-wp-p-ignore'></p>





        <section class="email-opt-in" data-ga-label-prefix="Email Opt-In - " id="email-opt-in">
            <div class="row">
                <div class="col-md-12">
                    <div id="keep-in-touch">
                        <h2 class="text-center">Keep In Touch</h2>
                        <p class="text-center lead">
                            Send me emails on supporting a friend in tough times through stories, articles, videos and more.    </p>
                    </div>
                    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
                    <form class="js-email-opt-in" method="post" target="_blank"
                          action="https&#x3A;&#x2F;&#x2F;wvw.caringbridge.org&#x2F;l&#x2F;493421&#x2F;2018-05-02&#x2F;wb3rf">

                        <div class="row">
                            <div class="col-md-3 col-md-offset-3 col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <label for="email-opt-in-first-name">First Name</label>
                                    <input type="text" class="form-control" name="First Name" id="email-opt-in-first-name"
                                           placeholder="Jane" autocapitalize="words" autocomplete="given-name" required="required" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5">
                                <div class="form-group">
                                    <label for="email-opt-in-email">Email</label>
                                    <input type="email" name="Email" id="email-opt-in-email" class="form-control"
                                           placeholder="jane.doe@example.com" autocomplete="email" autocapitalize="none" required="required" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">

                                    <section class="js-recaptcha-container">
                                        <h3 class="visuallyhidden">Help Us Prevent the Misuse of CaringBridge for Spam</h3>
                                        <p class="muted small hide-if-no-js">
                                            * Complete the box below to help us prevent the misuse of CaringBridge for spam.        </p>
                                        <noscript>
                                            <p class="muted small">
                                                * Complete the question below to help us prevent the misuse of CaringBridge for spam. After you answer the question, copy and paste the code you receive into the text box below.            </p>
                                        </noscript>
                                        <div class="content">
                                            <div class="g-recaptcha" data-sitekey="6Le0GKIUAAAAABNC9GVFM-5Ubqfx-b0swOscUXQT"></div>

                                            <noscript>
                                                <div style="width: 302px; height: 550px;">
                                                    <div style="width: 302px; height: 550px; position: relative;">
                                                        <div style="width: 302px; height: 550px; position: absolute;">
                                                            <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Le0GKIUAAAAABNC9GVFM-5Ubqfx-b0swOscUXQT"
                                                                    frameborder="0" scrolling="no"
                                                                    style="width: 302px; height:550px; border-style: none;">
                                                            </iframe>
                                                        </div>
                                                        <div style="width: 250px;
                        height: 80px;
                        position: absolute;
                        border-style: none;
                        bottom: 21px;
                        left: 25px;
                        margin: 0px;
                        padding: 0px;
                        right: 25px;" >
                                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                                          class="g-recaptcha-response"
                                                                          style="width: 250px;
                                                                        height: 80px;
                                                                        border: 1px solid #c1c1c1;
                                                                        margin: 0px;
                                                                        padding: 0px;
                                                                        resize: none;"
                                                                          value=""
                                                                >

                                                                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </noscript>
                                        </div>
                                        <p class="muted small">If you have problems completing the reCAPTCHA, our <a class="alert-link" href="https&#x3A;&#x2F;&#x2F;caringbridgehelp.custhelp.com&#x2F;app&#x2F;answers&#x2F;detail&#x2F;a_id&#x2F;798" target="_blank">Customer Care team</a> will be happy to help you.</p>
                                    </section>
                                    <div class="alert alert-error alert-danger recaptcha-error" style="display:none;"></div>
                                    <button type="submit" class="btn btn-lg btn-primary" data-ga-action="Click - button">
                                        Subscribe Me                </button>
                                    <div class="text-center">
                                        Your information is never shared or sold in accordance with our <em><a target="_blank" href="https://www.caringbridge.org/privacy-policy">Privacy Policy</a></em>.                </div>
                                    <input type="hidden" name="formSourceName" value="StandardForm">
                                    <input type="hidden" name="sp_exp" value="yes">
                                    <input type="hidden" name="Is Prospect" value="Yes">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <footer class="fat-footer" data-ga-label-prefix="Fat Footer - ">

            <!-- Footer Proper -->
            <div class="row hidden-print">

                <div class="col-lg-3 col-sm-6 footer-col-1">
                    <a href="https://www.caringbridge.org/">
                        <img src="imgs/logo-caringbridge-2019.png" alt="CaringBridge logo. Go to home page." width="200" />
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
                    <a href="https://www.caringbridge.org/redirect-donation/1019" class="btn btn-primary btn-footer-donate" data-qa-id="footer-donate-link" style="padding-left: 11px; padding-right: 11px;">
                        <i class="cbicon-tribute-big" role="presentation" style="margin-right: 3px;"></i>
                        Donate to CaringBridge
                    </a>
                    <ul class="privacy-seal-list">
                        <li>
                            <a class="charitynav-seal" href="https&#x3A;&#x2F;&#x2F;www.charitynavigator.org&#x2F;index.cfm&#x3F;bay&#x3D;search.summary&amp;orgid&#x3D;10519" target="_blank">
                                <span class="sr-only">Charity Navigator Four Star Charity</span>
                            </a>
                        </li>
                        <li>
                            <a class="bbb-seal" href="https&#x3A;&#x2F;&#x2F;www.bbb.org&#x2F;charity-reviews&#x2F;national&#x2F;health&#x2F;caringbridge-in-eagan-mn-2562" target="_blank">
                                <span class="sr-only">Better Business Bureau Accredited Charity</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-lg-12">
                    <hr class="visible-print">
                    <p class="fine-print text-center"><a href="https://www.caringbridge.org/copyright">Copyright</a> &#169; 2020 CaringBridge &#174;, a 501(c)(3) nonprofit organization, EIN: 42-1529394. By using this website you agree to our <a href="https://www.caringbridge.org/terms-of-use">Terms of Use</a> and <a href="https://www.caringbridge.org/privacy-policy">Privacy Policy</a>. View our <a href="https://www.caringbridge.org/sitemap">Site Map</a>.</p>
                </div>
            </div>

        </footer>
    </div>
@endsection
