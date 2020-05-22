<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateridetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materidetail', function (Blueprint $table) {
            $table->id();
            $table->integer('idMateri');
            $table->text('pertanyaan1');
            $table->text('nilai1');
            $table->text('pertanyaan2');
            $table->text('nilai2');
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
        Schema::dropIfExists('materidetail');
    }
}
