<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAnggotaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_anggota_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id')->length(10)->unsigned();
            $table->Integer('kelas_id')->length(10)->unsigned();
            $table->foreign('kelas_id')
            ->references('id')
            ->on('kelas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('detail_anggota_kelas');
    }
}
