<?php

namespace Database\Seeders;

use App\Models\Mantenedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            UsuarioSeeder::class,
            materiaSeeder::class
        ]);
    }
}