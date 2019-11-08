<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/plugins/iCheck/all.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/dist/css/AdminLTE.min.css')}}">


    <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/plugins/iCheck/flat/blue.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/cd-admin/creatu/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('public/cd-admin/creatu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!-- summer Note -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">


<!-- End summer Note -->
<link rel="stylesheet" type="text/css" href="{{asset('public/cd-admin/css/adminstyle.css')}}">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
@include('admin.header.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')

  </div>
  @include('admin.footer.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('public/cd-admin/creatu/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/cd-admin/creatu/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('public/cd-admin/creatu/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

<!-- DataTables -->
<script src="{{asset('public/cd-admin/creatu/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/cd-admin/creatu/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
 <!--summerNote-->
 <script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script>
      $(document).ready(function() {
      $('#summernote').summernote();

        });
    </script>
    <script>
      $(document).ready(function() {
      $('#summernote1').summernote();

        });
    </script>
    <script>
      var count = '1000';
      $(document).ready(function() {
      for($i=0; $i < count; $i++)
      {
      $('#summernote'+$i).summernote();
      
    
    }
        });
    </script>
</script>


<!-- Morris.js charts -->
<script src="{{asset('public/cd-admin/creatu/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('public/cd-admin/creatu/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/cd-admin/creatu/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('public/cd-admin/creatu/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('public/cd-admin/creatu/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/cd-admin/creatu/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/cd-admin/creatu/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('public/cd-admin/creatu/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('public/cd-admin/creatu/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/cd-admin/creatu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('public/cd-admin/creatu/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/cd-admin/creatu/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('public/cd-admin/creatu/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('public/cd-admin/creatu/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/cd-admin/creatu/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/cd-admin/creatu/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->



<script src="{{asset('public/cd-admin/creatu/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/cd-admin/creatu/dist/js/demo.js')}}"></script>

<!-- Page Script -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

</script>
</body>
</html>
