<style>
    a.back-to-top {
        background-color: #ffc107 !important;
        border-radius: 4px !important;
        padding: 5px 12px;
    }
    a.back-to-top:hover {
        background: black !important;
    }
    a.back-to-top:hover i {
        color: white !important;
    }
</style>
<!-- FOOTER AREA START -->
<footer class="footer" id="footer">
    <div class="widget-heading info-heading" style="background-color: rgba(7, 31, 49, .92);">

        {{--@if($Footer->img != '' || $Footer->img != null)
        <a href="{{$Footer->link}}" class="logo-footer" dideo-checked="true">
            <img src="{{url($Footer->img)}}" alt="LogoFooter">
        </a>
        @endif--}}

    </div>

    <div class="footer-widget-area">
        <div class="container">
            <div class="footer-widgets">

 

                <div class="row">
                 {{--   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="single-widget">
                            <div class="widget-heading info-heading">
                                <a href="{{url('/')}}" class="logo-footer">
                                    <img src="{{url('source/assets/images/logo/logo-footer.png')}}" alt="LogoFooter">
                                </a>
                            </div>
                            <div class="widget-info" @dir>
                                <p>&#1607;&#1604;&#1583;&#1740;&#1606;&#1711; &#1588;&#1575;&#1607;&#1575;&#1606; &#1740;&#1705;&#1740; &#1575;&#1586; &#1576;&#1607;&#1578;&#1585;&#1740;&#1606; &#1607;&#1575;</p>
                            </div> <!-- /.widget-info -->
                            <ul class="ul-soshal-list">
                                <li>
                                    <a href="{{$contact_provider->facebook}}" class="soshal-box">

                                        <i class="fa fa-facebook"></i>
                                        <span>
                        &#1601;&#1740;&#1587;&#1576;&#1608;&#1705;
                    </span>

                                    </a>
                                </li>
                                <li>
                                    <a href="{{$contact_provider->twitter}}" class="soshal-box">

                                        <i class="fa fa-twitter"></i>
                                        <span>

                        &#1578;&#1608;&#1740;&#1740;&#1578;&#1585;

                                </span>

                                    </a>
                                </li>
                                <li>
                                    <a href="{{$contact_provider->linkedin}}" class="soshal-box">

                                        <i class="fa fa-linkedin"></i>
                                        <span>
                        &#1604;&#1740;&#1606;&#1705;&#1583;&#1740;&#1606;
                    </span>

                                    </a>
                                </li>
                                <li>
                                    <a href="{{$contact_provider->instagram}}" class="soshal-box">

                                        <i class="fa fa-instagram"></i>
                                        <span>
                        &#1575;&#1740;&#1606;&#1587;&#1578;&#1575;&#1711;&#1585;&#1575;&#1605;
                    </span>

                                    </a>
                                </li>

                            </ul>

                        </div> <!-- /.single-widget -->
                    </div>--}} <!-- /.col- -->
                     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" @dir>
                         <div class="single-widget">
                             <div class="widget-heading">
                                 <h3>&#1583;&#1585;&#1576;&#1575;&#1585;&#1607; &#1605;&#1575;</h3>
                             </div>
                             <div class="widget-link">
                                 <ul>
                                     <li><a href="{{route('user.about.show',[$about->slug])}}">درباره ما</a></li>
                                     <li><a href="{{route('user.contact')}}">تماس با ما</a></li>
                                 </ul>
                             </div> <!-- /.widget-link -->
                         </div> <!-- /.single-widget -->
                     </div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" @dir>
                        <div class="single-widget">
                            <div class="widget-heading">
                                <h3>&#1582;&#1583;&#1605;&#1575;&#1578;</h3>
                            </div>
                            <div class="widget-link">
                                <ul>
                                    <li><a href="{{route('user.estate.index')}}">&#1605;&#1588;&#1575;&#1608;&#1585; &#1575;&#1605;&#1604;&#1575;&#1705;</a></li>
                                    <li><a href="{{route('user.Export.index')}}">&#1608;&#1575;&#1585;&#1583;&#1575;&#1578; &#1608; &#1589;&#1575;&#1583;&#1585;&#1575;&#1578;</a></li>
                                    <li><a href="{{route('user.educational.index')}}">&#1578;&#1581;&#1589;&#1740;&#1604; &#1583;&#1585; &#1578;&#1585;&#1705;&#1740;&#1607;</a></li>
                                    <li><a href="{{route('user.exchange.index')}}">&#1589;&#1585;&#1575;&#1601;&#1740;</a></li>
                                    <li><a href="{{route('user.franchise.index')}}">&#1587;&#1585;&#1605;&#1575;&#1740;&#1607; &#1711;&#1584;&#1575;&#1585;&#1740; &#1601;&#1585;&#1575;&#1606;&#1670;&#1575;&#1740;&#1586;</a></li>

                                    <li><a href="{{route('user.Legal.index')}}">امور حقوقی</a>
                                </ul>
                            </div> <!-- /.widget-link -->
                        </div> <!-- /.single-widget -->
                    </div> <!-- /.col- -->
                     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" >
                     </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" >
                        <div class="single-widget">
                            <div class="widget-heading" @dir>
                                <h3>&#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1578;&#1605;&#1575;&#1587; </h3>
                            </div>
                            <div class="widget-address">
                                <address>
                                    <ul>
                                        <li>
                                            <div class="address-left">
                                                <p> &#1570;&#1583;&#1585;&#1587; :</p>
                                            </div>
                                            <div class="address-right">
                                                {{-- <p>{{$contact_provider->address}}</p> --}}
                                                <p>Zafer Mah. Deniz Gezmiş CAD. No /4 Esenyurt B.B.13 D:11, Esenyurt , İstanbul </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-left">
                                                <p>&#1588;&#1605;&#1575;&#1585;&#1607; &#1578;&#1605;&#1575;&#1587;:</p>
                                            </div>
                                            <div class="address-right">
                                                {{-- <p dir="ltr">
                                                    +90 531 496 69 10 <br />
                                                    +90 212 731 31 31 <br />
                                                </p> --}}
                                            </div>
                                        </li>

                                    </ul>
                                </address>
                            </div> <!-- /.widget-address -->
                        </div> <!-- /.single-widget -->
                    </div> <!-- /.col- -->

                </div> <!-- /.row -->
            </div> <!-- /.footer-widgets -->
        </div> <!-- /.container -->
    </div> <!-- /.footer-widget-area -->
    <div class="copyright-designer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="copyright">
                        <p>&copy; Copyright 2021 adib it, All Rights Reserved</p>
                    </div> <!-- /.copyright -->
                </div> <!-- /.col- -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="designer">
                        <p>
                            Designed and
                            <i class="fa fa-heart"></i> by
                            <a href="https://adib.com.tr/tr">ADIB group</a>
                        </p>
                    </div> <!-- /.designer -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.copyright-designer -->

    <!-- Go to the page top  -->
    <div class="go-top">
        <a href="#" class="back-to-top ">
            <i class="fa fa-angle-up"></i>
        </a>
    </div> <!-- /.go-top -->
</footer> <!-- /.footer -->
<!-- /FOOTER AREA END -->
</div> <!-- /.wrapper -->
<!-- ALL SECTION INCLOSED TO THE WRAPPER -->
