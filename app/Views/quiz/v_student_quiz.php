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
      <?php $actionLink =  base_url('quiz/result');?>
      <?php $sn = 1;?>
      <?= form_open($actionLink); ?>
      <?php foreach ($dtQuiz->getResult() as $row) :?>

        <div class="card" style="margin-bottom: 10px;">
          <!-- Question -->
          <div class="card-header">
            <?= $sn++; ?>. <?= $row->Question; ?>
            <input type="hidden" name="question_id[]" value="<?= $row->Quest_id; ?>">
            <div class="qid pull-right"><small>( qid#:<?= $row->Quest_id; ?>)</small></div>
          </div>

          <!-- Answer Options -->
          <ul class="list-group list-group-flush">
            <?php foreach ($dtOpt->getResult() as $rowOpt) :?>

              <?php if ($rowOpt->Quest_id == $row->Quest_id) :?>
              <?php $quiz_type =  $row->Type;?>
              <?php if($quiz_type == 'MultiAnswer'): ?>  
              <li class="list-group-item">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="flat" name="answer_qid_<?= $row->Quest_id; ?>[]" value="<?= $rowOpt->Opt_title; ?>"> <?= $rowOpt->Opt_title; ?>
                  </label>
                </div>
              </li>
              <?php elseif($quiz_type == 'MultiOption'):?>
              <li class="list-group-item">
                <div class="radio">
                  <label>
                    <input type="radio" class="flat" name="answer_qid_<?= $row->Quest_id; ?>" value="<?= $rowOpt->Opt_title; ?>"> <?= $rowOpt->Opt_title; ?>
                  </label>
                </div>
              </li>

              <?php endif; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>

        </div>

      <?php endforeach; ?>
      <div class="form-group">
          <button type="submit" class="btn btn-primary" name="btn_submit" value="Cancel">Cancel</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          <button type="submit" class="btn btn-success" name="btn_submit" value="Submit">Submit</button>
      </div>    
      <?= form_close(); ?>
    </div>
  </div>

</div>

<?= $this->endSection() ?>