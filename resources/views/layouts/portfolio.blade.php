<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.portfolio-head')
        <title>     {{ config('app.name', 'CST452Capstone') }}
            @yield('title')
        </title>
    </head>
    <body>
        <div id="wrapper">
            @include('includes.portfolio-header')
            <div id="content">
                    @include('includes.portfolio-sidebar')
                @yield('content')
            </div>
            <br>
            <div class="push"></div>
        </div>
        <div id="footer">
            <div id="footer-content ">
                @include('includes.footer')
            </div>
        </div>
    </body>
</html>
