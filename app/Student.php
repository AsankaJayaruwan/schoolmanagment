<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'st_id',
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'gender',
        'contact',
        'DoB',
        'classroom_id',
        'address',
        'city',
        'height',
        'weight',
        'running_speed',
        'sickness',
        'house_id'
    ];

    public static function findById($st_id)
    {
        return self::where('st_id', '=', $st_id)
            ->first();
    }

    public function house()
    {
        return $this->belongsTo(House::class,'house_id','id');
    }

    public function societies()
    {
        return $this->belongsToMany('App\Society', 'student_societies', 'student_id', 'society_id');
    }

    public function getFullName()
    {
        return $this->first_name . " " . $this->middle_name . " " . $this->last_name;
    }

    public function getName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getAvatar()
    {
        return url('images/student_avatar.png'); // Default Person Avatar
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function classroom(){
        return $this->belongsTo(Classroom::class,'classroom_id','id');  // foreign key in the st table and the primary key of that parent
    }
    
    public function sports()
    {
        return $this->belongsToMany('App\Sport', 'student_sports', 'student_id', 'sport_id');
    }
    
    
}