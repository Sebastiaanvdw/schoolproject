<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupations extends Model
{
    public function occupations()
    {
        return $this->hasMany('occupations');
    }
}
