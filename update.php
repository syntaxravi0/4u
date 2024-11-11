<?php
$em=$_GET['em'];
$con=mysqli_connect("localhost","root","","oct");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from prac where email='$em'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
}
?>

<html>
<body>
<form action="upd.php" method="post">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="n1" value="<?php echo $r[0];?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="pwd" name="p1" value="<?php echo $r[1];?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="e1" readonly="true" value="<?php echo $_GET['em']?>"></td>
</tr>
<tr>
<td>DOB</td>
<td><input type="date" name="d1" value="<?php echo $r[3];?>"></td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="phn" value="<?php echo $r[4];?>"></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="r1" value="male">Male
    <input type="radio" name="r1" value="female">Female</td>
</tr>
<tr>
<td>Language</td>
<td><input type="checkbox" name="c1" value="Hindi">Hindi
    <input type="checkbox" name="c2" value="English">English</td>
</tr>
<tr>
<td>Course</td>
<td><select name="s1">
<option value="PHP">PHP</option>
<option value="ASP">ASP</option>
<option value="Java">Java</option>
</select>
</td>
</tr>
<tr>
<td>cmt</td>
<td><input type="text" name="cmt" value="<?php echo $r[9];?>"></td>
</tr>
<tr>
<td><input type="submit" value="Update"></td>

</tr>
</table>
</form>
</body>
</html>
