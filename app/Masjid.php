<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    protected $guarded = [];

    public function scopeDataUser($q)
    {
        return $q->where('user_id', Auth::user()->id);
    }
}
