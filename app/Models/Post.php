<?php

namespace App\Models;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class Post
{
    public $title;
    public $publishDate;
    public $paragrafo;
    public $completo;
    public $slug;

    public function __construct($title, $publishDate, $paragrafo, $completo, $slug)
    {
        $this->title = $title;
        $this->publishDate = $publishDate;
        $this->paragrafo = $paragrafo;
        $this->completo = $completo;
        $this->slug = $slug;
    }
    public static function find($slug){
        return Post::all()->firstWhere('slug', $slug);
    }
    public static function findOrFail($slug)
    {

        $post = Post::find($slug);
        if (!isset($post)) {
            redirect('/');
        }
        /*
        $path = resource_path("/posts/$slug.html");
        else {
             
            $document = YamlFrontMatter::parseFile($path); //trova documento corrispondente con header
            $post = new Post(
                    $document->title,
                    $document->publishDate,
                    $document->paragrafo,
                    $document->body(),
                    $document->slug
            );
            //creo un post con le info del document

            //file_get_contents($path);
            //cache()->remember("posts.{$slug}", 5, function ($path){  memorizza nella cache per 3600 secondi /return 
            */
        return $post;
    }
    public static function all()
    {

         

        $posts = cache()->rememberForever("posts", function () {
            $files = File::files(resource_path("posts/"));//tutti le path dei file
            return  collect($files)->map(function ($file) { //| collezione = array post da lista file

                $document = YamlFrontMatter::parseFile($file);

                return new Post(
                    $document->title,
                    $document->publishDate,
                    $document->paragrafo,
                    $document->body(),
                    $document->slug
                );
            })->sortByDesc("publishDate");
        });
        /*
        $i = 1;
        $posts = [];
        $post = Post::find($i);
        while ($post != false) { //quando è false non esiste post con indice i
            array_push($posts, $post);
            $i++;
            $post = Post::find($i);
        }
        
        */
        return $posts;
    }
}
