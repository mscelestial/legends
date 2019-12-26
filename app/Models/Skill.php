<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    public function hero()
    {
        return $this->belongsTo('App\Models\Hero');
    }
}
