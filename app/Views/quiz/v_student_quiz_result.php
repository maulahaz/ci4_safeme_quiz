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
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      You're result <?=$score; ?>
    </div>
  </div>

</div>

<?= $this->endSection() ?>