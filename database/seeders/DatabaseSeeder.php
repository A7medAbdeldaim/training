<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'id' => 1,
            'name' => 'admin',
            'password' => Hash::make('12345678'),
            'email' => 'admin@gmail.com',
            'rank' => 2,
        ]);
    }
}
