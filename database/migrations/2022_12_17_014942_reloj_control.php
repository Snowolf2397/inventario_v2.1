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
        Schema::create('reloj_control', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('reloj_marca_id')->unsigned();
            $table->bigInteger('reloj_modelo_id')->unsigned();
            $table->bigInteger('reloj_ubicacion_id')->unsigned();
            $table->bigInteger('reloj_departamento_id')->unsigned();                                   
            $table->timestamps();

            $table->foreign('reloj_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('reloj_modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->foreign('reloj_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('reloj_departamento_id')->references('id')->on('departamentos')->onDelete('cascade'); 
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
