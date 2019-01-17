<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     
	<h4>Welcome, <?php 

    
		// if (isset($read_set_value)) {
		// echo $this->session->userdata('name');
		// }
			if($this->session->has_userdata('log_email')){

			$email = $this->session->userdata('log_email');
			$id = $this->session->userdata('id');
			$fname = $this->session->userdata('fname');
			$lname = $this->session->userdata('lname');
			// echo $log_email;
			// echo $id;
			echo $fname." ".$lname;

     //$dob = $user_data[0]['dob'];
       // print_r($user_data);
       //echo $user_data[0]['postal'];

			}else{
        redirect();
      }

		?> 

	</h4>	

    <div id="registrationText">
		<p class="lead" style="font-weight: 50;">
		Please Complete the Registration Form to Continue...</p>

   </div>
   <!--------------Container Fluids ----->

<section class="container">		
	<form action="<?php echo base_url()."dashboard_controller/dash_uni_details/"; ?>" method="POST">
	<div class="row">
			<div class="form-group col-6  d-inline-block"> 
               <label for="First Name">First Name:</label>
               <input type="text" class="form-control" placeholder="First Name" name="uni_fname" disabled

               value="<?php echo $fname; ?>" 

               >
           </div>

           <div class="form-group col-6 mx-auto d-inline-block"> 
               <label for="Last Name">Last Name:</label>
               <input type="text" class="form-control" placeholder="Last Name" name="uni_lname" disabled
               value="<?php echo $lname; ?>" 
               >
           </div>

        </div>   
             <div class="row">
           	<div class="form-group col-6"> 
               <label for="Email">Email:</label>
               <input type="email" class="form-control" placeholder="Email" name="uni_email" disabled value="<?php echo $email; ?>">
           </div>

            <div class="form-group col-6"> 
               <label for="DOB">Founder's Day:</label>
               <input type="date" class="form-control" name="uni_found" value="<?php if(!empty($user_data)){ echo $user_data[0]['founder_day']; } ?>"
               <?php 
                if(!empty($user_data)){
               if($user_data[0]['founder_day']!='NULL')
               {
                echo "disabled";
               }
             }
               ?> 
               />
           </div>
         </div>
         <div class="row">
         <div class="col-4">
         <label>List Of Colleges Associated:</label>
       </div>
       <div class="col-2">
         <label>No. of Seats Available:</label>
       </div>
     </div>

         <div class="row">
           <div class="form-group col-4">
            <input type="text" name="college1" class="form-control" placeholder="First College" value="<?php if(!empty($user_data)){
              echo $user_data[0]['college1']; } ?>" >
           </div>

            <div class="form-group col-2">
            <input type="number" name="seats1" class="form-control" placeholder="Seats" value="<?php if(!empty($user_data)){
              echo $user_data[0]['seats1']; } ?>" >
           </div>
         </div>

         <div class="row">
           <div class="form-group col-4">
            <input type="text" name="college2" class="form-control" placeholder="Second College" value="<?php if(!empty($user_data)){
              echo $user_data[0]['college2']; } ?>" >
           </div>

            <div class="form-group col-2">
            <input type="number" name="seats2" class="form-control" placeholder="Seats" value="<?php if(!empty($user_data)){
              echo $user_data[0]['seats2']; } ?>" >
           </div>
         </div>

         <div class="row">
           <div class="form-group col-4">
            <input type="text" name="college3" class="form-control" placeholder="Third College" value="<?php if(!empty($user_data)){
              echo $user_data[0]['college3']; } ?>" >
           </div>

            <div class="form-group col-2">
            <input type="number" name="seats3" class="form-control" placeholder="Seats" value="<?php if(!empty($user_data)){
              echo $user_data[0]['seats3']; } ?>" >
           </div>
         </div>

         <div class="row">
           <div class="form-group col-4">
            <input type="text" name="college4" class="form-control" placeholder="Fourth College" value="<?php if(!empty($user_data)){
              echo $user_data[0]['college4']; } ?>" >
           </div>
            <div class="form-group col-2">
            <input type="number" name="seats4" class="form-control" placeholder="Seats" value="<?php if(!empty($user_data)){
              echo $user_data[0]['seats4']; } ?>" >
           </div>
         </div>

          <div class="row">
           <div class="form-group col-4">
            <input type="text" name="college5" class="form-control" placeholder="Fifth College" value="<?php if(!empty($user_data)){
              echo $user_data[0]['college5']; } ?>" >
           </div>
            <div class="form-group col-2">
            <input type="number" name="seats5" class="form-control" placeholder="Seats" value="<?php if(!empty($user_data)){
              echo $user_data[0]['seats5']; } ?>" >
           </div>
         </div>

         <div class="form-group">
          <label for="uni_reg">University Registration Number:</label>
           <input type="text" name="uni_reg" class="form-control" placeholder="University Registration Number" value="<?php if(!empty($user_data)){
              echo $user_data[0]['reg_no']; } ?>"  <?php 
              if(!empty($user_data)){
                if($user_data[0]['reg_no']!='NULL'){
                  echo 'disabled';
                }
              }
              ?>>
              
         </div>

         <center>
     <div class="form-group form-check-inline"> 
              <label for="checkbox" class="form-check-label">
               <input type="checkbox" class="form-check-input" name="uni_check" required>
               I hereby declare that all the information proivided by me is correct.
           </label>
       </div><br>  
          <div class="form-group d-inline-block"> 
               <input type="submit" class="btn btn-success <?php if(!empty($user_data)){ echo "disabled"; }?>" name="uni_submit" value="Submit">
           </div>
           <div class="form-group d-inline-block"> 
               <input type="submit" class="btn btn-danger <?php if(empty($user_data)){ echo "disabled"; }?>" name="uni_update" value="Update">
           </div>
         </center>

       </form>
       </section>  