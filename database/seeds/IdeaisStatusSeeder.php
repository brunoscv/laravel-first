<?php
/**
 * @package    Seeder
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       10/01/2021 22:21:27
 */

use Illuminate\Database\Seeder;

class IdeaisStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $itens  = [
            [
                "id" => 1,
                "name" => "Ativo"
            ],
            [
                "id" => 2,
                "name" => "Concluido"
            ],
            [
                "id" => 3,
                "name" => "Abandonado"
            ]
        ];

        foreach ($itens as $item) {
            \App\Models\IdeaisStatus::create($item);
        }
    }
}
