<?php
session_start();
$email=$_POST['e1'];

$password=$_POST['p1'];

$con=mysqli_connect("localhost","root","","oct");

if (!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select password,name from prac where email='$email'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
if($r[0]==$password)
{
	$_SESSION['na']=$r[1];
	$_SESSION['em']=$email;
  header("location:home.php");
}
else  
   header("location:error.html");
}
?>
