
@extends('user.layouts.newFront')

{{--@section('style_css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/A.style.css.pagespeed.cf.YQ-R129f7j.css')}}" />
@endsection--}}
@section('head')

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

@section('main-nav')
    <li class="active"><a href="{{url('/')}}">{{__('header.menu.home')}}</a></li>
    @foreach($Menus as $index=>$menu)
        @if($menu->childs()->first())

            <li><a href="{{route('user.Legal.show',[$menu->slug])}}">{{$menu->title}}</a>
                <ul class="sub-nav">
                    @foreach($menu->childs()->get() as $index=>$menu_2)
                        @if($menu_2->childs()->first())
                            <li><a href="{{route('user.Legal.show',[$menu_2->slug])}}">{{$menu_2->title}}</a>
                                <ul class="sub-nav">
                                    @foreach($menu_2->childs()->get() as $index=>$menu_3)
                                        <li><a  href="{{route('user.Legal.show',[$menu_3->slug])}}">{{$menu_3->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="{{route('user.Legal.show',[$menu_2->slug])}}">{{$menu_2->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @else
            <li><a href="{{route('user.Legal.show',[$menu->slug])}}">{{$menu->title}}</a></li>
        @endif

    @endforeach

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
                                        <section data-export-id="41-52-7c89838d" class="elementor-section elementor-top-section elementor-element elementor-element-7c89838d elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="7c89838d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url({{url($post->photo)}});">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-51ad86fa aux-appear-watch-animation aux-fade-in-right" data-id="51ad86fa" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-65ae90d0 elementor-widget elementor-widget-aux_modern_heading" data-id="65ae90d0" data-element_type="widget" data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner"><h2 class="aux-modern-heading-primary">{{$post->page_title}}</h2></div>
                                                                        </section>		</div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-8b41f70 elementor-widget elementor-widget-aux_breadcrumbs" data-id="8b41f70" data-element_type="widget" data-widget_type="aux_breadcrumbs.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="aux-elementor-breadcrumbs"><p class="aux-breadcrumbs"><span class="aux-breadcrumb-sep breadcrumb-icon auxicon-chevron-right-1"></span><span><a href="{{url("/")}}" title="Home">خانه</a></span><span class="aux-breadcrumb-sep breadcrumb-icon auxicon-chevron-right-1"></span><span>امور تحصیلی</span></p>
                                                                        </div>		</div>
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
                                                    <div class="aux-parallax-section elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ce959dd" data-id="2ce959dd" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-49d9de1 aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading" data-id="49d9de1" data-element_type="widget" data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner"><h2 class="aux-modern-heading-primary"></h2><h3 class="aux-modern-heading-secondary"><span class="aux-head-before">{{$post->title}}</span></h3><div class="aux-modern-heading-divider"></div><div class="aux-modern-heading-description"><p>{{$post->text_short}}</p></div></div>
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
                                                                                {!! $post->text !!}
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




                        <!-- You can start editing here. -->







                    </div><!-- end content -->
                </div><!-- end primary -->


            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->


    <div class="container">
        <div class="showcase-btn">
            <a href="{{route('user.contact')}}" class="dream-btn" dideo-checked="true">تماس با کارشناس</a>
        </div>
    </div>
    {{--<section class="renewal">
 --}}{{--       <div class="container">
            <div class="row">
                <div dir="rtl" class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                </div><!-- /.col- -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" dir="rtl">
                    <div class="renewal-items" style="background-color: #52c5f1; color: #ffff;">

                        <div class="title">
                            <h3><a style="color: #ffff;" href="#" dideo-checked="true">فرم تحصیل در مقاطع ابتدایی و راهنمایی و دبیرستان</a></h3>
                        </div>
                        <div class="content">
                            <p></p></div>
                        <div class="renewal-btn">
                            <a href="#" class="fresh-btn" dideo-checked="true">مشاهده</a>
                        </div>
                    </div> <!-- /.renewal-items -->
                </div><!-- /.col- -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" dir="rtl">
                    <div class="renewal-items" style="background-color: #52c5f1; color: #ffff;">

                        <div class="title">
                            <h3><a style="color: #ffff;" href="#" dideo-checked="true">فرم تحصیل در دانشگاه
                                </a></h3>
                            <br><br>
                        </div>
                        <div class="content">
                            <p></p>
                        </div>
                        <div class="renewal-btn">
                            <a href="#" class="fresh-btn" dideo-checked="true">مشاهده</a>
                        </div>
                    </div> <!-- /.renewal-items -->
                </div> <!-- /.col- -->
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" dir="rtl">

                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->--}}{{--
    </section>
--}}
@endsection

@section('script')
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
