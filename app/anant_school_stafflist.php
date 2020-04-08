<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anant_school_stafflist extends Model
{
    public $table = "anant_school_stafflist";
    protected $fillable = ['id','EmployeeNumber','Name','emailaddress','Mobile','OTP','isRagistred','isActive'];
}