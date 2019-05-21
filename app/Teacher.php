<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'id',
        'tr_id',
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'date_joined',
        'DoB',
        'gender',
        'civil_status',
        'religion',
        'nic',
        'address',
        'city',
        'contact_number',
        'mobile_number',
        'designation',
        'designation_type',
        'house'
    ];

    public function fullName()
    {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }

    public function name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function society_mic()
    {
        return $this->hasMany(Society::class, 'tr_id_mic');
    }

    public function society_asi_mic()
    {
        return $this->hasMany(Society::class, 'tr_id_ast_mic');
    }

    public function house()
    {
        return $this->belongsTo(House::class, 'house_id', 'id');
    }


}
