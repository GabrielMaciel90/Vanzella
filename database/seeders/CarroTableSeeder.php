<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class CarroTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('carros')->insert([
            [
                'nome' => 'Polo',
                'marca'=> 'Volkswagen', 
                'descricao' => 'Muito confortável e Econômico',
                'preco' => '45.000',
                'tempo_rodando' => '2014-02-03 16:16:29',
                'data_lancamento' => '2014-01-01',
                'km_rodado' => '189089'

            ],
            [
                'nome' => 'HB20',
                'marca'=> 'Hyundai', 
                'descricao' => 'Custo benefício e confortável',
                'preco' => '55.000',
                'tempo_rodando' => '2012-02-01 14:15:39',
                'data_lancamento' => '2012-01-02',
                'km_rodado' => '178909'
            ],
            [
                'nome' => 'Civic',
                'marca'=> 'Honda', 
                'descricao' => 'Rápido e econômico',
                'preco' => '70.800',
                'tempo_rodando' => '2010-02-22 15:20:26',
                'data_lancamento' => '2010-01-10',
                'km_rodado' => '200128'
            ],
            [
                'nome' => 'Jetta',
                'marca'=> 'Volkswagen', 
                'descricao' => 'Econômico e em perfeito estado',
                'preco' => '80.000',
                'tempo_rodando' => '2018-04-25',
                'data_lancamento' => '2018-02-28',
                'km_rodado' => '50678',
            ],
            [
                'nome' => 'Vectra',
                'marca'=> 'Chevrolet', 
                'descricao' => 'modelo de porte médio e possui versão Sedan, Hatchback e Perua',
                'preco' => '15.000',
                'tempo_rodando' => '1999-08-20',
                'data_lancamento' => '1999-09-29 17:06:09',
                'km_rodado' => '200678',
            ]
        ]);
    }
}