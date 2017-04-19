
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
       <!-- Brand and toggle get grouped for better mobile display -->
       <a class="navbar-brand" style="padding-top: 0px;"" href="/"><img src="../../themes/logo2.png" class="img-responsive"></a>
       <input type="checkbox" id="toggle" />
       <label for="toggle" class="toggle"></label>

       <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="menu" style="text-align: center;">
       
          @if (Auth::guest()) 
         <li><a href="findjobs" >Jobs</a></li>
         
         
         @else
          
            @if( Auth::user()->user_type ==1)
           <li><a href="/findjobs" >Find Jobs</a></li>
            @else
             <li><a href="{{ url('/item/create') }}" >Post Jobs</a></li>
           

            @endif
          @endif

       <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Freelancers <b class="caret"></b></a>
          <ul class="dropdown-menu">
           <li><a href="services.html">Services</a></li>
           <li><a href="servicepage.html">Service Page</a></li>
           <li><a href="freelancer.html">Freelancer Profile</a></li>
          </ul>
         </li>-->

         @if (Auth::guest()) 
          
          @else
          @if( Auth::user()->user_type ==1)
            <li><a href="/providerjob/{{Auth::user()->id}}" >My Jobs</a></li>
          @else
            <li><a href="/customerjob/{{Auth::user()->id}}" >My Jobs</a></li>
         @endif
        @endif


          @if (Auth::guest()) 
         <li><a href="/howitworks" >How it works</a></li>
         
         
         @else
          <li><a href="/message/{{Auth::id()}}" >Message</a></li>
         @endif
         <li><a href="/contact" >Contact</a></li>
         {{-- Right Side Of Navbar --}}
            <ul class="nav navbar-nav navbar-right">
                {{-- Authentication Links --}}
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">{!! trans('titles.login') !!}</a></li>
                    <li><a href="/signup">{!! trans('titles.register') !!}</a></li>
                @else
                    <li class="dropdown">
                      <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-top: 10px;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>-->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-top:10px;position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:45px; height:45px; position:absolute; top:6px; left:0px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>{!! HTML::link(url('/profile/'.Auth::user()->name), trans('titles.profile')) !!}</li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {!! trans('titles.logout') !!}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
          
        </ul><!-- /.ul.menu -->
      </div><!-- /.container -->
     </nav>

     <script src="../js/jQuery-2.1.4.min.js" type="text/javascript"></script>
     <!-- Bootstrap 3.3.6 JS -->
     <script src="../js/bootstrap.min.js" type="text/javascript"></script>
     <!-- Waypoints JS -->
     <script src="../js/waypoints.min.js" type="text/javascript"></script>
     <!-- Jquery Animate Numbers -->
     <script src="../js/jquery.animateNumbers.js" type="text/javascript"></script> 
     <!-- Jquery Flexslider -->
     <script src="../js/jquery.flexslider-min.js" type="text/javascript"></script>
     <!-- Kafe Flexslider -->
     <script src="../js/kafe.flexslider.js" type="text/javascript"></script>
     <!-- Jquery Appear -->
     <script  src="../js/jquery.appear.js" type="text/javascript"></script>
     <!-- Kafe JS -->
     <script src="../js/kafe.js" type="text/javascript"></script>

     <script src="../js/custom.js" type="text/javascript"></script>
     