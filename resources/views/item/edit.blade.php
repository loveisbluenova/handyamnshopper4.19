@extends('layouts.app')

@section('title', 'Edit item:')

@section('content')
    <header class="header-jobs" style="height: 15vh;">
      <div class="container">
       <div class="content">
        
        </div><!-- /.row -->
       </div><!-- /.content -->
      </div><!-- /.container -->
     </header><!-- /header -->
     
     <!-- ==============================================
     Banner Login Section
     =============================================== -->
     <section class="banner-login">
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Posted Job Edit</div>
                        <div class="panel-body">
                           @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            {!! Form::model($item, ['method' => 'PATCH', 'action' => ['ItemController@update', $item->id]]) !!}

                            <input type="hidden" name="user_id" id="user_id" value="{{$userId = Auth::id()}}">
                            <input type="hidden" name="state" id="state" value="1"> 
                    
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
                                  {!! Form::label('projectaddress', 'Project Address') !!}

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
                                    {!! Form::submit('Update Job', ['class' => 'btn btn-primary']) !!}
                                </div>

                                                             
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="scrollup">Scroll</a>
     </section><!-- /section -->

 

    

@endsection