@include('layouts.head')
@include('layouts.navigation')

<div class="container">
    <div class="header text-uppercase p-5">
        <h3 class="border-bottom border-primary">Editar Contacto</h3></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/contactos/'.$datos->id) }}" method="post" class=" well form-horizontal"
                  enctype="multipart/form-data">
                @csrf
                {{method_field('PATCH')}}
                @include('contactos.form')
            </form>
        </div>
    </div>
</div>
