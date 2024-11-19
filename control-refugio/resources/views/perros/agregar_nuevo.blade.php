@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-content-center flex-wrap">
    <div class="card  align-content-center w-75 card-principal">
        <div class="title p-4 d-flex flex-column justify-content-center align-content-center flex-wrap text-center m-4">
            <div class="title ">
                <h3>Registrar nuevo perro.</h3>
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
            <form class="w-100 row" action="{{ route('perros.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-6">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="raza">Raza</label>
                        <input type="text" name="raza" id="raza" class="form-control" />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="color">Color</label>
                        <input type="text" name="color" id="color" class="form-control" />
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="edad">Edad</label>
                        <input type="number" name="edad" id="edad" class="form-control" />
                    </div>


                    <!-- Submit button -->
                    <div class="d-flex gap-1 justify-content-center">

                        <input type="submit" class="btn btn-success btn-block mb-4" value="Guardar">
                        <a href="{{ route('perros') }}" class="btn btn-danger btn-block mb-4">Cancelar
                        </a>
                    </div>
                </div>
                <!-- Name input -->
                <div
                    class=" col-6 d-flex flex-column align-content-center justify-content-center text-center flex-wrap">
                    <h4>Subir imagen..</h4>
                    <div class="form-group profile-picture">
                        <input type="file" name="image" placeholder="Choose image" id="image" class="file-uploader">
                        @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <img id="image-preview" src="{{asset('image/prof.jpg')}}" alt="preview image"
                            style="max-height: 250px;">
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
@section('footer-scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function (e) {


        $('#image').change(function () {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#image-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

</script>
@endsection