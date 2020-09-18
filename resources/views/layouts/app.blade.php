<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/gif" sizes="16x16">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>
        
    </head>
    <body>
        <main>
            <div class="container-fluid">
                @include('layouts.navbar')
            </div>
        </main>
    </body>
</html>
