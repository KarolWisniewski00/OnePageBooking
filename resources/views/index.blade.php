@extends('layout.main')
@section('meta')
<meta property="og:type" content="website" />
<meta property="og:url" content="{{route('index')}}" />

<title>ZB Apartments - firma Nowe Inspiracje</title>
<meta property="og:title" content="ZB Apartments - firma Nowe Inspiracje" />
<meta name="twitter:title" content="ZB Apartments - firma Nowe Inspiracje" />

<meta name="description" content="Sprawdź wyjątkowe, nowoczesne apartamenty do wynajęcia w okolicy Piekary Śląskie Bytom Bobrowniki Chorzów Katowice!">
<meta property="og:description" content="Sprawdź nawyjątkowe, nowoczesne apartamenty do wynajęcia w okolicy Piekary Śląskie Bytom Bobrowniki Chorzów Katowice!" />
<meta name="twitter:description" content="Sprawdź nawyjątkowe, nowoczesne apartamenty do wynajęcia w okolicy Piekary Śląskie Bytom Bobrowniki Chorzów Katowice!" />
<meta name="description" content="Sprawdź wyjątkowe, nowoczesne apartamenty do wynajęcia w okolicy Piekary Śląskie Bytom Bobrowniki Chorzów Katowice!">

<meta name="keywords" content="zbapartments,zb apartments,zbapartment,zb apartment, Nowe inspiracje, Nowe inspiracje apartamenty, Nowe inspiracje zbapartments,, apartamenty do wynajęcia Piekary Śląskie, apartamenty do wynajęcia w okolicy Piekary Śląskie, apartamenty do wynajęcia Bobrowniki, apartamenty do wynajęcia w okolicy Bobrowniki, nowoczesne apartamenty do wynajęcia, ekskluzywne apartamenty do wynajęcia, apartamenty pod wynajem krótkoterminowy">
@endsection('meta')
@section('content')
<!--HERO-->
<section>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="bg-img-hero-2"></div>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="font-custom">ZB APARTMENT BEIGE</h1>
                        <p><a class="btn btn-lg btn-primary m-2 ms-0" href="https://www.booking.com/Pulse-tpR9h6"><i class="fa-solid fa-link me-2"></i>Rezerwacja</a><a href="#gallery" class="btn btn-lg btn-secondary m-2 ms-0 photo-button" data-gallery="BEIGE"><i class="fa-solid fa-angles-right me-2"></i>Zobacz więcej</a></p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="bg-img-hero-1"></div>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="font-custom">ZB APARTMENT GOLD</h1>
                        <p><a class="btn btn-lg btn-primary m-2 ms-0" href="https://www.booking.com/Pulse-HtUu9z"><i class="fa-solid fa-link me-2"></i>Rezerwacja</a><a href="#gallery" class="btn btn-lg btn-secondary photo-button m-2 ms-0" data-gallery="GOLD"><i class="fa-solid fa-angles-right me-2"></i>Zobacz więcej</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!--HERO-->
<!--ABOUT-->
<section id="about">
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-5 gsap">
                <div class="d-flex flex-column justify-content-center align-items-start my-3">
                    <h3 class="text-primary pt-5">O nas</h3>
                    <h1 class="font-custom pb-5">Zrelaksuj się w naszych luksusowych apartamentach - czeka na ciebie niezapomniany wypoczynek.</h1>
                    <p class="my-3">Firma Nowe inspiracje - mieszkanie z pomysłem stworzyła nowoczesne apartamenty pod wynajem krótkoterminowy pod nazwą ZB Apartment który zapewni Ci komfortowy i luksusowy odpoczynek. Oferujemy wyjątkowe, nowoczesne apartamenty do wynajęcia w okolicy Piekary Śląskie Bytom Bobrowniki Chorzów Katowice.</p>
                    <p class="my-3">Nasz zespół posiada wieloletnie doświadczenie, które pozwala nam stworzyć warunki spełniające wszystkie twoje oczekiwania i potrzeby.</p>
                    <p class="my-3">Dla nas każdy gość jest wyjątkowy. Dokładamy wszelkich starań, aby Twój pobyt w naszych apartamentach był przyjemny i niezapomniany. Tworzymy wspomnienia, które będą zachętą do powrotu do naszej lokalizacji i skorzystania z naszych usług.</p>
                    <a href="https://www.booking.com/Pulse-HtUu9z" class="btn btn-primary btn-lg mt-4 mb-2"><i class="fa-solid fa-link me-2"></i>ZB APARTMENT GOLD</a>
                    <a href="https://www.booking.com/Pulse-tpR9h6" class="btn btn-secondary btn-lg mb-4 mt-2"><i class="fa-solid fa-link me-2"></i>ZB APARTMENT BEIGE</a>
                </div>
            </div>
            <div class="col-12 col-md-7 gsap">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="img-fluid" alt="" src="{{asset('image/gold/16.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT-->
<!--APARTMENTS-->
<section id="apartments">
    <div class="container-fluid">
        <div class="row my-5 bg-opacity-10 bg-primary pb-5">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">Apartamenty</h3>
                    <h1 class="font-custom">Strefa twojego komfortu</h1>
                </div>
            </div>
            <div class="col-12 col-md-6 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="box mx-2 my-4">
                        <div class="imgBx">
                            <img src="{{asset('image/gold/1.jpg')}}">
                        </div>
                        <div class="content">
                            <div>
                                <h2 class="font-custom h1">ZB APARTMENT GOLD</h2>
                                <p>Sześcioosobowy apartament Premium Gold z własnym ogrodem.
                                    Szukasz relaksu spokoju to dobrze trafiłeś.
                                    Super okazja dla osób podróżujących i korzystających z lotniska Katowice Pyrzowice
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="box mx-2 my-4">
                        <div class="imgBx">
                            <img src="{{asset('image/beige/3.jpg')}}">
                        </div>
                        <div class="content">
                            <div>
                                <h2 class="font-custom h1">ZB APARTMENT BEIGE</h2>
                                <p>Dwu pokojowy apartament typu Premium Beige z balkonem w bloku 3 piętrowym. Nowoczesny wystój zapewni wszystkim podróżującym komfort i relaks.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--APARTMENTS-->
<!--ICONS-->
<section>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary">Zalety</h3>
                    <h1 class="font-custom">Przewaga naszych apartamentów</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('svg/finish.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">Nowoczesne wnętrza z eleganckimi detalami</h1>
                        <p>Zapewniamy wyjątkowe wykończenie wnętrz, łącząc nowoczesny design z eleganckimi detalami,
                            neutralnymi kolorami i funkcjonalnymi rozwiązaniami.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('svg/privacy.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">Bezpieczna i poufna przestrzeń</h1>
                        <p>Zapewniamy pełną prywatność, gwarantując nienaruszalność pomieszczeń i mienia
                            mieszkańców, a także dyskrecję w rozpowszechnianiu informacji.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('svg/wifi.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">Wi-Fi</h1>
                        <p>Zapewniamy bezprzewodowy internet o wysokiej prędkości, który jest dostępny bezpłatnie.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('svg/comfort.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">

                        <h1 class="font-custom">W pełni komfortowe doświadczenie</h1>
                        <p>Zapewniamy Ci możliwość prowadzenia własnego trybu życia, ciesząc się wszystkimi udogodnieniami, bez ograniczeń i poczucia, że jesteś tymczasowym gościem. U nas możesz poczuć się jak w domu.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('svg/building.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">Doskonała infrastruktura wokół apartamentów</h1>
                        <p>Większość naszych apartamentów znajduje się na terenach o dogodnej infrastrukturze, zapewniających łatwy dostęp do wielu atrakcji i udogodnień.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('svg/price.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">

                        <h1 class="font-custom">Atrakcyjne ceny dostosowane do Twoich preferencji</h1>
                        <p>Oferujemy bardzo konkurencyjne ceny, które są uzależnione od sezonu, liczby osób oraz wybranego apartamentu. Dostosowujemy się do Twoich potrzeb, aby zapewnić Ci najlepszą ofertę.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ICONS-->
<!--PHOTO-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center bg-img-3 text-center text-white p-5">
                    <h1 class="font-custom">Zobacz interesujący cię apartament</h1>
                    <p>Nasze ekskluzywne i komfortowe apartamenty są wyposażone w wysokiej jakości udogodnienia oraz znajdują się w pobliżu atrakcji. Nasza kompetentna obsługa zadba o Twoje potrzeby. Bezpieczne podróże służbowe i wypoczynkowe to nasza specjalność.</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#gallery" class="btn btn-lg btn-primary me-2 photo-button" data-gallery="GOLD"><i class="fa-solid fa-angles-right me-2"></i>ZB APARTMENT GOLD</a>
                        <a href="#gallery" class="btn btn-lg btn-secondary photo-button" data-gallery="BEIGE"><i class="fa-solid fa-angles-right me-2"></i>ZB APARTMENT BEIGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--PHOTO-->
<!--GALLERY-->
<section id="gallery">
    <div class="container-fluid">
        <div class="row my-5 bg-opacity-10 bg-primary pb-5">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-end align-items-end mt-3 text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <i class="fa-solid fa-gears"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Ustawienia galerii</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="font-custom">Wybrano - ZB APARTMENT <span class="gallery-type">GOLD<span></h3>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-lg btn-primary me-2 photo-button" data-gallery="GOLD"><i class="fa-solid fa-angles-right me-2"></i>ZB APARTMENT GOLD</button>
                                                <button type="button" class="btn btn-lg btn-secondary photo-button" data-gallery="BEIGE"><i class="fa-solid fa-angles-right me-2"></i>ZB APARTMENT BEIGE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i>Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">Galeria - ZB APARTMENT <span class="gallery-type">GOLD<span></h3>
                    <h1 class="font-custom pb-3">Najlepsze udogodnienia</h1>
                </div>
                <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                    <div class="carousel-indicators d-none d-xl-flex justify-content-center align-items-end">
                        @for($x = 0; $x < 20; $x++) @if($x==0) <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" class="active" aria-current="true" aria-label="Slide {{$x+1}}"></button>
                            @else
                            <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" aria-label="Slide {{$x+1}}"></button>
                            @endif
                            @endfor
                    </div>
                    <div class="carousel-inner">
                        @for($x = 1; $x <= 20; $x++) @if($x==1) <div class="carousel-item carousel-item-gallery active text-center">
                            <img class="img-fluid img-gallery" alt="" src="{{asset('image/gold/'.$x.'.jpg')}}">
                    </div>
                    @else
                    <div class="carousel-item carousel-item-gallery text-center">
                        <img class="img-fluid img-gallery" alt="" src="{{asset('image/gold/'.$x.'.jpg')}}">
                    </div>
                    @endif
                    @endfor
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-left text-white"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-right text-whitet"></i></span>
                </button>
            </div>
        </div>
    </div>
    </div>
</section>
<!--GALLERY-->
<!--OPINION-->
<section id="opinion">
    <div class="container overflow-hidden">
        <div class="row pb-5">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3 text-center">
                    <h3 class="text-primary mt-5">Opinie - <span id="option-type">ZB APARTMENT GOLD</span></h3>
                    <h1 class="font-custom pb-3">Co mówią o nas goście</h1>
                </div>
                <div id="myCarousel3" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                    <div class="carousel-indicators d-none d-xl-flex justify-content-center align-items-end">
                        @foreach($opinions as $key => $opinion)
                        @if($key==0)
                        <button type="button" style="background-color: black;" data-bs-target="#myCarousel3" data-bs-slide-to="{{$key}}" class="active" aria-current="true" aria-label="Slide {{$key+1}}"></button>
                        @else
                        <button type="button" style="background-color: black;" data-bs-target="#myCarousel3" data-bs-slide-to="{{$key}}" aria-label="Slide {{$key+1}}"></button>
                        @endif
                        @endforeach
                    </div>

                    @foreach($opinions as $key => $opinion)
                    @if($key==0)
                    <div class="carousel-item active text-center">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>{{$opinion['span_content']}}</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-2">
                                <img alt="" src="{{$opinion['img_profile_src']}}" class="img-fluid rounded-circle" style="max-height: 3em;"> {{$opinion['profile_name']}} <cite title="Source Title"><img alt="" src="{{$opinion['img_country_src']}}" class="img-fluid"> {{$opinion['country_name']}}</cite>
                            </figcaption>
                        </figure>
                    </div>
                    @else
                    <div class="carousel-item text-center">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>{{$opinion['span_content']}}</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-2">
                                <img alt="" src="{{$opinion['img_profile_src']}}" class="img-fluid rounded-circle" style="max-height: 3em;"> {{$opinion['profile_name']}} <cite title="Source Title"><img alt="" src="{{$opinion['img_country_src']}}" class="img-fluid"> {{$opinion['country_name']}}</cite>
                            </figcaption>
                        </figure>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--OPINION-->
<!--OPINION BEIGE-->
<section id="opinion" class="bg-opacity-10 bg-primary">
    <div class="container overflow-hidden">
        <div class="row pb-5">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3 text-center">
                    <h3 class="text-primary mt-5">Opinie - <span id="option-type">ZB APARTMENT BEIGE</span></h3>
                    <h1 class="font-custom pb-3">Co mówią o nas goście</h1>
                </div>
                <div id="myCarousel3" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                    <div class="carousel-indicators d-none d-xl-flex justify-content-center align-items-end">
                        @foreach($opinions_beige as $key => $opinion)
                        @if($key==0)
                        <button type="button" style="background-color: black;" data-bs-target="#myCarousel3" data-bs-slide-to="{{$key}}" class="active" aria-current="true" aria-label="Slide {{$key+1}}"></button>
                        @else
                        <button type="button" style="background-color: black;" data-bs-target="#myCarousel3" data-bs-slide-to="{{$key}}" aria-label="Slide {{$key+1}}"></button>
                        @endif
                        @endforeach
                    </div>

                    @foreach($opinions_beige as $key => $opinion)
                    @if($key==0)
                    <div class="carousel-item active text-center">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>{{$opinion['span_content']}}</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-2">
                                <img alt="" src="{{$opinion['img_profile_src']}}" class="img-fluid rounded-circle" style="max-height: 3em;"> {{$opinion['profile_name']}} <cite title="Source Title"><img alt="" src="{{$opinion['img_country_src']}}" class="img-fluid"> {{$opinion['country_name']}}</cite>
                            </figcaption>
                        </figure>
                    </div>
                    @else
                    <div class="carousel-item text-center">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>{{$opinion['span_content']}}</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mt-2">
                                <img alt="" src="{{$opinion['img_profile_src']}}" class="img-fluid rounded-circle" style="max-height: 3em;"> {{$opinion['profile_name']}} <cite title="Source Title"><img alt="" src="{{$opinion['img_country_src']}}" class="img-fluid"> {{$opinion['country_name']}}</cite>
                            </figcaption>
                        </figure>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--OPINION BEIGE-->
<!--CONTACT-->
<section id="contact">
    <div class="container">
        <div class="row my-5 pb-5">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">Kontakt</h3>
                    <h1 class="font-custom">Skontaktuj się z nami</h1>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="row">
                    <div class="col-12 col-md-6 gsap">
                        <a href="tel:+48503517499" class="d-flex flex-column justify-content-center align-items-center p-5 h-100 text-black" style="text-decoration: none;">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/phone.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Telefon</h1>
                                <p>+48 503 517 499</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 gsap">
                        <a href="mailto:zbapartamenty@gmail.com" class="d-flex flex-column justify-content-center align-items-center p-5 h-100 text-black" style="text-decoration: none;">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/mail.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Email</h1>
                                <p>zbapartamenty@gmail.com</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 gsap">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/location.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Adres</h1>
                                <h6 class="font-custom fw-bold">ZB APARTMENT GOLD</h6>
                                <p>42-583 Bobrowniki ul.żurawia 4/2</p>
                                <h6 class="font-custom fw-bold">ZB APARTMENT BEIGE</h6>
                                <p>41-943 Piekary Śląskie ul.Bursztynowa 20/2/4</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 gsap">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/data.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Biuro/Firma</h1>
                                <p>Nowe Inspiracje</p>
                                <p>41-943 Piekary Śląskie</p>
                                <p>Ul.Sienkiewicza 1 - 1 piętro</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 gsap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.595881555401!2d18.94442557726536!3d50.37408949285809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d3307d5711cf%3A0x598ebce1077d64a6!2sNowe%20Inspiracje!5e0!3m2!1spl!2spl!4v1688398134351!5m2!1spl!2spl" style="border:0; height: 100%; min-height: 30em; width: 100%;" class="py-5" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!--CONTACT-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<!-- Messenger Wtyczka czatu Code -->
<div id="fb-root"></div>

<!-- Your Wtyczka czatu code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "441625376173865");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v17.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    var selectedApartmentGallery = 'GOLD';

    $(document).ready(function() {
        $('.photo-button').click(function() {
            selectedApartmentGallery = $(this).data('gallery');
            $('.gallery-type').text(selectedApartmentGallery);
            updateGalleryImages(selectedApartmentGallery);
        });
    });

    function updateGalleryImages(gallery) {
        $('.carousel-item-gallery').each(function(index) {
            var folder = gallery === 'GOLD' ? 'gold' : 'beige';
            var imagePath = "{{asset('image/')}}/" + folder + "/" + (index + 1) + ".jpg";
            console.log(index)
            $(this).find('.img-gallery').attr('src', imagePath);
        });
    }

    //SCROLL TRIGGER
    gsap.registerPlugin(ScrollTrigger);

    function st(string) {
        const elements = document.querySelectorAll('.gsap');
        elements.forEach(element => {
            gsap.fromTo(element.children, {
                opacity: 0,
                y: 100,
                scale: 0.8
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 1,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: element,
                    start: 'top 75%',
                    end: 'top 75%',
                }
            });
        });
    };
    st();
</script>
@endsection