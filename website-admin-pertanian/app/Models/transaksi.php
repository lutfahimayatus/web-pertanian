<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
<<<<<<< Updated upstream
        'Tanggal Transaksi',
        'Total Harga',
        'Status',
        'Bukti Transfer',
        'No Resi',
        'Kota',
        'Alamat',
        'Action',
=======
        'status_transaksi'
>>>>>>> Stashed changes
    ];
}
