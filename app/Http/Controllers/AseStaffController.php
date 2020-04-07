<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\anant_school_stafflist;
use App\anant_school_class;
use App\anant_school_event;
use App\anant_school_studentlist;
use App\anant_school_student_event;
use Datatables;
use Auth;
use Config;
use File;
use Image;
use Helpers;
use Redirect;
use DB;
use Response;
use Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
//use App\Http\Requests\GateRequest;
//use App\Services\Template\Contracts\GateRepository;


class AseStaffController extends Controller
{
    //->with('controller',$this->controller)
    public function index()
    {
        $data =anant_school_stafflist::where('isActive', 1)->select('EmployeeNumber')->get();
        //print_r($data);
        //exit();
        return view('front.staff')->with('stafflist',$data);
         //$data =anant_school_stafflist::all();
    }
    public function findname($id)
    {
       $data =anant_school_stafflist::where('EmployeeNumber', $id)->select('Name')->get()->toArray();
       
        if(!empty($data)){
            return $data[0]['Name'];    
        }else{
            return '';
        }
    }
    public function mailtest()
    {
       //$data =anant_school_stafflist::where('EmployeeNumber', $id)->select('emailaddress')->get()->toArray();

        $mail="it@sanskardham.org";
        Mail::to( $mail)->send(new SendMail());
        return redirect()->back()->with('success', 'Email sent successfully. Check your email.');
            
    }
    public function staffotp($id)
    {/*
       $record =anant_school_stafflist::where('EmployeeNumber', $id)->select('emailaddress')->get()->toArray();

    
        $data['title'] = "This is Test Mail Tuts Make";
 
        Mail::send('front.home', $data, function($message) {
 
            $message->to('it@sanskardham.org', 'Receiver Name')
 
                    ->subject('Tuts Make Mail');
        });
 
        if (Mail::failures()) {
            echo "Sorry! Please try again latter";
           //return response()->Fail('Sorry! Please try again latter');
         }else{
            echo "Great! Successfully send in your mail";
           //return response()->success('Great! Successfully send in your mail');
         }
    

         exit();

    */

    }
    //studet
    public function student()
    {
        $data =anant_school_class::where('isActive', 1)->select('class')->get();
        //print_r($data);
        //exit();
        return view('front.student')->with('class',$data);
         //$data =anant_school_stafflist::all();

    }
    public function eventname($id)
    {
       $data =anant_school_event::where('class', $id)->select('Event_Name')->get()->toArray();
                     
       foreach ($data as $key => $value) {
         $Event_Name[]=$value['Event_Name'];
       }
      
        if(!empty($data)){
            return $Event_Name;    
        }else{
            return '';
        }
    }

    public function studentsubmit($batch)
    {
        $studentslist =anant_school_studentlist::where('class',$batch)->select('name')->get()->toArray();
        foreach ($studentslist as $key => $value) {
         $studentlist[]=$value['name'];
       }
        //print_r($studentlist);
        if(!empty($studentslist)){
            return $studentlist;    
        }else{
            return '';
        }
    }
     public function finalsubmit(Request $request)
    {
        $this->validate($request, [
        'class'   => 'required',
        'event' => 'required',
        'name'=>'required',
        'mobile'=>'required'
      ]);

        $grno =anant_school_studentlist::where('name',  $request->name)->select('Gr_No')->get()->toArray();
        //print_r($grno[0]['Gr_No']);
        $eventrecord = new anant_school_student_event;
        $eventrecord->eventname = $request->event;
        $eventrecord->GRNumber = $grno[0]['Gr_No'];
        $eventrecord->MobileNo = $request->mobile;
        if($eventrecord->save())
        {   
            $eventrec = anant_school_student_event::latest()->first()->toArray();
            $successmessage =' Thanks for Registration Your Participate No is '.$eventrec['participet_no'];
            return Redirect::to("/")->with('success',$successmessage );
        }
       
    }
}
