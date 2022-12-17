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
        
        Schema::create('procesadores', function (Blueprint $table) {

            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('procesadores_marca_id')->unsigned();
            $table->bigInteger('procesadores_modelo_id')->unsigned();           
            $table->string("frecuencia");            
            $table->string("nucleos");
            $table->string("hilos");
            $table->timestamps();

            $table->foreign('procesadores_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('procesadores_modelo_id')->references('id')->on('modelos')->onDelete('cascade');
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
