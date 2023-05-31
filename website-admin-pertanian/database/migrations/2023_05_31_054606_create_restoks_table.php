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
        Schema::create('restoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pemasok')->unique();
            $table->foreignId('id_produk')->unique();
            $table->date('tanggal_restok');
            $table->string('nama_produk');
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
        Schema::dropIfExists('restoks');
    }
};
