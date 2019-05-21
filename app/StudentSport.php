<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSport extends Model
{
    protected $fillable = ['st_id', 'sp_id'];
    
    public function classroom(){
        return $this->belongsTo(Student::class);  
    }
    
    
}
