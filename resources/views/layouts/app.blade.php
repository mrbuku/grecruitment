<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript">
        window.app = {!! json_encode([
            'csrfToken' => csrf_token(),
            'site' => config('app.url'),
            'locale' => app()->getLocale(),
        ]) !!}
    </script>
</head>
<body class="@yield('body_css')">

@include('layouts.partials.header')

<main class="overflow-hidden flex-auto">
    @yield('body')
</main>

@include('layouts.partials.footer')

@stack('scripts-before')

@stack('scripts-after')
<script type="application/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>
