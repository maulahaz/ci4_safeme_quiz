<?= $this->extend('templates/v_admin_2B') ?>
<?= $this->section('content') ?>

<style>
/* Custom style is here */
/* ****************************************************** */
</style>

<!-- Content is here -->
<!------------------------------------------------------------------------------->
<h2><?=$pageTitle;?> </h2>
<div class="row">

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
      <a href="<?=$area = 1;base_url('quiz/categ/').$area;?>">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o"></i>
        </div>
        <div class="count">1</div>

        <h3>Area-0 and 1</h3>
        <p>Utility & Raw Material</p>
      </div>
      </a>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
      <a href="<?=$area = 2;base_url('quiz/categ/').$area;?>">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o"></i>
        </div>
        <div class="count">2</div>

        <h3>Area-2</h3>
        <p>Extruder</p>
      </div>
      </a>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
        </div>
        <div class="count">3</div>

        <h3>Area-3</h3>
        <p>Soaking</p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
        </div>
        <div class="count">9</div>

        <h3>Area-9</h3>
        <p>Packaging</p>
      </div>
    </div>
</div>

<?= $this->endSection() ?>
