<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','author_id','category_id',
'meta_data'];
}
