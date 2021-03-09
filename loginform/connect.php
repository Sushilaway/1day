<?php
$username = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root', '','test')
if($con->connect_error){
	die('Connection Failed :'.$con->connect_error);

}
else{
	$stmt = $conn->prepare("insert into registration(email,password) values(?,?)");
	$stmt->bind_param("ss",$email,$password);
	$stmt->execute();
	echo"registration successful..";
	$stmt->close();
	$conn->close();

}
?>