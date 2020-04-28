@extends('front.frontmaster')
@section('content')
<?php //print_r($stafflist); ?>
<div class="inner-bg">
       <div class="container" style="background-color: lightblue; text-align: center; color: white;">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 ">
               <b class="logo">REGISTRATION FORM CLASS XI</b>
               
            </div>
              <div >
                  <form action="{{asset('/student/class11/submit')}}" method="post" name="class11" style="font-size: 20px; text-align: left;" onsubmit="return validateForm()">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-lg-12 col-sm-12" style="padding-top: 20px;">
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="schoolch">Are you a student of ASE</label>
                      </div>
                      <div class="col-md-9 col-lg-9 col-sm-6" >                
                          <div class="form-group">                          
                            <label class="radio-inline "><input type="radio" value="Yes" id="schoolchyes" name="schoolch" onclick="myFunctionyes()" required>Yes</label>
                            <label class="radio-inline"><input type="radio" value="No" id="schoolchno" name="schoolch" onclick="myFunctionno()">No</label>  
                        </div> 
                      </div>                
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" id="myDIV" style="display: none;" >
                    <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="schoolname">Your Current School Name</label>
                      </div>
                      <div class="col-md-9 col-lg-9 col-sm-6" > 
                        <div class="form-group">                        
                        <input type="text" class="form-control" id="schoolname" name="schoolname" placeholder="Your Current School Name" value=''>
                      </div>    
                      </div>              
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" id="myDIV">
                    <div class="col-md-3 col-lg-3 col-sm-12">                
                        <label for="fname">Your Name</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-12" > 
                        <div class="form-group">                        
                          <input type="text" class="form-control" id="fname" placeholder="FIRST NAME" required>
                        </div>    
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-12" > 
                        <div class="form-group">                        
                          <input type="text" class="form-control" id="mname" placeholder="MIDDLE NAME">
                        </div>    
                      </div> 
                      <div class="col-md-3 col-lg-3 col-sm-12" > 
                        <div class="form-group">                        
                          <input type="text" class="form-control" id="lname" placeholder="LAST NAME " required>
                        </div>    
                      </div>               
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="email"> Email Address</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email" name="email">                       
                        </div> 
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="studentmobile">Mobile No</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                            <input type="number" class="form-control" id="studentmobile" name="studentmobile" placeholder="Student's Mobile No">                       
                        </div> 
                      </div>                
                    </div>
                    <div id="address" style="display: none;" >
                      <div class="col-md-12 col-lg-12 col-sm-12" >
                        <div class="col-md-3 col-lg-3 col-sm-6">                
                          <label for="City">Your Current City</label>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6" > 
                          <div class="form-group">                        
                          <input type="text" class="form-control" id="city" placeholder="Your Current City Name" name="city">
                        </div>    
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6">                
                          <label for="district">District</label>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6" > 
                          <div class="form-group">                        
                          <input type="text" class="form-control" id="District" placeholder="District" name="district">
                        </div>    
                        </div>              
                      </div>
                      <div class="col-md-12 col-lg-12 col-sm-12" >
                        <div class="col-md-3 col-lg-3 col-sm-6">                
                          <label for="City">State</label>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6" > 
                          <div class="form-group">                        
                          <select class="form-control" name="state" id="state" required>
                            <option value="">Select</option>
                            <option value="Gujarat">Gujarat</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="West Bengal">West Bengal</option>
                          </select>
                        </div>    
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6">                
                          <label for="pincode">pincode</label>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6" > 
                          <div class="form-group">                        
                          <input type="number" class="form-control" id="pincode" placeholder="Pincode"min="99999" max="999999" name="pincode">
                        </div>    
                        </div>              
                      </div>
                       
                    </div>


                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="dob">Date of Birth</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                           <input type="date" class="form-control" id="dob" name="dob" required min="2003-01-01" max="2010-01-01">                            
                        </div> 
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="gender">Gender</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                        <div class="form-group">  
                           <select class="form-control" name="gender" required>
                                <option value="">Select</option>
                                <option value="m">MALE</option>
                                <option value="f">FEMALE</option>
                            </select>                           
                        </div> 
                      </div>                 
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="fathname">Father's Name</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                           <input type="text" class="form-control" id="fathname" name="fathname" value=''>
                        </div> 
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="fnumber">Father's Mobile No</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                             <input type="number" class="form-control" id="fnumber" placeholder="Father's Mobile No" min="999999999" name="fnumber">                     
                        </div> 
                      </div>                 
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="mothname">Mother's Name</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                           <input type="text" class="form-control" id="mothname" name="mothname" value=''>
                        </div> 
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="mmobnumber">Mother's Mobile No</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                             <input type="number" class="form-control" id="inputPassword" placeholder="Mother's Mobile No" name="mmobnumber">                     
                        </div> 
                      </div>                 
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="stream">Stream</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                           <select class="form-control" required id="stream" onChange="getclass();" name="stream">
                                <option value="">Select</option>
                                <option value="1">SCIENCE</option>
                                <option value="2">COMMERCE</option>
                                <option value="3">ARTS/ HUMANITIES</option>
                            </select> 
                        </div> 
                      </div>
                      <div class="col-md-6 col-lg-6 col-sm-6">                
                      </div>                
                    </div> 

                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-6" style="display: none;">                
                        <label for="subjectchoice">Subject Choice</label>
                      </div>
                      <div class="col-md-9 col-lg-9 col-sm-6 form-group" id="subjectchoicediv">

                           
                      </div>                 
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" style="padding-top: 20px;">
                      <div class="form-group">
                        <input type='checkbox' id='DISCLAIMER' name='DISCLAIMER' value='1' required> DISCLAIMER-The information submitted in above form is true & correct. I understand in case of any discrepancy the form is liable to get cancelled, and we, parent of , will have no claim against this School/School Authorities.               
                      </div> 
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="form-group">
                        <button type='submit' class='btn btn-success btn-block'>Submit</button>
                      </div>
                    </div>
                  </form>
                  
              </div>
          </div>
      </div>
  </div>
  <script>
    function validateForm() {
  var x = document.forms["class11"]["schoolch"].value;
  var y = document.forms["class11"]["schoolname"].value;
  var f = document.forms["class11"]["fathname"].value;
  var m = document.forms["class11"]["mothname"].value;
  var st = document.forms["class11"]["stream"].value;
  if (x == "No" && y == "") {
    alert("Please fill Your Current School Name");
    return false;
  }
  if (f == "" && m == "") {
    alert("Please Provide any of the Parents details");
    return false;
  }
  if(st=='1'){
    var op1 = document.forms["class11"]["opp1"].value;
    if(op1==''){
      alert("Please Select Your Optional Subjects");
    return false;
    }
  }
  if(st=='2'){
    var op1 = document.forms["class11"]["opp1"].value;
    var op2 = document.forms["class11"]["opp2"].value;
    if(op1==''){
      alert("Please Select Your Optional Subjects 1");
    return false;
    }
    if(op2==''){
      alert("Please Select Your Optional Subjects 2");
    return false;
    }
  }
  if(st=='3'){
    var op1 = document.forms["class11"]["opp1"].value;
    var op2 = document.forms["class11"]["opp2"].value;
    var op3 = document.forms["class11"]["opp3"].value;
    if(op1==''){
      alert("Please Select Your Optional Subjects 1");
    return false;
    }
    if(op2==''){
      alert("Please Select Your Optional Subjects 2");
    return false;
    }
    if(op3==''){
      alert("Please Select Your Optional Subjects 3");
    return false;
    }
  }

}
function myFunctionno() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("address");

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "block";
  } 
}
function myFunctionyes() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("address");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.display = "none";
  } 
}
function myFunctionyes() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("address");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.display = "none";
  } 
}
function getclass()
    {      
      var sel = document.getElementById('stream').value;
      if(sel=='1')
      { 
       document.getElementById("subjectchoicediv").insertAdjacentHTML("afterend","<div class='col-md-12 col-lg-12 col-sm-12'><label>Compulsory Subject</label></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'>ENGLISH</div><div class='col-md-4 col-lg-4 col-sm-12'>PHYSICS</div><div class='col-md-4 col-lg-4 col-sm-12'>CHEMISTRY</div><div class='col-md-4 col-lg-4 col-sm-12'>COMPUTER</div></div><div class='col-md-12 col-lg-12 col-sm-12'><label>Optional Subjects (please choose your desired subject)</label></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='MATHEMATICS' name='opp1' value='MATHEMATICS'><label for='MATHEMATICS'> MATHEMATICS</label></div><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='BIOLOGY' name='opp1' value='BIOLOGY'><label for='BIOLOGY'> BIOLOGY</label></div></div>"); 
      }
      else if(sel=='2'){
        
        document.getElementById("subjectchoicediv").insertAdjacentHTML("afterend","<div class='col-md-12 col-lg-12 col-sm-12'><label>Compulsory Subject</label></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'>ENGLISH</div><div class='col-md-4 col-lg-4 col-sm-12'>ACCOUNTANCY</div><div class='col-md-4 col-lg-4 col-sm-12'>BUSINESS STUDIES</div><div class='col-md-4 col-lg-4 col-sm-12'>STATASTICS</div><div class='col-md-4 col-lg-4 col-sm-12'>ECONOMICS</div></div><div class='col-md-12 col-lg-12 col-sm-12'><label>Optional Subjects (please choose your desired subject)</label></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='MATHEMATICS' name='opp1' value='MATHEMATICS' required><label for='MATHEMATICS'> HINDI</label></div><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='BIOLOGY' name='opp1' value='GUJARATI'><label for='GUJARATI'> GUJARATI</label></div></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='COMPUTER' name='opp2' value='COMPUTER' required><label for='COMPUTER'> COMPUTER</label></div><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='SPCC' name='opp2' value='SPCC'><label for='SPCC'> S.P.C.C</label></div></div>");
      }
      else if(sel=='3'){
       
        document.getElementById("subjectchoicediv").insertAdjacentHTML("afterend","<div class='col-md-12 col-lg-12 col-sm-12'><label>Compulsory Subject</label></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'>ENGLISH</div><div class='col-md-4 col-lg-4 col-sm-12'>GUJARATI</div><div class='col-md-4 col-lg-4 col-sm-12'>PSYCHOLOGY</div></div><div class='col-md-12 col-lg-12 col-sm-12'><label>Optional Subjects (please choose your desired subject)</label></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='HINDI' name='opp1' value='HINDI' required><label for='HINDI'> HINDI</label></div><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='BIOLOGY' name='opp1' value='SANSKRIT'><label for='SANSKRIT'> SANSKRIT</label></div></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='History' name='opp2' value='History' required><label for='History'> History</label></div><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='Geography' name='opp2' value='Geography'><label for='Geography'> GEOGRAPHY</label></div></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='ECONOMICS' name='opp3' value='ECONOMICS' required><label for='ECONOMICS'> ECONOMICS</label></div><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='POLITICALSCIENCE' name='opp3' value='POLITICALSCIENCE'><label for='POLITICALSCIENCE'> POLITICAL SCIENCE</label></div></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='COMPUTER' name='opp4' value='COMPUTER' required><label for='COMPUTER'> COMPUTER</label></div><div class='col-md-4 col-lg-4 col-sm-12'><input type='radio' id='Drawing' name='opp4' value='Drawing'><label for='Drawing'> DRAWING</label></div></div>");
      }
      
    }
    
</script>
@stop



