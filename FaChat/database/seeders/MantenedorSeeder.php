<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MantenedorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('mantenedor')->insert([
            'nome' => 'Vinícius',
            'login' => 'fachatadm',
            'senha' => Hash::make('fachatadm'),
            'ativo' => true,
        ]);
    }
}