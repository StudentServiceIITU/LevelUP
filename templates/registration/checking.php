<?php
include '../dbfunction/functioni.php';
if(isset($_POST["registration"])){
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["pass"];
	$confirmPass = $_POST["confirmPass"];
	
	$checkuseremail = checkUser($email);
	if($checkuseremail == false){
		$checkpasswordtoequal = checkpasswordequal($password , $confirmPass);
		if($checkpasswordtoequal == false){
			$registeruser = registerUser($username , $email , $password);
			if($registeruser == false){
				header('Location: ../mainpage/mainpageGUEST.php');
			}
			else{
				echo "They have some problem obratis k adminu";
			}
		}
		else{
			echo "The password does not equal";
		}
	}
	else{
		echo "This user are exist";
	}
}
?>