<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Protein;

class ProteinSeeder extends Seeder
{
    public function run()
    {
        Protein::create([
            'imageInactive' => 'caminho/para/imagem_inativa.jpg',
            'imageActive' => 'caminho/para/imagem_ativa.jpg',
            'name' => 'Frango',
            'description' => 'Peito de frango grelhado',
            'price' => 12.99,
        ]);

        Protein::create([
            'imageInactive' => 'caminho/para/outra_imagem_inativa.jpg',
            'imageActive' => 'caminho/para/outra_imagem_ativa.jpg',
            'name' => 'Carne de Porco',
            'description' => 'Tiras de carne de porco temperadas',
            'price' => 14.99,
        ]);      
    }
}