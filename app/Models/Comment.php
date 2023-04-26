<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    //same way
    public function commentable(){
        //One to Many Morph
        return $this->morphTo();
    }

    //same way
    public function subject(){
        //One to Many Morph
        return $this->morphTo('commentable');
    }
}
