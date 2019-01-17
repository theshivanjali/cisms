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

      //print_r($user_data);
			}else {
        redirect();
      }

		?> 

	</h4>	
		<p class="lead" style="font-weight: 50;">
		Please Complete the Registration Form to Continue...</p>
   <!--------------Container Fluids ----->

<section class="container">		
	<form action="<?php echo base_url()."dashboard_controller/dash_mentor_details"; ?>" method="POST">
	<div class="row">
			<div class="form-group col-6  d-inline-block"> 
               <label for="First Name">First Name:</label>
               <input type="text" class="form-control" placeholder="First Name" name="ment_fname" disabled

               value="<?php echo $fname; ?>" 

               >
           </div>

           <div class="form-group col-6 mx-auto d-inline-block"> 
               <label for="Last Name">Last Name:</label>
               <input type="text" class="form-control" placeholder="Last Name" name="ment_lname" disabled
               value="<?php echo $lname; ?>" 
               >
           </div>

        </div>   
           <div class="row">  
           	<div class="form-group col-6"> 
               <label for="Email">Email:</label>
               <input type="email" class="form-control" placeholder="Email" name="ment_email" disabled

                value="<?php echo $email; ?>" 

               >
           </div>

           <div class="form-group col-6"> 
               <label for="DOB">Date of Birth:</label>
               <input type="date" class="form-control" name="ment_dob"  value="<?php if(!empty($user_data)){ echo $user_data[0]['dob']; }
               ?>"

               <?php 
                if(!empty($user_data)){
               if($user_data[0]['dob']!='NULL')
               {
                echo "disabled";
               }
             }
               ?> >
           </div>
         </div>

          <div class="form-group form-check-inline"> 
              <label for="gender" class="form-check-label">Gender:
               <input type="radio" class="form-check-input" name="ment_gender" value="m"
               <?php 
               if(!empty($user_data)){
                if($user_data[0]['gender']=='m')
                  { echo "checked"; }
              }
                ?> >Male
               <input type="radio" class="form-check-input" name="ment_gender" value="f" 
               <?php 
               if(!empty($user_data)){
                if($user_data[0]['gender']=='f')
                  { echo "checked"; }
              }
                ?> 
               >Female
               <input type="radio" class="form-check-input" name="ment_gender" value="o" 
                <?php 
               if(!empty($user_data)){
                if($user_data[0]['gender']=='o')
                  { echo "checked"; }
              }
                ?>
               >Transgender
           </label>
       </div>

        <div class="row">
       <div class="form-group col-3"> 
               <label for="city">City / Town:</label>
               <input type="text" class="form-control" name="ment_city" placeholder="City/Town" value="<?php if(!empty($user_data)){ echo $user_data[0]['city']; } ?>" >
           </div>

           <div class="form-group col-3"> 
               <label for="state">State / Province / Region:</label>
               <input type="text" class="form-control" name="ment_state" placeholder="State / Province / Region"  value="<?php if(!empty($user_data)){ 
                echo $user_data[0]['state'];
              } ?>" >
           </div>

            <div class="form-group col-3"> 
               <label for="postal">Postal Code:</label>
               <input type="number" class="form-control" name="ment_zip" placeholder="Postal Code"  value="<?php if(!empty($user_data)){ echo $user_data[0]['postal']; 
              }?>" >
           </div>

            <div class="form-group col-3"> 
               <label for="country">Country:</label>
                    <select name="ment_country" class="form-control" >

               <?php 
                $data = file_get_contents('https://restcountries.eu/rest/v2/all');
        $mydata = json_decode($data, true);
    
        foreach($mydata as $country){
        
          echo "<option value=".$country['name'].">".$country['name'] ."</option>";
         }

         foreach($mydata as $country){
          if(!empty($user_data)){
           if(($user_data[0]['country']) == ($country['name'])){
          echo "<option value=".$country['name']." selected>".$country['name']."</option>";
        }
        }
         }
        ?>

        </select>
           </div>
       </div>

            <div class="form-group"> 
               <label for="designation">Designation: </label> 
                <select class="form-control" name="ment_designation"  
                <?php 
                if(!empty($user_data)){
                  if($user_data[0]['designation']!=='NULL'){
                    echo "disabled";
                  }
                }
                   ?> >
                  <option value="AP" <?php if(!empty($user_data)){ if($user_data[0]['designation']=='AP'){ echo "selected"; }} ?>>Assistant Professor</option>
                 
                  <option value="PRO" <?php if(!empty($user_data)){ if($user_data[0]['designation']=='PRO'){ echo "selected"; }} ?>>Professor</option>
               
                  <option value="HOD" <?php if(!empty($user_data)){ if($user_data[0]['designation']=='HOD'){ echo "selected"; }} ?>>Head Of Department</option>
                   <option value="PRI" <?php if(!empty($user_data)){ if($user_data[0]['designation']=='PRI'){ echo "selected"; }} ?>>Principal</option>
                </select>
              </div>
            

	<center>
		 <div class="form-group form-check-inline"> 
              <label for="checkbox" class="form-check-label">
               <input type="checkbox" class="form-check-input" name="ment_check" required>
               I hereby declare that all the information proivided by me is correct.
           </label>
       </div>  

     	<div class="form-group"> 
               <input type="submit" class="btn btn-success <?php if(!empty($user_data)) {echo 'disabled'; } ?>" name="ment_submit" value="Submit">
               <input type="submit" class="btn btn-warning <?php if(empty($user_data)) {echo 'disabled';} ?>" name="ment_update" value="Update">
           </div>    
   </center>   

</form>

</section>