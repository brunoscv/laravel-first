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
                "service" => "VISTORIA VEICULAR - R$ 131,40",
                "name" => "FULANO DA SILVA SAURO",
                "city" => "ALTOS",
                "license" => "PHP-0001",
                "date" => "2022-01-01",
                "hour" => "14:00:00",
                "payment" => "PAGAMENTO BALCÃO",
                "number_boleto" => "",
                "url_boleto" => "",
                "code_boleto" => "",
                "cpf" => "999.999.999-99",
                "cnpj" => "",
                "phone" => "",
                "email" => ""
            ],
            [
                "id" => 2,
                "service" => "VISTORIA VEICULAR - R$ 131,40",
                "name" => "FULANO DA SILVA PIRES",
                "city" => "TERESINA",
                "license" => "PHP-0002",
                "date" => "2022-01-01",
                "hour" => "15:00:00",
                "payment" => "BOLETO",
                "number_boleto" => "03399.85301 29700.000242 27020.901016 2 78150000015630",
                "url_boleto" => "https://boleto.sandbox.pagseguro.com.br/b3a8c641-719a-42ae-bc8e-d74c4381eefb.pdf",
                "code_boleto" => "https://boleto.sandbox.pagseguro.com.br/b3a8c641-719a-42ae-bc8e-d74c4381eefb.png",
                "cpf" => "888.888.888-88",
                "cnpj" => "",
                "phone" => "(86)99999-9999",
                "email" => "fulanopires@email.com"
            ],
            [
            "id" => 3,
                "service" => "VISTORIA VEICULAR - R$ 131,40",
                "name" => "FULANO DA SILVA XÍCARA",
                "city" => "CAMPO MAIOR",
                "license" => "PHP-0003",
                "date" => "2022-01-01",
                "hour" => "17:00:00",
                "payment" => "BOLETO",
                "number_boleto" => "03399.85301 29700.000242 27020.901016 2 78150000015630",
                "url_boleto" => "https://boleto.sandbox.pagseguro.com.br/6f0c4b2c-818f-4603-b9a0-606e50d40507.pdf",
                "code_boleto" => "https://boleto.sandbox.pagseguro.com.br/6f0c4b2c-818f-4603-b9a0-606e50d40507.png",
                "cpf" => "777.777.777-977",
                "cnpj" => "",
                "phone" => "(86)77777-7777",
                "email" => "fulanoxicara@email.com"
            ]
            
        ];

        foreach ($itens as $item) {
           
            $item['created_at'] = \Carbon\Carbon::now();
           
            \App\Models\Survey::create($item);
        }
    }
}
