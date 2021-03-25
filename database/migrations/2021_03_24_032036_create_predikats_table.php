<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predikats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mapel_id');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('kkm');
            $table->unsignedInteger('grade_a');
            $table->unsignedInteger('grade_b');
            $table->unsignedInteger('grade_c');
            $table->unsignedInteger('grade_d');
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
        Schema::dropIfExists('predikats');
    }
}
