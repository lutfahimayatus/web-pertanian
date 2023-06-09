<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\pemasok;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemasok>
 */
class PemasokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pemasok = pemasok::all();
        return [
            'nama_pemasok' => $this -> faker ->firstName,
            'no_telp' => '081234586',
            'email' => '@gmail.com',
            'alamat' => 'politeknik negeri jember'
        ];
    }
}
