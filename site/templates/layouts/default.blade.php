<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

</head>

<body class="bg-orange-50">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</body>

</html>
