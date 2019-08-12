<?php require 'backend/includes/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
</head>
<body>

	


	<div class="container"> 
	<div class="d-inline">
	 <div class="pull-right">
	      <div>
	      	<a href="index.php">
	      		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login-modal">Log Out</button>

	      	</a>
	      	</div>
	      </div>
	</div>
	<div class="d-inline">
	  <h1 style="color: blue">Form Data</h1>
	</div> 
	<hr>      
	  <table class="table table-bordered">
		<thead>
			<th>Sl.no</th>
			<th>Name</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Address</th>
			<th>Phone NO</th>
			<th>Email</th>
			<th>10th Board</th>
			<th>10th Marks</th>
			<th>Passing Year</th>
			<th>12th Board</th>
			<th>12th Marks</th>
			<th>Passing Year</th>
			<th>Photo</th>
			<th>Signature</th>

		</thead>

		<tbody>
			<?php 

				$query = "select * from user_details";
				$fire = mysqli_query($con,$query) or die(mysqli_error($con));
				$loop = 1;
				while($row = mysqli_fetch_array($fire)){ ?>
					<tr>
						<td><?php echo $loop ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['gender'] ?></td>
						<td><?php echo $row['dob'] ?></td>
						<td><?php echo $row['address'] ?></td>
						<td><?php echo $row['phone'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['ten_board'] ?></td>
						<td><?php echo $row['ten_marks'] ?></td>
						<td><?php echo $row['ten_year'] ?></td>
						<td><?php echo $row['tw_board'] ?></td>
						<td><?php echo $row['tw_marks'] ?></td>
						<td><?php echo $row['tw_year'] ?></td>
						<td><img src="<?php echo "files/Photo/".$row['photo_loc'] ?>" width="75" height="75"></td>
						<td><img src="<?php echo "files/Signature/".$row['signature_loc'] ?>" width="75" height="75"></td>				

					</tr>
					
			 <?php  
			 		$loop++;
				} 
			?>
			

		</tbody>
			


	</table>



</body>
</html>
