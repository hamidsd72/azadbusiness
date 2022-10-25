{{--{{dd($items)}}--}}
@extends('user.layouts.newFront')
@section('head')
    <script data-cfasync="false" id="ao_optimized_gfonts_config">WebFontConfig = {
            google: {families: ["Poppins:400,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200,100italic,100", "Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Roboto Slab:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Poppins:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Raleway:500"]},
            classes: false,
            events: false,
            timeout: 1500
        };</script> 
    
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

    <link rel='stylesheet' id='auxin-custom-css'
          href='{{asset('new/css/autoptimize_single_5ce50ef6801bee8269bc4ecfb73dd9b1.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-post-602-css'
          href='{{asset('new/css/autoptimize_single_093feae604d88dd1bc68cec601ab2458.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-post-603-css'
          href='{{asset('new/css/autoptimize_single_4ef8001687261a7cf173df1c924a4e38.css')}}'
          type='text/css' media='all'/>
 {{--   <script type='text/javascript' src='https://demo.phlox.pro/architect/wp-includes/js/jquery/jquery.min.js'
            id='jquery-core-js'></script>--}}
    <script type='text/javascript' id='auxin-modernizr-js-extra'>
        /* <![CDATA[ */
        var auxin = {
            "ajax_url": "https:\/\/demo.phlox.pro\/architect\/wp-admin\/admin-ajax.php",
            "is_rtl": "",
            "is_reponsive": "1",
            "is_framed": "",
            "frame_width": "20",
            "wpml_lang": "en",
            "uploadbaseurl": "https:\/\/demo.phlox.pro\/architect\/wp-content\/uploads\/sites\/41"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' id='auxin-modernizr-js-before'>
        /* < ![CDATA[ */
        function auxinNS(n) {
            for (var e = n.split("."), a = window, i = "", r = e.length, t = 0; r > t; t++) "window" != e[t] && (i = e[t], a[i] = a[i] || {}, a = a[i]);
            return a;
        }

        /* ]]> */
    </script>
    <link rel="https://api.w.org/" href="https://demo.phlox.pro/architect/wp-json/"/>
    <link rel="alternate" type="application/json" href="https://demo.phlox.pro/architect/wp-json/wp/v2/pages/57"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.phlox.pro/architect/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://demo.phlox.pro/architect/wp-includes/wlwmanifest.xml"/>
    <link rel='shortlink' href='https://demo.phlox.pro/architect/?p=57'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://demo.phlox.pro/architect/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.phlox.pro%2Farchitect%2Fprojects%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://demo.phlox.pro/architect/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.phlox.pro%2Farchitect%2Fprojects%2F&#038;format=xml"/>

    <style> .jivo-frame-visible {
            display: none !important;
        } </style><!-- Chrome, Firefox OS and Opera -->
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <link rel="icon"
          href="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/cropped-fav-icon-32x32.png"
          sizes="32x32"/>
    <link rel="icon"
          href="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/cropped-fav-icon-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon"
          href="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/cropped-fav-icon-180x180.png"/>
    <style type="text/css" id="wp-custom-css">
        .aux-arch-home-port .aux-frame-boxed-darken::after {
            background-color: #fea75e;
            top: 35px;
            bottom: 35px;
            right: 25px;
            left: 25px;
        }

        .aux-arch-home-port .aux-portfolio-columns .entry-main {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column-reverse;
        }

        .aux-arch-home-port .aux-portfolio-columns .aux-overlay-content .entry-header {
            flex: 0 0 100%;
            padding: 0 44px 35px 44px;
            text-align: left;
        }

        .aux-arch-home-port .aux-portfolio-columns .aux-overlay-content .entry-info {
            flex: 0 0 100%;
            padding: 0 44px 3px 44px;
            margin-bottom: 0;
            text-align: left;
        }

        .aux-arch-home-port .aux-portfolio-columns .aux-overlay-content .entry-tax a {
            color: rgba(255, 255, 255, 0.8);
        }

        .aux-arch-home-port .aux-portfolio-columns .aux-overlay-content {
            top: auto;
            bottom: 0;
            transform: none;
            padding: 35px 25px;
            height: 100%;
        }

        .aux-arch-home-port .aux-portfolio-columns .aux-overlay-content .entry-main {
            margin-bottom: 0;
            position: absolute;
            left: 25px;
            right: 25px;
            bottom: 35px;
        }

        .aux-arch-home-port .aux-hover-active:hover .aux-frame-boxed-darken::after {
            opacity: 0.95;
        }

        .aux-arch-home-port .aux-arrow-post-link {
            display: none !important;
        }

        .aux-arch-home-port .aux-arrow-nav.aux-round {
            box-shadow: none;
        }

        .aux-arch-home-port .aux-pagination {
            display: none;
        }        </style>
    <script data-cfasync="false" id="ao_optimized_gfonts_webfontloader">(function () {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();</script></head>
    <style>
        @media screen and (min-width: 700px) {
            .aux-goto-top-btn {
                right: 120px;
                bottom: 52px;
            }
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


                        <article id="post-57" class="post-57 page type-page status-publish hentry">

                            <div data-elementor-type="wp-post" data-elementor-id="57" class="elementor elementor-57"
                                 data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        <section data-export-id="41-57-73f19eb"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-73f19eb elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                                                 data-id="73f19eb" data-element_type="section"
                                                 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2f5d6eb aux-appear-watch-animation aux-fade-in-right"
                                                         data-id="2f5d6eb" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-59a1228 elementor-widget elementor-widget-aux_modern_heading"
                                                                     data-id="59a1228" data-element_type="widget"
                                                                     data-widget_type="aux_modern_heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section class="aux-widget-modern-heading">
                                                                            <div class="aux-widget-inner"><h2
                                                                                        class="aux-modern-heading-primary">
                                                                                    پروژه ها</h2></div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-0e142af elementor-widget elementor-widget-aux_breadcrumbs"
                                                                     data-id="0e142af" data-element_type="widget"
                                                                     data-widget_type="aux_breadcrumbs.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="aux-elementor-breadcrumbs"><p
                                                                                    class="aux-breadcrumbs"><span
                                                                                        class="aux-breadcrumb-sep breadcrumb-icon auxicon-chevron-right-1"></span><span><a
                                                                                            href="{{url('/')}}"
                                                                                            title="Home">خانه</a></span>
                                                                                <span  class="aux-breadcrumb-sep breadcrumb-icon auxicon-chevron-right-1"></span><span><a href="{{route('user.estate.index')}}">املاک</a></span>

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
                                        {{--<section data-export-id="41-57-749adada"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-749adada elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="749adada" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-69dbfc3f"
                                                         data-id="69dbfc3f" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <section data-export-id="41-57-4b63b8b9"
                                                                         class="elementor-section elementor-inner-section elementor-element elementor-element-4b63b8b9 aux-appear-watch-animation aux-fade-in-up elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                         data-id="4b63b8b9" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="aux-parallax-section elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d3536a"
                                                                                 data-id="d3536a"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-7c7fbc54 elementor-widget elementor-widget-aux_modern_heading"
                                                                                             data-id="7c7fbc54"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="aux_modern_heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <section
                                                                                                        class="aux-widget-modern-heading">
                                                                                                    <div class="aux-widget-inner">
                                                                                                        <h2 class="aux-modern-heading-primary">
                                                                                                            OUR
                                                                                                            PROJECTS</h2>
                                                                                                        <h3 class="aux-modern-heading-secondary">
                                                                                                            <span class="aux-head-before">Best and modern buildings</span>
                                                                                                        </h3>
                                                                                                        <div class="aux-modern-heading-divider"></div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="aux-parallax-section elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2404318c"
                                                                                 data-id="2404318c"
                                                                                 data-element_type="column">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-7fd7456 elementor-widget elementor-widget-heading"
                                                                                             data-id="7fd7456"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <p class="elementor-heading-title elementor-size-default">
                                                                                                    A wonderful serenity
                                                                                                    has taken possession
                                                                                                    of my entire soul,
                                                                                                    like these sweet
                                                                                                    mornings of spring
                                                                                                    which I enjoy with
                                                                                                    my whole heart.A
                                                                                                    wonderful serenity
                                                                                                    has taken possession
                                                                                                    of my entire soul,
                                                                                                    like these sweet
                                                                                                    mornings of spring
                                                                                                    which I enjoy with
                                                                                                    my whole heart.</p>
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
                                        <section data-export-id="41-57-9646ec5"
                                                 class="elementor-section elementor-top-section elementor-element elementor-element-9646ec5 aux-appear-watch-animation aux-fade-in-up elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                 data-id="9646ec5" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-81051d2"
                                                         data-id="81051d2" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-3b7b21f aux-arch-home-port elementor-widget elementor-widget-aux_recent_portfolios_grid"
                                                                     data-id="3b7b21f" data-element_type="widget"
                                                                     data-settings="{&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns&quot;:&quot;4&quot;,&quot;columns_mobile&quot;:&quot;1&quot;}"
                                                                     data-widget_type="aux_recent_portfolios_grid.default">
                                                                    <div class="elementor-widget-container">
                                                                        <section
                                                                                class="widget-container aux-widget-recent-portfolios aux-parent-au25b06893"
                                                                                style="">
                                                                            <div id="62519e3a21d00"
                                                                                 data-element-id="au25b06893"
                                                                                 class="aux-portfolio-columns aux-ajax-view aux-isotope-animated aux-isotope-layout aux-layout-grid aux-no-gutter aux-row aux-match-height aux-de-col4 aux-tb-col2 aux-mb-col1 aux-lightbox-gallery"
                                                                                 data-lazyload="true" data-space="30"
                                                                                 data-pagination="true"
                                                                                 data-deeplink="true" data-slug=""
                                                                                 data-perpage="200" data-layout="fitRows"
                                                                                 data-reveal-transition-duration="600"
                                                                                 data-reveal-between-delay="60"
                                                                                 data-hide-transition-duration="600"
                                                                                 data-hide-between-delay="30"
                                                                                 data-num="" data-order="ASC"
                                                                                 data-orderby="date" data-taxonomy=""
                                                                                 data-n="6624785d33">
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
                                                                                @if(count($items) == 0)

                                                                                    <h3 style="    text-align: center;    padding: 50px 0;">
                                                                                        موردی یافت نشد</h3>

                                                                                @endif

                                                                                @foreach($items as $item)

                                                                                    <div class="aux-iso-item aux-loading aux-col">
                                                                                        <article
                                                                                                class="aux-item-overlay aux-hover-active aux-hover-twoway  post-141 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-interior-design">
                                                                                            <div class="entry-media aux-frame-boxed-darken aux-frame-zoom ">
                                                                                                <div class="aux-media-frame aux-media-image">
                                                                                                    <a      href="{{route('user.project.show',[$item->id,$item->slug])}}">
                                                                                                        <img
                                                                                                                style="height: 250px;object-fit: cover"

                                                                                                                class="aux-attachment aux-featured-image attachment-440x585.2 aux-attachment-id-142 "
                                                                                                                alt="architecture-building-business-260931"
                                                                                                                data-ratio="0.75"
                                                                                                                data-original-w="1400"
                                                                                                                sizes="auto"
                                                                                                                data-srcset="{{url($item->pic)}}"
                                                                                                                data-src="{{url($item->pic)}}"/></a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="aux-overlay-content">
                                                                                                <div class="aux-portfolio-overlay-buttons">
                                                                                                    <div class="aux-hover-circle-plus aux-delay-2x">
                                                                                                        <a href="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/architecture-building-business-260931.jpg"
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
                                                                                                        <a href="{{route('user.project.show',[$item->id,$item->slug])}}">
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
                                                                                                            <a href="{{route('user.project.show',[$item->id,$item->slug])}}">
                                                                                                                {{$item->name}} </a>
                                                                                                        </h3>
                                                                                                    </header>
                                                                                                    <div class="entry-info aux-hover-move-up aux-delay-1x">
                                        <span class="entry-tax">
                                                                                        <a href="{{route('user.project.show',[$item->id,$item->slug])}}"
                                                                                           title="View all posts in Interior Design"
                                                                                           rel="category">{{$item->price}} {{$item->price_type=='lir'?' لیر':' دلار'}}</a>
                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </article>
                                                                                    </div>

                                                                                @endforeach


                                                                            </div>
                                                                            <script type="text/javascript">var au25b06893AjaxConfig = {
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
                                                                                    "perpage": "100",
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
                                                                                    "universal_id": "au25b06893",
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
                                                                                };</script>
                                                                        </section><!-- widget-container --></div>
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

@endsection
