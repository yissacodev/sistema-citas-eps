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
        Schema::create('medical_areas', function (Blueprint $table) {
            $table->id('id_area');
            $table->string('name_area', '30');
            $table->string('specialist_area', '30');
            $table->text('desc_area');
            $table->string('color_area', '30');
            $table->string('icon_area', '100');
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
        Schema::dropIfExists('medical_areas');
    }
};
























