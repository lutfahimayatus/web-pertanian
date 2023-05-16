<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restok', function (Blueprint $table) {
            $table->id('id_restok');
            $table->date('tanggal_restok');
            $table->integer('id_pemasok');
            $table->integer('id_produk');
            $table->string('nama_prduk');
            $table->string('stok_masuk');
            $table->string('harga_beli');
            $table->string('harga_jual');
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
        Schema::dropIfExists('restok');
    }
};
