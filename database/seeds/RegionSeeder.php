<?php
/**
 * @package    Seeder
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       15/07/2019 19:45:00
 */

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $regions = array(
            array(
                "id" => 1,
                "name" => "Norte",
            ),
            array(
                "id" => 2,
                "name" => "Nordeste",
            ),
            array(
                "id" => 3,
                "name" => "Sudeste",
            ),
            array(
                "id" => 4,
                "name" => "Sul",
            ),
            array(
                "id" => 5,
                "name" => "Centro-Oeste",
            ),
        );

        foreach ($regions as $item) {

            Region::create($item);
        }
    }
}
