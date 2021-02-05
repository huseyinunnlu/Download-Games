<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/admin-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="/admin-assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="/admin-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="/admin-assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/admin-assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/admin-assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/admin-assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="/adminpanel">
                <i class="fa fa-dashboard"></i><span>Home</span>
              </a>
            </li>



            <li>
              <a href="/adminpanel/settings"><i class="fa fa-gear"></i><span>Settings</span></a>
            </li>




          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <div>
       
      @yield('content')
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
      

    </div>
    <script src="/admin-assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="/admin-assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src='/admin-assets/plugins/fastclick/fastclick.min.js'></script>
    <script src="/admin-assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/admin-assets/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <script src="/admin-assets/dist/js/pages/dashboard2.js" type="text/javascript"></script>
    <script src="/admin-assets/dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>