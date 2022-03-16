<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     // POSTS TO TAGS
     public function posts() {
        return $this->belongsToMany("App\Posts");
      }
}
