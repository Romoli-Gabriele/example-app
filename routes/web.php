<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    
    return view('index', [
        'posts'=> Post::all()  //tutti i post
    ]

);
});
Route::get('/details/{post}',function(Post $post){ //Route::get('/details/{post:slug}',function(Post $post){ --> cerca in base alla key slug

    //trova un post con chiave $id e passalo alla vista "post"
    //$post = Post::findOrFail($id);
    return view('post',[ //ritorna vista e variabile $post = al post
        'post' => $post // funziona con binding fra model di eloquent e route -> stesso nome laravel capisce che cerchiamo il post corrispondente
    ]);
});