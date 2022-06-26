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
        Schema::create('medical_appointments', function (Blueprint $table) {
            $table->id('id_med_appo');
            $table->string('cod_med_appo','20'); /*Codigo interno de solicitud de la cita  */

            // $table->unsignedInteger('patient');
            $table->foreignId('patient')->references('id_patient')->on('patients');

            // $table->unsignedInteger('medic');
            $table->foreignId('medic')->references('id_medic')->on('medics');


            $table->string('title_med_appo','30'); /* Titulo de la cita */
            $table->text('desc_med_appo'); /* Descripción de la cita */
            $table->string('status_med_appo', '15');/*pendiente, perdida, por autorizar */

            /*Hora de inicio y fin */
            $table->time('time_i_med_appo'); 
            $table->time('time_f_med_appo');

            // $table->text('reasons_med_appo'); /*Razones de anulacion de la cita */


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
        Schema::dropIfExists('medical_appointments');
    }
};
