<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Jeremy Kenedy">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta charset="utf-8">
        <title>The Kafe - Ultimate Freelance Marketplace Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Add your business website description here">
        <meta name="keywords" content="Add your, business, website, keywords, here">
        <meta name="author" content="Add your business, website, author here">
        
        <!-- ==============================================
        Favicons
        =============================================== --> 
        <link rel="shortcut icon" href="img/favicons/favicon.ico">
        <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
        
        <!-- ==============================================
        CSS
        =============================================== -->
        <!-- Style-->
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
                
        <!-- ==============================================
        Feauture Detection
        =============================================== -->
        <script src="../../js/modernizr-custom.js"></script>

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        @yield('template_linked_fonts')

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
       <!-- <link href="../css/custom.css" rel="stylesheet" type="text/css" />-->

        @yield('template_linked_css')

        <style type="text/css">
            @yield('template_fastload_css')

        </style>

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        @yield('head')
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

   
     