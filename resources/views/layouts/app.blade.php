<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | PerpusKu</title>
    @include('partials.style')
</head>
<body>
    @isset($username)
        <x-navbar :username="$username" />
    @endisset

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
