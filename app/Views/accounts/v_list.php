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
            <a href="<?= base_url('accounts/create') ;?>" class="btn btn-sm btn-primary pull-right">Create Account</a>
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
                    <table id="dtbl_accounts" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <!-- <th>SN</th> -->
                        <th>Photo</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $sn = 1;?>
                        <?php foreach($qryAccounts as $row) : ?>
                          <tr>
                              <!-- <td><?= $sn++; ?></td> -->
                              <td class="text-center"><img src="<?= ($row['Photo'] != null) ? $row['Photo'] : base_url('images/noimage.jpg') ; ?>" class="img-fluid" width="100px"></td>
                              <td><?= $row['Usr_id']; ?></td>
                              <td><?= $row['Name']; ?></td>
                              <td><?= $row['Email']; ?></td>
                              <td><?= $row['Address']; ?></td>
                              <td><?= $row['Phone1']."--".$row['Phone2']; ?></td>
                              <td>
                                
                                <div class="btn-group">
                                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url(); ?>/accounts/edit/<?php echo $row['uid']; ?>">Edit</a>
                                    <a class="dropdown-item" href="<?= base_url(); ?>/accounts/delete/<?php echo $row['uid']; ?>">Delete</a>
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
