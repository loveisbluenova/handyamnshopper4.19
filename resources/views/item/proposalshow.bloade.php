@extends('layouts.app')

@section('title', 'Item:')

@section('content')

<!--<![endif]-->


<body class="greybg">

     <!-- ==============================================
     Navbar
     =============================================== -->
     
     
     
     <!-- ==============================================
     Header
     =============================================== -->     
     <header class="header-jobpost">
      <div class="container">
         <div class="content">
          <div class="row">
             <div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-6 col-xs-12 animations fade-left d2">
              <a href="jobpost.html" class="kafe-btn kafe-btn-mint full-width revealOnScroll" data-animation="bounceIn" data-timeout="400"><i class="fa fa-star"></i> Send Proposal</a>
             </div><!-- /.col-lg-3 -->
         
            </div><!-- /.row -->
           </div><!-- /.content -->
        </div><!-- /.container -->
     </header><!-- /header -->
     
     <!-- ==============================================
     Job Post Section
     =============================================== -->
     <section class="jobpost">
      <div class="container">
       <div class="row">
        <div class="col-lg-8 white">
        
         <div class="row">
          <div class="col-lg-12">
         
              
                 <!--<h6><a>Categories -</a></h6> -->
                                         
          
           <h4 style="font-size: 30px;">{{ $item->title }}</h4>
           <hr class="small-hr">
          </div>        
         </div> 
         
         <div class="row post-top-sec">
          <div class="col-lg-2">
           <h5> Posted </h5>
           <p>4 Hours Ago</p>
          </div><!-- /.col-lg-3 -->
          
          <div class="col-lg-2">
           <h5> Budget </h5>
           <p>${{$item->budget}}</p>
          </div><!-- /.col-lg-3 -->

          <div class="col-lg-3">
           <h5> Duration </h5>
            @foreach ($durations as $duration)
              @if($item->duration==$duration->id)
                <p>{{$duration->duration}}</p>       
            @endif                  
            @endforeach

          </div><!-- /.col-lg-3 -->

          <div class="col-lg-3">
           <h5> Location Type </h5>
           @foreach ($locationtypes as $locationtype)
              @if($item->locationtype==$locationtype->id)
                <p>{{$locationtype->locationtype}}</p>       
            @endif                  
            @endforeach
          </div><!-- /.col-lg-3 -->

          

          <div class="col-lg-2">
           <h5> Applicants </h5>
           <p>{{$item->application}}</p>
          </div><!-- /.col-lg-3 -->

          <div class="col-lg-12">
           <h5> Project Address </h5>
           <p><i class="fa fa-map-marker"></i> {{ $item->projectaddress }}</p>
          </div><!-- /.col-lg-3 -->

          <div class="col-lg-12">
           <hr class="small-hr">
          </div> <!-- /.col-lg-12 -->
         </div><!-- /.row -->
          
         <div class="post-bottom-sec col-lg-9"> 
          <h4>Job Description</h4>
          <p>{{$item->description}}</p>
        
          <h4>Skills</h4>
          @foreach ($skills as $skill)
              @if($item->skill==$skill->id)
                <span class="label label-success">{{$skill->skill}}</span>
        
            @endif
         
           
            @endforeach
         </div><!-- /.post-bottom-sec --> <br>
       


         @if(Auth::user()->user_type==2)
         <h4>Proposals</h4>
         
         <div class="job">  
      
          <div class="row top-sec">
           <div class="col-lg-12">
            <div class="col-lg-2 col-xs-12">
             <a href="freelancer.html">
              <img class="img-responsive" src="img/users/5.png" alt="">
             </a>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-10 col-xs-12"> 
             <h4><a href="freelancer.html">Ken Chicharito</a></h4>
             <h5><i class="fa fa-at"></i> KenChicharito</h5>
            </div><!-- /.col-lg-10 -->
            
           </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
      
          <div class="row mid-sec">          
           <div class="col-lg-12">           
           <div class="col-lg-12">
            <hr class="small-hr">
            <p>I am a Web development expert with over 3 years experience in setup and customization of Responsive Website Design, PHP, WordPress, Magento,java,HTML,CSS ,ios App Develop...</p>
            <span class="label label-success">Java</span>
            <span class="label label-success">Wordpress</span>
            <span class="label label-success">PHP 5.4</span>
            <span class="label label-success">HTML 5</span>
            <span class="label label-success">Magneto</span>
            <span class="label label-success">Joomla</span>
           </div><!-- /.col-lg-12 -->
           </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
      
          <div class="row bottom-sec">
           <div class="col-lg-12">
            
            <div class="col-lg-12">
             <hr class="small-hr">
            </div> 
            
            <div class="col-lg-3">
             <h5> Posted </h5>
             <p> Apr, 28 2016</p>
            </div>
            <div class="col-lg-2">
             <h5> Location </h5>
             <p><i class="fa fa-map-marker"></i> Kenya</p>
            </div>
            <div class="col-lg-2">
             <h5> Bid </h5>
             <p>$100</p>
            </div>
            <div class="col-lg-2">
             <h5> Ratings (12)</h5>
             <p><i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i></p>
            </div>
            <div class="col-lg-3">
             <a href="servicepage.html" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-align-right"></i> View Proposal</a>
            </div>
            
           </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
         
         </div><!-- /.job -->
        
         
         
         <div class="page text-center">
          <ul class="pagination">
           <li class="disabled"><a href="#">«</a></li>
           <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
           <li><a href="#">2</a></li>
           <li><a href="#">3</a></li>
           <li><a href="#">4</a></li>
           <li><a href="#">5</a></li>
           <li><a href="#">»</a></li>
          </ul><!-- /.pagination -->
         </div><!-- /.page -->               
          @endif
        </div><!-- /.col-lg-8 -->
        
        <div class="col-lg-4">
        
         <div class="panel user revealOnScroll" data-animation="slideInUp" data-timeout="200">
         
          
          
          <div class="list-group">
           <div class="list-group-item">&nbsp;&nbsp;&nbsp;Paid
            <span class="badge">$10K</span>
           </div><!-- /.list-group-item -->
           <div class="list-group-item">&nbsp;&nbsp;&nbsp;Feedback (4)
            <span class="badge">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
            </span>
           </div><!-- /.list-group-item -->
           <div class="list-group-item">&nbsp;&nbsp;&nbsp;Unpaid Invoices
            <span class="badge">1</span>
           </div><!-- /.list-group-item -->
           <div class="list-group-item">&nbsp;&nbsp;&nbsp;Paid Job
            <span class="badge">5</span>
           </div><!-- /.list-group-item -->
           <div class="list-group-item">&nbsp;&nbsp;&nbsp;Amount Paid Job
            <span class="badge">$10K</span>
           </div><!-- /.list-group-item -->
          </div><!-- /.list-group -->
         
         </div><!-- /.list-group-item -->
        
         <div class="list">
          <div class="list-group">
           <span class="list-group-item active cat-top">
            <em class="fa fa-fw fa-coffee"></em>&nbsp;&nbsp;&nbsp;Share This Job
           </span>
           <a href="#" class="list-group-item cat-list">
            <em class="fa fa-fw fa-facebook"></em>&nbsp;&nbsp;&nbsp;Facebook
            <span class="badge">300</span>
           </a>
           <a href="#" class="list-group-item cat-list">
            <em class="fa fa-fw fa-twitter"></em>&nbsp;&nbsp;&nbsp;Twitter
            <span class="badge">100</span>
           </a>
           <a href="#" class="list-group-item cat-list">
            <em class="fa fa-fw fa-google-plus"></em>&nbsp;&nbsp;&nbsp;Google +
            <span class="badge">100</span>
           </a>
          </div><!-- /.list-group -->
         </div><!-- /.list --> 
         
        </div><!-- /.col-lg-4 -->
        
       </div><!-- /.row-->
      </div><!-- /.container -->     
     </section><!-- /section --> 
     
    
     
     <a id="scrollup">Scroll</a>


</body>
</html>

     <!-- ==============================================
     Banner Login Section
     =============================================== -->
     <section class="banner-login">
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-sm-8" style="transform: translateY(50%);">
                                    <h3 class="panel-title">{{ $item->id }} - {{ $item->title }}</h3>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a href="{{ url('item/'.$item->id.'/edit') }}" class="btn btn-default"><i
                                                class="fa fa-pencil"></i></a>

                                    <form style="display: inline-block" action="{{ url('item/' . $item->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-item-{{ $item->id }}" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p class="small" style="margin-top: 5px">{{ $item->subtitle }}</p>

                            <p class="small">Created at: {{ $item->created_at }}, Updated at: {{ $item->updated_at  }}</p>
                            <hr>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section><!-- /section -->
   
@endsection