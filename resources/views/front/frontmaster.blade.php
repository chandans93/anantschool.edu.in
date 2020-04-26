<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="author" content="chandan">
<meta name="description" content="Anant School">
<meta name="key" content="Anant School">
<meta name="key" content="Sanskardham">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Anant School of Excellence</title>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('/css/responsive.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style type="text/css">
img {
  max-width: 100%;
  height: auto;
}
table, th, td, tr {
  border: 2px solid white;
}
th, td, tr {
  padding: 15px;
}

</style>

</head>

<body class="banner-area"> 
<!--header section -->
<section class="banner" role="banner"> 
    <!-- overlay -->
    <div class="banner-area-gradient"></div>
    <!-- overlay -->
</section>

       @yield('content')
 
 <footer id="footer"  >
    
      <div class="container">

        <div class="row" style='background: grey;'>
            
          <div class="col-lg-2 col-md-2">
            <a class="logo" href="{{ asset('/')}}"><img src="{{ asset('images/logo.png')}}" class="logo" alt="logo" style="width:100%;height: auto;"/></a>

          </div>
          <div class="col-lg-3 col-md-3">
            <h4 style="color:#ffc107;">Contact Us</h4>
                  <p>
                    Anant School of Excellence<br>
                    SANSKARDHAM Campus, Ahmedabad<br>
                    Gujarat | INDIA | 382115<br>
                    <strong>Phone:</strong> <a href="tel:+912717710810">+912717-710810</a><br>
                    <strong>Email:</strong> <a href="mailto:info@anantschool.edu.in">info@anantschool.edu.in</a><br>
                  </p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h4 style="color:#ffc107;">Useful Links</h4>
                  <ul>
                    <li><a target="_blank" href="http://www.sanskardham.org/txt.php?pgid=1698">Sanskardham</a></li>
                    <li><a target="_blank" href="https://www.gmisschool.org">Global Mission International School</a></li>
                    <li><a target="_blank" href="https://www.lgs.edu.in">Laxman Gyanpith  School </a></li>
                    <li><a target="_blank" href="https://www.facebook.com/ASESchool.Ahmedabad" class="facebook"><i class="fa fa-facebook"></i> Anant School of Excellence facebook link</a></li>
                  </ul>

          </div>
          <div class="col-lg-3 col-md-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d917.9659924025461!2d72.42651842916338!3d23.02876633328979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b137b36a1a5%3A0x47d3bca1e6c69a8a!2sAnant%20School%20of%20Excellence%20(GSEB%20-%20English%20Medium%20School)!5e0!3m2!1sen!2sin!4v1584563296490!5m2!1sen!2sin" width="100%" height="250px" frameborder="2px" style="border:2px bold; border-style: solid; color:black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

          </div>
        </div>
  </div>
</footer>

            <!-- End  Footer -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="{{ asset('/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('/js/jquery.backstretch.min.js')}}"></script> 
<script src="{{ asset('/js/jquery.countdown.js')}}"></script> 
<script type="text/javascript" src="{{ asset('/js/jquery.subscribe.js')}}"></script> 
<script src="{{ asset('/js/typed.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/main.js')}}"></script> 
</html>