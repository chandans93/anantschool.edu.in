<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anant_school_class extends Model
{
    public $table = "anant_school_class";
    protected $fillable = ['srno','class','isActive'];
}