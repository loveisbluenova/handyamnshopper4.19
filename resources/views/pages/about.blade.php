@extends('layouts.app')

@section('template_title')
    About
@endsection

@section('template_fastload_css')
@endsection
@section('content')

	 
     <!-- ==============================================
	 Header
	 =============================================== -->	 
	 <header class="header-about">
      <div class="container">
	   <div class="content">
        <div class="row">
	     <h1 class="revealOnScroll" data-animation="fadeInDown"><i class="fa fa-coffee"></i> About Us</h1>
		 <p>How we grew into what we are today.</p>
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
     <!-- ==============================================
	 Hello Section
	 =============================================== -->
     
	 <section class="hello" id="hello">
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-12">
		 <h3>Sasa. (Hello There.)</h3>
		 <p>The Kafe. Template is the Ultimate Freelance Marketplace Template for employers and freelancers to connect, collaborate, and get work done.</p>
		
		 <h3>Our Why?</h3>
		 <p>The core of this template is to build a great product that is beautifully designed, simple to use, user friendly with great focus on user experience and customer service.</p>
		
		 <h3>Our How?</h3>
		 <p>We have built The Kafe. Template to be a great product & service that is beautifully designed, simple to use, user friendly with great focus on user experience and customer service and included code snippets for developers and designers to jump start their development process.</p>
		
		 <h3>Our What?</h3>
		 <p>This Template should inspire clients to build their own Freelance Marketplaces and help developers plus designers to jump start their development process. Simple as that.</p>
		
        </div><!-- /.col-lg-12 -->
	   </div><!-- /.row -->
	  </div> <!-- /.container -->
     </section><!-- End section-->

	 <!-- ==============================================
	 Timeline Section
	 =============================================== -->	  
     <section class="time">
	  <div class="container">
	  
	   <h3>Our Timeline</h3>
	   <hr class="mint">
	   <p class="top-p">Our Story told in a few lines.</p>
	   
       <ul class="timeline">
	   
        <li>
         <div class="timeline-badge mint"><i class="fa fa-lightbulb-o"></i></div>
         <div class="timeline-panel revealOnScroll" data-animation="slideInLeft" data-timeout="200">
          <div class="timeline-heading">
           <h4 class="timeline-title">12th, January 2014</h4>
          </div><!-- /.timeline-heading -->
          <div class="timeline-body">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id erat nisi. Donec condimentum mi eget est auctor pellentesque. Donec ultrices consequat neque at consectetur. Nunc venenatis lorem quis auctor vulputate. Donec et sagittis nulla, mollis cursus leo.</p>
          </div><!-- /.timeline-body -->
         </div><!-- /.timeline-panel -->
        </li><!-- /li -->
		
        <li class="timeline-inverted">
         <div class="timeline-badge mint"><i class="fa fa-code"></i></div>
          <div class="timeline-panel revealOnScroll" data-animation="slideInRight" data-timeout="200">
           <div class="timeline-heading">
            <h4 class="timeline-title">31st, January 2014</h4>
           </div><!-- /.timeline-heading -->
           <div class="timeline-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id erat nisi. Donec condimentum mi eget est auctor pellentesque. Donec ultrices consequat neque at consectetur. Nunc venenatis lorem quis auctor vulputate. Donec et sagittis nulla, mollis cursus leo. Phasellus a ante ut neque consequat interdum. Aenean eget tortor elit. Morbi a magna vitae justo aliquet porta eu ut quam.</p>
           </div><!-- /.timeline-body -->
         </div><!-- /.timeline-panel -->
        </li><!-- /li.timeline-inverted -->
		
        <li>
         <div class="timeline-badge mint"><i class="fa fa-coffee"></i></div>
          <div class="timeline-panel revealOnScroll" data-animation="slideInLeft" data-timeout="200">
           <div class="timeline-heading">
            <h4 class="timeline-title">2nd, February 2014</h4>
           </div><!-- /.timeline-heading -->
           <div class="timeline-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id erat nisi. Donec condimentum mi eget est auctor pellentesque. Donec ultrices consequat neque at consectetur. Nunc venenatis lorem quis auctor vulputate. Donec et sagittis nulla, mollis cursus leo. Phasellus a ante ut neque consequat interdum. Aenean eget tortor elit. Morbi a magna vitae justo aliquet porta eu ut quam.</p>
           </div><!-- /.timeline-body -->
         </div><!-- /.timeline-panel -->
        </li><!-- /li -->
		
        <li class="timeline-inverted">
         <div class="timeline-panel revealOnScroll" data-animation="slideInRight" data-timeout="200">
          <div class="timeline-heading">
           <h4 class="timeline-title">1st, March 2014</h4>
          </div><!-- /.timeline-heading -->
          <div class="timeline-body">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id erat nisi. Donec condimentum mi eget est auctor pellentesque. Donec ultrices consequat neque at consectetur. Nunc venenatis lorem quis auctor vulputate. Donec et sagittis nulla, mollis cursus leo. Phasellus a ante ut neque consequat interdum. Aenean eget tortor elit. Morbi a magna vitae justo aliquet porta eu ut quam.</p>
          </div><!-- /.timeline-body -->
         </div><!-- /.timeline-panel -->
        </li><!-- /li.timeline-inverted -->
		
        <li>
         <div class="timeline-badge mint"><i class="fa fa-line-chart"></i></div>
         <div class="timeline-panel revealOnScroll" data-animation="slideInLeft" data-timeout="200">
          <div class="timeline-heading">
           <h4 class="timeline-title">14th, March 2014</h4>
          </div><!-- /.timeline-heading -->
          <div class="timeline-body">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id erat nisi. Donec condimentum mi eget est auctor pellentesque. Donec ultrices consequat neque at consectetur. Nunc venenatis lorem quis auctor vulputate. Donec et sagittis nulla, mollis cursus leo. Phasellus a ante ut neque consequat interdum. Aenean eget tortor elit. Morbi a magna vitae justo aliquet porta eu ut quam.</p>
          </div><!-- /.timeline-body -->
         </div><!-- /.timeline-panel -->
        </li><!-- /li -->
		
        <li class="timeline-inverted">
         <div class="timeline-badge mint"><i class="fa fa-usd"></i></div>
          <div class="timeline-panel revealOnScroll" data-animation="slideInRight" data-timeout="200">
           <div class="timeline-heading">
            <h4 class="timeline-title">2nd, April 2014</h4>
           </div><!-- /.timeline-title -->
           <div class="timeline-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id erat nisi. Donec condimentum mi eget est auctor pellentesque. Donec ultrices consequat neque at consectetur. Nunc venenatis lorem quis auctor vulputate. Donec et sagittis nulla, mollis cursus leo. Phasellus a ante ut neque consequat interdum. Aenean eget tortor elit. Morbi a magna vitae justo aliquet porta eu ut quam.</p>
           </div><!-- /.timeline-body -->
          </div><!-- /.timeline-panel -->
        </li><!-- /li.timeline-inverted -->
       </ul>
       <!-- /ul.timeline -->
      </div><!-- /.container -->
     </section><!-- /section -->

     <!-- ==============================================
	 White Section
	 =============================================== -->		  
	 <section class="whitebg">
	  <div class="container">
	   <div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		 <h3>We work hard to build a great product that is beautifully designed, simple to use, user friendly with great focus on user experience and customer service.</h3>
		</div><!-- /.col-lg-8 -->
	   </div><!-- /.row -->
	  </div><!-- /.container -->
	 </section><!-- /w -->
	
	 <!-- ==============================================
	 Team Section
	 =============================================== -->	
     <section id="team" class="team">
      <div class="container">
       <!-- Title Page -->
       <div class="row text-center">
        <div class="col-lg-12">	   
	     <h3>Our Team</h3>
	     <hr class="mint">
	     <p class="top-p">Our Brilliant and Harworking Team.</p>
        </div><!-- /.col-lg-12 -->
       </div><!-- /.row -->
       <!-- End Title Page -->
       
	   <!-- People -->
       <div class="row">
    	
       <!-- Start Profile -->
        <div class="col-lg-4 profile">
         <div class="image-wrap">
          <div class="hover-wrap">
           <span class="overlay-img"></span>
           <span class="overlay-text-thumb">Founder/C.E.O</span>          </div><!-- /.hover-wrap -->
          <img src="img/team/1.jpg" alt="John Doe">         </div>
         <!-- /.image-wrap -->
         <h5 class="profile-name">John Doe</h5>
         <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. 
            Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            	
		 <div class="social">
		  <ul class="social-icons">
		   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	      </ul>
		 </div><!-- /.social -->
        </div><!-- /.col-lg-4 -->
	   <!-- End Profile -->
        
       <!-- Start Profile -->
        <div class="col-lg-4 profile">
	     <div class="image-wrap">
	      <div class="hover-wrap">
	       <span class="overlay-img"></span>
		   <span class="overlay-text-thumb">Accountant</span>	      </div><!-- /.hover-wrap -->
	      <img src="img/team/2.jpg" alt="Mary Doe">	     </div>
	     <!-- /.image-wrap -->
         <h5 class="profile-name">Mary Doe</h5>
         <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at era hendrerit dictum. 
            Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            	
	     <div class="social">
	      <ul class="social-icons">
		   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	      </ul>
	     </div><!-- /.social -->
        </div><!-- /.col-lg-4 -->
       <!-- End Profile -->
        
       <!-- Start Profile -->
        <div class="col-lg-4 profile">
	     <div class="image-wrap">
		  <div class="hover-wrap">
		   <span class="overlay-img"></span>
		   <span class="overlay-text-thumb">Lead Developer</span>		  </div><!-- /.hover-wrap -->
		  <img src="img/team/3.jpg" alt="Richard Donga">	     </div>
	     <!-- /.image-wrap -->
         <h5 class="profile-name">Richard Donga</h5>
         <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. 
            Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            	
	     <div class="social">
	      <ul class="social-icons">
		   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		  </ul>
	     </div><!-- /.social -->
        </div><!-- /.col-lg-4 -->
       <!-- End Profile -->
        
       </div><!-- End People -->
      </div><!-- /.container -->
     </section>
     <!-- End About Section -->
	
	 <!-- ==============================================
	 Join Section
	 =============================================== -->		  
	 <section class="join">
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-8 col-lg-offset-2">
		 <h3>Wait what, you want to be a part of the family?</h3>
		 <a href="contact.html" class="kafe-btn kafe-btn-default revealOnScroll" data-animation="bounceIn" data-timeout="400">Yes Let Me In!</a>
		</div><!-- /.col-lg-8 -->
	   </div><!-- /.row -->
	  </div><!-- /container -->
	 </section><!-- /w -->	
	 

@endsection