<?= $this->extend('templates/v_admin_2B') ?>
<?= $this->section('content') ?>
<?php $frmActChangepass = base_url('accounts/changepass'); ?>
<style>
    .errors{color: red;}
    .errors li{list-style-type: none;}
</style>

<div class="col-md-7 col-sm-7 ">
  <div class="x_panel">
    <div class="x_title">
            <h2><?= $pageTitle; ?></h2>
            <!-- <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul> -->
        <div class="clearfix"></div>
    </div>
      <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
            <?php if(isset($flashMsg)): ;?>
              <?= $flashMsg ;?>
            <?php endif ;?>
            <?php if(isset($errorMsg)): ;?>
                <!-- <?//implode('--', $errorMsg) ;?> -->
                <?= $errorMsg ;?>
            <?php endif ;?>
              <!-- <p class="text-muted font-13 m-b-30 msgbox"></p> -->
                <form method="post" name="frmChangepass" action="<?= $frmActChangepass ;?>">
                    <div class="form-group row">
                        <label for="usr_id" class="col-sm-3 col-form-label">User ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="usr_id" name="usr_id" value="<?=$qryPrivacy['Usr_id'] ?>" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="old_pwd" class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="old_pwd" name="old_pwd">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label usr="usr_pwd" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="usr_pwd" name="usr_pwd">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label usr="usr_pwd2" class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="usr_pwd2" name="usr_pwd2">
                        </div>
                    </div>                   
                    <br><hr>
                    <button type="submit" class="btn btn-primary btn-sm" value="Save" id="btn_create" name="btn_create">Save</button>
                    <!-- <button type="submit" class="btn btn-secondary btn-sm" value="Cancel" id="btn_cancel" name="btn_cancel">Cancel</button> -->
                    <a href="<?=base_url(); ?>/accounts/dashboard" class="btn btn-secondary btn-sm">Back</a>
                </form>
            </div>
        </div>
      </div>
  </div>
</div>

<?= $this->endSection() ?>