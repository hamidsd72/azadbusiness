{{--{{dd($villaCategories)}}--}}
@extends('user.layouts.newFront')
@section('head')

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg", 
            "source": {"concatemoji": "https:\/\/demo.phlox.pro\/architect\/wp-includes\/js\/wp-emoji-release.min.js"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0); 
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
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
    </style>
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-603 .elementor-element.elementor-element-d04506c small {
            color: var(--auxin-featured-color-3);
        }
        /* Start custom CSS for aux_copyright, class: .elementor-element-d04506c */
        @media only screen and (max-width: 1024px) and (min-width: 768px) {
            .elementor-603 .elementor-element.elementor-element-d04506c {
                order: 4;
            }
        }
        @media only screen and (max-width: 767px) and (min-width: 350px) {
            .elementor-603 .elementor-element.elementor-element-d04506c {
                order: 4;
            }
        }
        /* End custom CSS */
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('css/new/style.css')}}" />

    <style> .jivo-frame-visible {
            display: none !important;
        }
    </style>
    <!-- Chrome, Firefox OS and Opera -->
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <!-- end wp_head -->

    <style>
        @media screen and (min-width: 700px) {
            .aux-goto-top-btn {
                right: 120px;
                bottom: 52px;
            }
        }
    </style>

 
{{--    --}}
<style>
    .aux-text-inner h4{
    font-size: 22px !important;
    }
    .aux-text-inner{
        padding: 0 0 80px 0 !important;
    }
    .footer {
        background-color: black !important;
    }
    .footer .footer-widget-area {
        background-color: black !important;
    }
    .elementor-469 .elementor-element.elementor-element-221c1d23 > .elementor-background-overlay {
        background-color: black !important;
    }
    .elementor-469 .elementor-element.elementor-element-73d7ff24 .aux-modern-heading-divider {
        background-color: #ffc107 !important;
    }
    .elementor-469 .elementor-element.elementor-element-62d76cb3 .aux-ico-box {
        color: #ffc107 !important;
    }
    .elementor-469 .elementor-element.elementor-element-7b95b728 .aux-modern-heading-divider {
        background-color: #ffc107 !important;
    }
    .elementor-469 .elementor-element.elementor-element-38104591 .aux-ico-box {
        color: #ffc107 !important;
    }
    .elementor-469 .elementor-element.elementor-element-156d2c70>.elementor-widget-container {
        border-color: #ffc107 !important;
    }
    .footer .copyright-designer {
        background-color: black !important;
    }
    .dream-btn {
        background-color: #ffc107 !important;
        border-radius: 4px !important;
    }
    .elementor-469 .elementor-element.elementor-element-473d5cd3 .aux-modern-heading-divider {
        background-color: #ffc107 !important;
    }
    .elementor-469 .elementor-element.elementor-element-fa58128 input[type=submit] {
        border-color: #ffc107 !important;
        color: #ffc107 !important;
    }
</style>
@endsection
@section('main')
    <main id="main"
          class="aux-main aux-territory  aux-single aux-page aux-full-container no-sidebar aux-sidebar-style-border aux-user-entry">
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">
                <div id="primary" class="aux-primary">
                    <div class="content" role="main">
                        <article id="post-469" class="post-469 page type-page status-publish hentry">
                            <div data-elementor-type="wp-post" data-elementor-id="469" class="elementor elementor-469"
                                 data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        <div>
{{--                                            slider mobile--}}
                                        </div>
                                        <div class="slider_box" style="height: calc(100vh - 70px);margin-top:70px ;">
                                            @if(count($slider_desktop))
                                                @foreach($slider_desktop as $key => $slider)
                                                    @if($slider->photo)
                                                        <div
                                                            class="slide {{$key==0? 'active':'active'}}"
                                                            style="height: 100%;background-size: cover;background-position-y: bottom;background-image: url('{{url($slider->photo->path)}}')"  onclick="location.href='{{$slider->link}}';">
                                                            <div class="slider_tex_box">
                                                                <a href="{{$slider->link}}">
                                                                    {{-- <h3 style="writing-mode: vertical-rl;text-orientation: mixed;" class="slider_tex_titr">{{$slider->title}}</h3> --}}
                                                                </a>
                                                               {!! $slider->text !!}
                                                            </div>
                                                            </a>
                                                        </div>

                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>

                                        {{--<section data-export-id="41-469-72a0fdd6"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-72a0fdd6 elementor-section-stretched elementor-section-height-full aux-appear-watch-animation aux-fade-in-down elementor-section-items-stretch elementor-section-boxed elementor-section-height-default"
                                                 data-id="72a0fdd6" data-element_type="section"
                                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-21451e44"
                                                         data-id="21451e44" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-336eafb0 aux-appear-watch-animation aux-fade-in-right-2 elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="336eafb0" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h4
                                                                                    class="aux-modern-heading-primary">
                                                                                    خانه رویایی شما
                                                                                </h4>
                                                                                <h1 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">سرمایه گذاری مطمئن همراه با شاهان</span>
                                                                                </h1>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-cfdda51 elementor-widget__width-auto elementor-widget elementor-widget-aux_simple_svg"
                                                                     data-id="cfdda51" data-element_type="widget"
                                                                     data-widget_type="aux_simple_svg.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="aux-widget-container aux-simple-svg-container">
                                                                            <div class="aux-widget-container-inner">
                                                                                <div class="aux-the-svg">
                                                                                    <svg width="580" height="450">
                                                                                        <rect width="580" height="450"
                                                                                              style="fill:transparent; stroke:#52c5f1; stroke-width:50;fill-opacity:0;stroke-opacity:1"/>
                                                                                        Sorry, your browser does not
                                                                                        support inline SVG.
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>--}}
                                        <section style="margin-top: 25px !important; margin-bottom: 25px !important;" data-export-id="41-469-177d82f0"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-177d82f0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="177d82f0" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended"> 
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7bcab9b9"
                                                         data-id="7bcab9b9" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-4616b3cd aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="4616b3cd" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading" style="border-style: solid;border-color: #ffc107;padding-right: 10px;border-width: 1px;">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">
                                                                                    درباره ما
                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">{{$boutSlider->title}}</span>
                                                                                </h3>
                                                                                <div class=""></div>
                                                                                {{-- <div class="aux-modern-heading-divider"></div> --}}
                                                                                <div class="aux-modern-heading-description">
                                                                                    <p>{!!  $boutSlider->text!!}</p>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-627ab59 elementor-widget elementor-widget-aux_modern_button"
                                                                     data-id="627ab59" data-element_type="widget"
                                                                     data-widget_type="aux_modern_button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="aux-modern-button-wrapper aux-modern-button-align-left">
                                                                            {{-- <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-outline aux-icon-" --}}
                                                                            <a class="aux-modern-button aux-modern-button-md aux-modern-button-normal aux-modern-button-outline aux-icon-"
                                                                             style="border: 2px solid #ffc107;" href="{{route('user.about.show',['درباره-ما'])}}">
                                                                                <div class="aux-overlay"></div>
                                                                                <div class="aux-icon ">
                                                                                </div>

                                                                                    <div class="aux-text" >

                                                                                        <span class="aux-text-before" style="color: #ffc107;">  خواندن بیشتر</span>

                                                                                    </div>


                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aux-parallax-section elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-59212b16 aux-appear-watch-animation aux-fade-in-right-1"
                                                         data-id="59212b16" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div style="height: 100%;" class="elementor-element elementor-element-7114cf2f elementor-widget elementor-widget-aux_image"
                                                                     data-id="7114cf2f" data-element_type="widget"
                                                                     data-widget_type="aux_image.default" style="height: 100%">
                                                                    <div class="elementor-widget-container" style="height: 100%">
                                                                        <section
                                                                            class="widget-container aux-widget-image aux-alignnone aux-parent-aufc27c11e"
                                                                            style="height: 100%">
                                                                            <div class="aux-media-hint-frame " style="height: 100%">
                                                                                <div class="aux-media-image " style="height: 100%">
                                                                                    @if($boutSlider->pic != null && $boutSlider->pic != '')
                                                                                    <img loading="lazy" width="377"
                                                                                         src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                                         style="object-fit: cover;height: 100%"
                                                                                         class="aux-attachment aux-featured-image aux-attachment-id-10 aux-preload aux-blank"
                                                                                         alt="jason-briscoe-332508-unsplash-1-min"
                                                                                         data-ratio="0.54"
                                                                                         data-original-w="3648"
                                                                                         sizes="auto"
                                                                                         data-srcset="{{url($boutSlider->pic)}} 150w,{{url($boutSlider->pic)}} 300w,{{url($boutSlider->pic)}} 768w,{{url($boutSlider->pic)}} 1024w,{{url($boutSlider->pic)}} 377w"
                                                                                         data-src="{{url($boutSlider->pic)}}"/>

                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <!-- widget-container -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aux-parallax-section elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3cead55a aux-appear-watch-animation aux-fade-in-right-1"
                                                         data-id="3cead55a" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div style="height: 100%;" class="elementor-element elementor-element-7114cf2f elementor-widget elementor-widget-aux_image"
                                                                     data-id="7114cf2f" data-element_type="widget"
                                                                     data-widget_type="aux_image.default" style="height: 100%">
                                                                    <div class="elementor-widget-container" style="height: 100%">
                                                                        <section
                                                                                class="widget-container aux-widget-image aux-alignnone aux-parent-aufc27c11e"
                                                                                style="height: 100%">
                                                                            <div class="aux-media-hint-frame " style="height: 100%">
                                                                                <div class="aux-media-image " style="height: 100%">
                                                                                    @if($boutSlider->pic != null && $boutSlider->pic != '')
                                                                                        <img loading="lazy" width="377"
                                                                                             src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                                             style="object-fit: cover;height: 100%"
                                                                                             class="aux-attachment aux-featured-image aux-attachment-id-10 aux-preload aux-blank"
                                                                                             alt="jason-briscoe-332508-unsplash-1-min"
                                                                                             data-ratio="0.54"
                                                                                             data-original-w="3648"
                                                                                             sizes="auto"
                                                                                             data-srcset="{{url($boutSlider->pic)}} 150w,{{url($boutSlider->pic)}} 300w,{{url($boutSlider->pic)}} 768w,{{url($boutSlider->pic)}} 1024w,{{url($boutSlider->pic)}} 377w"
                                                                                             data-src="{{url($boutSlider->pic)}}"/>

                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <!-- widget-container -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section data-export-id="41-469-15ead971"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-15ead971 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="15ead971" data-element_type="section"
                                                 style="background: #ffc107 !important;" 
                                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6072147d"
                                                         data-id="6072147d" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-f377b38 aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="f377b38" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">
                                                                                    املاک
                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">بهترین ها را با ما تجربه کنید</span>
                                                                                </h3>
                                                                                <div class="aux-modern-heading-divider"></div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2d4f263 aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_recent_portfolios_grid"
                                                                     data-id="2d4f263" data-element_type="widget"
                                                                     data-settings="{&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns&quot;:&quot;4&quot;,&quot;columns_mobile&quot;:&quot;1&quot;}"
                                                                     data-widget_type="aux_recent_portfolios_grid.default">
                                                                    <div class="elementor-widget-container" style="margin: 0 !important;">
                                                                        <section
                                                                            class="widget-container aux-widget-recent-portfolios aux-parent-au8dffcdc7"
                                                                            style="">
                                                                            <div id="625128719ad43"
                                                                                 data-element-id="au8dffcdc7"
                                                                                 class="aux-portfolio-columns aux-ajax-view aux-isotope-animated aux-isotope-layout aux-layout-grid aux-no-gutter aux-row aux-match-height aux-de-col4 aux-tb-col2 aux-mb-col1 aux-lightbox-gallery"
                                                                                 data-lazyload="true" data-space="30"
                                                                                 data-pagination="true"
                                                                                 data-deeplink="true" data-slug=""
                                                                                 data-perpage="8" data-layout="fitRows"
                                                                                 data-reveal-transition-duration="600"
                                                                                 data-reveal-between-delay="60"
                                                                                 data-hide-transition-duration="600"
                                                                                 data-hide-between-delay="30"
                                                                                 data-num="" data-order="ASC"
                                                                                 data-orderby="date" data-taxonomy=""
                                                                                 data-n="ee76ce5350">
                                                                                <div class="aux-items-loading aux-loading-hide">
                                                                                    <div class="aux-loading-loop">
                                                                                        <svg class="aux-circle"
                                                                                             width="100%" height="100%"
                                                                                             viewBox="0 0 42 42">
                                                                                            <circle class="aux-stroke-bg"
                                                                                                    r="20" cx="21"
                                                                                                    cy="21"
                                                                                                    fill="none"></circle>
                                                                                            <circle class="aux-progress"
                                                                                                    r="20" cx="21"
                                                                                                    cy="21" fill="none"
                                                                                                    transform="rotate(-90 21 21)"></circle>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                @foreach($villaCategories->take(4) as $row)
                                                                                    <div class="aux-iso-item aux-loading aux-col">
                                                                                        <article
                                                                                            class="aux-item-overlay aux-hover-active aux-hover-twoway  post-141 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-interior-design">
                                                                                            <div class="entry-media aux-frame-boxed-darken aux-frame-zoom ">
                                                                                                <div class="aux-media-frame aux-media-image">
                                                                                                    <a href="{{url($row->pic)}}">
                                                                                                        <img
                                                                                                            style="height:250px;width: 100%;object-fit: cover"
                                                                                                            class="aux-attachment aux-featured-image attachment-440x585.2 aux-attachment-id-142 "
                                                                                                            alt="architecture-building-business-260931"
                                                                                                            data-ratio="0.75"
                                                                                                            data-original-w="1400"
                                                                                                            sizes="auto"
                                                                                                            data-srcset="{{url($row->pic)}}"
                                                                                                            data-src="{{url($row->pic)}}"/></a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="aux-overlay-content">
                                                                                                <div class="aux-portfolio-overlay-buttons">
                                                                                                    <div class="aux-hover-circle-plus aux-delay-2x">
                                                                                                        <a href="{{url($row->pic)}}"
                                                                                                           data-elementor-open-lightbox="no"
                                                                                                           data-original-width="1400"
                                                                                                           data-original-height="1036"
                                                                                                           data-caption="architecture-building-business-260931"
                                                                                                           class="aux-lightbox-btn ">
                                                                                                            <div class="aux-arrow-nav aux-round aux-hover-slide aux-outline aux-semi-small aux-white">
                                                                                                                <span class="aux-overlay"></span>
                                                                                                                <span class="aux-svg-arrow aux-medium-plus aux-white"></span>
                                                                                                                <span class="aux-hover-arrow aux-svg-arrow aux-medium-plus aux-black"></span>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="aux-arrow-post-link aux-hover-circle-link">
                                                                                                        <a href="{{route('user.project.show',[$row->id,$row->slug])}}">
                                                                                                            <div class="aux-arrow-nav aux-round aux-hover-slide aux-outline aux-semi-small aux-white">
                                                                                                                <span class="aux-overlay"></span>
                                                                                                                <span class="aux-svg-arrow aux-medium-right aux-white"></span>
                                                                                                                <span class="aux-hover-arrow aux-svg-arrow aux-medium-right aux-black"></span>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="entry-main">
                                                                                                    <header class="entry-header">
                                                                                                        <h3 class="entry-title aux-hover-move-up">
                                                                                                            <a href="{{route('user.project.show',[$row->id,$row->slug])}}">
                                                                                                                {{$row->name}}
                                                                                                            </a>
                                                                                                        </h3>
                                                                                                    </header>
                                                                                                    <div class="entry-info aux-hover-move-up aux-delay-1x">         <span class="entry-tax">
                                                                        <a href="{{--{{route('user.project.show',[$row->id,$row->slug])}}--}}#"
                                                                           title="View all posts in Interior Design"
                                                                           rel="category"></a>
                                                                        .</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </article>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                            <script type="text/javascript">var au8dffcdc7AjaxConfig = {
                                                                                    "title": "",
                                                                                    "cat": [],
                                                                                    "num": "",
                                                                                    "only_posts__in": "",
                                                                                    "include": "",
                                                                                    "exclude": "",
                                                                                    "posts_per_page": -1,
                                                                                    "offset": "",
                                                                                    "order_by": "date",
                                                                                    "order": "ASC",
                                                                                    "exclude_without_media": "yes",
                                                                                    "display_like": "no",
                                                                                    "deeplink": "no",
                                                                                    "use_ajax": "no",
                                                                                    "deeplink_slug": null,
                                                                                    "show_filters": "",
                                                                                    "filter_by": null,
                                                                                    "filter_style": null,
                                                                                    "filter_align": null,
                                                                                    "reveal_transition_duration": "600",
                                                                                    "reveal_between_delay": "60",
                                                                                    "hide_transition_duration": "600",
                                                                                    "hide_between_delay": "30",
                                                                                    "item_style": "overlay-lightbox-boxed",
                                                                                    "tile_style_pattern": "default",
                                                                                    "tiles_item_style": "overlay",
                                                                                    "entry_background_color": "",
                                                                                    "entry_border_color": "",
                                                                                    "paginate": "yes",
                                                                                    "perpage": "8",
                                                                                    "crop": true,
                                                                                    "display_title": "yes",
                                                                                    "show_info": "yes",
                                                                                    "display_read_more": false,
                                                                                    "image_aspect_ratio": "1.33",
                                                                                    "space": "30",
                                                                                    "desktop_cnum": "4",
                                                                                    "tablet_cnum": "2",
                                                                                    "phone_cnum": "1",
                                                                                    "layout": "grid",
                                                                                    "tag": "",
                                                                                    "extra_classes": "",
                                                                                    "extra_column_classes": "",
                                                                                    "custom_el_id": "",
                                                                                    "template_part_file": "recent-portfolio",
                                                                                    "extra_template_path": "\/home\/phlox\/public_html\/subs\/demo\/wp-content\/plugins\/auxin-portfolio\/public\/templates\/elements",
                                                                                    "universal_id": "au8dffcdc7",
                                                                                    "query_args": [],
                                                                                    "term": "",
                                                                                    "reset_query": true,
                                                                                    "use_wp_query": false,
                                                                                    "wp_query_args": [],
                                                                                    "custom_wp_query": "",
                                                                                    "loadmore_type": null,
                                                                                    "loadmore_label": null,
                                                                                    "loadmore_per_page": 12,
                                                                                    "term_field": "slug",
                                                                                    "base": "aux_recent_portfolios_grid",
                                                                                    "base_class": "aux-widget-recent-portfolios",
                                                                                    "paged": "",
                                                                                    "override_global_query": false,
                                                                                    "content": null,
                                                                                    "skip_wrappers": false,
                                                                                    "content_width": 2000,
                                                                                    "inview_transition": "none",
                                                                                    "inview_duration": "",
                                                                                    "inview_delay": "",
                                                                                    "inview_repeat": "no",
                                                                                    "inview_offset": "",
                                                                                    "called_from": "elementor"
                                                                                };
                                                                            </script>
                                                                        </section>
                                                                        <!-- widget-container -->
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-58e1232 elementor-widget elementor-widget-aux_modern_button"
                                                                     data-id="58e1232" data-element_type="widget"
                                                                     data-widget_type="aux_modern_button.default">
                                                                    <div class="elementor-widget-container" style="margin: 0 !important;">
                                                                        <div class="aux-modern-button-wrapper aux-modern-button-align-center">
                                                                            <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-right"
                                                                               href="{{route('user.estate.index')}}">
                                                                                <div class="aux-overlay"></div>
                                                                                <div class="aux-text">
                                                                                    <span class="aux-text-before">همه پروژه ها</span>
                                                                                </div>
                                                                                <div class="aux-icon ">
                                                                                    <i aria-hidden="true"
                                                                                       class="fas fa-angle-right"></i>
                                                                                </div>

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section data-export-id="41-469-1771708d"
                                                 style="padding: 0 !important;"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-1771708d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="1771708d" data-element_type="section"
                                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ce83905"
                                                         data-id="5ce83905" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-7b95b728 aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="7b95b728" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">

                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">خدمات ما</span>
                                                                                </h3>
                                                                                <div class="aux-modern-heading-divider"></div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <section data-export-id="41-469-a628135"
                                                                         style="margin-top: 0 !important;"
                                                                         class="elementor-section elementor-inner-section elementor-element elementor-element-a628135 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                         data-id="a628135" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-wide">
                                                                        <div class="elementor-row">
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c9fefb6 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="5c9fefb6"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.estate.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-62d76cb3 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="62d76cb3"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au7fc475cf"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                املاک
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-21181987 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="21181987"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.educational.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-38104591 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="38104591"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au93b7496e"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                امور تحصیلی
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c9fefb6 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="5c9fefb6"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.Legal.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-62d76cb3 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="62d76cb3"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au7fc475cf"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                امور حقوقی
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c9fefb6 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="5c9fefb6"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.franchise.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-62d76cb3 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="62d76cb3"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au7fc475cf"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                سرمایه گذاری
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-container elementor-column-gap-wide">
                                                                        <div class="elementor-row">

                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c9fefb6 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="5c9fefb6"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.franchise.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-62d76cb3 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="62d76cb3"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au7fc475cf"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                نیازمندی های ترکیه
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-21181987 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="21181987"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.events.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-38104591 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="38104591"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au93b7496e"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                رویداد ها و همایش ها
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c9fefb6 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="5c9fefb6"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.Export.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-62d76cb3 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="62d76cb3"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au7fc475cf"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-plane" aria-hidden="true"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                صادرات و واردات
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c9fefb6 aux-appear-watch-animation aux-scale-down"
                                                                                 data-id="5c9fefb6"
                                                                                 data-element_type="column">
                                                                                <a class="elementor-column-wrap elementor-element-populated" href="{{route('user.exchange.index')}}">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-62d76cb3 elementor-widget elementor-widget-aux_text"
                                                                                             data-id="62d76cb3"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_text.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                    class="widget-container aux-widget-text aux-parent-au7fc475cf"
                                                                                                    style="">
                                                                                                    <div class="aux-widget-advanced-text aux-wrap-style-simple aux-ico-pos-top aux-text-center aux-text-resp- aux-text-color-dark aux-text-widget-bg-center  ">
                                                                                                        <div class="aux-text-widget-header ">
                                                                                                            <div class="aux-ico-box aux-ico-large aux-ico-shape-circle aux-ico-clear ">
                                                                                                                <i class="fa fa-money" aria-hidden="true"></i>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="aux-text-inner aux-text-widget-content">
                                                                                                            <h4 class="col-title">
                                                                                                                صرافی
                                                                                                            </h4>
                                                                                                            <div class="widget-content">
                                                                                                                <p>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="aux-text-widget-footer">
                                                                                                        <div class="aux-border-shape-none ">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <!-- widget-container -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </section>
                                                                <div class="elementor-element elementor-element-8a52def elementor-widget elementor-widget-aux_modern_button"
                                                                     data-id="8a52def" data-element_type="widget"
                                                                     data-widget_type="aux_modern_button.default">
                                                                    <div class="elementor-widget-container" style="margin: 0 !important;">
                                                                        <div class="aux-modern-button-wrapper aux-modern-button-align-center">
                                                                            <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-right"
                                                                               href="services.html">
                                                                                <div class="aux-overlay"></div>
                                                                                <div class="aux-icon ">
                                                                                  {{--  <i aria-hidden="true"
                                                                                       class="fas fa-angle-right"></i>--}}
                                                                                </div>
                                                                                <div class="aux-text">
                                                                                  {{--  <span class="aux-text-before">View all services</span>--}}
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                      {{--  <section data-export-id="41-469-28194ed6"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-28194ed6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="28194ed6" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c4247c9"
                                                         data-id="c4247c9" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-302ed56f aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="302ed56f" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">
                                                                                    CURRENT PROJECT
                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">The lodge woonden In the london</span>
                                                                                </h3>
                                                                                <div class="aux-modern-heading-divider"></div>
                                                                                <div class="aux-modern-heading-description">
                                                                                    A wonderful serenity has taken
                                                                                    possession of my entire soul,<br>
                                                                                    like these sweet mornings of spring
                                                                                    which I enjoy with my <br> whole
                                                                                    heart.A wonderful serenity has taken
                                                                                    possession of my <br> entire soul,
                                                                                    like these sweet
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-1f18e93 elementor-widget elementor-widget-aux_modern_button"
                                                                     data-id="1f18e93" data-element_type="widget"
                                                                     data-widget_type="aux_modern_button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="aux-modern-button-wrapper aux-modern-button-align-left">
                                                                            <a class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-"
                                                                               href="#">
                                                                                <div class="aux-overlay"></div>
                                                                                <div class="aux-icon ">
                                                                                </div>
                                                                                <div class="aux-text">
                                                                                    <span class="aux-text-before">Start new project</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aux-parallax-section elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-3fb0f77a aux-appear-watch-animation aux-fade-in-left"
                                                         data-id="3fb0f77a" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-6d43092 elementor-widget elementor-widget-aux_image"
                                                                     data-id="6d43092" data-element_type="widget"
                                                                     data-widget_type="aux_image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section
                                                                            class="widget-container aux-widget-image aux-alignnone aux-parent-audd8fac8a"
                                                                            style="">
                                                                            <div class="aux-media-hint-frame ">
                                                                                <div class="aux-media-image ">
                                                                                    <img loading="lazy" width="917"
                                                                                         height="760"
                                                                                         src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                                         class="aux-attachment aux-featured-image aux-attachment-id-13 aux-preload aux-blank"
                                                                                         alt="female-architect-using-drawing-compass-PZNMCEU-min"
                                                                                         data-ratio="1.21"
                                                                                         data-original-w="5472"
                                                                                         sizes="auto"
                                                                                         data-srcset="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/female-architect-using-drawing-compass-PZNMCEU-min-150x124.jpg 150w,https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/female-architect-using-drawing-compass-PZNMCEU-min-300x249.jpg 300w,https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/female-architect-using-drawing-compass-PZNMCEU-min-768x637.jpg 768w,https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/female-architect-using-drawing-compass-PZNMCEU-min-1024x849.jpg 1024w,https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/female-architect-using-drawing-compass-PZNMCEU-min-917x760.jpg 917w"
                                                                                         data-src="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/female-architect-using-drawing-compass-PZNMCEU-min-917x760.jpg"/>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <!-- widget-container -->
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-d063dfd elementor-widget__width-auto elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="d063dfd" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">
                                                                                    17
                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">Years</span><span
                                                                                        class="aux-head-highlight">Experience</span><span
                                                                                        class="aux-head-after">Working</span>
                                                                                </h3>
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
                                        <section data-export-id="41-469-21de5022"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-21de5022 elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="21de5022" data-element_type="section"
                                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5c7ab47"
                                                         data-id="5c7ab47" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-2f8a034b aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="2f8a034b" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">
                                                                                    OUR CLIENTS
                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">We turn ideas into  works of art</span>
                                                                                </h3>
                                                                                <div class="aux-modern-heading-divider"></div>
                                                                                <div class="aux-modern-heading-description">
                                                                                    <p>A wonderful serenity has taken
                                                                                        possession of my entire soul,
                                                                                        like these sweet mornings of
                                                                                        spring.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aux-parallax-section elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-24e3ee85"
                                                         data-id="24e3ee85" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <section data-export-id="41-469-3afcd47a"
                                                                         class="elementor-section elementor-inner-section elementor-element elementor-element-3afcd47a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                         data-id="3afcd47a" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2b54bd04"
                                                                                 data-id="2b54bd04"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-4a5e2673 aux-appear-watch-animation aux-fade-in-left-1 elementor-widget elementor-widget-image"
                                                                                             data-id="4a5e2673"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="133"
                                                                                                         height="39"
                                                                                                         src="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/client-3@2x.png"
                                                                                                         class="attachment-large size-large"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-237f518a"
                                                                                 data-id="237f518a"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-76dc7a76 aux-appear-watch-animation aux-fade-in-left-1 elementor-widget elementor-widget-image"
                                                                                             data-id="76dc7a76"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="96"
                                                                                                         height="68"
                                                                                                         src="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/client-4@2x.png"
                                                                                                         class="attachment-large size-large"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-33c74fd1 aux-appear-watch-animation aux-fade-in-left-1"
                                                                                 data-id="33c74fd1"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-94cc989 elementor-widget elementor-widget-image"
                                                                                             data-id="94cc989"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="126"
                                                                                                         height="50"
                                                                                                         src="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/client-5@2x.png"
                                                                                                         class="attachment-large size-large"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <section data-export-id="41-469-11009271"
                                                                         class="elementor-section elementor-inner-section elementor-element elementor-element-11009271 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                         data-id="11009271" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-713df1cc"
                                                                                 data-id="713df1cc"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-188444c2 aux-appear-watch-animation aux-fade-in-left-1 elementor-widget elementor-widget-image"
                                                                                             data-id="188444c2"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="102"
                                                                                                         height="40"
                                                                                                         src="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/client-1@2x-1-1.png"
                                                                                                         class="attachment-large size-large"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2e6f1e33"
                                                                                 data-id="2e6f1e33"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-1b6ee8f8 aux-appear-watch-animation aux-fade-in-left-1 elementor-widget elementor-widget-image"
                                                                                             data-id="1b6ee8f8"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="109"
                                                                                                         height="66"
                                                                                                         src="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/client-9@2x-1-1.png"
                                                                                                         class="attachment-large size-large"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c6369b"
                                                                                 data-id="c6369b"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-6cd3a8f4 aux-appear-watch-animation aux-fade-in-left-1 elementor-widget elementor-widget-image"
                                                                                             data-id="6cd3a8f4"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="128"
                                                                                                         height="33"
                                                                                                         src="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/client-7@2x.png"
                                                                                                         class="attachment-large size-large"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>
                                                                                                </div>
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
                                                </div>
                                            </div>
                                        </section>--}}
                                        <section data-export-id="41-469-5322627d"
                                                 style="padding: 0 20px !important;"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-5322627d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="5322627d" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default" >
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4ff489ae"
                                                         data-id="4ff489ae" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-73d7ff24 aux-appear-watch-animation aux-fade-in-up elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="73d7ff24" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">

                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">تیم آزاد بیزینس</span>
                                                                                </h3>
                                                                                <div class="aux-modern-heading-divider"></div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <section data-export-id="41-469-a54575e"
                                                                         style="margin-top: 0 !important;"
                                                                         class="elementor-section elementor-inner-section elementor-element elementor-element-a54575e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                         data-id="a54575e" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-wide">
                                                                        <div class="elementor-row">
                                                                            @foreach($teams as $team)
                                                                                <div class="aux-parallax-section elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2c40d157"
                                                                                     data-id="2c40d157"
                                                                                     data-element_type="column">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-0c56adb aux-appear-watch-animation aux-scale-down elementor-widget elementor-widget-aux_staff"
                                                                                                 data-id="0c56adb"
                                                                                                 data-element_type="widget"
                                                                                                 data-widget_type="aux_staff.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <section
                                                                                                        class="aux-wrap-style-simple widget-container aux-widget-staff aux-parent-au3792dd2a"
                                                                                                        style="">
                                                                                                        <div class="aux-staff-container aux-staff-pos-top aux-staff-text-left aux-staff-text-dark ">
                                                                                                            <div class="aux-staff-header aux-staff-img-rect">
                                                                                                                <div class="aux-media-image">
                                                                                                                    <img loading="lazy"
                                                                                                                         width="828"
                                                                                                                         height="817"
                                                                                                                         src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                                                                         class=" aux-preload aux-blank"
                                                                                                                         alt="getting-your-house-plan-ready-PKGFK85-min"
                                                                                                                         data-ratio="1.01"
                                                                                                                         data-original-w="4200"
                                                                                                                         sizes="auto"
                                                                                                                         data-srcset="{{url($team->pic)}} 150w,{{url($team->pic)}} 300w,{{url($team->pic)}} 768w,{{url($team->pic)}} 1024w,{{url($team->pic)}} 828w"
                                                                                                                         data-src="{{url($team->pic)}}"/>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="aux-staff-content">
                                                                                                                <h4 class="col-title">
                                                                                                                    {{$team->name}}
                                                                                                                </h4>
                                                                                                                <h5 class="col-subtitle">
                                                                                                                    {{$team->text}}
                                                                                                                </h5>
                                                                                                                <div class="aux-staff-footer aux-small aux-horizontal">

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </section>
                                                                                                    <!-- widget-container -->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section data-export-id="41-469-221c1d23"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-221c1d23 elementor-section-stretched elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="221c1d23" data-element_type="section"
                                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7b3bb153 aux-appear-watch-animation aux-fade-in-up"
                                                         data-id="7b3bb153" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-473d5cd3 elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="473d5cd3" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner">
                                                                                <h2
                                                                                    class="aux-modern-heading-primary">
                                                                                    تماس با ما
                                                                                </h2>
                                                                                <h3 class="aux-modern-heading-secondary">
                                                                                    <span class="aux-head-before">فرم تماس با ما</span>
                                                                                </h3>
                                                                                <div class="aux-modern-heading-divider"></div>
                                                                                <div class="aux-modern-heading-description">
                                                                                    <p>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-fa58128 elementor-widget elementor-widget-aux_contact_form"
                                                                     data-id="fa58128" data-element_type="widget"
                                                                     data-widget_type="aux_contact_form.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section
                                                                            class="widget-container aux-widget-contact-form aux-parent-au5893b3b5"
                                                                            style="">
                                                                            <div class="aux-col-wrapper aux-no-gutter">
                                                                                <!-- @TODO - The output for element here -->
                                                                                <div role="form" class="wpcf7"
                                                                                     id="wpcf7-f95-p469-o1" lang="en-US"
                                                                                     dir="ltr">
                                                                                    <div class="screen-reader-response">
                                                                                        <p role="status"
                                                                                           aria-live="polite"
                                                                                           aria-atomic="true"></p>
                                                                                        <ul></ul>
                                                                                    </div>
                                                                                    <form action="#"
                                                                                          method="post"
                                                                                          class="wpcf7-form init"
                                                                                          novalidate="novalidate"
                                                                                          data-status="init">
                                                                                        <div style="display: none;">
                                                                                            <input type="hidden"
                                                                                                   name="_wpcf7"
                                                                                                   value="95"/>
                                                                                            <input type="hidden"
                                                                                                   name="_wpcf7_version"
                                                                                                   value="5.5.6"/>
                                                                                            <input type="hidden"
                                                                                                   name="_wpcf7_locale"
                                                                                                   value="en_US"/>
                                                                                            <input type="hidden"
                                                                                                   name="_wpcf7_unit_tag"
                                                                                                   value="wpcf7-f95-p469-o1"/>
                                                                                            <input type="hidden"
                                                                                                   name="_wpcf7_container_post"
                                                                                                   value="469"/>
                                                                                            <input type="hidden"
                                                                                                   name="_wpcf7_posted_data_hash"
                                                                                                   value=""/>
                                                                                        </div>
                                                                                        <div class="aux-arch-form-inputs">
                                                                  <span class="wpcf7-form-control-wrap your-name"><input
                                                                          type="text"
                                                                          name="your-name"
                                                                          value=""
                                                                          size="40"
                                                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                          aria-required="true"
                                                                          aria-invalid="false"
                                                                          placeholder="نام شما*"/></span>
                                                                                            <span class="wpcf7-form-control-wrap your-email"><input
                                                                                                    type="email"
                                                                                                    name="your-email"
                                                                                                    value=""
                                                                                                    size="40"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="ایمیل*"/></span>
                                                                                            <span class="wpcf7-form-control-wrap tel-136"><input
                                                                                                    type="tel"
                                                                                                    name="tel-136"
                                                                                                    value=""
                                                                                                    size="40"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="شماره تماس*"/></span>
                                                                                        </div>
                                                                                        <div class="aux-arch-form-textarea">
                                                                  <span class="wpcf7-form-control-wrap your-message"><textarea
                                                                          name="your-message"
                                                                          cols="40"
                                                                          rows="10"
                                                                          class="wpcf7-form-control wpcf7-textarea"
                                                                          aria-invalid="false"
                                                                          style="text-align: right"
                                                                          placeholder="متن پیام"></textarea></span>
                                                                                        </div>
                                                                                        <input type="submit"
                                                                                               value="ارسال"
                                                                                               class="wpcf7-form-control has-spinner wpcf7-submit"/>
                                                                                        <div class="wpcf7-response-output"
                                                                                             aria-hidden="true"></div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <!-- aux-col-wrapper -->
                                                                        </section>
                                                                        <!-- widget-container -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aux-parallax-section elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-76c7601f"
                                                         data-id="76c7601f" data-element_type="column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aux-parallax-section elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4599d7c7 aux-appear-watch-animation aux-fade-in-up-1"
                                                         data-id="4599d7c7" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-156d2c70 elementor-widget elementor-widget-text-editor"
                                                                     data-id="156d2c70" data-element_type="widget"
                                                                     data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix" dir="ltr">
                                                                            <div>+90 531 496 69 10</div>
                                                                            <div>+90 212 731 31 31</div>
                                                                            <p><span class="margin"><br/><a
                                                                                        href="#"
                                                                                        class="__cf_email__"
                                                                                        data-cfemail="056c6b636a45556d696a7d"></a>info@azadbusiness.com<br/></span><br/><span
                                                                                    class="margin"><br/>Zafer Mah. Deniz Gezmiş CAD. No /4 Esenyurt B.B.13 D:11, Esenyurt , İstanbul<br/></span><br/><span
                                                                                    class="margin"><br/></span>
                                                                            </p>
                                                                        </div>
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
                        </article>
                        <!-- end article -->
                        <div class="clear"></div>
                        <!-- You can start editing here. -->
                    </div>
                    <!-- end content -->
                </div>
                <!-- end primary -->
            </div>
            <!-- end container -->
        </div>
        <!-- end wrapper -->
    </main>
    <!-- end main -->
@endsection

