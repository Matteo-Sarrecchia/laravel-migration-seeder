<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')
    <title>@yield('pageName')</title>
</head>
<body>

    @include("components.header")

    <div class="container-fluid text-center">
        @yield("content")
    </div>

    @include("components.footer")

</body>
</html>