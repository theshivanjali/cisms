
<main role="main" class="col-md-12 ml-sm-auto col-lg-10 col-sm-12 px-4">
     
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
       //print_r($user_data);
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
	<form action="<?php echo base_url()."dashboard_controller/dash_student_details/"; ?>" method="POST">
	<div class="row">
			<div class="form-group col-6  d-inline-block"> 
               <label for="First Name">First Name:</label>
               <input type="text" class="form-control" placeholder="First Name" name="dash_fname" disabled

               value="<?php echo $fname; ?>" 

               >
           </div>

           <div class="form-group col-6 mx-auto d-inline-block"> 
               <label for="Last Name">Last Name:</label>
               <input type="text" class="form-control" placeholder="Last Name" name="dash_lname" disabled
               value="<?php echo $lname; ?>" 
               >
           </div>

        </div>   
             <div class="row">
           	<div class="form-group col-md-6 col-sm-12"> 
               <label for="Email">Email:</label>
               <input type="email" class="form-control" placeholder="Email" name="dash_email" disabled

                value="<?php echo $email; ?>" 

               >
           </div>

           <div class="form-group col-md-6 col-sm-12 "> 
               <label for="DOB">Date of Birth:</label>
               <input type="date" class="form-control" name="dash_dob" value="<?php if(!empty($user_data)){ echo $user_data[0]['dob']; } ?>"

               <?php 
                if(!empty($user_data)){
               if($user_data[0]['dob']!='NULL')
               {
                echo "disabled";
               }
             }
               ?> 

               />
           </div>
         </div>

           <div class="form-group form-check-inline"> 
              <label for="gender" class="form-check-label">Gender:
               <input type="radio" class="form-check-input" name="dash_gender" value="m"
               <?php 
               if(!empty($user_data)){
                if($user_data[0]['gender']=='m')
                  { echo "checked"; }
              }
                ?> >Male
               <input type="radio" class="form-check-input" name="dash_gender" value="f" 
               <?php 
               if(!empty($user_data)){
                if($user_data[0]['gender']=='f')
                  { echo "checked"; }
              }
                ?> 
               >Female
               <input type="radio" class="form-check-input" name="dash_gender" value="o" 
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
       <div class="form-group col-xl-3 col-md-6"> 
               <label for="city">City / Town:</label>
               <input type="text" class="form-control" name="dash_city" placeholder="City/Town"  value="<?php if(!empty($user_data)){ echo $user_data[0]['city']; } ?>">
           </div>

           <div class="form-group col-xl-3 col-md-6"> 
               <label for="state">State / Province / Region:</label>
               <input type="text" class="form-control" name="dash_state" placeholder="State / Province / Region"  value="<?php if(!empty($user_data)){ 
                echo $user_data[0]['state'];
              } ?>" >
           </div>

            <div class="form-group col-xl-3 col-md-6"> 
               <label for="postal">Postal Code:</label>
               <input type="number" class="form-control" name="dash_zip" placeholder="Postal Code"  value="<?php if(!empty($user_data)){             
                $postal = $user_data[0]['postal']; 
                echo $postal;
              }?>" >
           </div>

            <div class="form-group col-xl-3 col-md-6"> 
               <label for="country">Country:</label>
                    <select name="dash_country" class="form-control" >

               <?php 
   				// $timeget = file_get_contents('https://maps.googleapis.com/maps/api/timezone/outputFormat?parameters');
   		 $data = file_get_contents('https://restcountries.eu/rest/v2/all');
    		$mydata = json_decode($data, true);
    	//	echo $mydata[0]['name'];
    	//	echo "<select>";
    		foreach($mydata as $country){
        //date_default_timezone_set($country['timezones'][0]);
        //$date = date('H:i:s');
        	echo "<option value=".$country['name'].">".$country['name'] .// $country['nativeName'] . "( " . $country['capital'] . "  $date)
        	"</option>";
   			 }

         foreach($mydata as $country){
          if(!empty($user_data)){
           if(($user_data[0]['country']) == ($country['name'])){
          echo "<option value=".$country['name']." selected>".$country['name']."</option>";
        }
        }
         }
    		// echo "</select>";
    		// echo "<pre>";
    		// print_r($mydata);
    		// echo "</pre>";

   			 ?>

   			</select>

              <!--  <input type="text" class="form-control" name="dash_country" placeholder="Country"> -->
           </div>
       </div>
      
           <div class="row">
           	
            <div class="form-group col-xl-6 col-md-12"> 
               <label for="course">Course Enrolled: </label>
               <select name="dash_course" class="form-control"  
               <?php 
                if(!empty($user_data)){
               if($user_data[0]['course']!='NULL')
               {
                echo "disabled";
               }
             }
               ?>
                >
                             	<option value="BTech"  
                <?php 
                if(!empty($user_data)){
                 if($user_data[0]['course']=='BTech'){ echo "selected"; }} ?> >Bachelor Of Technology</option>
               
               	<option value="BCA" <?php 
                if(!empty($user_data)){
                  if($user_data[0]['course']=='BCA'){ echo "selected"; }} ?>
                   >Bachelor in Computer Applications</option>
               
               	<option value="BBA" <?php 
                if(!empty($user_data)){
                  if($user_data[0]['course']=='BBA'){ echo "selected"; }} ?> 
                  >Bachelor in Business Administration</option>
               
               	<option value="BSC" <?php 
                if(!empty($user_data)){
                  if($user_data[0]['course']=='BSC'){ echo "selected"; }} ?> >Bachelor in Science</option>
               	
                <option value="BCOM" <?php 
                if(!empty($user_data)){
                  if($user_data[0]['course']=='BCOM'){ echo "selected"; }} ?> >Bachelor in Commerece</option>
               	
                 <option value="BA" <?php 
                 if(!empty($user_data)){
                  if($user_data[0]['course']=='BA'){ echo "selected"; }} ?> >Bachelor in Arts</option>
               	</select>
           </div>

            <div class="form-group col-xl-4 col-md-6"> 
               <label for="yop">Year of Passing: </label>
               <select name="dash_yop" class="form-control"   <?php 
                if(!empty($user_data)){
               if($user_data[0]['yop']!='NULL')
               {
                echo "disabled";
               }
             }
               ?>  >
               


               	<?php for($i = 2000; $i<=2025; $i++){

               		echo "<option value=".$i.">".$i."</option>";
               	}         

                  for($i = 2000; $i<=2025; $i++){
                  if(!empty($user_data)){
                    if($user_data[0]['yop']==$i)
                      echo "<option value=".$i." selected>".$i."</option>";
                    }
                  }
                ?>
               	

               </select>
           </div>

           	 <div class="form-group col-xl-2 col-md-6"> 
               <label for="marks">Marks Obtained: </label>
				  <input type="number" class="form-control" name="dash_marks" placeholder="Marks %" value="<?php 
          if(!empty($user_data)){
           echo $user_data[0]['marks'];} ?>"      
            <?php 
                if(!empty($user_data)){
               if($user_data[0]['marks']!='NULL')
               {
                echo "disabled";
               }
             }
               ?>   >              
				</div>
       </div>

       <div class="form-group col-12"> 
               <label for="college">College Name: </label>
               <input type="text" class="form-control" name="dash_college" placeholder="College Name"  value="<?php 
               if(!empty($user_data)){
                echo $user_data[0]['college']; } ?>" >
           </div>

	<center>
		 <div class="form-group form-check-inline"> 
              <label for="checkbox" class="form-check-label">
               <input type="checkbox" class="form-check-input" name="dash_check" required>
               I hereby declare that all the information proivided by me is correct.
           </label>
       </div><br>  
        	<div class="form-group d-inline-block"> 
               <input type="submit" class="btn btn-success <?php if(!empty($user_data)){ echo "disabled"; }?>" name="dash_submit" value="Submit">
           </div>
           <div class="form-group d-inline-block"> 
               <input type="submit" class="btn btn-danger <?php if(empty($user_data)){ echo "disabled"; }?>" name="dash_update" value="Update">
           </div>
         </center>
     
     <!-- 
               <a href="<?php echo base_url()."dashboard_controller/update_student_details/"; ?>" 
                class="btn btn-warning" name="dash_update" value="Update">Update</a> -->
  </form>

</section>



