<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    //
    
    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Model\Role');
    }

    public function types()
    {
        return $this->belongsToMany('App\Models\Types');
    }
}
