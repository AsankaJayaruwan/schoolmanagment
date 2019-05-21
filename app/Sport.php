<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = [
        'id',
        'sp_id',
        'sport_name',
        'vision',
        'mission',
        'tr_id_mic',
        'tr_id_ast_mic',
        'coach_id',
        'formed_date'
    ];
    
    public function micsport(){
        return $this->belongsTo(\App\Teacher::class,'tr_id_mic','tr_id');
    }
    
    public function astsport(){
        return $this->belongsTo(\App\Teacher::class,'tr_id_ast_mic','tr_id');
    }
    
    public function coachsport(){
        return $this->belongsTo(\App\Coach::class,'coach_id','coach_id');
    }
    
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_sports', 'st_id', 'sp_id' );
    }
    
    public function studentss()
    {
        return $this->belongsToMany('App\Student', 'student_sports', 'sport_id', 'student_id');
    } 
}
