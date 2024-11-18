<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;


class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Usamos for en lugar de foreach
        for ($i = 0; $i < 100; $i++) {
            People::create([
                'first_name' => $faker->name,
                'last_name' => $faker->lastName,
                'birth_date' => $faker->date,
                'address' => $faker->address,
                'phone' => substr($faker->phoneNumber, 0, 10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
