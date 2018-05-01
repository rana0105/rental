$(document).ready(function() {
	// start Rent collection
	$('#datefrom').change(function(){
		var fromdate = $('#datefrom').val();
		var todate = $('#dateto').val();

		$.ajax({
			url: '/getrentDate/',
			type: 'get',
			data: {'fromdate':fromdate,'todate':todate,},
			success: function(data){
				console.log(data);
			}
		});
	});

	// end Rent collection
});
