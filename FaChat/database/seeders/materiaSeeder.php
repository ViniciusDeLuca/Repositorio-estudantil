<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class materiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materia')->insert([
            [
                'nome' => 'Análise de Algoritmos',
            ],
            [
                'nome' => 'Banco de Dados',
            ],
            [
                'nome' => 'Sistemas Distribuidos',
            ],
            [
                'nome' => 'Trabalho de Curso',
            ],
            [
                'nome' => 'Métodos de Pesquisa',
            ]
        ]);
    }
}
