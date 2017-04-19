

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

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
      <!-- Small boxes (Stat box) -->

    <div class="row">
        <div class="col-xs-12">
 <div class="box">
 <div class="box box-primary box-solid">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-list-alt"></i><b> Manage Projects </b></h3>
               
            </div>
            <!-- /.box-header -->

            <div class="box-body">
            
              <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                <thead>
                <tr>
                  
                  <th >Projects</th>
                  <th >User name</th>
                  <th >Project status</th>
                  <th >Accept bid</th>
                  <th >Created Date</th>
                  <th >Operation</th>
                  <th></th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                <tr>
                  
                  <td>{{$item->title}}</td>
                  <td>{{$item->name}}</td>
                  <td>
                  @if($item->state==1)
                        <span class="label label-primary">Pending</span>
                        @endif
                   @if($item->state==2)                    
                         <span class="label label-info">Runing</span>
                             @endif
                    @if($item->state==3)
                      <span class="label label-success">Completed</span>
                          @endif
                    @if($item->state==4)
                      <span class="label label-danger">Dispute</span>
                          @endif
                      </td>
                    <td>{{$item->application}}</td>
                  <td>{{$item->updated_at}}</td>
                  
                
                  <td>
                    <a class="btn btn-sm btn-info btn-block" href="{{ URL::to('projects/' . $item->id . '/edit') }}" data-toggle="tooltip" title="Edit">
                        <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Edit</span></a>
                  </td>
                  <td> {!! Form::open(array('url' => 'items/' . $item->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => 'Delete')) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Delete</span>', array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete', 'data-message' => 'Are you sure you want to delete this user ?')) !!}
                    {!! Form::close() !!}
                  </td>
                </tr>
                
                @endforeach
                </tbody>
               
             
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
        </div>
    @include('modals.modal-delete')
      <!-- /.row (main row) -->

    </section>


</div>
    <!-- Footer -->
    @include('pages.admin.footer')



<!-- REQUIRED JS SCRIPTS -->


<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
