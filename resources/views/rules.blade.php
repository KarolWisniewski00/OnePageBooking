@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 gsap">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="font-custom">Regulamin</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img alt="" src="{{asset('image/rules.jpg')}}" class="img-fluid">
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Regulamin</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img alt="" src="{{asset('image/rules.jpg')}}" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i>Zamknij</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
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