<?= $this->extend('templates/v_admin_2B') ?>
<?= $this->section('content') ?>
<style>
/* custom style */
</style>

<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
            <h2><?= $pageTitle; ?></h2>

        <div class="clearfix"></div>
    </div>
      <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
                
            <?= view('shared/flash_message') ?>

              <!-- <p class="text-muted font-13 m-b-30 msgbox"></p> -->
                <form method="post" name="frmCreate" action="<?= base_url('quiz/create/'.$updateID);?>">
                    <div class="form-group row">
                        <label for="area" class="col-sm-2 col-form-label">Area</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="area" name="area">
                            <option value="">--Select--</option>
                            <?php $options = ['Area-1'=>'Area-1','Area-2'=>'Area-2','Area-3'=>'Area-3','Area-9'=>'Area-9']; ?>
                            <?php foreach ($options as $key => $value) : ?>
                                <option value="<?= $key ?>" <?= isset($editData) && $editData['Category'] == $key ? 'selected' : null ; ?>><?= $value ?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="level" name="level">
                            <option value="">--Select--</option>
                            <?php $options = ['1'=>'Beginner','2'=>'Intermediate','3'=>'Advance']; ?>
                            <?php foreach ($options as $key => $value) : ?>
                                <option value="<?= $key ?>" <?= isset($editData) && $editData['Quiz_level'] == $key ? 'selected' : null ; ?>><?= $value ?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="question" class="col-sm-2 col-form-label">Question</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="question" name="question"><?= isset($editData) ? $editData['Question'] : set_value('question', ''); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="answer" class="col-sm-2 col-form-label">Answer</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="answer" name="answer"><?= isset($editData) ? $editData['Answer'] : null; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="is_active" class="col-sm-2 col-form-label">Is Active</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="is_active" name="is_active">
                            <option value="">--Select--</option>
                            <?php $options = [0=>'No',1=>'Yes']; ?>
                            <?php foreach ($options as $key => $value) : ?>
                                <option value="<?= $key ?>" <?= isset($editData) && $editData['isActive'] == $key ? 'selected' : null ; ?>><?= $value ?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        
                    </div>
                    <br><hr>
                    <button type="submit" class="btn btn-primary btn-sm" value="Save" id="btn_save" name="btn_save">Save</button>
                    <!-- <button type="submit" class="btn btn-secondary btn-sm" value="Cancel" id="btn_cancel" name="btn_cancel">Cancel</button> -->
                    <a href="<?=base_url(); ?>/quiz/manage" class="btn btn-secondary btn-sm">Cancel</a>
                </form>
            </div>
        </div>
      </div>
  </div>
</div>

<?= $this->endSection() ?>