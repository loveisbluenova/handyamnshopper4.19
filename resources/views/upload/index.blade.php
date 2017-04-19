<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiple Upload</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      @if(Session::has('success'))
        <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
        </div>
      @endif
      <div class="form-group">
        <h2>Simple Multiple Upload</h2>
        {!! Form::open(array('url'=>'Upload/uploadFiles','method'=>'POST', 'files'=>true)) !!}
        {!! Form::file('images[]', array('multiple'=>true)) !!}
          <p>{!!$errors->first('images')!!}</p>
          @if(Session::has('error'))
            <p>{!! Session::get('error') !!}</p>
          @endif
        {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-4')) !!}
        {!! Form::close() !!}
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  </body>
</html>