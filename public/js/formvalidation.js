// front end JavaScript Document
$(document).ready(function(){
var url ='http://beta.pcexporters.com/pcexporters/';
$('#first_button').click(function(){
	var comp_name		= $('#comp_name').val();
	var bus_type		= $('#bus_type').val();
	var comp_email		= $('#comp_email').val();
	var comfirm_email	= $('#comfirm_comp_email').val();
	var introduction	= $('#introduction').val();
	var business_type	= $('#business_type').val();
	var established		= $('#established').val();
	var total_employes	= $('#total_employes').val();
	var incorporation	= $('#incorporation').val();
	var annual_turnover	= $('#annual_turnover').val();
	if(comp_name==''){
		$('#comp_name').css('border-color','red');
		$('#comp_name_error').show();
		return false;
	}else {
	  	$('#comp_name_error').hide();
		$('#comp_name').css('border-color','#D3CFC7');
	  }
	if(bus_type==''){
		$('#bus_type').css('border-color','red');
		$('#bus_type_error').show();
		return false;
	}else {
	  	$('#bus_type_error').hide();
		$('#bus_type').css('border-color','#D3CFC7');
	  }
	 var reg  		= /(Exporters|gmail|yahoo|hotmail)\.com$/;
	 var reg_email  = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(reg.test(comp_email) == true || comp_email==''){
		$('#ajax_loader').css('display','inline');
		$('#comp_email').css('border-color','red');
	  	$('#email_info').show();
	    return false;
	}else if((reg_email.test(comp_email) == false)) {
		$('#comp_email').css('border-color','red');
		$('#email_error_01').show();
		$('#email_info').hide();
     	return false;
	}else {
	 	//alert('abc');
		$('#email_error_01').hide();
		$('#email_info').hide();
	  	$('#comp_email').css('border-color','#D3CFC7');
		$.ajax({
			  type	 : 'POST',
			  url	 : url+'user/ajax/',
			  data	 : {email:comp_email},
			  success: function(msg){
				if(msg!='true'){
					$('#comp_email').css('border-color','red');
					$('#email_error').show();
					return false;
				}else {
					$('#email_error').hide();
					$('#ajax_loader').css('display','none');
				}
				
			  }
			}); 
	}
	 //var confirm_email  = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if((reg_email.test(comfirm_email) == false) || comfirm_email=='') {
		$('#comfirm_comp_email').css('border-color','red');
		$('#email_error_02').show();
     	return false;
	}else if(comfirm_email!=comp_email){
		$('#email_error_02').hide();
		$('#comfirm_comp_email').css('border-color','red');
		$('#email_error_03').show();
     	return false;
	}else {
		$('#email_error_02').hide();
	 	$('#email_error_03').hide();
	  	$('#comfirm_comp_email').css('border-color','#D3CFC7');
	}
	if(introduction==''){
		 $('#introduction').css('border-color','red');
		 $('#comp_introduction').show();
		 return false;
	 }else if(introduction.length<150){
		  $('#introduction').css('border-color','red');
		  $('#comp_introduction').hide();
		  $('#comp_introduction_01').show();
		  return false;	 
	 }else {
		 $('#introduction').css('border-color','#D3CFC7');
		 $('#comp_introduction_01').hide();
	 }
	 if(business_type==''){
		$('#business_type').css('border-color','red');
		$('#business_type_error').show();
		return false;
	}else {
	  	$('#business_type_error').hide();
		$('#business_type').css('border-color','#D3CFC7');
	  }
	 if(established==''){
		$('#established').css('border-color','red');
		$('#established_error').show();
		return false;
	}else {
	  	$('#established_error').hide();
		$('#established').css('border-color','#D3CFC7');
	  }
	if(total_employes==''){
		$('#total_employes').css('border-color','red');
		$('#total_employes_error').show();
		return false;
	}else {
	  	$('#total_employes_error').hide();
		$('#total_employes').css('border-color','#D3CFC7');
	  }
	if(incorporation==''){
		$('#incorporation').css('border-color','red');
		$('#incorporation_error').show();
		return false;
	}else {
	  	$('#incorporation_error').hide();
		$('#incorporation').css('border-color','#D3CFC7');
	  }
	if(annual_turnover==''){
		$('#annual_turnover').css('border-color','red');
		$('#annual_turnover_error').show();
		return false;
	}else {
	  	$('#annual_turnover_error').hide();
		//$('#annual_turnover').css('border-color','#D3CFC7');
		$('#first_step').hide();
		$('#second_form').show();
	  }
});//end of function
$('#user_signup').submit(function(){
	if($('#first_name').val()==''){
		$('#first_name').css('border-color','red');
		$('#first_name_error').show();
		return false;
	}else {
	  	$('#first_name_error').hide();
		$('#first_name').css('border-color','#D3CFC7');
	  }
	if($('#last_name').val()==''){
		$('#last_name').css('border-color','red');
		$('#last_name_error').show();
		return false;
	}else {
	  	$('#last_name_error').hide();
		$('#last_name').css('border-color','#D3CFC7');
	  }
	if($('#position').val()==''){
		$('#position').css('border-color','red');
		$('#position_error').show();
		return false;
	}else {
	  	$('#position_error').hide();
		$('#position').css('border-color','#D3CFC7');
	  }
	if($('#password').val()==''){
		$('#password').css('border-color','red');
		$('#password_error').show();
		return false;
	}else {
	  	$('#password_error').hide();
		$('#password').css('border-color','#D3CFC7');
	  }
	if($('#confirm_password').val()=='') {
		$('#confirm_password').css('border-color','red');
		$('#confirm_password_error').show();
     	return false;
	}else if($('#confirm_password').val()!=$('#password').val()){
		$('#confirm_password_error').hide();
		$('#confirm_password').css('border-color','red');
		$('#confirm_password_error_01').show();
     	return false;
	}else {
		$('#confirm_password_error').hide();
	 	$('#confirm_password_error_01').hide();
	  	$('#confirm_password').css('border-color','#D3CFC7');
	}
	if($('#question').val()==''){
		$('#question').css('border-color','red');
		$('#question_error').show();
		return false;
	}else {
	  	$('#question_error').hide();
		$('#question').css('border-color','#D3CFC7');
	  }
	if($('#answer').val()==''){
		$('#answer').css('border-color','red');
		$('#answer_error').show();
		return false;
	}else {
	  	$('#answer_error').hide();
		$('#answer').css('border-color','#D3CFC7');
	  }
	if($('#ceo_fname').val()==''){
		$('#ceo_fname').css('border-color','red');
		$('#ceo_fname_error').show();
		return false;
	}else {
	  	$('#ceo_fname_error').hide();
		$('#ceo_fname').css('border-color','#D3CFC7');
	  }
	if($('#ceo_lname').val()==''){
		$('#ceo_lname').css('border-color','red');
		$('#ceo_lname_error').show();
		return false;
	}else {
	  	$('#ceo_lname_error').hide();
		$('#ceo_lname').css('border-color','#D3CFC7');
	  }
	if($('#address').val()==''){
		$('#address').css('border-color','red');
		$('#address_error').show();
		return false;
	}else {
	  	$('#address_error').hide();
		$('#address').css('border-color','#D3CFC7');
	  }
	if($('#city').val()==''){
		$('#city').css('border-color','red');
		$('#city_error').show();
		return false;
	}else {
	  	$('#city_error').hide();
		$('#city').css('border-color','#D3CFC7');
	  }
	if($('#state').val()==''){
		$('#state').css('border-color','red');
		$('#state_error').show();
		return false;
	}else {
	  	$('#state_error').hide();
		$('#state').css('border-color','#D3CFC7');
	  }
	if($('#country').val()==''){
		$('#country').css('border-color','red');
		$('#country_error').show();
		return false;
	}else {
	  	$('#country_error').hide();
		$('#country').css('border-color','#D3CFC7');
	  }
	if($('#phone').val()==''){
		$('#phone').css('border-color','red');
		$('#phone_error').show();
		return false;
	}else {
	  	$('#phone_error').hide();
		$('#phone').css('border-color','#D3CFC7');
	  }
	var reg  = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if((reg.test($('#official_email').val()) == false) || $('#official_email').val()=='') {
		$('#official_email').css('border-color','red');
		$('#official_email_error').show();
     	return false;
	}else {
		$('#official_email_error').hide();
	  	$('#official_email').css('border-color','#D3CFC7');
	}
	var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
	if((regexp.test($('#website').val()) == false) || $('#website').val()=='') {
		$('#website').css('border-color','red');
		$('#website_error').show();
     	return false;
	}else {
		$('#website_error').hide();
	  	$('#website').css('border-color','#D3CFC7');
	}
	var values = new Array();
    $.each($("input[name='business_cat[]']:checked"), function() {
    values.push($(this).val());
	});
	if(values.length==0){
		$('#business_cat').show();
		return false;
	}else if(values.length >10){
		$('#business_cat').hide();
		$('#business_cat_01').show();
		return false;
	 }else{
		 $('#business_cat_01').hide();
	 }
});//end of function
//----------previous page--------
$('#second_button').click(function(){
	$('#second_form').hide();
	$('#first_step').show();
});

//------------selling lead form validation
$('#sellinglead123').submit(function(){
	if($('#category').val()==''){
		$('#category').css('border-color','red');
		$('#cat_error').show();
		return false;
	}else {
	  	$('#cat_error').hide();
		$('#category').css('border-color','#D3CFC7');
	  }
	if($('#pro_name').val()==''){
		$('#pro_name').css('border-color','red');
		$('#pname_error').show();
		return false;
	}else {
	  	$('#pname_error').hide();
		$('#pro_name').css('border-color','#D3CFC7');
	  }
	if($('#pro_model').val()==''){
		 $('#pro_model').css('border-color','red');
		 $('#model_error').show();
		 return false;
	 }else {
		 $('#pro_model').css('border-color','#D3CFC7');
		 $('#model_error').hide();
	 }
	 if($('#pro_detail').val()==''){
		$('#pro_detail').css('border-color','red');
		$('#detail_error').show();
		return false;
	}else {
		$('#pro_detail').css('border-color','#D3CFC7');
	  	$('#detail_error').hide();
	  }
	 if($('#pro_price').val()==''){
		$('#pro_price').css('border-color','red');
		$('#price_error').show();
		return false;
	}else {
		$('#pro_price').css('border-color','#D3CFC7');
	  	$('#price_error').hide();
	  }
	if($('#pro_currency').val()==''){
		$('#pro_currency').css('border-color','red');
		$('#currency_error').show();
		return false;
	}else {
		$('#pro_currency').css('border-color','#D3CFC7');
		$('#currency_error').hide();
	  }
	if($('#pro_expiry_date').val()==''){
		$('#pro_expiry_date').css('border-color','red');
		$('#date_error').show();
		return false;
	}else {
		$('#pro_expiry_date').css('border-color','#D3CFC7');
		$('#date_error').hide();
	  }
	if (!$("input[@name='sell_type']:checked").val()){
		$('#offer_error').show();
		return false;
	}else {
	  	$('#offer_error').hide();
	  }
	if (!$("input[@type='radio']:checked").val()){
		$('#label_error').show();
		return false;
	}else {
	  	$('#label_error').hide();
	  }
});//end of function
});