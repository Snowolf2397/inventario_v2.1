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
        Schema::create ('funcionarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // el id va a ser el rut
            $table->bigIncrements('rut');
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("correo");
            $table->bigInteger('funcionarios_telefono_id')->unsigned();            
            $table->bigInteger('funcionarios_departamento_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('funcionarios_telefono_id')->references('numero_telefono')->on('telefonos')->onDelete('cascade');
            $table->foreign('funcionarios_departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
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
