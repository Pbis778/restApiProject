<?php

namespace Database\Seeders;

use App\Models\People;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'phonenum' => $faker->phoneNumber,
                'street' => $faker->streetAddress,
                'city' => $faker->city,
                'country' => $faker->country
            ]);
        }
    }
}