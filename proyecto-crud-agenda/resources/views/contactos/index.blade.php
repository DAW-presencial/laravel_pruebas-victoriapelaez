@include('layouts.head')
@include('layouts.navigation')

@if(Session::has('mensaje'))
    <div class="msg-contacto alert alert-danger">
        {{ Session::get('mensaje') }}
        @endif
    </div>
    <div class="container">
        <h1 class="header m-5 border-bottom">@lang('AGENDA CONTACTOS')</h1>

        @if ( Gate::allows('create-contacto'))
            <form action="{{ url('contactos/create') }}">
                <button type="submit" class="btn btn-warning justify-center m-3 float-right" enabled>
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAZJJREFUSEvtlfEtBUEQxn+vAlSAClABKkAHOkAF6IAK6AAVoAJUgA6ogPxkVyab23d774Q/vEkuudzNzjfzzTezE/7IJn+Eyxz415jvo3oXOADWU0aPwDlwPTbDacBnCbQL4xQ4GQNeA7bSqxT4KVS4Dyyn79vA3azgNWADbgL3wFYRfNq/5jxqwG/AAtBFqRQfA/osNSMVjmOA34HFCnAvK31UG8BeRlPZa5U2ZL+Zge3rbYryAlymd8W10iCumYGNnXvZMk4mk9Wuv6Po7MvOYQjwClhI7652rDwYF4hBywUyLcmY+LdY+zZXq2h/FNhqFVHXHEvhTchKqnPvM9WedflEqqW5SrUBLjoAy+oV0F6a565/tQX05VtS7Vw+F/Pp9opmv10umtlvdIAPVrWi2QFcDlKUx6isyLFSZCbgGSuPNghYiq1WO0qBp4krCmo1965VjZHqeCO1BJLyhwRkxYPu6AgcK2gds48EPPh+jgD2zUcrR6jGYL6P1UJND51nWytrbV2z3xy4maqxjv+P6k9T5Vcf7S6DuQAAAABJRU5ErkJggg=="
                        class="smaller"/>
                </button>
            </form>
        @else
            <form action="{{ url('contactos/create') }}">
                <button type="submit" class="btn btn-warning justify-center m-3 float-right" disabled>
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAZJJREFUSEvtlfEtBUEQxn+vAlSAClABKkAHOkAF6IAK6AAVoAJUgA6ogPxkVyab23d774Q/vEkuudzNzjfzzTezE/7IJn+Eyxz415jvo3oXOADWU0aPwDlwPTbDacBnCbQL4xQ4GQNeA7bSqxT4KVS4Dyyn79vA3azgNWADbgL3wFYRfNq/5jxqwG/AAtBFqRQfA/osNSMVjmOA34HFCnAvK31UG8BeRlPZa5U2ZL+Zge3rbYryAlymd8W10iCumYGNnXvZMk4mk9Wuv6Po7MvOYQjwClhI7652rDwYF4hBywUyLcmY+LdY+zZXq2h/FNhqFVHXHEvhTchKqnPvM9WedflEqqW5SrUBLjoAy+oV0F6a565/tQX05VtS7Vw+F/Pp9opmv10umtlvdIAPVrWi2QFcDlKUx6isyLFSZCbgGSuPNghYiq1WO0qBp4krCmo1965VjZHqeCO1BJLyhwRkxYPu6AgcK2gds48EPPh+jgD2zUcrR6jGYL6P1UJND51nWytrbV2z3xy4maqxjv+P6k9T5Vcf7S6DuQAAAABJRU5ErkJggg=="
                        class="smaller"/>
                </button>
            </form>
        @endif

        <div class="table table-hover table-responsive">
            <table class="table table-hover" style="margin: auto auto;">
                <thead class="thead-light w-100">
                <tr>
                    @if ( Gate::allows('update-contacto'))
                        <th scope="col" class="text-center" enabled>@lang('Acciones')</th>
                    @else
                        <th scope="col" class="text-center" disabled>@lang('Acciones')</th>
                    @endif
                    <th scope="col" class="text-center">@lang('Id')</th>
{{--                    <th scope="col" class="text-center">@lang('Foto')</th>--}}
                    <th scope="col" class="text-center">@lang('Nombre')</th>
                    <th scope="col" class="text-center">@lang('Apellido')</th>
                    <th scope="col" class="text-center">@lang('Teléfono')</th>
                    <th scope="col" class="text-center">@lang('Email')</th>
                    <th scope="col" class="text-center">@lang('Edad')</th>
                    <th scope="col" class="text-center">@lang('Cumpleaños')</th>
                    {{--<th scope="col" class="text-center">@lang('Idioma')</th>
                    <th scope="col" class="text-center">@lang('Color')</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($datos as $dato)
                    <tr class="text-center">
                        <td>
                            <div class="row justify-center">
                                <form action="{{ url('/contactos/'.$dato->id) }} " class="m-1">
                                    <button type="submit" class="btn btn-primary">
                                        <img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAnJJREFUSEvFlv0xBFEQxPsiQASIABEgAkRABogAESACRIAIEAEiQAZEQP2udq76xuzH3T83VVdXu+/t9HTPx3sjLchGC8LVPMA7kpYkbTZBv0n6ksT/YBsKvCbpTNK+pOUW79+SHiRdSPrsi6APGJBLSUd9jtL6raRTSQRTWhcwLO9NUhw8NpI+m7RIjvz87xkK0h+0sW8DBvTVZCWHsAawywgAtqvNJhhvVeAVMPI+GdNrSedJNgA2rLheLBq+Z/+xre9m2StgIj5sPgL0xJwi502Sn+VK1isDv8t1koGR+KMBQl6AokBggvzsqYxKRlbfT0Ah+7pLnoGdLfJ4TmPtp4me1sHIPezo7awQKSFt2BTrDEy0OKB66Vk3oiev2Tl7Qlb2wNqN4LcbJVZiwYE9OoYABeL22zxUa+xlwGCZjK8R1HjC+SYY0rdYlpl3Qxi/F4XnfunrcYoc2CNDkjx1Qk7eU+nkDCPHVDpWpcELdqLWLMBUtVdpysT4oPAuiPVe4D6pcYQTpIrhEc6RmO+rw6H0O0txOcOYzZH7rlHqKZzUziztFPmkNfIQgSngkXcPMtqJ/p8cqUMHCLljELSdxQFE4cEqLgWDB4hvjBEYozJAKaKcSxTIJxJB+IidatHqkPDhTnvAFnkxDnfWK6PFuDRgyEvBxQn1r83ajsWqbaqJlQPwoGOtbLO2iwAsaZuQDyfVNMvAnirWYM2A+XcR7Lr6kFMk857lGVY4jDyTX/YgNcDe2zyX964hlz0c8uPUGmK0DcHxm+uy5yCwBzxOoLYAqINOwPiwj3EFQBDUgF/oyWEru8rJPMBD5O7dszDgP/X7pB/IszboAAAAAElFTkSuQmCC"/>
                                    </button>
                                </form>
                                @if ( Gate::allows('update-contacto'))
                                    <form action="{{ url('/contactos/'.$dato->id.'/edit') }}" class="m-1">
                                        <button type="submit" class="btn btn-success" enabled>
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAATpJREFUSEvdlu1xwjAQRB8dUEI6gBJCJQkVUEJIB+kgUEFKSDqADkgJoQIyy0gzQtaX4/M4w/2yPJaedu908oyJYjYRl7sAPwMvwBx4A15LblopFvQ9Au2AdQ5uAQ6hZ+AbWDhgFj4UHEMfHfgrgK8AjW9iCDi2V7ZKoeIBOLln5XprBU7l9AeQOln9CSwdzEyxKnbjFlVONVY1KwQX2EP3gDbZib5Wy8qnAKqcHt3icVVnoZrfB5yDah2d3YPLrcZFaB9wCapC+mixN/S7RXEJqlyqkKS4SamH18CjQGtWjwYtgUeFlsCXxJHRqz/ntLVzeXDY7sygLYo92BTaAk51u2pzSE3qa3X8vQm0pLhzjbkLQBeCSdQaiAkktci/A/vjZKW4IzCneDJwqriGqDf75xqyievcyYrrF4jbVR89q4r1AAAAAElFTkSuQmCC"/>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ url('/contactos/'.$dato->id.'/edit') }} " class="m-1">
                                        <button type="submit" class="btn btn-success" disabled>
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAATpJREFUSEvdlu1xwjAQRB8dUEI6gBJCJQkVUEJIB+kgUEFKSDqADkgJoQIyy0gzQtaX4/M4w/2yPJaedu908oyJYjYRl7sAPwMvwBx4A15LblopFvQ9Au2AdQ5uAQ6hZ+AbWDhgFj4UHEMfHfgrgK8AjW9iCDi2V7ZKoeIBOLln5XprBU7l9AeQOln9CSwdzEyxKnbjFlVONVY1KwQX2EP3gDbZib5Wy8qnAKqcHt3icVVnoZrfB5yDah2d3YPLrcZFaB9wCapC+mixN/S7RXEJqlyqkKS4SamH18CjQGtWjwYtgUeFlsCXxJHRqz/ntLVzeXDY7sygLYo92BTaAk51u2pzSE3qa3X8vQm0pLhzjbkLQBeCSdQaiAkktci/A/vjZKW4IzCneDJwqriGqDf75xqyievcyYrrF4jbVR89q4r1AAAAAElFTkSuQmCC"/>
                                        </button>
                                    </form>
                                @endif

                                @if ( Gate::allows('delete-contacto'))
                                    <form action="{{ url('/contactos/'.$dato->id) }}" method="POST" class="m-1">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"
                                                enabled>
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARdJREFUSEvtln0NwkAMxX9zgAOQAAoABYACcAY4AAWAApAADpBAHlnINm7XXrZkkKz/LOm1ff14611GR5J1hIsXeAAsgJGR6BPYA/pGxQt8B4ZWsPz8BkwsWw/wGLhagSrnAlYCteIBngGnPMIcONdE89q93X8GWORZVyqSbpPrdoDmHRLLTqT7+FYrLrYrcaymeWlMPwNcTFskmgIXQJ1IEdM3Ri7TOZKJ6ZsKLJJpkTwAEU0S0rUOHAro1ZUalFqxF6Sv+IuHfautBdKTSx3ydqHRf6wtpetP11txc1V1rf/H3oviv4G9VYbsjsAydBBbIJrntgkqsAIOqcCy19M2mLEjIc257kXqemU6MNJNPM/b9KgOjxfTSocfMilmtwAAAABJRU5ErkJggg=="/>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ url('/contactos/'.$dato->id) }}" method="POST" class="m-1">
                                        <button type="submit" class="btn btn-danger" disabled>
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARdJREFUSEvtln0NwkAMxX9zgAOQAAoABYACcAY4AAWAApAADpBAHlnINm7XXrZkkKz/LOm1ff14611GR5J1hIsXeAAsgJGR6BPYA/pGxQt8B4ZWsPz8BkwsWw/wGLhagSrnAlYCteIBngGnPMIcONdE89q93X8GWORZVyqSbpPrdoDmHRLLTqT7+FYrLrYrcaymeWlMPwNcTFskmgIXQJ1IEdM3Ri7TOZKJ6ZsKLJJpkTwAEU0S0rUOHAro1ZUalFqxF6Sv+IuHfautBdKTSx3ydqHRf6wtpetP11txc1V1rf/H3oviv4G9VYbsjsAydBBbIJrntgkqsAIOqcCy19M2mLEjIc257kXqemU6MNJNPM/b9KgOjxfTSocfMilmtwAAAABJRU5ErkJggg=="/>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                        <td>{{$dato->id}}</td>
                        {{--<td>
                            @if($dato->foto)
                                <img src="{{ asset('storage').'/'.$dato->foto }}" alt="Imagen Contacto" class="img-fluid img-thumbnail" width="50">
                            @endif</td>--}}
                        <td>{{$dato->nombre}}</td>
                        <td>{{$dato->apellido}}</td>
                        <td>{{$dato->telefono}}</td>
                        <td>{{$dato->email}}</td>
                        <td>{{$dato->edad}}</td>
                        <td>{{$dato->nacimiento}}</td>
                        {{--<td>{{$dato->idioma}}</td>
                        <td>{{$dato->color}}</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


