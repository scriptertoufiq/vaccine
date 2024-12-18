<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allotment extends Model
{
    protected $guarded = [];


    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
