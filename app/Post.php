<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'category_id', 'title', 'author', 'content'];

    public function category(){
      return $this->belongsTo('App\Category');
    }
}
