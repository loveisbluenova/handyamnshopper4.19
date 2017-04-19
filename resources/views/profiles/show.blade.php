@extends('layouts.app')

@section('template_title')
	{{ $user->name }}'s Profile
@endsection

@section('template_fastload_css')

	#map-canvas{
		min-height: 300px;
		height: 100%;
		width: 100%;
	}

@endsection

@section('content')

<body class="greybg">
	 
     <!-- ==============================================
	 Header
	 =============================================== -->	 
	 <header class="header-freelancer">
      <div class="container">
	   <div class="content">
	    <div class="row">
	     <div class="col-lg-12">
          
          <img src="/uploads/avatars/{{ $user->avatar }}" class="img-thumbnail img-responsive revealOnScroll" data-animation="fadeInDown" data-timeout="200" alt="">

	      <h1 class="revealOnScroll" data-animation="bounceIn" data-timeout="200"> {{ $user->name }}</h1>
		  <p class="revealOnScroll" data-animation="fadeInUp" data-timeout="400"><i class="fa fa-map-marker"></i>{{ $user->profile->location }}</p>
		  <!--<a href="#" class="kafe-btn kafe-btn-mint-small revealOnScroll" data-animation="fadeInUp" data-timeout="400"><i class="fa fa-align-left"></i> Get a Quote</a>-->
		  
		 </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
	  <!-- ==============================================
	  Overview Section
	  =============================================== -->
    
      <section class="overview" id="overview">
	   <div class="container">
	    <div class="row">
		
		 <div id="sidebar" class="col-lg-4">
			<div class="list">
			 <div class="list-group">
			 <span class="list-group-item active cat-top">
			  <em class="fa fa-fw fa-coffee"></em>&nbsp;&nbsp;&nbsp;Profile
			 </span>
			 <a href="#" class="list-group-item cat-list">
			  <em class="fa fa-fw fa-align-justify"></em>&nbsp;&nbsp;&nbsp;About Me

			 </a>
			 <a class="list-group-item cat-list changepic" style="cursor: pointer;">
			  <em class="fa fa-fw fa-align-justify"></em>&nbsp;&nbsp;&nbsp;Profile Image
			 </a> 
		   	<form enctype="multipart/form-data" action="../update_avatar" method="POST" class="form-changepicture" style="display: none;">  
		   	  <input type="file" name="avatar">                        
		      <input type="hidden" name="_token" value="{{ csrf_token() }}">
		    </form>
			  
			 <a href="/change-password" class="list-group-item cat-list">
			  <em class="fa fa-fw fa-align-justify"></em>&nbsp;&nbsp;&nbsp;Change Password
			 </a>
			 
			 <a href="jobscompleted.html" class="list-group-item cat-list">
			  <em class="fa fa-fw fa-align-justify"></em>&nbsp;&nbsp;&nbsp;Jobs Completed
			 </a>
			 
			 
			 </div><!-- ./.list-group -->
			</div><!-- ./.list --> 


		 </div><!-- ./.col-lg-4 -->
		 
		 <div class="col-lg-8 white-2">
		  <div class="about">
		  <div class="col-lg-10">
		  <h3>About Me</h3>
		  </div>
		  <div class="col-lg-2" style="    padding-top: 10px;">
		  @if ($user->profile)
							@if (Auth::user()->id == $user->id)

								{!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-cog', Lang::get('titles.editProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

							@endif
						@else

							<p>{{ Lang::get('profile.noProfileYet') }}</p>
							{!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', Lang::get('titles.createProfile'), array('class' => 'btn btn-small btn-info btn-block')) !!}

			@endif
			
		  	</div>

		   <div class="col-lg-12 top-sec">
		   <h4>{{ Lang::get('profile.showProfileFirstName') }}&nbsp;&nbsp;&nbsp;{{ $user->first_name }}</h4>
		   <h4>{{ Lang::get('profile.showProfileLastName') }}&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->last_name }}</h4>
		   <h4 style="padding-bottom: 10px;">{{ Lang::get('profile.showProfileUsername') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->name }}</h4>
		     <p>@if ($user->profile)
					@if ($user->profile->bio)
						<dt>
							<h4>{{ Lang::get('profile.showProfileBio') }}</h4>
						</dt>
						<dd>
							<p>{{ $user->profile->bio }}</p>
						</dd>
					@endif
				@endif
			</p>
		   
			<span class="label label-success">HTML 5</span>
			<span class="label label-success">CSS3</span>
			<span class="label label-success">PHP 5.4</span>
			<span class="label label-success">Mysql</span>
			<span class="label label-success">Bootstrap</span>
		  </div><!-- /.col-lg-12 --> 	
		
		  <div class="row bottom-sec">
		   
		   <div class="col-lg-12">
			
			<div class="col-lg-12">
			 <hr class="small-hr">
			</div><!-- /.col-lg-12 --> 

			
			<div class="col-lg-2">
			 <h5> Completed </h5>
			 <p> 500 Jobs </p>
			</div><!-- /.col-lg-2 -->
			<div class="col-lg-2">
			 <h5> Earned </h5>
			 <p>$734,600</p>
			</div><!-- /.col-lg-2 -->
			<div class="col-lg-2">
			 <h5> Ratings (126)</h5>
			 <p><i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i></p>
			</div><!-- /.col-lg-2 -->
			<div class="col-lg-4">
			 <h5> Job Success </h5>
			 <p> 92% </p>
				<div class="progress progress-xxs">
				 <div class="progress-bar progress-bar-primary progress-bar-mint" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
				 </div>
				</div>	
			</div><!-- /.col-lg-4 -->
		   </div><!-- /.col-lg-12 -->
		  
		   <div class="col-lg-12">
			
			<div class="col-lg-12">
			 <hr class="small-hr">
			</div><!-- /.col-lg-12 --> 
			
			<div class="col-lg-2">
			 <h5> Work Hrs </h5>
			 <p> 13500</p>
			</div><!-- /.col-lg-12 -->
			<div class="col-lg-2">
			 <h5> Rate/Hr </h5>
			 <p>$85</p>
			</div><!-- /.col-lg-1 -->
			<div class="col-lg-2">
			 <h5> Phone </h5>
			 <p><i class="fa fa-phone"></i> (+254) 733034567</p>
			</div><!-- /.col-lg-3 -->
			<div class="col-lg-3">
			 <h5> Business Addresss </h5>
			 <p>{{ $user->profile->location }}</p>
			</div><!-- /.col-lg-3 -->
			<div class="col-lg-3">
			 <h5> Email </h5>
			 <p> {{ $user->email }}</p>
			</div><!-- /.col-lg-3 -->
			
		   </div><!-- /.col-lg-12 -->
		  </div><!-- /.col-lg-12 -->
		  </div><!-- /.about -->

		  
		  
		  <div class="awards">		  
		  <h3>{{ Lang::get('profile.showProfileLocation') }}</h3>
		  @if ($user->profile)
				@if ($user->profile->location)
					<dt>
						<h4>{{ $user->profile->location }}</h4>
					</dt>
					<dd>
						
							Latitude: <span id="latitude"></span> / Longitude: <span id="longitude"></span> <br />

							<div id="map-canvas"></div>

					</dd>
				@endif
		  @endif
		  </div>
		</div>
		</div>

		  

		
	   </div><!-- /.container --> 
      </section><!-- End section-->



	<script>
		
	    $(document).ready(function(){
		    $(".list-group-item.cat-list.changepic").click(function(){
				$('.form-changepicture input[type="file"]').click();	    
			});
		});

	    $('.form-changepicture input[type="file"]').change(function() {
	        $('.form-changepicture').submit();
	    });
	</script>

</body>

@endsection

@section('footer_scripts')

	@include('scripts.google-maps-geocode-and-map')
	 
     <!-- jQuery 2.1.4 -->
     <script src="js/jQuery-2.1.4.min.js" type="text/javascript"></script>
     <!-- Bootstrap 3.3.6 JS -->
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <!-- Waypoints JS -->
     <script src="js/waypoints.min.js" type="text/javascript"></script>
     <!-- JQuery Easypiechart JS -->
	 <script src="js/jquery.easypiechart.js" type="text/javascript"></script>
     <!-- Kafe JS -->
     <script src="js/kafe.js" type="text/javascript"></script>
	 		<script>
			var $sideBar = $('#sidebar .list');
			$sideBar.affix({
				offset: {
				  top: function () {
					var offsetTop      = $sideBar.offset().top;

					return (this.top = offsetTop - 50)
				  },
				 bottom: ($('.footer').outerHeight(true) + $('.made').outerHeight(true)) + 110
				}
			});
		</script>

@endsection
