<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<header class="main-header clearfix">
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner clearfix">
                <div class="main-header__top-left">
                    <ul class="list-unstyled main-header__top-address">
                        <li>
                            <div class="icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="text">
                                <a href="tel:09162352304">09215561469</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="main-header__top-right">
                    <div class="main-header__top-right-inner">
                        <div class="main-header__top-right-social">
                            <a href="https://instagram.com/koohnavardi.shahid.tehrani1398?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="container clearfix">
                <div class="main-menu-wrapper-inner clearfix">
                    <div class="main-menu-wrapper__left clearfix">
                        <div class="main-menu-wrapper__logo" style="padding: 0px">
                            <a href="../index.blade.php"><img style="; border: 5px solid #eeeeee;border-radius: 150px;width: 100px;height: 100px;margin-right: 70px; display: block;" src="/assets/images/site-logo.jpg" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu" style="">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown current">
                                    <a href="{{route('index')}}">صفحه اصلی</a>
                                </li>

                                <li class="dropdown">
                                    <a href="{{route('plains')}}">برنامه های گروه</a>
                                </li>

                                <li class="dropdown">
                                    <a href="{{route('news')}}">اخبار</a>
                                </li>

                                {{--<li class="dropdown">--}}
                                    {{--<a href="#">مقالات</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="{{route('articles')}}">آموزشی</a></li>--}}
                                        {{--<li><a href="{{route('articles2')}}">انگیزشی</a></li>--}}
                                    {{--</ul>--}}

                                {{--</li>--}}
                                <li><a href="{{route('registerform')}}">عضویت در گروه</a></li>

                                <li class="dropdown">
                                    <a href="{{route('abouts')}}">درباره ما </a>
                                </li>

                                <li><a href="{{route('contactform')}}">تماس با ما</a></li>
                                {{--<li><a href="{{route('admin.index')}}">پنل ادمین</a></li>--}}
                                {{--@guest--}}
                                    {{--@if (Route::has('login'))--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                                        {{--</li>--}}
                                    {{--@endif--}}

                                    {{--@if (Route::has('register'))--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                        {{--</li>--}}
                                    {{--@endif--}}
                                {{--@else--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                            {{--{{ Auth::user()->name }}--}}
                                        {{--</a>--}}

                                        {{--<div class="menu-right" aria-labelledby="navbarDropdown">--}}
                                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                                {{--{{ __('Logout') }}--}}
                                            {{--</a>--}}

                                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                                                {{--@csrf--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--@endguest--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>