<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('id', 155);
            $table->string('username', 155);
            $table->string('password', 155);
            $table->string('email', 155);
            $table->string('telepon1', 155);
            $table->string('telepon2', 155);
            $table->string('alamat', 155);
            $table->string('kota', 155);
            $table->string('tempatLahir', 155);
            $table->string('tanggalLahir', 155);
            $table->string('keterangan', 155);
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
        Schema::dropIfExists('pengguna');
    }
}
