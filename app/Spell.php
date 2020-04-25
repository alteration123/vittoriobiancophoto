<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    public function magic_schools()
    {
        return $this->belongsToMany(Magic_School::class);
    }
}
