
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="K71u7P9t7dU37sn3ahOUM7LFgYUIKeDECOzbX7Wf">
    <!--    <link rel="stylesheet" type="text/css" href="css/menucss.css">-->
    <title>ثبت نام</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jgrowl.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/uikit-rtl.min.css') }}"/>
    <style>
        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: 900;
            src: url({{asset('fonts/eot/IRANSansWeb_Black.eot')}});
            src: url({{asset('fonts/eot/IRANSansWeb_Black.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/IRANSansWeb_Black.woff2')}}) format('woff2'), url({{asset('fonts/woff/IRANSansWeb_Black.woff')}}) format('woff'), url({{asset('fonts/ttf/IRANSansWeb_Black.ttf')}}) format('truetype')
        }

        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: 700;
            src: url({{asset('fonts/eot/IRA}NSansWeb_Bold.eot')}});
            src: url({{asset('fonts/eot/IRANSansWeb_Bold.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/IRANSansWeb_Bold.woff2')}}) format('woff2'), url({{asset('fonts/woff/IRANSansWeb_Bold.woff')}}) format('woff'), url({{asset('fonts/ttf/IRANSansWeb_Bold.ttf')}}) format('truetype')
        }

        @font-face {
            font-family: IRANSans1;
            font-style: normal;
            font-weight: 500;
            src: url({{asset('fonts/IRANSansWeb-Medium.eot')}});
            src: url({{asset('fonts/IRANSansWeb-Medium.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/IRANSansWeb-Medium.woff2')}}) format('woff2'), url({{asset('fonts/IRANSansWeb-Medium.woff')}}) format('woff'), url({{asset('fonts/IRANSansWeb-Medium.ttf')}}) format('truetype')
        }
        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: 500;
            src: url({{asset('fonts/eot/IRANSansWeb_Medium.eot')}});
            src: url({{asset('fonts/eot/IRANSansWeb_Medium.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/IRANSansWeb_Medium.woff2')}}) format('woff2'), url({{asset('fonts/woff/IRANSansWeb_Medium.woff')}}) format('woff'), url({{asset('fonts/ttf/IRANSansWeb_Medium.ttf')}}) format('truetype')
        }
        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: 300;
            src: url({{asset('fonts/eot/IRANSansWeb_Light.eot')}});
            src: url({{asset('fonts/eot/IRANSansWeb_Light.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/IRANSansWeb_Light.woff2')}}) format('woff2'), url({{asset('fonts/woff/IRANSansWeb_Light.woff')}}) format('woff'), url({{asset('fonts/ttf/IRANSansWeb_Light.ttf')}}) format('truetype')
        }

        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: 200;
            src: url({{asset('fonts/eot/IRANSansWeb_UltraLight.eot')}});
            src: url({{asset('fonts/eot/IRANSansWeb_UltraLight.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/IRANSansWeb_UltraLight.woff2')}}) format('woff2'), url({{asset('fonts/woff/IRANSansWeb_UltraLight.woff')}}) format('woff'), url({{asset('onts/ttf/IRANSansWeb_UltraLight.ttf')}}) format('truetype')
        }

        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: 400;
            src: url({{asset('fonts/eot/IRANSansWeb.eot')}});
            src: url({{asset('fonts/eot/IRANSansWeb.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/IRANSansWeb.woff2')}}) format('woff2'), url({{asset('fonts/woff/IRANSansWeb.woff')}}) format('woff'), url({{asset('fonts/ttf/IRANSansWeb.ttf')}}) format('truetype')
        }
        @font-face {
            font-family: iranyekan;
            font-style: normal;
            font-weight: 700;
            src: url({{asset('fonts/eot/iranyekanwebbold.eot')}});
            src: url({{asset('fonts/eot/iranyekanwebbold.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/iranyekanwebbold.woff2')}}) format('woff2'), url({{asset('fonts/woff/iranyekanwebbold.woff')}}) format('woff'), url({{asset('fonts/ttf/iranyekanwebbold.ttf')}}) format('truetype')
        }

        @font-face {
            font-family: iranyekan;
            font-style: normal;
            font-weight: 300;
            src: url({{asset('fonts/eot/iranyekanweblight.eot')}});
            src: url({{asset('fonts/eot/iranyekanweblight.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/iranyekanweblight.woff2')}}) format('woff2'), url({{asset('fonts/woff/iranyekanweblight.woff')}}) format('woff'), url({{asset('/fonts/ttf/iranyekanweblight.ttf')}}) format('truetype')
        }

        @font-face {
            font-family: iranyekan;
            font-style: normal;
            font-weight: 400;
            src: url({{asset('fonts/eot/iranyekanwebregular.eot')}});
            src: url({{asset('fonts/eot/iranyekanwebregular.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/iranyekanwebregular.woff2')}}) format('woff2'), url({{asset('fonts/woff/iranyekanwebregular.woff')}}) format('woff'), url({{asset('fonts/ttf/iranyekanwebregular.ttf')}}) format('truetype')
        }
        @font-face {
            font-family: Yekta;
            font-style: normal;
            font-weight: 400;
            src: url({{asset('fonts/eot/HMSYekta-RegularItalic.eot')}});
            src: url({{asset('fonts/eot/HMSYekta-RegularItalic.eot?#iefix')}}) format('embedded-opentype'), url({{asset('fonts/woff2/HMSYekta-RegularItalic.woff2')}}) format('woff2'), url({{asset('fonts/woff/HMSYekta-RegularItalic.woff')}}) format('woff'), url({{asset('fonts/ttf/HMSYekta-RegularItalic.ttf')}}) format('truetype')
        }
        *{
            font-family: 'IRANSans';
        }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!--font fa icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- UIkit CSS -->

    <link rel="stylesheet" href="{{asset('css/auth.css')}}"/>
    <!-- UIkit JS -->
    <script src="{{asset('js/uikit.min.js')}}"></script>
    <script src="{{asset('js/uikit-icons.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .dir-rtl{
            direction: rtl !important;
        }
        .dir-ltr{
            direction: ltr !important;
        }

        .modal-backdrop{
            z-index: 1 !important;
        }
        .return-home{
            position: absolute;
            width: 110px;
            top: 17px;
            display: block;
            background: #00000040;
            padding: 8px 10px 9px 5px;
            text-align: left;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            color: #fff;
            font-weight: bold;
            font-size: 17px;
            transition: 0.4s all ease;
        }
        .return-home:hover{
            width: 140px;
            color: #fff;
        }
        .return-home img{
            width: 30px;
            margin-right: 10px;
        }
        .karshenash_div {
            position: relative!important;
            top: 0;
            left: 0;
            right: 0;
            width: 170px;
            margin: auto;
        }
        .jGrowl-notification ul
        {
            text-align: right;
        }
        .karshenash_div {
            width: 240px;
        }
    </style>
</head>

<body>
<div class="cover_b"></div>
<div class="body">
    <div class="header" uk-grid>
        <a class="return-home" href="{{url('/')}}">
            خانه
            <img src="{{asset('img/icon/home.png')}}" alt="">
        </a>
        <div class="uk-width-1-4@m uk-align-center logo_box_1" style="text-align: center">
            <div class="logo_box karshenash_div">
                <a href="{{url('/')}}">
                    <img src="{{asset('images/logo-light.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="body_1" uk-grid>

        <style>
            .w50{
                width: 50%!important;
            }
            ::-webkit-input-placeholder { /* Edge */
                text-align: right!important;
            }

            :-ms-input-placeholder { /* Internet Explorer 10-11 */
                text-align: right!important;
            }

            ::placeholder {
                text-align: right!important;
            }
            .log_des_box p
            {
                font-size: 13px;
            }
            .log_des_box p a
            {
                color: darkred;
                font-size: 15px;
                margin-right: 5px;
            }
        </style>

        <div class="uk-width-1-4@m uk-align-center cont_box_1">
            <div class="cont_box">
                <div class="title_box">
                    <h3>
                        ثبت نام
                    </h3>
                </div>
                {{ Form::open(array('route' => 'register', 'method' => 'post', 'files' => true)) }}
                    @csrf
                    <div class="control_box">
                        <label for="mobile" class="float-right">موبایل</label>
                        <input id="mobile" name="mobile" type="text" class="text-left mobile"
                               style="direction:ltr;" placeholder="شماره واتساپ" value="{{old('mobile')}}">
                    </div>
                    <div class="control_box">
                        <label for="full_name" class="float-right">نام و نام خانوادگی</label>
                        <input id="full_name" name="full_name" type="text" placeholder="نام و نام خانوادگی"
                               value="{{old('full_name')}}">
                    </div>
                    <div class="control_box">
                        <label for="email" class="float-right">ایمیل</label>
                        <input name="email"  value="{{old('email')}}" type="text" class="text-left" style="direction: rtl" placeholder="">
                    </div>
                    <div class="control_box">
                        <label for="password" class="float-right">رمز عبور</label>
                        <input name="password" type="password" class="text-left" style="direction: ltr" placeholder="رمز عبور خود را وارد کنید">
                    </div>
                    <div class="control_box">
                        <ul class="ul">
                            <li class="check_box w50 text-right">

                            </li>
                            <li class="w50 text-left">
                                <button type="submit">ثبت نام</button>
                            </li>
                        </ul>

                    </div>
                </form>
            </div>
            <!-- The Modal -->
            <div class="modal" id="resetModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="https://altayproperty.com/resetPassword" method="post">
                            <input type="hidden" name="_token" value="K71u7P9t7dU37sn3ahOUM7LFgYUIKeDECOzbX7Wf">                        <!-- Modal Header -->
                            <div class="modal-header">
                                <h5 class="modal-title">رمز عبور خود را فراموش کرده ام!</h5>
                                <button type="button" class="close m-0 p-0" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-right">
                                <div class="col-md-12">
                                    <label for="resetInput">شماره موبایل یا ایمیل خورد را وارد نمایید</label>
                                    <input type="text" name="resetInput" class="form-control" id="resetInput" placeholder="شماره موبایل یا ایمیل" required>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="footer" uk-grid>
        <div class="uk-width-1-4@m uk-align-center footer_box_1">
            <div class="footer_box">
                <img src="https://altayproperty.com/src/images/star.png" alt="">
            </div>
        </div>
    </div> --}}


</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script src="{{asset('dashboard/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jgrowl.min.js') }}"></script>

@if(Session::has('err_message'))
    <script type="text/javascript">
        $.jGrowl('{!! session("err_message") !!}', {life: 8000, position: 'bottom-right', theme: 'bg-danger'});
    </script>
@endif

@if (count($errors) > 0)
    <script type="text/javascript">
        $.jGrowl('<ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>', {
            life: 8000,
            position: 'bottom-right',
            theme: 'bg-danger'
        });
    </script>
@endif


;
;
<script type="text/javascript">
    // $(".chosen").chosen();
</script>
</body>
</html>
