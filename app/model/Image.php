<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['description', 'url', 'featured','post_id'];

    public function post(){
        return $this->belongsTo(category::class, 'post_id', 'id');
    }
}
