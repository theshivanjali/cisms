<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

 <?php 

			if($this->session->has_userdata('log_email')){		
			$fname = $this->session->userdata('fname');
			$lname = $this->session->userdata('lname');
			}else {
        redirect();
      }

		?> 

<section>

	<div class="row">
		<div class="col-10">
	<h4><?php echo "Hello, ".$fname." ".$lname."! "; ?></h4>
</div>
<div class="col-2">
	<a href="<?php echo base_url().'dashboard_controller/university_dashboard'; ?>" name="stu_update" class="btn btn-danger mb-3 mt-0" style="margin-left: 62px !important;">Update Details</a>
</div>
	
<table class="table table-borderless text-center table-striped table-hover">
	<thead class="bg-dark text-light">
		<tr>
			<td>Colleges</td>
			<td>Seats</td>
		</tr>
	</thead>
	<tbody>
				<?php 

				foreach ($details as $row) {
					// echo "<td>".$i."</td>";
					echo "<tr>";
					echo "<td>".$row['college1']."</td>";
					echo "<td>".$row['seats1']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>".$row['college2']."</td>";
					echo "<td>".$row['seats2']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>".$row['college3']."</td>";
					echo "<td>".$row['seats3']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>".$row['college4']."</td>";
					echo "<td>".$row['seats4']."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>".$row['college5']."</td>";
					echo "<td>".$row['seats5']."</td>";
					echo "</tr>";
				}

			?>
		</tbody>
</table>

</section>