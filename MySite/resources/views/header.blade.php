<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    {{--    <link  rel="icon" href="img/favicon.png">--}}
        <title>My php site</title>
    </head>
<body>
    <nav class="navbar navbar-expand-md bg-light border-bottom fixed-top">
        <div class="container d-flex flex-wrap">
            <img src="/MySite/public/favicon.ico" width="40" height="41" alt="">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="/" class="nav-link link-dark px-2" >PHP study page</a></li>
            </ul>
            <ul class="nav">
                <li class="nav-item"><a href="/about" class="nav-link link-dark px-2">About</a></li>

                <li class="nav-item"><a href="/login" class="btn btn-outline-dark btn-light px-2"> Sign Up
    {{--                    @if($_COOKIE['user'] == true): My Profile--}}
    {{--                    @else Sign Up @endif--}}
                    </a></li>
            </ul>
        </div>
    </nav>
<br><br><br>

    <main class="flex-shrink-0">
        <div class="container">
            @yield('text')
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Найкрасивіший в світі footer</span>
        </div>
    </footer>
</body>
