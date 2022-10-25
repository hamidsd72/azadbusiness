<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="base-url" content="{{ url('/') }}"/>
    <title>azadbusiness Admin Panel</title>
    <!-- loader-->
{{--    <link href="{{asset('dashboard/pace.css')}}" rel="stylesheet">--}}
{{--    <script src="{{asset('dashboard/pace.js')}}"></script>--}}
    <!--favicon-->
    <link rel="icon"
          href="{{asset('/images/LogoAzad.jpg')}}" 
          type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('dashboard/jquery-jvectormap-2.css')}}" rel="stylesheet">
    <!-- simplebar CSS-->
    <link href="{{asset('dashboard/simplebar.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('dashboard/bootstrap.css')}}" rel="stylesheet">
    <!-- animate CSS-->
    <link href="{{asset('dashboard/animate.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons CSS-->
    <link href="{{asset('dashboard/icons.css')}}" rel="stylesheet" type="text/css">
    <!-- Metismenu CSS-->
    <link href="{{asset('dashboard/metisMenu.css?v=').time()}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard/jquery-ui.css')}}">
    <!-- Chosen css -->
    <link rel="stylesheet" href="{{ asset('user/chosen/css.css')}}">
    <!-- Custom Style-->
    <link href="{{asset('dashboard/app-style.css?v=').time()}}" rel="stylesheet">
    <link href="{{asset('css/fonts.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jgrowl.min.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <style type="text/css">/* Chart.js */
        .chosen-single{
            background: #8694ce!important;
        }
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
        .dd {
            position: relative;
            display: block;
            margin: 1rem auto;
            padding: 0;
            max-width: 480px;
            list-style: none;
            font-size: 13px;
            line-height: 20px;
        }

        .dd-list {
            display: block;
            position: relative;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .dd-list .dd-list {
            padding-right: 30px;
        }

        .dd-collapsed .dd-list {
            display: none;
        }

        .dd-item,
        .dd-empty,
        .dd-placeholder {
            display: block;
            position: relative;
            margin: 0;
            padding: 0;
            min-height: 20px;
            font-size: 13px;
            line-height: 20px;
        }

        .dd-handle {
            display: block;
            margin: 5px 0;
            padding: 10px 10px;
            text-decoration: none;
            border: 1px solid #ebebeb;
            background: #fff;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            color: #000;
        }

        .dd-handle:hover {
            background: #fff;
        }

        .dd-item > button {
            display: block;
            position: relative;
            cursor: pointer;
            float: right;
            width: 25px;
            height: 30px;
            margin: 5px 0;
            padding: 0;
            text-indent: 100%;
            white-space: nowrap;
            overflow: hidden;
            border: 0;
            background: transparent;
            font-size: 12px;
            line-height: 1;
            text-align: center;
            font-weight: bold;
        }

        .dd-item > button:before {
            content: '+';
            display: block;
            position: absolute;
            width: 100%;
            text-align: center;
            text-indent: 0;
        }

        .dd-item > button[data-action="collapse"]:before {
            content: '-';
        }

        .dd-placeholder,
        .dd-empty {
            margin: 5px 0;
            padding: 0;
            min-height: 30px;
            background: #f2fbff;
            border: 1px dashed #b6bcbf;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .dd-empty {
            border: 1px dashed #bbb;
            min-height: 100px;
            background-color: #e5e5e5;
            background-size: 60px 60px;
            background-position: 0 0, 30px 30px;
        }

        .dd-dragel {
            position: absolute;
            pointer-events: none;
            z-index: 9999;
        }

        .dd-dragel > .dd-item .dd-handle {
            margin-top: 0;
        }

        .dd-dragel .dd-handle {
            -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
            box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
        }
        .dd-item .btn-inline {
            float: left;
            position: relative;
            z-index: 9999;
            margin: -40px 0 0 10px;
        }
    </style>
    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
    @stack('stylesheets')
    <style>
        .archive-card-header {
            text-align: center;
        }

        .archive-card-header h2 {
            color: #fff !important;
        }

        .archive-table {
            width: 100%;
        }

        .content-wrapper {
            min-height: 100vh;
        }

        .btn-inline {
            display: flex;
            padding-top: 30px;
        }

        .btn-inline a.btn {
            margin-bottom: 30px;
        }

        td {
            padding: 5px;
        }

        /*.col-md-6 button[type="submit"] {*/
        /*    color: #fff;*/
        /*    background-color: #7934f3;*/
        /*    border-color: #7934f3;*/
        /*    font-size: .70rem;*/
        /*    font-weight: 500;*/
        /*    letter-spacing: 1px;*/
        /*    padding: 9px 19px;*/
        /*    border-radius: .25rem;*/
        /*    text-transform: uppercase;*/
        /*    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);*/
        /*}*/

        .table-responsive form {
            margin-bottom: 30px;
        }

        .dropdown-menu.show ul {
            display: block !important;
        }

        .dropdown-menu.show ul a {
            display: block;
        }

        .bootstrap-select.btn-group .dropdown-menu li {
            text-align: right;
        }

        .bootstrap-select.btn-group .dropdown-toggle .filter-option {
            text-align: center;
        }

        .custom-file {
            text-align: left;
        }
    </style>
    <style>
        body
        {
            overflow-x: hidden;
        }
        .select2-container
        {
            width: 100% !important;
        }
        .select2-results__option
        {
            color: #666!important;
        }
        .select2-container .select2-search--inline .select2-search__field
        {
            position: relative;
            top: -20px!important;
            margin-top: unset!important;
        }
        .select2-results__option--disabled
        {
            background: rgba(122,122,122,0.36);
        }
        .topbar-nav .navbar {
            background-color: black !important;
        }
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #001aff;
            border-color: #001aff;
        }
    </style>

{{--    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
{{--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
</head>

<body class="bg-theme bg-theme1  pace-done">
{{--<div class="pace  pace-inactive">--}}
{{--    <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%"--}}
{{--         data-progress="99">--}}
{{--        <div class="pace-progress-inner"></div>--}}
{{--    </div>--}}
{{--    <div class="pace-activity"></div>--}}
{{--</div>--}}

<!-- Start wrapper-->
<div id="wrapper" class="toggled">

    <style>
        .userIdConrainer {
            position: fixed;
            left: 96px;
            bottom: 6px;
            width: 250px;
            height: 36px;
            z-index: 100000;
            cursor: pointer;
        }
        #userId {
            position: fixed;
            bottom: 8px;
            left: 96px;
            background: #2ab27b;
            background-image: none;
            border-radius: 3px;
            /* background-image: linear-gradient(230deg, #759bff, #843cf6); */
            z-index: 1;
            color: #fff;
            padding: 3px 10px;
            padding-left: 10px;
            line-height: 30px;
            padding-right: 35px;
        }
        .userIdIcon {
            font-size: 20px;
            position: absolute;
            right: 5px;
            bottom: 8px;
        }
        .back-to-top {
            background: #ffc107;
        }
    </style>
    @if (session()->has('user_id'))
    <div class="userIdConrainer" onclick="window.open('{{route('user-sign-in-back',session('user_id'))}}','_parent')">
        <span id="userId">
            بازگشت به اکانت مدیریت
            <i class="fa fa-sign-out fa-2x userIdIcon"></i>
        </span>
    </div>
    @endif
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="init" data-simplebar-auto-hide="true" class="mm-active">
        <div class="simplebar-track vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="visibility: visible; top: 81px; height: 240px;"></div>
        </div>
        <div class="simplebar-track horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar"></div>
        </div>
        <div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;">
            <div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">

                <div class="brand-logo" style="cursor: pointer">
                    <img onclick="window.open('{{route('user.index')}}','_blank')" src="{{asset('/images/LogoAzad.jpg')}}" class="logo-icon h-100 full" alt="logo icon">
                    <img onclick="window.open('{{route('user.index')}}','_blank')" src="{{asset('/images/LogoAzad.jpg')}}" class="logo-icon h-100 mini" alt="logo icon">
                    <h5 class="logo-text"> مدیریت</h5>
                    <div class="close-btn"><i class="zmdi zmdi-close"></i></div>
                </div>

                <ul class="metismenu mm-show" id="menu">

                    @role('مدیر')
                    <li class="" >
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                            <div class="parent-icon"><i class="zmdi zmdi-layers"></i></div>
                            <div class="menu-title">مدیریت محتوا</div>
                        </a>
                        <ul class="mm-collapse" style="height: 2px;">
                            <li><a href="{{ route('slider-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>
                                    اسلایدر</a></li>
                            <li><a href="{{ route('gallery-edit') }}"><i class="zmdi zmdi-dot-circle-alt"></i>گالری استانبول</a></li>
                            <!--li><a href="{{ route('faq-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i> سوالات متداول</a></li>
                            <li><a href="{{ route('about-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i> درباره ما/خدمات</a></li-->
                            <li><a href="{{ route('team-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i> همکاران</a></li>
                            <li><a href="{{ route('CustomerSlider-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>اسلایدر نظرات</a></li>
                            <li><a href="{{ route('aboutSlider-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>اسلایدر درباره ما</a></li>
                            <li><a href="{{ route('Footer-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>فوتر</a></li>

                        </ul>
                    </li>


                    <li class="" >
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                            <div class="parent-icon"><i class="zmdi zmdi-layers"></i></div>
                            <div class="menu-title">مدیریت نوشته ها</div>
                        </a>
                        <ul class="mm-collapse" style="height: 2px;">
                            <li><a href="{{ route('post-category-list','article') }}"><i class="zmdi zmdi-dot-circle-alt"></i>
                                    لیست دسته بندی مقالات</a></li>

                            <li><a href="{{ route('article-list','article') }}"><i class="zmdi zmdi-dot-circle-alt"></i> لیست
                                    مقالات</a></li>
                            <li><a href="{{ route('abouts-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>لیست درباره ما</a></li>
                            <li><a href="{{ route('event-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>لیست همایش ها</a></li>
                            <li><a href="{{ route('educational-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>لیست مطالب تحصیلی ها</a></li>
                            <li><a href="{{ route('franchise-edit') }}"><i class="zmdi zmdi-dot-circle-alt"></i>فرانچایرز</a></li>
                            <li><a href="{{ route('Legal-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>لیست مطالب حقوقی </a></li>
                            <li><a href="{{ route('Export-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>صادرات و واردات</a></li>
                            <li><a href="{{ route('exchange-edit') }}"><i class="zmdi zmdi-dot-circle-alt"></i>صرافی</a></li>
                            <li><a href="{{ route('Estate-edit') }}"><i class="zmdi zmdi-dot-circle-alt"></i>املاک</a></li>

                        </ul>
                    </li>
                    <li class="">
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                            <div class="parent-icon"><i class="zmdi zmdi-layers"></i></div>
                            <div class="menu-title">مدیریت املاک</div>
                        </a>
                        <ul class="mm-collapse" style="height: 2px;">
                            <li><a href="{{ route('cats-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>
                                    لیست دسته بندی ها</a></li>
                            <li><a href="{{ route('cat-locale-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>
                                    لیست مناطق استانبول</a></li>
                            <li><a href="{{ route('villa-category-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>
                                    لیست پروژه ها</a></li>
                            <li><a href="{{ route('property-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i> لیست ویژگی‌ها</a>
                            </li>

{{--                            <li>--}}
{{--                                <a href="{{ route('villa-list') }}">--}}
{{--                                    <i class="zmdi zmdi-dot-circle-alt"></i>--}}

{{--                                    لیست ملک‌ها--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li><a href="{{ route('location-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i> لیست--}}
{{--                                    مناطق پربازدید</a></li>--}}

                        </ul>
                    </li>
                    @endrole

                    @role('مدیر')


                    <li class="">
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                            <div class="parent-icon"><i class="zmdi zmdi-layers"></i></div>
                            <div class="menu-title">تماس ها @if($count_contact+$count_consulting>0) <span class="badge badge-danger">{{$count_contact+$count_consulting}}</span> @endif</div>
                        </a>

                        <ul class="mm-collapse" style="height: 2px;">
                            <!--li><a href="{{route('consulting-list')}}"><i class="zmdi zmdi-dot-circle-alt"></i>مشاوره @if($count_consulting>0) <span class="badge badge-danger">{{$count_consulting}}</span> @endif </a></li-->
                            <li><a href="{{route('contact-list')}}"><i class="zmdi zmdi-dot-circle-alt"></i>تماس با ما @if($count_contact>0) <span class="badge badge-danger">{{$count_contact}}</span> @endif </a></li>
                            <li><a href="{{ route('contact-info-list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>اطلاعات تماس با ما </a></li>
                        </ul>
                    </li>
                        <li class="">
                            <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                                <div class="parent-icon"><i class="zmdi zmdi-layers"></i></div>
                                <div class="menu-title">تنظیمات</div>
                            </a>
                            <ul class="mm-collapse" style="height: 2px;">
                                <li><a href="{{ route('meta-list') }}?type=myCustomers"><i class="zmdi zmdi-dot-circle-alt"></i>meta </a></li>
                                <!--li><a href="{{ route('price-convert') }}"><i class="zmdi zmdi-dot-circle-alt"></i>قیمت روز دلار و تومان </a></li-->
                            </ul>
                        </li>
                    @endrole
                </ul>

            </div>
        </div>
    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">

            <div class="toggle-menu">
                <i class="zmdi zmdi-menu"></i>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="input-group">
                    <div class="input-group-prepend search-arrow-back">
                        <button class="btn btn-search-back" type="button"><i class="zmdi zmdi-long-arrow-left"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="search">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="zmdi zmdi-search"></i></button>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav align-items-center right-nav-link ml-auto">
                <li class="nav-item dropdown search-btn-mobile">
                    <a class="nav-link position-relative" href="javascript:void(0);">
                        <i class="zmdi zmdi-search align-middle"></i>
                    </a>
                </li>

                <style>
                    .resetLang{
                        border: 0px solid #e5eaef;
                        background-color: rgba(255, 255, 255, 0.2);
                        color: #fff !important;
                        height: 27px;
                        line-height: 29px;
                        padding: 0 10px;
                        border-radius: 3px;
                        margin: 0 5px;
                        cursor: pointer;
                    }
                    .control_box{
                        background-color: rgb(152 63 63 / 60%);
                        margin: 5px 0;
                        padding: 8px;
                    }
                    .modal-backdrop{z-index: unset!important;}
                </style>




                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown"
                       href="javascript:void(0);">
                        <span class="user-profile">
                            <img src="{{auth()->user()->photo ? url(auth()->user()->photo->path) : asset('dashboard/avatar-13.png')}}"
                                 class="img-circle"
                                 alt="user avatar">
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="{{ route('profile-show', Auth::user()->id) }}">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3"
                                                             src="{{auth()->user()->photo ? url(auth()->user()->photo->path) : asset('dashboard/avatar-13.png')}}"
                                                             alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">{{auth()->user()->email}}</h6>
                                        <p class="user-subtitle">{{auth()->user()->first_name .' ' . auth()->user()->last_name}}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"
                            onclick="window.open('{{ route('profile-show', Auth::user()->id) }}','_parent')"><i
                                    class="zmdi zmdi-balance-wallet mr-3"></i>پروفایل
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"
                            onclick="window.open('{{ route('profile-password', Auth::user()->id) }}','_parent')"><i
                                    class="zmdi zmdi-settings mr-3"></i>تغییر رمزعبور
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item" onclick="document.getElementById('loggg').submit()"><i class="zmdi zmdi-power mr-3"></i>
                            خروج
                        </li>
                    </ul>
                    <form action="{{ route('logout') }}" method="POST"
                          class="logout hidden" id="loggg">{{ csrf_field() }}</form>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid text-right" dir="rtl">

            <!--Start Dashboard Content-->

        {{ $body or 'بدون محتوا' }}

        <!--End Dashboard Content-->
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javascript:void(0);" class="back-to-top" style="display: none;"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2022 Adib-it Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

</div><!--End wrapper-->
<!-- Modal -->
<div class="modal fade text-right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" dir="rtl">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">درخواست سطح نقره ای</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>توجه...!
                    <br>
                    بعد از ارسال درخواست و بررسی مدارک آپلود شده ، حساب شما ارتقاء خواهد یافت
                </p>
                {{ Form::open(array('route' => 'request_expert', 'method' => 'post', 'id' => 'reg_form', 'files' => true)) }}
                <div class="control_box uk-width-1-1@s">
                    <label for="address_pic" class="float-right">تصویر آدرس (مانند قبض گاز یا برق که نشان دهنده آدرس محل سکونت شما می باشد)</label>
                    <input type="file" accept="image/*" name="address_pic" id="address_pic" required>
                </div>
                <div class="control_box uk-width-1-1@s">
                    <label for="passport_pic" class="float-right">تصویر پاسپورت</label>
                    <input type="file" accept="image/*" name="passport_pic" id="passport_pic" required>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                <button type="submit" class="btn btn-primary">
                    ارسال درخواست
                </button>

            </div>

        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('dashboard/jquery_002.js')}}"></script>
<script src="{{asset('dashboard/popper.js')}}"></script>
<script src="{{asset('dashboard/bootstrap.js')}}"></script>

<!-- simplebar js -->
<script src="{{asset('dashboard/simplebar.js')}}"></script>
<!-- Metismenu js -->
<script src="{{asset('dashboard/metisMenu.js')}}"></script>
<!-- loader scripts -->
<script src="{{asset('dashboard/jquery.js')}}"></script>
<script src="{{asset('dashboard/jquery-ui.js')}}"></script>
{{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}


<!-- Custom scripts -->
<script src="{{asset('dashboard/app-script.js?v=').time()}}"></script>
<!-- Chart js -->

<script src="{{asset('dashboard/Chart.js')}}"></script>
<!-- Vector map JavaScript -->
<script src="{{asset('dashboard/jquery-jvectormap-2.js')}}"></script>
<script src="{{asset('dashboard/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- Easy Pie Chart JS -->
<script src="{{asset('dashboard/jquery_004.js')}}"></script>
<!-- Sparkline JS -->
<script src="{{asset('dashboard/jquery.js')}}"></script>
<script src="{{asset('dashboard/excanvas.js')}}"></script>
<script src="{{asset('dashboard/jquery_003.js')}}"></script>
<!-- Chosen -->
<script src="{{ asset('user/chosen/js.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jgrowl.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    window.MyReset = () => jQuery('#\\:1\\.container').contents().find('#\\:1\\.restore').click();
</script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
    $(function () {
        $(".knob").knob();
    });

    function slugify(string) {
        return string.toString().toLowerCase().replace(/\s+/g, '-').replace(/\-\-+/g, '-').replace(/^-+/, '').replace(/-+$/, '');
    }

    function slug(one, two) {
        $(one).change(function () {
            var slug = slugify($(one).val());
            $(two).val(slug);
        });
    }
</script>

<div class="jvectormap-tip"></div>
@stack('scripts')
<script>
    $(document).ready(function () {
        $('.numberPrice').text(function (index, value) {
            return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });
    });
    setTimeout(function () {
        $('.mm-collapse').removeClass('mm-show');
        $('.mm-collapse').parent().removeClass('mm-active');
    }, 500)
</script>
@if (count($errors) > 0)
    <script type="text/javascript">
        $.jGrowl('<ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>', {
            life: 8000,
            position: 'bottom-right',
            theme: 'bg-danger'
        });
    </script>
@endif
@if(Session::has('flash_message'))
    <script type="text/javascript">
        $.jGrowl('{!! session("flash_message") !!}', {life: 8000, position: 'bottom-right', theme: 'bg-success'});
    </script>
@endif
@if(Session::has('err_message'))
    <script type="text/javascript">
        $.jGrowl('{!! session("err_message") !!}', {life: 8000, position: 'bottom-right', theme: 'bg-danger'});
    </script>
@endif
{{--<script type="text/javascript" src="{{ asset('dashboard/translator.js') }}"></script>--}}
</body>
</html>
