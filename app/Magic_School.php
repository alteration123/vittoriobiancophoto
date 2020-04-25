<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magic_School extends Model
{
    public function spells()
    {
        return $this->belongsToMany(Spell::class);
    }
}
