
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Handymanshopper</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">




    <!-- Header -->
    @include('pages.admin.header')

    <!-- Sidebar -->
    @include('pages.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
   

<div class="content-wrapper">
    <section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            <strong>Editing Project</strong>

           

            <a href="/projects" class="btn btn-info btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              <span class="hidden-xs">Back to </span>Projects
            </a>

          </div>

          {!! Form::model($item, array('action' => array('ProjectsManagementController@update', $item->id), 'method' => 'PUT')) !!}

            {!! csrf_field() !!}

         
                        
                        <div class="panel-body">
                           @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                           

                            
                    
                             <div class="form-group">
                                    {!! Form::label('title', 'Job Title:') !!}
                                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'Job Description:') !!}
                                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                </div>



                                <div class="form-group">
                                    <label for="sel1">{!! Form::label('locationtype', 'What type of location is this?') !!}</label>
                                    <select class="form-control" id="sel1" name="locationtype" style="display: inline;width: 110px;">
                                    
                                      <option value="">Choose...</option>
                                       @foreach ($locationtypes as $locationtype)
                                          @if($item->locationtype==$locationtype->id)
                                        <option selected value="{{$locationtype->id}}">{{$locationtype->locationtype}}</option>
                                        @else
                                      <option value="{{$locationtype->id}}">{{$locationtype->locationtype}}</option>
                                        @endif
                                      @endforeach
                                     
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sel1">{!! Form::label('skill', 'Skill:') !!}</label>
                                    <select class="form-control" id="sel1" name="skill" style="display: inline;width: 215px;">
                                      
                                      <option value="">Choose...</option>
                                       @foreach ($skills as $skill)
                                          @if($item->skill==$skill->id)
                                        <option selected value="{{$skill->id}}">{{$skill->skill}}</option>
                                        @else
                                      <option value="{{$skill->id}}">{{$skill->skill}}</option>
                                        @endif
                                      @endforeach
                                    </select>
                                </div>



                                <div class="form-group">
                                      <label for="projectaddress">{!! Form::label('projectaddress', 'Project Address:') !!}</label>
                                      

                                    {!! Form::text('projectaddress', old('location'), array('id' => 'location', 'class' => 'form-control', 'placeholder' => Lang::get('profile.ph-location'))) !!}
                                   
                                        

                                </div>

                                <div class="form-group">
                                    <label for="sel1">{!! Form::label('projectduration', 'Project Duration:') !!}</label>
                                    <select class="form-control" id="sel1" name="duration" display: inline;width: 215px;">
                                      
                                      <option value="">Choose...</option>
                                       @foreach ($durations as $duration)
                                         @if($item->duration==$duration->id) 
                                         <option selected value="{{$duration->id}}">{{$duration->duration}}</option>
                                        @else
                                        <option value="{{$duration->id}}">{{$duration->duration}}</option>
                                        @endif
                                      @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('budget', 'Budget($)') !!}
                                    {!! Form::text('budget', null, ['class' => 'form-control']) !!}
                                </div>

                            

                                 <div class="form-group">
                                    <label for="sel1">{!! Form::label('jobstatus', 'Job Status:') !!}</label>
                                    <select class="form-control" id="status" name="status" display: inline;width: 215px;">
                                      
                                      <option value="">Choose...</option>
                                       @foreach ($jobstates as $jobstate)                        
                                         @if($item->state==$jobstate->id) 
                                         <option selected value="{{$jobstate->id}}">{{$jobstate->jobstate}}</option>
                                        @else
                                        <option value="{{$jobstate->id}}">{{$jobstate->jobstate}}</option>
                                        @endif
                                      @endforeach
                                    </select>
                                </div>
                                  <div class="form-group">
                                    {!! Form::submit('Update Job', ['class' => 'btn btn-primary']) !!}
                                </div>
                                                             
                            {!! Form::close() !!}
                        </div>
                    </div>




      </div>
    </div>
  </div>
</section>
</div>
 
   @include('pages.admin.footer')
 @include('scripts.delete-modal-script')
  @include('scripts.save-modal-script')
  @include('scripts.check-changed')
{!! HTML::script('//maps.googleapis.com/maps/api/js?key='.env("GOOGLEMAPS_API_KEY").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
<!-- jQuery 2.1.3 -->
<script src="../../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/app.min.js"></script>
</body>




















