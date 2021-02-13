<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width , initial-scale = 1 , shrink-to-fit=no">
	<title>Signup Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/assets/js/vendor/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/test/vendor/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>user_guide/_static/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/dist/js/sweetalert.js"></script>
	<style type="text/css">
		body{
		    background: -webkit-linear-gradient(left,#ff4000,#ffff00,#00ff80,#8000ff);
		}
		.contact-form{
		    background: #fff;
		    margin-top: 10%;
		    margin-bottom: 5%;
		    width: 70%;
		    opacity: 0.9;
		}
		.contact-form .form-control{
		    border-radius:1rem;
		}
		.contact-image{
		    text-align: center;
		}
		.contact-image img{
		    border-radius: 6rem;
		    width: 11%;
		    margin-top: -3%;
		    transform: rotate(29deg);
		}
		.contact-form form{
		    padding: 14%;
		}
		.contact-form form .row{
		    margin-bottom: -7%;
		}
		.contact-form h3{
		    margin-bottom: 8%;
		    margin-top: -10%;
		    text-align: center;
		    color: #0062cc;
		}
		.contact-form .btnContact {
		    width: 15%;
		    border: none;
		    border-radius: 15%;
		    padding: 2%;
		    background: #dc3545;
		    font-weight: 600;
		    color: #fff;
		    cursor: pointer;
		    margin-left: 40%;
		    
		}
	</style>

	<script type="text/javascript">
		function validateForm() {
	  		var x = document.sign.txtName.value;
	  		var x1 = document.sign.txtEmail.value;
	  		var x2 = document.sign.txtPhone.value;
	  		var x3 = document.sign.txtAge.value;
	  		var x4 = document.sign.txtPassword.value;
	  		var x5 = document.sign.txtPassword1.value;
	  		var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			var age = /^[1-9]?[0-9]{1}$|^100$/;
			var pass = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

	  		// if (x == "") {
	    // 		alert("Please Enter Your Name");
	    // 		return false;
	  		// }

	  		if (x.length < 5 || x.length > 40){
				alert("Please rewrite your Full name");
				return false;
			}

			// if(x1 == ""){
			// 	alert("Please Enter Your Correct Email");
			// 	return false;
			// }

			if(!x1.match(mailformat)){
				alert("You have entered an invalid email address!");
				return false;
			}
			
			// if(x2 == ""){
			// 	alert("Please Enter Your Phone Number");
			// 	return false;
			// }

			if(x2.length!=10 && x2.length > 10 && x2.length < 9){
				alert("Invalid Phone number");
				return false;
			}

			// if(x3 == ""){
			// 	alert("Please Enter Your Age");
			// 	return false;
			// }

			if(!x3.match(age)){
				alert("Invalid Age");
				return false;
			}

			// if(x4 == ""){
			// 	alert("Please Enter Your Password");
			// 	return false;
			// }

			if(x4.match(pass)){
				alert("Invalid Password credentials (Length must be greater than 8 with a symbol,upper & lower case and nummber)");
				return false;
			}

			// if(x5 == ""){
			// 	alert("Please Enter Confirm Password");
			// 	return false;
			// }

			if(x5 != x4){
				alert("Confirm Password Don't match");
				return false;
			}

		}
		
	</script>
</head>
<body>
	<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form name = "sign" onsubmit=" return validateForm()" action = "<?php echo base_url();?>index.php/Send/" method="post">
                <h3>Sign Up form</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name*" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email*" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value=""  required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtAge" class="form-control" placeholder="Your Age*" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="txtPassword" class="form-control" placeholder="Enter New Password*" value=""  required/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="txtCPassword" class="form-control" placeholder="Confirm New Password*" value="" required  />
                        </div>
                    </div>
                    <div class="col-md-12">
                    	<div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Submit" />
                        </div>
                    </div>
                </div>
            </form>
	</div>
</body>
</html>