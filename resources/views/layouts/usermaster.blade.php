<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/plugins/images/favicon.png">
    <title>User</title>
    <!-- Bootstrap Core CSS -->
    <link href="admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
   \
    <!-- morris CSS -->
    <link href="admin/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="admin/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="admin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="admin/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="admin/css/bootstrap-table.min.css" rel="stylesheet">
<![endif]-->

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="css/quiz.css" rel="stylesheet">
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    
                        <!-- Logo icon image, you can use font-icon also -->
                        <!--This is dark logo icon--><!--This is light logo icon-->
                    
                        <!-- Logo text image you can use text also -->
                        <!--This is dark logo text--><!--This is light logo text-->
                       
                    
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                   
                    <li>
                  
                        
                        @if(isset(Auth::user()->id))  
                        @php
                        $photo=Auth::user()->photo;
                        @endphp       
                        <a class="profile-pic" href="#"> <img src="{{asset('profilephoto/'."$photo")}}" style="object-fit:cover;" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name}}</b></a>
                     @endif
                       
                       
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{ route('userhome') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{ route('user.userprofile') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Update profile</a>
                    </li>
                    <li>
                        <a href="{{ route('user.quiz') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Quiz</a>
                    </li>
                    
                    <li>
                        <a href="{{ route('user.complaint') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Make complaint</a>
                    </li>
                    <li>
                
                        <a href="{{ route('user.viewcomplaint') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>View Complaints</a>
                    </li>
                    <li>
                        <a href="{{ route('user.changepassword') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Change Password</a>
                    </li>
                    
                    <li><a href="{{ route('logout') }}" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>

                   

                </ul>
                
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        @yield('content')

        <footer class="footer text-center"> 2023 &copy;</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <script src="js/bootsrap.min.js"></script>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="admin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="admin/js/waves.js"></script>
    <!--Counter js -->
    <script src="admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="admin/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="admin/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="admin/js/custom.min.js"></script>
    <script src="admin/js/dashboard1.js"></script>
    <script src="admin/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- DataTables -->
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--<script>
        // Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging": false // false to disable pagination (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
});
    </script>
-->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

$.ajax({
           url: 'getquiz',
           type: 'get',
           dataType: 'json',
           success: function(response){
 
              //createRows(response);
            alert(response);
           }
         });pt>
         </script>
</body>

</html>
