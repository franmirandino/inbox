<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nro_servicio')->nullable();
            $table->unsignedInteger('nro_solicitud')->nullable();
            $table->string('motivo')->nullable();
            $table->string('cliente')->nullable();
            $table->date('fecha_orden')->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->text('observaciones_agenda')->nullable();
            $table->string('lugar')->nullable();
            $table->string('region')->nullable();
            $table->unsignedInteger('cierre')->nullable();
            $table->unsignedInteger('technical_id')->nullable();
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
        Schema::dropIfExists('services');
    }
}
