<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Broth;

class BrothSeeder extends Seeder
{
    public function run()
    {
        // Array de dados de exemplo para os caldos
        $broths = [
            [
                'imageInactive' => 'caminho/para/imagem1.jpg',
                'imageActive'   => 'caminho/para/imagem1.jpg',
                'name'          => 'Shoyu',
                'description'   => 'Caldo tradicional à base de molho de soja.',
                'price'         => 10.00,
            ],
            [
                'imageInactive' => 'caminho/para/imagem2.jpg',
                'imageActive'   => 'caminho/para/imagem2.jpg',
                'name'          => 'Miso',
                'description'   => 'Caldo à base de pasta de soja fermentada.',
                'price'         => 12.00,
            ],
            // Adicione mais dados de exemplo conforme necessário
        ];

        // Iterar sobre os dados de exemplo e criar os caldos
        foreach ($broths as $brothData) {
            Broth::create($brothData);
        }
    }
}
