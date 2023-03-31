|<?php

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
        Schema::create('ingreso_taller', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehiculo_id');
            $table->string('km');
            $table->string('telefono_contacto')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('estatus');
            $table->unsignedBigInteger('mecanico_id');
            $table->date('fecha_ultimo_movimiento');
            $table->date('fecha_entrega')->nullable();
            $table->foreign('vehiculo_id')
            ->references('id')
            ->on('vehiculos');
            $table->foreign('mecanico_id')
            ->references('id')
            ->on('mecanicos');
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
        Schema::dropIfExists('reparaciones');
    }
};
