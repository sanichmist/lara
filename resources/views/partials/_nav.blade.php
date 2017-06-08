<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-default b2c-navbar">
    <div class="container-fluid">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="nav navbar-nav">
                    <li class=""><a href="">@lang('main.news')</a></li>
                    <li class="b2c-navbar-dots"><a></a></li>
                    <li class=""><a href="">@lang('main.about')</a></li>
                    <li class="b2c-navbar-dots"><a></a></li>
                    <li class=""><a href="">@lang('main.tips')</a></li>
                    <li class="b2c-navbar-dots"><a></a></li>
                    <li class=""><a href="">@lang('main.contacts')</a></li>
                </div>
                {{--<ul class="nav navbar-nav">--}}
                {{--<li class="{{ Request::is('/') ? 'active' : "" }}"><a href="/">Home</a></li>--}}
                {{--<li class="{{ Request::is('blog') ? 'active' : "" }}"><a href="/blog">Blog</a></li>--}}
                {{--<li class="{{ Request::is('about') ? 'active' : "" }}"><a href="/about">About</a></li>--}}
                {{--<li class="{{ Request::is('contact') ? 'active' : "" }}"><a href="/contact">Contact</a></li>--}}
                {{--</ul>--}}

                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li class="">
                            <a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Мій гараж</a>
                        </li>
                        <li class="">
                            <a href=""><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                                Улюблене</a>
                        </li>
                        <li class="">
                            <a href=""><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Порівняти</a>
                        </li>

                        <li class="">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                        class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
                        </li>
                    @else
                        <li class="b2c-enter">
                            <a href="/login"><span class="glyphicon glyphicon-user"
                                                   aria-hidden="true"></span> @lang('main.login')</a>
                        </li>
                        <li class="">
                            <a href="/register"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                                @lang('main.register')</a>
                        </li>
                    @endif

                    <li class="dropdown b2c-language">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"
                           data-lang="ua">{{ \App\Http\Controllers\LanguageController::getCountryByLocale() }} <span
                                    class="caret"></span></a>
                        <ul id="b2c-language-menu" class="dropdown-menu">
                            @if(App::getLocale() != 'ua')
                                <li><a href="" data-lang="ua"><img src="img/ua.png"> @lang('main.ukrainian')</a></li>
                            @endif

                            @if(App::getLocale() != 'ru')
                                <li><a href="" data-lang="ru"><img src="img/ru.png"> @lang('main.russian')</a></li>
                            @endif

                            @if(App::getLocale() != 'en')
                                <li><a href="" data-lang="en"><img src="img/en.png"> @lang('main.english')</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
