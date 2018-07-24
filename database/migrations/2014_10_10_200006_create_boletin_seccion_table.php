<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletinSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletin_seccion', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contenido')->nullable();
            $table->integer('boletin_id')->unsigned()->nullable();
            $table->foreign('boletin_id')->references('id')->on('boletines')->onDelete('cascade');
            $table->integer('seccion_id')->unsigned()->nullable();
            $table->foreign('seccion_id')->references('id')->on('seccions')->onDelete('cascade');
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
        Schema::dropIfExists('boletin_seccion');
    }
}
