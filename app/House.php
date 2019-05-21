<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'id',
        'house_code',
        'house_name',
        'color',
        'tr_id',
        'st_id',
        'date_joined',
    ];

    public function students()
    {
        return $this->hasMany(Student::class,'house_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'tr_id');
    }
}
