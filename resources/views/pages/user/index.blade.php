@extends('layouts.app')

@section('template_title')
    {{ Auth::user()->name }}'s' Homepage
@endsection

@section('template_fastload_css')
@endsection
@section('content')

     <!-- ==============================================
	 Header
	 =============================================== -->	 
	 <header class="header-one">
      <div class="container">
	   <div class="content">
	   
        <div class="row">
		 <h1 class="name revealOnScroll" data-animation="fadeInDown"><i class="fa fa-coffee"></i> Welcome</h1>
		 <p class="temp">The Ultimate Freelance Marketplace</p>
         <h1 class="hire revealOnScroll" data-animation="fadeInUp" data-timeout="400">Hire the best freelancers for your work.</h1>
	    
        </div><!--./row -->
		
		<div class="row">
		 <div class="col-lg-10 col-lg-offset-1 hidden-xs">
		  <div class="logos">
		   <img src="img/featured-logos.png" class="img-responsive" alt=""/>		  </div>
		  <!--./logos -->
		 </div>
		 <!--./col-lg-10 -->
		</div><!--./row --> 
		
       </div><!--./content -->
	  </div><!--./container -->
     </header><!--./header -->
	 
	 
	 <!-- ==============================================
	 Freelance Services Section
	 =============================================== -->
     <section id="services" class="services">
	  <div class="container text-center">
	  
	   <div class="row">
	    <div class="col-lg-12">
		 <h3>Browse Freelance Services</h3>
		 <hr class="mint">
		 <p class="top-p">View over 30,000 available services by category.</p>
		 
		 <div class="col-lg-4 col-md-4 col-sm-6">
		  <a href="services.html" class="hover">
		   <div class="features one">
		   <img src="img/home/plumber.jpg" class="img-responsive" alt=""/>
		   		
		   </div><!-- /.features -->
		   <div class="spacer">
		   	<h4>Plumbing</h4>
			<p>Designer, Developer, Project Management, Front-End Developer.</p>
			<p><b>Over 2,000 services</b></p>
		   </div> <!-- /.spacer -->
		  </a>		 
		 </div><!-- /.col-lg-4 -->
		 
		 <div class="col-lg-4 col-md-4 col-sm-6">
		  <a href="services.html">
		   <div class="features two">
		     <img src="img/home/electrician.jpg" class="img-responsive" alt=""/>
		   </div><!-- /.features -->
		   <div class="spacer">
		   	<h4>Electrical</h4>
			<p>Design, Logo Design, Animation, Graphic Design, 3D, Adobe photoshop.</p>
			<p><b>Over 2,000 services</b></p>
		   </div> <!-- /.spacer -->
		  </a>		 
		 </div><!-- /.col-lg-4 -->
		 
		 <div class="col-lg-4 col-md-4 col-sm-6">
		  <a href="services.html">
		   <div class="features three">
		    <img src="img/home/painter.jpg" class="img-responsive" alt=""/>
		   </div><!-- /.features -->
		   <div class="spacer">
		   	<h4>Painting</h4>
			<p>Content Writing, English Translation, Articles, SEO, Translation, Research.</p>
			<p><b>Over 2,000 services</b></p>
		   </div> <!-- /.spacer -->
		  </a>		 
		 </div><!-- /.col-lg-4 -->
		  
		 </div><!-- /.col-lg-12 -->
		</div><!-- /.row -->
		
		<div class="row">
		<div class="col-lg-12">
		
		  <div class="col-lg-4 col-md-4 col-sm-6">
		  <a href="services.html">
		   <div class="features four">
		    <img src="img/home/maid.jpg" class="img-responsive" alt=""/>
		   </div><!-- /.features -->
		   <div class="spacer">
		   <h4>Clean/Maid Service</h4>
			<p>Data Entry, English, Excel, Customer Service, Admin Support, Research, Email.</p>
			<p><b>Over 2,000 services</b></p>
		   </div> <!-- /.spacer -->
		  </a>		 
		 </div><!-- /.col-lg-4 -->
		 
		 <div class="col-lg-4 col-md-4 col-sm-6">
		  <a href="services.html">
		   <div class="features five">
		    <img src="img/home/repair.jpg" class="img-responsive" alt=""/>
		   </div><!-- /.features -->
		   <div class="spacer">
		   	<h4>Application Repair</h4>
			<p>Finance, Accounting, Tax Service, Payroll Manager, Book Keeper, Human Resource.</p>
			<p><b>Over 2,000 services</b></p>
		   </div> <!-- /.spacer -->
		  </a>		 
		 </div><!-- /.col-lg-4 -->
		 
		 <div class="col-lg-4 col-md-4 col-sm-6">
		  <a href="services.html">
		   <div class="features six">
		    <img src="img/home/landscaper.jpg" class="img-responsive" alt=""/>
		   </div><!-- /.features -->
		   <div class="spacer">
		   	<h4>Landscaping</h4>
			<p>Sales, Marketing, Lead Generation, Market Research, Leads.</p>
			<p><b>Over 2,000 services</b></p>
		   </div> <!-- /.spacer -->
		  </a>		 
		  </div><!-- /.col-lg-4 -->
		  
		 </div><!-- /.col-lg-12 -->
		</div><!-- /.row -->

	  </div><!-- /.container -->
	 </section><!-- /section -->

     <!-- ==============================================
     Banner Section
     =============================================== -->
	 <section class="banner-comment">
	  <div class="container">
	   <h1>Best way to help world society is to develop a concrete framework for high paying jobs and individual skills enhancements.</h1>
	  </div><!-- /container -->
	 </section><!-- /section -->	  

     <!-- ==============================================
	 Stats Section
	 =============================================== -->	
	 <section id="stats" class="stats">
	  <div class="container text-center">
		
	   <div class="row">
				
		<div class="col-lg-3 col-sm-6 pro">
		 <h5>Clients</h5>
		 <h1><span class="number-animator" data-value="505" data-animation-duration="800">0</span></h1>
		  <div class="progress transparent progress-small no-radius">
		   <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="45%" ></div>
		  </div><!-- /.progress -->
		</div><!-- /.col-lg-3 -->
				
		<div class="col-lg-3 col-sm-6 pro">
		 <h5>Freelancers</h5>					
		 <h1><span class="number-animator" data-value="4500" data-animation-duration="800">0</span></h1>
		  <div class="progress transparent progress-small no-radius">
		   <div class="progress-bar progress-bar-black animated-progress-bar " data-percentage="79%"></div>
		  </div><!-- /.progress -->
		</div><!-- /.col-lg-3 -->
				
		<div class="col-lg-3 col-sm-6 pro">
		 <h5>Jobs Completed</h5>
		 <h1><span class="number-animator" data-value="14000" data-animation-duration="800">0</span></h1>
		  <div class="progress transparent progress-small no-radius">
		   <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="85%"></div>
		  </div><!-- /.progress -->
		</div><!-- /.col-lg-3 -->

	   	<div class="col-lg-3 col-sm-6 pro">
		 <h5>Payed To Freelancers</h5>
		 <h1><i class="fa fa-usd"></i><span class="number-animator" data-value="500K" data-animation-duration="800">0</span></h1>
		  <div class="progress transparent progress-small no-radius">
		   <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="85%"></div>
		  </div><!-- /.progress -->
		</div><!-- /.col-lg-3 -->
				
	   </div><!-- /.row -->
	  </div><!-- /.container -->
     </section><!-- /section -->
	  
     <!-- ==============================================
	 Testimonials Section
	 =============================================== -->	
     <div id="testimonials">
	  <div class="container">  
	   <div class="row">
	   
	   <h3>Testimonials</h3>
	   <hr class="mint">
	   
		<div class="testimonials-slider">
		 <ul class="slides">
          <li>
		   <p>The Kafe Template, is a powerful medium of expression and design in which its communications offers an infinite variety of perception, interpretation and execution.
		   <span>John Doe</span></p>
		  </li>
		  <li>
           <p>I m wondering why I never contacted these guys sooner! Seriously, they all have commendable talent in their respective field and knocked my concept out of the ballpark. Thanks for an amazing experience!
		   <span>Segero, NoranicMeds</span></p>
		  </li>
		  <li>
		   <p>I m wondering why I never contacted these guys sooner! Seriously, they all have commendable talent in their respective field and knocked my concept out of the ballpark. Thanks for an amazing experience!
		   <span>Jane Doe</span></p>
		  </li>
         </ul><!-- /ul -->
		</div><!-- /.testimonials-slider -->
	   </div><!-- /.row -->
	  </div><!-- /.container -->
     </div>
     <!-- /section -->  
	 

@endsection