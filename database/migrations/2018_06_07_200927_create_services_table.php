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
            $table->unsignedInteger('nro_servicio');
            $table->unsignedInteger('nro_solicitud');
            $table->string('motivo');
            $table->string('cliente');
            $table->date('fecha_orden')->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->text('observaciones_agenda');
            $table->string('lugar');
            $table->string('region');
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
