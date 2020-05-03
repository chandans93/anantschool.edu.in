<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Datatables;
use Auth;
use Config;
use File;
use Image;
use Helpers;
use Redirect;
use DB;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class ExamController extends Controller
{
    
    public function index()
    {
        
    }

    public function contact()
    {
        return view('front.contact');
    }

    
}


