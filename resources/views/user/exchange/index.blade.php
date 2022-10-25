
@extends('user.layouts.newFront')


@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('css/exchange.css')}}" />
    <style>
        html {
            scroll-behavior: smooth;
        }
        .card{
            background-color: #fff;
            border-radius: 10px;
            color: #ffffff;
            padding: 5px;
            background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Ho_Chi_Minh_City_Skyline_%28night%29.jpg/1200px-Ho_Chi_Minh_City_Skyline_%28night%29.jpg");
            background-size: cover;
            background-attachment: fixed;
        }
        .card h2{
            background-color: #00000075;
        }
        .card p{
            background-color: #00000075;
        }
    </style>
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo.phlox.pro\/architect\/wp-includes\/js\/wp-emoji-release.min.js"}};
        !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        .elementor-52 .elementor-element.elementor-element-51ad86fa>.elementor-element-populated {
            border-color: #ffc107 !important;
        }
        .elementor-52 .elementor-element.elementor-element-49d9de1 .aux-modern-heading-divider {
            background-color: #ffc107 !important;
        }
        .footer .footer-widget-area { 
            background-color: black !important;
        }
        .footer .copyright-designer {
            background-color: black !important; 
        }
        .showcase-btn {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        .dream-btn {
            background-color: #ffc107;
        }
        .total-package strong {
            background-color: #ffc107;
        }
        .total-package ul li span:last-child {
            color: #ffc107;
        }
        .section-heading h2 {
            color: #ffc107;
        }
        .feature-things a {
            color: #ffc107;
            border: 4px solid #ffc107;
        }
        a:hover {
            background-color: black !important;
        }
        .hidden-xs:hover {
            background-color: black !important;
        }
        input[type=text], input[type=password], input[type=email], input[type=tel], input[type=url], textarea {
            border-color: #ffc107;
        }
        .main-slider .mian-heading h2 {
            color: #ffc107;
        }
        .main-slider .prev, .main-slider .next {
            background-color: #ffc107;
        }
        .tgju-widget-title-text.dot:before {
            background: #ffc107 !important;
        }
        .tgju-widget-table .c-high {
            color: #ffc107 !important;
        }
        .new-a-class {
            background: #ffc107;
            padding: 10px 24px;
            color: white;
            font-weight: bold;
            border-radius: 2px;
            border: 1px solid white;
        }
    </style>
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-52 .elementor-element.elementor-element-46fc4ae1 > .elementor-widget-container{background-color:var( --auxin-featured-color-6 );}/* Start custom CSS for aux_modern_heading, class: .elementor-element-46fc4ae1 */@media only screen and (min-width:1024px) and (max-width:1200px) {
            .elementor-52 .elementor-element.elementor-element-46fc4ae1 .elementor-widget-container{
                padding-left: 35px;
            }
        }

        .elementor-52 .elementor-element.elementor-element-46fc4ae1 .aux-modern-heading-secondary {
            width: 500px;
        }/* End custom CSS */
        .elementor-603 .elementor-element.elementor-element-d04506c small{color:var( --auxin-featured-color-3 );}/* Start custom CSS for aux_copyright, class: .elementor-element-d04506c */@media only screen and (max-width: 1024px) and (min-width: 768px) {
            .elementor-603 .elementor-element.elementor-element-d04506c {
                order: 4;
            }
        }

        @media only screen and (max-width: 767px) and (min-width: 350px) {
            .elementor-603 .elementor-element.elementor-element-d04506c {
                order: 4;
            }
        }/* End custom CSS */
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('css/new/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/new/about.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

    <script type='text/javascript' src='https://demo.phlox.pro/architect/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' id='auxin-modernizr-js-extra'>
        /* <![CDATA[ */
        var auxin = {"ajax_url":"https:\/\/demo.phlox.pro\/architect\/wp-admin\/admin-ajax.php","is_rtl":"","is_reponsive":"1","is_framed":"","frame_width":"20","wpml_lang":"en","uploadbaseurl":"https:\/\/demo.phlox.pro\/architect\/wp-content\/uploads\/sites\/41"};
        /* ]]> */
    </script>
    <script type='text/javascript' id='auxin-modernizr-js-before'>
        /* < ![CDATA[ */
        function auxinNS(n){for(var e=n.split("."),a=window,i="",r=e.length,t=0;r>t;t++)"window"!=e[t]&&(i=e[t],a[i]=a[i]||{},a=a[i]);return a;}
        /* ]]> */
    </script>
    <link rel="https://api.w.org/" href="https://demo.phlox.pro/architect/wp-json/" /><link rel="alternate" type="application/json" href="https://demo.phlox.pro/architect/wp-json/wp/v2/pages/52" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.phlox.pro/architect/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.phlox.pro/architect/wp-includes/wlwmanifest.xml" />
    <link rel='shortlink' href='https://demo.phlox.pro/architect/?p=52' />
    <link rel="alternate" type="application/json+oembed" href="https://demo.phlox.pro/architect/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.phlox.pro%2Farchitect%2Fabout-us%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://demo.phlox.pro/architect/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.phlox.pro%2Farchitect%2Fabout-us%2F&#038;format=xml" />

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-20400688-11', 'auto');
        ga('send', 'pageview');

        ga("create", "UA-43313145-1", "auto", {
            name: "author_analytics"
        });
        ga("author_analytics.require", "linker");
        ga("author_analytics.linker:autoLink", ["themeforest.net"]);
        ga("author_analytics.send", "pageview");
    </script>
    <style> .jivo-frame-visible{ display:none !important; } </style><!-- Chrome, Firefox OS and Opera -->
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/cropped-fav-icon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/cropped-fav-icon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/cropped-fav-icon-180x180.png" />
    <style type="text/css" id="wp-custom-css">
        .aux-arch-about-project-text {
            transform: translateX(-45%);
        }
        .hentry .entry-main,
        .hentry .entry-content{
            margin-bottom : 0;
        }

        @media screen and (max-width: 1100px) {
            .aux-arch-about-project-text {
                transform: none;
            }

        }		</style>
    <script data-cfasync="false" id="ao_optimized_gfonts_webfontloader">(function() {var wf = document.createElement('script');wf.src='https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';wf.type='text/javascript';wf.async='true';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(wf, s);})();</script>
@endsection


@section('main')
    <main id="main" class="aux-main aux-territory  aux-single aux-page aux-full-container no-sidebar aux-sidebar-style-border aux-user-entry" >
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">

                <div id="primary" class="aux-primary" >
                    <div class="content" role="main"  >


                        <article id="post-52" class="post-52 page type-page status-publish hentry">

                            <div data-elementor-type="wp-page" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        <section data-export-id="41-52-7c89838d" class="elementor-section elementor-top-section elementor-element elementor-element-7c89838d elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="7c89838d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url({{url($exchange->photo)}});">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-51ad86fa aux-appear-watch-animation aux-fade-in-right" data-id="51ad86fa" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-65ae90d0 elementor-widget elementor-widget-aux_modern_heading" data-id="65ae90d0" data-element_type="widget" data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner"><h2 class="aux-modern-heading-primary">صرافی</h2></div>
                                                                        </section>		</div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-8b41f70 elementor-widget elementor-widget-aux_breadcrumbs" data-id="8b41f70" data-element_type="widget" data-widget_type="aux_breadcrumbs.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="aux-elementor-breadcrumbs"><p class="aux-breadcrumbs"><span class="aux-breadcrumb-sep breadcrumb-icon auxicon-chevron-right-1"></span><span><a href="{{url("/")}}" title="Home">خانه</a></span><span class="aux-breadcrumb-sep breadcrumb-icon auxicon-chevron-right-1"></span><span>صرافی</span></p>
                                                                        </div>		</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <tgju
                                            type="market-data"
                                            items="137203,137205,137207,137206,137225"
                                            columns="dot,diff,low,high,time"
                                            token="webservice"
                                        ></tgju>

                                        <section data-export-id="41-52-ca2a472" class="elementor-section elementor-top-section elementor-element elementor-element-ca2a472 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca2a472" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ce959dd" data-id="2ce959dd" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-49d9de1 aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading" data-id="49d9de1" data-element_type="widget" data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner"><h2 class="aux-modern-heading-primary"></h2><h3 class="aux-modern-heading-secondary"><span class="aux-head-before">توضیحات</span></h3><div class="aux-modern-heading-divider"></div><div class="aux-modern-heading-description"><p></p></div></div>
                                                                        </section>		</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </section>

                                        <section data-export-id="41-52-ca2a472" class="elementor-section elementor-top-section elementor-element elementor-element-ca2a472 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca2a472" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-80 elementor-top-column elementor-element elementor-element-2ce959dd" data-id="2ce959dd" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-49d9de1 aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading" data-id="49d9de1" data-element_type="widget" data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                {!! $exchange->text !!}
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>

                        </article> <!-- end article -->
                        <div class="clear"></div>


                    </div><!-- end content -->
                </div><!-- end primary -->


            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->


    <section id="main-slider" class="carousel main-slider" style="display: block">
        <div class="carousel slide">
            <div class="carousel-inner" style="max-height: 500px;">

                @foreach($sliders as $key=>$slider)
                    <div class="item item-bg-1 {{$key==0?'active':''}}" style="background-image: url({{$slider->photo?url($slider->photo->path):''}});">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="slider-items">
                                        <div class="animation animated-item-4">
                                            <!-- Only Slider Top Style -->
                                            <div class="slider-head-style">
                                            </div>
                                        </div>
                                        <div class="mian-heading">
                                            <h2 style="font-size: 38px;">{{$slider->title}}</h2>
                                        </div>

                                    </div> <!-- /.slider-items -->
                                </div>

                            </div>
                        </div>
                    </div>
            @endforeach

            <!-- Property Search Area Start -->
                <!-- /.property-search-area -->
                <!-- Property Search Area End -->
            </div> <!-- /.carousel-inner -->
        </div> <!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-long-arrow-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-long-arrow-right"></i>
        </a>
    </section>

    <section class="apartment" style="background-color: #ffffff;margin-bottom: 7%;margin-top: 7%;">
        <div class="container">
            <div class="row">

                <div class="col">
                    <div class="card">
                        <h2 style="font-family: 'IRANSans';">پیشنهاد ویژه</h2>
                        <h2 style="font-family: 'IRANSans';">{{$exchange->SpecialTitle_2}}</h2>
                        <p>{{$exchange->SpecialText_2}}</p>
                        <div class="apartment-btn">
                            {{-- <a  href="{{route('user.contact')}}" id="contract" class="dream-btn">تماس با ما</a> --}}
                            <a  href="{{route('user.contact')}}" id="contract" class="new-a-class">تماس با ما</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="apartment" style="background-color: #ffc107;margin-bottom: 7%;margin-top: 0;">
        <div class="container">
            <h2 style="font-family: 'IRANSans';
color: #fff;">{{$exchange->SpecialTitle}}</h2>
            <p>{{$exchange->SpecialText}}</p>
            <div class="apartment-btn">
                {{-- <a href="{{route('user.contact')}}" class="dream-btn">تماس با ما</a> --}}
                <a href="{{route('user.contact')}}" class="new-a-class">تماس با ما</a>
            </div>
        </div> <!-- /.container -->
    </section>

    <div class="container" style="width: 100%">
        <section class="row m-0 p-0" style="background-color: #ffc107;">
            <div class="col-sm-12 col-md-4 col-xl-4">
                <div class="exchange-box">
                    <form id="exchange-box_form" action="" method="GET">
                        <div class="loader-wrapper" style="display: none;">
                            <div class="section-placeholder-mask">
                                <div class="loader"></div>
                            </div>
                        </div>
                        <div class="exchange-box_title">تبدیل ارز</div>
                        <div class="exchange-box_exchanged"> <span id="number" class="number">0</span> <span id="symbol" class="symbol">تومان</span></div>
                        <div class="exchange-box_selectors">
                            <div id="forme1" class="exchange-box_select-wrapper">
                                <label>از</label>
                                <span class="flag-icon flag-icon-tur"></span>  لیر
                            </div>
                            <div id="lirchange" class="exchange-box_exicon"> <i class="fa fa-exchange"></i></div>
                            <div id="to1" class="exchange-box_select-wrapper">
                                <label>به</label>
                                <span class="flag-icon flag-icon-irn"></span>تومان
                            </div>
                        </div>
                        <input name="number" id="exchange-box_input" type="text" class="exchange-box_input" placeholder="مقدار را وارد نمایید" data-rate="2030">
                        <div class="exchange-box_update-date">
                            <div> نرخ تبدیل <span id="exchange_form">لیر ترکیه</span> به <span id="exchange_to">تومان</span>: <span id="exchange_rate">{{number_format($exchange->lirPrice)}}</span></div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4">
                <div class="exchange-box">
                    <form id="exchange-box_form" action="" method="GET">
                        <div class="loader-wrapper" style="display: none;">
                            <div class="section-placeholder-mask">
                                <div class="loader"></div>
                            </div>
                        </div>
                        <div class="exchange-box_title">تبدیل ارز</div>
                        <div class="exchange-box_exchanged"> <span id="number2" class="number">0</span> <span id="symbol2" class="symbol">تومان</span></div>
                        <div class="exchange-box_selectors">
                            <div id="forme2" class="exchange-box_select-wrapper">
                                <label>از</label>
                                <span class="flag-icon flag-icon-usa"></span>دلار

                            </div>
                            <div id="usdechange" class="exchange-box_exicon"> <i class="fa fa-exchange"></i></div>
                            <div id="to2" class="exchange-box_select-wrapper">
                                <label>به</label>
                                <span class="flag-icon flag-icon-irn"></span>تومان
                            </div>
                        </div>
                        <input name="number" id="exchange-box_input2" type="text" class="exchange-box_input" placeholder="مقدار را وارد نمایید" data-rate="2030">
                        <div class="exchange-box_update-date">
                            <div> نرخ تبدیل <span id="exchange_form">دلار</span> به <span id="exchange_to">تومان</span>: <span id="exchange_rate">{{number_format($exchange->usdPrice)}}</span></div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4">
                <div class="exchange-box">
                    <form id="exchange-box_form" action="" method="GET">
                        <div class="loader-wrapper" style="display: none;">
                            <div class="section-placeholder-mask">
                                <div class="loader"></div>
                            </div>
                        </div>
                        <div class="exchange-box_title">تبدیل ارز</div>
                        <div class="exchange-box_exchanged"> <span id="number3" class="number">0</span> <span id="symbol3" class="symbol">تومان</span></div>
                        <div class="exchange-box_selectors">
                            <div id="forme3" class="exchange-box_select-wrapper">
                                <label>از</label>
                                <span class="flag-icon flag-icon-eun"></span> یورو
                            </div>
                            <div id="eurochange" class="exchange-box_exicon"> <i class="fa fa-exchange"></i></div>
                            <div id="to3" class="exchange-box_select-wrapper">
                                <label>به</label>
                                <span class="flag-icon flag-icon-irn"></span>تومان
                            </div>
                        </div>
                        <input name="number3" id="exchange-box_input3" type="text" class="exchange-box_input" placeholder="مقدار را وارد نمایید" data-rate="2030">
                        <div class="exchange-box_update-date">
                            <div> نرخ تبدیل <span id="exchange_form">یورو</span> به <span id="exchange_to">تومان</span>: <span id="exchange_rate">{{number_format($exchange->euroPrice)}}</span></div>

                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
    <div class="container" id="contact-everything" style="margin-top: 12%;">

    </div>
@endsection

@section('script')
    <script src="https://api.accessban.com/v1/widget/v2" defer></script>



    <script>
        //lir
        var exchange = "rial";
        var exchange2 = "rial";
        var exchange3 = "rial";
        var price = {{$exchange->lirPrice}};
        var usdprice = {{$exchange->usdPrice}};
        var europrice = {{$exchange->euroPrice}};

        $("#lirchange").click(function() {
            if(exchange == "rial"){
                $("#symbol").html("لیر");
                $("#forme1").html("<label>از</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-irn\"></span>تومان");
                $("#to1").html("<label>به</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-tur\"></span>  لیر");
                var v = $("#exchange-box_input").val() / price;
                var p = parseFloat(v).toFixed(3);
                $("#number").html(p);
                exchange = "lir";
            }else{
                $("#symbol").html("تومان");
                $("#forme1").html("<label>از</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-tur\"></span>  لیر");
                $("#to1").html("<label>به</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-irn\"></span>تومان");
                var p = $("#exchange-box_input").val() * price;
                $("#number").html(p);
                exchange = "rial";
            }
        });

        $("#usdechange").click(function() {
            if(exchange2 == "rial"){
                $("#symbol2").html("دلار");
                $("#forme2").html("<label>از</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-irn\"></span>تومان");
                $("#to2").html("<label>به</label>\n" +
                    "<span class=\"flag-icon flag-icon-usa\"></span>  دلار");

                var v = $("#exchange-box_input2").val() / usdprice;
                var p = parseFloat(v).toFixed(3);
                $("#number2").html(p);
                exchange2 = "usd";
            }else{
                $("#symbol2").html("تومان");
                $("#forme2").html("<label>از</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-usa\"></span>  دلار");
                $("#to2").html("<label>به</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-irn\"></span>تومان");

                var p = $("#exchange-box_input2").val() * usdprice;
                $("#number2").html(p);
                exchange2 = "rial";
            }
        });

        $("#eurochange").click(function() {
            if(exchange3 == "rial"){
                $("#symbol3").html("یورو");
                $("#forme3").html("<label>از</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-irn\"></span>تومان");
                $("#to3").html("<label>به</label>\n" +
                    "<span class=\"flag-icon flag-icon-eun\"></span>  یورو");

                var v = $("#exchange-box_input3").val() / europrice;
                var p = parseFloat(v).toFixed(3);
                $("#number3").html(p);
                exchange3 = "usd";
            }else{
                $("#symbol3").html("تومان");
                $("#forme3").html("<label>از</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-eun\"></span>  یورو");
                $("#to3").html("<label>به</label>\n" +
                    "                                <span class=\"flag-icon flag-icon-irn\"></span>تومان");

                var p = $("#exchange-box_input3").val() * europrice;
                $("#number3").html(p);
                exchange3 = "rial";
            }
        });

    </script>
    <script>
        $( document ).ready(function() {
            $("li").hover(
                function () {
                    $(this).addClass('open');
                },
                function () {
                    $(this).removeClass("open");
                }
            );

        });
    </script>
@endsection
