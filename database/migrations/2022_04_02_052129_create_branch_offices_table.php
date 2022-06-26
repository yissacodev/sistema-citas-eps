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
        Schema::create('branch_offices', function (Blueprint $table) {
            $table->id('id_branch');
            $table->foreignId('medical_area')->references('id_area')->on('medical_areas')->onDelete('cascade');
            $table->string('name_branch_office', '50');
            $table->string('eps_branch_address', '50');
            $table->string('office_hours_branch', '50');
            $table->string('tel_branch', '30');
            $table->string('tel2_branch', '30')->nullable();;
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
        Schema::dropIfExists('branch_offices');
    }
};
