<div class="page-content">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3><?=$headline; ?> <small>Collapsed sidebar blank page</small></h3>
      </div>
      <div id="reportrange" class="range">
        <div class="visible-xs header-element-toggle"><a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a></div>
        <div class="date-range"></div>
        <span class="label label-danger">9</span>
      </div>
    </div>
    <!-- /page header -->

    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="blank_collapsed_sidebar.html">Blank pages</a></li>
        <li class="active">Collapsed sidebar</li>
      </ul>
      <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div>
      <ul class="breadcrumb-buttons collapse">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
          <div class="popup dropdown-menu dropdown-menu-right">
            <div class="popup-header"><a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a><span>Quick search</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
            <form action="#" class="breadcrumb-search">
              <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
              <div class="row">
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled" checked="checked">
                    Everywhere</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Invoices</label>
                </div>
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Users</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Orders</label>
                </div>
              </div>
              <input type="submit" class="btn btn-block btn-success" value="Search">
            </form>
          </div>
        </li>
        <li class="language dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>/t_londinium/images/flags/german.png" alt=""> <span>German</span> <b class="caret"></b></a>
          <ul class="dropdown-menu dropdown-menu-right icons-right">
            <li><a href="#"><img src="<?=base_url();?>/t_londinium/images/flags/ukrainian.png" alt=""> Ukrainian</a></li>
            <li class="active"><a href="#"><img src="<?=base_url();?>/t_londinium/images/flags/english.png" alt=""> English</a></li>
            <li><a href="#"><img src="<?=base_url();?>/t_londinium/images/flags/spanish.png" alt=""> Spanish</a></li>
            <li><a href="#"><img src="<?=base_url();?>/t_londinium/images/flags/german.png" alt=""> German</a></li>
            <li><a href="#"><img src="<?=base_url();?>/t_londinium/images/flags/hungarian.png" alt=""> Hungarian</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /breadcrumbs line -->

    <!-- Callout -->
    <div class="callout callout-danger fade in">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <h5>Collapsed sidebar blank page</h5>
      <p>Page includes minium of required code and jquery files. Can be taken as a base for integrating Londinium to your app.</p>
    </div>
    <!-- /callout -->

    <!-- Default panel -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title">Default panel</h6>
      </div>
      <div class="panel-body"><code>div class="panel panel-default"</code></div>
    </div>
    <!-- /default panel -->

    <!-- Default table -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-table2"></i> Default table</h6>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /default table -->

    <!-- Form components -->
    <form class="form-horizontal" role="form" action="#">
      <!-- Basic inputs -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-bubble4"></i> Default form elements</h6>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Default text input: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Password: </label>
            <div class="col-sm-10">
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Input with placeholder: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="placeholder">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Textarea: </label>
            <div class="col-sm-10">
              <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
            </div>
          </div>
        </div>
      </div>
      <!-- /basic inputs -->
    </form>
    <!-- /form components -->

    <!-- Footer -->
    <div class="footer clearfix">
      <div class="pull-left">&copy; 2013. Londinium Admin Template by <a href="http://themeforest.net/user/Kopyov">Eugene Kopyov</a></div>
      <div class="pull-right icons-group"> <a href="#"><i class="icon-screen2"></i></a> <a href="#"><i class="icon-balance"></i></a> <a href="#"><i class="icon-cog3"></i></a> </div>
    </div>
    <!-- /footer -->

</div>