<?php

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array(
                "id" => 2,
                "is_dev" => false,
                "name" => "Piaui",
                "email" => "piaui@gmail.com",
                "email_verified_at" => \Carbon\Carbon::now(),
            ),
            array(
                "id" => 3,
                "is_dev" => true,
                "name" => "Bruno Carvalho",
                "email" => "brunocarvalho@gmail.com",
                "email_verified_at" => \Carbon\Carbon::now(),
            ),
            array(
                "id" => 4,
                "is_dev" => true,
                "name" => "Desenvolvedor",
                "email" => "desenvolvedor@gmail.com",
                "email_verified_at" => \Carbon\Carbon::now(),
            ),
            array(
                "id" => 5,
                "is_dev" => true,
                "name" => "Administrador",
                "email" => "suportetop01@hotmail.com",
                "email_verified_at" => \Carbon\Carbon::now(),
            ),

        );

        $password = Hash::make('12345678');

        foreach ($users as $item) {
            $item['password'] = $password;
            $user = User::create($item);
            $user->types()->attach($user->is_dev ? [Type::ADMIN] : Type::CLIENTE);
        }
    }
}
