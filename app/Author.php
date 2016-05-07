<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //Starting relationship with quotes
    public function quotes()
    {
        return $this->hasMany('App\Quote');
    }
}
