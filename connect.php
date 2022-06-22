<?php
$uname=$_POST['uname'];
$phnnum=$_POST['phnnum'];
$email=$_POST['email'];
$pswrd=$_POST['pswrd'];

$conn=new mysqli("localhost","root", "", "test2");
if($conn->connect_error){
	die("Connection failed : " .$conn->connect_error);
} else {
	$stmt=$conn->prepare("insert into registration(uname, phnnum, email, pswrd) values (?, ?, ?, ?) ");
	$stmt->bind_param("siss", $uname, $phnnum, $email, $pswrd);  
	$stmt->execute();
	echo"registration successfully";
	$stmt->close();
	$conn->close();
}

?>