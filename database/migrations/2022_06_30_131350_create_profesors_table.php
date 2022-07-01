<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre' ,40);
            $table->string('apellido' ,40);
            $table->string('cedula' ,9);
            $table->string('operador',5);
            $table->string('telefono',8);
            $table->string('correo' ,40);
            $table->string('estado' ,40);
            $table->string('municipio' ,40);
            $table->string('direccion' ,100);
            $table->string('rol' ,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesors');
    }
}
