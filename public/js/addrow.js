$(document).ready(function(){
	calculation();
	$('#discount_input').on('keyup', function(){
		ntotal();
	});

	$('#payment_input').on('keyup', function(){
		due();
	});
	$('.addRow').on('click', function(){
		var pro = $('#pro').val();
		addRow(pro);
		
	});

	$(".livesearch").chosen();

});



	function calculation(){

		$('.qtn,.u_price,.in_dis,.vat').keyup(function(){
			var tr = $(this).parent().parent();
			var qtn = tr.find('.qtn').val();
			var u_price = tr.find('.u_price').val();
			var in_dis = tr.find('.in_dis').val();
			var vat = tr.find('.vat').val();
			var amount =0;
			if(in_dis !=0){
				amount =  (qtn*u_price) - (qtn*u_price*in_dis)/100;
			}else{
				amount =  (qtn*u_price);
			}
			var s_total = amount;
			var tax=0;
			if(vat !=0){
				tax = (100+parseInt(vat));
				tax = (tax/100);
			}
			
			if(tax!=0){
				s_total = s_total*tax;
				
			}
			tr.find('.s_total').val(s_total.toFixed(2));
			total();
			
			ntotal();
			due();
			addRow();	 
		});
	}

	function total(){
		var total = 0;
		$('.s_total').each(function(i,e){
			var s_total = $(this).val()-0;
			total +=s_total;
		})
		$('.total').html(total.toFixed(2));
	}

	function ntotal(){
		var ntotal = 0;
		var tamount = 0;
		$('.s_total').each(function(i,e){
			var s_total = $(this).val()-0;
			tamount += s_total;
		});
		var discount = $('#discount_input').val(); 
		if(discount == 0){
			ntotal = tamount;
			//ntotal = tamount - discount;
		}else{
			ntotal = tamount - discount;
			//ntotal = tamount;	
		} 
		$('.ntotal').val(ntotal.toFixed(2));
	}

	function due(){
		var due = 0;
		var payment = 0;
		var ntotal = $('#ntotal').val();
		var payment = $('#payment_input').val();
		if(payment==0){
			due = due;
		}else{
			due = ntotal - payment;
		}
		$('.due').val(due.toFixed(2));
	}



function addRow(pro)
	{
		var tr='<tr>'+
	   				'<td>'+
	   				'<select class="livesearch form-control product-name"  name="name[]" >'+
                    	'<option value="0" disabled="trform-controlue" selected="ture">--Select--</option>';
                     	$.each( JSON.parse(pro), function( key, value ) {
						   tr +='<option value="'+ value['id'] +'">'+value['name'] +'</option>';
						 });   	
        		  tr +=  '</select>'+ 
            		'</td>'+
	   				'<td><input type="text" name="qtn[]" class="form-control qtn" onblur="qtn_check()"></td>'+
	   				'<td><input type="text" name="u_price[]" class="form-control u_price"></td>'+
	   				'<td><input type="text" name="in_dis[]" class="form-control in_dis"></td>'+
	   				'<td><input type="text" name="vat[]" class="form-control vat"></td>'+
                    '<td><input type="text" name="s_total[]" class="form-control s_total"></td>'+
	   				'<td><a href="javascript:void(0)" class="btn btn-danger btn-sm remove"><i class="fa fa-times fa-lg" aria-hidden="true"></i></a></td>'+
	   				'</tr>';
			$('tbody').append(tr);
			$(".livesearch").chosen();
			calculation();
			
	};

$(document).ready(function(){
	$('.remove').live('click', function(){
		var len = $('tbody tr').length;
		// if(len==1)
		// {
		// 	alert('You could not remove last one');
		// } else{
			$(this).parent().parent().remove();
			total();
			ntotal();
			due();
		// }		
	});
});

