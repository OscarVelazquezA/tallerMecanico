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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('año');
            $table->string('placas');
            $table->string('serie');
            $table->string('color');
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->unsignedBigInteger('modelo_id')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('marca_id')
            ->references('id')
            ->on('marca_vehiculos');
            $table->foreign('modelo_id')
            ->references('id')
            ->on('modelos_vehiculos');
            $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes');
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
        Schema::dropIfExists('vehiculos');
    }
};
