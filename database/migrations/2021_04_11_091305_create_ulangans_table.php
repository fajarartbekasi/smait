<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUlangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulangans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('kela_id');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('mapel_id');
            $table->string('ulh_1')->nullable();
            $table->string('ulh_2')->nullable();
            $table->string('ulh_3')->nullable();
            $table->string('uts')->nullable();
            $table->string('uas')->nullable();
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
        Schema::dropIfExists('ulangans');
    }
}
