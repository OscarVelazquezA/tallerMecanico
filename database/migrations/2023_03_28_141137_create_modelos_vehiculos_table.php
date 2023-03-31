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
        Schema::create('modelos_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_modelo');
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id')
            ->references('id')
            ->on('marca_vehiculos');
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
        Schema::dropIfExists('modelos_vehiculos');
    }
};
