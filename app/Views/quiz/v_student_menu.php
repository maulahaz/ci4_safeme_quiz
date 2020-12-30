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
      <?php foreach ($dtQuizMenu->getResult() as $row) :?>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
          <div class="count"><a href="<?=base_url('quiz/quiz_area/'.$row->Category); ?>">A1</a></div>
          <h3><?=$row->Category; ?></h3>
          <p>Utility and Raw Material</p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
