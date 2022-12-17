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
        
        Schema::create('desktops', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');            
            $table->bigInteger('desktops_procesador_id')->unsigned();
            $table->string("almacenamiento");
            $table->string("cant_almacenamiento"); 
            $table->string("cant_ram");
            $table->bigInteger('desktops_sistema_operativo_id')->unsigned();
            $table->bigInteger('desktops_ubicacion_id')->unsigned();
            $table->bigInteger('desktops_funcionario_id')->unsigned();            
            $table->timestamps();

            $table->foreign('desktops_procesador_id')->references('id')->on('procesadores')->onDelete('cascade');
            $table->foreign('desktops_sistema_operativo_id')->references('id')->on('sistemas_operativos')->onDelete('cascade');
            $table->foreign('desktops_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('desktops_funcionario_id')->references('rut')->on('funcionarios')->onDelete('cascade');
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
