
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Handymanshopper</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="../../../dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
  <style type="text/css" media="screen">
    .user-table {
        border: 0;
    }
    .user-table tr th {
        border: 0 !important;
    }
    .user-table tr th:first-child,
    .user-table tr td:first-child {
        padding-left: 15px;
    }
    .user-table tr th:last-child,
    .user-table tr td:last-child {
        padding-right: 15px;
    }
    .user-table .table-responsive,
    .user-table .table-responsive table {
        margin-bottom: 0;
        border-top: 0;
        border-left: 0;
        border-right: 0;
    }
  </style>
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
      <div class="col-md-12">

        <div class="panel panel-default">
          <div class="panel-heading">

            {{ $user->name }}'s Information

            <a href="/users/" class="btn btn-primary btn-xs pull-right">
              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
              Back to Users
            </a>

          </div>
          <div class="panel-body no-padding user-table table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>User Type</th>
                      <th>Created</th>
                      <th>Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="vertical-align: middle;">
                            {{ $user->id }}
                        </td>
                        <td style="vertical-align: middle;">
                            {{ $user->name }}
                        </td>
                        <td style="vertical-align: middle;">
                            {{ $user->first_name }}
                        </td>
                        <td style="vertical-align: middle;">
                            {{ $user->last_name }}
                        </td>
                        <td style="vertical-align: middle;">
                          <a href="mailto:{{ $user->email }}" title="email {{ $user->email }}">{{ $user->email }}</a>
                        </td>
                        <td>
                            @foreach ($user->roles as $user_role)

                                @if ($user_role->name == 'User')
                                    @php $labelClass = 'primary' @endphp

                                @elseif ($user_role->name == 'Admin')
                                    @php $labelClass = 'warning' @endphp

                                @elseif ($user_role->name == 'Unverified')
                                    @php $labelClass = 'danger' @endphp

                                @else
                                    @php $labelClass = 'default' @endphp

                                @endif

                                <span class="label label-{{$labelClass}}">{{ $user_role->name }}</span>

                            @endforeach
                        </td>
                        <td style="vertical-align: middle;">
                            {{ $user->created_at }}
                        </td>
                        <td style="vertical-align: middle;">
                            {{ $user->updated_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-xs-6">
                <a href="/users/{{$user->id}}/edit" class="btn btn-small btn-info btn-block">
                  <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> Edit<span class="hidden-xs hidden-sm"> this</span><span class="hidden-xs"> User</span>
                </a>
              </div>
             
              {!! Form::close() !!}
            </div>
          </div>
         
         
        </div>
      </div>
    </div>
  </div>
  @include('modals.modal-delete')
  </section>
  </div>
   @include('scripts.delete-modal-script')
   {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.env("GOOGLEMAPS_API_KEY").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
   <script src="../../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/app.min.js"></script>
  </body>

 






 
