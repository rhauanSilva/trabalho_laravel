<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Trabalho Laravel')</title>
</head>
<body>

    @include('partials.nav')

    <main style="padding:20px;">
        @yield('content')
    </main>

</body>
</html>