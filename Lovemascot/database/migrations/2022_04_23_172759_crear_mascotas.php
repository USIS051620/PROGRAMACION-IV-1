<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearMascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('duenio');
            $table->string('cartilla')->nullable();
            $table->string('imagen')->nullable();
            $table->string('nombre');
            $table->string('raza');
            $table->string('color');
            $table->string('edad');
            $table->string('sexo');
            $table->timestamps();
            $table->foreign('duenio')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
