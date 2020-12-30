<div id="my_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">

	    <div class="modal-header">
	      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
	      </button>
	    </div>
	    <form id="my_form" action="action" method="post">
	    <div class="modal-body">
	      	<div class="form-group row">
                <label for="leave_from" class="col-sm-2 col-form-label">Leave From</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="leave_from" name="leave_from" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="leave_until" class="col-sm-2 col-form-label">Leave Until</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="leave_until" name="leave_until" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="leave_type" class="col-sm-2 col-form-label">Leave Type</label>
                <div class="col-sm-10">
                	<select name="leave_type" id="leave_type" class="form-control">
                		<option value="">--SELECT--</option>
                		<option value="annual">Annual Leave</option>
                		<option value="sick">Sick Leave</option>
                		<option value="maternity">Maternity Leave</option>
                		<option value="hajj">Hajj Leave</option>
                	</select>
                    <!-- <input type="text" class="form-control" id="leave_type" name="leave_type" value=""> -->
                </div>
            </div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary btn-save">Save</button>
	    </div>
	    </form>
	  </div>
	</div>
</div>

<script>
	$('#my_form').on('submit', function(e){
		e.preventDefault();
		// alert(1);
		// if($('#my_form').parsley().isValid()){
		// 	save();
		// }
		saveData();
	});

	
  
</script>