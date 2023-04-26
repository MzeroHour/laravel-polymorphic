<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name'=>'Guest User'
        ]);
    }

    //Polymorphic One to Many Relation
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    //Polymorphic One to One Relation
    public function comment(){
        return $this->morphOne(Comment::class, 'commentable');
    }

    //Polymorphic Many to Many
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable', 'taggables');
    }
}
