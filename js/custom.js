$(document).ready(function(){

	$('form').on('submit', function(){
		
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		
		if( ($.trim($('#jsName').val()) != "") && ($.trim($('#jsEmail').val()) != "") && (reg.test($.trim($('#jsEmail').val())) == true) && ($.trim($('#jsPassword').val()) != "" ) ){
			return true;
		}
		else if( ($.trim($('#jsName').val()) == "") && ($.trim($('#jsEmail').val()) == "") && ($.trim($('#jsPassword').val()) == "" ) ){
			$('#jsMessage').html('<p>Please fill-up all forms</p>');			
			return false;
		}
		else if( $.trim($('#jsName').val()) == "" ){
			$('#jsMessage').html('<p>Please enter name</p>');
			//$('#jsName').closest('.form-group').addClass('has-error');			
			return false;
		}
		else if( $.trim($('#jsEmail').val()) == "" ){
			$('#jsMessage').html('<p>Please enter email</p>');
			return false;
		}
		else if(reg.test($.trim($('#jsEmail').val())) == false){
			$('#jsMessage').html('<p>Please enter a valid email</p>');
			return false;
		}
		else if( $.trim($('#jsPassword').val()) == "" ){
			$('#jsMessage').html('<p>Please enter password</p>');
			return false;		
		}
		else{
			$('#jsMessage').html('<p>There was a problem while submiting the form. Please try again.</p>');
			return false;
		}
		
	});

});