<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = ['ach_name', 'type', 'level', 'venue','achievement', 'act_id'];

    public function activity()
    {
        return $this->belongsTo(Activity::class,'act_id');
    }
}

