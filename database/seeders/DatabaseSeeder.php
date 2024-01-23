<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'joko',
            'email' => 'joko@mail.com',
            'password' => 'joko123',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'tono',
            'email' => 'tono@mail.com',
            'password' => 'tono123',
        ]);
    }
}
