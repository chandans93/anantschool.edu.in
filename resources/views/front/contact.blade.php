@extends('front.frontmaster')
@section('content')


 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <h1 style="text-align: center; padding-top:0px; margin-top: 0px;">Get in Touch</h1>
          <div class="mu-contact-content" style="padding-top: 45px">           
            <div class="row">
              <div class="col-md-6">
                  <form action="{{asset('/content/submit')}}" method="post" name="class11" >
                    {{ csrf_field() }}
                        <div class="form-group" >                        
                          <input type="text" class="form-control" id="name" placeholder="Name" required name="name" style="font-size: 20px;">
                        </div>    
                          <div class="form-group">  
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" required style="font-size: 20px;">                       
                        </div>    
                          <div class="form-group">  
                           <input type="text" class="form-control" id="name" placeholder="Subject" required name="Subject" style="font-size: 20px;">
                        </div> 
                        <div class="form-group">
                          <textarea class="form-control" id="message" rows="5" placeholder="Your Message here..." name="message" required style="font-size: 20px; text-align: left;"></textarea>
                        </div>
                        <div class="form-group">
                          <button type='submit' class='btn btn-success btn-block' style="font-size: 20px;">Submit</button>
                        </div>
                  </form>
                </div>
              <div class="col-md-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d917.9659924025461!2d72.42651842916338!3d23.02876633328979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b137b36a1a5%3A0x47d3bca1e6c69a8a!2sAnant%20School%20of%20Excellence%20(GSEB%20-%20English%20Medium%20School)!5e0!3m2!1sen!2sin!4v1584563296490!5m2!1sen!2sin" width="100%" height="375"></iframe>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
 </section>
 <!-- End contact  -->
 
@stop