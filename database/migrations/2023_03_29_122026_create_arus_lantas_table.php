<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArusLantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arus_lantas', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 70);
            $table->string('nama_jalan');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('arah_1');
            $table->string('arah_2');
            $table->string('total_arah_1');
            $table->string('total_arah_2');
            $table->string('total_2_arah');
            $table->bigInteger('jalans_id');
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
        Schema::dropIfExists('arus_lantas');
    }
}
