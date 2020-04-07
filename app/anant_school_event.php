<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anant_school_event extends Model
{
    public $table = "anant_school_event";
    protected $fillable = ['srno','class','Event_Name','Event_Code','isActive'];
}