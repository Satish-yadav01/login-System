<?php
session_start();   
$username=$_POST['username'];
$password= $_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logindb');

$q= "SELECT * FROM users where username= '$username' AND password= '$password' ";
$result= mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num!=1)
{
	echo "satish";
	$_SESSION['username']= $username;
	header('location:http://localhost/login/home.php');
}

else
{
	echo "entered wrong password";
	header('location:http://localhost/login/Login_form.html');
}