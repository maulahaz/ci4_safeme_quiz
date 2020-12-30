
<?= $this->extend('template/v_admin_2B') ?>
<?= $this->section('content') ?>

<!-- VARIABLES -->
<!-- ============================================================== -->

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
            <a href="<?= base_url('leave/modify') ;?>" class="btn btn-sm btn-primary pull-right">Add New</a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                  <?php if(isset($flashMsg)): ;?>
                    <?= $flashMsg ;?>
                  <?php endif ;?>
                    <div class="card-box table-responsive">
                    <!-- <p class="text-muted font-13 m-b-30 msgbox"></p> -->
                    <table id="my_table" class="table table-sm table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>From date</th>
                          <th>Until date</th>
                          <th>Leave Type</th>
                          <th>Notes</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $sn = 1;?>
                        <?php foreach($qry as $row) : ?>
                          <tr>
                              <td class="text-center"><?= $sn++; ?></td>
                              <td><?= get_nice_date($row['From_dt'], "mydate"); ?></td>
                              <td><?= get_nice_date($row['Until_dt'], "mydate"); ?></td>
                              <td><?= $row['Type']; ?></td>
                              <td><?= $row['Notes']; ?></td>
                              <td>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url(); ?>/leaves/edit/<?= $row['uid']; ?>">Edit</a>
                                    <a class="dropdown-item" href="<?= base_url(); ?>/leaves/delete/<?= $row['uid']; ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                                  </div>
                                </div>
                              </td>
                          </tr>
                          <?php endforeach; ?>  
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<!-- SHOW MODAL -->
<!-- ============================================================== -->
<?php if(isset($showModal)){ $this->load->view($showModal); } ?>