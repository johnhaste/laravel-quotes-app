<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //Starting relationship with quotes
    public function authors()
    {
        return $this->belongsTo('App\Author');
    }
}
