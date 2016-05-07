<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NiceActionLog extends Model
{
    //To stablish relationships between the tables, Each Log belongs to a nice action
    public function nice_action()
    {
        return $this->belongsTo('App\NiceAction');
    }
}
