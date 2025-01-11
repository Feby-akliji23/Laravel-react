<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wilayah;

class WilayahSeeder extends Seeder
{
    public function run()
    {
        $wilayahs = [
            ['nama' => 'Kab. Cilacap, Jawa Tengah'],
            ['nama' => 'Kota Kota Semarang, Jawa Tengah'],
            ['nama' => 'Kota Kota Sibolga, Sumatera Utara'],
        ];

        foreach ($wilayahs as $wilayah) {
            Wilayah::create($wilayah);
        }
    }
}

// ini digunakan untuk random faktoris

// class WilayahSeeder extends Seeder
// {
    /**
     * Run the database seeds.
     */
//     public function run(): void
//     {
//         Wilayah::factory()->count(10)->create();
//     }
// }
