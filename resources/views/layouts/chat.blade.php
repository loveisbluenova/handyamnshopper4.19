<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
      <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Talk Message</title>
    
    
    <link rel="stylesheet" href="{{asset('chat/css/reset.css')}}">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="{{asset('chat/css/style.css')}}">

    
    
    
  </head>
@include('partials.nav2')
  <body>

<section class="banner-login">
      <div class="container" style="padding-top: 85px;">
   @include('partials.peoplelist')
    
    <div class="chat" style=" width: 880px;">
      <div class="chat-header clearfix">
        @if(isset($user))
            <img src="{{@$user->avatar}}" alt="avatar" />
        @endif
        <div class="chat-about">
            @if(isset($user))
                <div class="chat-with">{{'Chat with ' . @$user->name}}</div>
            @else
                <div class="chat-with">No Thread Selected</div>
            @endif
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->
      
      @yield('content')
      
      <div class="chat-message clearfix">
      <form action="" method="post" id="talkSendMessage">
            <textarea name="message-data" id="message-data" placeholder ="Type your message" rows="3"></textarea>
            <input type="hidden" name="_id" value="{{@request()->route('id')}}">
            <button type="submit">Send</button>
      </form>

      </div> <!-- end chat-message -->
      
    </div> <!-- end chat -->
    
  </div> <!-- end container -->

  <script src="../js/jQuery-2.1.4.min.js" type="text/javascript"></script>
     <!-- Bootstrap 3.3.6 JS -->
     <script src="../js/bootstrap.min.js" type="text/javascript"></script>
     <!-- Waypoints JS -->

     <!-- Kafe JS -->
     <script src="../js/kafe.js" type="text/javascript"></script>

      <script>
          var __baseUrl = "{{url('/')}}"
      </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>



        <script src="{{asset('chat/js/talk.js')}}"></script>

    <script>
        var show = function(data) {
            alert(data.sender.name + " - '" + data.message + "'");
        }

        var msgshow = function(data) {
            var html = '<li id="message-' + data.id + '">' +
            '<div class="message-data">' +
            '<span class="message-data-name"> <a href="#" class="talkDeleteMessage" data-message-id="' + data.id + '" title="Delete Messag"><i class="fa fa-close" style="margin-right: 3px;"></i></a>' + data.sender.name + '</span>' +
            '<span class="message-data-time">1 Second ago</span>' +
            '</div>' +
            '<div class="message my-message">' +
            data.message +
            '</div>' +
            '</li>';

            $('#talkMessages').append(html);
        }
        $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    </script>
    {!! talk_live(['user'=>["id"=>Auth::user()->id, 'callback'=>['msgshow']]]) !!}
</section>
  </body>
</html>
