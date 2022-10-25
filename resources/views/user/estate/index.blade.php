{{--{{dd($estate)}}--}}
@extends('user.layouts.newFront')
@section('head')



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
        .page-prime-bg-overlay-effect {
            background-color: black !important;
        }
        .page-prime-bg {
            background-color: black !important;
        }
        .new-post-btn {
            background-color: #ffc107 !important;
            padding: 10px 24px;
            color: white;
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


    <script type='text/javascript' src='https://demo.phlox.pro/architect/wp-includes/js/jquery/jquery.min.js'
            id='jquery-core-js'></script>


    <style> .jivo-frame-visible {
            display: none !important;
        } </style><!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1bb0ce"/>
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1bb0ce"/>
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

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
    <meta name="msapplication-TileImage"
          content="https://demo.phlox.pro/architect/wp-content/uploads/sites/41/2018/06/cropped-fav-icon-270x270.png"/>
    <!-- end wp_head -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/A.style.css.pagespeed.cf.YQ-R129f7j.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/new/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.css" integrity="sha512-MKxcSu/LDtbIYHBNAWUQwfB3iVoG9xeMCm32QV5hZ/9lFaQZJVaXfz9aFa0IZExWzCpm7OWvp9zq9gVip/nLMg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('main-nav')
    <li class="active"><a href="{{url('/')}}">{{__('header.menu.home')}}</a></li>
    @foreach($Menus as $index=>$menu)
        @if($menu->childs()->first())

            <li><a href="{{route('user.estate.show',[$menu->slug])}}">{{$menu->title}}</a>
                <ul class="sub-nav">
                    @foreach($menu->childs()->get() as $index=>$menu_2)
                        @if($menu_2->childs()->first())
                            <li><a href="{{route('user.estate.show',[$menu_2->slug])}}">{{$menu_2->title}}</a>
                                <ul class="sub-nav">
                                    @foreach($menu_2->childs()->get() as $index=>$menu_3)
                                        <li><a  href="{{route('user.estate.show',[$menu_3->slug])}}">{{$menu_3->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="{{route('user.estate.show',[$menu_2->slug])}}">{{$menu_2->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @else
            <li><a href="{{route('user.estate.show',[$menu->slug])}}">{{$menu->title}}</a></li>
        @endif

    @endforeach

@endsection

@section('main')


    <header id="site-title" class="page-title-section" style="margin-top: 60px;">

        <div class="page-header aux-wrapper aux-boxed-container aux-top aux-dark" style="display:block; ">


            <div class="aux-container">

                <div class="aux-page-title-entry">
                    <div class="aux-page-title-box">
                        <section class="page-title-group">
                            <h1 class="page-title">دسته بندی پروژه ها</h1>
                        </section>

                    </div>
                </div><!-- end title entry -->
            </div>


        </div><!-- end page header -->
    </header> <!-- end page header -->


   <section class="properties page-prime-bg" id="slide" style="z-index: 0;">
        <div class="page-prime-bg-overlay-effect"></div>
        <div class="container">
            @include('user.estate.filter')
        </div> <!-- /.container -->
        <!-- Property Search Area Start -->
        <!-- Property Search Area Start -->

    <!-- Property Search Area End -->


        <!-- Property Search Area End -->
    </section>

    <main id="main"
          class="aux-main aux-territory aux-template-type-grid-1 aux-archive aux-content-top-margin list-portfolio no-sidebar aux-sidebar-style-border aux-user-entry">
        <div class="aux-wrapper">
            <div class="aux-container aux-fold clearfix">

                <div id="primary" class="aux-primary">
                    <div class="content" role="main" data-target="archive">


                        <section class="widget-container aux-widget-recent-portfolios aux-parent-au93230913" style="">
                            <div id="625185f0ae1ae" data-element-id="au93230913"
                                 class="aux-portfolio-columns aux-ajax-view aux-isotope-animated aux-isotope-layout aux-layout-grid aux-no-gutter aux-row aux-match-height aux-de-col4 aux-tb-col4 aux-mb-col1"
                                 data-lazyload="true" data-space="30" data-pagination="false" data-deeplink="false"
                                 data-slug="portfolio-625185f0ae175" data-perpage="" data-layout="fitRows"
                                 data-reveal-transition-duration="600" data-reveal-between-delay="60"
                                 data-hide-transition-duration="600" data-hide-between-delay="30" data-num="12"
                                 data-order="desc" data-orderby="menu_order date" data-taxonomy="" data-n="6624785d33">
                                <div class="aux-items-loading aux-loading-hide">
                                    <div class="aux-loading-loop">
                                        <svg class="aux-circle" width="100%" height="100%" viewBox="0 0 42 42">
                                            <circle class="aux-stroke-bg" r="20" cx="21" cy="21" fill="none"></circle>
                                            <circle class="aux-progress" r="20" cx="21" cy="21" fill="none"
                                                    transform="rotate(-90 21 21)"></circle>
                                        </svg>
                                    </div>
                                </div>
                                @if($estate->photo_category_1 != null || $estate->photo_category_1 != '')
                                <div class="aux-iso-item aux-loading aux-col">
                                    <article
                                            class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                        <div class="">


                                            <div class="entry-media ">
                                                <h3 class="entry-title">
                                                    <a href="{{route('user.estate.search',['project_type'=>1])}}">

                                                        {{$estate->title_category_1}}


                                                    </a>
                                                </h3>
                                                <div class="aux-media-frame aux-media-image"><a
                                                            href="{{route('user.estate.search',['project_type'=>5])}}">
                                                        <img
                                                                style="height: 250px;object-fit: cover"

                                                                class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                alt="architectural-design-architecture-blue-534119"
                                                                data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                data-srcset="{{url($estate->photo_category_1)}}"
                                                                data-src="{{url($estate->photo_category_1)}}"/></a>
                                                </div>
                                            </div>

                                        </div>

                                    </article>
                                </div>
                                @endif
                                @if($estate->photo_category_2 != null || $estate->photo_category_2 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media ">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>1])}}">

                                                            {{$estate->title_category_2}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>1])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_2)}}"
                                                                    data-src="{{url($estate->photo_category_2)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_3 != null || $estate->photo_category_3 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media ">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>6])}}">

                                                            {{$estate->title_category_3}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>6])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_3)}}"
                                                                    data-src="{{url($estate->photo_category_3)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>


                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_4 != null || $estate->photo_category_4 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media ">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>1])}}">

                                                            {{$estate->title_category_4}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>2])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_4)}}"
                                                                    data-src="{{url($estate->photo_category_4)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_5 != null || $estate->photo_category_5 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media ">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>1])}}">

                                                            {{$estate->title_category_5}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>7])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_5)}}"
                                                                    data-src="{{url($estate->photo_category_5)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_6 != null || $estate->photo_category_6 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media ">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>8])}}">

                                                            {{$estate->title_category_6}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>8])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_6)}}"
                                                                    data-src="{{url($estate->photo_category_6)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_7 != null || $estate->photo_category_7 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">

                                                <div class="entry-media">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>10])}}">

                                                            {{$estate->title_category_7}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>1])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_7)}}"
                                                                    data-src="{{url($estate->photo_category_7)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>


                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_8 != null || $estate->photo_category_8 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>6])}}">

                                                            {{$estate->title_category_8}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>9])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_8)}}"
                                                                    data-src="{{url($estate->photo_category_8)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_9 != null || $estate->photo_category_9 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media ">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>1])}}">

                                                            {{$estate->title_category_9}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>4])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_9)}}"
                                                                    data-src="{{url($estate->photo_category_9)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </article>
                                    </div>
                                @endif
                                @if($estate->photo_category_10 != null || $estate->photo_category_10 != '')
                                    <div class="aux-iso-item aux-loading aux-col">
                                        <article
                                                class="post-151 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio-cat-urban-design">
                                            <div class="">


                                                <div class="entry-media ">
                                                    <h3 class="entry-title">
                                                        <a href="{{route('user.estate.search',['project_type'=>1])}}">

                                                            {{$estate->title_category_10}}


                                                        </a>
                                                    </h3>
                                                    <div class="aux-media-frame aux-media-image"><a
                                                                href="{{route('user.estate.search',['project_type'=>3])}}">
                                                            <img
                                                                    style="height: 250px;object-fit: cover"

                                                                    class="aux-attachment aux-featured-image attachment-340x190.4 aux-attachment-id-152 "
                                                                    alt="architectural-design-architecture-blue-534119"
                                                                    data-ratio="1.79" data-original-w="1400" sizes="auto"
                                                                    data-srcset="{{url($estate->photo_category_10)}}"
                                                                    data-src="{{url($estate->photo_category_10)}}"/></a>
                                                    </div>
                                                </div>

                                            </div>


                                        </article>
                                    </div>
                                @endif

                            </div>
                            <script type="text/javascript">var au93230913AjaxConfig = {
                                    "title": "",
                                    "cat": "",
                                    "num": "12",
                                    "only_posts__in": "",
                                    "include": "",
                                    "exclude": "",
                                    "posts_per_page": -1,
                                    "offset": "",
                                    "order_by": "menu_order date",
                                    "order": "desc",
                                    "exclude_without_media": 0,
                                    "display_like": "1",
                                    "deeplink": false,
                                    "use_ajax": 0,
                                    "deeplink_slug": "portfolio-625185f0ae175",
                                    "show_filters": false,
                                    "filter_by": "",
                                    "filter_style": "aux-slideup",
                                    "filter_align": "aux-left",
                                    "reveal_transition_duration": "600",
                                    "reveal_between_delay": "60",
                                    "hide_transition_duration": "600",
                                    "hide_between_delay": "30",
                                    "item_style": "classic",
                                    "tile_style_pattern": "default",
                                    "tiles_item_style": "overlay",
                                    "entry_background_color": "",
                                    "entry_border_color": "",
                                    "paginate": false,
                                    "perpage": false,
                                    "crop": true,
                                    "display_title": true,
                                    "show_info": true,
                                    "display_read_more": false,
                                    "image_aspect_ratio": "0.56",
                                    "space": "30",
                                    "desktop_cnum": "4",
                                    "tablet_cnum": "inherit",
                                    "phone_cnum": "1",
                                    "layout": "grid",
                                    "tag": "",
                                    "extra_classes": "",
                                    "extra_column_classes": "",
                                    "custom_el_id": "",
                                    "template_part_file": "recent-portfolio",
                                    "extra_template_path": "\/home\/phlox\/public_html\/subs\/demo\/wp-content\/plugins\/auxin-portfolio\/public\/templates\/elements",
                                    "universal_id": "au93230913",
                                    "query_args": [],
                                    "term": "",
                                    "reset_query": false,
                                    "use_wp_query": true,
                                    "wp_query_args": [],
                                    "custom_wp_query": "",
                                    "loadmore_type": "",
                                    "loadmore_label": "text",
                                    "loadmore_per_page": "12",
                                    "term_field": "slug",
                                    "base": "aux_recent_portfolios_grid",
                                    "base_class": "aux-widget-recent-portfolios",
                                    "paged": 1,
                                    "override_global_query": false,
                                    "content": null,
                                    "skip_wrappers": false,
                                    "content_width": 1600,
                                    "inview_transition": "none",
                                    "inview_duration": "",
                                    "inview_delay": "",
                                    "inview_repeat": "no",
                                    "inview_offset": "",
                                    "called_from": "archive"
                                };</script>
                        </section><!-- widget-container -->

                        <section data-export-id="41-469-15ead971"
                                 class="elementor-section elementor-top-section elementor-element elementor-element-15ead971 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                 data-id="15ead971" data-element_type="section"
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
                                                                @foreach($items as $row)
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div><!-- end content -->
                </div><!-- end primary -->


            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.0.4/wNumb.min.js" integrity="sha512-/p7f+UmF+TLVS67rQW2pc9Z52O3lJWFSrENAQQtrR7Gdby1DF9pGGw3WcZJwu91YB3pVCsLW58BEGAyGdRUqoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- jquery-ui-1.12.0 -->
    <script type="text/javascript" src="{{asset('js/jquery-ui/jquery-ui-1.12.0.min.js')}}"></script>

    <script>
        var imageUrl = '{{url($estate->photo_tab_1)}}';
        var imageUrl2 = '{{url($estate->photo_tab_2)}}';
        var imageUrl3 = '{{url($estate->photo_tab_3)}}';
        var imageUrl4 = '{{url($estate->photo_tab_4)}}';
        var imageUrl5 = '{{url($estate->photo_tab_5)}}';

        $( document ).ready(function() {
            $('#slider_1').click(function(){
                $("#project_type option[value='5']").attr("selected", true);
            });

            $('#slider_2').click(function(){
                $("#project_type option[value='1']").attr("selected", true);
            });
            $('#slider_3').click(function(){
                $("#project_type option[value='4']").attr("selected", true);
            });
            $('#slider_4').click(function(){
                $("#project_type option[value='3']").attr("selected", true);
            });
            $('#slider_5').click(function(){
                $("#project_type option[value='6']").attr("selected", true);
            });

        });
    </script>
    <script>
        //Setup price slider (Price Range)
        var nonLinearSlider = document.getElementById('nonlinear');
        var price_min = document.getElementById('price-min');
        var price_max = document.getElementById('price-max');
        var inputs = [price_min, price_max];
        noUiSlider.create(nonLinearSlider, {
            start: [95000, 16700000],
            connect: true,
            step:1000,
            range: {
                // Starting at 500, step the value by 500,
                // until 4000 is reached. From there, step by 1000.
                'min': [95000],
                'max': [16700000]
            },
            format:wNumb({
                decimals: 0,
                // postfix:' لیر',
                thousand:','
            })
        });
        nonLinearSlider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });
    </script>
@endsection
