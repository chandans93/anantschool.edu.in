<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anant_school_studentlist extends Model
{
    public $table = "anant_school_studentlist";
    protected $fillable = ['Gr_No','class','name'];
}