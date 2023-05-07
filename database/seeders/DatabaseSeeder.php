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
            'name' => 'ferihives',
            'password' => '$2y$10$g0zWqooJn.kN9Nv8/O9XD.L3fNraHYVQydZKuUcY58VPKHcSLUQZa',
            'email' => 'teszt@teszt.hu',
         ]);
    }
}
