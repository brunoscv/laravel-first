<?php
/**
 * @package    Seeder
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       10/01/2021 22:21:53
 */

use Illuminate\Database\Seeder;

class PeriodicidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $itens = [
            [
                "id" => 1,
                "name" => "Segunda",
            ],
            [
                "id" => 2,
                "name" => "Terça",
            ],
            [
                "id" => 3,
                "name" => "Quarta",
            ],
            [
                "id" => 4,
                "name" => "Quinta",
            ],
            [
                "id" => 5,
                "name" => "Sexta",
            ],
            [
                "id" => 6,
                "name" => "Sabado",
            ],
            [
                "id" => 7,
                "name" => "Domingo",
            ]
        ];

        foreach ($itens as $item) {

            \App\Models\Periodicidade::create($item);
        }
    }
}
