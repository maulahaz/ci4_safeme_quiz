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
                <form method="post" name="frmCreate" action="<?= base_url('permit/create/'.$updateID);?>">
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="type" name="type">
                            <option value="">--Select--</option>
                            <?php $options = ['COLD'=>'Cold Permit','HOT'=>'Hot Permit','CONFINED'=>'Confined Space Entry Permit']; ?>
                            <?php foreach ($options as $key => $value) : ?>
                                <option value="<?= $key ?>" <?= isset($editData) && $editData->Type == $key ? 'selected' : null ; ?>><?= $value ?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="title" name="title" value="<?= isset($editData) ? $editData->Title : null ; ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descr" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="descr" name="descr"><?= isset($editData) ? $editData->Descr : set_value('descr', ''); ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="status" name="status">
                            <option value="">--Select--</option>
                            <?php $options = ['Draft'=>'Draft','Live'=>'Live','Closed'=>'Closed']; ?>
                            <?php foreach ($options as $key => $value) : ?>
                                <option value="<?= $key ?>" <?= isset($editData) && $editData->Status == $key ? 'selected' : null ; ?>><?= $value ?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        
                    </div>
                    <br><hr>
                    <button type="submit" class="btn btn-primary btn-sm" value="Save" id="btn_save" name="btn_save">Save</button>
                    <!-- <button type="submit" class="btn btn-secondary btn-sm" value="Cancel" id="btn_cancel" name="btn_cancel">Cancel</button> -->
                    <a href="<?=base_url(); ?>/permit/list" class="btn btn-secondary btn-sm">Cancel</a>
                </form>
            </div>
        </div>
      </div>
  </div>
</div>

<?= $this->endSection() ?>