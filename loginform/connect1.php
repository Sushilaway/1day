<?php
$username = filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
if(!empty($username)){

if(!empty($password)){
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="youtub";


}
else
echo "password should not be empty";
}
else{
	echo "username shouldnot be empty";
	die();
}
?>