$(document).ready(function(){
	calculation1();
});

 function calculation1(){
	$('.acper_rent,.acsqu_feet').keyup(function(){
		var input = $(this).val();
		var acper_rent = $('.acper_rent').val();

		var acsqu_feet = $('.acsqu_feet').val();
		
		var ac_tamount = 0;
		ac_tamount = acper_rent*acsqu_feet;
		$('.ac_tamount').val(ac_tamount); 
	});
 }