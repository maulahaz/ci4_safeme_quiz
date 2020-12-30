<script>
	// alert(1);
	$(document).ready(function(){
	  $('#dtbl_quiz').DataTable({
	  	columnDefs: [ 
		  	{ orderable: false, targets: [0, -1] }, 
		  	// { visible: false, targets: [5,12,13] },
	  	],
	  });
	});

	$(function () 
	{
		$('.myDatepicker').datetimepicker({
		    format: 'DD-MMM-YYYY'
		});
	});

</script>
