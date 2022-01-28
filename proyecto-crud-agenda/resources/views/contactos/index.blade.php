@include('layouts.head')
@include('layouts.navigation')
<div class="container">
    <div class="row">
    <h1 class="col w-75 text-center header m-5">AGENDA CONTACTOS</h1>
        <a href="{{ url('contactos/create') }}" class="col align-self-center text-right">
            <button class="btn btn-info">
                + Crear Contacto
            </button>
        </a>

    </div>
    <div class="table table-hover table-responsive">
        <table class="table table-hover table-responsive" style="width: auto; margin: auto auto;">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">Acciones</th>

                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Foto</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Apellido</th>
                <th scope="col" class="text-center">Teléfono</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Edad</th>
                <th scope="col" class="text-center">Cumpleaños</th>
                <th scope="col" class="text-center">Idioma</th>
                {{--<th scope="col">Deportes</th>
                <th scope="col">Descripción</th>--}}
                <th scope="col">Color</th>

            </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
                <tr>
                    <td>
                        <div class="">
                            <a href="{{ url('/contactos/'.$dato->id.'/edit') }}" class="col align-self-center text-right">
                                <button class="btn btn-success">
                                    Editar
                                </button>
                            </a>
                            {{--<a href="{{ url('/contactos/'.$dato->id.'/edit') }}" class="">
                                Editar
                            </a>--}}
                            {{--<a href="{{ url('/contactos/'.$dato->id) }}" class="col align-self-center text-right">
                                <button class="btn btn-success" onclick="return confirm('¿Deseas borrar el contacto?')">
                                    Borrar
                                </button>
                            </a>--}}
                            <form action="{{ url('/contactos/'.$dato->id) }}" method="post" class="text-center m-2">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" onclick="return confirm('¿Deseas borrar el contacto?')">
                                    Borrar
                                </button>
                            </form>
                        </div>
                    </td>
                    <td>{{$dato->id}}</td>
                    <td>
                        <img src="{{ asset('storage/'.$dato->foto) }}" alt="Imagen Contacto" class="img-fluid img img-thumbnail">
                    </td>
                    <td>{{$dato->nombre}}</td>
                    <td>{{$dato->apellido}}</td>
                    <td>{{$dato->telefono}}</td>
                    <td>{{$dato->email}}</td>
                    <td>{{$dato->edad}}</td>
                    <td>{{$dato->nacimiento}}</td>
                    <td>{{$dato->idioma}}</td>
                    {{--<td>{{$dato->deportes}}</td>
                    <td>{{$dato->descripcion}}</td>--}}
                    <td>{{$dato->color}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


