<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    public function genre(){

        return $this->belongsTo(Genre::class);
    }

    public function platforms(){

        return $this->belongsToMany(Platform::class);
    }
}
