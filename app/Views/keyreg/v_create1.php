<style>
    .errors{
        color: red;
    }
</style>

<!-- Begin Page Content -->
<!-- <div class="container min_height8"> -->

<!-- Page Heading -->
<!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->

<!-- </div> -->
<!-- /.container-fluid -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $pageTitle; ?></h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add New</a> -->
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $pageTitle; ?></h6>
            <?php if(isset($errorMsg)): ;?>
                <?= implode('--', $errorMsg) ;?>
            <?php endif ;?>
        </div>
        <div class="card-body col-lg-10">
        <form method="post" name="frmCreate" action="<?= base_url('keyreg/save');?>">
            <div class="form-group row">
                <div class="col-sm-2">Key</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="kr_type[]" value="MOS">
                        MOS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="kr_type[]" value="Engineer">
                        <label class="form-check-label">
                        Engineer Key
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="kr_type[]" value="Other">
                        <label class="form-check-label">
                        Other
                        </label>
                    </div>
                </div>             
            </div>
            <div class="form-group row">
                <label for="taken_date" class="col-sm-2 col-form-label">Taken date/time</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="taken_date" name="taken_date">
                </div>
                <div class="col-sm-2">
                    <input type="time" class="form-control" id="taken_time" name="taken_time">
                </div>
            </div>
            <div class="form-group row">
                <label for="taken_by" class="col-sm-2 col-form-label">Taken by</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="taken_by" name="taken_by" value="">
                </div>
                
            </div>
            <div class="form-group row">
                <label for="reason" class="col-sm-2 col-form-label">Reason</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="reason" name="reason">
                </div>
            </div>
            <div class="form-group row">
                <label for="return_date" class="col-sm-2 col-form-label">Return date/time</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="return_date" name="return_date">
                </div>
                <div class="col-sm-2">
                    <input type="time" class="form-control" id="return_time" name="return_time">
                </div>
            </div>
            <div class="form-group row">
                <label for="return_by" class="col-sm-2 col-form-label">Return by</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="return_by" name="return_by">
                </div>
            </div>
            <div class="form-group row">
                <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="notes" name="notes">
                </div>
            </div>
            <br><hr>
            <button type="submit" class="btn btn-primary btn-sm" value="Save" id="btn_create" name="btn_create">Save</button>
            <!-- <button type="submit" class="btn btn-secondary btn-sm" value="Cancel" id="btn_cancel" name="btn_cancel">Cancel</button> -->
            <a href="<?=base_url(); ?>/keyreg/list" class="btn btn-secondary btn-sm">Back</a>
        </form>
        </div>
    </div>

</div>