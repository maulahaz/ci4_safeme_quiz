<script>
	// alert(1);
	$(document).ready(function(){
	  $('#dtbl_keyreg').DataTable({
	  	columnDefs: [ 
		  	{ orderable: false, targets: [7, 8] }, 
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

	$('#btnPrintPDF').on('click', function(e){
		e.preventDefault();
		$.ajax({
	        url: myBaseURL+'keyreg/make_pdf',
	        type: 'POST',
	        data: {
	            month: month
	        },
	        // return false;
	    });
	});


</script>
