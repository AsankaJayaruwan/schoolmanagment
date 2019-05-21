<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    protected $fillable = [
        'id',
        'so_id',
        'society_name',
        'vision',
        'mission',
        'tr_id_mic',
        'tr_id_ast_mic',
        'st_id_president',
        'st_id_secretary',
        'st_id_treasurer',
        'formed_date'
    ];

    public function students()
    {
        return $this->belongsToMany('App\Student', 'student_societies', 'society_id', 'student_id');
    } 
    
    public function president()
    {
        return  $this->belongsTo(Student::class,'st_id_president','st_id');
    }
    
    public function secretary()
    {
        return  $this->belongsTo(Student::class,'st_id_secretary','st_id');
    }
    
    public function treasurer()
    {
        return  $this->belongsTo(Student::class,'st_id_treasurer','st_id');
    }

    public function mic()
    {
        return $this->belongsTo(\App\Teacher::class,'tr_id_mic','tr_id');
    }

    public function ast_mic()
    {
        return $this->belongsTo(\App\Teacher::class,'tr_id_ast_mic','tr_id');
    }
    

    protected  $primaryKey = "id";

//    public function teachers()
//    {
//        return $this->hasMany(\App\Teacher::class, 'tr_id_mic');
//    }
}
