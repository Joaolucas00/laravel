<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'titulo' => 'Laravel Senior Developer',
            'tags' => 'laravel, php',
            'empresa' => 'Acme Corp',
            'Local' => 'SP',
            'email' => 'email@email.com',
            'website' => 'http://www.acme.com',
            'descricao' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit laboriosam molestias exercitationem illum eos, veniam soluta laborum similique, cum tempore quaerat placeat saepe doloribus? '
        ]);

    }
}
