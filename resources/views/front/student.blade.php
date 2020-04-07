@extends('front.frontmaster')
@section('content')
<?php //print_r($stafflist); ?>
<div class="inner-bg">
       <div class="container" style="background-color: lightblue; text-align: center; color: white;">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 ">
               <b class="logo">Registration for Students from class 3<sup>rd</sup> to 10<sup>th</sup></b>
               
            </div>
              <div >
                  <form action="{{asset('/student/submit')}}" method="post">
                      {{ csrf_field() }}
                    <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">                
                      <div class="form-group" style="text-align: left;">
                        <b> Please Select Your Batch</b>
                      </div> 
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">                
                      <div class="form-group">
                          <select class="form-control form-control-lg" name='class' id="batch" onChange="getclass();">
                            <option value=" ">Class / STD</option>
                            <?php foreach ($class as $key => $value) { ?>
                              <option value="{{$value->class}}">{{$value->class}}</option>
                            <?php } ?>                           
                          </select>
                      </div> 
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">                
                      <div class="form-group" style="text-align: left;">
                         <b> Please Select Your Event</b>
                      </div> 
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">                
                      <div class="form-group">
                          <select class="form-control form-control-lg" id="event" name='event' onChange="eventreg();">
                            <option value=" ">Event</option>                             
                          </select>
                      </div> 
                    </div>
                     <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">                
                      <div class="form-group" style="text-align: left;">
                          <b>Name of Kid</b>
                      </div> 
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">                
                      <div class="form-group">
                          <select class="form-control form-control-lg" id="studentname" name='name'>
                            <option value=" ">Name</option>                             
                          </select>
                      </div> 
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">      
                      <div class="form-group" style="text-align: left;">
                          <b>Your Mobile No</b>
                      </div>
                    </div>
                     <div class="col-md-3 col-lg-3 col-sm-6" style="padding: 20px;">      
                      <div class="form-group">
                          <input type="number" class="form-control" id ='mobile' name="mobile" min="10" required >
                      </div> 
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" style="padding: 20px;">      
                      <input class="btn btn-warning btn-lg btn-block" type="submit" name="submit" value="submit">
                    </div>                    
                  </form>
              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript">
    function getclass()
    {      
      var sel = document.getElementById('batch').value;
      var se='/eventname/';
      var url1=se+sel;
           $.ajax({
               type:'POST',
               url:url1,
               data: { "_token": "{{ csrf_token() }}",
                        "id": sel
                      },
               success:function(data) {
                if(data){
                   
                  data.forEach(myFunction);
                  function myFunction(item) {
                            $("#event").append(new Option(item, item));
                    }
                 
                 // document.getElementById('name').value = data;  
                }else{
                  alert('Data missing');
                }
               }
            });
    }
    function eventreg()
    { 
      var eve = document.getElementById('event').value;
      var sel = document.getElementById('batch').value;
      //alert(sel);

      if(eve==' '){
        alert("please select Event ");
      }
      else{
        var se='/selectedevent/';
        var url1=se+sel;
        $.ajax({
               type:'POST',
               url:url1,
               data: { "_token": "{{ csrf_token() }}",
                        "id": sel
                      },
               success:function(data) {
                 if(data){
                   data.forEach(myFunction);
                  function myFunction(item) {
                            $("#studentname").append(new Option(item, item));
                    }
                 
                 // document.getElementById('name').value = data;  
                }else{
                  alert('Data missing');
                }
               }
            });
      }
    }
</script>
@stop
