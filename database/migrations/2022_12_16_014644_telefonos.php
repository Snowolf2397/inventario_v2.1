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
        Schema::create('telefonos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('telefonos_modelo_id')->unsigned();            
            $table->bigIncrements('numero_telefono');
            $table->string("compania");            
            $table->timestamps();

            $table->foreign('telefonos_modelo_id')->references('id')->on('modelos')->onDelete('cascade');        
            
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
