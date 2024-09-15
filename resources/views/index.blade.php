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
        <div class="carousel-inner">
            @foreach($flats as $key => $flat)
            @if($key == 0)
            <div class="carousel-item active">
            <div class="bg-img-hero-2" style="background-image: url('{{ asset('photo/' . $flat->foto1) }}');"></div>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="font-custom">{{$flat->name}}</h1>
                        <p><a class="btn btn-lg btn-primary m-2 ms-0" href="{{$flat->link}}"><i class="fa-solid fa-link me-2"></i>Rezerwacja</a><a href="#gallery" class="btn btn-lg btn-secondary m-2 ms-0 photo-button"><i class="fa-solid fa-angles-right me-2"></i>Zobacz więcej</a></p>
                    </div>
                </div>
            </div>
            @else
            @if ($flat->foto1)
            <div class="carousel-item">
                <div class="bg-img-hero-2" style="background-image: url('{{ asset('photo/' . $flat->foto1) }}');"></div>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class="font-custom">{{$flat->name}}</h1>
                        <p><a class="btn btn-lg btn-primary m-2 ms-0" href="{{$flat->link}}"><i class="fa-solid fa-link me-2"></i>Rezerwacja</a><a href="#gallery" class="btn btn-lg btn-secondary photo-button m-2 ms-0"><i class="fa-solid fa-angles-right me-2"></i>Zobacz więcej</a></p>
                    </div>
                </div>
            </div>
            @endif
            @endif
            @endforeach
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
                    <h3 class="text-primary pt-5">{{$setting['about']}}</h3>
                    <h1 class="font-custom pb-5">{{$setting['h1']}}</h1>
                    <p class="my-3">{{$setting['paragraf_1']}}</p>
                    <p class="my-3">{{$setting['paragraf_2']}}</p>
                    <p class="my-3">{{$setting['paragraf_3']}}</p>
                    @foreach($flats as $key => $flat)
                    @if($key == 0)
                    <a href="{{$flat->link}}" class="btn btn-primary btn-lg mt-4 mb-2"><i class="fa-solid fa-link me-2"></i>{{$flat->name}}</a>
                    @else
                    <a href="{{$flat->link}}" class="btn btn-secondary btn-lg mb-2 mt-2"><i class="fa-solid fa-link me-2"></i>{{$flat->name}}</a>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-7 gsap">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="img-fluid" alt="" src="{{asset('photo/'.$setting['foto_1'])}}">
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
                    <h3 class="text-primary mt-5">{{$setting['apart']}}</h3>
                    <h1 class="font-custom">{{$setting['h1_2']}}</h1>
                </div>
            </div>
            @foreach($flats as $key => $flat)
            @if ($flat->foto2)
            <div class="col-12 col-md-6 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="box mx-2 my-4">
                        <div class="imgBx">
                            <img src="{{ asset('photo/' . $flat->foto2) }}" alt="Zdjęcie mieszkania" class="img-fluid">
                        </div>
                        <div class="content">
                            <div>
                                <h2 class="font-custom h1">{{$flat->name}}</h2>
                                <p>
                                    {{$flat->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
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
                    <h3 class="text-primary">{{$setting['bene']}}</h3>
                    <h1 class="font-custom">{{$setting['h1_3']}}</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('photo/'.$setting['svg_1'])}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">{{$setting['h1_svg_1']}}</h1>
                        <p>{{$setting['p_svg_1']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('photo/'.$setting['svg_2'])}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">{{$setting['h1_svg_2']}}</h1>
                        <p>{{$setting['p_svg_2']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('photo/'.$setting['svg_3'])}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">{{$setting['h1_svg_3']}}</h1>
                        <p>{{$setting['p_svg_3']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('photo/'.$setting['svg_4'])}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">{{$setting['h1_svg_4']}}</h1>
                        <p>{{$setting['p_svg_4']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('photo/'.$setting['svg_5'])}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">{{$setting['h1_svg_5']}}</h1>
                        <p>{{$setting['p_svg_5']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{asset('photo/'.$setting['svg_6'])}}" class="img-fluid" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                        <h1 class="font-custom">{{$setting['h1_svg_6']}}</h1>
                        <p>{{$setting['p_svg_6']}}</p>
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
                <div class="d-flex flex-column justify-content-center align-items-center bg-img-3 text-center text-white p-5" style="background-image: url('{{ asset('photo/' . $setting['foto_4']) }}');">
                    <h1 class="font-custom">{{$setting['h1_4']}}</h1>
                    <p>{{$setting['p_4']}}</p>
                    <div class="d-flex justify-content-center align-items-center">
                        @foreach($flats as $key => $flat)
                        @if($key == 0)
                        <a href="{{$flat->link}}" class="btn btn-lg btn-primary me-2"><i class="fa-solid fa-angles-right me-2"></i>{{$flat->name}}</a>
                        @else
                        <a href="{{$flat->link}}" class="btn btn-lg btn-secondary me-2"><i class="fa-solid fa-angles-right me-2"></i>{{$flat->name}}</a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--PHOTO-->
<!--GALLERY-->
<section id="gallery">
    @foreach($flats as $key => $flat)
    <div class="container-fluid">
        <div class="row my-5 bg-opacity-10 bg-primary pb-5">
            <div class="col-12 gsap">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">Galeria - {{$flat->name}}</h3>
                    <h1 class="font-custom pb-3">{{$setting['gallery']}}</h1>
                </div>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        @if($flat->foto3)
                        <img
                            src="{{ asset('photo/' . $flat->foto3) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto3) }}" />
                        @endif
                        @if($flat->foto4)
                        <img
                            src="{{ asset('photo/' . $flat->foto4) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto4) }}" />
                        @endif
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        @if($flat->foto5)
                        <img
                            src="{{ asset('photo/' . $flat->foto5) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto5) }}" />
                        @endif
                        @if($flat->foto6)
                        <img
                            src="{{ asset('photo/' . $flat->foto6) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto6) }}" />
                        @endif
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        @if($flat->foto7)
                        <img
                            src="{{ asset('photo/' . $flat->foto7) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto7) }}" />
                        @endif
                        @if($flat->foto8)
                        <img
                            src="{{ asset('photo/' . $flat->foto8) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto8) }}" />
                        @endif
                    </div>
                </div>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        @if($flat->foto9)
                        <img
                            src="{{ asset('photo/' . $flat->foto9) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto9) }}" />
                        @endif
                        @if($flat->foto10)
                        <img
                            src="{{ asset('photo/' . $flat->foto10) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto10) }}" />
                        @endif
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        @if($flat->foto11)
                        <img
                            src="{{ asset('photo/' . $flat->foto11) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto11) }}" />
                        @endif
                        @if($flat->foto12)
                        <img
                            src="{{ asset('photo/' . $flat->foto12) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto12) }}" />
                        @endif
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        @if($flat->foto13)
                        <img
                            src="{{ asset('photo/' . $flat->foto13) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto13) }}" />
                        @endif
                        @if($flat->foto14)
                        <img
                            src="{{ asset('photo/' . $flat->foto14) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto14) }}" />
                        @endif
                    </div>
                </div>
                <!-- Gallery -->
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        @if($flat->foto15)
                        <img
                            src="{{ asset('photo/' . $flat->foto15) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto15) }}" />
                        @endif
                        @if($flat->foto16)
                        <img
                            src="{{ asset('photo/' . $flat->foto16) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto16) }}" />
                        @endif
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        @if($flat->foto17)
                        <img
                            src="{{ asset('photo/' . $flat->foto17) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto17) }}" />
                        @endif
                        @if($flat->foto18)
                        <img
                            src="{{ asset('photo/' . $flat->foto18) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto18) }}" />
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        @if($flat->foto19)
                        <img
                            src="{{ asset('photo/' . $flat->foto19) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto19) }}" />
                        @endif
                        @if($flat->foto20)
                        <img
                            src="{{ asset('photo/' . $flat->foto20) }}"
                            class="w-100 shadow rounded mb-4"
                            alt="{{ asset('photo/' . $flat->foto20) }}" />
                        @endif
                    </div>
                </div>
                <!-- Gallery -->
            </div>
        </div>
    </div>
    @endforeach
</section>
<!--GALLERY-->
<!--CONTACT-->
<section id="contact">
    <div class="container">
        <div class="row my-5 pb-5">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                    <h3 class="text-primary mt-5">{{$setting['contact']}}</h3>
                    <h1 class="font-custom">{{$setting['contact_h1']}}</h1>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="tel:{{$setting['contact_tel']}}" class="d-flex flex-column justify-content-center align-items-center p-5 h-100 text-black" style="text-decoration: none;">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/phone.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Telefon</h1>
                                <p>{{$setting['contact_tel']}}</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="mailto:{{$setting['contact_tel']}}" class="d-flex flex-column justify-content-center align-items-center p-5 h-100 text-black" style="text-decoration: none;">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/mail.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Email</h1>
                                <p>{{$setting['contact_email']}}</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/location.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">Adres</h1>
                                @foreach($flats as $key => $flat)
                                <h6 class="font-custom fw-bold">{{$flat->name}}</h6>
                                <p>{{$flat->adress}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex flex-column justify-content-center align-items-center p-5 h-100">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="{{asset('svg/data.svg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center my-3 text-center">
                                <h1 class="font-custom">{{$setting['contact_h1_adress']}}</h1>
                                <p>{{$setting['contact_adress_1']}}</p>
                                <p>{{$setting['contact_adress_2']}}</p>
                                <p>{{$setting['contact_adress_3']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
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
            xfbml: true,
            version: 'v17.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    var selectedApartmentGallery = 'LUXOR';

    $(document).ready(function() {
        $('.photo-button').click(function() {
            selectedApartmentGallery = $(this).data('gallery');
            $('.gallery-type').text(selectedApartmentGallery);
            updateGalleryImages(selectedApartmentGallery);
        });
    });

    function updateGalleryImages(gallery) {
        $('.carousel-item-gallery').each(function(index) {
            switch (gallery) {
                case 'LUXOR':
                    var folder = 'luxor';
                    var photo = '.jpg';
                    break;
                case 'BEIGE':
                    var folder = 'beige';
                    var photo = '.jpg';
                    break;
                case 'GREY':
                    var folder = 'grey';
                    var photo = '.jpeg';
                    break;
                default:
                    break;
            }


            var imagePath = "{{asset('image/')}}/" + folder + "/" + (index + 1) + photo;
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