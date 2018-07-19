<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubseccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsecciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seccion_id')->unsigned()->index();
            $table->foreign('seccion_id')->references('id')->on('seccions')->onDelete('cascade');
            $table->integer('boletin_id')->unsigned()->index();
            $table->foreign('boletin_id')->references('id')->on('boletines')->onDelete('cascade');
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
        Schema::dropIfExists('subsecciones');
    }
}
