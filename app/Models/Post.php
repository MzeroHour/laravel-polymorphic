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

    //Polymorphic Many to One Relation
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    //Polymorphic One to One Relation
    public function comment(){
        return $this->morphOne(Comment::class, 'commentable');
    }
}
