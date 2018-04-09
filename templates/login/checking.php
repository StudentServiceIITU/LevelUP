<?php
include_once '../dbfunction/functioni.php';
if(isset($_POST["login"])){
	$email = $_POST["email"];
	$password = $_POST["pass"];
	
	$loginUser = loginUser($email , $password);
	if($loginUser == false){
		header('Location: ../mainpage/mainpageGUEST.php');
	}
	else{
		echo "You can not login";
	}
}
?>