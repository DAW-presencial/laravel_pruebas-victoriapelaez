@include('layouts.head')
@include('layouts.navigation')
<div class="container">
    <h1 class="header m-5 border-bottom">@lang('AGENDA CONTACTOS')</h1>
    @if ((Request::route()->getName()=='contactos.create'))
    <a href="{{ url('contactos/create') }}">
        <button class="btn btn-warning justify-center m-3 float-right"
                @if (Gate::allows('create-contacto')) enabled @else disabled @endif>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAZJJREFUSEvtlfEtBUEQxn+vAlSAClABKkAHOkAF6IAK6AAVoAJUgA6ogPxkVyab23d774Q/vEkuudzNzjfzzTezE/7IJn+Eyxz415jvo3oXOADWU0aPwDlwPTbDacBnCbQL4xQ4GQNeA7bSqxT4KVS4Dyyn79vA3azgNWADbgL3wFYRfNq/5jxqwG/AAtBFqRQfA/osNSMVjmOA34HFCnAvK31UG8BeRlPZa5U2ZL+Zge3rbYryAlymd8W10iCumYGNnXvZMk4mk9Wuv6Po7MvOYQjwClhI7652rDwYF4hBywUyLcmY+LdY+zZXq2h/FNhqFVHXHEvhTchKqnPvM9WedflEqqW5SrUBLjoAy+oV0F6a565/tQX05VtS7Vw+F/Pp9opmv10umtlvdIAPVrWi2QFcDlKUx6isyLFSZCbgGSuPNghYiq1WO0qBp4krCmo1965VjZHqeCO1BJLyhwRkxYPu6AgcK2gds48EPPh+jgD2zUcrR6jGYL6P1UJND51nWytrbV2z3xy4maqxjv+P6k9T5Vcf7S6DuQAAAABJRU5ErkJggg==" class="smaller"/>
        </button>
        @endif
    </a>
    {{--@if (auth()->user()->role ==='admin')
        <a href="{{ url('contactos/create') }}">
            <button class="btn btn-warning justify-center m-3 float-right">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAZJJREFUSEvtlfEtBUEQxn+vAlSAClABKkAHOkAF6IAK6AAVoAJUgA6ogPxkVyab23d774Q/vEkuudzNzjfzzTezE/7IJn+Eyxz415jvo3oXOADWU0aPwDlwPTbDacBnCbQL4xQ4GQNeA7bSqxT4KVS4Dyyn79vA3azgNWADbgL3wFYRfNq/5jxqwG/AAtBFqRQfA/osNSMVjmOA34HFCnAvK31UG8BeRlPZa5U2ZL+Zge3rbYryAlymd8W10iCumYGNnXvZMk4mk9Wuv6Po7MvOYQjwClhI7652rDwYF4hBywUyLcmY+LdY+zZXq2h/FNhqFVHXHEvhTchKqnPvM9WedflEqqW5SrUBLjoAy+oV0F6a565/tQX05VtS7Vw+F/Pp9opmv10umtlvdIAPVrWi2QFcDlKUx6isyLFSZCbgGSuPNghYiq1WO0qBp4krCmo1965VjZHqeCO1BJLyhwRkxYPu6AgcK2gds48EPPh+jgD2zUcrR6jGYL6P1UJND51nWytrbV2z3xy4maqxjv+P6k9T5Vcf7S6DuQAAAABJRU5ErkJggg==" class="smaller"/>
            </button>
            @endif
        </a>--}}
    <div class="table table-hover table-responsive">
        <table class="table table-hover" style="margin: auto auto;">
            <thead class="thead-light w-100">
            <tr>
                @can('crear-contacto')
                <th scope="col" class="text-center">@lang('Acciones')</th>
                @endcan
                <th scope="col" class="text-center">@lang('Id')</th>
                <th scope="col" class="text-center">@lang('Nombre')</th>
                <th scope="col" class="text-center">@lang('Apellido')</th>
                <th scope="col" class="text-center">@lang('Teléfono')</th>
                <th scope="col" class="text-center">@lang('Email')</th>
                <th scope="col" class="text-center">@lang('Edad')</th>
                <th scope="col" class="text-center">@lang('Cumpleaños')</th>
                <th scope="col" class="text-center">@lang('Idioma')</th>
                {{--<th scope="col">Privacidad</th>
                <th scope="col">Descripción</th>--}}
                <th scope="col">@lang('Color')</th>

            </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
                <tr class="text-center">
                    @can('update-contacto')
                    <td>
                        <div class="row justify-center">
                            <a href="{{ url('/contactos/'.$dato->id.'/edit') }}" class="m-1">
                                <button class="btn btn-success">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAATpJREFUSEvdlu1xwjAQRB8dUEI6gBJCJQkVUEJIB+kgUEFKSDqADkgJoQIyy0gzQtaX4/M4w/2yPJaedu908oyJYjYRl7sAPwMvwBx4A15LblopFvQ9Au2AdQ5uAQ6hZ+AbWDhgFj4UHEMfHfgrgK8AjW9iCDi2V7ZKoeIBOLln5XprBU7l9AeQOln9CSwdzEyxKnbjFlVONVY1KwQX2EP3gDbZib5Wy8qnAKqcHt3icVVnoZrfB5yDah2d3YPLrcZFaB9wCapC+mixN/S7RXEJqlyqkKS4SamH18CjQGtWjwYtgUeFlsCXxJHRqz/ntLVzeXDY7sygLYo92BTaAk51u2pzSE3qa3X8vQm0pLhzjbkLQBeCSdQaiAkktci/A/vjZKW4IzCneDJwqriGqDf75xqyievcyYrrF4jbVR89q4r1AAAAAElFTkSuQmCC"/>
                                </button>
                            </a>
                            @endcan
                            @can('delete-contacto')
                            <form action="{{ url('/contactos/'.$dato->id) }}" method="post" class="m-1">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger"
                                        onclick="return confirm(@lang('¿Deseas borrar el contacto?')">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARdJREFUSEvtln0NwkAMxX9zgAOQAAoABYACcAY4AAWAApAADpBAHlnINm7XXrZkkKz/LOm1ff14611GR5J1hIsXeAAsgJGR6BPYA/pGxQt8B4ZWsPz8BkwsWw/wGLhagSrnAlYCteIBngGnPMIcONdE89q93X8GWORZVyqSbpPrdoDmHRLLTqT7+FYrLrYrcaymeWlMPwNcTFskmgIXQJ1IEdM3Ri7TOZKJ6ZsKLJJpkTwAEU0S0rUOHAro1ZUalFqxF6Sv+IuHfautBdKTSx3ydqHRf6wtpetP11txc1V1rf/H3oviv4G9VYbsjsAydBBbIJrntgkqsAIOqcCy19M2mLEjIc257kXqemU6MNJNPM/b9KgOjxfTSocfMilmtwAAAABJRU5ErkJggg=="/>
                                </button>
                            </form>
                                @endcan
                        </div>
                    </td>
                    <td>{{$dato->id}}</td>
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


