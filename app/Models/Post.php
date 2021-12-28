<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   //massive assignement
    protected $guarded = ['id'];// what can't be assigned
    
    //protected $fillable = ['title', 'paragrafo', 'body'];//  what can be assigned 
    
    /*public function getRouteKeyName() anche così senza mettere ':slug' in web.php funziona
    {
        return slug;
    }*/
    public $with = ['user', 'category'];//aggiunge user e category

    public function category(){ //Molti a uno
        //hasOne, hanMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
