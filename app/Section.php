<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['section_code', 'section_name', 'sectional_head'];
}
