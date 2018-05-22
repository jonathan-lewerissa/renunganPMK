<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renungans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->string('ayat_emas');
            $table->string('gambar')->nullable();
            $table->string('judul');
            $table->string('ayat');
            $table->text('isi');
            $table->string('sumber');
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
        Schema::dropIfExists('renungans');
    }
}
