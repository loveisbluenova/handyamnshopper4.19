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
		  
		<!--  <a href="/postjob" class="kafe-btn kafe-btn-mint full-width revealOnScroll" data-animation="bounceIn" data-timeout="400"><i class="fa fa-tags"></i> Post a Job, It’s Free!</a>-->

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
	   
	    <div class="col-lg-4" style="padding-bottom: 40vh;">
		
		 
		
		 <div class="list">
		  <div class="list-group">
		  
           @if($state==1)
           <a href="/customerjob/{{Auth::user()->id}}" class="list-group-item active cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Pending Jobs
            <span class="badge text-red-bg">{{$pending}}</span>
		   </a>
		  	@else
		  	<a href="/customerjob/{{Auth::user()->id}}" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Pending Jobs
            <span class="badge text-red-bg">{{$pending}}</span>
		   </a>
		   @endif



		   @if($state==2)
		   <a href="/customerjob/{{Auth::user()->id}}/runingjob" class="list-group-item active cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Running Jobs
            <span class="badge text-red-bg">{{$runing}}</span>
		   </a>
		   @else
           <a href="/customerjob/{{Auth::user()->id}}/runingjob" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Running Jobs
            <span class="badge text-red-bg">{{$runing}}</span>
		   </a>
		   @endif

		   @if($state==3)
		   <a href="/customerjob/{{Auth::user()->id}}/completejob" class="list-group-item active cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Completed Jobs
            <span class="badge text-red-bg">{{$completed}}</span>
		   </a>
		   @else
		   <a href="/customerjob/{{Auth::user()->id}}/completejob" class="list-group-item cat-list">
            <em class="fa fa-fw fa-check-circle text-muted"></em>&nbsp;&nbsp;&nbsp;Completed Jobs
            <span class="badge text-red-bg">{{$completed}}</span>
		   </a>
		 	@endif
          </div><!-- /.list-group -->
		 </div> <!-- /.list -->	
				 		 		
		 
		 

		</div><!-- /.col-lg-4 -->
	    <div class="col-lg-8 white" style="margin-top: 10px;">	
		
		<!--<form action="#" method="get" class="list-search revealOnScroll" data-animation="fadeInDown" data-timeout="200">
		  <!--<button><i class="fa fa-search"></i></button>
		  <input type="text" class="form-control" placeholder="Job title, keywords or company name" value=""/>
		  <div class="clearfix"></div>
		 </form>-->

		  
		  	
		 <div class="job">	
		 
		
		@foreach($itemns as $item)
		
		<div class="panel panel-default">
			<div class="row top-sec">
			   <div class="col-lg-12">
				
				<div class="col-lg-8 col-xs-12"> 
				 <h4><a href="{{ url('item/'.$item->id) }}">{{ $item->id }}-{{ $item->title }}</a></h4>
				 <h5>{{ $item->skill }}</h5>
				</div><!-- /.col-lg-10 -->
				<div class="col-lg-1">
					@if($item->state==1)
			 		<a href="{{ url('item/'.$item->id.'/edit') }}" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-pencil-square-o"></i>  Edit </a>

			 		@endif
				</div>
				<div class="col-lg-2">
				@if($item->state<3)
				 <a href="jobpost.html" class="kafe-btn kafe-btn-mint-small btn btn-danger" style="font-size: 12px;"><i class="fa fa-times"  aria-hidden="true"></i>Close</a>
				 @endif
				</div>

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
			 <p>4 Hours Ago</p>
			</div>
			
			<div class="col-lg-2">
			 <h5> Budget </h5>
			 <p>${{ $item->budget }}</p>
			</div>

			 <div class="col-lg-3">
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

			

			<div class="col-lg-6">
			 <h5> Project Address </h5>
			 <p><i class="fa fa-map-marker"></i> {{ $item->projectaddress }}</p>

			</div>
			
		   </div><!-- /.col-lg-12 -->

		  </div><!-- /.row -->
	
		 </div>
		<div class="container">


		 
		 @endforeach
		
		
	
	     <div class="page text-center">
		  <ul class="pagination">
		   	
	       {{ $itemns->links() }}
	    	
		  </ul><!-- /.pagination -->
		 </div><!-- /.page --> 
		

                                
                           

		 <a id="scrollup">Scroll</a>
	    </div><!-- /.col-lg-8 -->
	   </div><!-- /.row -->
	  </div><!-- /.container-fluid -->
     </section><!-- /section -->  	 
</body>	  
   
@endsection