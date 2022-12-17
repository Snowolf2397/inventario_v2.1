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
        Schema::create('impresoras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('impresoras_marca_id')->unsigned();
            $table->bigInteger('impresoras_modelo_id')->unsigned();
            $table->bigInteger('impresoras_ubicacion_id')->unsigned();
            $table->timestamps();

            $table->foreign('impresoras_marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('impresoras_modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->foreign('impresoras_ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
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
