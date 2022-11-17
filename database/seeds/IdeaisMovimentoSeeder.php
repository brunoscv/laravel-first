<?php
/**
 * @package    Seeder
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       10/01/2021 22:21:04
 */

use Illuminate\Database\Seeder;

class IdeaisMovimentoSeeder extends Seeder
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
                "user_id" => 16,
                "ideal_id" => 20,
                "nome_ideal" => "Almoçar 12hs",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 2,
                "user_id" => 16,
                "ideal_id" => 19,
                "nome_ideal" => "Andar de bike",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 3,
                "user_id" => 6,
                "ideal_id" => 4,
                "nome_ideal" => "Beber 1,5l de agua",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 4,
                "user_id" => 6,
                "ideal_id" => 6,
                "nome_ideal" => "Brincar com os meninos - jogo ou desenho",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 5,
                "user_id" => 1,
                "ideal_id" => 25,
                "nome_ideal" => "Comer uma maça",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 2,
                "created_at" => "2021-01-05T02:11:04.000Z"
            ],
            [
                "id" => 6,
                "user_id" => 16,
                "ideal_id" => 18,
                "nome_ideal" => "Correr",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 7,
                "user_id" => 1,
                "ideal_id" => 22,
                "nome_ideal" => "Estudar ingles por 20 minutos",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 2,
                "created_at" => "2021-01-05T02:26:06.000Z"
            ],
            [
                "id" => 8,
                "user_id" => 1,
                "ideal_id" => 21,
                "nome_ideal" => "Fazer 20 minutos de exercicio",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 2,
                "created_at" => "2021-01-05T02:11:06.000Z"
            ],
            [
                "id" => 9,
                "user_id" => 6,
                "ideal_id" => 5,
                "nome_ideal" => "Fazer exercícios celular",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 10,
                "user_id" => 1,
                "ideal_id" => 1,
                "nome_ideal" => "Levantar antes das 7:00 da manhã",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 2,
                "created_at" => "2021-01-05T02:11:09.000Z"
            ],
            [
                "id" => 11,
                "user_id" => 11,
                "ideal_id" => 11,
                "nome_ideal" => "Meta 2 Usuario 2",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 12,
                "user_id" => 15,
                "ideal_id" => 17,
                "nome_ideal" => "Meta do marcelo",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 13,
                "user_id" => 11,
                "ideal_id" => 10,
                "nome_ideal" => "Meta usuario 4",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 14,
                "user_id" => 1,
                "ideal_id" => 23,
                "nome_ideal" => "NFC",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 3,
                "created_at" => "2021-01-05T02:11:13.000Z"
            ],
            [
                "id" => 15,
                "user_id" => 6,
                "ideal_id" => 3,
                "nome_ideal" => "Orar com os meninos",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 16,
                "user_id" => 1,
                "ideal_id" => 24,
                "nome_ideal" => "Orar pela manhã",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 2,
                "created_at" => "2021-01-05T02:11:16.000Z"
            ],
            [
                "id" => 17,
                "user_id" => 15,
                "ideal_id" => 16,
                "nome_ideal" => "Programar 3 horas",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 18,
                "user_id" => 12,
                "ideal_id" => 12,
                "nome_ideal" => "Programar 3 horas para o Aglalber",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 19,
                "user_id" => 14,
                "ideal_id" => 13,
                "nome_ideal" => "Progrmar 3 horas para o Aglalber ",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 20,
                "user_id" => 1,
                "ideal_id" => 2,
                "nome_ideal" => "Tomar café da manhã antes das 8:00",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 2,
                "created_at" => "2021-01-05T02:11:10.000Z"
            ],
            [
                "id" => 21,
                "user_id" => 14,
                "ideal_id" => 14,
                "nome_ideal" => "Tomar café da manhã com a familia",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-04T03:58:25.000Z"
            ],
            [
                "id" => 3263,
                "user_id" => 17,
                "ideal_id" => 42,
                "nome_ideal" => "Exercicio",
                "data" => "2021-01-04T03:00:00.000Z",
                "resultado" => 2,
                "created_at" => "2021-01-04T12:11:14.000Z"
            ],
            [
                "id" => 4444,
                "user_id" => 16,
                "ideal_id" => 20,
                "nome_ideal" => "Almoçar 12hs",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4445,
                "user_id" => 16,
                "ideal_id" => 19,
                "nome_ideal" => "Andar de bike",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4446,
                "user_id" => 6,
                "ideal_id" => 4,
                "nome_ideal" => "Beber 1,5l de agua",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4447,
                "user_id" => 6,
                "ideal_id" => 6,
                "nome_ideal" => "Brincar com os meninos - jogo ou desenho",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4448,
                "user_id" => 1,
                "ideal_id" => 25,
                "nome_ideal" => "Comer uma maça",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4449,
                "user_id" => 16,
                "ideal_id" => 18,
                "nome_ideal" => "Correr",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4450,
                "user_id" => 1,
                "ideal_id" => 22,
                "nome_ideal" => "Estudar ingles por 20 minutos",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4451,
                "user_id" => 17,
                "ideal_id" => 42,
                "nome_ideal" => "Exercicio",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4452,
                "user_id" => 1,
                "ideal_id" => 21,
                "nome_ideal" => "Fazer 20 minutos de exercicio",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4453,
                "user_id" => 6,
                "ideal_id" => 5,
                "nome_ideal" => "Fazer exercícios celular",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4454,
                "user_id" => 1,
                "ideal_id" => 1,
                "nome_ideal" => "Levantar antes das 7:00 da manhã",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4455,
                "user_id" => 11,
                "ideal_id" => 11,
                "nome_ideal" => "Meta 2 Usuario 2",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4456,
                "user_id" => 15,
                "ideal_id" => 17,
                "nome_ideal" => "Meta do marcelo",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4457,
                "user_id" => 11,
                "ideal_id" => 10,
                "nome_ideal" => "Meta usuario 4",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4458,
                "user_id" => 1,
                "ideal_id" => 23,
                "nome_ideal" => "NFC",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4459,
                "user_id" => 6,
                "ideal_id" => 3,
                "nome_ideal" => "Orar com os meninos",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4460,
                "user_id" => 1,
                "ideal_id" => 24,
                "nome_ideal" => "Orar pela manhã",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4461,
                "user_id" => 15,
                "ideal_id" => 16,
                "nome_ideal" => "Programar 3 horas",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4462,
                "user_id" => 12,
                "ideal_id" => 12,
                "nome_ideal" => "Programar 3 horas para o Aglalber",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4463,
                "user_id" => 14,
                "ideal_id" => 13,
                "nome_ideal" => "Progrmar 3 horas para o Aglalber ",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4464,
                "user_id" => 1,
                "ideal_id" => 2,
                "nome_ideal" => "Tomar café da manhã antes das 8:00",
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ],
            [
                "id" => 4465,
                "user_id" => 14,
                "ideal_id" => 14,
                "data" => "2021-01-05T03:00:00.000Z",
                "resultado" => 0,
                "created_at" => "2021-01-05T23:42:56.000Z"
            ]
        ];

        foreach ($itens as $item) {
            unset($item['data']);
            unset($item['nome_ideal']);
            $item['created_at'] = \Carbon\Carbon::now();
            $item['user_id'] = intval($item['user_id']) <= 4 ? $item['user_id'] : 1;
            \App\Models\IdeaisMovimento::create($item);
        }
    }
}
