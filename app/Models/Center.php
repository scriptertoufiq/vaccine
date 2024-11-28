<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $guarded = [];

    public  function district()
    {
        return $this->belongsTo(District::class);
    }

    public  function user()
    {
        return $this->belongsTo(User::class);
    }

    public  function  allotments()
    {
        return $this->hasMany(Allotment::class);
    }
}
