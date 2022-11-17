<?php
/**
 * Auto generated
 * User: rupertlustosa
 * Email: rupertlustosa@gmail.com
 * Date: 15/07/14
 * Time: 14:28
 */

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run()
    {

        $states = array(
            array(
                "id" => 11,
                "region_id" => 1,
                "state" => "Rondônia",
                "initials" => "RO",
            ),
            array(
                "id" => 12,
                "region_id" => 1,
                "state" => "Acre",
                "initials" => "AC",
            ),
            array(
                "id" => 13,
                "region_id" => 1,
                "state" => "Amazonas",
                "initials" => "AM",
            ),
            array(
                "id" => 14,
                "region_id" => 1,
                "state" => "Roraima",
                "initials" => "RR",
            ),
            array(
                "id" => 15,
                "region_id" => 1,
                "state" => "Pará",
                "initials" => "PA",
            ),
            array(
                "id" => 16,
                "region_id" => 1,
                "state" => "Amapá",
                "initials" => "AP",
            ),
            array(
                "id" => 17,
                "region_id" => 1,
                "state" => "Tocantins",
                "initials" => "TO",
            ),
            array(
                "id" => 21,
                "region_id" => 2,
                "state" => "Maranhão",
                "initials" => "MA",
            ),
            array(
                "id" => 22,
                "region_id" => 2,
                "state" => "Piauí",
                "initials" => "PI",
            ),
            array(
                "id" => 23,
                "region_id" => 2,
                "state" => "Ceará",
                "initials" => "CE",
            ),
            array(
                "id" => 24,
                "region_id" => 2,
                "state" => "Rio Grande do Norte",
                "initials" => "RN",
            ),
            array(
                "id" => 25,
                "region_id" => 2,
                "state" => "Paraíba",
                "initials" => "PB",
            ),
            array(
                "id" => 26,
                "region_id" => 2,
                "state" => "Pernambuco",
                "initials" => "PE",
            ),
            array(
                "id" => 27,
                "region_id" => 2,
                "state" => "Alagoas",
                "initials" => "AL",
            ),
            array(
                "id" => 28,
                "region_id" => 2,
                "state" => "Sergipe",
                "initials" => "SE",
            ),
            array(
                "id" => 29,
                "region_id" => 2,
                "state" => "Bahia",
                "initials" => "BA",
            ),
            array(
                "id" => 31,
                "region_id" => 3,
                "state" => "Minas Gerais",
                "initials" => "MG",
            ),
            array(
                "id" => 32,
                "region_id" => 3,
                "state" => "Espírito Santo",
                "initials" => "ES",
            ),
            array(
                "id" => 33,
                "region_id" => 3,
                "state" => "Rio de Janeiro",
                "initials" => "RJ",
            ),
            array(
                "id" => 35,
                "region_id" => 3,
                "state" => "São Paulo",
                "initials" => "SP",
            ),
            array(
                "id" => 41,
                "region_id" => 4,
                "state" => "Paraná",
                "initials" => "PR",
            ),
            array(
                "id" => 42,
                "region_id" => 4,
                "state" => "Santa Catarina",
                "initials" => "SC",
            ),
            array(
                "id" => 43,
                "region_id" => 4,
                "state" => "Rio Grande do Sul",
                "initials" => "RS",
            ),
            array(
                "id" => 50,
                "region_id" => 5,
                "state" => "Mato Grosso do Sul",
                "initials" => "MS",
            ),
            array(
                "id" => 51,
                "region_id" => 5,
                "state" => "Mato Grosso",
                "initials" => "MT",
            ),
            array(
                "id" => 52,
                "region_id" => 5,
                "state" => "Goiás",
                "initials" => "GO",
            ),
            array(
                "id" => 53,
                "region_id" => 5,
                "state" => "Distrito Federal",
                "initials" => "DF",
            ),
        );


        foreach ($states as $registro) {

            App\Models\State::create($registro);
        }
    }
}
