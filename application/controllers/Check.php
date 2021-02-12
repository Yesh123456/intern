<?php 

	Class Check extends CI_Controller{

		public function __construct()
		{

			parent :: __construct();

		}

		public function send()
		{
			
	?>
			<script type="text/javascript" src="<?php echo base_url();?>bootstrap/dist/js/sweetalert.js"></script>"
			
	<?php	
			if(true){
				if(false){
					$d['error'] = "Error "; 
					?>
					<script>
					swal({
					  title: "Successfull file not uploded",
					  text: "<?php echo $d['error']?>",
					  icon: "error",	
					});
				</script>
				<?php
				}
				else{
					$d['success'] = "Signup Successfull!";
				?>
					<script>
					swal({
					  title: "Successfull file not uploded",
					  text: "<?php echo $d['success']?>",
					  icon: "success",	
					});
					</script>
				<?php	
				}
			}
			else
			{
					$val['failed'] = "Error While Uploading Data!";
			?>
			<script>
					swal({
					  title: "Successfull file not uploded",
					  text: "<?php echo $d['success']?>",
					  icon: "info",	
					});
					</script>

			<?php
			}

			$this->load->view('signup');

		}
	}


 ?>