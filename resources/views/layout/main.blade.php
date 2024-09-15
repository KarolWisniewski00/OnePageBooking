<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('image/logo.png')}}" type="image/png">
    <meta property="og:image" content="{{asset('image/logo.png')}}" />
    <meta name="robots" content="max-image-preview:large" />
    <meta name="twitter:card" content="summary" />
    <meta property="og:locale" content="pl_PL" />
    <meta name="author" content="Karol Wiśniewski">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <meta property="og:site_name" content="ZB Apartments - firma Nowe Inspiracje" />
    @yield('meta')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--NAV-->
    <section>
        <header class="py-1 bg-dark border-bottom">
            <div class="container d-flex flex-wrap justify-content-center">
                <ul class="nav col-md-4 justify-content-center">
                </ul>
                <ul class="nav col-md-4 justify-content-center">
                    <li class="nav-item text-white px-1 text-end">{{$setting['header']}}</li>
                </ul>
                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item text-white px-1"><a href="{{$setting['ig_link']}}" class="text-white" style="text-decoration: none;"><img class="rounded-circle" alt="" src="https://static.cdninstagram.com/rsrc.php/v3/yb/r/lswP1OF1o6P.png" width="32px" height="32px"></a></li>
                    <li class="nav-item text-white px-1"><a href="{{$setting['b_link']}}" class="text-white" style="text-decoration: none;"><img class="rounded-circle" alt="" src="https://cf.bstatic.com/static/img/favicon/9ca83ba2a5a3293ff07452cb24949a5843af4592.svg" width="32px" height="32px"></a></li>
                </ul>
            </div>
        </header>
        <nav class="py-3 mb-4 border-bottom">
            <div class="container d-flex flex-wrap justify-content-center justify-content-md-between align-items-center">
                <ul class="nav col-md-3">
                    <li class="nav-item"><a href="{{ Request::path() == '/' ? '' : route('index') }}#apartments" class="nav-link link-dark px-2">Apartamenty</a></li>
                </ul>
                <a href="{{route('index')}}" class="d-flex align-items-center justify-content-center col-12 col-md-auto">
                    <img class="img-fluid" alt="" src="{{asset('image/logo.png')}}" style="max-width: 8em;">
                </a>
                <ul class="nav col-md-3 justify-content-center">
                    <li class="nav-item"><a href="{{ Request::path() == '/' ? '' : route('index') }}#contact" class="nav-link link-dark px-2">Kontakt</a></li>
                    <li class="nav-item"><a href="{{ Request::path() == '/' ? '' : route('index') }}#gallery" class="nav-link link-dark px-2">Galeria</a></li>
                    <li class="nav-item"><a href="{{route('rules')}}" class="nav-link link-dark px-2">Regulamin</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <!--NAV-->
    @yield('content')
    <!--FOOTER-->
    <section>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">&copy; {{ now()->year }}<a href="https://wibest.pl" class="ms-2 text-muted mb-0 text-decoration-none">WIBEST</a></p>

                <a href="{{route('index')}}" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img class="img-fluid" alt="" src="{{asset('image/logo.png')}}" style="max-width: 6em;">
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="{{ Request::path() == '/' ? '' : route('index') }}#apartments" class="nav-link px-2 text-muted">O nas</a></li>
                    <li class="nav-item"><a href="{{ Request::path() == '/' ? '' : route('index') }}#contact" class="nav-link px-2 text-muted">Kontakt</a></li>
                    <li class="nav-item"><a href="{{ Request::path() == '/' ? '' : route('index') }}#gallery" class="nav-link px-2 text-muted">Galeria</a></li>
                    <li class="nav-item"><a href="{{route('rules')}}" class="nav-link px-2 text-muted">Regulamin</a></li>
                </ul>
            </footer>
        </div>
    </section>
    <!--FOOTER-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>