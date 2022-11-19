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
                "service" => 'VISTORIA VEICULAR - R$ 131,40',
                "city" => "ALTOS",
                "date" => "2022-01-01",
                "hour" => "14:00:00",
                "payment" => "PAGAMENTO BALCÃO",
                "name" => "FULANO DA SILVA SAURO",
                "cpf" => "999.999.999-99",
                "cnpj" => "99.999.999/9999-99",
                "phone" => "(86)99999-9999",
                "email" => "fulano@email.com"
            ],
            [
                "id" => 2,
                "service" => 'VISTORIA VEICULAR - R$ 131,40',
                "city" => "CAMPO MAIOR",
                "date" => "2022-05-05",
                "hour" => "15:00:00",
                "payment" => "PAGAMENTO BALCÃO",
                "name" => "CICLANO DA SILVA SAURO",
                "cpf" => "888.888.888-88",
                "cnpj" => "88.888.888/8888-88",
                "phone" => "(86)88888-8888",
                "email" => "ciclano@email.com"
            ],
            [
                "id" => 3,
                "service" => 'VISTORIA VEICULAR - R$ 131,40',
                "city" => "TERESINA",
                "date" => "2022-08-08",
                "hour" => "17:30:00",
                "payment" => "PAGAMENTO BALCÃO",
                "name" => "BELTRANO DA SILVA SAURO",
                "cpf" => "777.777.777-77",
                "cnpj" => "77.777.777/7777-77",
                "phone" => "(86)77777-7777",
                "email" => "beltrano@email.com"
            ],
        ];

        foreach ($itens as $item) {
           
            $item['created_at'] = \Carbon\Carbon::now();
           
            \App\Models\Survey::create($item);
        }
    }
}
