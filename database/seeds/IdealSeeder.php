<?php
/**
 * @package    Seeder
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       10/01/2021 22:19:20
 */

use Illuminate\Database\Seeder;

class IdealSeeder extends Seeder
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
                "user_id" => 1,
                "nome_ideal" => "Levantar antes das 7:00 da manhã",
                "melhor_horario" => "7:00",
                "periodicidade_id" => 1,
                "created_at" => "2021-01-04T03:51:11.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 2,
                "user_id" => 1,
                "nome_ideal" => "Tomar café da manhã antes das 8:00",
                "melhor_horario" => "8:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T00:01:34.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 3,
                "user_id" => 6,
                "nome_ideal" => "Orar com os meninos",
                "melhor_horario" => "20:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T00:23:02.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 4,
                "user_id" => 6,
                "nome_ideal" => "Beber 1,5l de agua",
                "melhor_horario" => "15:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T00:23:18.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 5,
                "user_id" => 6,
                "nome_ideal" => "Fazer exercícios celular",
                "melhor_horario" => "19:00",
                "periodicidade_id" => 3,
                "created_at" => "2020-12-27T00:24:08.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 6,
                "user_id" => 6,
                "nome_ideal" => "Brincar com os meninos - jogo ou desenho",
                "melhor_horario" => "18:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T00:26:51.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 10,
                "user_id" => 11,
                "nome_ideal" => "Meta usuario 4",
                "melhor_horario" => "3",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T18:13:41.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 11,
                "user_id" => 11,
                "nome_ideal" => "Meta 2 Usuario 2",
                "melhor_horario" => "3",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T18:13:53.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 12,
                "user_id" => 12,
                "nome_ideal" => "Programar 3 horas para o Aglalber",
                "melhor_horario" => "20:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T23:26:30.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 13,
                "user_id" => 14,
                "nome_ideal" => "Progrmar 3 horas para o Aglalber ",
                "melhor_horario" => "20:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T23:40:44.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 14,
                "user_id" => 14,
                "nome_ideal" => "Tomar café da manhã com a familia",
                "melhor_horario" => "7:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T23:41:10.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 16,
                "user_id" => 15,
                "nome_ideal" => "Programar 3 horas",
                "melhor_horario" => "20:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T23:51:39.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 17,
                "user_id" => 15,
                "nome_ideal" => "Meta do marcelo",
                "melhor_horario" => "8:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-27T23:51:51.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 18,
                "user_id" => 16,
                "nome_ideal" => "Correr",
                "melhor_horario" => "17:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-29T04:11:17.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 19,
                "user_id" => 16,
                "nome_ideal" => "Andar de bike",
                "melhor_horario" => "11:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-29T04:11:55.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 20,
                "user_id" => 16,
                "nome_ideal" => "Almoçar 12hs",
                "melhor_horario" => "12:00",
                "periodicidade_id" => 1,
                "created_at" => "2020-12-29T04:12:26.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 21,
                "user_id" => 1,
                "nome_ideal" => "Fazer 20 minutos de exercicio",
                "melhor_horario" => "8:00",
                "periodicidade_id" => 1,
                "created_at" => "2021-01-04T03:51:44.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 22,
                "user_id" => 1,
                "nome_ideal" => "Estudar ingles por 20 minutos",
                "melhor_horario" => "22:00",
                "periodicidade_id" => 1,
                "created_at" => "2021-01-04T03:52:03.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 23,
                "user_id" => 1,
                "nome_ideal" => "NFC",
                "melhor_horario" => "22:00",
                "periodicidade_id" => 1,
                "created_at" => "2021-01-04T03:52:14.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 24,
                "user_id" => 1,
                "nome_ideal" => "Orar pela manhã",
                "melhor_horario" => "9:00",
                "periodicidade_id" => 1,
                "created_at" => "2021-01-04T03:53:00.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 25,
                "user_id" => 1,
                "nome_ideal" => "Comer uma maça",
                "melhor_horario" => "22:00",
                "periodicidade_id" => 1,
                "created_at" => "2021-01-04T03:54:52.000Z",
                "ideais_status_id" => 1
            ],
            [
                "id" => 42,
                "user_id" => 17,
                "nome_ideal" => "Exercicio",
                "melhor_horario" => "6:15",
                "periodicidade_id" => 1,
                "created_at" => "2021-01-04T12:11:01.000Z",
                "ideais_status_id" => 1
            ]
        ];

        foreach ($itens as $item) {
            $item['created_at'] = \Carbon\Carbon::now();
            $item['periodicidade_id'] = [$item['periodicidade_id']];
            $item['user_id'] = intval($item['user_id']) <= 4 ? $item['user_id'] : 1;

            \App\Models\Ideal::create($item);
        }
    }
}
