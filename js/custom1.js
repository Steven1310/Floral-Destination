
function dload()
 {

	$('#tdata').load('list.php');
 }

$(document).ready(function(){
 
 
	dload();

 setInterval(function(){dload()},30000);

	$('#form-data').submit(function(event){
		event.preventDefault();
		var form = $(this);
		var data = form.serialize();
		$.ajax({
			url: 'upload.php',
			data : data,
			type: 'POST',
			success: function(){
				dload();
			}
		});
	});
	
	
	$('#tdata').on('click','.btn-delete',function(){
			var empid = $(this).data('empid');
			$.ajax({
				url:'update.php',
				data : {empid:empid},
				type : 'POST',
				success:function(){
					dload();
				}
			});
	});




});


$(document).ready(function(){
 
 
	dload();

 setInterval(function(){dload()},30000);

	$('#form').submit(function(event){
		event.preventDefault();
		var form = $(this);
		var data = form.serialize();
		$.ajax({
			url: 'updatedata.php',
			data : data,
			type: 'POST',
			success: function(){
				dload();
			}
		});
	});
	
	
	




});