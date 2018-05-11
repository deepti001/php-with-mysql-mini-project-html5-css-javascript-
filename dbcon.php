<?php
// This file is to check is the connection established or not
$con = mysqli_connect("localhost","root","","sms");

if($con == false){
	echo "Connection with Database is not done";
}
?>
