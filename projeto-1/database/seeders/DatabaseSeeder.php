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

        Listing::create([
            'titulo' => 'Laravel Junior Developer',
            'tags' => 'laravel, php, JS, bootstrap',
            'empresa' => 'FDS Corp',
            'Local' => 'RJ',
            'email' => 'email@email.com',
            'website' => 'http://www.fds.com',
            'descricao' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dictamolestias exercitationem illum eos, veniam soluta laborum similique, cum tempore quaerat placeat e doloribus? '
        ]);

        Listing::create([
            'titulo' => 'Node js Senior Developer',
            'tags' => 'JavaScript, Node JS',
            'empresa' => 'FDP Corp',
            'Local' => 'SC',
            'email' => 'email@email.com',
            'website' => 'http://www.fdp.com',
            'descricao' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum quasi adipisci? Suscipit quos error labore praesentium quibusdam eius cum eos voluptate minima qui consectetur, doloribus perferendis. Aut nemo dolores, magni neque nobis maiores porro dolorem delectus dolore eaque quidem, cumque natus. Vel beatae voluptate deserunt autem suscipit reprehenderit ut minima obcaecati officiis? Distinctio voluptatem a, eaque deserunt hic quos nesciunt, sit nobis numquam sint labore modi enim. Iste assumenda eveniet vero maxime necessitatibus reprehenderit quos quae fuga possimus officiis distinctio inventore molestias temporibus, corporis ad facilis et. Vitae laborum qui corrupti harum eos ab. Illum doloribus maxime odit autem?'
        ]);

        Listing::create([
            'titulo' => 'Python Senior Developer',
            'tags' => 'python, django, full-stack',
            'empresa' => 'tmnc Corp',
            'Local' => 'RS',
            'email' => 'email@email.com',
            'website' => 'http://www.tmnc.com',
            'descricao' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt minus iure itaque dicta molestias amet vel ducimus, eum maxime dolore mollitia nemo dolorum, labore dolorem nostrum commodi pariatur quaerat sint assumenda nam hic velit doloremque! Consequatur id assumenda recusandae aspernatur, exercitationem modi, illo possimus repellat quibusdam accusamus dolore corporis minus reprehenderit facere quis neque nihil laudantium reiciendis alias. Laboriosam, aliquid?'
        ]);

    }
}
