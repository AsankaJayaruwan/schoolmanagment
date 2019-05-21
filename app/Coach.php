<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coachs';

    protected $fillable = [
        'id',
        'coach_id',
        'first_name',
        'last_name',
        'middle_name',
        'DoB',
        'gender',
        'civil_status',
        'religion',
        'nic',
        'email',
        'date_joined',
        'address',
        'city',
     //   'sp_id',
        'contact_number',
        'mobile_number'
    ];

    public function sports()
    {
        return $this->hasMany(Sport::class,'coach_id');
    }
}
