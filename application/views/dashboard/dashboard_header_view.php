<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  $data = $this->session->userdata();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <link rel="stylesheet" href="<?php echo base_url().'assets/css/dashboardstyle.css';?>">

<!--------------------------------------Javascript Files---------------------------------------------------------->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


      </head> 
<body>

<header>
		<nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top" style="padding: 1rem 1rem;">
		<a class="navbar-brand col-md-2 col-sm-3" href="#">Student Management System</a>				
			<ul class="navbar-nav ml-auto">
				<li class=" nav-item active">
					<a href="<?php 
          if(!empty($data)){
          if($data['user_type']=='student'){
            echo base_url().'dashboard_controller/';
            }else if($data['user_type']=='mentor'){
              echo base_url().'dashboard_controller/mentor_dashboard';
            }else if($data['user_type'] == 'university'){
              echo base_url().'dashboard_controller/university_dashboard';
            }else{
              redirect(); 
            }
          }          
          ?>" class="nav-link">
						<i class="fas fa-home"></i> Home</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url().'dashboard_controller/logout/' ?>" class="nav-link">
						<i class="fas fa-sign-out-alt"></i> Log Out</a>
				</li>
			</ul>
		</nav>
</header>

<div class="container-fluid">

	<div class="row">
		
		<nav class="col-md-2 d-md-block bg-light sidebar">
			<div class="sidebar-sticky">
        <ul class="nav flex-column mx-4 p-2">
          <li class="nav-item">
            <a class="nav-link active" href="<?php 
            if($data['user_type']=='student')
            {
            echo base_url().'dashboard_controller/';
            }else if($data['user_type']=='mentor'){
              echo base_url().'dashboard_controller/mentor_dashboard';
            }else if($data['user_type'] == 'university'){
              echo base_url().'dashboard_controller/university_dashboard';
            } else {
              echo base_url();
              } ?>">
            	<i class="fas fa-home"></i>
             Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php
            if($data['user_type']=='student'){
            echo base_url().'dashboard_controller/student_profile/';
            }elseif ($data['user_type']=='mentor'){
              echo base_url().'dashboard_controller/mentor_profile/';
            }elseif ($data['user_type']=='university'){
              echo base_url().'dashboard_controller/university_profile/';
            } else {
              echo base_url();
              }  ?>" >
            	<i class="fas fa-user-alt"></i>
             Profile
            </a>
          </li>
         <!--  <li class="nav-item">
					<a href="<?php echo base_url().'dashboard_controller/logout/' ?>" class="nav-link">
						<i class="fas fa-sign-out-alt"></i> Log Out</a>
				</li> -->

        <li class="nav-item">
          <a href="<?php 
              if(($data['user_type']=='mentor')||($data['user_type']=='university')){
              echo base_url().'dashboard_controller/list_students'; }
              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if ($data['user_type']=='student'){ echo 'd-none'; } ?>">
            <i class="fas fa-user-graduate"></i> Student's List</a>
        </li>

        <li class="nav-item">
          <a href="<?php 
              if($data['user_type']=='university'){
              echo base_url().'dashboard_controller/list_mentors'; }
              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='student')||($data['user_type']=='mentor')){ echo 'd-none'; } ?>">
            <i class="fas fa-chalkboard-teacher"></i> Mentor's List</a>
        </li>

        <li class="nav-item">
          <a href="<?php 
              if($data['user_type']=='university'){
              echo base_url().'dashboard_controller/list_university'; }
              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='student')||($data['user_type']=='mentor')){ echo 'd-none'; } ?>">
           <i class="fas fa-university"></i> College List</a>
        </li>


       </ul>
      </div>
    </nav>
	
