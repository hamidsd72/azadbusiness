<header class="header_new">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-8 col-6 d-flex">
                <span class="menu_bar_open">
                    <i class="fas fa-bars"></i>
                </span>
                <ul class="social">
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
                </ul>
                @if($contact_provider->phone_header)
                    <li class="head_number"><a href="tel:+{{str_replace([' ','_','-'],'',$contact_provider->phone_header)}}" class="tel"><i class="icon-call"></i> +{{$contact_provider->phone_header}}</a></li>
                @endif
            </div>
            <div class="col-md-4 col-6 text-right h-100">
                    <a href="{{route('user.index')}}" class="logo h-100"><img src="{{url('source/assets/user/pic/logo.png')}}" alt="Logo"></a>
            </div>
        </div>
    </div>
</header>
<div class="menu_bar_list menu_bar_div">
    <a href="javascript:void(0);" class="menu_bar_close">
        <i class="fas fa-times"></i>
    </a>
    <ul class="menu_list">
        <li>
            <a href="{{route('user.index')}}" style="font-size: 22px; font-weight: bold;">صفحه اصلی</a>
        </li>
        <li>
            <a href="{{route('user.project.index')}}" style="font-size: 22px; font-weight: bold;">پروژه ها</a>
        </li>
        <li>
            <a href="{{route('user.blog.index','article_type')}}" style="font-size: 22px; font-weight: bold;">وبلاگ</a>
        </li>
        <li>
            <a href="{{route('user.about')}}" style="font-size: 20px; font-weight: bold;">درباره ما</a>
        </li>
        <li>
            <a href="{{route('user.contact')}}" style="font-size: 23px; font-weight: bold;" >تماس با ما</a>
        </li>
    </ul>
</div>