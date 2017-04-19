@extends('layouts.app')

@section('template_title')
    FAQ
@endsection

@section('template_fastload_css')
@endsection
@section('content')

	 
     <!-- ==============================================
	 Header
	 =============================================== -->	 
	 <header class="header-faq">
      <div class="container">
	   <div class="content">
        <div class="row">
	     <h1 class="revealOnScroll" data-animation="fadeInDown"><i class="fa fa-coffee"></i> FAQ</h1>
		 <p>Frequently Asked Questions.</p>
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
	  <!-- ==============================================
	  Hello Section
	  =============================================== -->
    
      <section class="faq" id="faq">
	   <div class="container text-left">
	    <div class="row">
		
		  <div id="sidebar" class="col-lg-4">
		   <div class="panel panel-success">
			<div class="panel-heading">
			 <h4 class="panel-title">Skip to section</h4>
			</div>
			<div id="sidenav" class="panel-body">
			 <ul class="list-unstyled nav sidenav">
			  <li><a href="#basics" class="scroll-link" data-id="basics">Basics</a></li>
			  <li><a href="#account" class="scroll-link" data-id="account">Account</a></li>
			  <li><a href="#job" class="scroll-link" data-id="job">Job</a></li>
			  <li><a href="#payments" class="scroll-link" data-id="payments">Payments</a></li>
			  <li class="hr"></li>
			  <li><a href="#work" class="scroll-link" data-id="work">Work?</a></li>
			 </ul>
			</div>
		   </div>
		  </div>
		  		
		 
		 <div class="col-lg-8">
		 
		  <div id="basics">
		  
		  <h3>Basics</h3>
		 
		   <div class="panel-group" id="accordion">
		   
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">How do I sign up?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse1" class="panel-collapse collapse in">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">How do I post a Job?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse2" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Can I remove a post?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse3" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">How do freelancers get Paid?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse4" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">How do reviews work?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse5" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
			</div><!--./panel-group -->	
			
		   </div><!--./basics -->	
		   
		   
		  <div id="account">
		 
		  <h3>Account</h3>
		  
		   <div class="panel-group" id="accordion2">
		   
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse6">How do I change my password?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse6" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse7">How do I delete my account?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse7" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse8">How do I change my account settings?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse8" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 		 
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse9">I forgot my password. How do I reset it?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse9" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
			 
			</div><!--./panel-group -->	
			
		   </div><!--./account-->		
		   
		  <div id="job">
		  
		  <h3>Job</h3>
		 
		   <div class="panel-group" id="accordion3">
		   
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse10">How do I post a Job?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse10" class="panel-collapse collapse in">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse11">Who can see my Job?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse11" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse12">How to communicate with a Freelancer.</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse12" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse13">Do I need an Agreement?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse13" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse14">How can I protect my Idea?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse14" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
			</div><!--./panel-group -->	
			
		   </div><!--./job -->		
		   
		  <div id="payments">
		  
		  <h3>Payments</h3>
		 
		   <div class="panel-group" id="accordion4">
		   
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse15">How do I pay a Freelancer?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse15" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse16">When and how will I get payed?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse16" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse17">What's an Escrow Account & Invoicing.</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse17" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse18">Do I need to Fill out a W9?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse18" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse19">How do I get a refund?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse19" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
			</div><!--./panel-group -->	
			
		   </div><!--./payments -->	
		   
		  <div id="work">
		  
		  <h3>Work</h3>
		 
		   <div class="panel-group" id="accordion5">
		   
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse20">When Should I start working?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse20" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse21">Where to get started?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse21" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
			   <p>Sed porta accumsan tellus nec facilisis. Mauris eget metus non tortor auctor viverra sed eu lorem. Nulla ultrices elit quis malesuada vestibulum. Fusce pulvinar consectetur lacus, vel dapibus eros mollis malesuada.</p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse22">Can I request payment while still working?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse22" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse23">How to see the progress of my Job?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse23" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->
			 
		    <div class="panel panel-success">
			 <div class="panel-heading">
			  <h4 class="panel-title">
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse24">How do I leave feedback & review?</a>
			  </h4>
			 </div><!--./panel-heading -->
			 <div id="collapse24" class="panel-collapse collapse">
			  <div class="panel-body"> 
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum nulla. Morbi tempor vel felis nec luctus. Etiam dolor augue, condimentum vel fringilla a, imperdiet a odio. Etiam fermentum augue quis semper dapibus. Aliquam tincidunt quam ultricies, vehicula erat eu, tempus neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
              </div><!--./panel-collapse -->
			 </div><!--./panel-body -->
			</div><!--./panel-success -->	 
			 
			</div><!--./panel-group -->	
			
		   </div><!--./work -->			   		   	       	  	  		  
		
		 </div><!-- ./col-lg-8--> 
		 
		</div><!-- ./row-->
	   </div><!-- ./container--> 
      </section><!-- End section-->
	  
  @endsection
