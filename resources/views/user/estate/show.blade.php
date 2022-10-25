@extends('user.layouts.app')
@dd()
@section('head')
    <meta name="keywords" content="{{$item->keywords}}">
    <meta name="description" content="{{$item->description}}"/>
    <meta property="og:title" content="{{$item->page_title}}"/>
    <meta property="og:description" content="{{$item->description}}"/>
@endsection

@section('main-nav')
    <li class="active"><a href="{{url('/')}}">{{__('header.menu.home')}}</a></li>
    @foreach($Menus as $index=>$menu)
        @if($menu->childs()->first())

            <li><a href="{{route('user.educational.show',[$menu->slug])}}">{{$menu->title}}</a>
                <ul class="sub-nav">
                    @foreach($menu->childs()->get() as $index=>$menu_2)
                        @if($menu_2->childs()->first())
                            <li><a href="{{route('user.educational.show',[$menu_2->slug])}}">{{$menu_2->title}}</a>
                                <ul class="sub-nav">
                                    @foreach($menu_2->childs()->get() as $index=>$menu_3)
                                        <li><a  href="{{route('user.educational.show',[$menu_3->slug])}}">{{$menu_3->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="{{route('user.educational.show',[$menu_2->slug])}}">{{$menu_2->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @else
            <li><a href="{{route('user.educational.show',[$menu->slug])}}">{{$menu->title}}</a></li>
        @endif

    @endforeach

@endsection
@section('main')
    <!-- PROPERTIES AREA START -->

    <section class="properties page-prime-bg" style="z-index: 1;padding-bottom: 20px;">
        <div class="page-prime-bg-overlay-effect"></div>
        <div class="container">
            <div class="page-heading" style="margin-top: 10px;">
                <div class="page-main-title">

                </div>
                <h5>{{$item->title}}</h5>
            </div> <!-- /.page-heading -->
        </div> <!-- /.container -->
    </section>


    <!-- SINGLE AREA START -->
    <div class="single">
        <div class="container">
            <div class="row" @dir>
                <!-- SINGLE POST START -->
                <div class="single">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">
                        <!-- post begin -->
                        <article class="post-item single-item">
                            <div class="container" style="max-width: 80%;">
                                <div class="shadow-bottom-items">
                                    <div class="post-media">
                                        <img src="{{url($item->photo)}}" alt="Featured">
                                    </div>
                                </div>
                            </div>
                            <div class="post-inner">
                                <div class="post-metadata">
                                    <span class="posted-date">
		                                    <i class="fa fa-calendar"></i>
		                                    <a dir="ltr" href="#"><span></span>{{ $item->created_at->format('d, M, Y') }}</a>
		                                </span>
                                </div>

                                <div class="post-content">
                                    {!! $item->text !!}
                                </div> <!-- /.post-content -->

                            </div>

                        </article> <!-- /.post-item -->
                        <!-- Comment Area -->

                        <div class="cooment-area">
                            <div class="title">
                                <h3></h3>
                            </div>
                            <div class="media-box">

                            </div> <!-- /.media-box -->
                            <!-- Comment Form -->


                        </div> <!-- /.cooment-area -->
                    </div> <!-- /.col- -->
                </div> <!-- /.single -->
                <!-- /SINGLE POST END -->

                <!-- RIGHT SIDEBAR START -->

                <!-- /RIGHT SIDEBAR END -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.single -->
    <!-- /SINGLE AREA END -->

@endsection
