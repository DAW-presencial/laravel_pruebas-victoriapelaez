@include('layouts.head')
@include('layouts.navigation')
<div class="container">
    <div class="header text-uppercase p-5">
        <h3 class="border-bottom border-primary">{{__('Crear Contacto')}}</h3></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/contactos') }}" method="post" class=" well form-horizontal"
                  enctype="multipart/form-data">
                @csrf
                @include('contactos.form')
            </form>
        </div>
    </div>
</div>


