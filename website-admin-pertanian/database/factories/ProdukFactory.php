<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\produk;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $produk = Produk::all();
        return [
            'nama_produk' => $this -> faker ->firstName,
            'gambar' => 'gambar',
            'harga' => 10000,
            'stok' => 10,
            'terjual' => 10,
            'deskripsi_produk' => 'terjual'
        ];
    }
}