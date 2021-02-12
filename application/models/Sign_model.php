<?php 

	Class Sign_model extends CI_Model{

		public function User($value){


			$count = $this->db->insert("info",$value);
			if($count > 0)
			{
				return true;
			}
			else{
				return false;
			}
		}
	}

 ?>