<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('televisores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('televisores_marca_id')->unsigned();
            $table->bigInteger('televisores_ubicacion_id')->unsigned();
            $table->string("pulgadas");
            $table->timestamps();
            
            $table->foreign('televisores_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('televisores_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
