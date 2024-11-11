<?php
$em=$_POST['e1'];
$con=mysqli_connect("localhost","root","","org");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from Applicant where email='$em'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
echo "<table border='1'>";
echo "<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>Hindi</th>
<th>English</th>
<th>City</th>
<th>MobileNo</th>
<th>Address</th>";
echo "<tr>";
echo "<td>". $r[0]."</td>";
echo "<td>".$r[1]."</td>";
echo "<td>".$r[2]."</td>";
echo "<td>".$r[3]."</td>";
echo "<td>".$r[4]."</td>";
echo "<td>".$r[5]."</td>";
echo "<td>".$r[6]."</td>";
echo "<td>".$r[7]."</td>";
echo "<td>".$r[8]."</td>";
echo "<td>".$r[9]."</td>";
echo "</tr>";
}
?>
