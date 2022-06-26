<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id('id_municipality');
            $table->string('municipality_name', 30);
            // $table->unsignedInteger('department');
            $table->foreignId('department')->references('id_department')->on('departments');
            $table->unsignedInteger('municipality_status');
            $table->timestamps();
        });
    }
    /*https://laravel.com/docs/9.x/migrations#column-modifiers */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
};
