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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('id_patient');
            $table->string('id_user','5');
            // $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('idtype')->references('id_type')->on('id_types')->onDelete('cascade');
            $table->string('identify_patient', '15')->unique();
            $table->string('name_patient', '100');
            $table->string('last_patient', '100');
            $table->string('genre_patient', '1'); /*Se debe listar M o F*/
            $table->date('birth_patient');
            $table->string('social_strat_patient', '1');

            $table->char('id_department', 5);
            $table->char('id_municipality', 2);
            $table->string('neigh_patient', '50');
            $table->string('home_address_patient', '50');
            $table->string('email_patient', '50');
            $table->string('tel_patient', '50');
            $table->string('cel_patient', '50');
            $table->boolean('status_patient', '1');
            $table->text('desc_patient')->nullable();



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
        Schema::dropIfExists('patients');
    }
};
