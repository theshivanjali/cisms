<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<?php 

	// echo "<pre>";
	// print_r($details);
	// echo "<pre>";


	// foreach ($details as $row) {
	// 	echo $row['fname'];
	// } ?>
<script language='javascript'>

$(document).ready(function() {
    $("#checkedAll").change(function() {
        if (this.checked) {
            $(".checkSingle").each(function() {
                this.checked=true;
            });
        } else {
            $(".checkSingle").each(function() {
                this.checked=false;
            });
        }
    });

    $(".checkSingle").click(function () {
        if ($(this).is(":checked")) {
            var isAllChecked = 0;

            $(".checkSingle").each(function() {
                if (!this.checked)
                    isAllChecked = 1;
            });

            if (isAllChecked == 0) {
                $("#checkedAll").prop("checked", true);
            }     
        }
        else {
            $("#checkedAll").prop("checked", false);
        }
    });
});


</script>
<section class="table-responsive-lg">

<form name="form" action="<?php echo base_url().'dashboard_controller/delete_all' ?>" method="POST">
	
<table class="table table-borderless text-center table-striped table-hover">
	<thead class="bg-dark text-light">
		<tr>
			<td><input type="checkbox" id="checkedAll" name="selectAll"></td>
			<td>Picture</td>
			<td>Name</td>
			<td>Email</td>
			<td>DOB</td>
			<td>College</td>
			<td>Course</td>
			<td>YOP</td>
			<td>Marks</td>
			<td>City</td>
			<td>State</td>
			<td>Delete</td>
			
		</tr>
	</thead>
	<tbody>
				<?php 
				foreach ($details as $row) {
					// echo "<td>".$i."</td>";
					echo "<tr>"; 
					echo "<td><input type='checkbox' value='".$row['id']."' class='checkSingle' name='select[]'></td>";
					echo "<td>";
					echo "<img src='".base_url().'assets/img/profile_pics/'.$row['stu_pic']."' class='img-thumbnail' height='72px' width='72px'";
					echo "</td>";
					echo "<td>".$row['fname']." ".$row['lname']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['dob']."</td>";
					echo "<td>".$row['college']."</td>";
					echo "<td>".$row['course']."</td>";
					echo "<td>".$row['yop']."</td>";
					echo "<td>".$row['marks']." %</td>";
					echo "<td>".$row['city']."</td>";
					echo "<td>".$row['state']."</td>";
					echo "<td>".anchor('dashboard_controller/delete_student?id='.$row['id'], '<i class="fas fa-trash-alt" style="color:red;"></i>', array('onclick' => "return confirm('Do you want delete this record?')"))."</td>";
					// echo "<td><a href='' style='color:red;'><i class='fas fa-trash-alt'></i></a>"."</td>";
					echo "</tr>";
				}

			?>
		</tbody>
</table>

<div class="d-flex flex-row justify-content-between">
<input type="submit" class="btn btn-danger mt-1" value="Delete Selected" name="deleteall">
<a href="#" class="btn btn-success mt-1">Export Data</a>
</div>
</form>
</section>