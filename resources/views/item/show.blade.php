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
     <header class="header-jobpost" style="height: 250px;">
      <div class="container">
         <div class="content">
          <div class="row">
             <div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-6 col-xs-12 animations fade-left d2">
             @if(Auth::user()->user_type==1)
          
                @if($bid_userids==1)
                  <button type="button" class="btn  kafe-btn-mint full-width revealOnScroll disabled" data-animation="bounceIn" data-timeout="400" style="color: #868585;margin-top: 45px;height: 50px;"><i class="fa fa-star"></i> Submitted Proposal</a>
                @else
                 <a href="/proposal/{{$item->id}}" class="kafe-btn kafe-btn-mint full-width revealOnScroll" data-animation="bounceIn" data-timeout="400" style="margin-top: 45px;"><i class="fa fa-star"></i> Submit A Proposal</a>
                @endif
           

             @endif
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
                                         
          
           <h4 style="font-size: 30px;">{{ $item->id }}-{{ $item->title }}</h4>
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
           <p>{{$bid_userids}}</p>
          </div><!-- /.col-lg-3 -->

          <div class="col-lg-12">
           <h5> Project Address </h5>
           <p><i class="fa fa-map-marker"></i> {{ $item->projectaddress }}</p>
         
           
         </div><!-- /.col-lg-3 -->

          <div class="col-lg-12">
           <hr class="small-hr">
          </div> <!-- /.col-lg-12 -->
         
          
         <div class="post-bottom-sec col-lg-9"> 
          <h4>Job Description</h4>
          <p>{{$item->description}}</p>
        
          <h4>Skills</h4>
          @foreach ($skills as $skill)
              @if($item->skill==$skill->id)
                <span class="label label-success">{{$skill->skill}}</span>
        
            @endif
            @endforeach
         </div><!-- /.row -->
           
            
         </div><!-- /.post-bottom-sec --> <br>
       

         @if(Auth::user()->user_type==2)
       
         <h4>Proposals</h4>
        @foreach ($proposals as $proposal)
        
         <div class="job">  
          
          <div class="row top-sec">
           <div class="col-lg-9">
            <div class="col-lg-2 col-xs-12">
             <a href="freelancer.html">
              <img class="img-responsive" src="/uploads/avatars/{{$proposal->avatar}}" alt="">
             </a>
            </div><!-- /.col-lg-2 -->
            <div class="col-lg-7 col-xs-12"> 
             <h4><a href="freelancer.html">{{$proposal->first_name}} {{$proposal->last_name}}</a></h4>
             <h5><i class="fa fa-at"></i> KenChicharito{{Auth::user()->id}}</h5>
             
            </div><!-- /.col-lg-10 -->
            
           </div><!-- /.col-lg-12 -->
           <div class="col-lg-3">
             <a href="servicepage.html" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-align-right"></i> Send Proposal</a>
            <br>
            <br>
              <a href="{{route('message.read', ['id'=>$proposal->id])}}" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-align-right"></i> Send Message </a>
            </div>
          </div><!-- /.row -->
      
          <div class="row mid-sec">          
           <div class="col-lg-12">           
           <div class="col-lg-12">
            <hr class="small-hr">
            <p>{{$proposal->bid_content}}</p>
          </div><!-- /.col-lg-12 -->
           </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
      
          <div class="row bottom-sec">
           <div class="col-lg-12">
            
            <div class="col-lg-12">
             <hr class="small-hr">
            </div> 
            
            <div class="col-lg-4">
             <h5> Posted </h5>
             <p> {{$proposal->updated_at}}</p>
            </div>
            <div class="col-lg-4">
             <h5> Location </h5>
             <p><i class="fa fa-map-marker"></i> {{$proposal->location}}</p>
            </div>
            <div class="col-lg-4">
             <h5> Job Success </h5>
             <p style="margin-bottom: 0;">95%</p>
             <p><i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i></p>
            </div>
            
                       
           </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
         
         </div><!-- /.job -->
        @endforeach
        
         
        <div class="page text-center">
          <ul class="pagination">
            
             {{ $proposals->links() }}
            
          </ul><!-- /.pagination -->
         </div><!-- /.page --> 
          @endif  

   @foreach ($proposals as $proposal)
       @if(Auth::user()->user_type==1)
       
     
        @if($proposal->user_id==Auth::user()->id)
         <div class="job">  
          
    <h4>My Proposal</h4>

      
          <div class="row ">          
           <div class="col-lg-12">           
           
            <hr class="small-hr">
            <p>{{$proposal->bid_content}}</p>
       
           </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
      
          <div class="row bottom-sec">
           <div class="col-lg-12">
            
            <div class="col-lg-12">
             <hr class="small-hr">
            </div> 
            
            <div class="col-lg-4">
             <h5> Posted </h5>
             <p> {{$proposal->updated_at}}</p>
            </div>
            <div class="col-lg-4">
             <h5> Location </h5>
             <p><i class="fa fa-map-marker"></i> {{$proposal->location}}</p>
            </div>
            <div class="col-lg-4">
             <h5> Job Success </h5>
             <p style="margin-bottom: 0;">95%</p>
             <p><i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i></p>
            </div>
            
                       
           </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
         
         </div><!-- /.job -->
         @endif
       
      @endif     
       @endforeach   
        </div><!-- /.col-lg-8 -->
        
        <div class="col-lg-4">
        
         <div class="panel user revealOnScroll" data-animation="slideInUp" data-timeout="200">
         
          
          <div class="list" style="padding: 0;">
          <div class="list-group" style="margin-bottom: 0;">
          <span class="list-group-item active cat-top">
            <em class="fa fa-fw fa-coffee"></em>&nbsp;&nbsp;&nbsp;My Job State
           </span>
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
        
          
         
        </div><!-- /.col-lg-4 -->
        
       </div><!-- /.row-->
      </div><!-- /.container -->     
     </section><!-- /section --> 
     
    
     
     <a id="scrollup">Scroll</a>


</body>


     <!-- ==============================================
     Banner Login Section
     =============================================== -->
   <!--  <section class="banner-login">
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