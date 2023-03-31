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
        Schema::create('detalle_reparaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reparacion_id');
            $table->unsignedBigInteger('refaccion_id');
            $table->unsignedBigInteger('diagnostico_id')->nullable();
            $table->foreign('reparacion_id')
            ->references('id')
            ->on('reparaciones');
            $table->foreign('refaccion_id')
            ->references('id')
            ->on('refacciones');
            $table->foreign('diagnostico_id')
            ->references('id')
            ->on('diagnosticos');
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
        Schema::dropIfExists('detalle_reparaciones');
    }
};
