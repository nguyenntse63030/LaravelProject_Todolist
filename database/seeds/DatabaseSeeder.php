<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        $faker = Faker\Factory::create();

            \App\User::create([

                'username' => 'admin',
                'fullname' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123'),
                'role' => 1
            ]);

            \App\User::create([

                'username' => 'user',
                'fullname' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123'),
                'role' => 0
            ]);

            for ($i = 0; $i<10; $i++){

                \App\Tasks::create([

                    'username' => 'user',
                    'taskName' => $faker->sentence(),
                    'status' => array_random(['In Progress', 'Done'])
                ]);
            }

            for ($i = 0; $i<20; $i++){

                \App\User::create([

                    'username' => $faker->userName,
                    'fullname' => $faker->name,
                    'email' => $faker->email,
                    'password' => bcrypt('123'),
                    'role' => 0
                ]);
            }

    }
}
