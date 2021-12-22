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
        'posts'=> Post::all()//tutti i post
    ]

);
});
Route::get('/details/{post}',function($slug){

    //trova un post con chiave $slug e passalo alla vista "post"

    $post = Post::find($slug);
    
    if($post==false){
        abort(404);
    }
    
    return view('post',[ //ritorna vista e variabile $post = al post
        'post'=>$post
    ]);
})->whereNumber('post');