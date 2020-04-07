<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anant_school_stafflist extends Model
{
    public $table = "anant_school_stafflist";
    protected $fillable = ['Sr_No','EmployeeNumber','Name','emailaddress','Mobile','OTP','isRagistred','isActive'];
}