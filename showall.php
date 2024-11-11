<?php
$con=mysqli_connect("localhost","root","","oct");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from prac";
$res=mysqli_query($con,$q);

echo "<table border='1'>
<tr>
<td>Name</td>
<td>Password</td>
<td>Email</td>
<td>DOB</td>
<td>Phone</td>
<td>Gender</td>
<td>Lang1</td>
<td>Lang2</td>
<td>Course</td>
<td>cmt</td>

<td>deleteNow</td>
<td>EditNow</td></tr>";
while($r=mysqli_fetch_row($res))
{
echo "<tr>";
echo"<td>".$r[0]."</td>";
echo"<td>".$r[1]."</td>";
echo"<td>".$r[2]."</td>";
echo"<td>".$r[3]."</td>";
echo"<td>".$r[4]."</td>";
echo"<td>".$r[5]."</td>";
echo"<td>".$r[6]."</td>";
echo"<td>".$r[7]."</td>";
echo"<td>".$r[8]."</td>";
echo"<td>".$r[9]."</td>";

echo "<td><a href=del.php?em=".$r[2].">Delete</a></td>";
echo "<td><a href=update.php?em=".$r[2].">Edit</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>
