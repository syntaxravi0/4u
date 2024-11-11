<?php
$a=$_GET['em'];
$con=mysqli_connect("localhost","root","","oct");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="delete from prac where email='$a'";
mysqli_query($con,$q);
header("location: showall.php");
}
?>
