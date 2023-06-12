<?php

namespace Database\Factories;
<<<<<<< Updated upstream
use App\Models\transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;
=======

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\transaksi;

>>>>>>> Stashed changes

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
<<<<<<< Updated upstream
            'id_user'=>1,
            'id_kota'=>1,
            'tanggal_transaksi'=>now(),
            'total_bayar'=>10000,
            'bukti_transaksi'=>'tidak ada',
            'status_transaksi'=>'pending',
            'alamat'=>$this->faker->address(),
            'no_resi'=>45124,
            'tanggal_kirim'=>now(),
            'tanggal_diterima'=>now(),
            'created_at'=>now(),
            'updated_at'=>now()

=======
            //
>>>>>>> Stashed changes
        ];
    }
}
