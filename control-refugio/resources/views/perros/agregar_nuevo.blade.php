@extends('layouts.app')

@section('content')
<div class="container mw-50 d-flex  justify-content-center">
    <div class="card  col-sm-12 col-lg-6 p-4">
        <div class="title ">
            <h3>Registrar nuevo perro.</h3>
        </div>
        <form class="d-flex  flex-column w-20">
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" id="nombre" class="form-control" />
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="raza">Raza</label>
                <input type="text" id="raza" class="form-control" />
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="color">Color</label>
                <input type="text" id="color" class="form-control" />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="edad">Edad</label>
                <input type="number" id="edad" class="form-control" />
            </div>


            <!-- Submit button -->
            <div class="d-flex gap-1 justify-content-center">

                <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Guardar</button>
                <button data-mdb-ripple-init type="button" class="btn btn-danger btn-block mb-4">Cancelar</button>
            </div>
        </form>
    </div>
</div>
@endsection