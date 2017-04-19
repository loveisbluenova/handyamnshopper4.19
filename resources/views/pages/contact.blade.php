@extends('layouts.app')

@section('template_title')
    Contact
@endsection

@section('template_fastload_css')
@endsection
@section('content')

     <!-- ==============================================
	 Header
	 =============================================== -->	 
     <header class="header-contact">
      <div class="container">
	   <div class="content">
	   
        <div class="row">
	     <h1 class="revealOnScroll" data-animation="fadeInDown"><i class="fa fa-coffee"></i> Contact</h1>
		 <p>Get in touch with us.</p>
        </div><!-- /.row -->
	   
	    <div class="row location revealOnScroll" data-animation="fadeInUp" data-timeout="200">
		 <div class="col-lg-4">
		  <i class="fa fa-map-marker fa-1x"></i>
		  <p>Nairobi West, Nairobi, Kenya</p>
		 </div><!-- /.col-lg-4 -->
		 <div class="col-lg-4">
		  <i class="fa fa-phone fa-1x"></i>
		  <p>(254) 7-3654-3210</p>
		 </div><!-- /.col-lg-4 -->
		 <div class="col-lg-4">
		  <i class="fa fa-envelope fa-1x"></i>
		  <p>john.doe@mail.com</p>
		 </div><!-- /.col-lg-4 -->
	    </div><!-- /.row -->
		
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
     <!-- ==============================================
     Map Section
     =============================================== -->
	 <div class="map">
	  <div class="container-fluid">
	   <div class="row">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31910.130369917133!2d36.80390184826668!3d-1.3157805385798884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1053bc7118e7%3A0xb365376f1d28175!2sNairobi+West%2C+Nairobi!5e0!3m2!1sen!2ske!4v1463256840401" width="600" height="450" style="border:0" allowfullscreen></iframe>
	   </div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	 </div><!-- /.map -->
	 
     <!-- ==============================================
     Contact Section
     =============================================== -->	  	 
	 <section class="contact">
	  <div class="container">
	   <div class="row">
	   
	    <div class="text-center">
		 <h3>Have More Questions?</h3>
		 <hr class="mint">
		 <p class="top-p">We're always connected. Get in touch using however you like.</p>
	    </div>
	   
        <!-- The contactform -->
		<form method="post" action="contact.php" name="contactform" id="contactform" class="animations fade-up d3">
		 <fieldset>
		  <div class="col-lg-6">
           <!-- Name -->
		   <label for="name" accesskey="U"><i class="fa fa-user"></i></label>
		   <input name="name" type="text" id="name" size="30" value="" />
		   
		   <!-- Email -->
		   <label for="email" accesskey="E"><i class="fa fa-envelope-o"></i></label>
		   <input name="email" type="text" id="email" size="30" value="" />
		   
		   <!-- Phone -->
		   <label for="phone" accesskey="P"><i class="fa fa-phone"></i></label>
		   <input name="phone" type="text" id="phone" size="30" value="" />
		  </div>
		  <div class="col-lg-6">
		   <!-- Comments / Message -->
		   <label for="comments" accesskey="C"><i class="fa fa-comment"></i></label>
		   <textarea name="comments" id="comments"></textarea>

		   <!-- Verification -->
		   <label for="verify" accesskey="V">3 * 15 =</label>
		   <input name="verify" type="text" id="verify" size="4" value="" class="input-verify" />
		  </div>
		  <div class="col-lg-12 text-center">
		   <!-- Send button -->
		   <button type="submit" class="kafe-btn kafe-btn-mint full-width">Submit</button>
          </div>
		 </fieldset>
		</form>		
			
	   </div><!-- /.row -->
	  </div><!-- /.container -->
	 </section><!-- /section -->
	 

@endsection