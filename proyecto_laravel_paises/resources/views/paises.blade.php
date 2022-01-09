<style>
    body {
        margin: auto 0;
        background-color: lightgrey;
        color: black;
        font-family: "Inconsolata", "Fira Mono", "Source Code Pro", Monaco, Consolas, "Lucida Console", monospace;
    }

    .paises-container {
        margin: 10%;
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .titulo {
        text-align: center;
        color: darkgreen;
        font-size: 3rem;
        font-style: italic;
        padding: 10px;
    }

    .tabla {
        background-color: white;
    }

    .cabeceras {
        font-style: italic;
        text-align: center;
        color: darkblue;
        font-weight: bold;
        text-transform: uppercase;
    }

    .cabecera-hijo {
        border: black 1px solid;
        padding: 10px;
        text-align: center;
    }


</style>
<div class="paises-container">
    <h1 class="titulo">@lang('TABLA DE PAISES')</h1>
    <table class="tabla">
        <tr class="cabeceras">
            <td class="cabecera-hijo">@lang('nombre')</td>
            <td class="cabecera-hijo">@lang('cod_numerico')</td>
            <td class="cabecera-hijo">@lang('codigoISO3')</td>
            <td class="cabecera-hijo">@lang('codigoISO2')</td>
        </tr>
        @foreach($paises as $pais)
            <tr class="datos-paises">
                <td class="cabecera-hijo">{{$pais->nombre}}</td>
                <td class="cabecera-hijo">{{$pais->cod_numerico}}</td>
                <td class="cabecera-hijo">{{$pais->codigoISO3}}</td>
                <td class="cabecera-hijo">{{$pais->codigoISO2}}</td>
            </tr>
        @endforeach
    </table>
</div>

