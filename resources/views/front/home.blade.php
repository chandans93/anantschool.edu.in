@extends('front.frontmaster')
@section('content')
<div class="inner-bg">
       <div class="container">
         @if ($message = Session::get('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="box-body">
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
                        <h4><i class="icon fa fa-check"></i>{{ $message }}</h4>
                    </div>
                </div>
            </div>
        </div>
        @endif
          <div class="row">
              <div class="col-md-3 col-lg-3 ">
                
              </div>
               <div class="col-md-3 col-lg-3">
                
              </div>
               <div class="col-md-6 col-lg-6">
                <a  href="/cronaevent"><img src="{{ asset('/images/crona.png')}}" /></a>
              </div>
               <!--<div class="col-md-3 col-lg-3">
                <a  target="_blank" href="https://g21.digialm.com//EForms/configuredHtml/1723/59041/Registration.html"><img src="{{ asset('/images/foa2021.gif')}}" /></a> 
              </div>-->
          </div>
      </div>
  </div>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
     <div class="banner-text text-center">
        
        <b class="logo">Anant School of Excellence</b>
          <div class="type-wrap">
               <div id="typed-strings">
                  <p>Our Website is <em>under</em>  <strong>construction</strong></p>
                  <span>Stay Tuned For Something <strong>Amazing</strong></span>
               </div>
             <span id="typed" style="white-space:pre;"></span>
          </div>
        </p>
     </div>
</div>
</div>
</div>
@stop

