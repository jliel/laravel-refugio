@extends('layouts.app')

@section('content')
<div class="container mw-50 d-flex  justify-content-center">
    <div class="card  col-sm-12 col-lg-6 p-4">
        <div class="title ">
            <h3>Editar datos del perro.</h3>
        </div>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form class="d-flex  flex-column w-20" action="{{ url('perros/editar/'.$perro->id)}}" method="post" enctype="multipart/form-data">
            <!-- Name input -->
            @csrf
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" name="name" id="nombre" class="form-control" value="{{$perro->name ? $perro->name: ''}}"/>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="raza">Raza</label>
                <input type="text" name="raza" id="raza" class="form-control" value="{{$perro->raza ? $perro->raza: ''}}"/>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control" value="{{$perro->color ? $perro->color: ''}}"/>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="edad">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" value="{{$perro->edad ? $perro->edad: ''}}"/>
            </div>


            <!-- Submit button -->
            <div class="d-flex gap-1 justify-content-center">

                <input type="submit" data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4" value="Actualizar">
                <a data-mdb-ripple-init type="button" class="btn btn-danger btn-block mb-4" href="{{ route('perros')}}">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection