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
        Schema::create('allinone', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('allinone_marca_id')->unsigned();
            $table->bigInteger('allinone_modelo_id')->unsigned();
            $table->bigInteger('allinone_procesador_id')->unsigned();
            $table->string("almacenamiento");
            $table->string("cant_almacenamiento"); 
            $table->string("cant_ram");                        
            $table->bigInteger('allinone_ubicacion_id')->unsigned();
            $table->bigInteger('allinone_funcionario_id')->unsigned();
            $table->timestamps();

            $table->foreign('allinone_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('allinone_modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->foreign('allinone_procesador_id')->references('id')->on('procesadores')->onDelete('cascade');
            $table->foreign('allinone_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('allinone_funcionario_id')->references('rut')->on('funcionarios')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('one', function (Blueprint $table) {
            //
        });
    }
};
