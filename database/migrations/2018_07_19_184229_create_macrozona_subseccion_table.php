<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMacrozonaSubseccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('macrozona_subseccion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('macrozona_id')->unsigned()->index();
            $table->foreign('macrozona_id')->references('id')->on('macrozonas')->onDelete('cascade');
            $table->integer('subseccion_id')->unsigned()->index();
            $table->foreign('subseccion_id')->references('id')->on('subsecciones')->onDelete('cascade');
            $table->text('resumen')->nullable();
            $table->text('contenido')->nullable();
            $table->string('autor')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('macrozona_subseccion');
    }
}
