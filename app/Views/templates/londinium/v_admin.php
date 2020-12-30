<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$title;?></title>
<link href="<?=base_url();?>/t_londinium/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>/t_londinium/css/londinium-theme.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>/t_londinium/css/styles.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>/t_londinium/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?=base_url();?>/t_londinium/js/main.js" charset="UTF-8"></script><script type="text/javascript" src="<?=base_url();?>/t_londinium/js/jQuery v1.10.1.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>/t_londinium/js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>/t_londinium/js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="<?=base_url();?>/t_londinium/js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>/t_londinium/js/plugins/interface/collapsible.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>/t_londinium/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>/t_londinium/js/application_blank.js"></script>
</head>
<body class="sidebar-wide">
<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header"><a class="navbar-brand" href="#"><img src="<?=base_url();?>/t_londinium/images/logo.png" alt="Londinium"></a><a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons"><span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i></button>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar"><span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i></button>
  </div>
  <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">

    <li class="user dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>/t_londinium/images/demo/users/face1.png" alt=""><span>Eugene Kopyov</span><i class="caret"></i></a>
      <ul class="dropdown-menu dropdown-menu-right icons-right">
        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
        <li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
        <li><a href="#"><i class="icon-exit"></i> Logout</a></li>
      </ul>
    </li>
    
  </ul>
</div>
<!-- /navbar -->
<!-- Page container -->
<div class="page-container sidebar-hidden">
  <!-- Sidebar -->
  <div class="sidebar collapse">
    <div class="sidebar-content">
      <!-- User dropdown -->
      <div class="user-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>/t_londinium/images/demo/users/face3.png" alt="">
        <div class="user-info">Madison Gartner <span>Web Developer</span></div>
        </a>
        <div class="popup dropdown-menu dropdown-menu-right">
          <div class="thumbnail">
            <div class="thumb"><img alt="" src="<?=base_url();?>/t_londinium/images/demo/users/face3.png">
              <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a><a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a></span></div>
            </div>
            <div class="caption text-center">
              <h6>Madison Gartner <small>Front end developer</small></h6>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>
            <li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>
            <li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>
            <li class="list-group-item"><i class="icon-stack text-muted"></i> Balance
              <h5 class="pull-right text-danger">$45.389</h5>
            </li>
          </ul>
        </div>
      </div>
      <!-- /user dropdown -->
      <!-- Main navigation -->
      <ul class="navigation">
        <li><a href="index.html"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
        <li class="active"><a href="#" class="expand" id="second-level"><span>Blank pages</span> <i class="icon-insert-template"></i></a>
          <ul>
            <li><a href="blank_left_sidebar.html">Left sidebar</a></li>
            <li><a href="blank_right_sidebar.html">Right sidebar</a></li>
            <li><a href="blank_narrow_sidebar.html">Narrow sidebar</a></li>
            <li class="active"><a href="blank_collapsed_sidebar.html">Collapsed sidebar</a></li>
            <li><a href="blank_full_width.html">Full width page</a></li>
          </ul>
        </li>
        <li><a href="#" class="expand"><span>Navigation levels</span> <i class="icon-stack"></i></a>
          <ul>
            <li><a href="#">Second level first item</a></li>
            <li><a href="#" class="expand">Second level second item</a>
              <ul>
                <li><a href="#">Third level first item</a></li>
                <li><a href="#">Third level second item</a></li>
                <li><a href="#" class="expand">Third level third item</a>
                  <ul>
                    <li><a href="#">Fourth level first item</a></li>
                    <li><a href="#">Fourth level second item</a></li>
                    <li><a href="#">Fourth level third item</a></li>
                  </ul>
                </li>
                <li><a href="#">Third level second item</a></li>
              </ul>
            </li>
            <li><a href="#">Second level third item</a></li>
          </ul>
        </li>
      </ul>
      <!-- /main navigation -->
    </div>
  </div>
  <!-- /sidebar -->

  <!-- Page content -->
  <?php if($viewFile){ echo view($viewFile); } ?>
  <!-- /page content -->

</div>
<!-- /content -->

<!-- JAVASCRIPT -->
<?php 
  if(isset($jsFile)){ echo view($jsFile); }
?>
</body>
</html>