<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('kela_id');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('mapel_id');
            $table->string('p_nilai');
            $table->string('p_predikat');
            $table->text('p_deskripsi');
            $table->string('k_nilai')->nullable();
            $table->string('k_predikat')->nullable();
            $table->string('k_deskriprsi')->nullable();
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
        Schema::dropIfExists('raports');
    }
}
