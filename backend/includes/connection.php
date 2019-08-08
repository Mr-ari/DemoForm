<?php 

	
	define("HOSTNANME","localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DBNAME", "DemoForm");

	$con = mysqli_connect(HOSTNANME,USERNAME,PASSWORD,DBNAME) or die("can not connect to database");


 ?>