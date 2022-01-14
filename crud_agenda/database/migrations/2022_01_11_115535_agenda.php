<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table){
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->char('telefono',9)->unique();
            $table->string('email',50);
            $table->string('foto')->default('public/user.jpg');

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
        Schema::dropIfExists('agenda');
    }
}
