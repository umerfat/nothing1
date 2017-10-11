function validateCustomer(){
	//alert("log 1");
	var password = $('#cus_password').val();
	var conf_password = $('#cus_conf_password').val();
	if (password != conf_password) {
		$("#errMessage").html("<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong>Password doesn't match</div>");
		
	}
}