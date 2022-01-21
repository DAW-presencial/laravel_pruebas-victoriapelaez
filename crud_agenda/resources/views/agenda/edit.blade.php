
<div class="main-container">
<h1 class="titulo">EDITAR CONTACTO</h1>
    @if(count($errors)>0)
        <div class="mensaje">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ url('/agenda/'.$contacto->id) }}" method="post" enctype="multipart/form-data">
@csrf
    {{ method_field('PATCH') }}
    @include('agenda.form')
</form>

</div>
