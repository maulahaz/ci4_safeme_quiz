<?= $this->extend('templates/v_admin_2B') ?>
<?= $this->section('content') ?>

<style>
/* Custom style is here */
/* ****************************************************** */
  .dt-responsive th{ 
    text-align: center; 
  }
</style>

<!-- Content is here -->
<!------------------------------------------------------------------------------->
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
      <a href="<?= base_url('quiz/create') ;?>" class="btn btn-sm btn-primary pull-right">Add New</a>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row">
        <div class="col-sm-12">
          
          <?= view('shared/flash_message') ?>

          <div class="card-box table-responsive">
            <table id="dtbl_quiz" class="table table-striped table-bordered dt-responsive table-sm" cellspacing="0" width="100%">
              <thead>
                <tr>
                <th>No.</th>
                <th>Area</th>
                <th>Level</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Active</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $sn = 1;?>
                <?php foreach($qryData as $row) : ?>
                  <tr>
                      <td class="text-center"><?= $sn++; ?></td>
                      <td class="text-center"><?= $row['Category']; ?></td>
                      <td class="text-center"><?= $row['Quiz_level']; ?></td>
                      <td><?= $row['Question']; ?></td>
                      <td><?= $row['Answer']; ?></td>
                      <td class="text-center"><?= $row['isActive']; ?></td>
                      <td>
                        
                        <div class="btn-group">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url(); ?>/quiz/create/<?=$row['Quest_id']; ?>">Edit</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>/quiz/delete/<?=$row['Quest_id']; ?>" onclick="return confirm('Are you sure ?')">Delete</a>
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

<?= $this->endSection() ?>
