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
        Schema::create('notebooks', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('notebooks_marca_id')->unsigned();
            $table->bigInteger('notebooks_modelo_id')->unsigned();
            $table->string("almacenamiento");
            $table->string("can_almacenamiento"); 
            $table->string("can_ram");
            $table->bigInteger('notebooks_procesador_id')->unsigned();        
            $table->bigInteger('notebooks_ubicacion_id')->unsigned();
            $table->bigInteger('notebooks_funcionario_id')->unsigned();
            $table->timestamps();

            $table->foreign('notebooks_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('notebooks_modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->foreign('notebooks_procesador_id')->references('id')->on('procesadores')->onDelete('cascade');
            $table->foreign('notebooks_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('notebooks_funcionario_id')->references('rut')->on('funcionarios')->onDelete('cascade');
            
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
