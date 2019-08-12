<?php require 'includes/connection.php' ?>
<?php 

	if(isset($_POST['login'])){


		$user_name = $_POST['user'];
		$pass = $_POST['pass'];

		$query = "select * from users where user_name = '$user_name' and password = '$pass'";

		$fire = mysqli_query($con,$query) or die(mysqli_error());

		$counter=mysqli_num_rows($fire);

		if($counter==0){
			echo "<script type='text/javascript'>alert('Invalid Username or Password!');
			  document.location='../index.php'</script>";
		}

		else{
			echo "<script type='text/javascript'>
			  document.location='../show_data.php'</script>";
		}

	}

 ?>