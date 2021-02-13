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
				// $this->email->to('yeshjadav4@gmail.com');
				// $this->email->bcc('isco30427@gmail.com');
				// $this->email->cc('jadavvarsha602@gmail.com');
				$this->email->subject("From Local server");
				$this->email->message($body);

				if($this->email->send())
				{	
					  echo '<script type="text/javascript">';
					  echo 'setTimeout(function () { swal("Successfull Registration!","User has been Registered!!","success");';
					  echo '}, 1000);</script>';
				}
				else{
						show_error($this->email->print_debugger());

						echo '<script type="text/javascript">';
					  	echo 'setTimeout(function () { swal("Alert!","Try Again after some time!!","warning");';
					  	echo '}, 1000);</script>';
					}
			}
			else
			{
				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Database Error!","Error While Uploading Data!","error");';
				echo '}, 1000);</script>';
			}
			$this->load->view('signup');
		}
	}

 ?>