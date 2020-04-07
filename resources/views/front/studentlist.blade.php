@extends('front.frontmaster')
@section('content')
<?php 

 ?>
    <div class="inner-bg">
       <div class="container" style="background-color: lightblue; text-align: center; color: white;">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 ">
               <b class="logo">Registration for Students from class 3<sup>rd</sup> to 10<sup>th</sup></b>
               
            </div>
              <div >
                  <form action="{{asset('/finalsubmit')}}" method="post">
                      {{ csrf_field() }}
                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding: 20px;">                
                      <div class="form-group">
                        <b>Batch / Std / Class</b> 
                      </div> 
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding: 20px;">                
                      <div class="form-group">
                          <b>Event</b>
                      </div> 
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding: 20px;">                
                      <div class="form-group">
                         <b> {{$eventname[0]['class']}}</b>
                         <input type="hidden" name="class" value={{$eventname[0]['class']}}>
                      </div> 
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12" style="padding: 20px;">                
                      <div class="form-group">
                          <b>{{$eventname[0]['Event_Name']}}</b>
                          <input type="hidden" name="class" value={{$eventname[0]['Event_Name']}}>
                      </div> 
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-12" style="padding: 20px;">      
                      <div class="form-group">
                          <select class="form-control form-control-lg" name='class' id="batch" required>
                            <option value=" ">Student Name</option>
                            <?php foreach ($studentlist as $key => $value) { ?>
                              <option value={{$value['Gr_No']}}>{{$value['name']}}</option>
                            <?php } ?>                           
                          </select>
                      </div> 
                    </div>
                    
                    <div class="col-md-5 col-lg-5 col-sm-12" style="padding: 20px;">      
                      <div class="form-group">
                          <input type="number" class="form-control" id ='mobile' name="mobile" min="10" required >
                      </div> 
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-12" style="padding: 20px;">
                       <button type="submit" class="btn btn-primary mb-2">submit</button>
              
                     
                    </div>
                    
                  </form>
              </div>
          </div>
      </div>
  </div>


@stop
