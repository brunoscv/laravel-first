<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = array(
            array(
                "id" => 1,
                "name" => "Adminstrador",
            ),
            array(
                "id" => 2,
                "name" => "Cliente",
            ),
        );

        foreach ($types as $item) {

            Type::create($item);
        }
    }
}
