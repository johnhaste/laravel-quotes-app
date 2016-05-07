<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //To stablish relationships between the tables,Many to Many between cateogies and nice actions
    public function nice_actions()
    {
        //The table that is connecting, the table that contains both ids
        return $this->belongsToMany('App\NiceAction', 'categories_nice_actions');
    }
}
