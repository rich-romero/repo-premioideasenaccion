<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('apellido',50);
            $table->string('email')->unique();
            $table->string('dni',50);
            $table->string('telefono',50);
            $table->string('direccion',100);
            $table->string('ciudad',100);
            $table->string('provincia',100);
            $table->date('fechanac');
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
        Schema::dropIfExists('personas');
    }
}
