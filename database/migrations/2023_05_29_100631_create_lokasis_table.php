<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('jalan_id');
            $table->string('alamat');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('jam_kecelakaan');
            $table->string('kepadatan');
            $table->string('intensitas_kecelakaan');
            $table->string('kondisi_korban');
            $table->string('tingkat_kerawanan');
            $table->BigInteger('rules_id');
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
        Schema::dropIfExists('lokasis');
    }
}
