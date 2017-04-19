@extends('layouts.app')
 
@section ('css')
@endsection
@section('template_title')
    Change Password
@endsection

@section('template_fastload_css')
@endsection
 
@section('content')

 <header class="header-jobs" style="height: 25vh;">
      <div class="container">
       <div class="content">
        <div class="row">
         <div class="col-lg-12">
          
          
         
        
        
         </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
       </div><!-- /.content -->
      </div><!-- /.container -->
     </header><!-- /header -->
<section class="banner-login">
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">
                @if (Session::has('success'))
                    <div class="alert alert-success">{!! Session::get('success') !!}</div>
                @endif
                @if (Session::has('failure'))
                    <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                @endif
                <form action="" method="post" role="form" class="form-horizontal">
                    {{csrf_field()}}
 
                        <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Old Password</label>
 
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="old">
 
                                @if ($errors->has('old'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
 
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
 
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
 
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
 
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
 
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary form-control">Change Password</button>
                                </div>
                        </div>
                </form>
                </div>
 
            </div>
        </div>
    </div>
</div>
</section>
@endsection
 
@section('scripts')
 
@endsection