<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevCom extends Model
{
    protected $fillable = [
        'dev_id',
        'first_name',
        'last_name',
        'middle_name',
        'DoB',
        'civil_status',
        'religion',
        'nic',
        'email',
        'date_joined',
        'address',
        'city',
        'contact_number',
        'mobile_number'
    ];
}
