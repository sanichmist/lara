<!DOCTYPE html>
<html lang="en">
    <head>

        @include('partials._head')

    </head>
    <body>

    @include('partials._nav')

    <div class="container">

        @include('partials._messages')

        @yield('content')

        @include('partials._footer')

    </div> <!-- end of .container -->

    @include('partials._javascript')

    @yield('scripts')
<form action="lang" method="post">
    <select name="locale">
        <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>en</option>
        <option value="ua" {{ App::getLocale() == 'ua' ? ' selected' : '' }}>ua</option>
        <option value="ru" {{ App::getLocale() == 'ru' ? ' selected' : '' }}>ru</option>
    </select>
    {!! csrf_field() !!}
    <input type="submit" value="do it">
</form>

    {{ trans('main.login') }}
    </body>
</html>