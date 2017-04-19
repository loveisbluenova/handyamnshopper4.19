@extends('layouts.app')

@section('template_title')
	@if (Auth::guest())
    Jobs
    @else
    {{ Auth::user()->name }}'s' Jobs
    @endif
@endsection

@section('template_fastload_css')
@endsection
@section('content')

	 
<body class="greybg">	 
     <!-- ==============================================
	 Header
	 =============================================== -->	 
     <header class="header-jobs" style="height: 25vh;">
      <div class="container">
	   <div class="content">
	    <div class="row">
		 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		  
		 </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
     <!-- ==============================================
	 Jobs Section
	 =============================================== -->
     <section class="jobslist">
	  <div class="container-fluid">
	   <div class="row-fluid">
	   
	    <div class="col-lg-4">
		
		 <div class="list">
		  <div class="list-group">
		  
		 
           <a href="/findjobs" class="list-group-item active cat-top">
            <em class="fa fa-fw fa-coffee text-white"></em>&nbsp;&nbsp;&nbsp;Categories
            <span class="badge">{{$jobs}}</span>
		   </a>
           <a href="/jobs/categories/plumbing" class="list-group-item cat-list">
            <em class="fa fa-fw fa-code text-muted"></em>&nbsp;&nbsp;&nbsp;Plumbing
            <span class="badge text-red-bg">{{$plumbing}}</span>
		   </a>
           <a href="/jobs/categories/electrical" class="list-group-item cat-list">
            <em class="glyphicon glyphicon-pushpin"></em>&nbsp;&nbsp;&nbsp;Electrical
            <span class="badge text-red-bg">{{$electrical}}</span>
		   </a>
           <a href="/jobs/categories/painting" class="list-group-item cat-list">
            <em class="fa fa-fw fa-pencil text-muted"></em>&nbsp;&nbsp;&nbsp;Painting
            <span class="badge text-red-bg">{{$painting}}</span>
		   </a>
           <a href="/jobs/categories/maid" class="list-group-item cat-list">
            <em class="fa fa-fw fa-female text-muted"></em>&nbsp;&nbsp;&nbsp;Clean/Maid Service
            <span class="badge text-red-bg">{{$maid}}</span>
		   </a>
           <a href="/jobs/categories/repair" class="list-group-item cat-list">
            <em class="fa fa-fw fa-wrench text-muted"></em>&nbsp;&nbsp;&nbsp;Application Repair
            <span class="badge text-red-bg">{{$repair}}</span>
		   </a>
           <a href="/jobs/categories/landscaping" class="list-group-item cat-list">
            <em class="fa fa-fw fa-cut text-muted"></em>&nbsp;&nbsp;&nbsp;Landscaping
            <span class="badge text-red-bg">{{$landscaping}}</span>
		   </a>
           <a href="/jobs/categories/heating" class="list-group-item cat-list">
            <em class="fa fa-fw fa-wrench text-muted"></em>&nbsp;&nbsp;&nbsp;Heating & Cooling
            <span class="badge text-red-bg">{{$heating}}</span>
		   </a>
           <a href="/jobs/categories/other" class="list-group-item cat-list">
            <em class="fa fa-fw fa-bars text-muted"></em>&nbsp;&nbsp;&nbsp;Other Handyman Services
            <span class="badge text-red-bg">{{$other}}</span>
		   </a>
		
		   
          </div><!-- /.list-group -->
		 </div><!-- /.list --> 
		
		 <div class="list">
		  <div class="list-group">
		  
           <span class="list-group-item active cat-top">
            <em class="fa fa-fw fa-coffee text-white"></em>&nbsp;&nbsp;&nbsp;Project Address Type
		   </span>
           <a href="/jobs/addresstype/home" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Home
            <span class="badge text-red-bg">{{$locationtype1}}</span>
		   </a>
           <a href="/jobs/addresstype/business" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Business
            <span class="badge text-red-bg">{{$locationtype2}}</span>
		   </a>
		 
          </div><!-- /.list-group -->
		 </div> <!-- /.list -->	
		
		 <div class="list">
		  <div class="list-group">
		  
           <span class="list-group-item active cat-top">
            <em class="fa fa-fw fa-coffee text-white"></em>&nbsp;&nbsp;&nbsp;Project Duration
		   </span>
           <a href="/jobs/duration/less_than_1_week" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle-o text-muted"></em>&nbsp;&nbsp;&nbsp;Less than 1 week
            <span class="badge text-red-bg">{{$duration1}}</span>
		   </a>
           <a href="/jobs/duration/less_than_1_month" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle-o text-muted"></em>&nbsp;&nbsp;&nbsp;Less than 1 month
            <span class="badge text-red-bg">{{$duration2}}</span>
		   </a>
           <a href="/jobs/duration/1_to_3_months" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle-o text-muted"></em>&nbsp;&nbsp;&nbsp;1 to 3 months
            <span class="badge text-red-bg">{{$duration3}}</span>
		   </a>
		   <a href="/jobs/duration/3_to_6_months" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle-o text-muted"></em>&nbsp;&nbsp;&nbsp;3 to 6 months
            <span class="badge text-red-bg">{{$duration4}}</span>
		   </a>
           <a href="/jobs/duration/more_than_6_months" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle-o text-muted"></em>&nbsp;&nbsp;&nbsp;> 6 months
            <span class="badge text-red-bg">{{$duration5}}</span>
		   </a>
           <a href="/jobs/duration/notspecified" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle-o text-muted"></em>&nbsp;&nbsp;&nbsp;Not Specified
            <span class="badge text-red-bg">{{$duration6}}</span>
		   </a>
		 
          </div><!-- /.list-group -->
		 </div><!-- /.list -->	
		 		
		</div><!-- /.col-lg-4 -->
	    <div class="col-lg-8 white" style="margin-top: 10px;">	
		
		<!-- <form action="#" method="get" class="list-search revealOnScroll" data-animation="fadeInDown" data-timeout="200">
		  <button><i class="fa fa-search"></i></button>
		  <input type="text" class="form-control" placeholder="Job title, keywords or company name" value=""/>
		  <div class="clearfix"></div>
		 </form>

		  <h6>We found 100 jobs matching: Web Development & IT</h6>-->
		  	
		 <div class="job">	
		  
		  @foreach($itemns as $item)
		
		<div class="panel panel-default">
			<div class="row top-sec">
			   <div class="col-lg-12">
				
				<div class="col-lg-8 col-xs-12"> 
				 <h4><a href="{{ url('item/'.$item->id) }}">{{ $item->id }}-{{ $item->title }}</a></h4>
				 
				</div><!-- /.col-lg-10 -->
				
		   		</div><!-- /.col-lg-12 -->
		  	</div><!-- /.row -->
		    
		  <div class="row mid-sec">			 
		   <div class="col-lg-12">			 
		   <div class="col-lg-12">
			<hr class="small-hr">
			<p>{{ $item->description }}</p>
			
			
			<span class="label label-success">{{$item->skill}}</span>
			
		  
		   </div><!-- /.col-lg-12 -->
		   </div><!-- /.col-lg-12 -->
		  </div><!-- /.row -->

		  

		  <div class="row bottom-sec">
		   <div class="col-lg-12">
			
			<div class="col-lg-12">
			 <hr class="small-hr">
			</div> 
			
			<div class="col-lg-2">
			 <h5> Posted </h5>
			 <p> Hours Ago </p>
			</div>
			
			<div class="col-lg-2">
			 <h5> Budget </h5>
			 <p>${{ $item->budget }}</p>
			</div>

			 <div class="col-lg-2">
           <h5> Duration </h5>
           
              
                <p>{{$item->duration}}</p>       
                           
            

          </div><!-- /.col-lg-3 -->

       		<div class="col-lg-2">
           <h5> Location Type </h5>
           
            
                <p>{{$item->locationtype}}</p>       
                           
           
          </div><!-- /.col-lg-3 -->


			<div class="col-lg-2">
			 <h5> Applicants </h5>
			 <p>{{ $item->application }}</p>
			</div>

			
			

			<div class="col-lg-9">
			 <h5> Project Address </h5>
			 <p><i class="fa fa-map-marker"></i> {{ $item->projectaddress }}</p>
			</div>
			<div class="col-lg-3">
			 <a href="{{ url('item/'.$item->id) }}" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-align-left"></i> Send Proposal</a>
			</div>
		   </div><!-- /.col-lg-12 -->
		   
		  </div><!-- /.row -->
		
		 </div><!-- /.job -->
	
		  @endforeach
		 
		  <div class="page text-center">
		  <ul class="pagination">
		   	
	       {{ $itemns->links() }}
	    	
		  </ul><!-- /.pagination -->
		 </div><!-- /.page --> 
		 
	    </div><!-- /.col-lg-8 -->
	   </div><!-- /.row -->
	  </div><!-- /.container-fluid -->
     </section><!-- /section -->  	 
</body>	  

@endsection