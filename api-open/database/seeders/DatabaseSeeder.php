<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProgdiSeeder::class,
            MahasiswaSeeder::class,
            UserSeeder::class,
            WilayahSeeder::class,
            BencanaSeeder::class,
        ]);
    }
}
