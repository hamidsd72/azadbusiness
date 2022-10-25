<!-- HEADER AREA START (header-5) -->
<header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area top-area-color-white">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            @if($contact_provider->email_header)
                                <li><a href="mailto:{{str_replace([' ','_','-'],'',$contact_provider->email_header)}}"><i class="icon-mail"></i> {{$contact_provider->email_header}}</a></li>
                            @endif
                            @if($contact_provider->phone_header)
                                <li><a href="tel:+{{str_replace([' ','_','-'],'',$contact_provider->phone_header)}}" class="font_new"><i class="icon-call"></i> +{{$contact_provider->phone_header}}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-right">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                {{--                                    <li>--}}
                                {{--                                        <!-- ltn__language-menu -->--}}
                                {{--                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>--}}
                                {{--                                                    <ul>--}}
                                {{--                                                        <li><a href="#">Arabic</a></li>--}}
                                {{--                                                        <li><a href="#">Bengali</a></li>--}}
                                {{--                                                        <li><a href="#">Chinese</a></li>--}}
                                {{--                                                        <li><a href="#">English</a></li>--}}
                                {{--                                                        <li><a href="#">French</a></li>--}}
                                {{--                                                        <li><a href="#">Hindi</a></li>--}}
                                {{--                                                    </ul>--}}
                                {{--                                                </li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </div>--}}
                                {{--                                    </li>--}}
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            @if($contact_provider->pinterest)
                                                <li><a href="{{$contact_provider->pinterest}}" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                            @endif
                                            @if($contact_provider->youtube)
                                                <li><a href="{{$contact_provider->youtube}}" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            @endif
                                            @if($contact_provider->linkedin)
                                                <li><a href="{{$contact_provider->linkedin}}" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            @endif
                                            @if($contact_provider->telegram)
                                                <li><a href="{{$contact_provider->telegram}}" title="Telegram" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
                                            @endif
                                            @if($contact_provider->instagram)
                                                <li><a href="{{$contact_provider->instagram}}" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            @endif
                                            @if($contact_provider->twitter)
                                                <li><a href="{{$contact_provider->twitter}}" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            @endif
                                            @if($contact_provider->facebook)
                                                <li><a href="{{$contact_provider->facebook}}" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            @endif
                                            @if($contact_provider->aparat)
                                                <li>
                                                    <a href="{{$contact_provider->aparat}}" title="Aparat">
                                                        <img src="{{url('source/assets/user/pic/aparat_69.png')}}" alt="vavdidad">
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
        <div class="container">
            <div class="row ltr_1200">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{route('user.index')}}"><img src="{{url('source/assets/user/pic/logo.png')}}" alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li><a href="{{route('user.index')}}">صفحه اصلی</a></li>
                                    <li>
                                        <a href="{{route('user.villas.search','all')}}">خرید ملک در ترکیه</a>
                                        <ul class="sub-menu menu-pages-img-show">
                                            @foreach(App\Villa::types_villa() as $key=>$type)
                                                <li>
                                                    <a href="{{route('user.villas.search',['all','type_villa'=>[$key]])}}">{{$type}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
{{--                                    <li><a href="{{route('user.project.index')}}">پروژه ها</a></li>--}}
                                    <li><a href="{{route('user.blog.index','eghamat_type')}}">اقامت در ترکیه</a>
                                        <ul class="sub-menu">
                                            @foreach($eghamat_cats as $key=>$eghamat_cat)
                                                <li>
                                                    <a href="{{route('user.blog.index',$eghamat_cat->id)}}">{{$eghamat_cat->name}} @if(count($eghamat_cat->children)) <span class="float-right">>></span> @endif</a>
                                                    @if(count($eghamat_cat->children))
                                                        <ul class="sub-menu">
                                                            @foreach($eghamat_cat->children as $key=>$eghamat_cat_child)
                                                                <li>
                                                                    <a href="{{route('user.blog.index',$eghamat_cat_child->id)}}">{{$eghamat_cat_child->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('user.blog.index','shahrvandi_type')}}">شهروندی ترکیه</a>
                                        <ul class="sub-menu">
                                            @foreach($shahrvandi_cats as $key=>$shahrvandi_cat)
                                                <li>
                                                    <a href="{{route('user.blog.index',$shahrvandi_cat->id)}}">{{$shahrvandi_cat->name}} @if(count($shahrvandi_cat->children)) <span class="float-right">>></span> @endif</a>
                                                    @if(count($shahrvandi_cat->children))
                                                        <ul class="sub-menu">
                                                            @foreach($shahrvandi_cat->children as $key=>$shahrvandi_cat_child)
                                                                <li>
                                                                    <a href="{{route('user.blog.index',$shahrvandi_cat_child->id)}}">{{$shahrvandi_cat_child->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('user.blog.index','job_type')}}">  کسب و کار در ترکیه</a>
                                        <ul class="sub-menu">
                                            @foreach($job_cats as $key=>$job_cat)
                                                <li>
                                                    <a href="{{route('user.blog.index',$job_cat->id)}}">{{$job_cat->name}} @if(count($job_cat->children)) <span class="float-right">>></span> @endif</a>
                                                    @if(count($job_cat->children))
                                                        <ul class="sub-menu">
                                                            @foreach($job_cat->children as $key=>$job_cat_child)
                                                                <li>
                                                                    <a href="{{route('user.blog.index',$job_cat_child->id)}}">{{$job_cat_child->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
{{--                                    <li><a href="{{route('user.service.index')}}">خدمات</a></li>--}}
{{--                                    <li><a href="{{route('user.faq')}}">سوالات متداول</a></li>--}}
                                    {{--<li><a href="{{route('user.blog.index','radio_vandidad_type')}}">رادیو وندیداد</a>--}}
                                        <ul class="sub-menu">
                                            @foreach($radio_cats as $key=>$radio_cat)
                                                <li>
                                                    <a href="{{route('user.blog.index',$radio_cat->id)}}">{{$radio_cat->name}} @if(count($radio_cat->children)) <span class="float-right">>></span> @endif</a>
                                                    @if(count($radio_cat->children))
                                                        <ul class="sub-menu">
                                                            @foreach($radio_cat->children as $key=>$radio_cat_child)
                                                                <li>
                                                                    <a href="{{route('user.blog.index',$radio_cat_child->id)}}">{{$radio_cat_child->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('user.blog.index','article_type')}}">وبلاگ</a>
                                        <ul class="sub-menu">
                                            @foreach($article_cats as $key=>$article_cat)
                                                <li>
                                                    <a href="{{route('user.blog.index',$article_cat->id)}}">{{$article_cat->name}} @if(count($article_cat->children)) <span class="float-right">>></span> @endif</a>
                                                    @if(count($article_cat->children))
                                                        <ul class="sub-menu">
                                                            @foreach($article_cat->children as $key=>$article_cat_child)
                                                                <li>
                                                                    <a href="{{route('user.blog.index',$article_cat_child->id)}}">{{$article_cat_child->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('user.about')}}">درباره ما</a></li>
                                    <li><a href="{{route('user.contact')}}">تماس با ما</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fas fa-search"></i></a>
                                        <ul class="sub-menu menu-pages-img-show search_menu">
                                            <li class="p-0 px-2">
                                                <div class="search-container">
                                                    <form action="{{route('user.search')}}" method="get">
                                                        <input type="text" id="search_input_header" placeholder="جستجو" name="search" required oninvalid="this.setCustomValidity('دنبال چه میگردید؟؟؟')" oninput="setCustomValidity('')">
                                                        <button type="submit" id="search_btn_header"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
{{--                                    <li class="special-link">--}}
{{--                                        <a href="add-listing.html">Add Listing</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ltn__header-options ltn__header-options-2 ">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->


<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{route('user.index')}}"><img src="{{url('source/assets/user/pic/logo.png')}}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li class="search_menu">
                    <div class="search-container">
                        <form action="{{route('user.search')}}" method="get">
                            <input type="text" id="search_input_header1" placeholder="جستجو" name="search" required oninvalid="this.setCustomValidity('دنبال چه میگردید؟؟؟')" oninput="setCustomValidity('')">
                            <button type="submit" id="search_btn_header1"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <li><a href="{{route('user.index')}}">صفحه اصلی</a></li>
                <li><a href="{{route('user.villas.search',['all','room_num'=>['all'],'type_info'=>['all'],'state_id'=>''])}}">خرید ملک در ترکیه</a>
                    <ul class="sub-menu">
                        @foreach(App\Villa::types_villa() as $key=>$type)
                            <li>
                                <a href="{{route('user.villas.search',['all','room_num'=>['all'],'type_info'=>['all'],'state_id'=>'','type_villa'=>[$key]])}}">{{$type}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
{{--                <li><a href="{{route('user.project.index')}}">پروژه ها</a></li>--}}
                <li><a href="{{route('user.blog.index','eghamat_type')}}">اقامت در ترکیه</a>
                    <ul class="sub-menu">
                        @foreach($eghamat_cats as $key=>$eghamat_cat)
                            <li>
                                <a href="{{route('user.blog.index',$eghamat_cat->id)}}">{{$eghamat_cat->name}}</a>
                            </li>
                            @if(count($eghamat_cat->children))
                                @foreach($eghamat_cat->children as $key=>$eghamat_cat_child)
                                    <li class="pl-3">
                                        _ <a href="{{route('user.blog.index',$eghamat_cat_child->id)}}">{{$eghamat_cat_child->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('user.blog.index','shahrvandi_type')}}">شهروندی ترکیه</a>
                    <ul class="sub-menu">
                        @foreach($shahrvandi_cats as $key=>$shahrvandi_cat)
                            <li>
                                <a href="{{route('user.blog.index',$shahrvandi_cat->id)}}">{{$shahrvandi_cat->name}}</a>
                            </li>
                            @if(count($shahrvandi_cat->children))
                                @foreach($shahrvandi_cat->children as $key=>$shahrvandi_cat_child)
                                    <li class="pl-3">
                                        _ <a href="{{route('user.blog.index',$shahrvandi_cat_child->id)}}">{{$shahrvandi_cat_child->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('user.blog.index','job_type')}}">  کسب و کار در ترکیه</a>
                    <ul class="sub-menu">
                        @foreach($job_cats as $key=>$job_cat)
                            <li>
                                <a href="{{route('user.blog.index',$job_cat->id)}}">{{$job_cat->name}}</a>
                            </li>
                            @if(count($job_cat->children))
                                @foreach($job_cat->children as $key=>$job_cat_child)
                                    <li class="pl-3">
                                        _ <a href="{{route('user.blog.index',$job_cat_child->id)}}">{{$job_cat_child->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </li>
{{--                <li><a href="{{route('user.service.index')}}">خدمات</a></li>--}}
{{--                <li><a href="{{route('user.faq')}}">سوالات متداول</a></li>--}}
{{--                <li><a href="{{route('user.blog.index','radio_vandidad_type')}}">رادیو وندیداد</a>--}}
                    <ul class="sub-menu">
                        @foreach($radio_cats as $key=>$radio_cat)
                            <li>
                                <a href="{{route('user.blog.index',$radio_cat->id)}}">{{$radio_cat->name}}</a>
                            </li>
                            @if(count($radio_cat->children))
                                @foreach($radio_cat->children as $key=>$radio_cat_child)
                                    <li class="pl-3">
                                        _ <a href="{{route('user.blog.index',$radio_cat_child->id)}}">{{$radio_cat_child->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('user.blog.index','article_type')}}">وبلاگ</a>
                    <ul class="sub-menu">
                        @foreach($article_cats as $key=>$article_cat)
                            <li>
                                <a href="{{route('user.blog.index',$article_cat->id)}}">{{$article_cat->name}}</a>
                            </li>
                            @if(count($article_cat->children))
                                @foreach($article_cat->children as $key=>$article_cat_child)
                                    <li class="pl-3">
                                        _ <a href="{{route('user.blog.index',$article_cat_child->id)}}">{{$article_cat_child->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('user.about')}}">درباره ما</a></li>
                <li><a href="{{route('user.contact')}}">تماس با ما</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>