<?php
/**
 * @package    Seeder
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       10/01/2021 22:21:04
 */

use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
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
                "name" => "FULANO DA SILVA SAURO",
                "city" => "ALTOS",
                "license" => "PHP-0001"
            ],
            [
                "id" => 2,
                "name" => "FULANO DA SILVA PIRES",
                "city" => "TERESINA",
                "license" => "PHP-0002"
            ],
            [
                "id" => 3,
                "name" => "FULANO DA SILVA XÍCARA",
                "city" => "CAMPO MAIOR",
                "license" => "PHP-0003"
            ],
            
        ];

        foreach ($itens as $item) {
           
            $item['created_at'] = \Carbon\Carbon::now();
           
            \App\Models\Survey::create($item);
        }
    }
}
