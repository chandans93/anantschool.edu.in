@extends('front.frontmaster')
@section('content')
<?php //print_r($stafflist); ?>
<div class="inner-bg">
       <div class="container" style="background-color: lightblue; text-align: center; color: white;">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 ">
               <b class="logo">Registration Form for Staff</b>
               
            </div>
              <div >
                  <form action="{{asset('/otp/verify')}}" method="post" >
                    {{ csrf_field() }}
                    <div class="col-md-5 col-lg-5 col-sm-12" style="padding: 20px;">                
                      <div class="form-group">
                          <select class="form-control form-control-lg" id="employeenumber" onChange="getName();" name="id">
                            <option value=" ">Employee Number</option>
                            <?php foreach ($stafflist as $key => $value) { ?>
                              <option value="{{$value->id}}">{{$value->EmployeeNumber}}</option>
                            <?php } ?>                           
                          </select>
                      </div> 
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-12" style="padding: 20px;">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" aria-describedby="" placeholder="Name" name="name">
                      </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-12" style="padding: 20px;">
                      <button type="button" onclick="getotp()" class="btn btn-warning mb-2">Get Otp</button>
                    </div>
                    @if ($message = Session::get('error'))
            <div class="col-md-12" >
                <div class="box-body">
                    <div class="alert alert-error alert-danger">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
                        <h4><i class="icon fa fa-check"></i> {{ $message }}</h4>
                        
                    </div>
                </div>
            </div>
        @endif
                    <div class="col-md-5 col-lg-5 col-sm-12" style="padding: 20px;">
                      <div class="form-group">
                        <input type="number" class="form-control" id="otp" aria-describedby="" placeholder="OTP" name="otp" min="99999" max="1000000" required >
                      </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-12" style="padding: 20px;">
                      <div class="form-group">
                        <button type='submit' class='btn btn-success btn-block'>Submit</button>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript">
    function getName()
    {      
      var sel = document.getElementById('employeenumber').value;
      var se='/staffname/';
      var url1=se+sel;
           $.ajax({
               type:'POST',
               url:url1,
               data: { "_token": "{{ csrf_token() }}",
                        "id": sel
                      },
               success:function(data) {
                if(data){
                  document.getElementById('name').value = data;  
                }else{
                  alert('Data missing');
                }
               }
            });
    }
    function getotp()
    { 
      var sel = document.getElementById('employeenumber').value;
      //alert(sel);
      if(sel==''){
        alert("please select your Employee Number");
      }
      else{
        var se='/staffotp/';
        var url1=se+sel;
        //alert(url1);
        $.ajax({
               type:'POST',
               url:url1,
               data: { "_token": "{{ csrf_token() }}",
                        "id": sel
                      },
               success:function(data) {
                if(data){
                  alert(data); 
                }else{
                  alert('Data missing');
                }
               }
            });
      }
    }
</script>
@stop
