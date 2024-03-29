<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        \App\User::create([
            "name" => "Felix",
            "email" => "felixmoralesjordan@gmail.com",
            "password" => "12fm03mj92",
            "email_verified_at" => now()
        ]);
        for ($i = 0; $i < 20; $i++){
            $user = new \App\User();
            $user->name = $faker->firstName;
            $user->email = $faker->email;
            $user->password = 1234;
            $user->save();

        }
    }
}
