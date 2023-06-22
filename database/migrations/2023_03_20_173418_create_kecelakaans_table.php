<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecelakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecelakaans', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 70);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('nama_jalan');
            $table->string('km')->nullable();
            $table->string('tkp_dusun')->nullable();
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('kendaraan');
            $table->string('korban_md')->nullable();
            $table->string('korban_lb')->nullable();
            $table->string('korban_lr')->nullable();
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
        Schema::dropIfExists('kecelakaans');
    }
}
