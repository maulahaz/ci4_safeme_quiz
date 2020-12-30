<script>
	const myBaseURL = '<?php echo site_url(); ?>';
	let saveMethod;
	// alert(1);

	fetchDatatable();

	function fetchDatatable(){
		//--------------- SERVER SIDE
		// var myDatatable = $('#my_table').DataTable({
		// 	"processing": false,
		// 	"serverSide": false,
		// 	"order": [],
			// "ajax": {
		 //        "url": myBaseURL + "leaves/ajaxRead",
		 //        "dataType": 'json',
		 //        "success": function(res){
		 //        	$('.my-datatable').html(res.data);
		 //        },
		 //        "error": function(xhr, ajaxOptions, thrownError) {
		 //        	alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
		 //        }
		 //    },
		// 	"columnDefs": [
		//     	{ 
		//           "targets": [ 0,-1 ], //first and last column
		//           "orderable": false, //set not orderable
		//         },
		//     ],
		// });

		//--------------- CLIENT SIDE
		$.ajax({
			url: '<?=site_url("leaves/ajaxRead") ?>',
			dataType: 'json',
			success: function(res){
				$('.my-datatable').html(res.xtraFile);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
			}
		});
	}

	$('#btn_add').on('click', function(e){
		e.preventDefault();
		// alert(1);
		saveMethod = "create";
		// let actionUrl = myBaseURL + 'leaves/ajaxAction/save';

		$.ajax({
			url: myBaseURL + "leaves/ajaxAction/" + saveMethod,
			dataType: 'json',
			success: function(res){
				// alert(res);
				$('.show-modal').html(res.xtraFile).show();
				$('#my_modal .modal-header .modal-title').text('Add New Data');
				// $('#my_form').attr('action', actionUrl);
				$('#my_modal').modal('show');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
			}
		});
	});

	function saveData()
	{
		// alert(11);
		let actionURL = myBaseURL + 'leaves/ajaxAction/save';

		$.ajax({
			url: actionURL,
			type: 'post',
			data: $('#my_form').serialize(),
			dataType: 'json',
			beforeSend: function(){
				$('.btn-save').attr('disable','disabled');
				$('.btn-save').html('<i class="fa fa-spin fa-spinner"></i>');
			},
			complete: function(){
				$('.btn-save').removeAttr('disable','disabled');
				$('.btn-save').html('Save');
			},
			success: function(res){
				// $('#my_modal').modal('hide');
				// if(res.isSuccess === true){
				// 	$('.msgbox').html(
				// 		'<div class="alert alert-success" role="alert"> '+
				// 		res.pesan +
				// 		'</div>'
				// 	);
				// }else{
				// 	if(res.pesan instanceof Object){
				// 		$.each(res.pesan, function(index, value){
				// 			$('.msgbox').append(value);
				// 		});
				// 	}
				// }
				// tblBarengan.ajax.reload(null, false);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("Error during execution. Please Contact Administrator" 
					+ "\n" + xhr.status 
					+ "\n" + xhr.responseText 
					+ "\n" + thrownError);
			}
		});
		return false;
	}	

	$('.myDatepicker').datetimepicker({
	    format: 'DD-MMM-YYYY'
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
