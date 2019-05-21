<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['classroom_code', 'classroom_name', 'teacher_incharge', 'grade_code'];

    public function students()
    {
        return $this->hasMany(Student::class,'classroom_id');
    }

}
