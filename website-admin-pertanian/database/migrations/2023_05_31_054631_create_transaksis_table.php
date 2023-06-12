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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->foreignId('id_kota');
            $table->string('tanggal_transaksi');
            $table->string('total_bayar');
            $table->string('bukti_transaksi');
            $table->enum('status_transaksi', ['sukses', 'pending', 'gagal', 'error']);
            $table->text('alamat');
            $table->string('no_resi');
            $table->string('tanggal_kirim');
            $table->string('tanggal_diterima');
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
        Schema::dropIfExists('transaksis');
    }
};
