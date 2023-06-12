<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tanggal Transaksi',
        'Total Harga',
        'Status',
        'Bukti Transfer',
        'No Resi',
        'Kota',
        'Alamat',
        'Action',
    ];
}
