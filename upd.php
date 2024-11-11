<?php
$em=$_POST['e1'];
$a=$_POST['n1'];
$b=$_POST['p1'];
$c=$_POST['d1'];
$d=$_POST['phn'];

$con=mysqli_connect("localhost","root","","oct");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="update prac set Name='$a',password='$b',date='$c',phone='$d',where email='$em'";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
header("location: showall.php");
else
echo "Email or password is wrong";
}
?>