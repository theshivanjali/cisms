<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Success
	</title>
</head>
<body>	<?php
		echo "<pre>";
		print_r($user_data);
		echo "</pre>";

      echo $user_data[0]['country'];

 ?>

    
    <select name="dash_country" class="form-control">

               <?php 
          // $timeget = file_get_contents('https://maps.googleapis.com/maps/api/timezone/outputFormat?parameters');
       $data = file_get_contents('https://restcountries.eu/rest/v2/all');
        $mydata = json_decode($data, true);
      //  echo $mydata[0]['name'];
      //  echo "<select>";
        foreach($mydata as $country){
        //date_default_timezone_set($country['timezones'][0]);
        //$date = date('H:i:s');
          echo "<option value=".$country['name'].">".$country['name'] .// $country['nativeName'] . "( " . $country['capital'] . "  $date)
          "</option>";
         }

        //  foreach($mydata as $country){
        //    if(($user_data[0]['country']) == ($country['name'])){
        //   echo "<option value=".$country['name']." selected>".$country['name']."</option>";
        // }
         
        // echo "</select>";
        // echo "<pre>";
        // print_r($mydata);
        // echo "</pre>";

         ?>

        </select>


<!-- 
 		<div class="form-group col-4"> 
               <label for="yop">Year of Passing: </label>
               <select name="dash_yop" class="form-control">


               	<?php for($i = 2000; $i<=2025; $i++){

               		echo "<option value=".$i.">".$i."</option>";
               	}         
               		
                ?>
               	

               </select>
           </div> -->



		<h1>Yeah! Success!<h1>
</body>
</html>