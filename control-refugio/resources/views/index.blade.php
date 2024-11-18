@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="title p-4">
            <h2>Bienvenido al sistema de control del refugio.</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    @foreach($sliders as $key => $slider)
                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            <img src="{{ $slider->url }}" class="d-block w-100 carousel-img" alt="{{ $slider->title }}">
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