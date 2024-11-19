@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-content-center flex-wrap">
    <div class="card  align-content-center w-75 card-principal">
        <div class="title p-4 d-flex flex-column justify-content-center align-content-center flex-wrap text-center m-4">
            <h2>Estos son los perros que nos acompañan en el refugio!</h2>
            @guest
                <p>Ven y adopta alguno.</p>
                <div class="container">
                    <div class="d-flex flex-row flex-wrap gap-2">
                        @foreach ($perros as $perro)
                        <a href="{{route('perros.perfil', ['id'=>$perro->id])}}">

                            <img src="{{$perro->image}}" class="gallery-img rounded" alt="">
                        </a>
                        @endforeach
                    </div>
                </div>
            @endguest
            @auth
                <a href="{{route('nuevo')}}" class="btn btn-dark mb-3">Agregar nuevo</a>

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Raza</th>
                            <th>Color</th>
                            <th>Edad</th>
                            @auth
                                <th>Acciones</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perros as $perro)

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{$perro->image}}" alt="" style="width: 45px; height: 45px"
                                            class="rounded-circle" />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">{{$perro->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{$perro->raza}}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{$perro->color}}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{$perro->edad}}</p>
                                </td>
                                @auth
                                    <td class="">
                                        <input type="text" value="{{$perro->id}}" hidden>
                                        <a class="btn btn-link btn-sm btn-rounded btn-success btn-actions"
                                            href="{{ route('editar', ['id' => $perro->id]) }}">
                                            Editar
                                        </a>
                                        <form method="post" action="{{ route('perros.borrar', $perro->id) }}">
                                            @csrf
                                            @method('delete')
                                            <input name="_method" type="hidden" value="DELETE">
                                            <a type="submit"
                                                class="btn btn-link btn-sm btn-rounded btn-actions btn-danger show_confirm"
                                                data-toggle="tooltip">Eliminar</a>
                                        </form>
                                    </td>
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endauth
            <div class="mt-2 d-flex align-content-center flex-wrap w-100 justify-content-center">
                {!! $perros->links() !!}
            </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">
    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Eliminar este registro?`,
            text: "El registro se eliminara de forma permante.",
            icon: "Cuidado",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });

</script>
@endsection