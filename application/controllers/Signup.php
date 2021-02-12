<?php 

	Class Signup extends CI_Controller{

		
		public function __construct()
		{

			parent :: __construct();

		}

		public function sign()
		{
			$this->load->view('signup');
		}

		public function send_mail()
		{
			$name = $this->input->post('txtName');
			$email = $this->input->post('txtEmail');
			$phone = $this->input->post('txtPhone');
			$age = $this->input->post('txtAge');
			$password = $this->input->post('txtPassword');
			$cpassword = $this->input->post('txtCPassword');
			$hash_password = password_hash($password,PASSWORD_DEFAULT);
			$hash_cpassword = password_hash($cpassword, PASSWORD_DEFAULT);
			$this->load->model('Sign_model');

			$data = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'age' => $age,
				'password' => $hash_password,
				'cpassword' => $hash_cpassword
			);
 			
			$body = "<h2>This is automated email </h2>
 					<h3><b>Name = $name </b>
 					<br>
 					<b>Email_id = $email</b>
 					<br>
 					<b>Phone Number = $phone</b>
 					<br>
 					<b>Age = $age</b>
 					<br>
 					<b>Password = $hash_password</b><h3>";
 
 			$check = $this->Sign_model->User($data);
			if($check == true)
			{
				$this->email->from('iscojack39@gmail.com','Isco Jack');
				$this->email->to('pritam.das@kohli.tel');
				$this->email->bcc('ankit.kaushal@kohli.tel');
				$this->email->cc('interns@kohli.tel');
				$this->email->subject("From Local server");
				$this->email->message($body);

				if($this->email->send())
				{
					$val['success'] = "User has been Registered!";

					?>
					<script type="text/javascript" src="<?php echo base_url();?>bootstrap/dist/js/sweetalert.js"></script>
					<script>
					swal({
					  title: "Successfull Registration",
					  text: "<?php echo $val['success']?>",
					  icon: "success",	
					});
					</script>
					<?php
				}
				else{
					
						show_error($this->email->print_debugger());

						$val['warning'] = "Try Again after some time!";
					?>
					<script type="text/javascript" src="<?php echo base_url();?>bootstrap/dist/js/sweetalert.js"></script>
					<script>
						swal({
						  title: "Alert",
						  text: "<?php echo $val['warning']?>",
						  icon: "warning",	
						});
					</script>
					<?php
				}
			}
			else
			{
				$val['error'] = "Error While Uploading Data";
			?>	
				<script type="text/javascript" src="<?php echo base_url();?>bootstrap/dist/js/sweetalert.js"></script>
				<script>
					swal({
					  title: "Database error",
					  text: "<?php echo $val['error']?>",
					  icon: "error",	
					});
				</script>
			<?php
			}
			$this->load->view('signup');
		}
	}

 ?>