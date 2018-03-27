$(document).ready(function() {
	 // GOOOGLE ANALYTIC
    
    // END GOOOGLE ANALYTIC
	var check_privacy = $('.check-privacy');
	var btn_submit = $('.btn-confirm');
	btn_submit.prop('disabled', true);
	if (check_privacy.is(":checked")) {
		btn_submit.prop('disabled', false);
	}
    
	check_privacy.change(function(){
		if($(this).prop("checked") == true){
	        btn_submit.prop('disabled', false);
	    }
	    else if($(this).prop("checked") == false){
	        btn_submit.prop('disabled', true);
	    }
	});

	$('.error').parent().find('.form-control').addClass('error-input');
    
});