
<!-- ALL SECTION INCLOSED TO THE WRAPPER -->
<div class="wrapper">
    <!-- BEGIN LOADING -->
    <div id="loader" class="loader">
        <div class="implode">
            <div class="implode-in">
                <div id="cover" class="acting">
                    <span></span> 
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> <!-- /.implode -->
    </div> <!-- /#loader -->
    <!-- END LOADING -->

    <!-- HEADER AREA START -->
    <header class="" style="position:fixed;z-index: 999;top: 0;width: 100%;box-shadow: 0px 14px 28px -1px black;">
        {{-- <div style="height: 70px;background: rgba(2,24,81,0.93);width: 100%;padding: 10px 0;"> --}}
        <div style="height: 70px;background: black;width: 100%;padding: 10px 0;">
            <div style="display: flex; justify-content: space-between;align-items: center;height: 100%">
                <div class="header-1" style="display: flex;flex-basis: 30%;height: 100%;    justify-content: space-around;">
                    <div style=" color: #fff; padding: 0 15px; display: flex; flex-direction: column;  justify-content: space-evenly;   align-items: center;">
                        <div><span style="user-select: none!important;cursor: pointer !important;margin:0 !important; ;  width:unset !important;  height:unset !important; text-align: unset !important;; display: unset !important;    font-size: unset !important;    line-height:unset !important;" class="wui-side-menu-trigger"><span class="fa fa-bars " style="font-size: 24px"></span></span></div>
                        <div   style="user-select: none!important;cursor: pointer !important;margin-top: 5px;margin-left: 0 !important;  ;  width:unset !important;  height:unset !important; text-align: unset !important;; display: unset !important;    font-size: unset !important;    line-height:unset !important;" class="wui-side-menu-trigger">Menu</div>
                    </div>
                    <div style="color: #fff; padding: 0 10px; display: flex; flex-direction: column;  justify-content: space-evenly;   align-items: center;">
                        <div class="btnh"><a href="@if(Auth::check()) {{route('profile-show',[Auth::user()->id])}} @else {{route('login')}} @endif"><span class="fa fa-user-circle-o " style="font-size: 24px;"></span></a></div>
                        <div class="btnh" style="margin-top: 5px"><a href="@if(Auth::check()) {{route('profile-show',[Auth::user()->id])}} @else {{route('login')}} @endif">Login</a></div>
                    </div>
                    <div class="header-1-sm-hide" style="   color: #fff; padding: 0 10px; display: flex; flex-direction: column;  justify-content: space-evenly;   align-items: center;">
                        <div class="btnh"><a href="{{route('user.fav.index')}}"><span class="fa fa-heart " style="font-size: 24px;"></span></a></div>
                        <div class="btnh" style="margin-top: 5px"><a href="{{route('user.fav.index')}}">Fav</a></div>
                    </div>
                    <div class="header-1-sm-hide" style="   color: #fff; padding: 0 10px; display: flex; flex-direction: column;  justify-content: space-evenly;   align-items: center;">
                        <div class="btnh"><span class="fa fa-flag " style="font-size: 24px;"></span></div>
                        <div class="btnh" style="margin-top: 5px"><a href="">Tr</a></div>
                    </div>
                    <div class="header-1-sm-hide" style="height: 100%;padding: 5px 10px">
                        <div style="width: 3px;background: #fff;height: 100%"></div>
                    </div>
                    <div class="header-1-sm-hide" style="display: flex;flex-direction: column;width: 45px;justify-content: center">
                        <div style="display: flex">
                            <div style="margin: 1px;padding:2px;width: 50%;background: #fff;border-radius: 5px;display: flex;justify-content: center;align-items: center">
                                <a href="#" style="color: #182c5f;font-size: 12px"><span class="fa fa-twitter"></span></a>
                                {{-- <a href="{{$contact_provider->twitter}}" style="color: #182c5f;font-size: 12px"><span class="fa fa-twitter"></span></a> --}}
                            </div>
                            <div style="margin: 1px;padding:2px;width: 50%;background: #fff;border-radius: 5px;display: flex;justify-content: center;align-items: center">
                                <a href="#" style="color: #182c5f;font-size: 12px"><span class="fa fa-instagram"></span></a>
                                {{-- <a href="{{$contact_provider->instagram}}" style="color: #182c5f;font-size: 12px"><span class="fa fa-instagram"></span></a> --}}
                            </div>

                        </div>
                        <div style="display: flex">
                            <div style="margin: 1px;padding:2px;width: 50%;background: #fff;border-radius: 5px;display: flex;justify-content: center;align-items: center">
                                <a href="#" style="color: #182c5f;font-size: 12px"><span class="fa fa-whatsapp"></span></a>
                                {{-- <a href="https://api.whatsapp.com/send?phone=+{{$contact_provider->whatsapp}}" style="color: #182c5f;font-size: 12px"><span class="fa fa-whatsapp"></span></a> --}}
                            </div>
                            <div style="margin: 1px;padding:2px;width: 50%;background: #fff;border-radius: 5px;display: flex;justify-content: center;align-items: center">
                                <a href="#" style="color: #182c5f;font-size: 12px">  <span class="fa fa-facebook-f"></span></a>
                                {{-- <a href="{{$contact_provider->facebook}}" style="color: #182c5f;font-size: 12px">  <span class="fa fa-facebook-f"></span></a> --}}
                            </div> 
                        </div>
                    </div>
                </div >
                <div class="header-2 header-2-md-hide header-2-lg-padding" style="display: flex;flex-direction: column;color: #fff;flex-basis: 45%;direction: ltr;height: 100%;justify-content: space-around;padding-left: 30px" >
                    <div>
                        <span class="fa fa-map-marker " style="padding: 0 10px"></span>
                        {{-- <span>{{$contact_provider->address}}</span> --}}
                        <span>Zafer Mah. Deniz Gezmiş CAD. No /4 Esenyurt B.B.13 D:11, Esenyurt , İstanbul</span>
                    </div>
                    <div>
                        {{-- <span class="fa fa-phone " style="padding: 0 10px"></span>
                        <span class="btnh"><a href="tel:{{$contact_provider->phone}} ">{{$contact_provider->phone}} </a></span> --}}
                    </div>
                </div>
                <div class="header-3" style="display: flex;align-items: center;justify-content: end;flex-basis: 25%;height: 100%;padding: 0 25px">

                 <div style="height: 100%">
                     <a href="{{url('/')}}">
                         <img  style="height: 100%;object-fit: cover" src="{{url('source/assets/images/LogoAzad.jpg')}}" alt="Logo">
                         {{-- <img  style="height: 100%;object-fit: cover" src="{{url('source/assets/images/logo/logo.png')}}" alt="Logo"> --}}
                     </a>
                 </div>

                </div>
            </div>
        </div>







        <!-- Header Top Begin -->
{{--        <div class="header-top hidden-xs hidden-sm">--}}
{{--            <div class="" dir="ltr"  style="width: 99%;">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">--}}
{{--                        <div class="social-to" style="padding-left: 20px">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#"><span class="flag-icon flag-icon-irn"></span></a></li>--}}
{{--                                <li><a href="#"><span class="flag-icon flag-icon-usa"></span></a></li>--}}

{{--                                <li style="width: 30px;height: 30px;"><a href="{{$contact_provider->facebook}}"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li style="width: 30px;height: 30px;"><a href="{{$contact_provider->twitter}}"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li style="width: 30px;height: 30px;"><a href="{{$contact_provider->instagram}}"><i class="fa fa-instagram"></i></a></li>--}}

{{--                            </ul>--}}
{{--                        </div> <!-- /.social-to -->--}}
{{--                    </div> <!-- /.col- -->--}}
{{--                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10">--}}
{{--                        <div class="contact-to">--}}
{{--                            <div class="contact-text">--}}
{{--                                <ul>--}}
{{--                                    <li dir="ltr"><a href="#"><i class="fa fa-map-marker"></i>{{substr($contact_provider->address , 0 ,20)}} | </a></li>--}}
{{--                                    <li dir="ltr"><a href="#"><i class="fa fa-mobile"></i>+{{$contact_provider->phone_header}} | </a></li>--}}
{{--                                    <li dir="ltr"><a href="#"><i class="fa fa-phone"></i>{{$contact_provider->phone}} | </a></li>--}}
{{--                                    <li dir="ltr"><a href="https://api.whatsapp.com/send?phone=+{{$contact_provider->whatsapp}}"><i class="fa fa-whatsapp"></i>+{{$contact_provider->whatsapp}} | </a></li>--}}
{{--                                    <li dir="ltr"><a href="{{route('user.fav.index')}}"><i class="fa fa-heart"></i><span> {{$fav_count}} | </span></a></li>--}}
{{--                                    <li dir="ltr"><a href="@if(Auth::check()) {{route('profile-show',[Auth::user()->id])}} @else {{route('login')}} @endif"><i class="fa fa-user"></i>login</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div> <!-- /.contact-to -->--}}
{{--                    </div> <!-- /.col- -->--}}
{{--                </div> <!-- /.row -->--}}
{{--            </div> <!-- /.container -->--}}
{{--        </div>--}}

        <!-- Main Menu Area Begin -->




{{--        <div class="container" @dir() style="background-color: #fff; width: 100%;max-width: 100%;">--}}
{{--            <div class="main-menu-deputy">--}}
{{--                <!-- Navbar visibility controls (<800px) -->--}}
{{--                <div class="menu-when-collapse"></div>--}}

{{--                <div class="menu-collapse-after-effect"></div>--}}
{{--                <div class="logo">--}}
{{--                    <a href="{{url('/')}}">--}}
{{--                        <img src="{{url('source/assets/images/logo/logo.png')}}" alt="Logo">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <!--a class="header_link2 mr-25px-768" dir="ltr" href="#"><i class="fa fa-user mx-5"></i>login</a-->--}}
{{--                <!--a class="header_link2" dir="ltr" href="tel:+905314966910"><i class="fa fa-mobile-phone"></i>+90 531 496 69 10</a>--}}
{{--                <a class="header_link2 mr-25px-768" dir="ltr" href="#"><i class="fa fa-map-marker mx-5"></i>DUNYA TICARET MERKEZI BLOK A1, KAT:6, DAIRE: 245</a>--}}
{{--                <a class="header_social mr-25px-768" dir="ltr" href="#" style=""><i class="fa fa-facebook-f mx-5"></i></a>--}}
{{--                <a class="header_social mr-25px-768" dir="ltr" href="#" style=""><i class="fa fa-twitter mx-5"></i></a>--}}
{{--                <a class="header_social mr-25px-768" dir="ltr" href="#" style=""><i class="fa fa-instagram mx-5"></i></a>--}}
{{--                <a class="header_social mr-25px-768" dir="ltr" href="#" style=""><i class="fa fa-youtube mx-5"></i></a-->--}}


{{--            --}}{{--                <a class="header_link2 " href="#"><i class="fa fa-clock-o"></i>Mon - Sat  10.00 - 19.00</a>--}}
{{--            <!-- /.logo -->--}}
{{--            </div><!-- /.main-menu-deputy -->--}}
{{--            <div class="main-menu">--}}
{{--                <div class="close-nav"></div> <!-- Close the menu for mobile -->--}}

{{--                <ul class="main-nav">--}}
{{--                    @if (View::hasSection('main-nav'))--}}
{{--                        @yield('main-nav')--}}
{{--                    @else--}}
{{--                        <li class="active"><a href="{{url('/')}}">{{__('header.menu.home')}}</a></li>--}}
{{--                        <li><a href="{{route('user.estate.index')}}">املاک</a></li>--}}
{{--                        <li><a href="{{route('user.educational.index')}}">امور تحصیلی</a></li>--}}
{{--                        <li><a href="{{route('user.Legal.index')}}">امور حقوقی</a></li>--}}
{{--                        <li><a href="{{route('user.exchange.index')}}">صرافی</a></li>--}}
{{--                        <li><a href="{{route('user.events.index')}}">رویدادها و سمینارها</a></li>--}}
{{--                        <li><a href="{{route('user.Export.index')}}">صادرات و واردات</a></li>--}}
{{--                        <li><a href="{{route('user.franchise.index')}}">سرمایه گذاری</a></li>--}}
{{--                        <li><a href="{{route('user.about.show',[$about->slug])}}"> درباره ما</a></li>--}}
{{--                        <li><a href="{{route('user.contact')}}">{{__('header.menu.Contact')}}</a></li>--}}
{{--                @endif--}}
{{--                    --}}

{{--                <!--li><a href="{{route('user.fav.index')}}">علاقه مندی های شما<span> --}}{{--{{$fav_count}}--}}{{-- </span> </a></li-->--}}
{{--                </ul><!-- /.main-nav -->--}}

{{--                <!--  Header Top visibility controls (=<991px) -->--}}
{{--                <div class="header-top visible-xs visible-sm">--}}
{{--                    <div class="visible-xs visible-sm">--}}
{{--                        <div class="social-to">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div> <!-- /.social-to -->--}}
{{--                    </div> <!-- /.col- -->--}}
{{--                    <div class="visible-xs visible-sm">--}}
{{--                        <div class="contact-to">--}}
{{--                            <div class="contact-text">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fa fa-map-marker"></i>DUNYA TICARET MERKEZI </a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-mobile-phone"></i>+90 531 496 69 10</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div> <!-- /.contact-to -->--}}
{{--                    </div> <!-- /.col- -->--}}
{{--                </div> <!-- /.header-top -->--}}
{{--            </div><!-- /.main-menu -->--}}
{{--        </div>--}}




        <!-- /.container -->
        <!-- Main Menu Area End -->
    </header>
    <!-- /.header -->
    <!-- /HEADER AREA END -->
</div>
<div class="wat_sapp wat_sapp1"> 
    {{-- <a target="_blank" rel="noreferrer" href="https://api.whatsapp.com/send?phone=+{{$contact_provider->phone_whatsapp}}"> --}}
        <img class="social_img" src="https://adib-it.com/adib/whatss4.png" alt="whatsapp adib">
    {{-- </a> --}}
</div>
<style>
    .wat_sapp {
        position: fixed;
        text-align: center;
        bottom: 6%;
        left: 2%;
        z-index: 999;
        animation-name: text-focus-in;
        animation-duration: 2.2s;
        animation-timing-function: linear;
        animation-delay: 0s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-fill-mode: backwards;
    }
    .wat_sapp img {
        width: 48%;
        border-radius: 50px !important;
        box-shadow: 0 0 50px 11px #2D3E48;
        margin-bottom: 5px;
        animation: pulse 2s infinite;
    }
    @media  (max-width: 1150px) {
        .header-2-lg-padding{
            padding-left: 5px !important;
        }
    }
    @media  (max-width: 980px) {
        .header-2-md-hide{
            display: none !important;
        }
        .header-3{
            flex-basis: 100% !important;
        }
    }
@media  (max-width: 600px) {
.header-2,.header-1-sm-hide{
    display: none !important;
}
    .header-3{
        flex-basis: 100% !important;
    }
}
    /* side menu */
    .wui-side-menu.open{
        opacity: 1 !important;

    }
    .wui-side-menu {
        opacity: 0;
        position:fixed;
        top:0;
        left:0;
        width:220px;
        height:100%;
        backface-visibility:hidden;
        z-index:3;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-transition: webkit-transform 220ms ease-in-out;
        transition: transform 220ms ease-in-out;
    }
    .wui-side-menu.open {-webkit-transform: translateX(0);transform: translateX(0);}
    .wui-side-menu.open ~ .content .side-menu-trigger {display:none;}
    .wui-side-menu.open {box-shadow: 2px 0 16px 0 rgba(0,0,0,0.3);}
    .wui-side-menu .header,
    .wui-content-header {vertical-align:baseline;line-height:50px;}
    .wui-side-menu-pin-trigger,
    .wui-side-menu-trigger {width:50px;height:50px;text-align:center;display: inline-block;font-size:18px;line-height: 50px;}

    .wui-side-menu .wui-side-menu-pin-trigger    {display:none;float: right;}
    .wui-side-menu .wui-side-menu-pin-trigger i  {-webkit-transition:all 0.22s ease-out;-moz-transition:all 0.22s ease-out;
        -o-transition:all 0.22s ease-out;     transition:all 0.22s ease-out;}
    .wui-side-menu .wui-side-menu-items {overflow-y:auto;height: calc(100% - 50px);}
    .wui-side-menu .wui-side-menu-item {
        display:block;
        width:100%;
        padding:15px 12px ;
        border-left:5px solid transparent;
    }
    .wui-side-menu .wui-side-menu-item {height:50px}
    .wui-side-menu .wui-side-menu-item i.box-ico {margin-right:4px;}

    /* overlay */
    .wui-overlay {position:absolute;top:0;left:0;right:0;bottom:0;z-index:2;background-color: rgba(0, 0, 0, 0.1);opacity:0.5;display:none;}
    .wui-side-menu.open ~ .wui-overlay, .wui-overlay.active {display:block;}

    /* content */
    .wui-content {z-index:1;position:absolute;top:0;right:0;bottom:0;left:0;
        -webkit-transition:all 0.22s ease-out;-moz-transition:all 0.22s ease-out;
        -o-transition:all 0.22s ease-out;transition:all 0.22s ease-out;padding:0 10px;}
    .wui-content .wui-side-menu-trigger {margin-left:-10px;}
    @media only screen and (min-width:768px){
        .wui-side-menu .wui-side-menu-pin-trigger {display:inline-block;}
        .wui-side-menu.open {box-shadow: initial;}
        .wui-side-menu.open ~ .wui-overlay {display:none;}
        .wui-side-menu.open ~ .wui-content .wui-side-menu-trigger {display:none;}
        .wui-side-menu.open:not(.pinned) ~ .wui-overlay {display:block;}
        .wui-side-menu.open:not(.pinned) {box-shadow: 2px 0 16px 0 rgba(0,0,0,0.3);}
        .wui-side-menu.open.pinned ~ .wui-content {left:220px;}
    }
    ul.wui-side-menu-items {list-style: none;padding:0}

    .wui-side-menu {background-color: #292e34;color:#ddd;}
    .wui-side-menu .wui-side-menu-trigger:hover,
    .wui-side-menu-item:hover,
    .wui-side-menu-pin-trigger:hover
    {color: #fff;background-color: #383f45;}

    .wui-side-menu a
    {color:#ccc;text-decoration:none}
    .wui-side-menu .wui-side-menu-item.active
    {border-left-color: #54c3ee; color:#54c3ee}
    .btnh a {color:#fff;}


</style>
<script>
    /* Kristuff.WebUI.SideMenu */
    (function (window, undefined) {
        'use strict';
        // responsive pinnable sidemenu component
        var sideMenu = function (el) {
            var htmlSideMenu = el, htmlSideMenuPinTrigger = {}, htmlSideMenuPinTriggerImage = {}, htmlOverlay = {};
            var init = function () {
                htmlSideMenuPinTrigger = el.querySelector('.wui-side-menu-pin-trigger');
                htmlSideMenuPinTriggerImage = htmlSideMenuPinTrigger.querySelector('i.fa');
                htmlOverlay = document.querySelector('.wui-overlay');
                Array.prototype.forEach.call(document.querySelectorAll('.wui-side-menu-trigger'), function (elmt, i) {
                    elmt.addEventListener('click', function (e) {
                        e.preventDefault();
                        toggleMenuState();
                    }, false);
                });
                htmlSideMenuPinTrigger.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleMenuPinState();
                }, false);
                htmlOverlay.addEventListener("click", function (e) {
                    htmlSideMenu.classList.remove('open');
                }, false);
                window.addEventListener("resize", checkIfNeedToCloseMenu, false);
                checkIfNeedToCloseMenu();
            };
            var toggleMenuState = function () {
                htmlSideMenu.classList.toggle('open');
                menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
            };
            var toggleMenuPinState = function () {
                htmlSideMenu.classList.toggle('pinned');
                htmlSideMenuPinTriggerImage.classList.toggle('fa-rotate-90');
                if (htmlSideMenu.classList.contains('pinned') !== true) {
                    htmlSideMenu.classList.remove('open');
                }
                menuPinStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('pinned'));
            };
            var checkIfNeedToCloseMenu = function () {
                var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                if (width <= 767 && htmlSideMenu.classList.contains('open') === true) {
                    htmlSideMenu.classList.remove('open');
                    menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
                }
                if (width > 767 && htmlSideMenu.classList.contains('pinned') === false) {
                    htmlSideMenu.classList.remove('open');
                    menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
                }
            };
            var menuStateChanged = function (element, state) {
                var evt = new CustomEvent('menuStateChanged', { detail: { open: state} });
                element.dispatchEvent(evt);
            };
            var menuPinStateChanged = function (element, state) {
                var evt = new CustomEvent('menuPinStateChanged', { detail: { pinned: state} });
                element.dispatchEvent(evt);
            };
            init();
            return {
                htmlElement: htmlSideMenu,
                toggleMenuState: toggleMenuState,
                toggleMenuPinState: toggleMenuPinState
            };
        };

        window.SideMenu = sideMenu;
    })(window);


    var documentReady = function (fn) {
        if (document.readyState != 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    };

    documentReady(function() {
        var sample = new SideMenu(document.querySelector('.wui-side-menu'))
        sample.htmlElement.addEventListener('menuPinStateChanged', function(e) {
            document.querySelector('#events').innerHTML += 'menuPinStateChanged , menu pinned? => '
                + e.detail.pinned + '<br>';
        }, false);
        sample.htmlElement.addEventListener('menuStateChanged', function(e) {
            document.querySelector('#events').innerHTML += 'menuStateChanged , menu open? => '
                + e.detail.open + '<br>';
        }, false);

    });


</script>
