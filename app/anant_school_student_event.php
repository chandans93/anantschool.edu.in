<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anant_school_student_event extends Model
{
    public $table = "anant_school_student_event";
    protected $fillable = ['participet_no','eventname','GRNumber','MobileNo'];
}