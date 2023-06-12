<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\kota;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kota>
 */
class KotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kota = kota::all();
        return [
            'nama_kota' => $this -> faker ->firstName,
            'ongkos_kirim' => 15000
        ];
    }
}
