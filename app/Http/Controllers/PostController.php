<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view(
            'posts.index',
            [
                'posts' =>  Post::latest()->filter(request(['search','category','author']))->get(), //tutti i post ordinati dal più nuovo al più vecchio filtrati con ricerca e categorie
            ]
        );
    }
    public function post(Post $post)
    {
        return view('posts.post', [ //ritorna vista e variabile $post = al post
            'post' => $post // funziona con binding fra model di eloquent e route -> stesso nome laravel capisce che cerchiamo il post corrispondente
        ]);
    }

}
