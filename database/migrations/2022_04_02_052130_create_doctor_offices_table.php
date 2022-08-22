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
        Schema::create('doctor_offices', function (Blueprint $table) {
            $table->id('id_office');
            $table->foreignId('branch_office')->references('id_branch')->on('branch_offices');
            $table->foreignId('medical_area')->references('id_area')->on('medical_areas')->onDelete('cascade');
            $table->string('num_office', 4);
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
        Schema::dropIfExists('doctor_offices');
    }
};
