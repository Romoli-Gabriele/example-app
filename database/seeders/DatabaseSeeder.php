<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();
        \App\Models\Category::factory(20)->create();
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(5)->create();
/*
        //-------- POST 1 --------
        Post::create([
            'title' => 'POST Numero 1!!!',
            'paragrafo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. </p> <p class="mt-4"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'body' => 'POST numero 1!!!! </h1><div class=\"space-y-4 lg:text-lg leading-loose\">    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco        laboris nisi ut aliquip ex ea commodo consequat.</p>    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla        pariatur.</p>    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque        laudantium,        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae        vitae        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut        fugit.</p>    <h2 class=\"font-bold text-lg\">Dettagli diversi!!!</h2>    <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui        dolorem        ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi        tempora        incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,        nisi ut        aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate        velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas        nulla        pariatur?\"</p>    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco        laboris nisi ut aliquip ex ea commodo consequat.</p>    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla        pariatur.</p>    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque        laudantium,        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae        vitae        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut        fugit.</p>',
            'slug' => 'Primo',
            'publishDate' => '2021-03-11 07:32:22',
            'category_id' => '1',
            'user_id' => '3'
        ]);




        //------ POST 2 -----------
        Post::create([
            'title' => 'POST Numero 2!!',
            'paragrafo' => 'Diverso perche il secondo 222222 ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p class="mt-4"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'body' => 'POST numero 2!!!!</h1><div class="space-y-4 lg:text-lg leading-loose"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Ut en222im ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <p>Sed ut perspiciatis unde omnis i22222ste natus error sit voluptatem accusantium doloremquelaudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit autfugit.</p> <h2 class="font-bold text-lg">Dettagli diversi!!!</h2> <p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, cons22222ectetur, adipisci velit, sed quia non numquam eius moditempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p> <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ualiquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p><p>Lorem ipsu2222222222222enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur.</p> <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>',
            'slug' => 'Secondo',
            'publishDate' => '2021-02-21 12:45:31',
            'category_id' => '3',
            'user_id' => '1'
        ]);






        //--------- Post 3 --------
        Post::create([
            'title' => 'POST Numero 3!!',
            'paragrafo' => 'Lorem ipsum dolor sit amet, <b>Numero 3 3 3 3 </b>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p class="mt-4"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'body' => 'POST numero 3</h1><div class="space-y-4 lg:text-lg leading-loose"> <p>Lorem ipsum dol444444444444444met, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur.</p><p>Sed ut pe<b>3</b> dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p><h2 class="font-bold text-lg">Dettagli diversi!!!</h2><p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, quidolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius moditempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,nisi ualiquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptatevelit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas null apariatur?"</p><p>Lorem ipsum dolor sit am444444et, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur.</p><p>Sed ut perspiciatis unde omnis <b>3333</b>tus error sit voluptatem accusantium doloremquelaudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitaedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit autfugit.</p>',
            'slug' => 'Terzo',
            'publishDate' => '2004-02-21 2:54:01',
            'category_id' => '2',
            'user_id' => '2'
        ]);






        //--------- Post 4--------
        Post::create([
            'title' => 'POST Numero 4!!',
            'paragrafo' => 'Lorem ipsum dolor sit amet, <b>Numero 444 </b>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p class="mt-4"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'body' => 'POST numero 4 1234</h1><div class="space-y-4 lg:text-lg leading-loose"> <p>Lorem ipsum dol444444444444444met, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur.</p><p>Sed ut pe<b>3</b> dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p><h2 class="font-bold text-lg">Dettagli diversi!!!</h2><p>Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, quidolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius moditempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,nisi ualiquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptatevelit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas null apariatur?"</p><p>Lorem ipsum dolor sit am444444et, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur.</p><p>Sed ut perspiciatis unde omnis <b>3333</b>tus error sit voluptatem accusantium doloremquelaudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitaedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit autfugit.</p>',
            'slug' => 'Quarto',
            'publishDate' => '2004-02-21 2:54:01',
            'category_id' => '1',
            'user_id' => '7'
        ]);



        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);
        */
    }
}
