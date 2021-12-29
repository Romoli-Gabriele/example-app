<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /* stampa nei /storage/logs le query 
    DB::listen(function($query){
        logger($query->sql, $query->bindings);
    });*/

    return view(
        'index',
        [
            'posts' =>  Post::latest()->get(), //tutti i post ordinati dal più nuovo al più vecchio
            'categories'=> Category::all()
        ]
    );
});
Route::get('/details/{post:slug}', function (Post $post) { //Route::get('/details/{post:slug}',function(Post $post){ --> cerca in base alla key slug

    //trova un post con chiave $id e passalo alla vista "post"
    //$post = Post::findOrFail($id);
    return view('post', [ //ritorna vista e variabile $post = al post
        'post' => $post // funziona con binding fra model di eloquent e route -> stesso nome laravel capisce che cerchiamo il post corrispondente
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('index', [

        'posts' => $category->posts,
        'categories'=> Category::all()
    ]);
});

Route::get('/users/{user:username}', function (User $user) {
    return view('index', [
        'posts' => $user->posts
    ]);
});
