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
			<img src="<?php if(!empty($user_data)){
				echo base_url().'assets/img/profile_pics/'.$user_data[0]['uni_pic']; } ?>" class="card-img">
		</div>
		<form action="<?php echo base_url().'dashboard_controller/uni_image/'; ?>" method="POST" enctype="multipart/form-data">
		<div class="card p-2"  style="border: 0px;">
		<input type="file" name="uni_pic">
		<input type="submit" name="img_update" value="Upload Image" class="btn btn-block btn-primary mt-2">
	</form>
		<a href="<?php echo base_url().'dashboard_controller/university_dashboard'; ?>" name="stu_update" class="btn btn-block btn-dark mt-2">Update Details</a>
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
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">Email</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($email)){echo $email; }  ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20">Founder's Day</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['founder_day']; }
               ?></p></div>
			</div>
		</div>

		<div class="row mt-1">
			<div class="col-6">
				<div class="col-sm-12 col-xl-8"><h4 class="fw-20">List Of Colleges</h4></div>
				<div class="col-4">
				<ul>
					<li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['college1']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['college2']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['college3']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['college4']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['college5']; }
               ?></p>
           </li>
           </ul>
           </div>
			</div>
			<div class="col-6">
				<div class="col-10"><h4 class="fw-20">Seats Available:</h4></div>
				<div class="col-2">
					<ul class="list-unstyled">
					<li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['seats1']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['seats2']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['seats3']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['seats4']; }
               ?></p>
           </li>
           <li>
					<p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['seats5']; }
               ?></p>
           </li>
           </ul></div>
			</div>
		</div>	

		<div class="row mt-1">
			<div class="col-md-12">
				<div class="col-md-12"><h4 class="fw-20">University Registration Number:</h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['reg_no']; }
               ?></p></div>
			</div>
		</div>

	</div>
	</section>
