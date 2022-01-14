
<form action="{{url('/agenda/'.$contacto->id)}}" method="post" enctype="multipart/form-data">
@csrf
    {{ method_field('PATCH') }}
    @include('agenda.form')
</form>

