<?php

namespace Database\Seeders;

use App\Models\Renter;
use App\Models\User;
use Faker\Factory as Faker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $user = User::all()->pluck('id');

        for($i = 0; $i < 100; $i++) {
            $user = User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->password,
            ]);

            Renter::create([
                'user_id' => $user->id,
                'name' => $faker->name,
                'contact' => $faker->phoneNumber,
                'email' => $faker->email,
                'date' => $faker->date,
            ]);
        }
    }
}
