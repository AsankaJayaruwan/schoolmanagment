<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['grade_code', 'grade_name', 'grade_cordinator', 'section_code'];
}
