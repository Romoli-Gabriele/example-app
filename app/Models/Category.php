<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $guarded =['id'];

    public function posts(){//relazione uno a molti
        //hasOne, hasMany, belongsTo, belongsToMany
        return $this->hasMany(Post::class);
    }
    use HasFactory;
}
