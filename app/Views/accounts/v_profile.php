<?= $this->extend('templates/v_admin_2B') ?>
<?= $this->section('content') ?>
<?php $frmAction = base_url('accounts/profile'); ?>
<style>
/* custom style */
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
        <div class="clearfix"></div>
    </div>
      <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
            <?= view('shared/flash_message') ?>
            <?php if(isset($flashMsg)): ;?>
              <?= $flashMsg ;?>
            <?php endif ;?>
            <?php if(isset($errorMsg)): ;?>
                <?= implode('--', $errorMsg) ;?>
            <?php endif ;?>
              <!-- <p class="text-muted font-13 m-b-30 msgbox"></p> -->
                <form method="post" name="frmModify" action="<?= $frmAction ;?>">
                    <div class="form-group row">
                        <label for="user_id" class="col-sm-2 col-form-label">User ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="user_id" name="user_id" value="<?=$qryProfile['Usr_id'] ?>" disabled>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" value="<?=$qryProfile['Name'] ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nickname" class="col-sm-2 col-form-label">Nickname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nickname" name="nickname" value="<?=$qryProfile['Nickname'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birth_date" class="col-sm-2 col-form-label">Birth Date</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control myDatepicker" id="birth_date" name="birth_date" value="<?=$qryProfile['Birth_dt'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" value="<?=$qryProfile['Email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone1" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone1" name="phone1" value="<?=$qryProfile['Phone1'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone2" class="col-sm-2 col-form-label">Other Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone2" name="phone2" value="<?=$qryProfile['Phone2'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" value="<?=$qryProfile['Address'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>
                    <br><hr>
                    <input type="hidden" id="uid" name="uid" value="<?=$qryProfile['uid'] ?>">
                    <button type="submit" class="btn btn-primary btn-sm" value="Update" id="btn_submit" name="btn_submit">Update</button>
                    <a href="<?=base_url(); ?>/accounts/dashboard" class="btn btn-secondary btn-sm">Back</a>
                </form>
            </div>
        </div>
      </div>
  </div>
</div>

<?= $this->endSection() ?>