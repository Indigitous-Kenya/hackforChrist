<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','color'];

    public function postcategory(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
