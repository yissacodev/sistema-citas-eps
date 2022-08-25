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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('id_appoint');  //id compuesto tipo de cita
            $table->foreignId('patient')->references('id_patient')->on('patients'); //Id del paciente
            $table->foreignId('medic')->references('id_medic')->on('medics');  //Id del medico que a atender la cita, este da el area medica
            $table->string('title_appoint')->nullable(); //titulo de la cita
            $table->string('desc_appoint')->nullable(); //descripcion de la cita
            $table->string('status_appoint'); //Estado de la cita
            $table->date('appoint_start_date'); //Fecha inicio de la cita
            $table->time('appoint_start_hour'); //Hora de inicio cita
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
        Schema::dropIfExists('appointments');
    }
};
