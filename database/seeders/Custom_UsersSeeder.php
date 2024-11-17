<?php

namespace Database\Seeders;

use App\Models\CustomUser;
use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class Custom_UsersSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Obtén todos los registros de People
        $people = People::all();

        // Recorre cada persona con un for
        for ($i = 0; $i < $people->count(); $i++) {
            $person = $people[$i];

            CustomUser::create([
                'person_id' => $person->id, // Asigna el id de People como FK
                'username' => $faker->userName,
                'password' => bcrypt($faker->password), // encripta la contraseña
                'email' => $faker->email,
                'recovery_email' => $faker->email,
                'recovery_token' => Str::random(6), // usa Str::random para el token
                'token_expiration' => Carbon::now()->addMinutes(10),
                'registration_date' => Carbon::now(),
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
