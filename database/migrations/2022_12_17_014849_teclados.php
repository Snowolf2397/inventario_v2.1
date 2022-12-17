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
        Schema::create('teclados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('teclados_marca_id')->unsigned();
            $table->bigInteger('teclados_ubicacion_id')->unsigned();
            $table->bigInteger('teclados_funcionario_id')->unsigned();                        
            $table->timestamps();

            $table->foreign('teclados_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('teclados_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('teclados_funcionario_id')->references('rut')->on('funcionarios')->onDelete('cascade');
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
