<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'author_id', 'post_id'];

    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function post(){
        return $this->belongsTo(User::class, 'post_id', 'id');
    }

    
}
