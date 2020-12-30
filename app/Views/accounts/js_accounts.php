<script>
// alert(1);
$(document).ready(function(){
  $('#dtbl_accounts').DataTable({
  	columnDefs: [ 
	  	{ orderable: false, targets: [0,6] }, 
	  	// { visible: false, targets: [5,12,13] },
  	],
  });
});

$('.myDatepicker').datetimepicker({
    format: 'DD-MMM-YYYY'
});


</script>
