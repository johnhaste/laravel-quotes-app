<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NiceAction extends Model
{
    //To stablish relationships between the tables,Each Nice Action has Many Logs
    public function logged_actions()
    {
        return $this->hasMany('App\NiceActionLog');
    }
    
    //To stablish relationships between the tables,Many to Many between cateogies and nice actions
    public function categories()
    {
        //The table that is connecting, the table that contains both ids
        return $this->belongsToMany('App\Category', 'categories_nice_actions');
    }
}
