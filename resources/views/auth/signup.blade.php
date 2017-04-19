@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> 
<!--<![endif]-->
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->

</head>

<body>

     <!-- ==============================================
	 Navbar
	 =============================================== -->

	 
     <!-- ==============================================
	 Header
	 =============================================== -->	 
	 <header class="header-login">
      <div class="container">
	   <div class="content">
        <div class="row">
	     <h1 class="revealOnScroll" data-animation="fadeInDown"><i class="fa fa-coffee"></i> Sign Up</h1>
		 <p>First, tell us what you're looking for.</p>
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /.header -->
	 
     <!-- ==============================================
     Signup Section
     =============================================== -->
	 <section class="signup">
	  <div class="container">
	   <div class="row">
	   
	    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
		
		 <div class="item text-center revealOnScroll" data-animation="slideInLeft" data-timeout="200">
		  <span class="fa-stack fa-4x">
		   <i class="fa fa-circle fa-stack-2x"></i>
		   <i class="fa fa fa-user fa-stack-1x text-mint"></i>
		  </span>
		  <h4>I want to hire a Freelancer</h4>
		  <p>Find, collaborate with, and pay an expert.</p>
		  
		  <a href="customer_signup" class="kafe-btn kafe-btn-mint">Hire</a>
		 </div><!-- /.item -->
		 
		</div><!-- /.col-lg-5 -->
		
		<div class="col-lg-2 col-lg-2 col-sm-6 col-xs-12 divider text-center">
		  <span class="or">OR</span>
		</div><!-- /.col-lg-2 -->
		
		<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
		
		 <div class="item text-center revealOnScroll" data-animation="slideInRight" data-timeout="200">
		  <span class="fa-stack fa-4x">
		   <i class="fa fa-circle fa-stack-2x"></i>
		   <i class="fa fa fa-user-md fa-stack-1x text-mint"></i>
		  </span>
		  <h4>I am looking for online work.</h4>
		  <p>Find freelance projects and grow your business.</p>

		  <a href="{{ route('register') }}" class="kafe-btn kafe-btn-mint">Work</a>

		 </div><!-- /.item -->		
		
		</div><!-- /.col-lg-5 -->
		
	   </div><!-- /.row -->
	  </div><!-- /.container -->
	 </section><!-- /section -->
	 
     <!-- ==============================================
	 Footer Section
	 =============================================== -->


</body>
</html>
@endsection