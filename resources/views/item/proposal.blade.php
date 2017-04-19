@extends('layouts.app')

@section('title', 'Create proposal:')

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
                <div class="panel-heading">Submit A Proposal</div>
                <div class="panel-body">
                    @if(Session::has('success'))
                        <div class="alert-box success">
                        <h2>{!! Session::get('success') !!}</h2>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    {!! Form::open(['url' => 'bid']) !!}

                   
                    
                    
                  
                    <input type="hidden" name="user_id" id="user_id" value="{{$userId = Auth::id()}}">

                    <input type="hidden" name="pro_no" id="pro_no" value="{{$pro_no}}">
                   
                    <input type="hidden" name="state" id="state" value="1">

                    <input type="hidden" name="active" id="active" value="1">  
                   
                    <div class="form-group">
                        {!! Form::label('bid_content', 'Cover Letter') !!}
                        {!! Form::textarea('bid_content', null, ['class' => 'form-control']) !!}
                    </div>
                                       
                    <div class="form-group">
                        {!! Form::submit('Submit Proposal', ['class' => 'btn btn-primary']) !!}
                    </div>
                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
     </section><!-- /section -->
 <a id="scrollup">Scroll</a>
    

@endsection