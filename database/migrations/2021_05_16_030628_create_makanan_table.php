<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_makanan');
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('suku_id')->nullable();
            $table->foreign('suku_id')->references('id')->on('suku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makanan');
    }
}
