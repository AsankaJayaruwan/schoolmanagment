<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAchievement extends Model
{
    // 'mark',
    protected $fillable = ['ach_id', 'st_id', 'mark'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'st_id', 'st_id');
    }

    public function achievement()
    {
        return $this->belongsTo(Achievement::class, 'ach_id');
    }
}
