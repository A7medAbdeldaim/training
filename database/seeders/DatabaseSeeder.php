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
            'name' => 'admin',
            'password' => Hash::make('12345678'),
            'email' => 'admin@gmail.com',
            'rank' => 2,
        ]);

        User::create([
            'name' => 'Ebtisam',
            'password' => Hash::make('12345678'),
            'email' => 'Ebtisam.moh101@gmail.com',
            'rank' => 2,
        ]);

        User::create([
            'name' => 'Ahmed',
            'password' => Hash::make('12345678'),
            'email' => 'zaeemkingdom@gmail.com',
            'rank' => 2,
        ]);
    }
}
