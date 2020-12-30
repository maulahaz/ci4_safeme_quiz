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
            <a href="<?= base_url('permit/create') ;?>" class="btn btn-sm btn-primary pull-right">Add New</a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">

                  <?= view('shared/flash_message') ?>

                    <div class="card-box table-responsive">
                    <!-- <p class="text-muted font-13 m-b-30 msgbox"></p> -->
                    <table id="dtbl_permit" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>SN</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Issuer</th>
                        <th>Receiver</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $sn = 1;?>
                        <?php foreach($dtPermits as $row) : ?>
                        <tr>
                          <td><?= $sn++; ?></td>
                          <td><?= $row->Type; ?></td>
                          <td><?= $row->Date; ?></td>
                          <td><?= $row->Title; ?></td>
                          <td><?= $row->Descr; ?></td>
                          <td><?= $row->Issuer; ?></td>
                          <td><?= $row->Receiver; ?></td>
                          <td><?= $row->Status; ?></td>
                          <td>
                            <a href="<?=base_url().'/permit/create/'.$row->uid; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?=base_url().'/permit/delete/'.$row->uid; ?>" class="btn btn-danger btn-sm">Delete</a>
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
