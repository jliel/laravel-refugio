@extends('layouts.app')
@section('content')
<div class="container mw-50 d-flex  justify-content-center">
    <div class="d-flex justify-content-center align-content-center flex-wrap text-center card  col-sm-12 col-lg-6 p-4">
        
        <img src="{{asset($perro->image)}}" class="card-img-top profile-img" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{$perro->name}}</h3>
            <p class="card-text">Datos Generales.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><p>Edad:<span class="fw-bold"> {{$perro->edad}}</span></p></li>
            <li class="list-group-item"><p>Color:<span class="fw-bold"> {{$perro->color}}</span></p></li>
            <li class="list-group-item"><p>Raza:<span class="fw-bold"> {{$perro->raza}}</span></p></li>
        </ul>
    </div>
</div>
@endsection