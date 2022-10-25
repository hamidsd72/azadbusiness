<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="K71u7P9t7dU37sn3ahOUM7LFgYUIKeDECOzbX7Wf">
    <!--    <link rel="stylesheet" type="text/css" href="css/menucss.css">-->
    <title>ورود</title>
    <link rel="shortcut icon" href="https://altayproperty.com/source/assets/user/pic/logo.png" type="image/x-icon" />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://altayproperty.com/source/assets/css/jgrowl.min.css"/>
    <link rel="stylesheet" href="https://altayproperty.com/source/assets/front/css/uikit.min.css"/>
    <link rel="stylesheet" href="https://altayproperty.com/source/assets/front/css/uikit-rtl.min.css"/>
    <link rel="stylesheet" href="https://altayproperty.com/source/assets/front/css/font.css">

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

    <link rel="stylesheet" href="https://altayproperty.com/source/assets/front/css/auth.css?v=1643202087"/>
    <!-- UIkit JS -->
    <script src="https://altayproperty.com/source/assets/front/js/uikit.min.js"></script>
    <script src="https://altayproperty.com/source/assets/front/js/uikit-icons.min.js"></script>
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
    </style>
</head>

<body >
<div class="cover_b"></div>
<div class="body">

    @yield('main')

</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://altayproperty.com/source/assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://altayproperty.com/source/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://altayproperty.com/source/assets/js/jgrowl.min.js"></script>

<script type="text/javascript">
        $.jGrowl('<ul>  <li>مشخصات وارد شده با اطلاعات ما سازگار نیست.</li>  </ul>', {life: 3000, position: 'bottom-right', theme: 'bg-danger'});
</script>



<script type="text/javascript">
    // $(".chosen").chosen();
</script>
</body>
</html>
