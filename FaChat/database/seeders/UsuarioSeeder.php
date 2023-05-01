<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario')->insert([
            'nome' => 'Vinícius',
            'sobrenome' => 'De Luca',
            'email' => 'viniciusdeluca3@gmail.com',
            'senha' => Hash::make('12345678'),
            'docente' => true,
            'ativo' => true,
        ]);
    }
}
