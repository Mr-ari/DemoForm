<?php require 'includes/connection.php' ?>


<?php 

	
	if(isset($_POST['save'])){


		if(isset($_POST['accept'])){

			$target_dir = "../files/photo/";
			$photo_name = basename($_FILES["photoup"]["name"]);
			$target_file = $target_dir . basename($_FILES["photoup"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			    $check = getimagesize($_FILES["photoup"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }

			// Check file size
			if ($_FILES["photoup"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["photoup"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["photoup"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}


			$target_dir = "../files/signature/";
			$sig_name = basename($_FILES["sigup"]["name"]);
			$target_file = $target_dir . basename($_FILES["sigup"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			    $check = getimagesize($_FILES["photoup"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }

			// Check file size
			if ($_FILES["sigup"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["sigup"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["photoup"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}

			$sig_path = $target_file;


			$fname = $_POST['name'];
			$dob = date('Y-m-d',strtotime($_POST['dob']));
			$gender = $_POST['gender'];
			$address = $_POST['addr'];
			$ph_no = $_POST['no'];
			$email = $_POST['email'];
			$ten_b = $_POST['tenth_board'];
			$ten_marks = $_POST['tenth_marks'];
			$ten_years = $_POST['tenth_year'];
			$tw_b = $_POST['tw_board'];
			$tw_marks = $_POST['tw_marks'];
			$tw_years = $_POST['tw_year'];


			$query = "INSERT INTO `user_details`(`id`, `name`, `dob`, `gender`, `address`, `phone`, `email`, `ten_board`, `tw_board`, `ten_year`, `tw_year`, `ten_marks`, `tw_marks`, `photo_loc`, `signature_loc`) VALUES (null,'$fname','$dob','$gender','$address','$ph_no','$email','$ten_b','$tw_b','$ten_years','$tw_years','$ten_marks','$tw_marks','$photo_name','$sig_name')";

			$fire = mysqli_query($con,$query) or die(mysqli_error($con));
			echo "<script type='text/javascript'>alert('Form Submitted');document.location='../index.php'</script>";

		}
		else{
		echo "<script type='text/javascript'>alert('Please accept Terms and Conditions !!');document.location='../index.php'</script>";
	}

	}



 ?>