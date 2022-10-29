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
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('banner');
            $table->integer('categoria_tienda_id') -> foreign('categoria_tienda_id')
            ->references('id')->on('categoria_tiendas')
            ->ondelete('set null');
            $table->string('email');
            $table->string('descripcion');
            $table->string('numero');
            $table->time('hora_apertura');
            $table->time('hora_cierre');
            $table->time('dias_disponibles');
            $table->time('latitud'); //location
            $table->time('lng');   //location
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
};
