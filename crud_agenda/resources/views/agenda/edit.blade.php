
<div class="main-container">
<h1 class="titulo">EDITAR CONTACTO</h1>
<form action="{{url('/agenda/'.$contacto->id)}}" method="post" enctype="multipart/form-data">
@csrf
    {{ method_field('PATCH') }}
    @include('agenda.form')
</form>

</div>
