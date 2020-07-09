@extends('front.frontmaster')
@section('content')
<div class="inner-bg">
       <div class="container" style="background-color: lightblue; text-align: center; color: white;">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 ">
               <b class="logo">REGISTRATION FORM CLASS XI ( Arts )</b>
            </div>
              <div >
                  <form action="{{asset('/student/class11/submit')}}" method="post" name="class11" style="font-size: 20px; text-align: left;" onsubmit="return validateForm()">
                    {{ csrf_field() }}
                    <input type="hidden" id="stream" name="stream" value="3">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-12">                
                        <label for="name">Name</label>
                      </div>
                      <div class="col-md-9 col-lg-9 col-sm-12" > 
                        <div class="form-group">                        
                          <input type="text" class="form-control" id="name" placeholder="Student's Full Name (As Per GR.)" required name="name">
                        </div>    
                      </div>             
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="email"> Email Address</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>                       
                        </div> 
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                        <label for="studentmobile">Mobile No</label>
                      </div>
                      <div class="col-md-3 col-lg-3 col-sm-6" >                
                          <div class="form-group">  
                            <input type="number" class="form-control" id="studentmobile" name="studentmobile" placeholder="Student's Mobile No" required min=1000000000;max=999999999999>
                        </div> 
                      </div>                
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" >
                      <div class="col-md-3 col-lg-3 col-sm-6">                
                          <label for="schoolname">Current School Name</label>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6" > 
                          <div class="form-group">                        
                          <input type="text" class="form-control" id="schoolname" name="schoolname" placeholder="Currently studing in School" value='' required="">
                        </div>    
                        </div> 
                        <div class="col-md-3 col-lg-3 col-sm-6">                
                          <label for="board">Board</label>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6" >                
                        <div class="form-group">  
                           <select class="form-control" name="schoolch" required>
                                <option value="">Select</option>
                                <option value="guj">GSEB</option>
                                <option value="cbse">CBSE</option>
                                <option value="other">Other</option>
                            </select>                           
                        </div> 
                      </div>              
                    </div>

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
                          <input type="text" class="form-control" id="District" placeholder="District" name="district" required>
                        </div>    
                        </div>              
                      </div>
                      <div class="col-md-12 col-lg-12 col-sm-12" >
                        <div class="col-md-3 col-lg-3 col-sm-6">                
                          <label for="City">State</label>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6" > 
                          <div class="form-group">                        
                          <select class="form-control" name="state" id="state" >
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
                      <hr style="border: 1px solid black;">                
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                      
                  
                        <div class='col-md-12 col-lg-12 col-sm-12' style='padding: 10px;'><label>Compulsory Subject</label></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='col-md-4 col-lg-4 col-sm-12'>ENGLISH</div><div class='col-md-4 col-lg-4 col-sm-12'>GUJARATI</div><div class='col-md-4 col-lg-4 col-sm-12'>PSYCHOLOGY</div></div><div class='col-md-12 col-lg-12 col-sm-12' style='padding-bottom: 10px;'><strong>Optional Subjects ( Please Choose Any One Subject From Each Row )</strong></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='form-group'><label class='radio-inline'><input type='radio' id='HINDI' name='opp1' value='HINDI' required> HINDI</label><label class='radio-inline'><input type='radio' id='BIOLOGY' name='opp1' value='SANSKRIT'> SANSKRIT</label></div></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='form-group'><label class='radio-inline'><input type='radio' id='History' name='opp2' value='History' required> History</label><label class='radio-inline'><input type='radio' id='Geography' name='opp2' value='Geography'> GEOGRAPHY</label></div></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='form-group'><label class='radio-inline'><input type='radio' id='ECONOMICS' name='opp3' value='ECONOMICS' required>ECONOMICS</label><label class='radio-inline'><input type='radio' id='POLITICALSCIENCE' name='opp3' value='POLITICALSCIENCE'>POLI SCI.</label></div></div><div class='col-md-12 col-lg-12 col-sm-12'><div class='form-group'><label class='radio-inline'><input type='radio' id='COMPUTER' name='opp4' value='COMPUTER' required> COMPUTER</label><label class='radio-inline'><input type='radio' id='Drawing' name='opp4' value='Drawing'> DRAWING</label></div></div>
                      </div>                 
                    
                    <div class="col-md-12 col-lg-12 col-sm-12" style="padding-top: 20px;">
                      <div class="form-group"><label>
                        <input type='checkbox' id='DISCLAIMER' name='DISCLAIMER' value='1' required> DISCLAIMER-The information submitted in above form is true & correct. I understand in case of any discrepancy the form is liable to get cancelled, and we, parent of , will have no claim against this School/School Authorities.</label>               
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
  var f = document.forms["class11"]["fathname"].value;
  var m = document.forms["class11"]["mothname"].value;
    if (f == "" && m == "") {
    alert("Please Provide any of the Parents details");
    return false;
  }
}
</script>
@stop