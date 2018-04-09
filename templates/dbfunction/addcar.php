<?php
session_start();

if(isset($_POST["add_car"])){
$mass = $_POST["mass"];
$marka = $_POST["marka"];
$nomber = $_POST["nomber"];
$user_email = $_SESSION["safe_email"];


include 'connect.php';
	$con = mysqli_connect($host , $user , $password , $database);
	if(!$con)
		die("Could not connect to DB".mysqli_connect_error());
	
	else {
	echo "Error ".mysqli_error($con);
	}
	
	$sql1 = "insert into car ( mass , nomber , marka , user_email)
						values  ('$mass', '$nomber' , '$marka' , '$user_email')";
	
	if(mysqli_query($con,$sql1))
	{
	echo "Successful!";
	
	mysqli_close($con);
	header("Location: /sait/add-car.php");
	}
	else {
	echo "Error ".mysqli_error($con);
	
	mysqli_close($con);
	exit($con);
	}
		
	}
?>