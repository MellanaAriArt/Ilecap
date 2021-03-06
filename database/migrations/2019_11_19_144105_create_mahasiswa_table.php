<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nama');
            $table->enum('jurusan',['Ti-mti','Ti-dgm','Ti-kab','Sistem Kmputer']);
            $table->string('email');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('jenis_kelamin');
            $table->integer('humas');
            $table->text('img');
            
            
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
        Schema::dropIfExists('mahasiswa');
    }
}
