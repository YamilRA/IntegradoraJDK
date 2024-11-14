<?php

namespace Database\Seeders;

use App\Models\CustomUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PeopleSeeder::class,
            Custom_UsersSeeder::class,
        ]);
    }
}
