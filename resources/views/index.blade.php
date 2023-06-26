@extends('layout.main')
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
                <div class="bg-img-hero-1"></div>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="font-custom">Witaj w ZB Apartment</h1>
                        <p><a class="btn btn-lg btn-primary" href="https://www.booking.com/hotel/pl/zacisze-bobrowniki.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=4e7194952f90acd8473a242dc92354cc&dist=0&group_adults=2&group_children=0&keep_landing=1&no_rooms=1&sb_price_type=total&type=total&#map_closed"><i class="fa-solid fa-link me-2"></i>Rezerwacja</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-img-hero-2"></div>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="font-custom">Strefa twojego komfortu</h1>
                        <p><a class="btn btn-lg btn-primary" href="https://www.booking.com/hotel/pl/zacisze-bobrowniki.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=4e7194952f90acd8473a242dc92354cc&dist=0&group_adults=2&group_children=0&keep_landing=1&no_rooms=1&sb_price_type=total&type=total&#map_closed#"><i class="fa-solid fa-link me-2"></i>Booking</a></p>
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
            <div class="col-12 col-md-5">
                <div class="d-flex flex-column justify-content-center align-items-start my-3">
                    <h3 class="text-primary pt-5">O nas</h3>
                    <h1 class="font-custom pb-5">Zrelaksuj się w Bobrownikach - czeka na Ciebie niezapomniany
                        wypoczynek</h1>
                    <p class="my-3">Firma ZB Apartment zapewni Ci komfortowy i luksusowy odpoczynek. Oferujemy
                        wyjątkowe, nowoczesne apartamenty do wynajęcia w okolicy Katowic.</p>
                    <p class="my-3">Nasz zespół posiada wieloletnie doświadczenie, które pozwala nam stworzyć
                        warunki spełniające wszystkie Twoje oczekiwania i potrzeby.</p>
                    <p class="my-3">Dla nas każdy gość jest wyjątkowy. Dokładamy wszelkich starań, aby Twój pobyt w
                        naszych apartamentach był przyjemny i niezapomniany. Tworzymy wspomnienia, które będą
                        zachętą do powrotu do naszej lokalizacji i skorzystania z naszych usług.</p>
                    <a href="https://www.booking.com/hotel/pl/zacisze-bobrowniki.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=4e7194952f90acd8473a242dc92354cc&dist=0&group_adults=2&group_children=0&keep_landing=1&no_rooms=1&sb_price_type=total&type=total&#map_closed" class="btn btn-primary btn-lg my-5"><i class="fa-solid fa-angles-right me-2"></i>Dowiedz się więcej</a>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="img-fluid" alt="" src="{{asset('image/16.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT-->
<!--APARTMENTS-->
<section>
    <div class="container-fluid">
        <div class="row my-5 bg-opacity-10 bg-primary pb-5">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">Apartamenty</h3>
                    <h1 class="font-custom">Strefa twojego komfortu</h1>
                </div>
            </div>
            <div class="col-12 col-md-6 p-5">
                <a href="https://www.booking.com/hotel/pl/zacisze-bobrowniki.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=4e7194952f90acd8473a242dc92354cc&dist=0&group_adults=2&group_children=0&keep_landing=1&no_rooms=1&sb_price_type=total&type=total&#map_closed" class="position-relative cat-card">
                    <div class="bg-img-1"></div>
                    <div class="position-absolute top-0 start-50 translate-middle-x text-center mt-3 p-2">
                        <h2 class="cat-head font-custom">ZB Apartment Bobrowniki</h2>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 p-5">
                <div class="position-relative cat-card">
                    <div class="bg-img-2"></div>
                    <div class="position-absolute top-0 start-50 translate-middle-x text-center mt-3 p-2">
                        <p class="cat-cat">W trakcie realizacji</p>
                        <h2 class="cat-head">ZB Apartment Centrum Piekary</h2>
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
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary">Zalety</h3>
                    <h1 class="font-custom">Przewaga naszych apartamentów</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
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
            <div class="col-12 col-sm-6 col-md-4">
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
            <div class="col-12 col-sm-6 col-md-4">
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
            <div class="col-12 col-sm-6 col-md-4">
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
            <div class="col-12 col-sm-6 col-md-4">
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
            <div class="col-12 col-sm-6 col-md-4">
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
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center bg-img-3 text-center text-white p-5">

                    <h1 class="font-custom">Gotowy na niezapomnianą przygodę</h1>
                    <p>Nasze ekskluzywne i komfortowe apartamenty są wyposażone w wysokiej jakości udogodnienia oraz znajdują się w pobliżu atrakcji. Nasza kompetentna obsługa zadba o Twoje potrzeby. Bezpieczne podróże służbowe i wypoczynkowe to nasza specjalność.</p>
                    <a class="btn btn-lg btn-primary" href="https://www.booking.com/hotel/pl/zacisze-bobrowniki.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=4e7194952f90acd8473a242dc92354cc&dist=0&group_adults=2&group_children=0&keep_landing=1&no_rooms=1&sb_price_type=total&type=total&#map_closed"><i class="fa-solid fa-link me-2"></i>Booking</a>
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
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">Galeria</h3>
                    <h1 class="font-custom pb-3">Najlepsze udogodnienia</h1>
                </div>
                <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                    <div class="carousel-indicators d-none d-xl-flex justify-content-center align-items-end">
                        @for($x = 0; $x <= 18; $x++) @if($x==0) <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" class="active" aria-current="true" aria-label="Slide {{$x+1}}"></button>
                            @else
                            <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" aria-label="Slide {{$x+1}}"></button>
                            @endif
                            @endfor
                    </div>
                    <div class="carousel-inner">
                        @for($x = 1; $x <= 18; $x++) @if($x==1) <div class="carousel-item active text-center">
                            <img class="img-fluid" alt="" src="{{asset('image/'.$x.'.jpg')}}">
                    </div>
                    @else
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="" src="{{asset('image/'.$x.'.jpg')}}">
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
<!--CONTACT-->
<section id="contact">
    <div class="container">
        <div class="row my-5 pb-5">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">Kontakt</h3>
                    <h1 class="font-custom">Skontaktuj się z nami</h1>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/phone.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Telefon</h1>
                                <p>+48 123 456 789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/mail.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Email</h1>
                                <p>przykład@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/location.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Adres</h1>
                                <p>Żurawia 4/2,
                                    42-583 Bobrowniki, Polska</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/data.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Dane firmy</h1>
                                <p>ZB Apartments Sp. z o.o. NIP: 1234567890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.6909182704485!2d19.012544277345352!3d50.3909600715808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d5590ca8f05d%3A0x21221ef9127cf607!2s%C5%BBurawia%204a%2F2%2C%2044-122%20Bobrowniki!5e0!3m2!1spl!2spl!4v1687808053757!5m2!1spl!2spl" style="border:0; height: 100%; min-height: 30em; width: 100%;" allowfullscreen="" loading="lazy" class="py-5" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!--CONTACT-->
@endsection