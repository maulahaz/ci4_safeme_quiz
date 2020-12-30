<?= $this->extend('templates/v_admin_2B') ?>
<?= $this->section('content') ?>
<style>
  .dt-responsive th{ 
    text-align: center; 
  }
</style>

<div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2><?= $pageTitle; ?></h2>
            <!-- <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul> -->
            <a href="<?= base_url('keyreg/create') ;?>" class="btn btn-sm btn-primary pull-right">Add New</a>
            <a href="<?= base_url('keyreg/report') ;?>" class="btn btn-sm btn-warning pull-right">Print PDF</a>
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
                    <table id="dtbl_keyreg" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>SN</th>
                        <th>Key Type</th>
                        <th>Taken Date & Time</th>
                        <th>Taken By</th>
                        <th>Reason</th>
                        <th>Return Date & Time</th>
                        <th>Return By</th>
                        <th>Remarks</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $sn = 1;?>
                        <?php foreach($qryKeyreg as $row) : ?>
                          <tr>
                              <td class="text-center"><?= $sn++; ?></td>
                              <td><?= $row['Keyreg_type']; ?></td>
                              <td><?= get_nice_date($row['Taken_dtm'], "overtime"); ?></td>
                              <td><?= $row['Taken_by']; ?></td>
                              <td><?php echo $row['Reason']; ?></td>
                              <td><?= get_nice_date($row['Return_dtm'], "overtime"); ?></td>
                              <td><?= $row['Return_by']; ?></td>
                              <td><?php echo $row['Notes']; ?></td>
                              <td>
                                
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url(); ?>/keyreg/edit/<?php echo $row['uid']; ?>">Edit</a>
                                    <a class="dropdown-item" href="<?= base_url(); ?>/keyreg/delete/<?php echo $row['uid']; ?>" onclick="return confirm('Are you sure ?')">Delete</a>
                                    <!-- <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> -->
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
