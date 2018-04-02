<?php
include 'connect.php';

$con = mysqli_connect($host , $user , $password , $database);
if(!$con)
	die("Could not connect to DB".mysqli_connect_error());
/*Функция executeSome используется для выполнения отправленного sql кода*/
function executeSome($sql){
	$con = $GLOBALS["con"];
	return mysqli_query($con , $sql);
}
function closeConnection(){
	$con = $GLOBALS["con"];
	mysqli_close($con);
}
/*Функция checkUser используется для того чтобы проверить существует ли твкой юзер*/
function checkUser($email){
	$con  = $GLOBALS["con"];
	$query = "select * from users";
	$result = mysqli_query($con , $query);
	$row = mysqli_fetch_array($result);
	if($row["email"] == $email){
		return true;
	}
	else{
		return false;
	}
}
/*Функция проверяет на неправильное заполнение email*/
function erroremail($email){
	$email_safe = htmlspecialchars($email);
	if($email_safe == ""){
		return true;
	}else{
		return false;
	}
}
/*Функция проверяет на неправильное заполнение password*/
function errorpassword($password){
	$password_safe = htmlspecialchars($password);
	if($password_safe == ""){
		return true;
	}else{
		return false;
	}
}
/*Функция проверяет схожесть password и password2*/
function checkpasswordequal($password , $password2){
	$password_safe = htmlspecialchars($password);
	$password2_safe = htmlspecialchars($password2);
	if($password_safe == "" || $password2_safe == "" || $password_safe != $password2_safe){
		return true;
	}else{
		return false;
	}
}
/*Функция registerUser используется для добавления юзера*/
function registerUser($username , $email , $password){
	$username_safe = htmlspecialchars($username);
	$email_safe = htmlspecialchars($email);
	$password_safe = htmlspecialchars($password);

	$con = $GLOBALS["con"];
	$query = "insert into users (user_username , user_email , user_password) values ('".$username_safe."' , '".$email_safe."' , '".$password_safe."')";
	mysqli_query($con , $query);
}
/*Функция loginUser используется для проверки логина и пороля*/
function loginUser($email , $password){
	$email_safe = htmlspecialchars($email);
	$password_safe = htmlspecialchars($password);
	$con = $GLOBALS["con"];
	$query = "select * from users";
	$result = mysqli_query($con , $query);
	$row = mysqli_fetch_array($result);
	if($row["user_email"] = $email_safe && $row["user_password"] = $password_safe){
		$_SESSION['safe_email'] = $email_safe;
	}
}
/* Фуникция addClient используется для добавления клиента и его информации*/
function addClient($name , $surname , $telephone , $birthdate){
	$name_safe = htmlspecialchars($name);
	$surname_safe = htmlspecialchars($surname);
	$telephone_safe = htmlspecialchars($telephone);
	$birthdate_safe = htmlspecialchars($birthdate);
	$con = $GLOBALS["con"];
	$query = "insert into client_information(client_name , client_surname , number_of_phone , date_of_birth) values (".$name_safe." , ".$surname_safe." , ".$telephone_safe." , ".$birthdate_safe.")";
	mysqli_query($con , $query);
}

?>