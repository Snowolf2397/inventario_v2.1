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
        Schema::create('routers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('routers_marca_id')->unsigned();
            $table->bigInteger('routers_modelo_id')->unsigned();
            $table->string("frecuencia");
            $table->string("compania");            
            $table->bigInteger('routers_ubicacion_id')->unsigned();            
            $table->timestamps();

            
            $table->foreign('routers_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('routers_modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->foreign('routers_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
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
