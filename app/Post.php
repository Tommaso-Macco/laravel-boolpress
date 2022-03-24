<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;
    // USER TO POSTS 
    public function user () {
        return $this->belongsTo('App\User');
    }

    // CATEGORY TO POSTS 
    public function category() {
        return $this->belongsTo("App\Category");
      }

    // TAGS TO POSTS
    public function tags() {
        return $this->belongsToMany("App\Tag");
      }

    // FILLABLE FOR PostController@Store
    protected  $fillable = [
        "title",
        "content",
        "category_id",
        "user_id"
    ];
}
