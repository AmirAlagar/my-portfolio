<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-navbutton-color" content="#000000">
        <meta property="og:image" content="{{ asset('images/favicon.png') }}">
        <meta property="og:image:alt" content="Amir Yahya C. Alagar">
        <meta property="og:type" content="website">
        <meta name="robots" content="noodp">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/gif" sizes="16x16">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>
        <title>Amir Yahya Alagar @yield('title')</title>
    </head>
    <body>
        <main>
            <div class="container-fluid">
                @include('layouts.navbar')
                <div class="content-margin">
                    @section('content')
                    @show
                </div>
            </div>
        </main>
    </body>
</html>
