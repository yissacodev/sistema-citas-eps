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

    /*
    https://clinic-cloud.com/blog/como-hacer-una-historia-clinica-ejemplos/
      */
    public function up()
    {
        Schema::create('medics', function (Blueprint $table) {
            $table->id('id_medic');
            $table->string('id_user','5');
            $table->foreignId('idtype')->references('id_type')->on('id_types')->onDelete('cascade');
            $table->string('identify_medic', '15');
            $table->string('name_medic', '100');
            $table->string('last_medic', '100');
            $table->string('genre_medic', '1'); /*Se debe listar M o F*/
            $table->date('birth_medic');
            $table->string('social_strat_medic', '1');            
            
            $table->foreignId('eps_branch_office')->references('id_branch')->on('branch_offices')->onDelete('cascade');
            
            $table->foreignId('department_medic')->references('id_department')->on('departments');
            $table->foreignId('municipality_medic')->references('id_municipality')->on('municipalities');
            $table->string('neigh_medic', '50');

            $table->string('home_address_medic', '50');
            $table->string('email_medic', '50');
            $table->string('tel_medic', '50');
            $table->string('cel_medic', '50');
            $table->string('status_medic', '50');
            $table->text('desc_medic')->nullable();
            
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
        Schema::dropIfExists('medics');
    }
};
