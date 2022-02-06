<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();

            $table->string('foto')->nullable();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->char('telefono', 9);
            $table->string('email', 50);
            $table->integer('edad')->nullable();
            $table->date('nacimiento')->nullable();
            $table->enum('idioma', ['espanol', 'ingles'])->nullable();
            $table->text('descripcion')->nullable();
            $table->enum('color', ['rojo', 'azul', 'verde', 'amarillo'])->nullable();
            $table->boolean('privacidad')->default("true");

            $table->timestamps();
            $table->softDeletes();

        });
        Schema::table('contactos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
