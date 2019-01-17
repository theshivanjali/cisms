<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     
	<?php 

		// if (isset($read_set_value)) {
		// echo $this->session->userdata('name');
		// }
			// if($this->session->has_userdata('email')){

			// 	$total_data = $this->session->userdata();
			// 	echo "<pre>";
				print_r($user_data);
			// 	echo "</pre>";
			// // }

	 // echo $error; 

	 // echo $data;

		?> 

		<h1>Hello Student</h1>
		<form action="<?php echo base_url().'dashboard_controller/student_details/'; 

		?>">
		<button type="submit">Click </button>
	</form>

