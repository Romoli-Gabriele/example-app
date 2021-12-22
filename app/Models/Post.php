<?php

namespace App\Models;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

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

    public static function find($slug)
    {

        $path = resource_path("/posts/$slug.html");

        if (!file_exists($path)) {
            return false;
        } else {

            $document = YamlFrontMatter::parseFile($path); //trova documento corrispondente con header
            $post = new Post(
                $document->title,
                $document->publishDate,
                $document->paragrafo,
                $document->body(),
                $document->slug,
            );
            //creo un post con le info del document

            //file_get_contents($path);
            //cache()->remember("posts.{$slug}", 5, function ($path){  memorizza nella cache per 3600 secondi /return 
            
            return $post;
        }
    }
    public static function all()
    {
        /*
        $files = File::files(resource_path("posts/"));//tutti le path dei file
         
        $posts= collect($files)->map(function ($file){ //| collezione = array post da lista file

            $document = YamlFrontMatter::parseFile($file);

            return new Post(
                $document->title,
                $document->publishDate, 
                $document->paragrafo, 
                $document->body(),
                $document->slug
            );
        });
*/
        $i = 1;
        $posts = [];
        $post = Post::find($i);
        while ($post != false) { //quando è false non esiste post con indice i
            array_push($posts, $post);
            $i++;
            $post = Post::find($i);
        }
        return $posts;
    }
}
