<main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-4">

	<?php 

			if($this->session->has_userdata('log_email')){

			//$session_data = $this->session->userdata();
			$email = $this->session->userdata('log_email');
			$id = $this->session->userdata('id');
			$fname = $this->session->userdata('fname');
			$lname = $this->session->userdata('lname');
			$user_type = $this->session->userdata('user_type');
			// echo $log_email;
			// echo $id;
			//print_r($user_data);
			//print_r($session_data);
			}else {
        redirect();
      }

		?> 
     
	<section class="container">
		<div class="row">
	<div class="col-xl-3 col-md-12">
		<div class="card p-2" style="border: 0px;">
			<img src="<?php
		 if(!empty($user_data)){ 
				echo base_url().'assets/img/profile_pics/'.$user_data[0]['ment_pic']; } ?>" class="card-img">
		</div>
		
		<form action="<?php echo base_url().'dashboard_controller/mentor_image/'; ?>" method="POST" enctype="multipart/form-data">
		<div class="card p-2"  style="border: 0px;">
		<input type="file" name="ment_pic">
		<input type="submit" name="img_update" value="Upload Image" class="btn btn-block btn-primary mt-2">
	</form>
		<a href="<?php  echo base_url().'dashboard_controller/mentor_dashboard'; ?>" name="stu_update" class="btn btn-block btn-dark mt-2">Update Details</a>

		<a href="<?php echo base_url().'dashboard_controller/delete_ment_profile?id='.$id; ?>" name="stu_delete" class="btn btn-block btn-danger mt-2" onclick=" return confirm('Do you really want to delete the record?');">Delete Profile</a>

		</div>
		</div>
	<div class="col-1"></div>
	<div class="col-8 p-2">

		<!-- <div class="row">
			<div class="col-12">
			<h3>Howdy, Student!</h3>
		</div>
		</div>
 -->
		<div class="row mt-1">
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">First Name</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($fname)){echo $fname; }  ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">Last Name</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($lname)){echo $lname; }  ?></p></div>
			</div>
		</div>

		<div class="row mt-1">
			<div class="col-12">
				<div class="col-6"><h4 class="fw-20">Email</h4></div>
				<div class="col-6"><p class="fw-100"><?php if(!empty($email)){echo $email; }  ?></p></div>
			</div>
		</div>

		<div class="row mt-1">
			<div class="col-6">
				<div class="col-6"><h4 class="fw-20">Gender</h4></div>
				<div class="col-6"><p class="fw-100">
				<?php if(!empty($user_data)){
				 if($user_data[0]['gender']=='m'){
				 	echo 'Male';}
				 	elseif ($user_data[0]['gender']=='f'){
				 		echo 'Female';
				 	}elseif ($user_data[0]['gender']=='o'){
				 		echo 'Transgender';
				 	}
				  }
               ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">Date Of Birth</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['dob']; }
               ?></p></div>
			</div>
		</div>	

		<div class="row mt-1">
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">City</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['city']; }
               ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">State</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['state']; }
               ?></p></div>
			</div>
		</div>	

		<div class="row mt-1">
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">Postal Code</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['postal']; }
               ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">Country</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['country']; }
               ?></p></div>
			</div>
		</div>	

		<div class="row mt-1">
			<div class="col-12">
				<div class="col-md-2"><h4 class="fw-20">Designation</h4></div>
				<div class="col-md-10"><p class="fw-100"><?php if(!empty($user_data)){
						
					if($user_data[0]['designation']=='AP'){
				 		echo 'Assistant Professor';}
				 	elseif ($user_data[0]['designation']=='PRO'){
				 		echo 'Professor';
				 	}elseif ($user_data[0]['designation']=='HOD'){
				 		echo 'Head Of Department';
				 	}elseif ($user_data[0]['designation']=='PRI'){
				 		echo 'Principal';
				 	}					
				} ?></p></div>
			</div>
		</div>

	</div>
	</section>
