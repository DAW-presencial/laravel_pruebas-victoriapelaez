<div class="paises-container">
    <h1 class="titulo">@lang('TABLA DE PAISES')</h1>
            <table class="tabla">
                <tr class="cabeceras">
                    <td>@lang('nombre')</td>
                    <td>@lang('cod_numerico')</td>
                    <td>@lang('codigoISO3')</td>
                    <td>@lang('codigoISO2')</td>
                </tr>
                @foreach($paises as $pais)
                    <tr class="datos-paises">
                        <td>{{$pais->nombre}}</td>
                        <td>{{$pais->cod_numerico}}</td>
                        <td>{{$pais->codigoISO3}}</td>
                        <td>{{$pais->codigoISO2}}</td>
                    </tr>
                @endforeach
            </table>
</div>

