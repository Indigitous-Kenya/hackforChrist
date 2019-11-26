<?php

namespace App\model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content', 'post_type','author_id','category_id',
'meta_data'];

public function author(){
    return $this->belongsTo(User::class, 'author_id', 'id');
}
public function category(){
    return $this->belongsTo(Category::class, 'category_id', 'id');
}

public function images(){
    return $this->hasMany(Image::class, 'post_id', 'id');
}

public function videos(){
    return $this->hasMany(Video::class, 'post_id', 'id');
}
public function tags(){
    return $this->belongsToMany(Tag::class);
}

}
