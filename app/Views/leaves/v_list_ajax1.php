<?= $this->extend('template/v_admin_2B') ?>
<?= $this->section('content') ?>

<!-- VARIABLES -->
<!-- ============================================================== -->
<!-- here -->

<!-- CUSTOM STYLING -->
<!-- ============================================================== -->
<style>
  .dt-responsive th, td{ 
    text-align: center; 
  }
</style>

<!-- CONTENT -->
<!-- ============================================================== -->
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2><?= $headline; ?></h2>
        <!-- <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul> -->
        <a href="<?= base_url('leaves/modify') ;?>" class="btn btn-sm btn-primary pull-right" id="btn_add">Add New</a>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">

            <div class="card-box table-responsive my-datatable">
            <!-- <p class="text-muted font-13 m-b-30 msgbox"></p> -->
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- SHOW MODAL -->
<!-- ============================================================== -->
<div class="show-modal" style="display: none;"></div>



<?= $this->endSection() ?>