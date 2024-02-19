<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // DB::table('users')->insert([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('123'),
        //     'role' => 'admin',
        // ]);



        $faker = Faker::create('lt_LT');

        foreach (range(1, 10) as $i) {

            DB::table('users')->insert([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => Hash::make('123'),
                'surname' => $faker->lastName,
                'code' => rand(11111111111, 99999999999), // Sugeneruoti unikalų kodą su 11 skaitmenų
            ]);

            // DB::table('clients')->insert([
            //     'name' => $faker->firstName,
            //     'surname' => $faker->lastName,
            //     'email' => $faker->email,

            // ]);
        }

        foreach (range(1, 20) as $i) {
            $clients = DB::table('users')->get();

            foreach ($clients as $client) {
                DB::table('clients')->insert([
                    'name' => $client->name,
                    'surname' => $client->surname,
                    'email' => $client->email,
                    'code' => $client->code,
                ]);
            }
        }
        foreach (range(1, 20) as $i) {
            $users = DB::table('users')->inRandomOrder()->limit(rand(1, 10))->get();
            foreach ($users as $user) {
                DB::table('accounts')->insert([
                    'account' => 'LT' . $faker->unique()->numerify('################'),
                    'user_code' => $user->code, // Priskirti vartotojo kodą
                ]);
            }
        }
    }
}
