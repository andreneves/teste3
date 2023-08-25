<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'Detergente',
            'quantidade' => 50,
            'preco' => 10.50,
            'categoria_id' => 1
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Limpol',
            'quantidade' => 70,
            'preco' => 5,
            'categoria_id' => 1
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Adubo',
            'quantidade' => 150,
            'preco' => 3,
            'categoria_id' => 2
        ]);


    }
}
