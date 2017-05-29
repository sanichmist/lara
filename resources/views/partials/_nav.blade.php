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
                    <li class=""><a href="">Новини</a></li>
                    <li class=""><a href="">Про проект</a></li>
                    <li class=""><a href="">Корисні поради</a></li>
                    <li class=""><a href="">Контакти</a></li>
                </div>
                {{--<ul class="nav navbar-nav">--}}
                {{--<li class="{{ Request::is('/') ? 'active' : "" }}"><a href="/">Home</a></li>--}}
                {{--<li class="{{ Request::is('blog') ? 'active' : "" }}"><a href="/blog">Blog</a></li>--}}
                {{--<li class="{{ Request::is('about') ? 'active' : "" }}"><a href="/about">About</a></li>--}}
                {{--<li class="{{ Request::is('contact') ? 'active' : "" }}"><a href="/contact">Contact</a></li>--}}
                {{--</ul>--}}

                <ul class="nav navbar-nav navbar-right">
                    @if(1 == 2)
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
                    @else
                        <li class="b2c-enter">
                            <a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> @lang('main.login')</a>
                        </li>
                        <li class="">
                            <a href=""><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> або
                                зареєструватися</a>
                        </li>
                    @endif

                    <li class="dropdown b2c-language">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false" data-lang="ua">Укр <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-lang="ua">Укр</a></li>
                            <li><a href="#" data-lang="ru">Рус</a></li>
                            <li><a href="#" data-lang="en">Анг</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
