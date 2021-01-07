<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title-tab')</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        @include('partials.header')

        <main>
            @yield('content')
        </main>

    </body>
</html>
