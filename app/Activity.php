<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'id',
        'activity_name',
        'description',
        'type',
        'club',
        'sp_id',
        'so_id',
        'venue',
        'date',
        'month'
    ];

    public function getDateOnly()
    {
        return date('Y-m-d',strtotime($this->date));
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class, 'sp_id','sp_id');
    }

    public function society_name()
    {
        return $this->belongsTo(Society::class, 'so_id','so_id');
    }
    
    
     public function type_name()
    {
        return $this->belongsTo(ActivityType::class, 'type','id');
    }

    public static function HouseMeetList()
    {
        return self::where('type','=','5');
    }

}
