<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table){
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->char('telefono',9)->unique();
            $table->string('email',50)->unique();
            $table->string('foto')->default('uploads/user.png');

            $table->timestamps();//es necesario ponerlo para la actualizacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
}
