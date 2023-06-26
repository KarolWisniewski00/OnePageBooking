<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One page</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--NAV-->
    <section>
        <nav class="py-1 bg-dark border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item text-white px-1"><i class="fa-solid fa-location-dot me-2"></i>Żurawia 4/2,
                        42-583 Bobrowniki, Polska</li>
                    <li class="nav-item text-white px-1"><i class="fa-solid fa-envelope me-2"></i>przykład@gmail.com
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item text-white px-1"><i class="fa-brands fa-facebook"></i></li>
                    <li class="nav-item text-white px-1"><i class="fa-brands fa-instagram"></i></li>
                </ul>
            </div>
        </nav>
        <header class="py-3 mb-4 border-bottom">
            <div class="container d-flex flex-wrap justify-content-between align-items-center">
                <a href="{{route('index')}}" class="d-flex align-items-center justify-content-center">
                    <img class="img-fluid" alt="" src="{{asset('image/logo.jpeg')}}" style="max-width: 8em;">
                </a>
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle link-dark" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Apartamenty
                        </div>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{route('index')}}">Bobrowniki</a></li>
                            <li><a class="dropdown-item" href="#">Piekary Centrum</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('index')}}#about" class="nav-link link-dark px-2">O nas</a></li>
                    <li class="nav-item"><a href="{{route('index')}}#contact" class="nav-link link-dark px-2">Kontakt</a></li>
                    <li class="nav-item"><a href="{{route('index')}}#gallery" class="nav-link link-dark px-2">Galeria</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Regulamin</a></li>
                </ul>
            </div>
        </header>
    </section>
    <!--NAV-->
    @yield('content')
    <!--FOOTER-->
    <section>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">&copy; 2023 Created by Karol Wiśniewski</p>

                <a href="{{route('index')}}"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img class="img-fluid" alt="" src="{{asset('image/logo.jpeg')}}" style="max-width: 6em;">
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="{{route('index')}}#about" class="nav-link px-2 text-muted">O nas</a></li>
                    <li class="nav-item"><a href="{{route('index')}}#contact" class="nav-link px-2 text-muted">Kontakt</a></li>
                    <li class="nav-item"><a href="{{route('index')}}#gallery" class="nav-link px-2 text-muted">Galeria</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Regulamin</a></li>
                </ul>
            </footer>
        </div>
    </section>
    <!--FOOTER-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>