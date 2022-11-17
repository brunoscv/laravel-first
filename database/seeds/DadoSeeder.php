<?php
/**
 * @package    Seeder
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       25/06/2020 22:07:21
 */

use Illuminate\Database\Seeder;

class DadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $itens = [];

        foreach ($itens as $item) {

            \App\Models\Dado::create($item);
        }
    }
}
		