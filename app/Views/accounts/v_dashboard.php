<?= $this->extend('templates/v_admin_2B') ?>
<?= $this->section('content') ?>
<style>

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
                  <?php if(isset($flashMsg)): ;?>
                    <?= $flashMsg ;?>
                  <?php endif ;?>
                    <div class="card-box table-responsive">
                    <!-- <p class="text-muted font-13 m-b-30 msgbox"></p> -->
                      <h2>Welcome, Mr/Mrs. <span style="color: #000"><?= $loginID?></span> </h2>
                    </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
