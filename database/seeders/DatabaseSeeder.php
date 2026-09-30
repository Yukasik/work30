<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'lastname' => 'Test User',
            'middlename' => 'Test User',
            'login' => '123',
            'tel' => '123',
            'password' => Hash::make("password"),
            'email' => 'test@example.com',
            'role'=> 'admin'
        ]);


    }
}
