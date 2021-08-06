
<nav class="navbar navbar-expand-md bg-light border-bottom fixed-top">
    <div class="container d-flex flex-wrap">
        <img src="img/favicon.png" width="40" height="41" alt="">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/" class="nav-link link-dark px-2" >PHP study page</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="/about.php" class="nav-link link-dark px-2">About</a></li>

            <li class="nav-item"><a href="/auth.php" class="btn btn-outline-dark btn-light px-2">
                    @if($_COOKIE['user'] == true): My Profile
                    @else Sign Up @endif
                </a></li>
        </ul>
    </div>
</nav>
<br><br><br>
