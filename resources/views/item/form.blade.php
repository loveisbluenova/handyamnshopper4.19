
   
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
      <option value="{{$locationtype->id}}">{{$locationtype->locationtype}}</option>          
      @endforeach
     
    </select>
</div>

<div class="form-group">
    <label for="sel1">{!! Form::label('skill', 'Skill:') !!}</label>
    <select class="form-control" id="sel1" name="skill" style="display: inline;width: 215px;">
      
      <option value="">Choose...</option>
       @foreach ($skills as $skill)
          
      <option value="{{$skill->id}}">{{$skill->skill}}</option>
     
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
          
      <option value="{{$duration->id}}">{{$duration->duration}}</option>
     
      @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::label('budget', 'Budget($)') !!}
    {!! Form::text('budget', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>


@include('scripts.gmaps-address-lookup-api3')