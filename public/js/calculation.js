// Rent calculation

$(document).ready(function() {
	calculation();
 		$('select[name="shop_id"]').on('change', function(){
            var rendID = $(this).val();
            if(rendID) {
                $.ajax({
                    url: '/getRentCal/'+rendID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('.squ_feet').val(data);              
                    }
                });
            }
        });
        $("input:checkbox").on('click', function() {
            var $box = $(this);
            var data = '';
            if ($box.is(":checked")) {
              var group = "input:checkbox[name='" + $box.attr("name") + "']";
              $box.prop("checked", true);
              data = $box.attr("value");
              $box.attr('disabled' , true);
              $("form").submit(function() {
                    $("input").removeAttr("disabled");
                });
            } else {
            }
            var total = $('.setvalue').val();
            if(total == ''){
                total = 0;
            }
            var t = +data + +total;
            $('.setvalue').val(t);
        });
});

function calculation(){

		$('.rent_feet').keyup(function(){
			var input = $(this).val();
			var squ_feet = $('.squ_feet').val();
			var amount =0;
			amount = squ_feet*input;
			$('.total').val(amount);  
					
		});

        $('.setvalue,.bi_elec,.bi_water,.bi_gas,.bi_schar').keyup(function(){
            var input = $(this).val();
            var setvalue = $('.setvalue').val();
            var bi_elec = $('.bi_elec').val();
            var bi_water = $('.bi_water').val();
            var bi_gas = $('.bi_gas').val();
            var bi_schar = $('.bi_schar').val();
            var btamount = 0;
            var bamount1 = 0;
            var bamount2 = 0;
            var bamount3 = 0;
            bamount1 = (parseInt(setvalue)+parseInt(bi_elec));
            bamount2 = (bamount1+parseInt(bi_water));
            bamount3 = (bamount2+parseInt(bi_gas));
            btamount = (bamount3+parseInt(bi_schar));
            $('.bi_tamount').val(btamount);  
        });

	}
