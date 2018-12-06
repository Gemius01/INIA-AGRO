<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunaMacrozonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comuna_macrozona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comuna_id')->unsigned()->index();
            $table->foreign('comuna_id')->references('id')->on('comunas')->onDelete('cascade');
            $table->integer('macrozona_id')->unsigned()->index();
            $table->foreign('macrozona_id')->references('id')->on('regions')->onDelete('cascade');
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
        Schema::dropIfExists('comuna_macrozona');
    }
}
