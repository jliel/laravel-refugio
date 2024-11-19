@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-content-center flex-wrap">
    <div class="card  align-content-center w-75 card-principal">
        <div class="title p-4 d-flex flex-column justify-content-center align-content-center flex-wrap text-center m-4">
            <h2>Bienvenido al sistema de control del refugio.</h2>
            <p>Ven visitanos!</p>
            <div id="carouselExampleIndicators" class="carousel slide text-center" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach($sliders as $key => $slider)
                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            <img src="{{ $slider->url }}" class="d-block w-100 carousel-img" alt="{{ $slider->title }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Refugio</h5>
                                <p>Algunos de nuestros rescates.</p>
                            </div>
                        </div>
                    @endforeach



                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    <span class="visually-hidden">Previous</span>

                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    <span class="visually-hidden">Next</span>

                </button>

            </div>
        </div>
    </div>
</div>
@endsection