<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/t_gentelella/production/images/favicon.ico" type="image/ico" />

    <title><?= $title ;?></title>

    <!-- Bootstrap -->
    <link href="/t_gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/t_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/t_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/t_gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	  <!-- Datatables -->
    
    <link href="/t_gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/t_gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/t_gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/t_gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/t_gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/t_gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/t_gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/t_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="/t_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/t_gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-arrows-alt"></i> <span>SmartXL</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/t_gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $loginID; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">              
                  <li><a><i class="fa fa-table"></i> Etask <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/etasklist">Etask List</a></li>
                      <li><a href="/etask2/assign">Assign</a></li>
                      <li><a href="/etask2/planning">Planning</a></li>
                      <li><a href="/etask2/report">Report</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Account <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/">Profile</a></li>
                      <li><a href="/">Privacy</a></li>
                      <li><a href="/">Signout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="/t_gentelella/production/images/img.jpg" alt=""><?= $loginID; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="/accounts/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
            <?php if(isset($viewFile)){ echo view($viewFile); } ?>
          <!-- /top tiles -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/t_gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/t_gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/t_gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/t_gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/t_gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/t_gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/t_gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/t_gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/t_gentelella/vendors/skycons/skycons.js"></script>
    <!-- Datatables -->
    <script src="/t_gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/t_gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/t_gentelella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/t_gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/t_gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Flot -->
    <script src="/t_gentelella/vendors/Flot/jquery.flot.js"></script>
    <script src="/t_gentelella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/t_gentelella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/t_gentelella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/t_gentelella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/t_gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/t_gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/t_gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/t_gentelella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/t_gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/t_gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/t_gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/t_gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="/t_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="/t_gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/t_gentelella/build/js/custom.min.js"></script>

    <?php if(isset($jsfile)){ echo view($jsfile); } ?>
	
  </body>
</html>
